<?php

namespace App\Http\Controllers;

use App\Models\KarcisMasuk;
use App\Models\SlotParkir;
use App\Models\Tamu;
use App\Models\TransaksiParkir;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KarcisMasukController extends Controller
{
    public function index(Request $request)
    {
        $nomorKarcisBerikutnya = $this->generateNomorKarcis();
        $sedangBerkunjung = TransaksiParkir::whereNull('user_id')->where('status', 'aktif')->count();

        $totalslottamu = 150;
        $parkirTerisi  = $sedangBerkunjung;
        $slottersedia = max(0, $totalslottamu - $parkirTerisi);
        $persenkosong = $totalslottamu > 0 ? round(($slottersedia / $totalslottamu)* 100) : 0;
        
        return view('dashboard.petugas.karsuk', compact(
            'nomorKarcisBerikutnya',
            'parkirTerisi',
            'slottersedia',
            'totalslottamu',
            'persenkosong'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kendaraan' => 'required|in:mobil,motor',
            'nomor_plat'      => 'required|string|max:15',
        ]);

        $now = Carbon::now();
        $kodeUnik = 'KRC-' . date('Ymd') . '-' . rand(1000, 9999);
        $nomorKarcis = $this->generateNomorKarcis();

        // 1. Buat record Tamu dulu
        $tamu = Tamu::create([
            'user_id'         => Auth::id(),
            'kode_unik'       => $kodeUnik,
            'nama_tamu'       => 'Tamu',
            'nomor_whatsapp'  => '-',
            'jenis_kendaraan' => strtolower($request->jenis_kendaraan),
            'nomor_plat'      => strtoupper($request->nomor_plat),
            'waktu_kunjungan' => $now,
            'status'          => 'di_dalam',
            'waktu_masuk'     => $now,
        ]);

        // 2. Buat record Transaksi Parkir
        $transaksi = TransaksiParkir::create([
            'user_id'         => Auth::id(),
            'tamu_id'         => $tamu->id,
            'nomor_plat'      => strtoupper($request->nomor_plat),
            'jenis_kendaraan' => strtolower($request->jenis_kendaraan),
            'waktu_masuk'     => $now,
            'status'          => 'aktif'
        ]);

        // 3. Buat record KarcisMasuk dengan memasukkan transaksi_parkir_id
        $karcis = KarcisMasuk::create([
            'transaksi_parkir_id' => $transaksi->id, // <-- DISIMPAN DI SINI
            'nomor_karcis'        => $nomorKarcis,
            'jenis_kendaraan'     => strtolower($request->jenis_kendaraan),
            'nomor_plat'          => strtoupper($request->nomor_plat),
            'waktu_masuk'         => $now,
            'kategori'            => 'Pengunjung / Walk-In',
            'status'              => 'aktif',
            'petugas_id'          => Auth::id(),
        ]);

        // REDIRECT LANGSUNG KE HALAMAN CETAK BLADE!
        return redirect()->route('karsuk.cetak', $karcis->id);
    }

    private function generateNomorKarcis()
    {
        $today = Carbon::today();
        $countToday = KarcisMasuk::whereDate('created_at', $today)->count() + 1;
        return 'A-' . str_pad($countToday, 5, '0', STR_PAD_LEFT);
    }

    public function cetak($id)
    {
        $karcis = KarcisMasuk::findOrFail($id);
        return view('dashboard.petugas.cetak_karcis', compact('karcis'));
    }
}