<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KarcisMasuk extends Model
{
    use HasFactory;

    protected $table = 'karcis_masuks';

    protected $fillable = [
        'nomor_karcis',
        'transaksi_parkir_id',
        'petugas_id',
        'jenis_kendaraan',
        'nomor_plat',
        'kategori',
        'waktu_masuk',
        'status',
    ];

    public function transaksiParkir()
    {
        return $this->belongsTo(TransaksiParkir::class, 'transaksi_parkir_id');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
