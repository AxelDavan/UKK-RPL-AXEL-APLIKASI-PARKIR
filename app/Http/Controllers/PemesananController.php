<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\SlotParkir;
use App\Models\StatusPayment;
use Illuminate\Http\Request;

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
        // 1. Validasi input (kendaraan_id dibuat nullable / tidak wajib)
        $request->validate([
            'slot_parkir_id' => 'required|exists:slot_parkirs,id',
            'kendaraan_id'   => 'nullable|exists:kendaraans,id', // BISA KOSONG SAAT BELI SLOT
            'tanggal_mulai'  => 'required|date',
            'durasi'         => 'required|string',
            'tipe_booking'   => 'required|string',
        ]);

        // 2. Simpan data Pemesanan
        $pemesanan = Pemesanan::create([
            'user_id'        => auth()->id(),
            'slot_parkir_id' => $request->slot_parkir_id,
            'kendaraan_id'   => $request->kendaraan_id ?? null, // Isikan NULL jika belum ada kendaraan
            'tanggal_mulai'  => $request->tanggal_mulai,
            'durasi'         => $request->durasi,
            'tipe_booking'   => $request->tipe_booking,
            'catatan'        => $request->catatan,
            'status'         => 'pending',
        ]);

        // 3. Hitung nominal berdasarkan durasi yang dipilih
        $amount = match ($request->durasi) {
            '12 Bulan (1 Tahun)' => 3600000,
            '6 Bulan'            => 2100000,
            '1 Bulan'            => 400000,
            'Permanen Unit'      => 15000000,
            default              => 3600000,
        };

        // 4. Simpan ke database pembayaran
        $payment = StatusPayment::create([
            'user_id'        => auth()->id(),
            'pemesanan_id'   => $pemesanan->id,
            'slot_parkir_id' => $request->slot_parkir_id,
            'order_id'       => 'SP-' . date('Ymd') . '-' . rand(100, 999),
            'amount'         => $amount,
            'status'         => 'pending',
        ]);

        // 6. Redirect user langsung ke halaman pembayaran
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
            $payment->pemesanan()->update([
                'status' => 'aktif'
            ]);

            $payment->slotParkir()->update([
                'status' => 'dipesan'
            ]);
        }

        $statuspayment = $payment;
        return view('payment.status', compact('statuspayment'));
    }
}