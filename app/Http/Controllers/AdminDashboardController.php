<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kendaraan;
use App\Models\AreaParkir;
use App\Models\TransaksiParkir;
use App\Models\KunjunganTamu;
use App\Models\SlotParkir;
use App\Models\StatusPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Stat Cards
        $totalUsers = User::count();
        $totalKendaraan = Kendaraan::count();
        $totalHariIni     = TransaksiParkir::whereNull('user_id')->whereDate('created_at', Carbon::today())->count();
        $pendapatanSlotParkir = StatusPayment::where('status', 'berhasil')->sum('amount');
        
        $totalKapasitas = AreaParkir::where('status', 'aktif')->sum('kapasitas');
        if ($totalKapasitas == 0) {
            $totalKapasitas = AreaParkir::sum('kapasitas');
        }

        $slotTerisi = SlotParkir::where('status', 'terisi')->count();
        $slotTersedia = max(0, $totalKapasitas - $slotTerisi);
        $occupancyPercent = $totalKapasitas > 0 ? round(($slotTerisi / $totalKapasitas) * 100) : 0;

        $sedangBerkunjung = KunjunganTamu::whereIn('status', ['disetujui'])->count();
        $pendapatanHariIni = TransaksiParkir::where('status', 'selesai')
            ->whereDate('waktu_keluar', Carbon::today())
            ->sum('tarif');

        // SECTION 2: DONUT CHART (STATUS HUNIAN)
        // Hitung transaksi aktif yang milik User (Resident) vs Tamu/Non-user (Guest)
        $residentCount = TransaksiParkir::where('status', 'aktif')->whereNotNull('user_id')->count();
        $guestCount = TransaksiParkir::where('status', 'aktif')->whereNull('user_id')->count();
        $totalHunianAktif = $residentCount + $guestCount;

        $residentPercent = $totalHunianAktif > 0 ? round(($residentCount / $totalHunianAktif) * 100) : 50;
        $guestPercent = $totalHunianAktif > 0 ? round(($guestCount / $totalHunianAktif) * 100) : 50;

        // SECTION 3: PENGUNJUNG BULANAN (6 Bulan Terakhir)
        $monthlyLabels = [];
        $monthlyData = [];
        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $monthlyLabels[] = $month->translatedFormat('M');
            $monthlyData[] = TransaksiParkir::whereYear('waktu_masuk', $month->year)
                ->whereMonth('waktu_masuk', $month->month)
                ->count();
        }

        // SECTION 4: AKTIVITAS TERBARU (5 Transaksi Terakhir)
        $recentActivities = TransaksiParkir::with(['user', 'areaParkir'])
            ->latest('updated_at')
            ->take(5)
            ->get();

        return view('dashboard.admin', compact(
            'totalUsers',
            'pendapatanSlotParkir',
            'totalHariIni',
            'totalKendaraan',
            'totalKapasitas',
            'slotTerisi',
            'slotTersedia',
            'occupancyPercent',
            'sedangBerkunjung',
            'pendapatanHariIni',
            'residentCount',
            'guestCount',
            'totalHunianAktif',
            'residentPercent',
            'guestPercent',
            'monthlyLabels',
            'monthlyData',
            'recentActivities'
        ));
    }

    public function chartData() 
    {
        $masuk = TransaksiParkir::whereDate('waktu_masuk', Carbon::today())
            ->selectRaw('HOUR(waktu_masuk) as jam, COUNT(*) as total')
            ->groupBy('jam')
            ->pluck('total', 'jam');

        $keluar = TransaksiParkir::whereDate('waktu_keluar', Carbon::today())
            ->selectRaw('HOUR(waktu_keluar) as jam, COUNT(*) as total')
            ->groupBy('jam')
            ->pluck('total', 'jam');

        $hours = [6, 9, 12, 15, 18, 21, 0];

        return response()->json([
            'labels' => ['06:00', '09:00', '12:00', '15:00', '18:00', '21:00', '00:00'],
            'masuk'  => collect($hours)->map(fn ($h) => $masuk[$h] ?? 0)->values(),
            'keluar' => collect($hours)->map(fn ($h) => $keluar[$h] ?? 0)->values(),
        ]);
    }
}