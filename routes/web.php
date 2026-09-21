<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AnalitikController;
use App\Http\Controllers\AreaParkirAdminController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\KarcisKeluarController;
use App\Http\Controllers\KarcisMasukController;
use App\Http\Controllers\KendaaranAdminController;
use App\Http\Controllers\KendaraanOwnerController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\OwnerDashboardController;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenggunaAdminController;
use App\Http\Controllers\PetugasDashboardController;
use App\Http\Controllers\StatusPaymentController;
use App\Models\Kendaraan;
use App\Models\Tamu;
use Illuminate\Http\Request;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TransaksiParkirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifikasiController;
use App\Models\StatusPayment;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTES
Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/fitur', function () { return view('fitur'); });
Route::get('/review', function () { return view('review'); });
Route::get('/faq', function () { return view('faq'); });

// PROFILE & AUTHENTICATION
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Arahkan ke file Blade baru khusus profil
    Route::get('/profile/password', function () { 
        return view('profile.partials.update-password-form'); 
    })->name('profile.password');

    Route::put('/profile/password', [PasswordController::class, 'update'])->name('password.update');
});

// ROLE DASHBOARDS
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/chart-data', [DashboardController::class, 'chartdata']);
    
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/chart-data', [AdminDashboardController::class, 'chartdata']);
    Route::get('/petugas/dashboard', [PetugasDashboardController::class, 'index'])->name('petugas.dashboard');

    Route::resource('users', UserController::class);
});

// PAYMENT ROUTES
Route::middleware(['auth'])->group(function () {
    Route::get('/payment/{id}', [PaymentController::class, 'index'])->name('payment');
    Route::post('/api/payment-trigger/{id}', [PaymentController::class, 'updateStatus'])->name('payment.trigger');
    Route::get('/simulasi-bayar-sukses/{id}', [PaymentController::class, 'simulasiSukses'])->name('simulasi.sukses');
    Route::get('/simulasi-bayar-gagal/{id}', [PaymentController::class, 'simulasiGagal'])->name('simulasi.gagal');
    Route::get('/pembayaran/status/{id}', [StatusPaymentController::class, 'showStatus'])->name('payment.status');
    Route::get('/api/payment-status/{id}', function ($id) {
        $payment = StatusPayment::find($id);
        return response()->json(['status' => $payment ? $payment->status : 'pending']);
    });
});
Route::post('/api/midtrans-webhook', [PaymentController::class, 'handleWebhook']);

// ADMIN MANAGEMENT ROUTES
Route::middleware('auth')->group(function () {
    Route::get('/dashboard/admin/kendaraan1', [KendaaranAdminController::class, 'index'])->name('dashboard.admin.kendaraan1');
    Route::post('/dashboard/admin/kendaraan1', [KendaaranAdminController::class, 'store'])->name('kendaraan.store');
    Route::get('/dashboard/admin/kendaraan/{kendaraan}', [KendaaranAdminController::class, 'show'])->name('kendaraan.show');
    Route::get('/dashboard/admin/kendaraan/{kendaraan}/edit', [KendaaranAdminController::class, 'edit'])->name('kendaraan.edit');
    Route::put('/dashboard/admin/kendaraan/{kendaraan}', [KendaaranAdminController::class, 'update'])->name('kendaraan.update');
    Route::delete('/dashboard/admin/kendaraan/{kendaraan}', [KendaaranAdminController::class, 'destroy'])->name('kendaraan.destroy');

    Route::get('/dashboard/admin/pengguna', [PenggunaAdminController::class, 'index'])->name('pengguna');
    Route::post('/dashboard/admin/pengguna', [PenggunaAdminController::class, 'store'])->name('pengguna.store');
    Route::get('/dashboard/admin/pengguna/{user}', [PenggunaAdminController::class, 'edit'])->name('pengguna.edit');
    Route::put('/dashboard/admin/pengguna/{user}', [PenggunaAdminController::class, 'update'])->name('pengguna.update');
    Route::delete('/dashboard/admin/pengguna/{user}', [PenggunaAdminController::class, 'destroy'])->name('pengguna.destroy');

    Route::get('/peta', [AreaParkirAdminController::class, 'index'])->name('peta');
    Route::post('/peta/area', [AreaParkirAdminController::class, 'store'])->name('area.parkir.store');
    Route::put('/peta/area/{areaParkir}', [AreaParkirAdminController::class, 'update'])->name('area.parkir.update');
    Route::delete('/peta/area/{areaParkir}', [AreaParkirAdminController::class, 'destroy'])->name('area.parkir.destroy');
    Route::put('/peta/slot/{slotParkir}', [AreaParkirAdminController::class, 'updateslotstatus'])->name('slot.parkir.update');

    Route::get('/analitik', [AnalitikController::class, 'index'])->name('analitik');
    Route::get('/dashboard/admin/analitik/chart-data', [AnalitikController::class, 'chartdataanalis'])->name('analitik.chartdataanalis');
});

// OWNER (RESIDEN) ROUTES
Route::middleware(['auth'])->group(function () {
    Route::get('/owner/dashboard', [OwnerDashboardController::class, 'index'])->name('owner.dashboard');
    Route::get('/owner/kartu', [OwnerDashboardController::class, 'kartu'])->name('owner.kartu');
    Route::get('/owner/dashboard/stats', [OwnerDashboardController::class, 'stats'])->name('owner.dashboard.stats');

    Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
    Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
    Route::get('/pemesanan/slots', [PemesananController::class, 'getSlots'])->name('pemesanan.slots');

    Route::get('/kendaraan', [KendaraanOwnerController::class, 'index'])->name('kendaraan');
    Route::get('/api/kendaraan/real-time', [KendaraanOwnerController::class, 'getStatus'])->name('kendaraan.realtime');

    Route::get('/api/kendaraan/unassigned', [KendaraanOwnerController::class, 'getUnassignedVehicles'])->name('kendaraan.unassigned');
    Route::delete('/kendaraan/{id}', [KendaraanOwnerController::class, 'destroy'])->name('kendaraanowner.destroy');
    Route::get('/user/myslots', [KendaraanOwnerController::class, 'getMySlot'])->name('kendaraan.myslot');
    Route::post('/kendaraan/store', [KendaraanOwnerController::class, 'store'])->name('kendaraan.store.ajax');

    // FORM INVITE TAMU OWNER
    Route::get('/invite', function() {
        return view('dashboard.owner.invite');
    })->name('invite');
    Route::post('/invite/store', [TamuController::class, 'store'])->name('invite.store');
    Route::get('/owner/kartu', function () {
    // Ambil data kendaraan utama milik user yang login
    $kendaraan = \App\Models\Kendaraan::where('user_id', auth()->id())->first();
    
    return view('dashboard.owner.kartu', compact('kendaraan'));
    })->name('kartu');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/owner/bantuan', [BantuanController::class, 'index'])->name('bantuan');
    Route::get('/owner/bantuan/get-chats', [BantuanController::class, 'getChats'])->name('bantuan.get');
    Route::post('/owner/bantuan/kirim-chat', [BantuanController::class, 'kirimChat'])->name('bantuan.kirim');
});

// Route Chat Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/bantuan', [BantuanController::class, 'adminIndex'])->name('admin.bantuan');
    Route::get('/admin/bantuan/users', [BantuanController::class, 'getAdminUsers'])->name('admin.bantuan.users');
    Route::get('/admin/bantuan/chats/{userId}', [BantuanController::class, 'getAdminChats'])->name('admin.bantuan.chats');
    Route::post('/admin/bantuan/kirim/{userId}', [BantuanController::class, 'kirimAdminChat'])->name('admin.bantuan.kirim');
});

Route::get('/list-tamu-undangan', function (Request $request) {
    $userId = auth()->id();

    // Query Tamu milik Owner yang login
    $query = Tamu::where('user_id', $userId);

    // Filter Search
    if ($request->filled('search')) {
        $query->where(function($q) use ($request) {
            $q->where('nama_tamu', 'like', '%' . $request->search . '%')
              ->orWhere('plat_nomor', 'like', '%' . $request->search . '%');
        });
    }

    // Filter Status
    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }

    // Metric Cards Count
    $totalUndangan = Tamu::where('user_id', $userId)->count();
    $tamuDiDalam = Tamu::where('user_id', $userId)->where('status', 'aktif')->count();
    $menungguHadir = Tamu::where('user_id', $userId)->where('status', 'menunggu')->count();
    $kunjunganSelesai = Tamu::where('user_id', $userId)->where('status', 'selesai')->count();

    // Pagination Data
    $tamus = $query->latest()->paginate(10)->withQueryString();

    return view('dashboard.owner.listinvite', compact(
        'tamus', 
        'totalUndangan', 
        'tamuDiDalam', 
        'menungguHadir', 
        'kunjunganSelesai'
    ));
})->middleware('auth')->name('list');

Route::middleware(['auth'])->group(function () {
    Route::get('/aktivitas', function () {
        return view('dashboard.account.aktivitas');
    })->name('aktivitas');
    Route::get('/perangkat', function () {
        return view('dashboard.account.perangkat');
    })->name('perangkat');
});

// PETUGAS POS ROUTES & SCANNER QR
Route::middleware(['auth'])->group(function() {
    Route::get('/petugas/parkir/masuk', [TransaksiParkirController::class, 'masuk'])->name('masuk');
    Route::post('/petugas/parkir/masuk', [TransaksiParkirController::class, 'storeMasuk'])->name('storeMasuk');
    Route::get('/petugas/parkir/keluar', [TransaksiParkirController::class, 'keluar'])->name('keluar');
    Route::post('/petugas/parkir/keluar', [TransaksiParkirController::class, 'storeKeluar'])->name('storeKeluar');

    Route::get('/scanner', function () { return view('dashboard.petugas.scanner'); })->name('scanner');
    Route::get('/scannkeluar', function () { return view('dashboard.petugas.scannkeluar'); })->name('scannkeluar');
    Route::post('/api/scan-masuk-process', [TamuController::class, 'processScanMasuk'])->name('scan.masuk.process');
    Route::post('/api/scan-keluar-process', [TamuController::class, 'processScanKeluar'])->name('scan.keluar.process');

    Route::get('/verifikasi', [VerifikasiController::class, 'index'])->name('verifikasi');
    Route::post('/verifikasi/{id}/status', [VerifikasiController::class, 'update'])->name('verifikasi.update');

    Route::get('/parkir', [ParkirController::class, 'index'])->name('parkir');
    Route::get('/parkir/slot-detail/{id}', [ParkirController::class, 'slotDetail'])->name('parkir.slotDetail');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

    // TABEL TAMU UNTUK ADMIN/PETUGAS
    Route::get('/tamu', [TamuController::class, 'index'])->name('tamu');
    Route::post('/tamu/{id}/checkout', [TamuController::class, 'checkout'])->name('tamu.checkout');
    Route::delete('/tamu/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');

    // KARCIS
    Route::prefix('petugas')->group(function () {
        Route::get('/karsuk', [KarcisMasukController::class, 'index'])->name('karsuk');
        Route::post('/karsuk', [KarcisMasukController::class, 'store'])->name('karsuk.store');
        Route::get('/karsuk/cetak/{id}', [KarcisMasukController::class, 'cetak'])->name('karsuk.cetak');

        Route::get('/karluar', [KarcisKeluarController::class, 'index'])->name('karluar');
        Route::post('/karluar/cari', [KarcisKeluarController::class, 'cari'])->name('karluar.cari');
        Route::post('/karluar/proses', [KarcisKeluarController::class, 'prosesKeluar'])->name('karluar.proses');
        
        Route::get('/dashboard', [PetugasDashboardController::class, 'index'])->name('petugas.dashboard');
        Route::get('/dashboard/stats', [PetugasDashboardController::class, 'stats'])->name('petugas.dashboard.stats');
        Route::post('/verifikasi/{id}', [PetugasDashboardController::class, 'verifikasi'])->name('petugas.verifikasi');
    });
});

require __DIR__.'/auth.php';