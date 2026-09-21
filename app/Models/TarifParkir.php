<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TarifParkir extends Model
{
    protected $fillable = [
        'jenis_kendaraan',
        'tarif',
    ];

    protected $casts = [
        'tarif' => 'decimal:2',
    ];
}
