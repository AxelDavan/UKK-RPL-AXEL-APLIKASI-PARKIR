<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tamu;
use App\Models\Kendaraan;
use App\Models\SlotParkir;
use App\Models\TransaksiParkir;

class OwnerDashboardController extends Controller
{
    public function index() 
    {
        $user = auth()->user();

        // 1. Data Kendaraan Rendra
        $kendaraanUser = Kendaraan::with('areaParkir')->where('user_id', $user->id)->get();
        $totalKendaraan = $kendaraanUser->count();
        $kendaraanIds  = $kendaraanUser->pluck('id');
        $platClean     = $kendaraanUser->pluck('nomor_plat')->map(fn($p) => str_replace(' ', '', $p));

        // 2. Data Slot & Okupansi
        $totalslot  = SlotParkir::count() ?: 150;
        $slotterisi = SlotParkir::whereIn('status', ['terisi', 'occupied', 'status'])->count();
        $persenokupansi = $totalslot > 0 ? round(($slotterisi / $totalslot) * 100) : 0;

        $tamuaktif = Tamu::where('user_id', $user->id)->count();

        // 3. Cari Transaksi Parkir Aktif (Mendukung status 'aktif' maupun 'masuk' & abaikan spasi plat)
        $parkiraktif = TransaksiParkir::with(['kendaraan', 'areaParkir'])
            ->whereIn('status', ['aktif', 'masuk'])
            ->where(function ($q) use ($user, $kendaraanIds, $platClean) {
                $q->where('user_id', $user->id)
                  ->orWhereIn('kendaraan_id', $kendaraanIds)
                  ->orWhereIn(DB::raw("REPLACE(nomor_plat, ' ', '')"), $platClean);
            })
            ->latest('waktu_masuk')
            ->first();

        // 4. Fallback: Jika transaksi parkir belum tercatat, ambil dari Slot Parkir Kendaraan Rendra yang terisi
        if (!$parkiraktif) {
            $kendaraanParkir = $kendaraanUser->firstWhere(fn($k) => !is_null($k->slot_parkir_id));
            if ($kendaraanParkir) {
                $parkiraktif = (object) [
                    'jenis_kendaraan' => $kendaraanParkir->merk ?? $kendaraanParkir->jenis_kendaraan ?? 'Motor',
                    'nomor_plat'      => $kendaraanParkir->nomor_plat,
                    'waktu_masuk'     => $kendaraanParkir->updated_at ?? now(),
                    'areaParkir'      => (object) [
                        'nama_area' => 'Slot A-01'
                    ]
                ];
            }
        }

        // 5. Riwayat Aktivitas
        $aktivitas = TransaksiParkir::where(function ($q) use ($user, $kendaraanIds, $platClean) {
                $q->where('user_id', $user->id)
                  ->orWhereIn('kendaraan_id', $kendaraanIds)
                  ->orWhereIn(DB::raw("REPLACE(nomor_plat, ' ', '')"), $platClean);
            })
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard.owner', compact(
            'user',
            'totalKendaraan',
            'totalslot',
            'slotterisi',
            'persenokupansi',
            'tamuaktif',
            'parkiraktif',
            'aktivitas'
        ));
    }

    public function stats()
    {
        $user = auth()->user();

        $kendaraanUser = Kendaraan::where('user_id', $user->id)->get();
        $kendaraanIds  = $kendaraanUser->pluck('id');
        $platClean     = $kendaraanUser->pluck('nomor_plat')->map(fn($p) => str_replace(' ', '', $p));

        $totalslot  = SlotParkir::count() ?: 150;
        $slotterisi = SlotParkir::whereIn('status', ['terisi', 'occupied', 'status'])->count();
        $persenokupansi = $totalslot > 0 ? round(($slotterisi / $totalslot) * 100) : 0;

        $tamuaktif = Tamu::where('user_id', $user->id)->count();

        $parkiraktif = TransaksiParkir::with(['kendaraan', 'areaParkir'])
            ->whereIn('status', ['aktif', 'masuk'])
            ->where(function ($q) use ($user, $kendaraanIds, $platClean) {
                $q->where('user_id', $user->id)
                  ->orWhereIn('kendaraan_id', $kendaraanIds)
                  ->orWhereIn(DB::raw("REPLACE(nomor_plat, ' ', '')"), $platClean);
            })
            ->latest('waktu_masuk')
            ->first();

        $waktuMasuk = null;
        if ($parkiraktif && $parkiraktif->waktu_masuk) {
            $waktuMasuk = \Carbon\Carbon::parse($parkiraktif->waktu_masuk)->toIso8601String();
        }

        return response()->json([
            'terisi_slot'     => $slotterisi,
            'total_slot'      => $totalslot,
            'persen_okupansi' => $persenokupansi,
            'tamu_aktif'      => $tamuaktif,
            'waktu_masuk'     => $waktuMasuk,
        ]);
    }
}