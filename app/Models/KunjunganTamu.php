<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KunjunganTamu extends Model
{
    protected $fillable = [
        'user_id',
        'nama_tamu',
        'nomor_telepon',
        'plat_nomor',
        'jenis_kendaraan',
        'warna',
        'waktu_kunjungan',
        'status',
        'disetujui_at',
    ];

    protected $casts = [
        'waktu_kunjungan' => 'datetime',
        'disetujui_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}