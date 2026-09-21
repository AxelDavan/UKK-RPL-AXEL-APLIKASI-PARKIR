<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Parking Monitoring - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#d3e4fe",
                        "background": "#faf8ff",
                        "on-primary-fixed": "#00174b",
                        "inverse-primary": "#b4c5ff",
                        "surface-dim": "#d9d9e5",
                        "surface-container-low": "#f3f3fe",
                        "on-secondary-fixed-variant": "#38485d",
                        "surface-container-highest": "#e1e2ed",
                        "tertiary-container": "#656d84",
                        "inverse-surface": "#2e3039",
                        "on-secondary-container": "#54647a",
                        "on-tertiary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "on-background": "#191b23",
                        "surface-tint": "#0053db",
                        "error-container": "#ffdad6",
                        "error": "#ba1a1a",
                        "secondary": "#505f76",
                        "on-error-container": "#93000a",
                        "primary": "#004ac6",
                        "tertiary": "#4d556b",
                        "outline-variant": "#c3c6d7",
                        "surface": "#faf8ff",
                        "primary-container": "#2563eb",
                        "on-surface-variant": "#434655",
                        "inverse-on-surface": "#f0f0fb",
                        "primary-fixed": "#dbe1ff",
                        "outline": "#737686",
                        "surface-container": "#ededf9",
                        "on-tertiary-container": "#eef0ff",
                        "on-primary-container": "#eeefff",
                        "surface-variant": "#e1e2ed",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#b4c5ff",
                        "secondary-fixed-dim": "#b7c8e1",
                        "on-primary": "#ffffff",
                        "on-surface": "#191b23",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-bright": "#faf8ff",
                        "on-primary-fixed-variant": "#003ea8",
                        "tertiary-fixed": "#dae2fd",
                        "tertiary-fixed-dim": "#bec6e0",
                        "surface-container-high": "#e7e7f3",
                        "secondary-container": "#d0e1fb",
                        "on-tertiary-fixed": "#131b2e",
                        "on-error": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "16px",
                        "xs": "4px",
                        "margin-desktop": "32px",
                        "sm": "8px",
                        "lg": "24px",
                        "unit": "4px",
                        "margin-mobile": "16px",
                        "xl": "32px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "display-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "label-md": ["11px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "label-lg": ["12px", {"lineHeight": "16px", "fontWeight": "600"}],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #faf8ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.fill { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-panel { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.3); }
        .parking-slot { transition: all 0.2s ease-in-out; cursor: pointer; }
        .parking-slot:hover { transform: scale(1.05); z-index: 10; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .slot-available { background-color: #d1fae5; border-color: #10b981; } /* Light green background, emerald border */
        .slot-occupied { background-color: #fee2e2; border-color: #ef4444; } /* Light red background, red border */
    </style>
</head>
<body class="flex bg-background text-on-background min-h-screen overflow-hidden">
<nav class="hidden md:flex flex-col h-full py-6 w-64 fixed left-0 top-0
            bg-surface-container-low
            border-r border-outline-variant
            shadow-md z-40">

    <!-- LOGO -->
    <div class="px-6 mb-8">
        <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">
            Safe Park
        </h1>

        <p class="font-label-lg text-label-lg text-on-surface-variant">
            Security Suite
        </p>
    </div>

    <!-- MENU UTAMA -->
    <div class="flex-1 flex flex-col gap-1">

        <!-- DASHBOARD - AKTIF -->
        <a
            
            href="{{ route('dashboard') }}"
            class="flex items-center gap-4
                   px-4 py-3 mx-2 rounded-lg
                   transition-colors
                   {{ request()->routeIs('dashboard')
                        ? 'bg-secondary-container text-on-secondary-container font-bold'
                        : 'text-on-surface-variant' }}"
        ></>
            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1;"
            >
                dashboard
            </span>

            <span class="font-label-lg text-label-lg">
                Dashboard
            </span>
        </a>

        <!-- VERIFIKASI -->
        <a
            href="{{ route('verifikasi') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                verified_user
            </span>

            <span class="font-label-lg text-label-lg">
                Verifikasi
            </span>
        </a>

        <!-- TAMU -->
        <a
            href="{{ route('tamu') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                group
            </span>

            <span class="font-label-lg text-label-lg">
                Tamu
            </span>
        </a>

        <!-- SCANNER -->
        <a
            href="{{ route('scanner') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                qr_code_scanner
            </span>

            <span class="font-label-lg text-label-lg">
                Scan Masuk
            </span>
        </a>

        <a
            href="{{ route('scannkeluar') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                qr_code_scanner
            </span>

            <span class="font-label-lg text-label-lg">
                Scan Keluar
            </span>
        </a>

        <!-- Karcis Masuk & Keluar -->
        <a
            href="{{ route('karsuk') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1;"
            >
                map
            </span>

            <span class="font-label-lg text-label-lg">
                Karcis Masuk
            </span>
        </a>

        <a
            href="{{ route('karluar') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1;"
            >
                map
            </span>

            <span class="font-label-lg text-label-lg">
                Karcis Kelur
            </span>
        </a>

        <!-- PARKIR -->
        <a
            href="{{ route('parkir') }}"
            class="flex items-center gap-4
                   px-4 py-3 mx-2 rounded-lg
                   transition-colors
                   {{ request()->routeIs('parkir')
                        ? 'bg-secondary-container text-on-secondary-container font-bold'
                        : 'text-on-surface-variant' }}"
        >
            <span class="material-symbols-outlined">
                local_parking
            </span>
        
            <span class="font-label-lg text-label-lg">
                Parkir
            </span>
        </a>

        <!-- LAPORAN -->
        <a
            href="{{ route('laporan') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                assessment
            </span>

            <span class="font-label-lg text-label-lg">
                Laporan
            </span>
        </a>

    </div>

    <!-- MENU BAWAH -->
    <div class="mt-auto flex flex-col gap-1
                border-t border-outline-variant
                pt-2 mx-2">

        <!-- LOGOUT -->
        <form
            method="POST"
            action="{{ route('logout') }}"
        >
            @csrf

            <button
                type="submit"
                class="w-full flex items-center gap-4
                       text-on-surface-variant
                       px-4 py-3
                       rounded-lg
                       transition-colors
                       hover:text-error
                       text-left"
            >
                <span class="material-symbols-outlined">
                    logout
                </span>

                <span class="font-label-lg text-label-lg">
                    Logout
                </span>
            </button>
        </form>

    </div>

</nav>
<!-- Main Content Area -->
<main class="ml-64 flex-1 flex flex-col h-screen overflow-y-auto">
<!-- TopNavBar (Shared Component Contextual Adapter) -->
<header class="flex justify-between items-center w-full px-margin-desktop h-16 bg-surface border-b border-outline-variant shadow-sm z-40 sticky top-0">
<div class="flex items-center gap-md">
<h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Parking Monitor</h2>
<div class="h-6 w-px bg-outline-variant mx-sm"></div>
<span class="flex items-center gap-xs px-sm py-xs bg-surface-container-highest rounded-full font-label-md text-label-md text-on-surface-variant">
<span class="w-2 h-2 rounded-full bg-[#10b981] animate-pulse"></span>
                     Live Sync
                 </span>
</div>
<!-- Search & Actions -->
<div class="flex items-center gap-lg">
<div class="relative hidden lg:block w-64">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
<input class="w-full pl-xl pr-md py-sm bg-surface-container rounded-lg border-none text-body-md focus:ring-2 focus:ring-primary transition-shadow" placeholder="Search vehicle or slot..." type="text"/>
</div>
<div class="flex items-center gap-sm">
</div>
</div>
</header>
<!-- Canvas -->
<div class="p-margin-desktop flex-1 flex flex-col gap-lg bg-[#f8fafc]">
<!-- Bento Grid Layout -->
<div class="grid grid-cols-12 gap-gutter flex-1">
<!-- Left Column: Stats & Map (Spans 9 cols) -->
<div class="col-span-12 lg:col-span-8 xl:col-span-9 flex flex-col gap-lg">
<!-- Top Row: Quick Stats -->
<div class="grid grid-cols-3 gap-gutter h-32">
<!-- Stat Card 1 -->
<div class="bg-surface rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant flex items-center justify-between relative overflow-hidden">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full blur-xl"></div>
<div>
<p class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider mb-xs">Total Kapasitas</p>
<h3 class="font-display-lg text-display-lg text-on-surface font-bold">{{ number_format($totalCapacity) }}</h3>
</div>
<div class="w-12 h-12 rounded-lg bg-surface-container-highest flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-[28px]">garage</span>
</div>
</div>
<!-- Stat Card 2 -->
<div class="bg-surface rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-[#10b981] border-l-4 flex items-center justify-between">
<div>
<p class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider mb-xs">Tersedia</p>
<div class="flex items-baseline gap-sm">
<h3 class="font-display-lg text-display-lg text-on-surface font-bold">{{ number_format($availableCount) }}</h3>
<span class="font-label-md text-label-md text-[#10b981] flex items-center"><span class="material-symbols-outlined text-[14px]"></span></span>
</div>
</div>
<div class="w-12 h-12 rounded-lg bg-[#d1fae5] flex items-center justify-center">
<span class="material-symbols-outlined text-[#059669] text-[28px]">check_circle</span>
</div>
</div>
<!-- Stat Card 3 -->
<div class="bg-surface rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-[#ef4444] border-l-4 flex items-center justify-between">
<div>
<p class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider mb-xs">Terisi</p>
<h3 class="font-display-lg text-display-lg text-on-surface font-bold">{{ number_format($occupiedCount) }}</h3>
</div>
<div class="w-12 h-12 rounded-lg bg-[#fee2e2] flex items-center justify-center">
<span class="material-symbols-outlined text-[#dc2626] text-[28px]">directions_car</span>
</div>
</div>
</div>
<!-- Main Map Area -->
<div class="flex-1 bg-surface rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant flex flex-col overflow-hidden relative">
<!-- Header & Filter Tombol Lantai -->
<div class="px-lg py-md border-b border-outline-variant flex justify-between items-center bg-surface-container-lowest z-10">
    <h3 class="font-title-md text-title-md text-on-surface flex items-center gap-sm">
        <span class="material-symbols-outlined text-primary">map</span>
        {{ $lantai === 'VIP' ? 'VIP Sector Overview' : ($lantai === 'B' ? 'Lantai 2 Overview' : 'Lantai 1 Overview') }}
    </h3>

    <!-- Filter Buttons -->
    <div class="flex gap-sm">
        <a href="{{ route('parkir', ['level' => 'A']) }}" 
           class="px-md py-xs rounded-md font-label-md text-label-md transition-colors {{ $lantai === 'A' ? 'bg-secondary-container text-on-secondary-container font-bold shadow-sm' : 'bg-surface text-on-surface-variant border border-outline-variant hover:bg-surface-container-high' }}">
            Lantai 1 (Kode A)
        </a>

        <a href="{{ route('parkir', ['level' => 'B']) }}" 
           class="px-md py-xs rounded-md font-label-md text-label-md transition-colors {{ $lantai === 'B' ? 'bg-secondary-container text-on-secondary-container font-bold shadow-sm' : 'bg-surface text-on-surface-variant border border-outline-variant hover:bg-surface-container-high' }}">
            Lantai 2 (Kode B)
        </a>

        <a href="{{ route('parkir', ['level' => 'VIP']) }}" 
           class="px-md py-xs rounded-md font-label-md text-label-md transition-colors {{ $lantai === 'VIP' ? 'bg-secondary-container text-on-secondary-container font-bold shadow-sm' : 'bg-surface text-on-surface-variant border border-outline-variant hover:bg-surface-container-high' }}">
            VIP (Kode VIP)
        </a>
    </div>
</div>
<!-- Map Container -->
<div class="grid grid-cols-10 gap-2 p-2">
    @forelse($slots as $slot)
        @php
            $status = strtolower($slot->status ?? '');
            
            // Pengecekan kondisi status slot
            $isTerisi  = in_array($status, ['terisi', 'occupied']);
            $isDipesan = in_array($status, ['dipesan', 'reserved', 'booking']);
            $isMaint   = in_array($status, ['maintenance', 'perbaikan', 'rusak']);
        @endphp

        <div onclick="loadSlotDetail({{ $slot->id }})"
             class="w-10 h-10 rounded flex flex-col items-center justify-center shadow-sm cursor-pointer hover:scale-105 transition-all
                    {{ $isTerisi ? 'bg-red-100 border border-red-500' : '' }}
                    {{ $isDipesan ? 'bg-sky-100 border border-sky-500 border-dashed' : '' }}
                    {{ $isMaint ? 'bg-gray-200 border border-gray-500' : '' }}
                    {{ !$isTerisi && !$isDipesan && !$isMaint ? 'bg-emerald-100 border border-emerald-500 hover:ring-2 hover:ring-emerald-400' : '' }}" 
             title="Slot {{ $slot->kode_slot }}">
            
            @if($isTerisi)
                <span class="material-symbols-outlined text-red-600 text-[12px] leading-none">directions_car</span>
                <span class="text-[8px] font-bold text-red-600">{{ $slot->kode_slot }}</span>
            @elseif($isDipesan)
                <span class="material-symbols-outlined text-sky-600 text-[12px] leading-none">lock</span>
                <span class="text-[8px] font-bold text-sky-600">{{ $slot->kode_slot }}</span>
            @elseif($isMaint)
                <span class="material-symbols-outlined text-gray-600 text-[12px] leading-none">construction</span>
                <span class="text-[8px] font-bold text-gray-600">{{ $slot->kode_slot }}</span>
            @else
                <span class="text-[8px] font-bold text-emerald-600">{{ $slot->kode_slot }}</span>
            @endif
        </div>
    @empty
        <div class="col-span-10 text-center text-sm text-gray-500 py-8">Belum ada data slot.</div>
    @endforelse
</div>
<!-- Map Legend -->
<div class="px-lg py-sm border-t border-outline-variant bg-surface-container-lowest flex items-center justify-end gap-lg">
<div class="flex items-center gap-xs">
<div class="w-4 h-4 rounded-sm bg-[#d1fae5] border border-[#10b981]"></div>
<span class="font-label-md text-label-md text-on-surface-variant">Available</span>
</div>
<div class="flex items-center gap-xs">
<div class="w-4 h-4 rounded-sm bg-[#fee2e2] border border-[#ef4444]"></div>
<span class="font-label-md text-label-md text-on-surface-variant">Occupied</span>
</div>
<div class="flex items-center gap-xs">
<div class="w-4 h-4 rounded-sm bg-surface-variant border border-outline"></div>
<span class="font-label-md text-label-md text-on-surface-variant">Reserved</span>
</div>
</div>
</div>
</div>
<!-- Right Column: Details Sidebar -->
<div class="col-span-12 lg:col-span-4 xl:col-span-3 flex flex-col gap-lg">
    
    <!-- Right Column: Details Sidebar -->
<div class="col-span-12 lg:col-span-4 xl:col-span-3 flex flex-col gap-lg">
    
    <!-- 1. SLOT INFO CARD -->
    <div class="glass-panel rounded-xl p-lg shadow-[0_8px_32px_rgba(0,0,0,0.08)] border border-outline-variant relative overflow-hidden transition-all duration-300" id="vehicle-details">
        <div class="absolute top-0 left-0 w-full h-2 bg-primary"></div>
        <div class="flex justify-between items-start mb-md mt-sm">
            <h3 class="font-title-lg text-title-lg text-on-surface">Slot Info</h3>
            <span class="px-sm py-xs bg-surface-variant rounded-md font-label-lg text-label-lg font-bold text-on-surface" id="slot-id-badge">
                Pilih Slot
            </span>
        </div>

        <!-- Detail Kendaraan -->
        <div class="space-y-sm">
            <div class="flex flex-col border-b border-outline-variant pb-sm">
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">LICENSE PLATE</span>
                <span class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface font-bold tracking-widest mt-xs" id="plate-text">
                    -
                </span>
            </div>
            
            <div class="flex justify-between items-center py-xs border-b border-outline-variant">
                <span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[16px]">directions_car</span> Vehicle
                </span>
                <span class="font-body-md text-body-md text-on-surface font-medium" id="vehicle-type">-</span>
            </div>

            <div class="flex justify-between items-center py-xs border-b border-outline-variant">
                <span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[16px]">schedule</span> Entry Time
                </span>
                <span class="font-body-md text-body-md text-on-surface font-medium" id="entry-time">-</span>
            </div>

            <div class="flex justify-between items-center py-xs border-b border-outline-variant">
                <span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[16px]">timer</span> Duration
                </span>
                <span class="font-body-md text-body-md text-on-surface font-medium" id="duration-text">-</span>
            </div>

            <div class="flex justify-between items-center py-xs">
                <span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[16px]">person</span> Pemilik
                </span>
                <span class="font-body-md text-body-md text-on-surface font-medium" id="owner-text">-</span>
            </div>
        </div>
    </div>

    <!-- 2. RECENT ACTIVITY CARD -->
    <div class="bg-surface rounded-xl flex-1 shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant flex flex-col overflow-hidden">
        <div class="px-md py-sm border-b border-outline-variant bg-surface-container-lowest">
            <h3 class="font-title-md text-title-md text-on-surface">Recent Activity</h3>
        </div>
        
        <div class="p-md flex-1 overflow-y-auto space-y-md">
            @forelse($recentActivities as $act)
                <div class="flex gap-sm items-start">
                    @if(($act->status ?? '') === 'masuk' || ($act->status ?? '') === 'aktif')
                        <div class="w-8 h-8 rounded-full bg-[#fee2e2] flex items-center justify-center shrink-0 mt-1">
                            <span class="material-symbols-outlined text-[#dc2626] text-[16px]">login</span>
                        </div>
                        <div>
                            <p class="font-body-md text-body-md text-on-surface">
                                Vehicle <span class="font-bold">{{ $act->kendaraan->nomor_plat ?? 'Umum' }}</span> entered.
                            </p>
                            <div class="flex items-center gap-xs mt-1">
                                <span class="font-label-md text-label-md text-on-surface-variant">Gate Main</span>
                                <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                                <span class="font-label-md text-label-md text-outline">{{ $act->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @else
                        <div class="w-8 h-8 rounded-full bg-[#d1fae5] flex items-center justify-center shrink-0 mt-1">
                            <span class="material-symbols-outlined text-[#059669] text-[16px]">logout</span>
                        </div>
                        <div>
                            <p class="font-body-md text-body-md text-on-surface">
                                Vehicle <span class="font-bold">{{ $act->kendaraan->nomor_plat ?? 'Umum' }}</span> exited.
                            </p>
                            <div class="flex items-center gap-xs mt-1">
                                <span class="font-label-md text-label-md text-on-surface-variant">Gate Exit</span>
                                <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                                <span class="font-label-md text-label-md text-outline">{{ $act->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endif
                </div>
            @empty
                <div class="text-center text-xs text-slate-400 py-4">Belum ada aktivitas parkir.</div>
            @endforelse
        </div>
    </div>

</div>

</div>
</div>
</div>
</main>
<script>
async function loadSlotDetail(slotId) {
    const panel = document.getElementById('vehicle-details');
    if (panel) panel.classList.add('opacity-50', 'scale-[0.98]');

    try {
        const response = await fetch(`/parkir/slot-detail/${slotId}`);
        if (!response.ok) throw new Error('HTTP status ' + response.status);

        const data = await response.json();

        document.getElementById('slot-id-badge').innerText = data.kode_slot;
        document.getElementById('plate-text').innerText     = data.plat;
        document.getElementById('vehicle-type').innerText   = data.tipe;
        document.getElementById('entry-time').innerText     = data.waktu_masuk;
        document.getElementById('duration-text').innerText   = data.durasi;
        document.getElementById('owner-text').innerText      = data.pemilik;

    } catch (err) {
        console.error('Fetch Error:', err);
    } finally {
        if (panel) {
            setTimeout(() => {
                panel.classList.remove('opacity-50', 'scale-[0.98]');
            }, 120);
        }
    }
}

document.addEventListener('DOMContentLoaded', function () {
    @if($slots->isNotEmpty())
        @php
            $firstSlot = $slots->firstWhere('status', 'terisi') ?? $slots->first();
        @endphp
        loadSlotDetail({{ $firstSlot->id }});
    @endif
});
</script>
</body></html>