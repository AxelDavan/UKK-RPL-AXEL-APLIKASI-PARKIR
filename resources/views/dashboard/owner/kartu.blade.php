<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safe Park — Kartu Tanda Pemilik</title>
  
  <!-- Fonts: Plus Jakarta Sans & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&family=JetBrains+Mono:wght@600;700&display=swap" rel="stylesheet">
  
  <!-- Material Symbols Outlined -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              DEFAULT: '#004ac6',
              hover: '#003ea8',
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            heading: ['Plus Jakarta Sans', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace']
          }
        }
      }
    }
  </script>

  <style>
    @media print {
      /* Sembunyikan elemen navigasi & tombol saat dicetak */
      .no-print {
        display: none !important;
      }
      body {
        background-color: #ffffff !important;
        padding: 0 !important;
      }
      .ticket-card {
        box-shadow: none !important;
        border: 1px solid #cbd5e1 !important;
        margin: 0 auto !important;
      }
    }
  </style>
</head>
<body class="min-h-screen bg-[#f8f9ff] text-slate-800 font-sans antialiased flex flex-col items-center justify-center p-4">

  <!-- Action Bar / Navigation Top (No Print) -->
  <div class="w-full max-w-sm mb-6 flex items-center justify-between no-print">
    <a href="{{ route('owner.dashboard') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-blue-600 font-heading font-semibold text-sm transition-colors">
      <span class="material-symbols-outlined text-lg">arrow_back</span>
      <span>Kembali</span>
    </a>

    <button onclick="window.print()" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-[#004ac6] hover:bg-blue-700 text-white font-heading font-semibold text-xs shadow-md shadow-blue-600/20 active:scale-95 transition-all">
      <span class="material-symbols-outlined text-sm">print</span>
      <span>Cetak Kartu</span>
    </button>
  </div>

  <!-- TAMPILAN KARCIS KARTU TANDA PEMILIK -->
  <div class="ticket-card w-full max-w-sm bg-white rounded-3xl border border-slate-200/80 shadow-xl overflow-hidden relative">
    
    <!-- Top Decorative Header (Gaya Karcis Safe Park) -->
    <div class="bg-[#004ac6] text-white p-6 text-center relative overflow-hidden">
      <!-- Background pattern simulation -->
      <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
      
      <div class="inline-flex p-2.5 bg-white/10 backdrop-blur-md rounded-2xl mb-3 border border-white/10 shadow-inner">
        <img src="{{ asset('image/screen.webp') }}" alt="Safe Park" class="w-10 h-10 object-contain">
      </div>
      <h1 class="text-xl font-extrabold font-heading tracking-tight">SAFE PARK</h1>
      <p class="text-[11px] text-blue-100 uppercase tracking-widest font-semibold mt-0.5">Kartu Tanda Pemilik Residen</p>
    </div>

    <!-- Ticket Body Content -->
    <div class="p-6 space-y-5">

      <!-- Status Badge & Unit ID -->
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <div>
          <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Nomor Unit</span>
          <span class="text-base font-bold text-slate-900 font-heading">
            Unit #{{ auth()->user()->nomor_unit ?? 'A-01' }}
          </span>
        </div>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-700 border border-emerald-200/60">
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
          Residen Terdaftar
        </span>
      </div>

      <!-- Detail Informasi Pemilik & Kendaraan -->
      <div class="space-y-3">
        <div>
          <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Nama Pemilik</span>
          <span class="text-sm font-bold text-slate-800 font-heading">{{ auth()->user()->name ?? 'Rendra' }}</span>
        </div>

          <div class="grid grid-cols-2 gap-3 pt-1">
          <div>
            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Kendaraan</span>
            <span class="text-xs font-semibold text-slate-700 block mt-0.5">
              {{ $kendaraan->merk ?? 'Belum ada kendaraan' }}
            </span>
          </div>
          <div>
            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Plat Nomor</span>
            <span class="font-mono text-xs font-bold px-2 py-0.5 rounded bg-slate-100 border border-slate-200 text-slate-800 tracking-wider inline-block mt-0.5">
              {{ $kendaraan->nomor_plat ?? '-' }}
            </span>
          </div>
        </div>
      </div>

      <!-- Cut/Tear-off Line Effect (Sisi Karcis) -->
      <div class="relative my-4">
        <div class="absolute -left-9 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-[#f8f9ff] border-r border-slate-200/80"></div>
        <div class="absolute -right-9 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-[#f8f9ff] border-l border-slate-200/80"></div>
        <div class="border-b-2 border-dashed border-slate-200"></div>
      </div>

      <!-- Kode Akses Residen & Instruksi Petugas (Ganti QR Code) -->
      <div class="flex flex-col items-center justify-center text-center space-y-3 pt-1">
        
        <!-- Badge Petunjuk Tunjukkan Kartu -->
        <div class="w-full bg-blue-50/80 border border-blue-100 p-3 rounded-2xl flex items-center justify-center gap-2 text-blue-700">
          <span class="material-symbols-outlined text-lg shrink-0">badge</span>
          <span class="text-xs font-bold font-heading">Tunjukkan kartu ini ke petugas pos parkir</span>
        </div>

        <!-- Simulated Barcode / ID Box -->
        <div class="w-full bg-slate-50 border border-slate-200 p-3.5 rounded-2xl flex flex-col items-center justify-center">
          <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider mb-1">Kode Akses Identitas</span>
          <span class="font-mono text-sm font-bold text-slate-900 tracking-widest">
            SP-RES-{{ sprintf('%04d', auth()->user()->id ?? 1) }}
          </span>
        </div>

        <!-- Petunjuk Cetak Kartu Hilang -->
        <div class="flex items-start gap-1.5 text-slate-500 text-left pt-1">
          <span class="material-symbols-outlined text-slate-400 text-base shrink-0 mt-0.5">info</span>
          <p class="text-[11px] leading-tight">
            Cetak kartu ini jika kartu fisik hilang untuk ditunjukkan saat verifikasi di pos parkir.
          </p>
        </div>

      </div>

    </div>

    <!-- Ticket Footer -->
    <div class="bg-slate-50 px-6 py-3 border-t border-slate-100 text-center">
      <p class="text-[10px] text-slate-400 font-medium">Safe Park Apartment System • Hak Akses Residen</p>
    </div>

  </div>

</body>
</html>