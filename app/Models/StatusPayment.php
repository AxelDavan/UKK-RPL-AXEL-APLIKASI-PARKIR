<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPayment extends Model
{
    protected $table = 'status_payments';

    protected $fillable = [
        'user_id',
        'pemesanan_id',
        'slot_parkir_id',
        'order_id',
        'amount',
        'status',
    ];

    public function slotParkir()
    {
        return $this->belongsTo(SlotParkir::class, 'slot_parkir_id');
    }

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
    }
}
