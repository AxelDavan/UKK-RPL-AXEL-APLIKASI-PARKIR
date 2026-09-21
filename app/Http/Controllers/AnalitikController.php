<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kendaraan;
use App\Models\TransaksiParkir;
use App\Models\Tamu;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnalitikController extends Controller
{
    public function index() 
    {
        $totalkendaraan = Kendaraan::count();
        $sedangBerkunjung = TransaksiParkir::whereNull('user_id')->where('status', 'aktif')->count();
        $totaltransaksi = TransaksiParkir::count();


        $totalpendapatan = TransaksiParkir::where('status','selesai')->sum('tarif');

        //Hitung rata-rata tarif perjam
        $transaksiselesai = TransaksiParkir::where('status','selesai')->whereNotNull('waktu_keluar')->get();
        $totalmenit = 0;
        foreach ($transaksiselesai as $trx) {
            $masuk = Carbon::parse($trx->waktu_masuk);
            $keluar = Carbon::parse($trx->waktu_keluar);
            $totalmenit += $masuk->diffInMinutes($keluar);
        }

        $avgmenit = $transaksiselesai->count() > 0 ? round($totalmenit / $transaksiselesai->count()) : 0;
        $jam = floor($avgmenit / 60);
        $menit = $avgmenit % 60;

        $avgjamtext = $jam . ' jam ' . $menit . ' menit';

        $jamMasuk = [0, 0, 0, 0, 0, 0];
        $jamKeluar = [0, 0, 0, 0, 0, 0];

        $transaksis = TransaksiParkir::whereDate('waktu_masuk', Carbon::today())->get();
        foreach ($transaksis as $t) {
            $hMasuk = Carbon::parse($t->waktu_masuk)->hour;
            if ($hMasuk >= 6 && $hMasuk < 9) $jamMasuk[0]++;
            elseif ($hMasuk >= 9 && $hMasuk < 12) $jamMasuk[1]++;
            elseif ($hMasuk >= 12 && $hMasuk < 15) $jamMasuk[2]++;
            elseif ($hMasuk >= 15 && $hMasuk < 18) $jamMasuk[3]++;
            elseif ($hMasuk >= 18 && $hMasuk < 21) $jamMasuk[4]++;
            elseif ($hMasuk >= 21) $jamMasuk[5]++;

            if ($t->waktu_keluar) {
                $hKeluar = Carbon::parse($t->waktu_keluar)->hour;
                if ($hKeluar >= 6 && $hKeluar < 9) $jamKeluar[0]++;
                elseif ($hKeluar >= 9 && $hKeluar < 12) $jamKeluar[1]++;
                elseif ($hKeluar >= 12 && $hKeluar < 15) $jamKeluar[2]++;
                elseif ($hKeluar >= 15 && $hKeluar < 18) $jamKeluar[3]++;
                elseif ($hKeluar >= 18 && $hKeluar < 21) $jamKeluar[4]++;
                elseif ($hKeluar >= 21) $jamKeluar[5]++;
            }
        }

        $chartPendapatanData = [];
        $chartPendapatanDates = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $chartPendapatanDates[] = $date->format('d M');
            $chartPendapatanData[] = TransaksiParkir::where('status','selesai')->whereDate('waktu_keluar', $date)->sum('tarif');
        }

        $areas = AreaParkir::withCount([
            'slotparkir as terisi_count' => function ($t) {
                $t->where('status', 'terisi');
            },
            'slotparkir as total_slot'
        ])->get();

        $donutLabels = [];
        $donutSeries = [];
        $totalTerisi = 0;

        foreach ($areas as $a) {
            $donutLabels[] = $a->nama_area;
            $donutSeries[] = (int) $a->terisi_count;
            $totalTerisi += $a->terisi_count;

            $kapasitas = $a->kapasitas > 0 ? $a->kapasitas : $a->total_slot;
            $a->kapasitas_calc = $kapasitas;
            $a->terisi_calc = $a->terisi_count;
            $a->tersedia_calc = max(0, $kapasitas - $a->terisi_count);
            $a->occupancy_calc = $kapasitas > 0 ? round(($a->terisi_count / $kapasitas) * 100) : 0;
            $a->status_label = $a->occupancy_calc >= 80 ? 'Sibuk' : 'Normal';
            $a->status_color = $a->occupancy_calc >= 80 ? 'bg-tertiary-container/10 text-tertiary-container' : 'bg-secondary/10 text-secondary';
        }

        $totalPenghuni = User::where('role', 'owner')->count();
        $totalTamu = Tamu::count();

        return view('dashboard.admin.analis', compact(
            'totalkendaraan',
            'totalpendapatan',
            'sedangBerkunjung',
            'totaltransaksi',
            'avgjamtext',
            'jamMasuk',
            'jamKeluar',
            'chartPendapatanData',
            'chartPendapatanDates',
            'donutLabels',
            'donutSeries',
            'totalTerisi',
            'areas',
            'totalPenghuni',
            'totalTamu'
        ));
    }

    public function chartdataanalis()
    {
        $chartPendapatanData = [];
        $chartPendapatanDates = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $chartPendapatanDates[] = $date->format('d M');
            $chartPendapatanData[] = TransaksiParkir::where('status','selesai')->whereDate('waktu_keluar', $date)->sum('tarif');
        }

        $totalpendapatan = TransaksiParkir::where('status', 'selesai')->sum('tarif');

        return response()->json([
            'total_pendapatan'    => $totalpendapatan,
            'total_pendapatan_rp' => 'Rp ' . number_format($totalpendapatan, 0, ',', '.'),
            'labels'              => $chartPendapatanDates,
            'data'                => $chartPendapatanData,
        ]);
    }
}
