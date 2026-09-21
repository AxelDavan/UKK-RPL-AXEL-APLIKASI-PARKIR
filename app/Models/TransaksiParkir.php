<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiParkir extends Model
{
    protected $table = 'transaksi_parkirs';

    protected $fillable = [
        'user_id',
        'tamu_id',
        'kendaraan_id',
        'area_parkir_id',
        'nomor_plat',
        'jenis_kendaraan',
        'waktu_masuk',
        'tarif',
        'waktu_keluar',
        'petugas_id',
        'status'
    ];

    protected $casts = [
        'waktu_masuk'  => 'datetime',
        'waktu_keluar' => 'datetime',
        'tarif'        => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tamu()
    {
        return $this->belongsTo(Tamu::class, 'tamu_id');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }

    public function karcisMasuk() 
    {
        return $this->hasOne(KarcisMasuk::class, 'transaksi_parkir_id');
    }
}