<?php

namespace App\Http\Controllers;

use App\Models\LogAktivitas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = LogAktivitas::with('user')->latest();

        $filterTanggal = $request->get('tanggal', 'semua');
            if ($filterTanggal === 'hari_ini') {
                $query->whereDate('created_at', Carbon::today());
            } elseif ($filterTanggal === 'minggu_ini') {
                $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            } elseif ($filterTanggal === 'bulan_in') {
                $query->whereMonth('created_at', Carbon::now()->month)
                      ->whereYear('created_at', Carbon::now()->year);
            }

        $filterAktivitas = $request->get('aktivitas', 'semua');
            if ($filterAktivitas !== 'semua') {
                $query->where('kategori', $filterAktivitas);
            }
        
        $logs = $query->paginate(10)->withQueryString();

        return view('dashboard.petugas.laporan', compact(
            'logs',
            'filterTanggal',
            'filterAktivitas'
        ));
    }
}
