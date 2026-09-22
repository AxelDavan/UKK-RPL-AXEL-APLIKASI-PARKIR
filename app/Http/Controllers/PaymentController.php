<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Pemesanan;
use App\Models\SlotParkir;
use App\Models\StatusPayment;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // 1. Tampil Halaman Payment & Buat Snap Token
    public function index($id)
    {
        $payment = StatusPayment::with(['slotParkir.areaParkir', 'pemesanan.kendaraan'])->findOrFail($id);

        // Buat Parameter Transaksi ke Midtrans
        $params = [
            'transaction_details' => [
                'order_id'     => $payment->order_id . '-' . time(),
                'gross_amount' => (int) $payment->amount,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'Penghuni',
                'email'      => auth()->user()->email ?? 'user@safepark.id',
            ],
            'enabled_payments' => ['gopay', 'qris', 'shopeepay', 'bank_transfer'],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
        } catch (\Exception $e) {
            $snapToken = null;
        }

        return view('payment.payment', compact('payment', 'snapToken'));
    }

    // 2. Webhook Callback dari Midtrans (Otomatis saat user bayar)
    public function handleWebhook(Request $request)
    {
        try {
            $notif = new Notification();

            $transaction = $notif->transaction_status;
            $orderId     = $notif->order_id;

            // Ambil ID utama sebelum timestamp (-time())
            $parts = explode('-', $orderId);
            $cleanOrderId = count($parts) >= 3 ? $parts[0] . '-' . $parts[1] . '-' . $parts[2] : $orderId;

            $statusPayment = StatusPayment::where('order_id', $cleanOrderId)->first();
            if (!$statusPayment) {
                return response()->json(['message' => 'Order tidak ditemukan'], 404);
            }

            if ($transaction == 'settlement' || $transaction == 'capture') {
                $statusPayment->update(['status' => 'berhasil']);
                if ($statusPayment->pemesanan) {
                    $pemesanan = $statusPayment->pemesanan;
                    if ($pemesanan->status === 'aktif') {
                        $durasiBaru = match ((int) $statusPayment->amount) {
                            3600000 => '12 Bulan (1 Tahun)',
                            2100000 => '6 Bulan',
                            400000  => '1 Bulan',
                            default => '1 Bulan',
                        };
                        $pemesanan->update([
                            'durasi' => $pemesanan->durasi . ' + ' . $durasiBaru,
                        ]);
                    } else {
                        $pemesanan->update(['status' => 'aktif']);
                    }
                }
                
                // Jangan timpa jika slot sudah terisi
                if ($statusPayment->slotParkir && $statusPayment->slotParkir->status !== 'terisi') {
                    $statusPayment->slotParkir()->update([
                        'status' => 'dipesan'
                    ]);
                }
            } elseif ($transaction == 'pending') {
                $statusPayment->update(['status' => 'pending']);
            } else {
                // Jika GAGAL / EXPIRED / CANCEL
                $statusPayment->update(['status' => 'gagal']);
                if ($statusPayment->pemesanan) {
                    $statusPayment->pemesanan->update(['status' => 'batal']);
                }
                if ($statusPayment->slotParkir && $statusPayment->slotParkir->status !== 'terisi') {
                    $statusPayment->slotParkir()->update([
                        'status' => 'tersedia'
                    ]);
                }
            }

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $payment = StatusPayment::findOrFail($id);
        $status = $request->input('status', 'berhasil');

        $payment->update(['status' => $status]);

        if ($status === 'berhasil') {
            if ($payment->pemesanan) {
                $pemesanan = $payment->pemesanan;
                if ($pemesanan->status === 'aktif') {
                    $durasiBaru = match ((int) $payment->amount) {
                        3600000 => '12 Bulan (1 Tahun)',
                        2100000 => '6 Bulan',
                        400000  => '1 Bulan',
                        default => '1 Bulan',
                    };
                    $pemesanan->update([
                        'durasi' => $pemesanan->durasi . ' + ' . $durasiBaru,
                    ]);
                } else {
                    $pemesanan->update(['status' => 'aktif']);
                }
            }
            
            // Jangan timpa jika slot sudah terisi
            if ($payment->slotParkir && $payment->slotParkir->status !== 'terisi') {
                $payment->slotParkir()->update([
                    'status' => 'dipesan'
                ]);
            }
        } else {
            // Jika GAGAL
            if ($payment->pemesanan) {
                $payment->pemesanan->update(['status' => 'batal']);
            }
            if ($payment->slotParkir && $payment->slotParkir->status !== 'terisi') {
                $payment->slotParkir()->update([
                    'status' => 'tersedia'
                ]);
            }
        }

        return response()->json(['message' => 'Status transaksi diperbarui', 'status' => $status]);
    }

    // Method bayar tanpa midtrans (Simulasi UKK)
    public function simulasiSukses($id)
    {
        $payment = StatusPayment::with(['pemesanan', 'slotParkir'])->findOrFail($id);
    
        $payment->update([
            'status' => 'berhasil'
        ]);
    
        if ($payment->pemesanan) {
            $pemesanan = $payment->pemesanan;

            if ($pemesanan->status === 'aktif') {
                $durasiBaru = match ((int) $payment->amount) {
                    3600000 => '12 Bulan (1 Tahun)',
                    2100000 => '6 Bulan',
                    400000  => '1 Bulan',
                    default => '1 Bulan',
                };

                $pemesanan->update([
                    'durasi' => $pemesanan->durasi . ' + ' . $durasiBaru,
                ]);
            } else {
                $pemesanan->update([
                    'status' => 'aktif'
                ]);
            }
        }
    
        // Jangan timpa jika slot sudah terisi
        if ($payment->slotParkir && $payment->slotParkir->status !== 'terisi') {
            $payment->slotParkir()->update([
                'status' => 'dipesan'
            ]);
        }
    
        return redirect()->route('pemesanan.status', $payment->id)
            ->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }

    public function simulasiGagal($id)
    {
        $payment = StatusPayment::findOrFail($id);

        // 1. Update pembayaran jadi gagal
        $payment->update(['status' => 'gagal']);

        // 2. Update status pemesanan jadi 'batal'
        if ($payment->pemesanan_id) {
            Pemesanan::where('id', $payment->pemesanan_id)->update([
                'status' => 'batal'
            ]);
        }

        // 3. Update status slot parkir jadi 'tersedia' (hanya jika tidak terisi)
        if ($payment->slotParkir && $payment->slotParkir->status !== 'terisi') {
            $payment->slotParkir()->update([
                'status' => 'tersedia'
            ]);
        }

        return redirect()->route('payment.status', $id)->with('error', 'Pembayaran gagal atau dibatalkan.');
    }
}