<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kode_unik',
        'nama_tamu',
        'nomor_whatsapp',
        'jenis_kendaraan',
        'nomor_plat',
        'waktu_kunjungan',
        'status',
        'waktu_masuk',
        'waktu_keluar',
        'durasi_jam',
        'total_tarif',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaksiParkir()
    {
        return $this->hasMany(TransaksiParkir::class, 'tamu_id');
    }
}