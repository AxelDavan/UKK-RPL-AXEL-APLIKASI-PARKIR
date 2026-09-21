<?php

namespace App\Http\Controllers;

use App\Models\LogAktivitas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $filterTanggal = $request->input('tanggal', 'semua');
        $filterAktivitas = $request->input('aktivitas', 'semua');

        $query = LogAktivitas::with('user');

        // Filter Berdasarkan Tanggal
        if ($filterTanggal == 'hari_ini') {
            $query->whereDate('created_at', Carbon::today());
        } elseif ($filterTanggal == 'minggu_ini') {
            $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        } elseif ($filterTanggal == 'bulan_ini') {
            $query->whereMonth('created_at', Carbon::now()->month);
        }

        // Filter Aktivitas (Aman dari error kolom, ngecek teks umum)
        if ($filterAktivitas != 'semua') {
            $query->where(function($q) use ($filterAktivitas) {
                $q->where('aktivitas', 'like', '%' . $filterAktivitas . '%');
                if (\Schema::hasColumn('log_aktivitas', 'kategori')) {
                    $q->orWhere('kategori', 'like', '%' . $filterAktivitas . '%');
                }
            });
        }

        $logs = $query->latest()->paginate(10)->withQueryString();

        return view('dashboard.petugas.laporan', compact('logs', 'filterTanggal', 'filterAktivitas'));
    }
}