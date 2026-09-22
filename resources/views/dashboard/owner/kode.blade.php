<!DOCTYPE html><html lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport">
<title>Daftar Kode Booking - Parkir</title>
<!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<!-- Google Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "on-tertiary": "#ffffff",
            "primary-fixed-dim": "#b4c5ff",
            "inverse-surface": "#2e3039",
            "on-secondary-fixed-variant": "#38485d",
            "surface-tint": "#0053db",
            "secondary": "#505f76",
            "on-secondary": "#ffffff",
            "surface-bright": "#faf8ff",
            "on-tertiary-container": "#eef0ff",
            "tertiary-container": "#656d84",
            "on-error-container": "#93000a",
            "error-container": "#ffdad6",
            "primary-fixed": "#dbe1ff",
            "secondary-container": "#d0e1fb",
            "on-surface": "#191b23",
            "on-primary-fixed": "#00174b",
            "tertiary": "#4d556b",
            "on-secondary-container": "#54647a",
            "on-primary": "#ffffff",
            "outline": "#737686",
            "secondary-fixed": "#d3e4fe",
            "background": "#faf8ff",
            "secondary-fixed-dim": "#b7c8e1",
            "surface-container-lowest": "#ffffff",
            "on-primary-container": "#eeefff",
            "tertiary-fixed-dim": "#bec6e0",
            "surface-dim": "#d9d9e5",
            "on-error": "#ffffff",
            "inverse-on-surface": "#f0f0fb",
            "on-surface-variant": "#434655",
            "surface-container": "#ededf9",
            "surface-container-high": "#e7e7f3",
            "on-tertiary-fixed-variant": "#3f465c",
            "surface-container-low": "#f3f3fe",
            "tertiary-fixed": "#dae2fd",
            "on-tertiary-fixed": "#131b2e",
            "surface-container-highest": "#e1e2ed",
            "error": "#ba1a1a",
            "on-secondary-fixed": "#0b1c30",
            "inverse-primary": "#b4c5ff",
            "surface": "#faf8ff",
            "on-background": "#191b23",
            "outline-variant": "#c3c6d7",
            "on-primary-fixed-variant": "#003ea8",
            "surface-variant": "#e1e2ed",
            "primary": "#004ac6",
            "primary-container": "#2563eb"
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          spacing: {
            "lg": "24px",
            "margin-desktop": "32px",
            "xl": "32px",
            "gutter": "24px",
            "margin-mobile": "16px",
            "unit": "4px",
            "xs": "4px",
            "md": "16px",
            "sm": "8px"
          },
          fontFamily: {
            "headline-lg": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "display-lg": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"]
          },
          fontSize: {
            "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700" }],
            "title-lg": ["20px", { lineHeight: "28px", fontWeight: "600" }],
            "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "display-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.02em", fontWeight: "700" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
            "label-md": ["11px", { lineHeight: "16px", fontWeight: "500" }],
            "headline-lg-mobile": ["24px", { lineHeight: "32px", fontWeight: "700" }],
            "label-lg": ["12px", { lineHeight: "16px", fontWeight: "600" }]
          }
        }
      }
    };
  </script>
<style>
    @layer base {
      html, body {
        width: 100%;
        min-height: 100%;
        margin: 0;
        padding: 0;
      }
      body {
        overscroll-behavior: none;
      }
      .pb-safe {
        padding-bottom: env(safe-area-inset-bottom, 0px);
      }
      .pt-safe {
        padding-top: env(safe-area-inset-top, 0px);
      }
    }
    ::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased min-h-screen flex flex-col pt-safe pb-safe selection:bg-primary-fixed selection:text-on-primary-fixed">
<main class="flex-1 flex flex-col w-full max-w-2xl mx-auto px-margin-mobile md:px-margin-desktop py-lg bg-surface">
<div class="flex flex-col w-full pb-12">
<!-- Header Internal -->
<header class="flex flex-col gap-4 mb-6">
<div class="flex items-center justify-between">
<a href="{{ route('pemesanan') }}" aria-label="Kembali ke Pemesanan" class="flex items-center justify-center w-10 h-10 rounded-xl bg-surface-container-lowest shadow-sm text-on-surface hover:bg-surface-container active:scale-95 transition-all" type="button">
<span class="material-symbols-outlined text-[20px]">arrow_back</span>
</a>
</div>
<div>
<h1 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface tracking-tight">
            Daftar Kode Booking
          </h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">
            Kelola semua kode booking slot parkir aktif dan riwayat Anda
          </p>
</div>
</header>
<!-- Kotak Pencarian & Filter Status -->
<section aria-label="Pencarian dan Filter" class="flex flex-col gap-3 mb-6">
<div class="relative flex items-center w-full">
<span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">search</span>
<input class="w-full pl-10 pr-10 py-2.5 bg-surface-container-lowest text-on-surface rounded-xl font-body-md text-body-md shadow-sm outline-none placeholder:text-outline focus:shadow-md transition-shadow" id="booking-search" placeholder="Cari kode booking, nomor slot, atau plat..." type="text">
<button aria-label="Hapus pencarian" class="hidden absolute right-3 text-outline hover:text-on-surface transition-colors" id="clear-search" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<!-- Filter Tab Buttons -->
<div class="flex items-center gap-2 overflow-x-auto no-scrollbar py-0.5" role="tablist">
<button class="filter-pill px-4 py-1.5 rounded-full font-label-lg text-label-lg transition-all whitespace-nowrap bg-surface-container-lowest text-on-surface-variant shadow-xs hover:bg-surface-container" data-filter="all" type="button">
            Semua
          </button>
<button class="filter-pill active px-4 py-1.5 rounded-full font-label-lg text-label-lg transition-all whitespace-nowrap bg-primary-container text-on-primary shadow-sm" data-filter="active" type="button">
            Aktif
          </button>
<button class="filter-pill px-4 py-1.5 rounded-full font-label-lg text-label-lg transition-all whitespace-nowrap bg-surface-container-lowest text-on-surface-variant shadow-xs hover:bg-surface-container" data-filter="completed" type="button">
            Selesai
          </button>
<button class="filter-pill px-4 py-1.5 rounded-full font-label-lg text-label-lg transition-all whitespace-nowrap bg-surface-container-lowest text-on-surface-variant shadow-xs hover:bg-surface-container" data-filter="cancelled" type="button">
            Batal
          </button>
</div>
</section>

<!-- Daftar Kartu Booking -->
<section aria-label="Daftar Kartu Booking" class="flex flex-col gap-4" id="booking-list">
    @forelse($pemesanans as $p)
        @php
            $statusMapping = [
                'aktif' => 'active',
                'selesai' => 'completed',
                'batal' => 'cancelled',
                'pending' => 'active'
            ];$dataStatus = $statusMapping[$p->status] ?? 'active';

            $kodeBooking = optional($p->statusPayment)->order_id ?? 
                           (optional($p->slotParkir)->kode_slot ? 
                            strtoupper(explode('-', $p->slotParkir->kode_slot)[0]) . '-' . \Carbon\Carbon::parse($p->created_at)->format('Ymd') . '-' . (explode('-', $p->slotParkir->kode_slot)[1] ?? '01') 
                            : 'SP-' .$p->id);

            $namaArea = optional(optional($p->slotParkir)->areaParkir)->nama_area ?? 'Tower A';
            $kodeSlot = optional($p->slotParkir)->kode_slot ?? '-';
            $platNomor = optional($p->kendaraan)->nomor_plat ?? 'belum ditautkan';

            // Hitung Tanggal Mulai dan Tanggal Selesai (Habis) dengan akumulasi dinamis
            $tglMulai = $p->tanggal_mulai ? \Carbon\Carbon::parse($p->tanggal_mulai) : null;
            $tglSelesai = null;
            if ($tglMulai) {
                $tglSelesai = (clone $tglMulai);
                $parts = explode(' + ', $p->durasi ?? '');
                $isPermanen = false;

                foreach ($parts as $part) {
                    $partLower = strtolower(trim($part));
                    if (str_contains($partLower, '12 bulan') || str_contains($partLower, 'tahunan')) {
                        $tglSelesai->addYear();
                    } elseif (str_contains($partLower, '6 bulan')) {
                        $tglSelesai->addMonths(6);
                    } elseif (str_contains($partLower, '1 bulan')) {
                        $tglSelesai->addMonth();
                    } elseif (str_contains($partLower, 'permanen')) {
                        $isPermanen = true;
                    }
                }

                if ($isPermanen) {
                    $tglSelesai = null;
                }
            }
        @endphp

        <article class="booking-card bg-surface-container-lowest rounded-xl p-md shadow-sm flex flex-col gap-4 transition-all duration-200" 
                 data-id="{{ $kodeBooking }}" 
                 data-plat="{{ strtolower($platNomor) }}" 
                 data-slot="{{ strtolower($kodeSlot) }}" 
                 data-status="{{ $dataStatus }}">
            
            <div class="flex items-center justify-between pb-3 bg-surface-container-low/40 -mx-md -mt-md px-md pt-md rounded-t-xl">
                <div class="flex items-center gap-2.5">
                    <div class="flex items-center justify-center text-center w-10 h-10 rounded-lg bg-primary-fixed text-primary font-title-md text-title-md">
                        {{ $kodeSlot }}
                    </div>
                    <div>
                        <span class="font-label-md text-label-md text-on-surface-variant block">{{ $namaArea }}</span>
                        <span class="font-title-md text-title-md text-on-surface">{{ $p->tipe_booking ?? 'Slot Parkir' }}</span>
                    </div>
                </div>
                <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-fixed/50 text-on-secondary-fixed">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary-container animate-ping"></span>
                    <span class="font-label-md text-label-md">{{ ucfirst($p->status) }}</span>
                </div>
            </div>

            <div class="flex flex-col gap-2.5">
                <div class="flex items-center justify-between">
                    <span class="font-label-md text-label-md text-on-surface-variant">Kode Booking</span>
                    <div class="flex items-center gap-1.5">
                        <code class="font-title-md text-title-md text-on-surface font-mono tracking-tight">{{ $kodeBooking }}</code>
                        <button aria-label="Salin kode booking" class="copy-btn p-1 rounded-md text-outline hover:text-primary hover:bg-primary-fixed/40 transition-colors" data-copy="{{ $kodeBooking }}" type="button">
                            <span class="material-symbols-outlined text-[16px]">content_copy</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <span class="font-label-md text-label-md text-on-surface-variant">Paket & Durasi</span>
                    <span class="font-body-md text-body-md text-on-surface text-right">
                        {{ $p->durasi ?? '-' }}
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="font-label-md text-label-md text-on-surface-variant">Masa Aktif</span>
                    <span class="font-body-md text-body-md text-on-surface">
                        @if($tglSelesai)
                            {{ $tglMulai->format('d M Y') }} — {{$tglSelesai->format('d M Y') }}
                        @else
                            {{ $tglMulai ? $tglMulai->format('d M Y') : '-' }} (Hak Milik Permanen)
                        @endif
                    </span>
                </div>
                <div class="flex items-start justify-between pt-1">
                    <span class="font-label-md text-label-md text-on-surface-variant">Kendaraan</span>
                    @if($p->kendaraan)
                        <div class="flex items-center gap-1.5 bg-surface-container px-2.5 py-1 rounded-lg">
                            <span class="material-symbols-outlined text-tertiary text-[18px]">directions_car</span>
                            <span class="font-label-lg text-label-lg text-on-surface font-mono">{{ $p->kendaraan->nomor_plat }}</span>
                            <span class="font-label-md text-label-md text-on-surface-variant">({{ $p->kendaraan->merk ?? 'Kendaraan' }})</span>
                        </div>
                    @else
                        <div class="flex items-center gap-1 bg-error-container/60 text-on-error-container px-2.5 py-1 rounded-lg">
                            <span class="material-symbols-outlined text-[16px]">warning</span>
                            <span class="font-label-lg text-label-lg">Belum ditautkan</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="pt-2">
                @if($p->kendaraan)
                    @if(str_contains(strtolower($p->durasi ?? ''), 'permanen'))
                        <a href="{{ route('karcis.detail', $p->id) }}" class="w-full flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 transition-all text-center">
                            <span class="material-symbols-outlined text-[18px]">qr_code_2</span>
                            <span>Detail Karcis</span>
                        </a>
                    @else
                        <div class="grid grid-cols-5 gap-2">
                            <a href="{{ route('karcis.detail', $p->id) }}" class="col-span-3 flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 transition-all text-center">
                                <span class="material-symbols-outlined text-[18px]">qr_code_2</span>
                                <span>Detail Karcis</span>
                            </a>
                            <button onclick="openPerpanjangModal('{{ $p->id }}', '{{$kodeBooking }}')" type="button" class="col-span-2 flex items-center justify-center gap-1 py-2.5 px-3 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors">
                                <span class="material-symbols-outlined text-[18px]">autorenew</span>
                                <span>Perpanjang</span>
                            </button>
                        </div>
                    @endif
                @else
                    <a href="{{ route('kendaraan') }}" class="w-full flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 transition-all text-center">
                        <span class="material-symbols-outlined text-[18px]">link</span>
                        <span>Tautkan Kendaraan Sekarang</span>
                    </a>
                @endif
            </div>
        </article>
    @empty
        <div class="flex flex-col items-center justify-center text-center p-8 bg-surface-container-lowest rounded-xl shadow-sm mt-2">
            <div class="w-16 h-16 rounded-full bg-secondary-fixed/50 flex items-center justify-center text-primary mb-4">
                <span class="material-symbols-outlined text-[32px]">search_off</span>
            </div>
            <h2 class="font-title-lg text-title-lg text-on-surface tracking-tight mb-2">
                Tidak ada kode booking ditemukan
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-sm mb-6">
                Anda belum memiliki riwayat atau alokasi pemesanan slot parkir.
            </p>
            <a href="{{ route('pemesanan') }}" class="flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 transition-all">
                <span class="material-symbols-outlined text-[18px]">add</span>
                <span>Pesan Slot Sekarang</span>
            </a>
        </div>
    @endforelse
</section>

<!-- Tampilan Status Kosong -->
<section aria-label="Status Kosong" class="hidden flex-col items-center justify-center text-center p-8 bg-surface-container-lowest rounded-xl shadow-sm mt-2" id="empty-state">
<div class="w-16 h-16 rounded-full bg-secondary-fixed/50 flex items-center justify-center text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">search_off</span>
</div>
<h2 class="font-title-lg text-title-lg text-on-surface tracking-tight mb-2">
          Tidak ada kode booking ditemukan
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-sm mb-6">
          Coba ubah kata kunci pencarian atau sesuaikan filter status pemesanan Anda.
        </p>
<button class="flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 active:scale-95 transition-all" id="reset-filter-btn" type="button">
<span class="material-symbols-outlined text-[18px]">refresh</span>
<span class="">Reset Filter</span>
</button>
</section>

<!-- MODAL PILIHAN DURASI PERPANJANGAN -->
<div class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden" id="modal-perpanjang">
    <div class="bg-white max-w-md w-full rounded-2xl shadow-2xl border border-slate-200 overflow-hidden flex flex-col my-auto p-6">
        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
            <div>
                <h3 class="text-lg font-bold text-slate-900">Perpanjang Masa Aktif Slot</h3>
                <p class="text-xs text-slate-500 mt-0.5">Pilih durasi perpanjangan untuk <span id="modal-kode-text" class="font-mono font-bold text-blue-600"></span></p>
            </div>
            <button onclick="closePerpanjangModal()" class="p-2 text-slate-400 hover:bg-slate-100 rounded-full" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form id="form-perpanjang" method="POST" class="space-y-4 pt-4">
            @csrf
            <div>
                <label class="text-xs font-semibold text-slate-600 block mb-2">Pilih Durasi Perpanjangan</label>
                <div class="space-y-2">
                    <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 hover:border-blue-600 cursor-pointer transition-all">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="durasi_perpanjangan" value="12 Bulan (1 Tahun)" checked class="text-blue-600 focus:ring-blue-500">
                            <div>
                                <p class="text-sm font-bold text-slate-800">12 Bulan (1 Tahun)</p>
                                <p class="text-xs text-slate-500">Hemat 20%</p>
                            </div>
                        </div>
                        <span class="text-sm font-bold text-blue-600 font-mono">Rp 3.600.000</span>
                    </label>

                    <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 hover:border-blue-600 cursor-pointer transition-all">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="durasi_perpanjangan" value="6 Bulan" class="text-blue-600 focus:ring-blue-500">
                            <div>
                                <p class="text-sm font-bold text-slate-800">6 Bulan</p>
                                <p class="text-xs text-slate-500">Tarif Standar</p>
                            </div>
                        </div>
                        <span class="text-sm font-bold text-slate-800 font-mono">Rp 2.100.000</span>
                    </label>

                    <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 hover:border-blue-600 cursor-pointer transition-all">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="durasi_perpanjangan" value="1 Bulan" class="text-blue-600 focus:ring-blue-500">
                            <div>
                                <p class="text-sm font-bold text-slate-800">1 Bulan</p>
                                <p class="text-xs text-slate-500">Tarif Bulanan</p>
                            </div>
                        </div>
                        <span class="text-sm font-bold text-slate-800 font-mono">Rp 400.000</span>
                    </label>
                </div>
            </div>

            <div class="pt-4 flex items-center justify-end gap-3 border-t border-slate-100">
                <button type="button" onclick="closePerpanjangModal()" class="px-4 py-2 rounded-xl border border-slate-200 text-sm font-semibold text-slate-600 hover:bg-slate-50">Batal</button>
                <button type="submit" class="px-5 py-2 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 shadow-md">
                    Lanjutkan Pembayaran
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Notifikasi Toast -->
<aside aria-live="polite" class="fixed bottom-6 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-4 py-2 rounded-full font-label-lg text-label-lg shadow-md flex items-center gap-2 opacity-0 pointer-events-none transition-all duration-300 z-50" id="toast" role="status">
<span class="material-symbols-outlined text-inverse-primary text-[18px]">check</span>
<span id="toast-text" class="">Kode booking disalin</span>
</aside>
</div>
</main>

<!-- Logika Interaktivitas Frontend & Modal -->
<script>
    (function () {
      const searchInput = document.getElementById('booking-search');
      const clearSearchBtn = document.getElementById('clear-search');
      const filterPills = document.querySelectorAll('.filter-pill');
      const cards = document.querySelectorAll('.booking-card');
      const emptyState = document.getElementById('empty-state');
      const resetFilterBtn = document.getElementById('reset-filter-btn');
      const copyBtns = document.querySelectorAll('.copy-btn');
      const toast = document.getElementById('toast');
      const toastText = document.getElementById('toast-text');

      let currentFilter = 'active';

      function showToast(message) {
        toastText.textContent = message;
        toast.classList.remove('opacity-0', 'translate-y-2');
        toast.classList.add('opacity-100', 'translate-y-0');
        setTimeout(() => {
          toast.classList.remove('opacity-100', 'translate-y-0');
          toast.classList.add('opacity-0', 'translate-y-2');
        }, 2000);
      }

      function applyFilter() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach((card) => {
          const cardStatus = card.getAttribute('data-status');
          const cardId = card.getAttribute('data-id').toLowerCase();
          const cardSlot = card.getAttribute('data-slot').toLowerCase();
          const cardPlat = card.getAttribute('data-plat').toLowerCase();

          const matchesStatus = (currentFilter === 'all') || (cardStatus === currentFilter);
          const matchesQuery = !query || cardId.includes(query) || cardSlot.includes(query) || cardPlat.includes(query);

          if (matchesStatus && matchesQuery) {
            card.classList.remove('hidden');
            visibleCount++;
          } else {
            card.classList.add('hidden');
          }
        });

        if (visibleCount === 0) {
          emptyState.classList.remove('hidden');
          emptyState.classList.add('flex');
        } else {
          emptyState.classList.add('hidden');
          emptyState.classList.remove('flex');
        }
      }

      searchInput.addEventListener('input', (e) => {
        if (e.target.value.length > 0) {
          clearSearchBtn.classList.remove('hidden');
        } else {
          clearSearchBtn.classList.add('hidden');
        }
        applyFilter();
      });

      clearSearchBtn.addEventListener('click', () => {
        searchInput.value = '';
        clearSearchBtn.classList.add('hidden');
        applyFilter();
        searchInput.focus();
      });

      filterPills.forEach((pill) => {
        pill.addEventListener('click', () => {
          filterPills.forEach((p) => {
            p.classList.remove('bg-primary-container', 'text-on-primary', 'shadow-sm');
            p.classList.add('bg-surface-container-lowest', 'text-on-surface-variant', 'shadow-xs');
          });

          pill.classList.remove('bg-surface-container-lowest', 'text-on-surface-variant', 'shadow-xs');
          pill.classList.add('bg-primary-container', 'text-on-primary', 'shadow-sm');

          currentFilter = pill.getAttribute('data-filter');
          applyFilter();
        });
      });

      resetFilterBtn.addEventListener('click', () => {
        searchInput.value = '';
        clearSearchBtn.classList.add('hidden');

        const allPill = Array.from(filterPills).find((p) => p.getAttribute('data-filter') === 'all');
        if (allPill) allPill.click();
      });

      copyBtns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
          e.stopPropagation();
          const code = btn.getAttribute('data-copy');
          if (navigator.clipboard) {
            navigator.clipboard.writeText(code).then(() => {
              showToast('Kode ' + code + ' disalin!');
            }).catch(() => {
              showToast('Kode ' + code + ' siap digunakan');
            });
          } else {
            showToast('Kode disalin: ' + code);
          }
        });
      });

      applyFilter();
    })();

    // Fungsi Modal Perpanjang
    function openPerpanjangModal(pemesananId, kodeBooking) {
        const modal = document.getElementById('modal-perpanjang');
        const form = document.getElementById('form-perpanjang');
        const kodeText = document.getElementById('modal-kode-text');

        form.action = `/pemesanan/perpanjang/${pemesananId}`;
        kodeText.textContent = kodeBooking;

        modal.classList.remove('hidden');
    }

    function closePerpanjangModal() {
        const modal = document.getElementById('modal-perpanjang');
        modal.classList.add('hidden');
    }
  </script>
</body></html>