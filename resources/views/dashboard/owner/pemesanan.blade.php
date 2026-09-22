<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pemesanan Parkir - Safe Park</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#505f76",
                        "error": "#ba1a1a",
                        "surface": "#faf8ff",
                        "background": "#faf8ff",
                        "surface-bright": "#faf8ff",
                        "on-error-container": "#93000a",
                        "primary": "#004ac6",
                        "secondary-fixed": "#d3e4fe",
                        "on-secondary-container": "#54647a",
                        "surface-variant": "#e1e2ed",
                        "primary-container": "#2563eb",
                        "outline": "#737686",
                        "on-secondary-fixed-variant": "#38485d",
                        "tertiary-fixed-dim": "#bec6e0",
                        "surface-container-highest": "#e1e2ed",
                        "on-tertiary": "#ffffff",
                        "outline-variant": "#c3c6d7",
                        "on-primary": "#ffffff",
                        "surface-dim": "#d9d9e5",
                        "inverse-on-surface": "#f0f0fb",
                        "primary-fixed": "#dbe1ff",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-surface": "#191b23",
                        "surface-container-low": "#f3f3fe",
                        "secondary-fixed-dim": "#b7c8e1",
                        "surface-container-high": "#e7e7f3",
                        "surface-tint": "#0053db",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-container": "#ededf9",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#dae2fd",
                        "on-primary-fixed-variant": "#003ea8",
                        "secondary-container": "#d0e1fb",
                        "on-background": "#191b23",
                        "on-tertiary-container": "#eef0ff",
                        "inverse-surface": "#2e3039",
                        "tertiary-container": "#656d84",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#00174b",
                        "inverse-primary": "#b4c5ff",
                        "on-tertiary-fixed": "#131b2e",
                        "on-primary-container": "#eeefff",
                        "tertiary": "#4d556b",
                        "on-surface-variant": "#434655",
                        "on-error": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xl": "32px",
                        "unit": "4px",
                        "sm": "8px",
                        "margin-desktop": "32px",
                        "xs": "4px",
                        "md": "16px",
                        "lg": "24px",
                        "margin-mobile": "16px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "display-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "label-lg": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "label-md": ["11px", { "lineHeight": "16px", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="flex flex-col md:flex-row min-h-screen bg-background text-on-background">

<!-- SIDEBAR -->
<nav class="bg-surface border-r border-outline-variant h-screen w-64 fixed left-0 top-0 hidden md:flex flex-col">
    <div class="p-lg">
        <h1 class="font-title-lg text-title-lg font-bold text-primary">Safe Park</h1>
        <p class="font-body-md text-body-md text-secondary mt-1">Smart Apartment Parking</p>
    </div>
    <div class="flex flex-col h-full py-lg px-md gap-sm">
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
            <span class="font-title-md text-title-md">Beranda</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('pemesanan') }}">
            <span class="material-symbols-outlined">directions_car</span>
            <span class="font-title-md text-title-md">Pemesanan</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('kendaraan') }}">
            <span class="material-symbols-outlined">garage</span>
            <span class="font-title-md text-title-md">Kendaraan</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('invite') }}">
            <span class="material-symbols-outlined">person_add</span>
            <span class="font-title-md text-title-md">Undang Tamu</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-title-md text-title-md">Profile</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="{{ route('bantuan') }}">
            <span class="material-symbols-outlined">help</span>
            <span class="font-title-md text-title-md">Bantuan</span>
        </a>
    </div>
</nav>

<nav id="mobile-sidebar" class="bg-surface border-r border-outline-variant h-screen w-64 fixed left-0 top-0 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col md:hidden">
    <div class="p-lg flex justify-between items-center">
        <div>
            <h1 class="font-title-lg text-title-lg font-bold text-primary">Safe Park</h1>
            <p class="font-body-md text-body-md text-secondary mt-1">Smart Apartment Parking</p>
        </div>
        <button onclick="toggleMobileSidebar()" class="text-secondary hover:text-primary">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <div class="flex flex-col h-full py-lg px-md gap-sm overflow-y-auto">
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
            <span class="font-title-md text-title-md">Beranda</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('pemesanan') }}">
            <span class="material-symbols-outlined">directions_car</span>
            <span class="font-title-md text-title-md">Pemesanan</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('kendaraan') }}">
            <span class="material-symbols-outlined">garage</span>
            <span class="font-title-md text-title-md">Kendaraan</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('invite') }}">
            <span class="material-symbols-outlined">person_add</span>
            <span class="font-title-md text-title-md">Undang Tamu</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-title-md text-title-md">Profile</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="{{ route('bantuan') }}">
            <span class="material-symbols-outlined">help</span>
            <span class="font-title-md text-title-md">Bantuan</span>
        </a>
    </div>
</nav>

<!-- BACKDROP GELAP UNTUK MOBILE SIDEBAR -->
<div id="sidebar-backdrop" onclick="toggleMobileSidebar()" class="fixed inset-0 bg-black/40 z-40 hidden md:hidden transition-opacity"></div>

<!-- MAIN CONTENT AREA -->
<div class="flex-1 flex flex-col w-full md:ml-64">
<header class="bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm docked full-width top-0 sticky z-40">
        <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-sm">
            <div class="md:hidden flex items-center gap-sm">
                <div class="flex items-center gap-3 md:hidden">
                <!-- Tombol Hamburger Menu Mobile -->
                <button onclick="toggleMobileSidebar()" class="text-secondary hover:text-primary focus:outline-none">
                    <span class="material-symbols-outlined text-2xl">menu</span>
                </button>
                <h1 class="text-lg font-bold text-primary"></h1>
            </div>
                <span class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-primary">Safe Park</span>
            </div>
            <div class="hidden md:block flex-1"></div>
            <div class="flex items-center gap-sm">
                
            </div>
        </div>
    </header>

    <main class="flex-1 p-6 space-y-6">
        @if(session('success'))
            <div class="p-4 bg-green-100 border border-green-300 text-green-800 rounded-lg text-sm font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-on-background">Pemesanan Parkir</h1>
                <p class="text-sm text-secondary">Pesan slot parkir untuk kebutuhan Anda.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            
            <div class="lg:col-span-4 flex flex-col gap-6">
                <!-- Active Booking / Kode Booking Card -->
                <div class="bg-surface-container-lowest rounded-2xl p-6 border border-outline-variant shadow-sm relative overflow-hidden">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-xs text-primary font-bold uppercase tracking-wider block mb-1">Slot & Kode Booking Aktif</span>
                            <h3 class="text-lg font-bold text-on-surface">
                                {{ $pemesananAktif ? ($pemesananAktif->slotParkir->areaParkir->nama_area ?? 'Tower A') . ', Slot ' . ($pemesananAktif->slotParkir->kode_slot ?? '-') : 'Belum Ada Pemesanan' }}
                            </h3>
                        </div>
                        @if($pemesananAktif)
                            <span class="bg-blue-100 text-primary text-xs font-semibold px-3 py-1 rounded-full">Dedicated</span>
                        @endif
                    </div>

                    @if($pemesananAktif)
                        <div class="space-y-3 text-sm text-secondary mb-6">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base">confirmation_number</span>
                                <span class="font-mono font-semibold text-primary">ID: {{ optional($payment)->order_id ?? 'SP-BOOKING-01' }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base">calendar_month</span>
                                <span>Mulai: {{ $pemesananAktif->tanggal_mulai ? $pemesananAktif->tanggal_mulai->format('d M Y') : '-' }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base">directions_car</span>
                                <span>
                                    @if($pemesananAktif->kendaraan)
                                        {{ $pemesananAktif->kendaraan->jenis_kendaraan ?? 'Mobil' }} ({{ $pemesananAktif->kendaraan->nomor_plat ?? '-' }})
                                    @else
                                        <em class="text-amber-600 font-medium">Belum Ditautkan Kendaraan</em>
                                    @endif
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base">assignment</span>
                                <span>Paket: {{ $pemesananAktif->tipe_booking }}</span>
                            </div>
                        </div>
                    @else
                        <p class="text-xs text-secondary mb-6">Anda belum memiliki alokasi slot parkir berlangganan aktif.</p>
                    @endif

                    <a href="{{ route('kode') }}" class="w-full bg-primary text-white py-2.5 rounded-lg font-semibold hover:opacity-90 transition-opacity text-center block">
                        Lihat Semua Kode Booking
                    </a>
                </div>

                <!-- Card Detail Harga Durasi Langganan -->
                <div class="bg-surface-container-lowest rounded-2xl p-6 border border-outline-variant shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-base font-bold text-on-surface">Detail Harga Durasi</h3>
                        <span class="text-[10px] font-bold bg-blue-100 text-primary px-2 py-0.5 rounded-full">Owner Rate</span>
                    </div>
                
                    <div class="space-y-3">
                        <div onclick="selectDurationCard(this, '12 Bulan (1 Tahun)')" class="duration-card p-3 rounded-xl border border-primary bg-primary/5 flex items-center justify-between cursor-pointer hover:border-primary transition-all">
                            <div>
                                <div class="flex items-center gap-1.5">
                                    <p class="text-xs font-bold text-on-surface">12 Bulan (1 Tahun)</p>
                                    <span class="bg-green-100 text-green-700 text-[9px] font-bold px-1.5 py-0.2 rounded">Hemat 20%</span>
                                </div>
                                <p class="text-[11px] text-secondary mt-0.5">Rp 300.000 / bulan</p>
                            </div>
                            <p class="text-sm font-bold text-primary font-mono">Rp 3.600.000</p>
                        </div>
                    
                        <div onclick="selectDurationCard(this, '6 Bulan')" class="duration-card p-3 rounded-xl border border-outline-variant hover:border-primary flex items-center justify-between cursor-pointer transition-all">
                            <div>
                                <p class="text-xs font-bold text-on-surface">6 Bulan</p>
                                <p class="text-[11px] text-secondary mt-0.5">Rp 350.000 / bulan</p>
                            </div>
                            <p class="text-sm font-bold text-on-surface font-mono">Rp 2.100.000</p>
                        </div>
                    
                        <div onclick="selectDurationCard(this, '1 Bulan')" class="duration-card p-3 rounded-xl border border-outline-variant hover:border-primary flex items-center justify-between cursor-pointer transition-all">
                            <div>
                                <p class="text-xs font-bold text-on-surface">1 Bulan</p>
                                <p class="text-[11px] text-secondary mt-0.5">Tarif Standar Bulanan</p>
                            </div>
                            <p class="text-sm font-bold text-on-surface font-mono">Rp 400.000</p>
                        </div>
                    
                        <div onclick="selectDurationCard(this, 'Permanen Unit')" class="duration-card p-3 rounded-xl border border-amber-200 bg-amber-50/50 hover:border-amber-400 flex items-center justify-between cursor-pointer transition-all">
                            <div>
                                <p class="text-xs font-bold text-amber-900">Permanen Unit</p>
                                <p class="text-[11px] text-amber-700 mt-0.5">Hak Milik Selamanya</p>
                            </div>
                            <p class="text-sm font-bold text-amber-900 font-mono">Rp 15.000.000</p>
                        </div>
                    </div>
                
                    <button class="w-full mt-4 bg-primary text-white rounded-lg py-2.5 text-sm font-semibold hover:opacity-90 transition-opacity flex items-center justify-center gap-2" onclick="document.getElementById('modal-buat-pemesanan').classList.remove('hidden')">
                        <span class="material-symbols-outlined text-base">payments</span>
                        Pesan & Bayar Sekarang
                    </button>
                </div>
            </div>

            <!-- Peta Slot Parkir (Dipisah Berdasarkan Lantai/Area) -->
            <div class="lg:col-span-8 bg-surface-container-lowest rounded-2xl p-6 border border-outline-variant shadow-sm flex flex-col">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-on-surface">Peta Denah Slot Parkir</h3>
                        <p class="text-xs text-secondary">Klik pada slot yang 'Tersedia' untuk memilih slot secara langsung.</p>
                    </div>

                    <div class="flex gap-3 flex-wrap text-xs">
                        <div class="flex items-center gap-1.5"><div class="w-3.5 h-3.5 rounded bg-surface-container border border-outline-variant"></div><span>Tersedia</span></div>
                        <div class="flex items-center gap-1.5"><div class="w-3.5 h-3.5 rounded bg-primary text-white"></div><span>Dipilih</span></div>
                        <div class="flex items-center gap-1.5"><div class="w-3.5 h-3.5 rounded bg-red-100 border border-red-300"></div><span>Terisi</span></div>
                        <div class="flex items-center gap-1.5"><div class="w-3.5 h-3.5 rounded bg-amber-100 border border-amber-300"></div><span>Dipesan</span></div>
                    </div>
                </div>

                <div class="flex-1 bg-surface-container rounded-xl p-6 min-h-[350px] max-h-[580px] overflow-y-auto space-y-6" id="grid-slot-parkir">
                    
                    <!-- KODE A: LANTAI 1 -->
                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined text-primary text-sm">layers</span>
                            <h4 class="text-sm font-bold text-on-surface">Lantai 1 (Kode A)</h4>
                        </div>
                        <div class="grid grid-cols-5 sm:grid-cols-8 md:grid-cols-10 gap-2">
                            @php $hasA = false; @endphp
                            @foreach($slotParkir as $slot)
                                @if(str_starts_with($slot->kode_slot, 'A'))
                                    @php 
                                        $hasA = true;
                                        $statusClass = match($slot->status) {
                                            'terisi' => 'bg-red-100 border-red-300 text-red-600 cursor-not-allowed',
                                            'dipesan' => 'bg-amber-100 border-amber-300 text-amber-700 cursor-not-allowed',
                                            default => 'bg-surface-container-lowest border-outline-variant text-on-surface hover:border-primary cursor-pointer',
                                        };
                                    @endphp
                                    <div 
                                        class="h-10 rounded border flex items-center justify-center text-xs font-bold font-mono transition-all slot-item {{ $statusClass }}"
                                        data-id="{{ $slot->id }}"
                                        data-kode="{{ $slot->kode_slot }}"
                                        data-status="{{ $slot->status }}"
                                        onclick="selectSlotMap(this)"
                                    >
                                        {{ $slot->kode_slot }}
                                    </div>
                                @endif
                            @endforeach
                            @if(!$hasA)
                                <p class="col-span-full text-xs text-secondary italic">Tidak ada slot untuk Lantai 1.</p>
                            @endif
                        </div>
                    </div>

                    <!-- KODE B: LANTAI 2 -->
                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined text-primary text-sm">layers</span>
                            <h4 class="text-sm font-bold text-on-surface">Lantai 2 (Kode B)</h4>
                        </div>
                        <div class="grid grid-cols-5 sm:grid-cols-8 md:grid-cols-10 gap-2">
                            @php $hasB = false; @endphp
                            @foreach($slotParkir as $slot)
                                @if(str_starts_with($slot->kode_slot, 'B'))
                                    @php 
                                        $hasB = true;
                                        $statusClass = match($slot->status) {
                                            'terisi' => 'bg-red-100 border-red-300 text-red-600 cursor-not-allowed',
                                            'dipesan' => 'bg-amber-100 border-amber-300 text-amber-700 cursor-not-allowed',
                                            default => 'bg-surface-container-lowest border-outline-variant text-on-surface hover:border-primary cursor-pointer',
                                        };
                                    @endphp
                                    <div 
                                        class="h-10 rounded border flex items-center justify-center text-xs font-bold font-mono transition-all slot-item {{ $statusClass }}"
                                        data-id="{{ $slot->id }}"
                                        data-kode="{{ $slot->kode_slot }}"
                                        data-status="{{ $slot->status }}"
                                        onclick="selectSlotMap(this)"
                                    >
                                        {{ $slot->kode_slot }}
                                    </div>
                                @endif
                            @endforeach
                            @if(!$hasB)
                                <p class="col-span-full text-xs text-secondary italic">Tidak ada slot untuk Lantai 2.</p>
                            @endif
                        </div>
                    </div>

                    <!-- KODE VIP: BASEMENT -->
                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined text-amber-600 text-sm">stairs</span>
                            <h4 class="text-sm font-bold text-on-surface">Basement (Area VIP - Premium Rate)</h4>
                        </div>
                        <div class="grid grid-cols-5 sm:grid-cols-8 md:grid-cols-10 gap-2">
                            @php $hasVIP = false; @endphp
                            @foreach($slotParkir as $slot)
                                @if(str_starts_with($slot->kode_slot, 'VIP'))
                                    @php 
                                        $hasVIP = true;
                                        $statusClass = match($slot->status) {
                                            'terisi' => 'bg-red-100 border-red-300 text-red-600 cursor-not-allowed',
                                            'dipesan' => 'bg-amber-100 border-amber-300 text-amber-700 cursor-not-allowed',
                                            default => 'bg-surface-container-lowest border-amber-400 text-amber-900 hover:bg-amber-50 cursor-pointer',
                                        };
                                    @endphp
                                    <div 
                                        class="h-10 rounded border flex items-center justify-center text-xs font-bold font-mono transition-all slot-item {{ $statusClass }}"
                                        data-id="{{ $slot->id }}"
                                        data-kode="{{ $slot->kode_slot }}"
                                        data-status="{{ $slot->status }}"
                                        onclick="selectSlotMap(this)"
                                    >
                                        {{ $slot->kode_slot }}
                                    </div>
                                @endif
                            @endforeach
                            @if(!$hasVIP)
                                <p class="col-span-full text-xs text-secondary italic">Tidak ada slot untuk Basement (VIP).</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Riwayat Tabel -->
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant shadow-sm overflow-hidden mt-6">
            <div class="p-6 border-b border-outline-variant">
                <h3 class="text-lg font-bold text-on-surface">Riwayat Pemesanan</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-surface-container-low border-b border-outline-variant">
                        <tr>
                            <th class="py-3 px-6 font-semibold text-secondary">Tanggal Mulai</th>
                            <th class="py-3 px-6 font-semibold text-secondary">Area & Slot</th>
                            <th class="py-3 px-6 font-semibold text-secondary">Kendaraan</th>
                            <th class="py-3 px-6 font-semibold text-secondary">Durasi</th>
                            <th class="py-3 px-6 font-semibold text-secondary">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        @forelse($riwayatPemesanan as $r)
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="py-3.5 px-6 font-mono">{{ $r->tanggal_mulai ? $r->tanggal_mulai->format('d M Y') : '-' }}</td>
                                <td class="py-3.5 px-6 font-bold">{{ $r->slotParkir->areaParkir->nama_area ?? 'Tower A' }}, {{ $r->slotParkir->kode_slot ?? '-' }}</td>
                                <td class="py-3.5 px-6">
                                    @if($r->kendaraan)
                                        {{ $r->kendaraan->jenis_kendaraan ?? 'Mobil' }} ({{ $r->kendaraan->nomor_plat ?? '-' }})
                                    @else
                                        <span class="text-gray-400 italic">Belum Ada Kendaraan</span>
                                    @endif
                                </td>
                                <td class="py-3.5 px-6">{{ $r->durasi }}</td>
                                <td class="py-3.5 px-6">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $r->status == 'aktif' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                                        {{ ucfirst($r->status) }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-6 text-center text-xs text-secondary">Belum ada riwayat pemesanan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<!-- MODAL FORM BUAT PEMESANAN -->
<div class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden" id="modal-buat-pemesanan">
    <div class="bg-surface-container-lowest max-w-lg w-full rounded-2xl shadow-2xl border border-outline-variant overflow-hidden flex flex-col my-auto">
        <div class="flex items-center justify-between p-6 border-b border-outline-variant">
            <div>
                <h3 class="text-lg font-bold text-on-surface">Konfirmasi Pemesanan Slot</h3>
                <p class="text-xs text-secondary mt-0.5">Alokasikan slot parkir berlangganan Anda.</p>
            </div>
            <button class="p-2 text-secondary hover:bg-surface-container rounded-full" onclick="document.getElementById('modal-buat-pemesanan').classList.add('hidden')" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form class="p-6 space-y-4" action="{{ route('pemesanan.store') }}" method="POST">
            @csrf
            <div>
                <label class="text-xs font-semibold text-secondary block mb-1">Tipe Booking</label>
                <select name="tipe_booking" id="modal-tipe-select" class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-sm text-on-surface">
                    <option value="Langganan Tahunan (Dedicated 12 Bulan)">Langganan Tahunan (Dedicated 12 Bulan)</option>
                    <option value="Slot Tetap / Dedicated Bulanan">Slot Tetap / Dedicated Bulanan</option>
                    <option value="Kavling Permanen Unit">Kavling Permanen Unit Owner</option>
                </select>
            </div>

            <div>
                <label class="text-xs font-semibold text-secondary block mb-1">Pilih Slot Parkir</label>
                <select name="slot_parkir_id" id="modal-slot-select" class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-sm text-on-surface font-mono" required>
                    @foreach($slotParkir as $s)
                        <option value="{{ $s->id }}" {{ $s->status != 'tersedia' ? 'disabled' : '' }}>
                            {{ $s->kode_slot }} ({{ ucfirst($s->status) }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-xs font-semibold text-secondary block mb-1">Tanggal Mulai (Otomatis)</label>
                    <input class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-sm text-on-surface text-secondary cursor-not-allowed font-mono" type="text" value="{{ date('d M Y') }}" disabled/>
                    <input type="hidden" name="tanggal_mulai" value="{{ date('Y-m-d') }}">
                </div>
                <div>
                    <label class="text-xs font-semibold text-secondary block mb-1">Durasi</label>
                    <select name="durasi" id="modal-durasi-select" class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-sm text-on-surface">
                        <option value="12 Bulan (1 Tahun)">12 Bulan (1 Tahun)</option>
                        <option value="6 Bulan">6 Bulan</option>
                        <option value="1 Bulan">1 Bulan</option>
                        <option value="Permanen Unit">Permanen Unit</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="text-xs font-semibold text-secondary block mb-1">Catatan (Opsional)</label>
                <input name="catatan" class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-sm text-on-surface" placeholder="Contoh: Dekat akses pintu lift" type="text"/>
            </div>

            <div class="pt-4 flex items-center justify-end gap-3 border-t border-outline-variant mt-4">
                <button class="px-4 py-2 rounded-lg border border-outline-variant text-sm font-semibold text-secondary" onclick="document.getElementById('modal-buat-pemesanan').classList.add('hidden')" type="button">Batal</button>
                <button class="px-4 py-2 rounded-lg bg-primary text-white text-sm font-semibold hover:opacity-90 shadow-sm" type="submit">
                    Konfirmasi Pemesanan Slot
                </button>
            </div>    
        </form>
    </div>
</div>

<script>
function selectDurationCard(el, durasiValue) {
    document.querySelectorAll('.duration-card').forEach(card => {
        card.classList.remove('border-primary', 'bg-primary/5');
        card.classList.add('border-outline-variant');
    });

    el.classList.remove('border-outline-variant');
    el.classList.add('border-primary', 'bg-primary/5');

    const durasiSelect = document.getElementById('modal-durasi-select');
    if (durasiSelect) {
        durasiSelect.value = durasiValue;
    }

    document.getElementById('modal-buat-pemesanan').classList.remove('hidden');
}


function toggleMobileSidebar() {
    const sidebar = document.getElementById('mobile-sidebar');
    const backdrop = document.getElementById('sidebar-backdrop');
    
    sidebar.classList.toggle('-translate-x-full');
    backdrop.classList.toggle('hidden');
}


function selectSlotMap(el) {
    const status = el.getAttribute('data-status');
    const slotId = el.getAttribute('data-id');

    if (status !== 'tersedia' && status !== 'available') return;

    document.querySelectorAll('.slot-item').forEach(item => {
        if (item.getAttribute('data-status') === 'tersedia' || item.getAttribute('data-status') === 'available') {
            const isVip = item.getAttribute('data-kode').startsWith('VIP');
            item.className = `h-10 rounded border flex items-center justify-center text-xs font-bold font-mono transition-all slot-item ${isVip ? 'bg-surface-container-lowest border-amber-400 text-amber-900 hover:bg-amber-50' : 'bg-surface-container-lowest border-outline-variant text-on-surface hover:border-primary'} cursor-pointer`;
        }
    });

    el.className = 'h-10 rounded border flex items-center justify-center text-xs font-bold font-mono transition-all slot-item bg-primary text-white shadow-md cursor-pointer';

    const selectModal = document.getElementById('modal-slot-select');
    if (selectModal) {
        selectModal.value = slotId;
    }

    document.getElementById('modal-buat-pemesanan').classList.remove('hidden');
}
</script>

</body>
</html>