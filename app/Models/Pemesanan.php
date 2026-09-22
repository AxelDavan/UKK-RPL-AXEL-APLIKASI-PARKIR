<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanans';

    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'slot_parkir_id',
        'tipe_booking',
        'tanggal_mulai',
        'durasi',
        'tanggal_selesai',
        'status',
        'catatan',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function slotParkir()
    {
        return $this->belongsTo(SlotParkir::class, 'slot_parkir_id');
    }

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }

    public function statusPayment()
    {
        return $this->belongsTo(StatusPayment::class);
    }
}
