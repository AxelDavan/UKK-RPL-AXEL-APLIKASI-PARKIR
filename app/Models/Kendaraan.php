<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kendaraan extends Model
{
    protected $fillable = [
        'user_id',
        'nomor_plat',
        'merk',
        'warna',
        'jenis_kendaraan',
        'slot_parkir_id',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'jenis_kendaraan' => 'string',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function slotParkir() 
    {
        return $this->belongsTo(SlotParkir::class, 'slot_parkir_id');
    }

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }
}
