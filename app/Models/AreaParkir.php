<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaParkir extends Model
{
    protected $table = 'area_parkirs';
    protected $fillable = [
        'nama_area',
        'kapasitas',
        'status',
    ];

    public function tarifParkir()
    {
        return $this->hasMany(TarifParkir::class);
    }

    public function transaksiParkir()
    {
        return $this->hasMany(TransaksiParkir::class, 'area_parkir_id');
    }

    public function slotParkir()
    {
        return $this->hasMany(SlotParkir::class, 'area_parkir_id');
    }
}
