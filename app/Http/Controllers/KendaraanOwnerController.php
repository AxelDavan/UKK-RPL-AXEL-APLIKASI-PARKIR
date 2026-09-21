<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\SlotParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KendaraanOwnerController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $Kendaraans = Kendaraan::where('user_id', $user->id)->get();

        $totalKendaraan = $Kendaraans->count();
        $disetujui = $Kendaraans->where('status', 'disetujui')->count();
        $menunggu = $Kendaraans->where('status', 'menunggu')->count();

        return view('dashboard.owner.kendaraan', compact('Kendaraans', 'totalKendaraan', 'disetujui', 'menunggu'));
    }

    public function getStatus()
    {
        $user = Auth::user();
        $Kendaraans = Kendaraan::where('user_id', $user->id)->latest()->get();

        return response()->json([
            'total' => $Kendaraans->count(),
            'disetujui' => $Kendaraans->where('status', 'disetujui')->count(),
            'menunggu' => $Kendaraans->where('status', 'menunggu')->count(),
            'kendaraans' => $Kendaraans
        ]);
    }

    // Mengambil daftar slot yang pernah dibeli user
    public function getMySlot()
    {
        try {
            $userId = Auth::id();

            // Mengambil pemesanan beserta data relasi slotParkir
            $pemesanans = Pemesanan::with('slotParkir')
                ->where('user_id', $userId)
                ->where('status', 'aktif')
                ->whereHas('slotparkir', function ($q) {
                    $q->where('status', 'dipesan');
                })
                ->get();

            return response()->json([
                'success' => true,
                'slots' => $pemesanans
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'slots' => []
            ], 500);
        }
    }

public function store(Request $request)
    {
        // Cek jika ini mode ASSIGN KENDARAAN EKSISTING KE SLOT
        if ($request->has('kendaraan_id') && !$request->has('nomor_plat')) {
            $request->validate([
                'pemesanan_id' => 'required|exists:pemesanans,id',
                'kendaraan_id' => 'required|exists:kendaraans,id',
            ]);

            $pemesanan = Pemesanan::findOrFail($request->pemesanan_id);
            $kendaraan = Kendaraan::findOrFail($request->kendaraan_id);
            $slotParkirId = $pemesanan->slot_parkir_id;

            // Update kendaraan agar terikat ke slot parkir baru
            $kendaraan->update([
                'slot_parkir_id' => $slotParkirId,
                'status'         => 'disetujui'
            ]);

            // Update pemesanan agar terikat ke kendaraan ini
            $pemesanan->update([
                'kendaraan_id' => $kendaraan->id
            ]);

            // Ubah status slot jadi terisi
            if ($slotParkirId) {
                SlotParkir::where('id', $slotParkirId)->update([
                    'status' => 'terisi'
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Kendaraan berhasil ditempatkan ke slot parkir!'
            ]);
        } 
        
        // Jika ini mode DAFTARKAN KENDARAAN BARU
        else {
            $request->validate([
                'nomor_plat'      => 'required|string|max:20|unique:kendaraans,nomor_plat',
                'merk'            => 'required|string|max:100',
                'warna'           => 'required|string|max:50',
                'jenis_kendaraan' => 'required|in:mobil,motor,truk',
                'pemesanan_id'    => 'nullable',
            ]);

            $slotParkirId = null;
            $pemesanan = null;

            if ($request->filled('pemesanan_id')) {
                $pemesanan = Pemesanan::find($request->pemesanan_id);
                $slotParkirId = $pemesanan ? $pemesanan->slot_parkir_id : null;
            }

            $kendaraan = Kendaraan::create([
                'user_id'         => Auth::id(),
                'nomor_plat'      => strtoupper($request->nomor_plat),
                'merk'            => $request->merk,
                'warna'           => $request->warna,
                'jenis_kendaraan' => strtolower($request->jenis_kendaraan),
                'status'          => 'menunggu',
                'slot_parkir_id'  => $slotParkirId,
            ]);

            if ($pemesanan) {
                if ($slotParkirId) {
                    SlotParkir::where('id', $slotParkirId)->update([
                        'status' => 'terisi'
                    ]);
                }
                $pemesanan->update([
                    'kendaraan_id' => $kendaraan->id
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Kendaraan baru berhasil didaftarkan!',
                'data'    => $kendaraan
            ]);
        }
    }

    public function getUnassignedVehicles()
    {
        $kendaraans = Kendaraan::where('user_id', Auth::id())
            ->whereNull('slot_parkir_id')
            ->get();

        return response()->json([
            'success' => true,
            'kendaraans' => $kendaraans
        ]);
    }

    public function destroy($id)
    {
        // 1. Keamanan: Pastikan kendaraan ini milik user yang sedang login
        $kendaraan = Kendaraan::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $slotId = $kendaraan->slot_parkir_id;

        // 2. Putuskan relasi ke pemesanan dulu agar tidak kena error Foreign Key Database
        Pemesanan::where('kendaraan_id', $kendaraan->id)
            ->update(['kendaraan_id' => null]);

        // 3. Hapus kendaraan
        $kendaraan->delete();

        if ($slotId) {
            $hasactivebooking = Pemesanan::where('slot_parkir_id', $slotId)
            ->where('user_id', Auth::id())
            ->where('status', 'aktif')
            ->exists();

            if ($hasactivebooking) {
                SlotParkir::where('id', $slotId)->update([
                    'status' => 'dipesan'
                ]);
            } else {
                SlotParkir::where('id', $slotId)->update([
                    'status' => 'tersedia'
                ]);
            }
        }

        // 5. Jika dipanggil via AJAX/Fetch JS, kirim JSON. Jika via Form HTML biasa, redirect back.
        if (request()->wantsJson() || request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Kendaraan berhasil dihapus.'
            ]);
        }

        return redirect()->back()->with('success', 'Kendaraan berhasil dihapus.');
    }
}