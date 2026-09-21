<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlotParkir extends Model
{
    protected $fillable = [
        'area_parkir_id',
        'kode_slot',
        'status',
    ];

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }

    public function kendaraan() 
    {
        return $this->hasOne(Kendaraan::class, 'slot_parkir_id');
    }

}
