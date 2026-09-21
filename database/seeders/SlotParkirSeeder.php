<?php

namespace Database\Seeders;

use App\Models\SlotParkir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlotParkirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 50; $i++) {
            SlotParkir::create([
            'area_parkir_id' => 14,
            'kode_slot' => 'A-' . str_pad($i, 2, '0', STR_PAD_LEFT),
            'status' => 'tersedia',
            ]);
        };
        
        for($i = 1; $i <= 50; $i++) {
            SlotParkir::create([
            'area_parkir_id' => 15,
            'kode_slot' => 'B-' . str_pad($i, 2, '0', STR_PAD_LEFT),
            'status' => 'tersedia',
            ]);
        };

        for($i = 1; $i <= 50; $i++) {
            SlotParkir::create([
            'area_parkir_id' => 16,
            'kode_slot' => 'VIP-' . str_pad($i, 2, '0', STR_PAD_LEFT),
            'status' => 'tersedia',
            ]);
        };
    }
}
