<?php

namespace App\Http\Controllers;

use App\Models\KarcisMasuk;
use App\Models\TransaksiParkir;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KarcisKeluarController extends Controller
{
    public function index()
    {
        $totalslottamu = 150;
        $tamuAktif = TransaksiParkir::whereNull('user_id')->where('status', 'aktif')->count();
        $slottersedia = max(0, $totalslottamu - $tamuAktif);

        return view('dashboard.petugas.karluar', compact('slottersedia', 'totalslottamu', 'tamuAktif'));
    }

    // AJAX Search Karcis Fisik / Plat
    public function cari(Request $request)
    {
        $request->validate([
            'nomor_karcis' => 'required|string',
        ]);

        $keyword = trim($request->nomor_karcis);

        // Cari Karcis Aktif berdasarkan Nomor Karcis atau Plat Nomor
        $karcis = KarcisMasuk::where('status', 'aktif')
            ->where(function($q) use ($keyword) {
                $q->where('nomor_karcis', $keyword)
                  ->orWhere('nomor_plat', $keyword);
            })->first();

        if (!$karcis) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Karcis atau Plat Nomor tidak ditemukan / sudah checkout!'
            ], 404);
        }

        $waktuMasuk  = Carbon::parse($karcis->waktu_masuk)->timezone('Asia/Jakarta');
        $waktuKeluar = Carbon::now()->timezone('Asia/Jakarta');

        // Hitung Durasi Parkir (Menit & Jam)
        $totalMenit   = max(1, $waktuMasuk->diffInMinutes($waktuKeluar));
        $jamTerhitung = (int) ceil($totalMenit / 60); // Pembulatan ke atas per jam

        
        // Tarif Rp 4.000 / Jam
        $tarifPerJam = 4000;
        $totalBiaya  = $jamTerhitung * $tarifPerJam;

        $jam   = floor($totalMenit / 60);
        $menit = $totalMenit % 60;
        $stringDurasi = ($jam > 0 ? $jam . ' Jam ' : '') . $menit . ' Menit';

        return response()->json([
            'status' => 'success',
            'data'   => [
                'karcis_id'        => $karcis->id,
                'transaksi_id'     => $karcis->transaksi_parkir_id,
                'nomor_karcis'     => $karcis->nomor_karcis,
                'nomor_plat'       => $karcis->nomor_plat,
                'jenis_kendaraan'  => ucfirst($karcis->jenis_kendaraan),
                'waktu_masuk'      => $waktuMasuk->format('H:i') . ' WIB',
                'waktu_masuk_full' => $waktuMasuk->translatedFormat('d M Y, H:i'),
                'waktu_keluar'     => $waktuKeluar->format('H:i') . ' WIB',
                'durasi'           => $stringDurasi,
                'jam_terhitung'    => $jamTerhitung,
                'total_biaya'      => $totalBiaya,
                'total_biaya_rp'   => 'Rp ' . number_format($totalBiaya, 0, ',', '.'),
                'kategori'         => $karcis->kategori ?? 'Tamu',
            ]
        ]);
    }

    // Process Kendaraan Keluar & Buka Palang
    public function prosesKeluar(Request $request)
    {
        $request->validate([
            'karcis_id'   => 'required|exists:karcis_masuks,id',
            'total_biaya' => 'required|numeric',
        ]);
    
        DB::beginTransaction();
        try {
            $karcis = KarcisMasuk::findOrFail($request->karcis_id);
            $waktuKeluar = Carbon::now();
    
            // 1. Update Karcis Masuk jadi selesai
            $karcis->update(['status' => 'selesai']);
    
            // 2. Update Transaksi Parkir Utama
            if ($karcis->transaksi_parkir_id) {
                $transaksi = TransaksiParkir::find($karcis->transaksi_parkir_id);
                if ($transaksi) {
                    $transaksi->update([
                        'waktu_keluar' => $waktuKeluar,
                        'tarif'        => $request->total_biaya,
                        'status'       => 'selesai',
                    ]);
                }
            }
    
            // 3. TAMBAHKAN INI: Update data Tamu / Pengunjung agar ikut sinkron
            $tamu = \App\Models\Tamu::where('nomor_plat', $karcis->nomor_plat)
                ->whereIn('status', ['aktif', 'di_dalam'])
                ->first();
                
            if ($tamu) {
                $tamu->update([
                    'status'       => 'selesai', // atau sesuaikan dengan status check-out di tabel tamu ('checked-out' / 'selesai')
                    'waktu_keluar' => $waktuKeluar,
                ]);
            }
    
            DB::commit();
    
            return response()->json([
                'status'       => 'success',
                'message'      => 'Karcis berhasil diproses & Palang Pintu Terbuka!',
                'nomor_karcis' => $karcis->nomor_karcis
            ]);
    
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Gagal memproses kendaraan keluar: ' . $e->getMessage()
            ], 500);
        }
    }
}