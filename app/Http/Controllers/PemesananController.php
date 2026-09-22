<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\SlotParkir;
use App\Models\StatusPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $kendaraans = Kendaraan::where('user_id', $user->id)->get();
        $areas = AreaParkir::all();

        $pemesananAktif = Pemesanan::with(['slotParkir.areaParkir', 'kendaraan'])
            ->where('user_id', $user->id)
            ->where('status', 'aktif')
            ->latest()
            ->first();

        $riwayatPemesanan = Pemesanan::with(['slotParkir.areaParkir', 'kendaraan'])
            ->where('user_id', $user->id)
            ->whereIn('status', ['aktif', 'batal'])
            ->latest()
            ->get();

        $slotParkir = SlotParkir::with('kendaraan')->get();

        $payment = StatusPayment::where('user_id', $user->id)->latest()->first();

        return view('dashboard.owner.pemesanan', compact(
            'user',
            'kendaraans',
            'areas',
            'pemesananAktif',
            'riwayatPemesanan',
            'slotParkir',
            'payment',
        ));
    }

    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'slot_parkir_id' => 'required|exists:slot_parkirs,id',
            'kendaraan_id'   => 'nullable|exists:kendaraans,id',
            'tanggal_mulai'  => 'required|date',
            'durasi'         => 'required|string',
            'tipe_booking'   => 'required|string',
        ]);

        // Ambil data slot parkir untuk mendapatkan kode 
        $slotParkir = SlotParkir::findOrFail($request->slot_parkir_id);
        $kodeAsli = $slotParkir->kode_slot;

        // Pisahkan huruf depan dan nomor slot
        $parts = explode('-', $kodeAsli);
        $hurufAwal = $parts[0];
        $nomorSlot = $parts[1] ?? '01';

        $tanggalHariIni = date('Ymd');
        $kodeBookingDinamis = strtoupper($hurufAwal) . '-' . $tanggalHariIni . '-' . $nomorSlot;

        // 2. Simpan data Pemesanan
        $pemesanan = Pemesanan::create([
            'user_id'        => auth()->id(),
            'slot_parkir_id' => $request->slot_parkir_id,
            'kendaraan_id'   => $request->kendaraan_id ?? null,
            'tanggal_mulai'  => $request->tanggal_mulai,
            'durasi'         => $request->durasi,
            'tipe_booking'   => $request->tipe_booking,
            'catatan'        => $request->catatan,
            'status'         => 'pending',
        ]);

        // 3. Cek apakah slot yang dipilih adalah VIP (Harga Khusus)
        $isVip = str_starts_with(strtoupper($kodeAsli), 'VIP');

        if ($isVip) {
            $amount = match ($request->durasi) {
                '12 Bulan (1 Tahun)' => 5000000,
                '6 Bulan'            => 3000000,
                '1 Bulan'            => 600000,
                'Permanen Unit'      => 20000000,
                default              => 5000000,
            };
        } else {
            $amount = match ($request->durasi) {
                '12 Bulan (1 Tahun)' => 3600000,
                '6 Bulan'            => 2100000,
                '1 Bulan'            => 400000,
                'Permanen Unit'      => 15000000,
                default              => 3600000,
            };
        }

        // 4. Simpan ke database pembayaran
        $payment = StatusPayment::create([
            'user_id'        => auth()->id(),
            'pemesanan_id'   => $pemesanan->id,
            'slot_parkir_id' => $request->slot_parkir_id,
            'order_id'       => $kodeBookingDinamis,
            'amount'         => (int) $amount,
            'status'         => 'pending',
        ]);

        return redirect()->route('payment', $payment->id);
    }

    public function getSlots(Request $request)
    {
        $areaId = $request->get('area_id');

        $query = SlotParkir::query();
        if ($areaId) {
            $query->where('area_parkir_id', $areaId);
        }

        $slots = $query->get()->map(function ($slot) {
            return [
                'id'         => $slot->id,
                'kode_slot'  => $slot->kode_slot,
                'status'     => $slot->status,
            ];
        });

        return response()->json($slots);
    }

    public function status($id)
    {
        $payment = StatusPayment::with(['pemesanan', 'slotParkir'])->findOrFail($id);

        if ($payment->status === 'berhasil') {
            $pemesanan = $payment->pemesanan;

            if ($pemesanan) {
                if ($pemesanan->status === 'aktif') {
                    $durasiBaru = match ((int) $payment->amount) {
                        5000000, 3600000 => '12 Bulan (1 Tahun)',
                        3000000, 2100000 => '6 Bulan',
                        600000, 400000   => '1 Bulan',
                        default          => '1 Bulan',
                    };

                    $pemesanan->update([
                        'durasi' => $pemesanan->durasi . ' + ' . $durasiBaru,
                    ]);
                } else {
                    $pemesanan->update([
                        'status' => 'aktif'
                    ]);
                }
            }

            if ($payment->slotParkir && $payment->slotParkir->status !== 'terisi') {
                $payment->slotParkir()->update([
                    'status' => 'dipesan'
                ]);
            }
        }

        $statuspayment = $payment;
        
        return view('payment.status', compact('payment', 'statuspayment'));
    }

    public function daftarKode()
    {
        $user = Auth()->user();

        $pemesanans = Pemesanan::with(['slotParkir', 'areaParkir', 'kendaraan'])
        ->where('user_id', $user->id)
        ->latest()
        ->get();

        return view('dashboard.owner.kode', compact('user', 'pemesanans'));
    }

    public function detailKarcis($id)
    {
        $user = auth()->user();
        
        $pemesanan = Pemesanan::with(['slotParkir.areaParkir', 'kendaraan', 'statusPayment'])
            ->where('user_id', $user->id)
            ->findOrFail($id);

        $kodeBooking = optional($pemesanan->statusPayment)->order_id;
        if (!$kodeBooking && $pemesanan->slotParkir) {
            $parts = explode('-', $pemesanan->slotParkir->kode_slot);
            $huruf = $parts[0] ?? 'A';
            $nomor = $parts[1] ?? '01';
            $tanggal = \Carbon\Carbon::parse($pemesanan->created_at)->format('Ymd');
            $kodeBooking = strtoupper($huruf) . '-' . $tanggal . '-' . $nomor;
        } elseif (!$kodeBooking) {
            $kodeBooking = 'SP-' . $pemesanan->id;
        }

        return view('dashboard.owner.karcis-detail', compact('user', 'pemesanan', 'kodeBooking'));
    }

    public function perpanjang(Request $request, $id)
    {
        $request->validate([
            'durasi_perpanjangan' => 'required|string',
        ]);

        $user = auth()->user();
        $pemesanan = Pemesanan::with('statusPayment', 'slotParkir')->where('user_id', $user->id)->findOrFail($id);

        $tambahDurasi = $request->durasi_perpanjangan;
        $slotParkir = $pemesanan->slotParkir;
        
        // Cek apakah slot yang diperpanjang merupakan VIP (Harga Khusus)
        $isVip = $slotParkir ? str_starts_with(strtoupper($slotParkir->kode_slot), 'VIP') : false;

        if ($isVip) {
            $amount = match ($tambahDurasi) {
                '12 Bulan (1 Tahun)' => 5000000,
                '6 Bulan'            => 3000000,
                '1 Bulan'            => 600000,
                default              => 600000,
            };
        } else {
            $amount = match ($tambahDurasi) {
                '12 Bulan (1 Tahun)' => 3600000,
                '6 Bulan'            => 2100000,
                '1 Bulan'            => 400000,
                default              => 400000,
            };
        }

        $kodeBookingPaten = optional($pemesanan->statusPayment)->order_id;
        if (!$kodeBookingPaten && $slotParkir) {
            $parts = explode('-', $slotParkir->kode_slot);
            $huruf = $parts[0] ?? 'A';
            $nomor = $parts[1] ?? '01';
            $tanggal = \Carbon\Carbon::parse($pemesanan->created_at)->format('Ymd');
            $kodeBookingPaten = strtoupper($huruf) . '-' . $tanggal . '-' . $nomor;
        }

        $payment = StatusPayment::create([
            'user_id'        => $user->id,
            'pemesanan_id'   => $pemesanan->id,
            'slot_parkir_id' => $pemesanan->slot_parkir_id,
            'order_id'       => $kodeBookingPaten, 
            'amount'         => (int) $amount,
            'status'         => 'pending',
            'catatan'        => 'Perpanjangan: ' . $tambahDurasi
        ]);

        return redirect()->route('payment', $payment->id);
    }
}