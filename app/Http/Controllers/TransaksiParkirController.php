<?php

namespace App\Http\Controllers;

use App\Events\ParkirTransaksiUpdate;
use App\Models\TransaksiParkir;
use App\Models\AreaParkir;
use Illuminate\Http\Request;

class TransaksiParkirController extends Controller
{
    // =========================
    // PARKIR MASUK - FORM
    // =========================
    public function masuk(Request $request)
    {
        $areaParkir = AreaParkir::all();

        return view(
            'dashboard.petugas.parkir.masuk',
            compact('areaParkir')
        );
    }

    // =========================
    // PARKIR MASUK - SIMPAN
    // =========================
    public function storeMasuk(Request $request)
    {
        $request->validate([
            'area_parkir_id' => 'required|exists:area_parkirs,id',
        ]);

        $transaksi = TransaksiParkir::create([
            'user_id' => auth()->id(),
            'area_parkir_id' => $request->area_parkir_id,
            'waktu_masuk' => now(),
            'waktu_keluar' => null,
            'tarif' => 0,
            'status' => 'aktif',
        ]);

        // Kirim event WebSocket
        ParkirTransaksiUpdate::dispatch();

        return redirect()
            ->route('petugas.dashboard')
            ->with('success', 'Kendaraan berhasil masuk.');
    }

    // =========================
    // PARKIR KELUAR - HALAMAN
    // =========================
    public function keluar()
    {
        $transaksiAktif = TransaksiParkir::where('status', 'aktif')
            ->with(['user', 'areaParkir'])
            ->orderBy('waktu_masuk', 'asc')
            ->get();

        return view(
            'dashboard.petugas.parkir.keluar',
            compact('transaksiAktif')
        );
    }

    // =========================
    // PARKIR KELUAR - SIMPAN
    // =========================
    public function storeKeluar(Request $request)
    {
        $request->validate([
            'transaksi_id' => 'required|exists:transaksi_parkirs,id',
        ]);

        $transaksi = TransaksiParkir::where('id', $request->transaksi_id)
            ->where('status', 'aktif')
            ->firstOrFail();

        $transaksi->update([
            'waktu_keluar' => now(),
            'status' => 'selesai',
        ]);

        // Kirim event WebSocket
        ParkirTransaksiUpdate::dispatch();

        return redirect()
            ->route('keluar')
            ->with('success', 'Kendaraan berhasil dicatat keluar.');
    }
}