<?php

namespace App\Http\Controllers;

use App\Models\StatusPayment;
use Illuminate\Http\Request;

class StatusPaymentController extends Controller
{
    public function showStatus($id)
    {
        $statuspayment = StatusPayment::with(['slotParkir.areaParkir', 'pemesanan.kendaraan'])->findOrFail($id);

        //if ($statuspayment->status === 'pending') {
        //    return redirect()->route('payment', $id);
        //}

        // Jika transaksi berhasil -> Aktifkan pemesanan & Kunci Slot
        if ($statuspayment->status === 'berhasil') {
            if ($statuspayment->pemesanan) {
                $statuspayment->pemesanan->update(['status' => 'aktif']);
            }
            if ($statuspayment->slotParkir) {
                $statuspayment->slotParkir->update(['status' => 'dipesan']);
            }
        }

        // Jika transaksi gagal / expired -> Batalkan pemesanan & Lepaskan Slot
        if ($statuspayment->status === 'gagal') {
            if ($statuspayment->pemesanan) {
                $statuspayment->pemesanan->update(['status' => 'batal']);
            }
            if ($statuspayment->slotParkir) {
                $statuspayment->slotParkir->update(['status' => 'tersedia']);
            }
        }

        return view('payment.status', [
            'payment'       => $statuspayment,
            'statuspayment' => $statuspayment
        ]);
    }
}