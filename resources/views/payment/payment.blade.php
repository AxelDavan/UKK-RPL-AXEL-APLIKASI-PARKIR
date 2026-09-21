<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran Booking Slot - Safe Park</title>
  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
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
              50: '#eef4ff',
              100: '#e0ecff',
              200: '#c7dcfe',
              500: '#2563eb',
              600: '#0053db',
              700: '#004ac6',
              800: '#003ca0',
              900: '#002f80'
            },
            surface: {
              bg: '#faf8ff',
              border: '#c3c6d7',
              borderLight: '#e2e5f1'
            }
          }
        }
      }
    }
  </script>
  <style>
    body {
      background-color: #faf8ff;
      font-family: 'Plus Jakarta Sans', sans-serif;
      -webkit-font-smoothing: antialiased;
    }
    .custom-scrollbar::-webkit-scrollbar {
      width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background-color: #cbd5e1;
      border-radius: 9999px;
    }
  </style>
</head>
<body class="min-h-screen flex flex-col justify-between text-slate-800 antialiased p-4 md:py-10">

  <!-- MAIN WRAPPER -->
  <main class="w-full max-w-[800px] mx-auto space-y-6">

    <!-- TOP HEADER -->
    <div class="flex items-center justify-between">
      <a href="{{ route('pemesanan') }}" class="inline-flex items-center gap-2 px-3.5 py-2 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 hover:text-[#004ac6] rounded-xl text-xs font-semibold shadow-xs transition select-none">
        <i class="ph-bold ph-arrow-left text-sm text-[#004ac6]"></i>
        <span>Kembali ke Pemesanan</span>
      </a>
    </div>

    <header class="bg-white rounded-2xl border border-[#c3c6d7] p-4 md:px-6 md:py-4 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
      <!-- Logo Branding -->
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#0053db] to-[#004ac6] flex items-center justify-center text-white shadow-md shadow-blue-500/20">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 256 256">
            <path d="M208,40H48A16,16,0,0,0,32,56V200a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V56A16,16,0,0,0,208,40ZM140,144H104v32a8,8,0,0,1-16,0V80h52a36,36,0,0,1,0,72Zm0-16a20,20,0,0,0,0-40H104v40Z"></path>
          </svg>
        </div>
        <div>
          <div class="flex items-center gap-2">
            <h1 class="text-xl font-extrabold tracking-tight text-slate-900 leading-none">Safe Park</h1>
            <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded-full bg-blue-50 text-[#004ac6] border border-blue-200">Payment Gateway</span>
          </div>
          <p class="text-xs text-slate-500 font-medium mt-0.5">Sistem Pembayaran Booking Slot Aman & Terverifikasi</p>
        </div>
      </div>

      <!-- Payment Countdown Timer Badge -->
      <div class="flex items-center gap-2.5 px-3.5 py-2 rounded-xl bg-amber-50/90 border border-amber-200/80 text-amber-900 shadow-xs">
        <span class="relative flex h-2.5 w-2.5">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-500"></span>
        </span>
        <div class="text-xs font-semibold">
          <span class="text-slate-600 hidden sm:inline">Selesaikan pembayaran dalam</span>
          <span class="text-slate-600 sm:hidden">Batas:</span>
          <span class="font-mono font-bold text-amber-700 bg-white px-2 py-0.5 rounded-md border border-amber-200 ml-1 tracking-wider text-sm" id="countdown-timer">14:59</span>
        </div>
      </div>
    </header>

    <!-- STEP PROGRESS BAR / SECURE NOTIFICATION -->
    <div class="flex items-center justify-between px-2 text-xs text-slate-500 font-medium">
      <div class="flex items-center gap-2 text-[#004ac6] font-semibold">
        <i class="ph-bold ph-shield-check text-base"></i>
        <span>Enkripsi Bank-Grade 256-Bit Dilindungi</span>
      </div>
      <div class="flex items-center gap-1.5 text-slate-500">
        <span>Order ID:</span>
        <span class="font-mono font-semibold text-slate-700">{{ $payment->order_id }}</span>
      </div>
    </div>

    <!-- 1. ORDER SUMMARY CARD -->
    <section class="bg-white rounded-2xl border border-[#c3c6d7] p-5 md:p-7 shadow-sm space-y-6">
      
      <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-slate-100 gap-2">
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#004ac6] flex items-center justify-center">
            <i class="ph-bold ph-receipt text-xl"></i>
          </div>
          <div>
            <h2 class="text-lg font-bold text-slate-900 leading-tight">Detail Alokasi Slot Parkir</h2>
            <p class="text-xs text-slate-500">Konfirmasi kavling khusus residen unit owner</p>
          </div>
        </div>
        <span class="self-start sm:self-auto inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 bg-blue-50/80 px-3 py-1 rounded-full border border-blue-200">
          <i class="ph-bold ph-crown text-amber-500"></i> Dedicated Owner
        </span>
      </div>

      <!-- Information List -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
        
        <!-- Lokasi & Slot -->
        <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#faf8ff] border border-[#e2e5f1]">
          <div class="w-8 h-8 rounded-lg bg-blue-100 text-[#004ac6] flex items-center justify-center shrink-0 mt-0.5">
            <i class="ph-bold ph-map-pin text-lg"></i>
          </div>
          <div class="space-y-0.5">
            <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Lokasi & Slot</span>
            <div class="text-sm font-bold text-slate-800 flex items-center gap-2">
              <span>{{ $payment->slotParkir->areaParkir->nama_area ?? 'Tower A' }}</span>
              <span class="px-2 py-0.5 text-xs font-extrabold bg-[#004ac6] text-white rounded-md">Slot {{ $payment->slotParkir->kode_slot ?? '-' }}</span>
            </div>
          </div>
        </div>

        <!-- Kendaraan -->
        <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#faf8ff] border border-[#e2e5f1]">
          <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0 mt-0.5">
            <i class="ph-bold ph-motorcycle text-lg"></i>
          </div>
          <div class="space-y-0.5">
            <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Kendaraan Terdaftar</span>
            <div class="text-sm font-bold text-slate-800 flex items-center gap-2">
              <span class="capitalize">{{ $payment->pemesanan->kendaraan->jenis_kendaraan ?? 'Kendaraan' }}</span>
              <span class="font-mono bg-white px-2 py-0.5 rounded border border-slate-200 text-slate-700 text-xs font-bold">{{ $payment->pemesanan->kendaraan->nomor_plat ?? '-' }}</span>
            </div>
          </div>
        </div>

        <!-- Durasi Langganan -->
        <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#faf8ff] border border-[#e2e5f1]">
          <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5">
            <i class="ph-bold ph-calendar-check text-lg"></i>
          </div>
          <div class="space-y-0.5">
            <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Durasi Langganan</span>
            <div class="text-sm font-bold text-slate-800">
              {{ $payment->pemesanan->durasi ?? '-' }}
            </div>
          </div>
        </div>

        <!-- Tanggal Mulai -->
        <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#faf8ff] border border-[#e2e5f1]">
          <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center shrink-0 mt-0.5">
            <i class="ph-bold ph-clock text-lg"></i>
          </div>
          <div class="space-y-0.5">
            <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Periode Aktif</span>
            <div class="text-sm font-bold text-slate-800">
              Mulai {{ $payment->pemesanan->tanggal_mulai ? \Carbon\Carbon::parse($payment->pemesanan->tanggal_mulai)->format('d M Y') : '-' }}
            </div>
          </div>
        </div>

      </div>

      <!-- Price Breakdown Accordion / Box -->
      <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50/70 p-4.5 space-y-3">
        <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Rincian Pembayaran</div>
        
        <div class="space-y-2 text-sm">
          <div class="flex justify-between items-center text-slate-600">
            <span>Biaya Langganan Slot</span>
            <span class="font-medium text-slate-900">Rp {{ number_format($payment->amount, 0, ',', '.') }}</span>
          </div>

          <div class="flex justify-between items-center text-slate-600">
            <span class="flex items-center gap-1">
              Biaya Layanan & Pemeliharaan Gerbang IoT
              <i class="ph-fill ph-info text-slate-400 text-xs cursor-pointer" title="Termasuk sistem sensor gate dan QR digital"></i>
            </span>
            <span class="font-medium text-emerald-600">GRATIS</span>
          </div>
        </div>

        <!-- Total Pembayaran -->
        <div class="pt-3 border-t border-slate-200 flex justify-between items-end">
          <div>
            <span class="text-xs font-semibold text-slate-500 uppercase">Total Pembayaran</span>
            <p class="text-xs text-slate-400">Sudah termasuk PPN 11% & asuransi parkir</p>
          </div>
          <div class="text-right">
            <span class="text-2xl md:text-3xl font-extrabold text-[#004ac6] tracking-tight font-mono">
              Rp {{ number_format($payment->amount ?? 0, 0, ',', '.') }}
            </span>
          </div>
        </div>
      </div>

    </section>

    <!-- 2. PAYMENT METHOD OPTIONS -->
    <section class="bg-white rounded-2xl border border-[#c3c6d7] p-5 md:p-7 shadow-sm space-y-5">
      
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#004ac6] flex items-center justify-center">
            <i class="ph-bold ph-credit-card text-xl"></i>
          </div>
          <div>
            <h2 class="text-lg font-bold text-slate-900 leading-tight">Pilih Metode Pembayaran</h2>
            <p class="text-xs text-slate-500">Pilih opsi transaksi yang paling nyaman bagi Anda</p>
          </div>
        </div>
        <span class="text-xs text-slate-400 flex items-center gap-1">
          <i class="ph-bold ph-lock-key"></i> Aman
        </span>
      </div>

      <!-- Payment Method Radio List -->
      <div class="space-y-3.5" id="payment-accordion">
        
        <!-- OPTION 1: QRIS -->
        <div class="border-2 border-[#004ac6] bg-blue-50/20 rounded-xl transition-all overflow-hidden" id="option-qris-container">
          <label class="p-4 flex items-center justify-between cursor-pointer select-none">
            <div class="flex items-center gap-3.5">
              <input type="radio" name="payment_method" value="qris" checked class="w-4 h-4 text-[#004ac6] focus:ring-[#004ac6] border-slate-300">
              <div class="w-9 h-9 rounded-lg bg-white border border-slate-200 flex items-center justify-center shadow-xs">
                <i class="ph-bold ph-qr-code text-xl text-[#004ac6]"></i>
              </div>
              <div>
                <div class="flex items-center gap-2 flex-wrap">
                  <span class="font-bold text-slate-900 text-sm">QRIS / E-Wallet</span>
                  <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider flex items-center gap-1">
                    <i class="ph-bold ph-lightning"></i> Direkomendasikan
                  </span>
                </div>
                <p class="text-xs text-slate-500 mt-0.5">GoPay, OVO, ShopeePay, DANA, BCA Mobile, & LinkAja</p>
              </div>
            </div>
            
            <div class="hidden sm:flex items-center gap-1.5 opacity-85">
              <span class="px-2 py-1 bg-white rounded border border-slate-200 text-[10px] font-extrabold text-blue-600">QRIS</span>
              <span class="px-2 py-1 bg-white rounded border border-slate-200 text-[10px] font-bold text-emerald-600">GoPay</span>
              <span class="px-2 py-1 bg-white rounded border border-slate-200 text-[10px] font-bold text-purple-600">OVO</span>
              <span class="px-2 py-1 bg-white rounded border border-slate-200 text-[10px] font-bold text-orange-600">ShopeePay</span>
            </div>
          </label>
        </div>

      </div>

    </section>

    <!-- 3. FOOTER ACTIONS & CHECKOUT CTA -->
    <div class="space-y-3.5 pt-2">
      
      <!-- Primary CTA Button -->
      <p class="text-xs text-gray-500 mt-2 text-center">*Klik tombol ini jika ingin melakukan pembayaran via Midtrans</p>
      <button type="button" id="pay-button" class="w-full py-4 px-6 rounded-xl bg-gradient-to-r from-[#0053db] to-[#004ac6] hover:from-[#004ac6] hover:to-[#003ca0] text-white font-bold text-base md:text-lg shadow-lg shadow-blue-600/25 transition-all transform active:scale-[0.99] flex items-center justify-center gap-3">
        <i class="ph-bold ph-check-circle text-2xl"></i>
        <span>Konfirmasi & Bayar Sekarang</span>
        <span class="font-mono text-sm font-normal bg-white/20 px-2 py-0.5 rounded ml-1">Rp {{ number_format($payment->amount ?? 0, 0, ',', '.') }}</span>
      </button>

      <!-- Tombol Simulasi Pembayaran untuk Asesor UKK -->
      <div class="mt-6 text-center">
          <a href="{{ route('simulasi.sukses', $payment->id) }}" 
             class="w-full inline-flex justify-center items-center gap-2 bg-white hover:bg-white text-black font-bold py-3 px-6 rounded-xl shadow-lg transition-all active:scale-95">
              <span class="ph-bold ph-check-circle text-2xl"></span>
              Bayar Sekarang / Simulasi Berhasil
          </a>
          <p class="text-xs text-gray-500 mt-2">*Klik tombol ini untuk mensimulasikan pembayaran sukses atau gagal tanpa Midtrans</p>
      </div>

      <!-- <a href="{{ route('simulasi.gagal', $payment->id) }}" 
       onclick="return confirm('Yakin ingin membatalkan pembayaran ini?')"
       class="w-full inline-flex justify-center items-center gap-2 bg-white hover:bg-white text-black font-bold py-3 px-4 rounded-xl shadow-md transition-all active:scale-95 text-sm">
        <span class="material-symbols-outlined text-base"></span>
        Batalkan / Simulasi Gagal
      </a> -->

      <!-- Security & Guarantee Notes -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-6 text-xs text-slate-500 pt-1 text-center">
        <div class="flex items-center gap-1.5">
          <span class="text-xs text-gray-500">Pembayaran Anda terenkripsi aman 256-bit SSL</span>
        </div>
        <span class="hidden sm:inline text-slate-300">•</span>
        <div class="flex items-center gap-1.5">
          <i class="ph-fill ph-check-circle text-blue-600"></i>
          <span>Slot {{ $payment->slotParkir->kode_slot ?? '-' }} otomatis terkunci setelah pembayaran sukses</span>
        </div>
      </div>

    </div>

    <!-- SITE FOOTER -->
    <footer class="text-center text-xs text-slate-400 py-4 border-t border-slate-200/80">
      <p>© 2026 SafePark. All rights reserved by Axel Davan Prayoga - SMK N1 SANDEN</p>
    </footer>

  </main>

  <script>
    // Live Countdown Timer
    let duration = 14 * 60 + 59;
    const timerElement = document.getElementById('countdown-timer');
    
    const countdownInterval = setInterval(() => {
      const minutes = Math.floor(duration / 60);
      const seconds = duration % 60;
      
      if (timerElement) {
        timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
      }
      
      if (duration > 0) {
        duration--;
      } else {
        clearInterval(countdownInterval);
        if (timerElement) {
          timerElement.textContent = "00:00";
          timerElement.parentElement.classList.add('bg-red-50', 'text-red-700', 'border-red-200');
        }
      }
    }, 1000);

    // Trigger Midtrans Snap Pop-up
document.getElementById('pay-button').onclick = function(){
  snap.pay('{{ $snapToken }}', {
    onSuccess: function(result){
      // Tembak route update status manual lalu redirect ke status
      fetch("{{ route('simulasi.sukses', $payment->id) }}")
        .then(() => {
          window.location.href = "{{ route('payment.status', $payment->id) }}";
        });
    },
    onError: function(result){
      window.location.href = "{{ route('payment.status', $payment->id) }}";
    }
  });
};
  </script>

</body>
</html>