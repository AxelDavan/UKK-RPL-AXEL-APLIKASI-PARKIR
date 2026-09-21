<?php

namespace App\Http\Controllers;

use App\Events\TamuStatusUpdated;
use App\Models\AreaParkir;
use App\Models\Kendaraan;
use App\Models\TransaksiParkir;
use App\Models\KunjunganTamu;
use App\Models\SlotParkir;
use App\Models\Tamu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PetugasDashboardController extends Controller
{
    public function index()
    {
        // 1. Hitung Total Kapasitas
        $totalKapasitas = AreaParkir::sum('kapasitas') ?: 150;

        // 2. Hitung Kendaraan di Dalam (HANYA HITUNG SLOT DENGAN STATUS 'terisi' KARENA KENDARAAN SUDAH MASUK FISIK)
        $totalKendaraan = SlotParkir::where('status', 'terisi')->count();

        $menungguVerifikasi = Kendaraan::where('status', 'menunggu')->count();
        $tamuHariIni = KunjunganTamu::whereDate('created_at', Carbon::today())->count();

        // 3. Hitung Kapasitas Slot per Blok (Hanya hitung status 'terisi')
        // Menghitung berdasarkan area / blok lantai masing-masing
        $kapasitasL1Terisi = SlotParkir::where('status', 'terisi')
            ->whereHas('areaParkir', function ($query) {
                $query->where('nama_area', 'like', '%Lantai 1%')
                      ->orWhere('nama_area', 'like', '%Kode A%');
            })->count();

        $kapasitasL2Terisi = SlotParkir::where('status', 'terisi')
            ->whereHas('areaParkir', function ($query) {
                $query->where('nama_area', 'like', '%Lantai 2%')
                      ->orWhere('nama_area', 'like', '%Kode B%');
            })->count();

        $kapasitasVIPTerisi = SlotParkir::where('status', 'terisi')
            ->whereHas('areaParkir', function ($query) {
                $query->where('nama_area', 'like', '%VIP%');
            })->count();

        $totalL1Kapasitas = 50;
        $totalL2Kapasitas = 50;
        $totalVIPKapasitas = 50;

        // 4. Return ke View Dashboard Petugas
        return view('dashboard.petugas', compact(
            'totalKendaraan',
            'totalKapasitas',
            'menungguVerifikasi',
            'tamuHariIni',
            'kapasitasL1Terisi',
            'totalL1Kapasitas',
            'kapasitasL2Terisi',
            'totalL2Kapasitas',
            'kapasitasVIPTerisi',
            'totalVIPKapasitas'
        ));
    }

    // Endpoint API JSON untuk Auto-Refresh Real-Time via JavaScript
    public function stats()
    {
        $totalKapasitas = AreaParkir::sum('kapasitas') ?: 150;
        
        // HANYA menghitung slot yang fisiknya 'terisi' (Merah). Slot 'dipesan' (Biru) tidak dihitung sebagai kendaraan di dalam.
        $totalKendaraanFisik = SlotParkir::where('status', 'terisi')->count();
        
        // Slot tersedia = Total dikurangi (Terisi + Dipesan)
        $slotNonTersedia = SlotParkir::whereIn('status', ['terisi', 'dipesan', 'maintenance'])->count();

        $recentActivities = TransaksiParkir::with(['kendaraan', 'areaParkir'])
            ->latest()
            ->take(4)
            ->get()
            ->map(function ($act) {
                $ismasuk = is_null($act->waktu_keluar);
                return [
                    'title' => ($act->kendaraan->nomor_plat ?? 'Kendaraan') . ($ismasuk ? ' Masuk' : ' Keluar'),
                    'subtitle' => ($act->user_id ? 'Residen' : 'Tamu Reguler') . ' - ' . ($act->nama_area ?? 'Gate 1'),
                    'waktu' => Carbon::parse($act->updated_at)->diffForHumans(),
                    'is_masuk' => $ismasuk,
                ];
            });

        return response()->json([
            'total_kendaraan'      => $totalKendaraanFisik,
            'total_kapasitas'     => $totalKapasitas,
            'slot_tersedia'       => max(0, $totalKapasitas - $slotNonTersedia),
            'menunggu_verifikasi' => Kendaraan::where('status', 'menunggu')->count(),
            'tamu_hari_ini'        => KunjunganTamu::whereDate('created_at', Carbon::today())->count(),
            'recent_activities'   => $recentActivities,
        ]);
    }

    // Method Eksekusi Verifikasi Tamu / Kendaraan
    public function verifikasi($id)
    {
        $tamu = KunjunganTamu::findOrFail($id);
        
        // 1. Ubah status verifikasi
        $tamu->update(['status' => 'disetujui']);

        // 2. Isi slot parkir kosong pertama yang tersedia
        $slot = SlotParkir::where('status', 'tersedia')->first();
        if ($slot) {
            $slot->update(['status' => 'terisi']);
        }

        return redirect()->back()->with('success', 'Kendaraan/Tamu berhasil diverifikasi.');
    }

    public function scanQrTamu(Request $request)
    {
        $tamu = Tamu::where('kode_qr', $request->kode_qr)->firstOrFail();

        // Update status (misal dari 'menunggu' -> 'aktif')
        $tamu->update(['status' => 'aktif']);

        // Trigger Reverb Real-time Event ke Dashboard Owner
        event(new TamuStatusUpdated($tamu));

        return response()->json(['message' => 'Akses Tamu Berhasil Discan']);
    }
}