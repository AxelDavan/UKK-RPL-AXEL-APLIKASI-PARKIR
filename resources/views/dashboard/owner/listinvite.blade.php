<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safe Park — Daftar Tamu</title>
  
  <!-- Fonts: Plus Jakarta Sans & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
  
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
              DEFAULT: '#2563eb',
              hover: '#1d4ed8',
              active: '#004ac6',
              light: '#eff6ff',
              subtle: '#dbeafe'
            },
            surface: {
              bg: '#f8f9ff',
              card: '#ffffff'
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
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9ff;
    }
    h1, h2, h3, h4, h5, h6, .font-heading {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      vertical-align: middle;
    }
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 9999px;
    }
  </style>
</head>
<body class="min-h-screen text-slate-800 antialiased flex flex-col md:flex-row">

  <!-- MAIN CONTENT AREA -->
  <main class="flex-1 min-w-0 bg-[#f8f9ff] flex flex-col">
    <!-- Top Header Bar -->
    <div class="bg-white border-b border-slate-200/80 px-4 sm:px-6 lg:px-8 py-3.5 sticky top-0 z-20">
      <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
        <a href="{{ route('owner.dashboard') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-blue-600 font-heading font-semibold text-sm transition-colors group">
          <div class="w-8 h-8 rounded-xl bg-slate-100 group-hover:bg-blue-50 flex items-center justify-center text-slate-500 group-hover:text-blue-600 transition-colors">
            <span class="material-symbols-outlined text-lg">arrow_back</span>
          </div>
          <span>Kembali ke Dasbor</span>
        </a>
        <div class="flex items-center gap-2 text-xs text-slate-400 font-medium">
          <span class="material-symbols-outlined text-xs">chevron_right</span>
          <span class="text-slate-700 font-semibold">List Tamu</span>
        </div>
      </div>
    </div>

    <!-- Page Body Container -->
    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">

      <!-- Header Halaman & Tombol Aksi Utama -->
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
          <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-heading">Daftar Tamu</h1>
          <p class="text-sm text-slate-500 mt-1">Kelola daftar undangan dan riwayat kedatangan tamu Anda.</p>
        </div>

        <a href="{{ route('invite') }}" class="inline-flex items-center justify-center gap-2.5 px-5 py-3 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white font-heading font-semibold text-sm shadow-md shadow-blue-600/20 hover:shadow-lg hover:shadow-blue-600/30 active:scale-[0.98] transition-all duration-150 shrink-0">
          <span class="material-symbols-outlined text-[20px]">person_add</span>
          <span>Undang Tamu Baru</span>
        </a>
      </div>

      <!-- Metric Cards (REAL-TIME DATA) -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-3.5">
          <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-xl">group</span>
          </div>
          <div>
            <span class="text-xs text-slate-400 font-medium block">Total Undangan</span>
            <span class="text-lg font-bold text-slate-900 font-heading">{{ $totalUndangan ?? 0 }} Tamu</span>
          </div>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-3.5">
          <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-xl">directions_car</span>
          </div>
          <div>
            <span class="text-xs text-slate-400 font-medium block">Tamu di Dalam</span>
            <span class="text-lg font-bold text-emerald-600 font-heading">{{ $tamuDiDalam ?? 0 }} Aktif</span>
          </div>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-3.5">
          <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-xl">schedule</span>
          </div>
          <div>
            <span class="text-xs text-slate-400 font-medium block">Menunggu Hadir</span>
            <span class="text-lg font-bold text-amber-600 font-heading">{{ $menungguHadir ?? 0 }} Tamu</span>
          </div>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-3.5">
          <div class="w-10 h-10 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-xl">task_alt</span>
          </div>
          <div>
            <span class="text-xs text-slate-400 font-medium block">Kunjungan Selesai</span>
            <span class="text-lg font-bold text-slate-800 font-heading">{{ $kunjunganSelesai ?? 0 }} Tamu</span>
          </div>
        </div>
      </div>

      <!-- Main Card Container: Search, Filter, and Table -->
      <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        
        <!-- Section Search & Filter -->
        <form method="GET" action="{{ route('list') }}" class="p-5 sm:p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white">
          <div class="relative flex-1 max-w-md">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xl pointer-events-none">
              search
            </span>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama tamu atau nomor plat..." class="w-full pl-10 pr-4 py-2.5 rounded-2xl bg-slate-50 border-slate-200 text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none">
          </div>

          <div class="flex items-center gap-3 self-stretch md:self-auto">
            <div class="relative flex-1 md:w-52">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg pointer-events-none">
                filter_list
              </span>
              <select name="status" onchange="this.form.submit()" class="w-full pl-9 pr-8 py-2.5 rounded-2xl bg-slate-50 border-slate-200 text-sm font-medium text-slate-700 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none cursor-pointer">
                <option value="">Semua Status</option>
                <option value="aktif" {{ request('status') == 'aktif' ? 'selected' : '' }}>Aktif (Di Area)</option>
                <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Menunggu Kedatangan</option>
                <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="kadaluarsa" {{ request('status') == 'kadaluarsa' ? 'selected' : '' }}>Kadaluarsa</option>
              </select>
            </div>

            <a href="{{ route('list') }}" title="Segarkan Data" class="p-2.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-500 hover:text-blue-600 hover:bg-slate-100 transition-colors shrink-0 flex items-center justify-center">
              <span class="material-symbols-outlined text-xl">refresh</span>
            </a>
          </div>
        </form>

        <!-- Tabel Data Tamu (REAL DATA DB) -->
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-slate-50/75 border-b border-slate-100 text-[11px] font-semibold font-heading uppercase tracking-wider text-slate-500">
                <th class="py-4 px-6">Nama Tamu</th>
                <th class="py-4 px-6">Plat Nomor</th>
                <th class="py-4 px-6">Kendaraan</th>
                <th class="py-4 px-6">Kode Akses / QR</th>
                <th class="py-4 px-6">Tanggal Kunjungan</th>
                <th class="py-4 px-6">Status</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
              @forelse ($tamus as $item)
                <tr class="hover:bg-slate-50/60 transition-colors group">
                  <td class="py-4 px-6">
                    <div class="flex items-center gap-3">
                      <div class="w-9 h-9 rounded-xl bg-blue-100/70 text-blue-700 font-heading font-bold text-xs flex items-center justify-center shrink-0">
                        {{ strtoupper(substr($item->nama_tamu, 0, 2)) }}
                      </div>
                      <div>
                        <span class="font-heading font-bold text-slate-900 block leading-tight">{{ $item->nama_tamu }}</span>
                        <span class="text-xs text-slate-400">{{ $item->kategori_tamu ?? 'Tamu Residen' }}</span>
                      </div>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <span class="font-mono font-semibold px-2.5 py-1 rounded-lg bg-slate-100 border border-slate-200 text-slate-800 text-xs tracking-wider inline-block">
                      {{ $item->nomor_plat }}
                    </span>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center gap-2 text-slate-700">
                      <span class="material-symbols-outlined text-slate-400 text-lg">
                        {{ strtolower($item->jenis_kendaraan) == 'motor' ? 'two_wheeler' : 'directions_car' }}
                      </span>
                      <span>{{ $item->jenis_kendaraan ?? '-' }}</span>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center gap-1.5">
                      <span class="font-mono text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-0.5 rounded border border-blue-200/60">
                        {{ $item->kode_unik }}
                      </span>
                      <button type="button" onclick="navigator.clipboard.writeText('{{ $item->kode_unik }}')" title="Salin Kode" class="text-slate-400 hover:text-blue-600 transition-colors">
                        <span class="material-symbols-outlined text-sm">content_copy</span>
                      </button>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <span class="text-slate-700 font-medium block">{{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->translatedFormat('d M Y') }}</span>
                    <span class="text-xs text-slate-400">{{ $item->jam_masuk ?? '00:00' }} - {{ $item->jam_keluar ?? '23:59' }} WIB</span>
                  </td>
                  <td class="py-4 px-6">
                    @if(strtolower($item->status) == 'aktif')
                      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700 border border-emerald-200/60">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Aktif (Di Area)
                      </span>
                    @elseif(strtolower($item->status) == 'menunggu')
                      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700 border border-amber-200/60">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                        Menunggu Hadir
                      </span>
                    @elseif(strtolower($item->status) == 'selesai')
                      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                        Selesai
                      </span>
                    @else
                      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-600 border border-rose-200/60">
                        <span class="w-1.5 h-1.5 rounded-full bg-rose-400"></span>
                        Kadaluarsa
                      </span>
                    @endif
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="py-8 text-center text-slate-400 text-sm">
                    Belum ada data tamu terdaftar saat ini.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <!-- Pagination Footer (REAL DATA PAGINATION) -->
        <div class="p-5 sm:p-6 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-slate-50/50">
          <p class="text-xs text-slate-500">
            Menampilkan <span class="font-semibold text-slate-700">{{ $tamus->firstItem() ?? 0 }}</span> sampai <span class="font-semibold text-slate-700">{{ $tamus->lastItem() ?? 0 }}</span> dari <span class="font-semibold text-slate-700">{{ $tamus->total() ?? 0 }}</span> total tamu terdaftar
          </p>

          <div class="flex items-center gap-1.5">
            {{ $tamus->links() }}
          </div>
        </div>

      </div>

      <!-- Quick Helpful Guide Callout -->
      <div class="p-4 sm:p-5 rounded-2xl bg-blue-50/60 border border-blue-200/60 flex items-start gap-3.5">
        <span class="material-symbols-outlined text-blue-600 text-2xl shrink-0 mt-0.5">info</span>
        <div class="text-xs text-slate-600 leading-relaxed">
          <p class="font-semibold font-heading text-slate-800 text-sm mb-0.5">Informasi Akses Parkir Tamu Residen</p>
          Setiap tamu yang diundang akan mendapatkan tiket digital dengan kode QR unik. Tamu cukup memindai kode QR pada kamera gerbang masuk untuk membuka palang parkir otomatis tanpa dikenakan biaya karcis umum.
        </div>
      </div>

    </div>
  </main>

  <!-- Reverb WebSocket Listener -->
  @vite(['resources/js/app.js'])
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          const userId = "{{ auth()->id() }}";

          if (typeof Echo !== 'undefined') {
              Echo.private(`owner.${userId}`)
                  .listen('.tamu.updated', (e) => {
                      console.log('Real-time Update:', e);
                      location.reload(); 
                  });
          }
      });
  </script>
</body>
</html>