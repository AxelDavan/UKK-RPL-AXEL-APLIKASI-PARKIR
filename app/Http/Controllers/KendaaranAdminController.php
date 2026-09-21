<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\User;
use App\Models\KunjunganTamu;
use App\Models\SlotParkir;

class KendaaranAdminController extends Controller
{   
    public function index()
    {
        $totalKendaraan = Kendaraan::count();
    
        $totalUser = User::count();
    
        $totalMenunggu = KunjunganTamu::where(
            'status',
            'menunggu'
        )->count();
    
        $totalTamu = KunjunganTamu::count();
    
        $kendaraans = Kendaraan::with('slotParkir', 'user')
            ->latest()
            ->paginate(10);
    
        // Data pemilik untuk dropdown Tambah Kendaraan
        $users = User::whereIn('role', ['owner', 'petugas'])
            ->orderBy('name')
            ->get();

        $slots = SlotParkir::where('status', 'tersedia')->get();

        return view('dashboard.admin.kendaraan1', compact(
            'totalKendaraan',
            'totalUser',
            'totalMenunggu',
            'totalTamu',
            'kendaraans',
            'users',
            'slots',
        ));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
    
            'nomor_plat' => [
                'required',
                'string',
                'max:20',
                'unique:kendaraans,nomor_plat',
            ],
    
            'merk' => 'required|string|max:100',
    
            'warna' => 'required|string|max:50',
    
            'jenis_kendaraan' => 'required|in:mobil,motor',

            'slot_parkir_id' => 'required|exists:slot_parkirs,id',

        ]);

        $validated['status'] = 'disetujui';
    
        Kendaraan::create($validated);

        SlotParkir::where('id', $request->slot_parkir_id)->update([
            'status' => 'terisi',
        ]);
    
        return redirect()
            ->route('dashboard.admin.kendaraan1')
            ->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show(Kendaraan $kendaraan)
    {
        $kendaraan->load('user');

        return view(
            'dashboard.admin.kendaraan.show',
            compact('kendaraan')
        );
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
    
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nomor_plat' => 'required|string|max:20|unique:kendaraans,nomor_plat,' . $id,
            'merk' => 'required|string|max:100',
            'warna' => 'required|string|max:50',
            'jenis_kendaraan' => 'required|in:mobil,motor',
            'slot_parkir_id' => 'required|exists:slot_parkirs,id',
        ]);

        $validated['status'] = 'disetujui';
    
        // Jika slot parkir berubah, lepaskan status slot lama
        if ($kendaraan->slot_parkir_id && $kendaraan->slot_parkir_id != $request->slot_parkir_id) {
            SlotParkir::where('id', $kendaraan->slot_parkir_id)->update(['status' => 'tersedia']);
        }
    
        // Update status slot parkir baru
        SlotParkir::where('id', $request->slot_parkir_id)->update(['status' => 'terisi']);
    
        $kendaraan->update($validated);
    
        return redirect()
            ->route('dashboard.admin.kendaraan1')
            ->with('success', 'Data kendaraan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // 1. Cari data kendaraan beserta ID slotnya
        $kendaraan = Kendaraan::findOrFail($id);
    
        // 2. Simpan ID slot sebelum kendaraannya dihapus
        $slotId = $kendaraan->slot_parkir_id;
    
        // 3. Hapus kendaraan
        $kendaraan->delete();
    
        // 4. Ubah status slot menjadi 'tersedia' jika sebelumnya memiliki slot
        if ($slotId) {
            SlotParkir::where('id', $slotId)->update([
                'status' => 'tersedia',
            ]);
        }
    
        return redirect()
            ->route('dashboard.admin.kendaraan1')
            ->with('success', 'Kendaraan berhasil dihapus dan slot parkir kembali tersedia.');
    }
}
