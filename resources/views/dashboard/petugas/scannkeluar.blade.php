<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Scan QR Keluar</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- HTML5 QR Code Scanner Library -->
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
    @layer base {
      html, body {
        margin: 0;
        padding: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
      }
      body {
        overscroll-behavior: none;
      }
    }
    ::-webkit-scrollbar {
      display: none;
    }
    /* Fitting video stream ke dalam container CCTV */
    #reader-viewfinder video {
      object-fit: cover !important;
      width: 100% !important;
      height: 100% !important;
    }
    #reader-viewfinder {
      border: none !important;
    }
    #reader-viewfinder__scan_region {
      background: transparent !important;
    }
  </style>
</head>
<body class="bg-background font-body-md text-on-surface antialiased min-h-screen">
<!-- SIDEBAR NAVIGATION -->
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

        <!-- DASHBOARD -->
        <a
            href="{{ route('dashboard') }}"
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
                       bg-secondary-container
                       text-on-secondary-container
                       rounded-lg
                       px-4 py-3 mx-2
                       font-bold"
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
<!-- MAIN WRAPPER -->
<div class="pl-72 flex flex-col min-h-screen">
<!-- TOP HEADER & STATUS BAR -->
<header class="fixed top-0 left-72 right-0 h-16 bg-surface-container-lowest/90 backdrop-blur-xl z-40 shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
<div class="h-16 w-full px-8 flex items-center justify-between">
<!-- Breadcrumb / Section Context -->
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[22px]">shield</span>
<div class="flex items-center gap-1.5 text-on-surface-variant text-xs">
<span>Terminal Gerbang</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Sistem Pos Terpadu</span>
</div>
</div>
<!-- Top Right Indicators & Profile -->
<div class="flex items-center gap-6">
<div class="flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container/60 text-on-secondary-container text-[11px] font-medium">
<span class="material-symbols-outlined text-[16px]">schedule</span>
<span>Senin, 24 Okt 2024 • 14:32 WIB</span>
</div>
<div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#16a34a]/10 text-[#16a34a] text-[11px] font-semibold">
<span class="w-2 h-2 rounded-full bg-[#16a34a]"></span>
<span>Sistem Aktif</span>
</div>
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-on-primary shadow-sm cursor-pointer">
<span class="material-symbols-outlined text-[18px]">person</span>
</div>
</div>
</div>
</header>
<!-- MAIN CONTENT AREA -->
<main class="w-full pt-20 flex-1 bg-background px-8 pb-10">
<div class="flex flex-col w-full gap-6">
<!-- PAGE TITLE & DESCRIPTION -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-1">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-1.5 text-on-surface-variant text-[11px] uppercase tracking-wider font-medium">
<span>Terminal Operasional Keluar</span>
<span>•</span>
<span class="text-error font-semibold">Validasi Tamu Residensial</span>
</div>
<h1 class="text-3xl font-bold text-on-surface tracking-tight">Scan QR Keluar</h1>
<p class="text-sm text-on-surface-variant max-w-2xl leading-normal">
              Pindai kode QR undangan tamu di gerbang keluar untuk menyelesaikan sesi kunjungan dan membuka palang otomatis.
            </p>
</div>
<!-- Gate Sensor Readiness Indicator -->
<div class="flex items-center gap-2 self-start md:self-auto">
<div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-surface-container-high text-on-surface border border-outline-variant/20">
<span class="material-symbols-outlined text-[18px] text-error">sensor_door</span>
<span class="text-xs font-semibold">Gate 02 Exit Sensor: Siap</span>
</div>
</div>
</div>
<!-- TWO COLUMN GRID: SCANNER (LEFT) & VERIFICATION CARD (RIGHT) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- LEFT COLUMN: SCANNER VIEWFINDER & GATE STATUS -->
<div class="lg:col-span-5 flex flex-col gap-6">
<!-- QR SCANNER CAMERA VIEWFINDER -->
<div class="relative bg-surface-container-lowest rounded-2xl shadow-sm p-6 overflow-hidden flex flex-col gap-4 border border-outline-variant/30">
<!-- Camera Stream Header -->
<div class="flex items-center justify-between z-10">
<div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#191b23]/80 backdrop-blur-md text-surface">
<span class="w-2 h-2 rounded-full bg-error animate-ping"></span>
</div>
</div>
<!-- Optical Scanner Frame & QR Canvas -->
<div class="relative w-full aspect-[4/3] rounded-xl bg-[#0b101b] overflow-hidden flex items-center justify-center shadow-inner group">

<!-- ELEMENT KAMERA LIVE WEBCAM (DISISIPKAN TANPA MERUSAK OVERLAY DESIGN) -->
<div id="reader-viewfinder" class="absolute inset-0 w-full h-full opacity-60 z-0"></div>

<div class="absolute inset-0 bg-[#070b14]/40 flex items-center justify-center pointer-events-none z-10">
<!-- Subtle Camera Gridlines -->
<div class="absolute inset-0 bg-gradient-to-b from-primary/10 via-transparent to-primary/10 pointer-events-none"></div>
<svg class="absolute inset-0 w-full h-full opacity-20 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
<defs>
<pattern height="20" id="tech-grid" patternunits="userSpaceOnUse" width="20">
<path d="M 20 0 L 0 0 0 20" fill="none" stroke="#2563eb" stroke-width="0.5"></path>
</pattern>
</defs>
<rect fill="url(#tech-grid)" height="100%" width="100%"></rect>
</svg>
<!-- Status Banner Inside Camera -->
<div class="absolute top-3 left-3 z-10 flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#191b23]/90 backdrop-blur-md text-surface">
<span class="w-2 h-2 rounded-full bg-[#16a34a] animate-pulse"></span>
<span class="text-[11px] text-surface font-semibold">Kamera Pemindai QR Keluar Siap</span>
</div>
<!-- Focus Brackets -->
<div class="relative w-56 h-56 flex items-center justify-center">
<div class="absolute -top-2 -left-2 w-7 h-7 border-t-2 border-l-2 border-primary"></div>
<div class="absolute -top-2 -right-2 w-7 h-7 border-t-2 border-r-2 border-primary"></div>
<div class="absolute -bottom-2 -left-2 w-7 h-7 border-b-2 border-l-2 border-primary"></div>
<div class="absolute -bottom-2 -right-2 w-7 h-7 border-b-2 border-r-2 border-primary"></div>

<!-- Red Laser Scanning Line Animation -->
<div class="absolute left-1 right-1 h-0.5 bg-rose-500 shadow-[0_0_12px_#ba1a1a] animate-bounce"></div>
</div>
<!-- Optical Bottom State -->
<div class="absolute bottom-3 inset-x-3 flex items-center justify-between px-4 py-1.5 rounded-lg bg-[#191b23]/90 backdrop-blur-md text-surface z-10">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px] text-[#16a34a]">check_circle</span>
<span class="text-xs text-white font-medium" id="scan-status-text">QR Tamu Terbaca Presisi</span>
</div>
<div class="flex items-center gap-1.5">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
<span class="text-[11px] font-mono text-white/90 font-bold">Optik Aktif</span>
</div>
</div>
</div>
</div>
<!-- MANUAL TICKET CODE BUTTON & GATE BARRIER STATUS -->
<div class="flex items-center justify-between pt-1">
<button class="flex items-center gap-2 px-4 py-2 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openManualTicketModal()" type="button">
<span class="material-symbols-outlined text-[18px] text-primary">keyboard</span>
<span class="text-xs font-semibold">Input Kode Tiket Manual</span>
</button>
<div class="flex items-center gap-1 text-on-surface-variant text-[11px]">
<span class="w-2 h-2 rounded-full bg-[#16a34a]"></span>
</div>
</div>
</div>
<!-- GATE BARRIER STATUS CARD -->
<div class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-2 border border-outline-variant/30">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-xl bg-error/10 text-error flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]" id="icon-barrier">fence</span>
</div>
<div class="flex flex-col">
<span class="text-[11px] font-medium text-on-surface-variant uppercase tracking-wider">Status Palang Barrier Keluar</span>
<span class="text-base text-on-surface font-bold" id="text-barrier-status">Tertutup / Siaga Keluar</span>
</div>
</div>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface text-[11px] font-semibold">Otomatisasi Aktif</span>
</div>
<div class="w-full bg-surface-container rounded-full h-1.5 mt-2 overflow-hidden">
<div class="bg-error h-1.5 rounded-full w-full"></div>
</div>
<p class="text-xs text-on-surface-variant pt-2 leading-relaxed">
                Palang barrier Gate 02 akan terbuka secara otomatis segera setelah verifikasi dan tombol konfirmasi diaktifkan.
              </p>
</div>
<!-- VEHICLE LICENSE PLATE CONFIRMATION INPUT -->
<div class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-4 border border-outline-variant/30">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">directions_car</span>
</div>
<div class="flex flex-col">
<span class="text-base font-semibold text-on-surface">Nomor Plat Kendaraan Tamu</span>
<span class="text-xs text-on-surface-variant">Sesuaikan nomor plat fisik jika berbeda dengan QR</span>
</div>
</div>
</div>
<div class="flex items-center gap-2">
<div class="relative flex-1 flex items-center">
<span class="material-symbols-outlined absolute left-3.5 text-secondary text-[20px] pointer-events-none">pin</span>
<input class="w-full pl-11 pr-10 py-3 rounded-xl bg-surface-container-low border border-outline-variant/30 text-on-surface font-mono font-bold text-xl tracking-widest uppercase focus:outline-none focus:border-primary" id="inputPlatKendaraan" placeholder="B 8899 KLS" type="text" value="-"/>
<button aria-label="Hapus input plat" class="absolute right-3 text-outline hover:text-on-surface transition-colors flex items-center justify-center" onclick="this.previousElementSibling.value=''; this.previousElementSibling.focus();" type="button">
<span class="material-symbols-outlined text-[18px]">cancel</span>
</button>
</div>
</div>
</div>
</div>
<!-- RIGHT COLUMN: CHECK-OUT VERIFICATION SUMMARY -->
<div class="lg:col-span-7 flex flex-col gap-6">
<!-- TICKET & HOST VERIFICATION CARD -->
<div class="bg-surface-container-lowest rounded-2xl shadow-sm p-8 flex flex-col gap-6 border border-outline-variant/30">
<!-- Header Info & Ticket Code Reference -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-3 bg-surface-container-low p-4 rounded-xl">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[22px]">badge</span>
</div>
<div class="flex flex-col">
<span class="text-[11px] font-medium text-on-surface-variant uppercase tracking-wider">Verifikasi Check-Out Tamu</span>
<span class="text-base font-bold text-on-surface">Data Tiket Valid</span>
</div>
</div>
<div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-mono font-bold text-sm shadow-xs">
    <span class="text-on-surface-variant font-normal">REF :</span>
    <span class="text-primary font-bold" id="out-ref">#OUT-XXXX</span>
</div>
</div>

<!-- Grid Verification Summary -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div class="p-4 rounded-xl bg-surface-container-low flex flex-col gap-1 border border-outline-variant/20">
        <span class="text-[11px] font-medium text-on-surface-variant uppercase tracking-wider">Tuan Rumah / Pengundang</span>
        <span class="text-base font-semibold text-on-surface" id="out-pengundang">-</span>
    </div>

    <div class="p-4 rounded-xl bg-surface-container-low flex flex-col gap-1 border border-outline-variant/20">
        <span class="text-[11px] font-medium text-on-surface-variant uppercase tracking-wider">Waktu Masuk & Keluar</span>
        <span class="text-base font-semibold text-on-surface" id="out-rentang-waktu">-</span>
    </div>

    <!-- Durasi & Hitungan Tarif Parkir -->
    <div class="p-5 rounded-xl bg-surface-container flex flex-col gap-3 sm:col-span-2 border border-outline-variant/30">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
            <div class="flex flex-col gap-1">
                <span class="text-xs text-on-surface-variant">Total Jam Terpakai:</span>
                <span class="text-xl font-bold text-on-surface" id="out-durasi">-</span>
                <span class="text-xs text-on-surface-variant pt-0.5" id="out-tarif-jam">Tarif Dasar: Rp 0 / Jam</span>
            </div>
            <div class="flex flex-col gap-1 sm:text-right">
                <span class="text-xs text-on-surface-variant">Total Biaya Parkir:</span>
                <span class="text-3xl text-[#16a34a] font-bold leading-none" id="out-total-harga">Rp 0</span>
            </div>
        </div>
    </div>
</div>
<!-- SOP SECURITY REMINDER -->
<div class="flex items-start gap-3 p-4 rounded-xl bg-surface-container-low text-on-surface-variant border border-outline-variant/20">
<span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">verified_user</span>
<p class="text-xs leading-relaxed">
<strong class="text-on-surface font-semibold">Prosedur Keamanan (SOP):</strong> Pastikan fisik kendaraan, nomor plat, dan pengemudi sesuai dengan foto saat kedatangan sebelum membuka palang pintu keluar secara manual ataupun konfirmasi sistem.
                </p>
</div>
<!-- ACTION BUTTONS: CONFIRM EXIT & CANCEL/RESCAN -->
<div class="flex flex-col sm:flex-row items-center gap-4 pt-1">
<!-- Red Confirmation Button -->
<button class="w-full sm:flex-1 bg-rose-600 hover:bg-rose-700 active:bg-rose-800 text-white font-bold py-4 px-6 rounded-xl shadow-lg flex items-center justify-center gap-2 transition-all cursor-pointer" id="btnConfirmExit" onclick="handleConfirmExit()" type="button">
<span class="material-symbols-outlined text-[24px]">door_open</span>
<span class="text-base font-semibold tracking-wide">Konfirmasi Kendaraan Keluar</span>
</button>
<!-- Rescan / Reset Button -->
<button class="w-full sm:w-auto px-6 py-4 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors flex items-center justify-center gap-2 cursor-pointer font-semibold text-sm" onclick="handleResetScan()" type="button">
<span class="material-symbols-outlined text-[20px]">refresh</span>
<span>Batal / Scan Ulang</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- FOOTER STATUS BAR -->
<footer class="w-full bg-surface-container-lowest shadow-[0_-1px_8px_rgba(0,0,0,0.02)] py-4 border-t border-outline-variant/20">
<div class="w-full px-8 flex items-center justify-between text-xs text-on-surface-variant">
<span>© 2024 Safe Park Pos Jaga. Apartemen Terpadu.</span>
<div class="flex items-center gap-6">
<span>Gerbang: <strong class="text-on-surface font-semibold">Pos Gerbang Utama</strong></span>
<span>Koneksi: <strong class="text-[#16a34a] font-semibold">Stabil (12ms)</strong></span>
</div>
</div>
</footer>
</div>
<!-- INTERACTIVE TOAST NOTIFICATION -->
<div class="fixed top-20 right-8 z-50 transform translate-y-[-200%] opacity-0 transition-all duration-300 pointer-events-none" id="gateAlert">
<div class="bg-rose-600 text-white px-6 py-3.5 rounded-xl shadow-2xl flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
<span class="material-symbols-outlined text-white text-[20px]">check</span>
</div>
<div class="flex flex-col">
<span class="text-sm font-bold">Palang Keluar Dibuka</span>
<span class="text-xs text-white/90">Sesi Kunjungan Selesai. Selamat jalan!</span>
</div>
</div>
</div>
<!-- MODAL: MANUAL TICKET CODE ENTRY -->
<div aria-labelledby="modalTicketTitle" aria-modal="true" class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-all duration-300" id="manualTicketModal" role="dialog">
<!-- Backdrop Overlay -->
<div class="absolute inset-0 bg-black/50 backdrop-blur-sm transition-opacity" onclick="closeManualTicketModal()"></div>
<!-- Modal Dialog Window -->
<div class="relative w-full max-w-lg bg-surface-container-lowest rounded-2xl shadow-2xl border border-outline-variant/40 overflow-hidden flex flex-col z-10 transform scale-95 transition-all duration-300" id="manualTicketModalBox">
<!-- Modal Header -->
<div class="flex items-center justify-between px-6 py-4 bg-surface-container-low border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">keyboard</span>
</div>
<div class="flex flex-col">
<h2 class="text-base text-on-surface font-bold tracking-tight" id="modalTicketTitle">Input Kode Tiket Manual</h2>
<span class="text-xs text-on-surface-variant">Otorisasi Keluar Tanpa Pemindaian Optik</span>
</div>
</div>
<button aria-label="Tutup Dialog" class="w-9 h-9 rounded-xl flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" onclick="closeManualTicketModal()" type="button">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<!-- Modal Body Form -->
<div class="p-6 flex flex-col gap-4">
<!-- Explanatory Note -->
<div class="flex items-start gap-3 p-3.5 rounded-xl bg-secondary-container/30 border border-secondary-container text-on-secondary-container">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">info</span>
<p class="text-xs leading-relaxed">
            Gunakan opsi ini jika barcode/QR tamu tidak dapat dipindai oleh kamera pemindai atau pengunjung hanya membawa struk/nomor referensi.
          </p>
</div>
<!-- Field: Kode Tiket / Ref -->
<div class="flex flex-col gap-1.5">
<label class="text-xs text-on-surface font-semibold flex items-center justify-between" for="inputModalTicketCode">
<span>Nomor Kode Tiket / Ref <span class="text-error">*</span></span>
<span class="text-[11px] text-on-surface-variant font-normal">Wajib diisi</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3.5 text-secondary text-[20px] pointer-events-none">confirmation_number</span>
<input autocomplete="off" class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low border border-outline-variant/40 text-on-surface font-mono font-bold text-base tracking-wider uppercase placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="inputModalTicketCode" placeholder="INV-2026-9815" type="text" value=""/>
</div>
</div>
<!-- Field: Plat Nomor Kendaraan -->
<div class="flex flex-col gap-1.5">
<label class="text-xs text-on-surface font-semibold flex items-center justify-between" for="inputModalPlate">
<span>Plat Nomor Kendaraan</span>
<span class="text-[11px] text-on-surface-variant font-normal">Opsional / Penyesuaian</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3.5 text-secondary text-[20px] pointer-events-none">directions_car</span>
<input autocomplete="off" class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low border border-outline-variant/40 text-on-surface font-mono font-bold text-base tracking-wider uppercase placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="inputModalPlate" placeholder="B 1234 ABC" type="text" value=""/>
</div>
</div>
</div>
<!-- Modal Footer -->
<div class="flex items-center justify-end gap-3 px-6 py-4 bg-surface-container-low border-t border-outline-variant/30">
<button class="px-4 py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface text-xs font-semibold transition-colors" onclick="closeManualTicketModal()" type="button">
          Batal
        </button>
<button class="px-5 py-2.5 rounded-xl bg-primary hover:bg-primary-container text-on-primary text-xs font-semibold flex items-center gap-1.5 shadow-md transition-all active:scale-[0.98]" onclick="handleApplyManualTicket()" type="button">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span>Verifikasi &amp; Terapkan Tiket</span>
</button>
</div>
</div>
</div>

<!-- JAVASCRIPT HANDLERS SINKRONISASI REAL-TIME -->
<script>
    let lastScannedCodeOut = "";
    let isProcessingOut = false;

    // 1. Fungsi AJAX kirim scan QR Keluar ke Laravel Backend
    function processScanKeluar(kode) {
      if (!kode) return;
      if (isProcessingOut) return;
      isProcessingOut = true;

      fetch("{{ route('scan.keluar.process') }}", {
          method: "POST",
          headers: { 
              "Content-Type": "application/json", 
              "X-CSRF-TOKEN": "{{ csrf_token() }}" 
          },
          body: JSON.stringify({ kode_unik: kode })
      })
      .then(res => res.json())
      .then(data => {
          if(data.success) {
              lastScannedCodeOut = kode;

              // A. Update Teks Ref Kode
              const refEl = document.getElementById('out-ref');
              if(refEl) refEl.innerText = "#" + data.data.kode_unik;

              // B. Update Pengundang & Nama Tamu
              const pengundangEl = document.getElementById('out-pengundang');
              if(pengundangEl) pengundangEl.innerText = data.data.nama_tamu + " (Tamu " + data.data.pengundang + ")";

              // C. Update Rentang Waktu
              const rentangEl = document.getElementById('out-rentang-waktu');
              if(rentangEl) rentangEl.innerText = data.data.waktu_masuk_keluar;

              // D. Update Durasi Jam & Tarif
              const durasiEl = document.getElementById('out-durasi');
              if(durasiEl) durasiEl.innerText = data.data.durasi_text;

              const tarifJamEl = document.getElementById('out-tarif-jam');
              if(tarifJamEl) tarifJamEl.innerText = "Tarif Dasar: " + data.data.tarif_per_jam + " / Jam";

              const totalHargaEl = document.getElementById('out-total-harga');
              if(totalHargaEl) totalHargaEl.innerText = data.data.total_harga;

              // E. Update Plat Kendaraan Input
              const inputPlat = document.getElementById('inputPlatKendaraan');
              if(inputPlat) inputPlat.value = data.data.nomor_plat;

              const statusText = document.getElementById('scan-status-text');
              if(statusText) statusText.innerText = "QR Tamu Terbaca Presisi";

              alert("Check-Out Divalidasi! Hitungan tarif terhitung.");
          } else {
              alert(data.message || "Kode QR Pass tidak ditemukan atau belum check-in masuk!");
          }
      })
      .catch(err => {
          console.error("AJAX Scan Keluar Error:", err);
          alert("Gagal terhubung ke server.");
      })
      .finally(() => {
          setTimeout(() => {
              isProcessingOut = false;
          }, 3000);
      });
    }

    // Modal Manual Controls
    function openManualTicketModal() {
      const modal = document.getElementById('manualTicketModal');
      const modalBox = document.getElementById('manualTicketModalBox');
      const ticketInput = document.getElementById('inputModalTicketCode');
      
      modal.classList.remove('opacity-0', 'pointer-events-none');
      modal.classList.add('opacity-100', 'pointer-events-auto');
      modalBox.classList.remove('scale-95');
      modalBox.classList.add('scale-100');
      
      setTimeout(() => {
        if (ticketInput) {
          ticketInput.focus();
          ticketInput.select();
        }
      }, 100);
    }

    function closeManualTicketModal() {
      const modal = document.getElementById('manualTicketModal');
      const modalBox = document.getElementById('manualTicketModalBox');
      
      modalBox.classList.remove('scale-100');
      modalBox.classList.add('scale-95');
      modal.classList.remove('opacity-100', 'pointer-events-auto');
      modal.classList.add('opacity-0', 'pointer-events-none');
    }

    function handleApplyManualTicket() {
      const ticketVal = document.getElementById('inputModalTicketCode').value.trim();
      const plateVal = document.getElementById('inputModalPlate').value.trim();

      if (ticketVal) {
          processScanKeluar(ticketVal);
      }

      if (plateVal) {
        const platInput = document.getElementById('inputPlatKendaraan');
        if (platInput) {
          platInput.value = plateVal.toUpperCase();
        }
      }

      closeManualTicketModal();
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        const modal = document.getElementById('manualTicketModal');
        if (modal && !modal.classList.contains('pointer-events-none')) {
          closeManualTicketModal();
        }
      }
    });

    // Action Tombol Konfirmasi Keluar
    function handleConfirmExit() {
      if (!lastScannedCodeOut) {
          alert('Silakan scan QR Pass Tamu keluar terlebih dahulu!');
          return;
      }

      const btn = document.getElementById('btnConfirmExit');
      const toast = document.getElementById('gateAlert');
      
      btn.disabled = true;
      btn.classList.add('opacity-75');
      btn.innerHTML = `
        <span class="material-symbols-outlined text-[24px] animate-spin">progress_activity</span>
        <span class="text-base font-semibold tracking-wide">Membuka Barrier...</span>
      `;

      toast.classList.remove('translate-y-[-200%]', 'opacity-0');
      toast.classList.add('translate-y-0', 'opacity-100');

      setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-[-200%]', 'opacity-0');
        
        btn.disabled = false;
        btn.classList.remove('opacity-75');
        btn.innerHTML = `
          <span class="material-symbols-outlined text-[24px]">check_circle</span>
          <span class="text-base font-semibold tracking-wide">Kendaraan Selesai Keluar</span>
        `;

        handleResetScan();
      }, 2500);
    }

    // Reset State
    function handleResetScan() {
      lastScannedCodeOut = "";
      isProcessingOut = false;

      const refEl = document.getElementById('out-ref');
      if(refEl) refEl.innerText = "#OUT-XXXX";

      const pengundangEl = document.getElementById('out-pengundang');
      if(pengundangEl) pengundangEl.innerText = "-";

      const rentangEl = document.getElementById('out-rentang-waktu');
      if(rentangEl) rentangEl.innerText = "-";

      const durasiEl = document.getElementById('out-durasi');
      if(durasiEl) durasiEl.innerText = "-";

      const tarifJamEl = document.getElementById('out-tarif-jam');
      if(tarifJamEl) tarifJamEl.innerText = "Tarif Dasar: Rp 0 / Jam";

      const totalHargaEl = document.getElementById('out-total-harga');
      if(totalHargaEl) totalHargaEl.innerText = "Rp 0";

      const inputPlat = document.getElementById('inputPlatKendaraan');
      if(inputPlat) inputPlat.value = "-";

      const btn = document.getElementById('btnConfirmExit');
      btn.innerHTML = `
        <span class="material-symbols-outlined text-[24px]">door_open</span>
        <span class="text-base font-semibold tracking-wide">Konfirmasi Kendaraan Keluar</span>
      `;
      btn.disabled = false;
      btn.classList.remove('opacity-75');
    }

    // Inisialisasi Stream Kamera HTML5 QR
    let html5QrCodeOut = new Html5Qrcode("reader-viewfinder");
    html5QrCodeOut.start(
        { facingMode: "environment" }, 
        { fps: 10, qrbox: { width: 220, height: 220 } },
        (decodedText) => {
            processScanKeluar(decodedText);
        }
    ).catch(err => {
        console.warn("Kamera keluar tidak aktif:", err);
    });
  </script>
</body></html>