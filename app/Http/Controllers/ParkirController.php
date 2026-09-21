<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\SlotParkir;
use App\Models\TransaksiParkir;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
    public function index(Request $request)
    {
        $lantai = $request->get('level', $request->get('lantai', 'A'));

        $slots = SlotParkir::with('kendaraan.user')
            ->where('kode_slot', 'LIKE', $lantai . '-%')
            ->get();

        $totalCapacity  = SlotParkir::count();
        $occupiedCount  = SlotParkir::where('status', 'terisi')->count();
        $availableCount = max(0, $totalCapacity - $occupiedCount);

        $recentActivities = TransaksiParkir::with('kendaraan.user')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard.petugas.parkir', compact(
            'lantai',
            'slots',
            'totalCapacity',
            'occupiedCount',
            'availableCount',
            'recentActivities'
        ));
    }

    public function slotDetail($id)
    {
        $slot = SlotParkir::with('kendaraan.user')->findOrFail($id);
        $kendaraan = $slot->kendaraan;

        if (!$kendaraan) {
            return response()->json([
                'status'       => $slot->status,
                'kode_slot'    => $slot->kode_slot,
                'plat'         => 'KOSONG',
                'tipe'         => 'Tidak ada kendaraan',
                'waktu_masuk'  => '-',
                'durasi'       => '-',
                'pemilik'      => 'Tersedia'
            ]);
        }

        return response()->json([
            'status'       => $slot->status,
            'kode_slot'    => $slot->kode_slot,
            'plat'         => $kendaraan->nomor_plat ?? 'TIDAK TERDAFTAR',
            'tipe'         => ($kendaraan->merk ?? 'Mobil') . ' (' . ($kendaraan->warna ?? '-') . ')',
            'waktu_masuk'  => Carbon::parse($kendaraan->updated_at)->format('H:i A'),
            'durasi'       => Carbon::parse($kendaraan->updated_at)->diffForHumans(null, true),
            'pemilik'      => $kendaraan->user->name ?? 'Tamu / Resident'
        ]);
    }
}