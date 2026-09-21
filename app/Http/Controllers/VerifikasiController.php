<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\SlotParkir;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index(Request $request) 
    {
        $status = $request->get('status', 'menunggu');

        $query = Kendaraan::with('user')->where('status', $status);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nomor_plat', 'like', "%{$search}%")
                ->orwhere('merk', 'like', "%{$search}%")
                ->orWhereHas('user', function ($u) use ($search) {
                    $u->where('name', 'like', "%{$search}%")
                    ->orWhere('nomor_unit', 'like', "%{$search}%");
                });
            });
        }

        $permohonan = $query->latest()->get();

        $countMenunggu = Kendaraan::where('status', 'menunggu')->count();
        $countDisetujui = Kendaraan::where('status', 'disetujui')->count();
        $countDitolak = Kendaraan::where('status', 'ditolak')->count();

        return view('dashboard.petugas.verifikasi', compact(
            'permohonan',
            'status',
            'countMenunggu',
            'countDisetujui',
            'countDitolak',
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:disetujui,ditolak'
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update(['status' => $request->status]);

        if ($request->status === 'disetujui' && $kendaraan->slot_parkir_id) {
            SlotParkir::where('id', $kendaraan->slot_parkir_id)->update([
                'status' => 'terisi',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => "Permohonan kendaraan {$kendaraan->nomor_plat} berhasil di-{$request->status}."
        ]);
    }
}
