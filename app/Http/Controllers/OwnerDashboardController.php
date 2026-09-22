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

        // 1. Data Kendaraan Owner
        $kendaraanUser = Kendaraan::with('areaParkir', 'slotParkir')->where('user_id', $user->id)->get();
        $totalKendaraan = $kendaraanUser->count();
        $kendaraanIds  = $kendaraanUser->pluck('id');
        $platClean     = $kendaraanUser->pluck('nomor_plat')->map(fn($p) => str_replace(' ', '', $p));

        // 2. Data Slot & Okupansi
        $totalslot  = SlotParkir::count() ?: 150;
        $slotterisi = SlotParkir::whereIn('status', ['terisi', 'occupied', 'status'])->count();
        $persenokupansi = $totalslot > 0 ? round(($slotterisi / $totalslot) * 100) : 0;

        $tamuaktif = Tamu::where('user_id', $user->id)->count();

        // 3. Cari Transaksi Parkir / Pemesanan Slot Aktif Berdasarkan Relasi Slot yang Dipilih User
        $parkiraktif = null;
        if ($totalKendaraan > 0) {
            // Cek dulu dari data transaksi parkir aktif
            $parkiraktif = TransaksiParkir::with(['kendaraan', 'areaParkir'])
                ->whereIn('status', ['aktif', 'masuk'])
                ->where(function ($q) use ($kendaraanIds, $platClean) {
                    $q->whereIn('kendaraan_id', $kendaraanIds)
                      ->orWhereIn(DB::raw("REPLACE(nomor_plat, ' ', '')"), $platClean);
                })
                ->latest('waktu_masuk')
                ->first();
        }

        // Jika tidak ada transaksi, cari pemesanan yang statusnya benar-benar aktif/terisi
        if (!$parkiraktif && $totalKendaraan > 0) {
            $kendaraanberisiSlot = Kendaraan::with(['slotParkir', 'areaParkir'])
            ->where('user_id', $user->id)
            ->whereNotNull('slot_parkir_id')
            ->first();


            // Kalau tidak ketemu yang status aktif, fallback ke relasi slot kendaraan utama
            $kendaraanUtama = $kendaraanberisiSlot ?? $kendaraanUser->first();

            $namaSlotAktif = 'Tower A (Slot Utama)';
            if ($kendaraanUtama && $kendaraanUtama->slotParkir) {
                $namaSlotAktif = $kendaraanUtama->slotParkir->kode_slot; // Ini akan menghasilkan 'A-01'
            } elseif ($kendaraanUtama && $kendaraanUtama->areaParkir) {
                $namaSlotAktif = $kendaraanUtama->areaParkir->nama_slot ?? $kendaraanUtama->areaParkir->nama_area;
            }

            if ($kendaraanUtama) {
                $parkiraktif = (object) [
                    'jenis_kendaraan' => $kendaraanUtama->jenis_kendaraan ?? 'Mobil',
                    'nomor_plat'      => $kendaraanUtama->nomor_plat ?? '-',
                    'waktu_masuk'     => $kendaraanUtama->updated_at ?? $kendaraanUtama->created_at ?? now(),
                    'areaParkir'      => (object) [
                        'nama_area'   => $namaSlotAktif
                    ]
                ];
            }
        }
        $aktivitas = collect();
        if ($totalKendaraan > 0) {
            $aktivitas = TransaksiParkir::where(function ($q) use ($kendaraanIds, $platClean) {
                    $q->whereIn('kendaraan_id', $kendaraanIds)
                      ->orWhereIn(DB::raw("REPLACE(nomor_plat, ' ', '')"), $platClean);
                })
                ->latest()
                ->take(5)
                ->get();
        }

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

    public function kartu()
    {
        $user = auth()->user();

        // Ambil kendaraan milik user yang sedang login (ambil data pertama)
        $kendaraan = \App\Models\Kendaraan::where('user_id', $user->id)->first();

        return view('dashboard.owner.kartu', compact('user', 'kendaraan'));
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

        $parkiraktif = null;
        if ($kendaraanUser->count() > 0) {
            $parkiraktif = TransaksiParkir::with(['kendaraan', 'areaParkir'])
                ->whereIn('status', ['aktif', 'masuk'])
                ->where(function ($q) use ($kendaraanIds, $platClean) {
                    $q->whereIn('kendaraan_id', $kendaraanIds)
                      ->orWhereIn(DB::raw("REPLACE(nomor_plat, ' ', '')"), $platClean);
                })
                ->latest('waktu_masuk')
                ->first();
        }

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