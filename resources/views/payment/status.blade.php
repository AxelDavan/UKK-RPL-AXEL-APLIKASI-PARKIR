@if ($payment->status === 'berhasil')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safe Park - Pembayaran Berhasil</title>
  <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          },
          colors: {
            brand: {
              50: '#eff6ff',
              100: '#dbeafe',
              500: '#3b82f6',
              600: '#0053db',
              700: '#004ac6',
              800: '#003ea8',
            },
            success: {
              50: '#ecfdf5',
              100: '#d1fae5',
              500: '#10b981',
              600: '#059669',
              700: '#047857',
            },
            surface: '#faf8ff',
          }
        }
      }
    }
  </script>
  <style>
    @keyframes checkPop {
      0% { transform: scale(0.6); opacity: 0; }
      60% { transform: scale(1.1); opacity: 1; }
      100% { transform: scale(1); opacity: 1; }
    }
    @keyframes pulseRing {
      0% { transform: scale(0.95); opacity: 0.8; }
      50% { transform: scale(1.08); opacity: 0.3; }
      100% { transform: scale(0.95); opacity: 0.8; }
    }
    .animate-check {
      animation: checkPop 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .animate-ring-pulse {
      animation: pulseRing 2.8s ease-in-out infinite;
    }
  </style>
</head>
<body class="bg-surface text-slate-800 font-sans min-h-screen py-8 px-4 sm:py-12 flex flex-col justify-between items-center selection:bg-brand-100 selection:text-brand-700">

  <!-- Top App Navigation / Status Bar -->
  <header class="w-full max-w-[600px] flex items-center justify-between mb-6">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl bg-brand-600 text-white flex items-center justify-center font-extrabold text-xl shadow-md shadow-brand-600/20">
        P
      </div>
      <div>
        <div class="flex items-center gap-2">
          <span class="text-base font-bold text-slate-900 tracking-tight">Safe Park</span>
          <span class="text-[10px] font-semibold bg-brand-50 text-brand-700 px-2 py-0.5 rounded-full border border-brand-100">RECEIPT</span>
        </div>
        <p class="text-xs text-slate-500 font-medium">Smart Apartment Parking System</p>
      </div>
    </div>
    
    <div class="flex items-center gap-1.5 bg-white border border-slate-200/80 px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 shadow-sm">
      <i class="ph-bold ph-shield-check text-success-600 text-sm"></i>
      <span>Resmi & Terverifikasi</span>
    </div>
  </header>

  <!-- Main Container: Centered Receipt Card (max-w: 600px) -->
  <main class="w-full max-w-[600px] bg-white rounded-3xl border border-slate-200/90 shadow-[0_12px_40px_-15px_rgba(0,83,219,0.07)] overflow-hidden relative">
    
    <!-- Top Success Decorative Banner -->
    <div class="h-2 w-full bg-gradient-to-r from-success-500 via-emerald-400 to-brand-600"></div>

    <div class="p-6 sm:p-8">

      <!-- 1. Success Header -->
      <section class="text-center pt-2 pb-6 flex flex-col items-center">
        <div class="relative mb-5 flex items-center justify-center">
          <div class="absolute w-24 h-24 rounded-full bg-success-100/60 animate-ring-pulse"></div>
          <div class="relative w-20 h-20 rounded-full bg-gradient-to-tr from-success-500 to-emerald-400 text-white flex items-center justify-center shadow-lg shadow-success-500/30 animate-check">
            <i class="ph-bold ph-check text-4xl"></i>
          </div>
        </div>

        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-2">
          Pembayaran Berhasil!
        </h1>
        <p class="text-sm sm:text-base text-slate-500 max-w-md mx-auto leading-relaxed">
          Terima kasih, alokasi slot parkir langganan Anda telah <span class="text-success-600 font-semibold">aktif</span> dan terdaftar di sistem gerbang otomatis.
        </p>

        <!-- 3. Access Status Badge (Highlight Banner) -->
        <div class="mt-5 w-full bg-gradient-to-r from-success-50 via-emerald-50/70 to-teal-50 border border-success-200/70 rounded-2xl p-3.5 flex items-center justify-between gap-3 text-left">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-xl bg-success-500 text-white flex items-center justify-center shadow-sm flex-shrink-0">
              <i class="ph-fill ph-check-circle text-xl"></i>
            </div>
            <div>
              <div class="text-[11px] font-bold text-success-700 uppercase tracking-wider">Status Hak Akses Kavling</div>
              <div class="text-xs sm:text-sm font-extrabold text-slate-900 flex items-center gap-1.5">
                <span>AKTIF (DEDICATED OWNER)</span>
              </div>
            </div>
          </div>
          <span class="inline-flex items-center gap-1 bg-success-600 text-white text-[11px] font-bold px-2.5 py-1 rounded-full shadow-sm flex-shrink-0">
            <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span>
            SIAP DIGUNAKAN
          </span>
        </div>
      </section>

      <!-- Receipt Notch / Decorative Divider -->
      <div class="relative my-2">
        <div class="border-t-2 border-dashed border-slate-200"></div>
        <div class="absolute -left-10 sm:-left-12 -top-3 w-6 h-6 rounded-full bg-surface border-r border-slate-200/80"></div>
        <div class="absolute -right-10 sm:-right-12 -top-3 w-6 h-6 rounded-full bg-surface border-l border-slate-200/80"></div>
      </div>

      <!-- 2. Transaction Receipt Card (Bukti Pembayaran) -->
      <section class="py-4">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-2">
            <i class="ph-bold ph-receipt text-slate-700 text-lg"></i>
            <h2 class="text-sm sm:text-base font-bold text-slate-800 tracking-tight">Rincian Transaksi</h2>
          </div>
          <span class="text-xs font-mono text-slate-600 font-semibold bg-slate-100 px-2.5 py-1 rounded-md">
            {{ $payment->order_id }}
          </span>
        </div>

        <div class="space-y-3 text-sm">
          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">ID Transaksi</span>
            <span class="font-mono font-bold text-slate-900">{{ $payment->order_id }}</span>
          </div>

          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Waktu Transaksi</span>
            <span class="font-medium text-slate-800">
              {{ $payment->updated_at ? $payment->updated_at->format('d M Y, H:i') . ' WIB' : '-' }}
            </span>
          </div>

          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Slot Parkir</span>
            <div class="text-right">
              <span class="font-bold text-slate-900">{{ $payment->slotParkir->areaParkir->nama_area ?? 'Tower A' }}, </span>
              <span class="inline-block bg-brand-50 text-brand-700 font-bold px-2 py-0.5 rounded border border-brand-100 text-xs">
                Slot {{ $payment->slotParkir->kode_slot ?? '-' }}
              </span>
            </div>
          </div>

          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Kendaraan</span>
            <div class="flex items-center gap-1.5 font-medium text-slate-800">
              <i class="ph-bold ph-motorcycle text-slate-600 text-base"></i>
              <span>{{ $payment->pemesanan->kendaraan->jenis_kendaraan ?? 'Kendaraan' }} - <strong class="font-mono text-slate-900">{{ $payment->pemesanan->kendaraan->nomor_plat ?? '-' }}</strong></span>
            </div>
          </div>

          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Durasi Langganan</span>
            <span class="font-semibold text-slate-800">{{ $payment->pemesanan->durasi ?? '-' }}</span>
          </div>

          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Metode Pembayaran</span>
            <div class="flex items-center gap-1.5">
              <span class="font-bold text-xs bg-slate-900 text-white px-2 py-0.5 rounded">{{ strtoupper($payment->payment_method ?? 'QRIS') }}</span>
              <span class="font-medium text-slate-700 text-xs">(Midtrans Gateway)</span>
            </div>
          </div>

          <div class="flex justify-between items-center pt-3 pb-1">
            <div>
              <span class="text-sm font-bold text-slate-900">Total Dibayar</span>
              <p class="text-[11px] text-slate-400 font-normal">Sudah termasuk PPN 11% & Asuransi IoT</p>
            </div>
            <span class="text-xl sm:text-2xl font-extrabold text-brand-700 tracking-tight font-mono">
              Rp {{ number_format($payment->amount ?? 0, 0, ',', '.') }}
            </span>
          </div>
        </div>
      </section>

      <!-- IoT Access Notice Box -->
      <div class="mt-4 bg-slate-50 border border-slate-200/80 rounded-2xl p-4 flex items-start gap-3">
        <i class="ph-bold ph-broadcast text-brand-600 text-xl flex-shrink-0 mt-0.5"></i>
        <div class="text-xs text-slate-600 leading-relaxed">
          <p class="font-semibold text-slate-800 mb-0.5">Sinkronisasi Gerbang Otomatis (ANPR/RFID)</p>
          Nomor plat <span class="font-mono font-bold text-slate-800">{{ $payment->pemesanan->kendaraan->nomor_plat ?? '-' }}</span> kini otomatis dikenali sensor kamera di Gerbang Masuk & Keluar {{ $payment->slotParkir->areaParkir->nama_area ?? 'Tower A' }}. Kartu akses fisik cadangan dapat diambil di pos security.
        </div>
      </div>

      <!-- 4. Action Buttons -->
      <section class="mt-8 space-y-3">
        <a href="{{ route('dashboard') }}" class="w-full bg-brand-700 hover:bg-brand-800 active:scale-[0.99] transition-all duration-150 text-white font-bold py-3.5 px-6 rounded-xl flex items-center justify-center gap-2 shadow-lg shadow-brand-700/25">
          <i class="ph-bold ph-house text-lg"></i>
          <span>Kembali ke Dashboard Beranda</span>
        </a>

        <button type="button" onclick="window.print()" class="w-full bg-white hover:bg-slate-50 active:bg-slate-100 transition-colors border border-slate-200 text-slate-700 hover:text-slate-900 font-semibold py-3.5 px-6 rounded-xl flex items-center justify-center gap-2 text-sm shadow-sm">
          <i class="ph-bold ph-file-pdf text-red-500 text-lg"></i>
          <span>Cetak / Simpan Struk PDF</span>
        </button>
      </section>

      <!-- Bottom Security & Help Links -->
      <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
        <div class="flex items-center gap-1">
          <i class="ph-bold ph-lock-key text-slate-400"></i>
          <span>ID Validasi: {{ $payment->order_id }}</span>
        </div>
        <a href="#" class="text-brand-600 hover:underline font-medium">Butuh Bantuan Kendala?</a>
      </div>

    </div>
  </main>

  <footer class="mt-8 text-center text-xs text-slate-400">
    <p>© 2026 Safe Park — Smart Apartment Parking System. Hak cipta dilindungi.</p>
  </footer>

</body>
</html>

@else
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Safe Park - Pembayaran Gagal</title>
  <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          },
          colors: {
            brand: {
              50: '#eff6ff',
              100: '#dbeafe',
              500: '#3b82f6',
              600: '#0053db',
              700: '#004ac6',
              800: '#003ea8',
            },
            surface: '#faf8ff',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-surface text-slate-800 font-sans min-h-screen py-8 px-4 sm:py-12 flex flex-col justify-between items-center">

  <header class="w-full max-w-[600px] flex items-center justify-between mb-6">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl bg-brand-600 text-white flex items-center justify-center font-extrabold text-xl shadow-md shadow-brand-600/20">
        P
      </div>
      <div>
        <div class="flex items-center gap-2">
          <span class="text-base font-bold text-slate-900 tracking-tight">Safe Park</span>
          <span class="text-[10px] font-semibold bg-brand-50 text-brand-700 px-2 py-0.5 rounded-full border border-brand-100">RECEIPT</span>
        </div>
        <p class="text-xs text-slate-500 font-medium">Smart Apartment Parking System</p>
      </div>
    </div>
  </header>

  <main class="w-full max-w-[600px] bg-white rounded-3xl border border-slate-200/90 shadow-lg overflow-hidden relative">
    <div class="h-2 w-full bg-gradient-to-r from-red-500 via-rose-400 to-brand-600"></div>
    <div class="p-6 sm:p-8">
      
      <section class="text-center pt-2 pb-6 flex flex-col items-center">
        <div class="relative mb-5 flex items-center justify-center">
          <div class="w-20 h-20 rounded-full bg-red-100 border border-red-200 text-red-600 flex items-center justify-center shadow-lg shadow-red-500/10">
            <i class="ph-bold ph-x text-4xl"></i>
          </div>
        </div>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-2">Pembayaran Gagal atau Kadaluwarsa</h1>
        <p class="text-sm sm:text-base text-slate-500 max-w-md mx-auto leading-relaxed">Batas waktu transaksi telah habis atau pembayaran tidak dapat terverifikasi.</p>
        
        <div class="mt-5 w-full bg-red-50 border border-red-200 rounded-2xl p-4 flex items-center gap-3 text-left">
          <div class="w-9 h-9 rounded-xl bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0">
            <i class="ph-fill ph-warning-circle text-xl"></i>
          </div>
          <p class="text-xs sm:text-sm text-red-800 font-medium leading-relaxed">
            Jangan khawatir, slot parkir <strong>Slot {{ $payment->slotParkir->kode_slot ?? '-' }}</strong> belum terpotong dari akun Anda. Silakan coba bayar ulang atau pilih slot lain.
          </p>
        </div>
      </section>

      <div class="relative my-2">
        <div class="border-t-2 border-dashed border-slate-200"></div>
        <div class="absolute -left-10 sm:-left-12 -top-3 w-6 h-6 rounded-full bg-surface border-r border-slate-200/80"></div>
        <div class="absolute -right-10 sm:-right-12 -top-3 w-6 h-6 rounded-full bg-surface border-l border-slate-200/80"></div>
      </div>

      <section class="py-4">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-2">
            <i class="ph-bold ph-receipt text-slate-700 text-lg"></i>
            <h2 class="text-sm sm:text-base font-bold text-slate-800 tracking-tight">Detail Pemesanan</h2>
          </div>
          <span class="text-xs font-mono text-slate-600 font-semibold bg-slate-100 px-2.5 py-1 rounded-md">{{ $payment->order_id }}</span>
        </div>

        <div class="space-y-3 text-sm">
          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">ID Transaksi</span>
            <span class="font-mono font-bold text-slate-900">{{ $payment->order_id }}</span>
          </div>
          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Waktu Transaksi</span>
            <span class="font-medium text-slate-800">{{ $payment->updated_at ? $payment->updated_at->format('d M Y, H:i') . ' WIB' : '-' }}</span>
          </div>
          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Slot Parkir</span>
            <div class="text-right">
              <span class="font-bold text-slate-900">{{ $payment->slotParkir->areaParkir->nama_area ?? 'Tower A' }}, </span>
              <span class="inline-block bg-brand-50 text-brand-700 font-bold px-2 py-0.5 rounded border border-brand-100 text-xs">Slot {{ $payment->slotParkir->kode_slot ?? '-' }}</span>
            </div>
          </div>
          <div class="flex justify-between items-center py-2 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Status</span>
            <span class="inline-flex items-center gap-1 bg-red-100 text-red-700 text-xs font-bold px-3 py-1 rounded-full border border-red-200">
              <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>Gagal / Expired
            </span>
          </div>
          <div class="flex justify-between items-center pt-3 pb-1">
            <div>
              <span class="text-sm font-bold text-slate-900">Total Tagihan</span>
            </div>
            <span class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight font-mono">
              Rp {{ number_format($payment->amount ?? 0, 0, ',', '.') }}
            </span>
          </div>
        </div>
      </section>

      <section class="mt-8 space-y-3">
        <a href="{{ route('payment', $payment->id) }}" class="w-full bg-brand-700 hover:bg-brand-800 text-white font-bold py-3.5 px-6 rounded-xl flex items-center justify-center gap-2 shadow-lg">
          <i class="ph-bold ph-arrows-clockwise text-lg"></i>
          <span>Coba Pembayaran Ulang</span>
        </a>
        <a href="{{ route('pemesanan') }}" class="w-full bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 font-semibold py-3.5 px-6 rounded-xl flex items-center justify-center gap-2 text-sm shadow-sm">
          <i class="ph-bold ph-arrow-left text-lg"></i>
          <span>Kembali ke Halaman Pemesanan</span>
        </a>
      </section>

      <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
        <div class="flex items-center gap-1">
          <i class="ph-bold ph-lock-key text-slate-400"></i>
          <span>ID Validasi: {{ $payment->order_id }}</span>
        </div>
        <a href="#" class="text-brand-600 hover:underline font-medium flex items-center gap-1">
          <i class="ph-bold ph-question text-sm"></i>
          <span>Butuh Bantuan?</span>
        </a>
      </div>

    </div>
  </main>

  <footer class="mt-8 text-center text-xs text-slate-400">
    <p>© 2026 Safe Park — Smart Apartment Parking System. Hak cipta dilindungi.</p>
  </footer>

</body>
</html>
@endif