<!DOCTYPE html><html lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Safe Park - Area Parkir</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<!-- Tailwind Config injected from design system -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#006c49",
                        "primary-container": "#2563eb",
                        "inverse-primary": "#b4c5ff",
                        "tertiary": "#784b00",
                        "on-surface": "#0b1c30",
                        "surface-container": "#e5eeff",
                        "surface-container-high": "#dce9ff",
                        "primary": "#004ac6",
                        "surface": "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "on-primary-fixed-variant": "#003ea8",
                        "secondary-fixed-dim": "#4edea3",
                        "tertiary-fixed": "#ffddb8",
                        "on-secondary-container": "#00714d",
                        "surface-tint": "#0053db",
                        "surface-bright": "#f8f9ff",
                        "on-primary-container": "#eeefff",
                        "on-error": "#ffffff",
                        "tertiary-container": "#996100",
                        "outline": "#737686",
                        "error": "#ba1a1a",
                        "surface-container-low": "#eff4ff",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#434655",
                        "on-tertiary-container": "#ffeedd",
                        "on-tertiary-fixed": "#2a1700",
                        "surface-variant": "#d3e4fe",
                        "surface-container-highest": "#d3e4fe",
                        "secondary-container": "#6cf8bb",
                        "on-secondary-fixed-variant": "#005236",
                        "outline-variant": "#c3c6d7",
                        "background": "#f8f9ff",
                        "secondary-fixed": "#6ffbbe",
                        "primary-fixed-dim": "#b4c5ff",
                        "inverse-on-surface": "#eaf1ff",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed": "#002113",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#ffb95f",
                        "on-primary-fixed": "#00174b",
                        "on-background": "#0b1c30",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#213145",
                        "primary-fixed": "#dbe1ff",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed-variant": "#653e00"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-lg": "24px",
                        "container-max": "1440px",
                        "gutter": "24px",
                        "stack-md": "16px",
                        "stack-xs": "4px",
                        "stack-sm": "8px",
                        "sidebar-collapsed": "80px",
                        "margin-mobile": "16px",
                        "sidebar-width": "260px"
                    },
                    "fontFamily": {
                        "body-md": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "display-sm": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "code-sm": ["monospace"]
                    },
                    "fontSize": {
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "display-sm": ["30px", { "lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-lg": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "code-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined[data-weight="fill"] {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Ambient shadow utility classes */
        .shadow-ambient-lvl1 {
            box-shadow: 0px 1px 3px rgba(0,0,0,0.05), 0px 4px 6px rgba(0,0,0,0.02);
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen font-body-md selection:bg-primary selection:text-on-primary antialiased">
<!-- TopNavBar -->
<header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 z-50 backdrop-blur-md border-b border-outline-variant bg-surface-container-lowest/80">
<div class="flex justify-between items-center px-gutter max-w-container-max mx-auto h-full w-full">
<!-- Search on left -->
<div class="flex-1 max-w-md focus-within:ring-2 focus-within:ring-primary/20 transition-all rounded-lg overflow-hidden flex items-center bg-surface-container-low px-3 h-10">
<span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
<input class="w-full bg-transparent border-none focus:ring-0 text-body-md text-on-surface placeholder:text-outline h-full" placeholder="Cari..." type="text"/>
</div>
<!-- Actions on right -->
<div class="flex items-center gap-4">
<a class="h-8 w-8 rounded-full overflow-hidden bg-surface-container border border-outline-variant ml-2" href="{{ route('profile.edit') }}">
<img alt="Administrator Profile" class="w-full h-full object-cover" data-alt="A professional headshot of a corporate administrator, bright even lighting, clean neutral background, sharp focus, modern corporate aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVBfVeJ-79dbdwmEBKkKLi8_ZCGVxvkff85f-ApfJrlLP1JTkBnjn2og_CzjmG8cgNZndbdDOK3ZP9S443-hH8BY6S3u7dF3P448UbzUvFy3P0E7-UHPGwJJ_vfdkOSUCwngA1OHihm79wRgcgfO0FVsOoFuuJ1JuOLvwaTEAtMjOxrkDMTmbWInAitQEGa0tmTZ40x3DnZ8X3JBAs4DY_dm3HsE6a0q_NY1YOebuuk-63UNKQ31QD-g"/>
</a>
</div>
</div>
</header>
<!-- ================= SIDEBAR SAFE PARK ================= -->
<nav
    class="bg-surface-container-lowest
           w-sidebar-width h-full
           fixed left-0 top-0
           border-r border-outline-variant
           shadow-sm
           z-50
           transform -translate-x-full
           md:translate-x-0
           transition-transform duration-300 ease-in-out
           flex flex-col py-6"
    id="sidebar"
>

    <!-- LOGO + NAMA SAFE PARK -->
    <div class="px-6 mb-8 flex items-center gap-3">

        <!-- Logo -->
        <div class="w-10 h-10 rounded-full overflow-hidden flex items-center justify-center shrink-0">
            <img
                src="{{ asset('image/screen.webp') }}"
                alt="Safe Park Logo"
                class="w-full h-full object-cover"
            >
        </div>

        <!-- Nama -->
        <div>
            <h1 class="text-title-lg font-title-lg font-bold text-primary">
                Safe Park
            </h1>

            <p class="font-label-md text-label-md text-on-surface-variant">
                Smart Parking Admin
            </p>
        </div>

    </div>


    <!-- ================= MENU UTAMA ================= -->
    <div class="flex-1 overflow-y-auto">

        <ul class="space-y-1">

            <!-- Dashboard -->
            <li>
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>

                    <span class="font-body-md text-body-md">
                        Dashboard
                    </span>
                </a>
            </li>


            <!-- Kendaraan -->
            <li>
                <a
                    href="{{ route('dashboard.admin.kendaraan1') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        directions_car
                    </span>

                    <span class="font-body-md text-body-md">
                        Kendaraan
                    </span>
                </a>
            </li>


            <!-- Manajemen Pengguna -->
            <li>
                <a
                    href="{{ route('pengguna') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        group
                    </span>

                    <span class="font-body-md text-body-md">
                        Manajemen Pengguna
                    </span>
                </a>
            </li>

            <li>
                <a
                    href="{{ route('tamu') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        badge
                    </span>

                    <span class="font-body-md text-body-md">
                        List Pengunjung
                    </span>
                </a>
            </li>


            <!-- Area Parkir -->
            <li>
                <a
                    href="{{ route('peta') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        local_parking
                    </span>

                    <span class="font-body-md text-body-md">
                        Area Parkir
                    </span>
                </a>
            </li>


            <!-- Analitik -->
            <li>
                <a
                    href="{{ route('analitik') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        analytics
                    </span>

                    <span class="font-body-md text-body-md">
                        Analitik
                    </span>
                </a>
            </li>

        </ul>

    </div>


    <!-- ================= MENU BAWAH ================= -->
    <div class="px-6 mt-auto">

        <ul class="space-y-1">

            


            <!-- Bantuan -->
            <li>
                <a
                    href="#"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        help
                    </span>

                    <span class="font-body-sm text-body-sm">
                        Bantuan
                    </span>
                </a>
            </li>

        </ul>

    </div>

</nav>
<!-- ================= END SIDEBAR ================= -->
<!-- Main Content Area -->
<main class="ml-[80px] md:ml-sidebar-width pt-16 min-h-screen flex flex-col transition-all duration-300">
<div class="flex-1 p-gutter max-w-container-max mx-auto w-full">
<!-- Page Header -->
<div class="mb-stack-lg flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-background">Area Parkir</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Kelola kapasitas dan ketersediaan area parkir.</p>
</div>
<div class="flex gap-3">
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md text-label-md flex items-center gap-2 hover:bg-surface-tint transition-colors shadow-ambient-lvl1" id="btn-edit-area">
<span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                        Edit Area
                    </button>
</div>
</div>
<!-- Stats Overview (Bento Grid Style) -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-stack-md mb-stack-lg">
<div class="bg-surface-container-lowest border border-outline-variant p-stack-md shadow-ambient-lvl1 flex flex-col justify-between rounded-lg">
<div class="flex items-center gap-2 text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-lg" data-icon="database">database</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Total Kapasitas</span>
</div>
<div class="font-display-sm text-display-sm text-on-background">{{ number_format($maxKapasitas) }}</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-stack-md shadow-ambient-lvl1 flex flex-col justify-between relative overflow-hidden rounded-lg">
<div class="absolute right-0 bottom-0 opacity-5">
<span class="material-symbols-outlined text-8xl" data-icon="directions_car">directions_car</span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant mb-2 relative z-10">
<span class="material-symbols-outlined text-lg text-error" data-icon="local_parking" data-weight="fill">local_parking</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Terisi</span>
</div>
<div class="font-display-sm text-display-sm text-on-background relative z-10">{{ number_format($totalTerisi) }}</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-stack-md shadow-ambient-lvl1 flex flex-col justify-between relative overflow-hidden rounded-lg">
<div class="absolute right-0 bottom-0 opacity-5">
<span class="material-symbols-outlined text-8xl" data-icon="check_circle">check_circle</span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant mb-2 relative z-10">
<span class="material-symbols-outlined text-lg text-secondary" data-icon="check_circle" data-weight="fill">check_circle</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Tersedia</span>
</div>
<div class="font-display-sm text-display-sm text-secondary relative z-10">{{ number_format($totalKapasitas) }}</div>
</div>
<div class="bg-primary border border-primary p-stack-md shadow-ambient-lvl1 flex flex-col justify-between text-on-primary rounded-lg">
<div class="flex items-center gap-2 mb-2 opacity-80">
<span class="material-symbols-outlined text-lg" data-icon="percent">percent</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Occupancy</span>
</div>
<div class="flex items-end gap-2">
<div class="font-display-sm text-display-sm">{{ number_format($occupancy) }}%</div>
<span class="material-symbols-outlined text-sm mb-2" data-icon="trending_up">trending_up</span>
</div>
</div>
</div>
<!-- Detailed Layout: Map + Cards -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-stack-lg">
<!-- Left Column: Location Cards -->
<div class="lg:col-span-1 flex flex-col gap-stack-md">
<h3 class="font-title-md text-title-md text-on-background mb-1">Area Berdasarkan Lokasi</h3>
@foreach($areas as $area)
    <div class="bg-surface-container-lowest border border-outline-variant p-stack-md shadow-ambient-lvl1 hover:border-primary transition-colors cursor-pointer group rounded-lg">
        <div class="flex justify-between items-center mb-3">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-on-primary-container transition-colors">
                    <span class="font-title-md text-title-md">
                        {{ strtoupper(substr($area->nama_area, 0, 1)) }}
                    </span>
                </div>
                <div>
                    <h4 class="font-title-md text-title-md text-on-background">{{ $area->nama_area }}</h4>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Area Parkir {{ $area->status }}</p>
                </div>
            </div>
            <span class="font-title-md text-title-md {{ $area->persentase >= 90 ? 'text-error' : 'text-on-background' }}">
                {{ $area->persentase }}%
            </span>
        </div>

        <!-- Progress Bar Dinamis -->
        <div class="w-full bg-surface-container rounded-full h-2 mb-2 overflow-hidden">
            <div class="{{ $area->persentase >= 90 ? 'bg-error' : ($area->persentase >= 70 ? 'bg-secondary' : 'bg-primary') }} h-2 rounded-full" 
                 style="width: {{ $area->persentase }}%"></div>
        </div>

        <!-- Informasi Terisi & Tersedia Dinamis -->
        <div class="flex justify-between font-label-md text-label-md text-on-surface-variant">
            <span>{{ number_format($area->terisi) }} Terisi</span>
            <span>{{ number_format($area->tersedia) }} Tersedia</span>
        </div>
    </div>
    @endforeach
</div>
<!-- Right Column: Live Parking Map -->
<div class="lg:col-span-2">
    <div class="bg-surface-container-lowest border border-outline-variant shadow-ambient-lvl1 h-full flex flex-col overflow-hidden rounded-lg">
        
        <!-- Header & Floor Selector -->
        <div class="p-stack-lg border-b border-outline-variant flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-surface-container-lowest/50">
            <div>
                <h3 class="font-title-lg text-title-lg text-on-background flex items-center gap-2">
                    Live Parking Map
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-secondary"></span>
                    </span>
                </h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Pembaruan real-time dari sensor lantai</p>
            </div>

            <!-- Tombol Filter Area Dinamis -->
            <div class="flex bg-surface-container-low rounded-lg p-1 border border-outline-variant">
                @foreach($areas as $area)
                    <a href="{{ route('peta', ['area_id' => $area->id]) }}" 
                       class="px-4 py-1.5 rounded-md font-label-md text-label-md transition-colors {{ $selectedAreaId == $area->id ? 'bg-surface-container-lowest shadow-sm text-on-background border border-outline-variant/50 font-bold' : 'text-on-surface-variant hover:text-on-background' }}">
                        {{ $area->nama_area }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Legend Warna -->
        <div class="px-stack-lg py-3 flex gap-4 border-b border-outline-variant/50 bg-surface-bright text-xs">
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-emerald-100 border border-emerald-500"></div>
                <span class="font-label-md text-label-md text-on-surface-variant">Tersedia</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-red-100 border border-red-500"></div>
                <span class="font-label-md text-label-md text-on-surface-variant">Terisi</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-sky-100 border border-sky-500 border-dashed"></div>
                <span class="font-label-md text-label-md text-on-surface-variant">Dipesan</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-gray-200 border border-gray-500"></div>
                <span class="font-label-md text-label-md text-on-surface-variant">Maintenance</span>
            </div>
        </div>

        <!-- Grid Slot Parkir Dinamis -->
        <div class="flex-1 p-stack-lg bg-surface-container-lowest relative min-h-[400px] overflow-auto">
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, #0b1c30 1px, transparent 0); background-size: 24px 24px;"></div>
            
            <div class="min-w-[600px] h-full flex flex-col justify-center gap-8 relative z-10">
                <div class="grid grid-cols-10 gap-2 p-2">
                    @forelse($slots as $slot)
                        @if($slot->status == 'terisi')
                            <!-- Terisi (Merah) -->
                            <div class="w-10 h-10 rounded bg-red-100 border border-red-500 flex flex-col items-center justify-center shadow-sm" title="{{ $slot->kode_slot }}: Terisi">
                                <span class="material-symbols-outlined text-red-600 text-[12px] leading-none">directions_car</span>
                                <span class="text-[8px] font-bold text-red-600">{{ $slot->kode_slot }}</span>
                            </div>

                        @elseif($slot->status == 'dipesan')
                            <!-- Dipesan (Biru Muda) -->
                            <div class="w-10 h-10 rounded bg-sky-100 border border-sky-500 border-dashed flex flex-col items-center justify-center shadow-sm" title="{{ $slot->kode_slot }}: Dipesan">
                                <span class="material-symbols-outlined text-sky-600 text-[12px] leading-none">lock</span>
                                <span class="text-[8px] font-bold text-sky-600">{{ $slot->kode_slot }}</span>
                            </div>

                        @elseif($slot->status == 'maintenance')
                            <!-- Maintenance (Abu-abu) -->
                            <div class="w-10 h-10 rounded bg-gray-200 border border-gray-500 flex flex-col items-center justify-center shadow-sm" title="{{ $slot->kode_slot }}: Perbaikan">
                                <span class="material-symbols-outlined text-gray-600 text-[12px] leading-none">construction</span>
                                <span class="text-[8px] font-bold text-gray-600">{{ $slot->kode_slot }}</span>
                            </div>

                        @else
                            <!-- Tersedia (Hijau) -->
                            <div class="w-10 h-10 rounded bg-emerald-100 border border-emerald-500 flex flex-col items-center justify-center shadow-sm cursor-pointer hover:ring-2 hover:ring-emerald-400" title="{{ $slot->kode_slot }}: Tersedia">
                                <span class="text-[8px] font-bold text-emerald-600">{{ $slot->kode_slot }}</span>
                            </div>
                        @endif
                    @empty
                        <div class="col-span-10 text-center text-sm text-gray-500 py-8">
                            Belum ada data slot parkir di area ini.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</main>



@php
    $currentArea = $areas->firstWhere('id', $selectedAreaId) ?? $areas->first();
@endphp

<!-- Modal Edit Area -->
<div id="modal-edit-area" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
  <div class="absolute inset-0 bg-on-background/40 backdrop-blur-sm" id="modal-overlay"></div>
  <div class="relative bg-surface-container-lowest w-full max-w-md rounded-xl shadow-ambient-lvl1 animate-in fade-in zoom-in duration-200">
    <div class="p-6 border-b border-outline-variant flex justify-between items-center">
      <h3 class="font-headline-md text-headline-md text-on-background">Edit Area Parkir</h3>
      <button id="btn-close-modal" type="button" class="p-2 hover:bg-surface-container rounded-full text-on-surface-variant transition-colors">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    
    <form action="{{ $currentArea ? route('slot.parkir.update', $currentArea->id) : '#' }}" method="POST" class="p-6 flex flex-col gap-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface-variant">
                Tempat Parkir
            </label>

            <input
                type="text"
                id="slotSearch"
                placeholder="Cth: A-001"
                autocomplete="off"
                required
                class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none"
            >

            <input
                type="hidden"
                name="slot_parkir_id"
                id="selectedSlotId"
                required
            >

            <div
                id="slotResults"
                class="hidden top-full left-0 right-0 mt-1 bg-white border border-outline-variant rounded-lg shadow-lg z-50 max-h-60 overflow-y-auto"
            ></div>
        </div>

        <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface-variant">
                Status Area
            </label>

            <select
                name="status"
                class="w-full px-4 py-2 rounded-lg border border-outline-variant bg-surface-container-low focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all"
            >
                <option value="tersedia" {{ ($currentArea->status ?? '') === 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="terisi" {{ ($currentArea->status ?? '') === 'terisi' ? 'selected' : '' }}>Terisi</option>
                <option value="dipesan" {{ ($currentArea->status ?? '') === 'dipesan' ? 'selected' : '' }}>Dipesan</option>
                <option value="maintenance" {{ ($currentArea->status ?? '') === 'maintenance' ? 'selected' : '' }}>Maintenance</option>
            </select>
        </div>

        <div class="flex gap-3 mt-4">
            <button
                type="button"
                id="btn-cancel-modal"
                class="flex-1 px-4 py-2 rounded-lg border border-outline-variant font-label-md text-label-md hover:bg-surface-container transition-colors"
            >
                Batal
            </button>

            <button
                type="submit"
                class="flex-1 px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-tint transition-colors"
            >
                Simpan
            </button>
        </div>
    </form>
  </div>
</div><script>

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('addVehicleModal');
    const addBtn = document.getElementById('addVehicleBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const backdrop = document.getElementById('modalBackdrop');


    const form = document.getElementById('addVehicleForm');
    
    /*
    |--------------------------------------------------------------------------
    | SEARCH SLOT PARKIR KOSONG
    |--------------------------------------------------------------------------
    */
    const slots = @json($allslots); // Menerima data slot berstatus 'tersedia' dari controller

    const slotSearch = document.getElementById('slotSearch');
    const selectedSlotId = document.getElementById('selectedSlotId');
    const slotResults = document.getElementById('slotResults');

    slotSearch.addEventListener('input', function () {
        const keyword = this.value.toLowerCase().trim();
        selectedSlotId.value = '';

        if (keyword === '') {
            slotResults.classList.add('hidden');
            slotResults.innerHTML = '';
            return;
        }

        // Filter hanya slot kosong yang cocok dengan ketikan admin (misal 'A-1' atau 'A-001')
        const results = slots.filter(function (slot) {
            return slot.kode_slot.toLowerCase().includes(keyword);
        }).slice(0, 50);

        slotResults.innerHTML = '';

        if (results.length === 0) {
            slotResults.innerHTML = `
                <div class="px-4 py-3 text-sm text-gray-500">
                    Slot tidak ditemukan / sudah terisi
                </div>
            `;
            slotResults.classList.remove('hidden');
            return;
        }

        results.forEach(function (slot) {
            const item = document.createElement('button');
            item.type = 'button';
            item.className = 'w-full text-left px-4 py-3 hover:bg-emerald-50 transition flex justify-between items-center';

            item.innerHTML = `
                <span class="font-medium text-gray-900">${slot.kode_slot}</span>
                <span class="text-xs text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded font-bold">Tersedia</span>
            `;

            item.addEventListener('click', function () {
                slotSearch.value = slot.kode_slot;
                selectedSlotId.value = slot.id; // Menyimpan ID slot yang dipilih
                slotResults.classList.add('hidden');
            });

            slotResults.appendChild(item);
        });

        slotResults.classList.remove('hidden');
    });

    // Tambahkan baris ini di dalam event DOMContentLoaded
    document.addEventListener('click', function (e) {
        if (!slotSearch.contains(e.target) && !slotResults.contains(e.target)) {
            slotResults.classList.add('hidden');
        }
    });

  (function() {
    const modal = document.getElementById('modal-edit-area');
    const openBtn = document.getElementById('btn-edit-area');
    const closeBtn = document.getElementById('btn-close-modal');
    const cancelBtn = document.getElementById('btn-cancel-modal');
    const overlay = document.getElementById('modal-overlay');

    const toggleModal = () => {
      modal.classList.toggle('hidden');
      modal.classList.toggle('flex');
    };

    if (openBtn) openBtn.addEventListener('click', toggleModal);
    if (closeBtn) closeBtn.addEventListener('click', toggleModal);
    if (cancelBtn) cancelBtn.addEventListener('click', toggleModal);
    if (overlay) overlay.addEventListener('click', toggleModal);
  })();
});
</script></body></html>