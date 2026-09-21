<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Officer Dashboard - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill-icon {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-lg min-h-screen">
<!-- TopNavBar (Mobile Only) -->
<header class="md:hidden bg-surface dark:bg-surface-container-low border-b border-outline-variant dark:border-outline shadow-sm flex justify-between items-center w-full px-margin-mobile h-16 sticky top-0 z-40">
<div class="font-display-lg text-display-lg text-primary dark:text-inverse-primary">Safe Park</div>
<div class="flex gap-md">
</div>
</header>
<div class="flex h-[calc(100vh-64px)] md:h-screen">
<!-- SIDEBAR DESKTOP -->
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
                   bg-secondary-container
                   text-on-secondary-container
                   rounded-lg
                   px-4 py-3 mx-2
                   font-bold"
        >
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
                   text-on-surface-variant
                   px-4 py-3 mx-2
                   rounded-lg
                   transition-colors
                   hover:text-primary"
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

        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="{{ route('admin.bantuan') }}">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined">help</span>
                <span class="font-title-md text-title-md">Bantuan</span>
            </div>
            <span id="bantuanBadge" class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse hidden"></span>
        </a>
        
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

<!-- Main Content -->
<main class="flex-1 md:ml-64 p-margin-mobile md:p-margin-desktop overflow-y-auto w-full">
<!-- Header section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-xl gap-md">
<div>
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background">Selamat Pagi, {{ auth()->user()->name }} </h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-xs" id="live-datetime">
    
</p>
</div>
<div class="hidden md:flex gap-sm">
</div>
</div>

<!-- Dashboard Grid -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Stats Row (Spans 12 cols, grid inside) -->
<div class="col-span-1 md:col-span-12 grid grid-cols-2 lg:grid-cols-4 gap-gutter mb-lg">
<!-- Stat 1 -->
<div class="bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30 flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="font-label-lg text-label-lg text-on-surface-variant">Kendaraan di Dalam</p>
<div class="bg-primary-container/20 p-xs rounded-md">
<span class="material-symbols-outlined text-primary" data-icon="directions_car">directions_car</span>
</div>
</div>
<div class="mt-md">
<h3 class="font-display-lg text-display-lg text-on-surface" id="stat-kendaraan-dalam">{{ number_format($totalKendaraan) }}</h3>
<p class="font-label-md text-label-md text-tertiary mt-xs"></p>
</div>
</div>
<!-- Stat 2 -->
<div class="bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30 flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="font-label-lg text-label-lg text-on-surface-variant">Total Slot Parkir</p>
<div class="bg-secondary-container/20 p-xs rounded-md">
<span class="material-symbols-outlined text-secondary" data-icon="local_parking">local_parking</span>
</div>
</div>
<div class="mt-md">
<h3 class="font-display-lg text-display-lg text-on-surface">{{ number_format($totalKapasitas) }}</h3>
<p class="font-label-md text-label-md text-tertiary mt-xs"></p>
</div>
</div>
<!-- Stat 3 -->
<div class="bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30 flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="font-label-lg text-label-lg text-on-surface-variant">Menunggu Verifikasi</p>
<div class="bg-error-container/20 p-xs rounded-md">
<span class="material-symbols-outlined text-error" data-icon="pending_actions">pending_actions</span>
</div>
</div>
<div class="mt-md">
<h3 class="font-display-lg text-display-lg text-error" id="stat-menunggu-verifikasi">{{ number_format($menungguVerifikasi) }}</h3>
<p class="font-label-md text-label-md text-error mt-xs"></p>
</div>
</div>
<!-- Stat 4 -->
<div class="bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30 flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="font-label-lg text-label-lg text-on-surface-variant">Tamu Hari Ini</p>
<div class="bg-tertiary-container/20 p-xs rounded-md">
<span class="material-symbols-outlined text-tertiary" data-icon="badge">badge</span>
</div>
</div>
<div class="mt-md">
<h3 class="font-display-lg text-display-lg text-on-surface" id="stat-tamu-hari-ini">{{ number_format($tamuHariIni) }}</h3>
<p class="font-label-md text-label-md text-tertiary mt-xs"></p>
</div>
</div>
</div>

<!-- Main Section Left Spans 8 cols -->
<div class="col-span-1 md:col-span-8 flex flex-col gap-lg">
<div class="bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30">
<h3 class="font-title-lg text-title-lg text-on-surface mb-md">Quick Actions</h3>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-md">
<a class="bg-surface-container-high text-on-surface rounded-lg p-md flex flex-col items-center justify-center gap-sm hover:bg-surface-variant transition-all border border-outline-variant/50" href="{{ route('verifikasi') }}">
<span class="material-symbols-outlined" data-icon="verified">verified</span>
<span class="font-label-lg text-label-lg text-center">Verifikasi Kendaraan</span>
</a>
<a class="bg-surface-container-high text-on-surface rounded-lg p-md flex flex-col items-center justify-center gap-sm hover:bg-surface-variant transition-all border border-outline-variant/50" href="{{ route('tamu') }}">
<span class="material-symbols-outlined" data-icon="list_alt">list_alt</span>
<span class="font-label-lg text-label-lg text-center">Daftar Tamu</span>
</a>
<a class="bg-surface-container-high text-on-surface rounded-lg p-md flex flex-col items-center justify-center gap-sm hover:bg-surface-variant transition-all border border-outline-variant/50" type="submit" href="{{ route('scanner') }}">
<span class="material-symbols-outlined" data-icon="login">login</span>
<span class="font-label-lg text-label-lg text-center">Scan Masuk</span>
</a>
<a class="bg-surface-container-high text-on-surface rounded-lg p-md flex flex-col items-center justify-center gap-sm hover:bg-surface-variant transition-all border border-outline-variant/50" type="submit" href="{{ route('scannkeluar') }}">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-lg text-label-lg text-center">Scan Keluar</span>
</a>
</div>
</div>

<!-- KAMPASITAS SLOT PARKIR PER BLOK -->
<div class="bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30">
<div class="flex justify-between items-center mb-lg">
<div>
<h3 class="font-title-lg text-title-lg text-on-surface">Kapasitas Parkir per Blok</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Ketersediaan area parkir apartemen secara real-time</p>
</div>
<span class="bg-primary/10 text-primary px-sm py-xs rounded-full font-label-md text-label-md flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                LIVE MONITOR
                            </span>
</div>

<div class="flex flex-col gap-md">
    <!-- Lantai 1 -->
    @php
        $terisiL1 =$kapasitasL1Terisi ?? 32;
        $totalL1 =$totalL1Kapasitas ?? 50;
        $persenL1 = min(100, round(($terisiL1 / max(1,$totalL1)) * 100));
    @endphp
    <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/30">
        <div class="flex justify-between items-center mb-xs">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary"></span>
                <span class="font-title-md text-title-md text-on-surface">Lantai 1</span>
            </div>
            <span class="font-label-lg text-label-lg text-on-surface-variant">
                <strong class="text-on-surface">{{ $terisiL1 }}</strong> / {{$totalL1 }} Slot
            </span>
        </div>
        <div class="w-full bg-surface-container-high h-3 rounded-full overflow-hidden">
            <div class="h-full rounded-full transition-all duration-500 {{ $persenL1 >= 90 ? 'bg-error' : ($persenL1 >= 70 ? 'bg-amber-500' : 'bg-primary') }}" style="width: {{ $persenL1 }}%;"></div>
        </div>
        <div class="flex justify-between items-center mt-xs">
            <span class="font-label-md text-label-md text-on-surface-variant">Terisi {{ $persenL1 }}%</span>
            <span class="font-label-md text-label-md text-emerald-600 font-semibold">Sisa {{ max(0, $totalL1 -$terisiL1) }} Slot</span>
        </div>
    </div>

    <!-- Lantai 2 -->
    @php
        $terisiL2 =$kapasitasL2Terisi ?? 18;
        $totalL2 =$totalL2Kapasitas ?? 50;
        $persenL2 = min(100, round(($terisiL2 / max(1,$totalL2)) * 100));
    @endphp
    <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/30">
        <div class="flex justify-between items-center mb-xs">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary"></span>
                <span class="font-title-md text-title-md text-on-surface">Lantai 2</span>
            </div>
            <span class="font-label-lg text-label-lg text-on-surface-variant">
                <strong class="text-on-surface">{{ $terisiL2 }}</strong> / {{$totalL2 }} Slot
            </span>
        </div>
        <div class="w-full bg-surface-container-high h-3 rounded-full overflow-hidden">
            <div class="h-full rounded-full transition-all duration-500 {{ $persenL2 >= 90 ? 'bg-error' : ($persenL2 >= 70 ? 'bg-amber-500' : 'bg-primary') }}" style="width: {{ $persenL2 }}%;"></div>
        </div>
        <div class="flex justify-between items-center mt-xs">
            <span class="font-label-md text-label-md text-on-surface-variant">Terisi {{ $persenL2 }}%</span>
            <span class="font-label-md text-label-md text-emerald-600 font-semibold">Sisa {{ max(0, $totalL2 -$terisiL2) }} Slot</span>
        </div>
    </div>

    <!-- Area VIP -->
    @php
        $terisiVIP =$kapasitasVIPTerisi ?? 10;
        $totalVIP =$totalVIPKapasitas ?? 10;
        $persenVIP = min(100, round(($terisiVIP / max(1,$totalVIP)) * 100));
    @endphp
    <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/30">
        <div class="flex justify-between items-center mb-xs">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary"></span>
                <span class="font-title-md text-title-md text-on-surface">Area VIP</span>
            </div>
            <span class="font-label-lg text-label-lg text-on-surface-variant">
                <strong class="text-on-surface">{{ $terisiVIP }}</strong> / {{$totalVIP }} Slot
            </span>
        </div>
        <div class="w-full bg-surface-container-high h-3 rounded-full overflow-hidden">
            <div class="h-full rounded-full transition-all duration-500 {{ $persenVIP >= 90 ? 'bg-error' : 'bg-amber-500' }}" style="width: {{ $persenVIP }}%;"></div>
        </div>
        <div class="flex justify-between items-center mt-xs">
            <span class="font-label-md text-label-md text-on-surface-variant">Terisi {{ $persenVIP }}%</span>
            <span class="font-label-md text-label-md {{ $totalVIP -$terisiVIP <= 0 ? 'text-error font-bold' : 'text-emerald-600 font-semibold' }}">
                {{ $totalVIP -$terisiVIP <= 0 ? 'Penuh' : 'Sisa ' . ($totalVIP -$terisiVIP) . ' Slot' }}
            </span>
        </div>
    </div>
</div>
</div>
</div>

<!-- Sidebar Right Spans 4 cols -->
<div class="col-span-1 md:col-span-4 bg-surface rounded-xl p-lg shadow-sm border border-outline-variant/30 h-fit" id="recent-activity-container">
<h3 class="font-title-lg text-title-lg text-on-surface mb-lg">Recent Activity</h3>
<div class="flex flex-col gap-md">

</div>
<button class="w-full mt-lg py-sm font-label-lg text-label-lg text-primary hover:bg-surface-container-highest rounded-lg transition-colors">
                        View All Activity
                    </button>
</div>
</div>

<div class="h-24 md:hidden"></div>
</main>
</div>

<!-- BottomNavBar (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-margin-mobile py-sm bg-surface dark:bg-surface-container border-t border-outline-variant dark:border-outline shadow-lg rounded-t-xl">
<a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-lg py-xs scale-90 transition-transform" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined fill-icon" data-icon="home">home</span>
<span class="font-label-md text-label-md-mobile mt-xs">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high transition-colors rounded-lg" href="{{ route('verifikasi') }}">
<span class="material-symbols-outlined" data-icon="verified">verified</span>
<span class="font-label-md text-label-md-mobile mt-xs">Verifikasi</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high transition-colors rounded-lg" href="{{ route('tamu') }}">
<span class="material-symbols-outlined" data-icon="people">people</span>
<span class="font-label-md text-label-md-mobile mt-xs">Tamu</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="qr_code">qr_code</span>
<span class="font-label-md text-label-md-mobile mt-xs">Scan</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-label-md text-label-md-mobile mt-xs">Profil</span>
</a>
</nav>

@if(session('login_success'))
    <div id="loginSuccessPopup" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/40 backdrop-blur-sm px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 text-center">
            <div class="mx-auto mb-5 w-16 h-16 rounded-full bg-green-100 flex items-center justify-center">
                <span class="material-symbols-outlined text-green-600 text-4xl">check_circle</span>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Login Berhasil</h2>
            <p class="text-gray-600 mb-6">{{ session('login_success') }}</p>
            <button type="button" id="loginSuccessOk" class="w-full bg-primary text-white py-3 rounded-xl font-semibold hover:opacity-90 transition">
                OK
            </button>
        </div>
    </div>

    <audio id="loginSuccessSound" src="{{ asset('audio/Morning_Bloom.mp3') }}" preload="auto" loop></audio>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const popup = document.getElementById('loginSuccessPopup');
            const okButton = document.getElementById('loginSuccessOk');
            const sound = document.getElementById('loginSuccessSound');

            if (sound) {
                sound.play().catch(err => console.log('Autoplay audio diblokir browser:', err));
            }

            if (okButton) {
                okButton.addEventListener('click', function () {
                    if (sound) {
                        sound.pause();
                        sound.currentTime = 0;
                    }
                    if (popup) popup.remove();
                });
            }
        });
    </script>
@endif

<audio id="notifSound" src="{{ asset('audio/handoff.mp3') }}" preload="auto"></audio>

<script>
document.addEventListener('DOMContentLoaded', function () {

    function updateLiveDateTime() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        const dayName = days[now.getDay()];
        const dayNum = now.getDate();
        const monthName = months[now.getMonth()];
        const year = now.getFullYear();
        
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        let shiftText = 'Sif Malam (22:00 - 06:00)';
        const currentHour = now.getHours();
        if (currentHour >= 6 && currentHour < 14) {
            shiftText = 'Sif Pagi (06:00 - 14:00)';
        } else if (currentHour >= 14 && currentHour < 22) {
            shiftText = 'Sif Siang (14:00 - 22:00)';
        }

        const formattedString = `${dayName}, ${dayNum} ${monthName} ${year} | ${hours}:${minutes}:${seconds} WIB | ${shiftText}`;
        
        const liveElem = document.getElementById('live-datetime');
        if (liveElem) liveElem.innerText = formattedString;
    }

    setInterval(updateLiveDateTime, 1000);
    updateLiveDateTime();

    async function updateDashboardData() {
        try {
            const response = await fetch("{{ route('petugas.dashboard.stats') }}");
            if (!response.ok) return;

            const data = await response.json();

            if (document.getElementById('stat-kendaraan-dalam')) document.getElementById('stat-kendaraan-dalam').innerText = data.total_kendaraan;
            if (document.getElementById('stat-slot-tersedia')) document.getElementById('stat-slot-tersedia').innerText = data.slot_tersedia;
            if (document.getElementById('stat-menunggu-verifikasi')) document.getElementById('stat-menunggu-verifikasi').innerText = data.menunggu_verifikasi;
            if (document.getElementById('stat-tamu-hari-ini')) document.getElementById('stat-tamu-hari-ini').innerText = data.tamu_hari_ini;

            const activityContainer = document.getElementById('recent-activity-container');
            if (activityContainer && data.recent_activities) {
                if (data.recent_activities.length === 0) {
                    activityContainer.innerHTML = `<p class="text-xs text-slate-400 py-2">Belum ada aktivitas terbaru.</p>`;
                    return;
                }

                activityContainer.innerHTML = data.recent_activities.map(act => `
                    <div class="flex items-start gap-3 p-2 hover:bg-slate-50 rounded-xl transition-colors">
                        <div class="w-9 h-9 rounded-xl ${act.is_masuk ? 'bg-blue-50 text-blue-600' : 'bg-amber-50 text-amber-600'} flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[20px]">${act.is_masuk ? 'login' : 'logout'}</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-slate-800 text-sm leading-snug">${act.title}</h4>
                            <p class="text-xs text-slate-500">${act.subtitle}</p>
                            <span class="text-[11px] text-slate-400 mt-0.5 block">${act.waktu}</span>
                        </div>
                    </div>
                `).join('');
            }

        } catch (error) {
            console.error('Error fetching dashboard real-time:', error);
        }
    }

    setInterval(updateDashboardData, 3000);
    updateDashboardData();

    const bantuanBadge = document.getElementById('bantuanBadge');
    const notifSound = document.getElementById('notifSound');
    let lastChatId = localStorage.getItem('last_seen_chat_id') || 0;

    async function checkNewMessages() {
      try {
        const response = await fetch("{{ route('admin.bantuan.users') }}");
        if (!response.ok) return;

        const users = await response.json();

        if (users.length > 0) {
          let latestChatId = 0;
          users.forEach(u => {
            if (u.last_chat_id > latestChatId) {
              latestChatId = u.last_chat_id;
            }
          });

          if (latestChatId > lastChatId) {
            if (bantuanBadge) bantuanBadge.classList.remove('hidden');

            if (notifSound) {
              notifSound.play().catch(e => console.log("Audio play blocked by browser:", e));
            }

            lastChatId = latestChatId;
            localStorage.setItem('last_seen_chat_id', lastChatId);
          }
        }
      } catch (err) {
        console.error("Gagal mengecek notifikasi pesan:", err);
      }
    }

    setInterval(checkNewMessages, 3000);

    const bantuanLink = document.querySelector('a[href="{{ route("admin.bantuan") }}"]');
    if (bantuanLink) {
      bantuanLink.addEventListener('click', function() {
        if (bantuanBadge) bantuanBadge.classList.add('hidden');
      });
    }
});
</script>
</body>
</html>