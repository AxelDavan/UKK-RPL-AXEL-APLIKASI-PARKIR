<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kendaraan;
use App\Models\SlotParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaParkirAdminController extends Controller
{
    public function index(Request $request)
    {
        $areas = AreaParkir::withCount(['slotParkir as terisi_count' => function ($query) {
            $query->where('status', 'terisi');
        }])->orderBy('id')->get();

        $areas->transform(function ($area) {
            $area->terisi = $area->terisi_count;
            $area->tersedia = max(0, $area->kapasitas - $area->terisi);
            $area->percentage = $area->kapasitas > 0 ? round(($area->terisi / $area->kapasitas) * 100) 
            : 0;
            return $area;
        });

        $selectedAreaId = $request->query('area_id', $areas->first()->id ?? null);
        $slots = SlotParkir::where('area_parkir_id', $selectedAreaId)->get();
        $allslots = SlotParkir::all();

        $maxKapasitas = $areas->sum('kapasitas');

        $totalTerisi = $areas->sum('terisi');

        $totalKapasitas = max(0, $maxKapasitas - $totalTerisi);

        $occupancy = $maxKapasitas > 0 ? round(($totalTerisi / $maxKapasitas) * 100, 1) : 0;

        return view('dashboard.admin.peta', compact(
            'areas',
            'selectedAreaId',
            'slots',
            'allslots',
            'totalKapasitas',
            'totalTerisi',
            'maxKapasitas',
            'occupancy'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_area' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        AreaParkir::create($validated);

        return redirect()
            ->route('peta')
            ->with('success', 'Area parkir berhasil ditambahkan.');
    }

    public function update(Request $request, AreaParkir $areaParkir)
    {
        $request->validate([
            'nama_area' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $areaParkir->update([
            'nama_area' => $request->nama_area,
            'kapasitas' => $request->kapasitas,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('peta')
            ->with('success', 'Area parkir berhasil diperbarui.');
    }

    public function destroy(AreaParkir $areaParkir)
    {
        $areaParkir->delete();

        return redirect()
            ->route('peta')
            ->with('success', 'Area parkir berhasil dihapus.');
    }

    public function updateslotstatus(REquest $request, SlotParkir $slotParkir)
    {
        $request->validate([
            'slot_parkir_id' => 'required|exists:slot_parkirs,id',
            'status' => 'required|in:tersedia,terisi,dipesan,maintenance'
        ]);

        $slot = SlotParkir::findOrFail($request->slot_parkir_id);
        $slot->update([
            'status' => $request->status,
        ]);

        return redirect()
            ->route('peta', ['area_id' => $slotParkir->areaParkir->id])
            ->with('success', 'Status slot parkir berhasil diperbarui.');
    }
}