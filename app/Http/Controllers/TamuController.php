<?php

namespace App\Http\Controllers;

use App\Models\SlotParkir;
use App\Models\Tamu;
use App\Models\TransaksiParkir;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    private $totalKapasitasTamu = 150;

    public function index(Request $request)
    {
        // 1. Hitung Card Statistik dari Tabel Tamu
        $sedangBerkunjung = Tamu::where('status', 'di_dalam')->count();
        $sudahCheckout    = Tamu::where('status', 'selesai')->count();
        $totalHariIni     = Tamu::whereDate('created_at', Carbon::today())->count();
        
        $totalSlotTamu    = $this->totalKapasitasTamu;
        $parkirTerisi     = $sedangBerkunjung;

        // 2. Query List Tamu Undangan (Lengkap dengan Relasi User/Pengundang)
        $query = Tamu::with('user')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_tamu', 'like', "%{$search}%")
                  ->orWhere('nomor_plat', 'like', "%{$search}%")
                  ->orWhereHas('user', function($u) use ($search) {
                      $u->where('name', 'like', "%{$search}%");
                  });
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'checked-in') {
                $query->where('status', 'di_dalam');
            } elseif ($request->status === 'checked-out') {
                $query->where('status', 'selesai');
            }
        }

        $daftartamu = $query->paginate(10);
        $pengunjung = $daftartamu;

        return view('dashboard.admin.tamu', compact(
            'daftartamu',
            'sedangBerkunjung',
            'sudahCheckout',
            'totalHariIni',
            'parkirTerisi',
            'totalSlotTamu',
            'pengunjung'
        ));
    }

    public function checkout($id)
    {
        $tamu = Tamu::findOrFail($id);
        $tamu->update([
            'waktu_keluar' => Carbon::now(),
            'status'       => 'selesai'
        ]);

        // Sync ke transaksi parkir jika ada
        TransaksiParkir::where('tamu_id', $tamu->id)->update([
            'waktu_keluar' => Carbon::now(),
            'status'       => 'selesai'
        ]);

        return redirect()->back()->with('success', 'Pengunjung berhasil Check-Out.');
    }

    public function destroy($id)
    {
        $tamu = Tamu::findOrFail($id);
        $tamu->delete();

        return redirect()->back()->with('success', 'Data pengunjung berhasil dihapus.');
    }

    // Generate QR dari resident
    public function store(Request $request)
    {
        $request->validate([
            'nama_tamu'       => 'required|string|max:90',
            'nomor_whatsapp'  => 'required|string|max:20',
            'jenis_kendaraan' => 'required|in:mobil,motor',
            'nomor_plat'      => 'required|string|max:15',
            'waktu_kunjungan' => 'required',
        ]);

        $kodeUnik = 'INV-' . date('Y') . '-' . rand(1000, 9999);

        $tamu = Tamu::create([
            'user_id'         => Auth::id(),
            'kode_unik'       => $kodeUnik,
            'nama_tamu'       => $request->nama_tamu,
            'nomor_whatsapp'  => $request->nomor_whatsapp,
            'jenis_kendaraan' => strtolower($request->jenis_kendaraan),
            'nomor_plat'      => strtoupper($request->nomor_plat),
            'waktu_kunjungan' => $request->waktu_kunjungan,
            'status'          => 'menunggu',
        ]);

        return response()->json([
            'success'   => true,
            'message'   => 'QR Pass Tamu Berhasil Diterbitkan!',
            'data'      => $tamu->load('user'),
            'kode_unik' => $kodeUnik
        ]);
    }

    public function processScanMasuk(Request $request)
    {
        try {
            $request->validate([
                'kode_unik' => 'required|string'
            ]);
    
            $tamu = Tamu::with('user')->where('kode_unik', $request->kode_unik)->first();
    
            if (!$tamu) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Kode Tiket / QR Pass tidak ditemukan!'
                ], 404);
            }
    
            if ($tamu->status === 'di_dalam') {
                return response()->json([
                    'success' => false, 
                    'message' => 'Tamu dengan QR ini sudah berada di dalam area parkir!'
                ], 400);
            }
    
            $now = Carbon::now();
    
            // Update status tamu langsung di tabel tamus
            $tamu->update([
                'status'      => 'di_dalam',
                'waktu_masuk' => $now
            ]);
    
            // Catat ke transaksi parkir
            try {
                TransaksiParkir::updateOrCreate(
                    [
                        'tamu_id' => $tamu->id,
                        'status'  => 'aktif'
                    ],
                    [
                        'user_id'         => $tamu->user_id,
                        'nomor_plat'      => $tamu->nomor_plat,
                        'jenis_kendaraan' => $tamu->jenis_kendaraan,
                        'waktu_masuk'     => $now,
                        'status'          => 'aktif'
                    ]
                );
            } catch (\Exception $e) {
                \Log::error('Gagal catat transaksi parkir: ' . $e->getMessage());
            }
    
            return response()->json([
                'success'   => true,
                'message'   => 'QR Pass Valid! Tamu Terdaftar Masuk.',
                'data'      => [
                    'kode_unik'       => $tamu->kode_unik,
                    'nama_tamu'       => $tamu->nama_tamu,
                    'pengundang'      => $tamu->user->name ?? 'Residen',
                    'nomor_unit'      => 'Unit #' . ($tamu->user->nomor_unit ?? '-'),
                    'nomor_plat'      => $tamu->nomor_plat,
                    'jenis_kendaraan' => ucfirst($tamu->jenis_kendaraan ?? 'Mobil'),
                    'waktu_masuk'     => $now->format('H:i:s WIB'),
                ]
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()
            ], 500);
        }
    }

    public function processScanKeluar(Request $request)
    {
        try {
            $request->validate([
                'kode_unik' => 'required|string'
            ]);

            $tamu = Tamu::with('user')->where('kode_unik', $request->kode_unik)->first();

            if (!$tamu) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kode Tiket / QR Pass tidak ditemukan!'
                ], 404);
            }

            if ($tamu->status !== 'di_dalam') {
                return response()->json([
                    'success' => false,
                    'message' => 'Tamu dengan QR ini belum melakukan scan masuk / sudah keluar!'
                ], 400);
            }

            $now = Carbon::now();
            $waktuMasuk = $tamu->waktu_masuk ? Carbon::parse($tamu->waktu_masuk) : $now;

            $durasiMenit = $waktuMasuk->diffInMinutes($now);
            $durasiJam   = max(1, (int) ceil($durasiMenit / 60));

            $tarifPerJam = 3000;
            $totalHarga  = $durasiJam * $tarifPerJam;

            $tamu->update([
                'status'       => 'selesai',
                'waktu_keluar' => $now,
                'durasi_jam'   => $durasiJam,
                'total_tarif'  => $totalHarga
            ]);

            try {
                $transaksi = TransaksiParkir::where('tamu_id', $tamu->id)
                    ->where('status', 'aktif')
                    ->first();

                if ($transaksi) {
                    $transaksi->update([
                        'waktu_keluar' => $now,
                        'tarif'        => $totalHarga,
                        'status'       => 'selesai'
                    ]);
                }
            } catch (\Exception $e) {
                \Log::error('Gagal update transaksi keluar: ' . $e->getMessage());
            }

            return response()->json([
                'success' => true,
                'message' => 'Verifikasi Keluar Berhasil!',
                'data'    => [
                    'kode_unik'          => $tamu->kode_unik,
                    'nama_tamu'          => $tamu->nama_tamu,
                    'pengundang'         => $tamu->user->name ?? 'Residen',
                    'nomor_unit'         => 'Unit #' . ($tamu->user->nomor_unit ?? '1408'),
                    'nomor_plat'         => $tamu->nomor_plat,
                    'waktu_masuk_keluar' => $waktuMasuk->format('H:i') . ' - ' . $now->format('H:i WIB'),
                    'durasi_text'        => $durasiJam . ' Jam (' . $durasiMenit . ' Menit)',
                    'tarif_per_jam'      => 'Rp ' . number_format($tarifPerJam, 0, ',', '.'),
                    'total_harga'        => 'Rp ' . number_format($totalHarga, 0, ',', '.')
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()
            ], 500);
        }
    }
}