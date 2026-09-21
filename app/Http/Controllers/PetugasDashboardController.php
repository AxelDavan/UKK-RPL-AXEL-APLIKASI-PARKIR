<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kendaraan;
use App\Models\TransaksiParkir;
use App\Models\KunjunganTamu;
use App\Models\SlotParkir;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PetugasDashboardController extends Controller
{
    public function index()
    {
        $totalKendaraan = Kendaraan::count();
        $totalKapasitas = AreaParkir::sum('kapasitas');

        // Mengambil slot terisi langsung dari SlotParkir agar sinkron dengan Peta
        $slotTerisi = SlotParkir::where('status', 'terisi')->count();
        $slotTersedia = max(0, $totalKapasitas - $slotTerisi);

        // Data tambahan untuk dashboard petugas
        $menungguVerifikasi = KunjunganTamu::where('status', 'menunggu')->count();
        $tamuHariIni = KunjunganTamu::whereDate('created_at', Carbon::today())->count();

        return view('dashboard.petugas', compact(
            'totalKendaraan',
            'totalKapasitas',
            'slotTerisi',
            'slotTersedia',
            'menungguVerifikasi',
            'tamuHariIni'
        ));
    }

    // Endpoint API JSON untuk Auto-Refresh Real-Time
    public function stats()
    {
        $totalKapasitas = AreaParkir::sum('kapasitas');
        $slotTerisi = SlotParkir::where('status', 'terisi')->count();

        $recentActivities = TransaksiParkir::with(['kendaraan', 'areaParkir'])
        ->latest()
        ->take(4)
        ->get()
        ->map(function ($act) {
            $ismasuk = is_null($act->waktu_keluar);
            return [
                'title' => ($act->kendaraan->nomor_plat ?? 'kendaraan') . ($ismasuk ? 'masuk' : 'keluar'),
                'subtitle' => ($act->user_id ? 'residen' : 'tamu_reguler') . '-' . ($act->nama_area ?? 'Gate 1'),
                'waktu' => \Carbon\Carbon::parse($act->updated_at)->diffForHumans(),
                'is_masuk' => $ismasuk,
            ];
        });

        return response()->json([
            'total_kendaraan'     => TransaksiParkir::where('status', 'aktif')->count(),
            'total_kapasitas'    => $totalKapasitas,
            'slot_tersedia'      => max(0, $totalKapasitas - $slotTerisi),
            'menunggu_verifikasi'=> KunjunganTamu::where('status', 'menunggu')->count(),
            'tamu_hari_ini'       => KunjunganTamu::whereDate('created_at', Carbon::today())->count(),
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
}