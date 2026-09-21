<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Scan QR Masuk</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<style>
    @layer base {
      html, body {
        margin: 0;
        padding: 0;
      }
      body {
        overscroll-behavior: none;
      }
      main > :first-child {
        margin-top: 0 !important;
      }
      main > :last-child {
        margin-bottom: 0 !important;
      }
    }
    ::-webkit-scrollbar {
      display: none;
    }
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
<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "secondary-fixed": "#d3e4fe",
            "on-primary-fixed": "#00174b",
            "on-surface": "#191b23",
            "on-error-container": "#93000a",
            "secondary": "#505f76",
            "primary-fixed": "#dbe1ff",
            "primary": "#004ac6",
            "on-tertiary-fixed-variant": "#3f465c",
            "on-primary-fixed-variant": "#003ea8",
            "on-secondary": "#ffffff",
            "surface-container-highest": "#e1e2ed",
            "surface-bright": "#faf8ff",
            "primary-fixed-dim": "#b4c5ff",
            "on-tertiary-container": "#eef0ff",
            "on-error": "#ffffff",
            "tertiary": "#4d556b",
            "surface-dim": "#d9d9e5",
            "on-surface-variant": "#434655",
            "error": "#ba1a1a",
            "surface-container-low": "#f3f3fe",
            "inverse-primary": "#b4c5ff",
            "tertiary-fixed-dim": "#bec6e0",
            "inverse-surface": "#2e3039",
            "surface-container-high": "#e7e7f3",
            "on-primary": "#ffffff",
            "on-background": "#191b23",
            "on-tertiary": "#ffffff",
            "primary-container": "#2563eb",
            "on-tertiary-fixed": "#131b2e",
            "inverse-on-surface": "#f0f0fb",
            "error-container": "#ffdad6",
            "background": "#faf8ff",
            "outline-variant": "#c3c6d7",
            "outline": "#737686",
            "surface": "#faf8ff",
            "on-secondary-fixed": "#0b1c30",
            "tertiary-container": "#656d84",
            "surface-container": "#ededf9",
            "secondary-container": "#d0e1fb",
            "on-primary-container": "#eeefff",
            "tertiary-fixed": "#dae2fd",
            "surface-tint": "#0053db",
            "surface-container-lowest": "#ffffff",
            "on-secondary-fixed-variant": "#38485d",
            "on-secondary-container": "#54647a",
            "secondary-fixed-dim": "#b7c8e1",
            "surface-variant": "#e1e2ed"
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          spacing: {
            "sm": "8px",
            "lg": "24px",
            "unit": "4px",
            "xs": "4px",
            "gutter": "24px",
            "md": "16px",
            "margin-mobile": "16px",
            "margin-desktop": "32px",
            "xl": "32px"
          },
          fontFamily: {
            "body-md": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "display-lg": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"]
          },
          fontSize: {
            "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
            "label-md": ["11px", { "lineHeight": "16px", "fontWeight": "500" }],
            "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
            "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "label-lg": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
            "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
            "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
            "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }]
          }
        }
      }
    };
  </script>
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

        <!-- BANTUAN -->
        <a class="flex items-center justify-between px-4 py-3 rounded-lg text-on-surface-variant hover:text-primary transition-colors" href="{{ route('admin.bantuan') }}">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined">help</span>
                <span class="font-label-lg text-label-lg">Bantuan</span>
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

<div class="pl-72 flex flex-col min-h-screen">

<main class="w-full pt-16 flex-1 bg-background p-xl">
<div class="flex flex-col w-full">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
<div class="flex flex-col gap-xs">
<div class="flex items-center gap-sm">
<span class="px-sm py-xs rounded bg-primary/10 text-primary font-label-md text-label-md uppercase tracking-wider font-semibold">
                Terminal Otomatis Gerbang 01
              </span>
<span class="text-outline-variant">•</span>
<span class="font-label-md text-label-md text-secondary tracking-normal">Protokol Keamanan Level 2</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Scan QR Masuk</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
              Pemindaian kode QR undangan digital tamu residen untuk pembukaan gerbang masuk otomatis.
            </p>
</div>
<div class="flex items-center gap-md"></div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-12 gap-xl items-start">
<div class="xl:col-span-7 flex flex-col gap-lg">
<div class="bg-surface-container-lowest rounded-xl shadow-md p-lg flex flex-col gap-md relative overflow-hidden">
<div class="flex items-center justify-between pb-xs">
<div class="flex items-center gap-sm">
<span class="w-2.5 h-2.5 rounded-full bg-primary animate-ping"></span>
<span class="font-title-md text-title-md text-on-surface">Viewfinder Pemindai QR Tamu</span>
</div>
<div class="flex items-center gap-xs text-on-surface-variant font-label-md text-label-md">
<span>ID Alat:</span>
<span class="font-semibold text-on-surface px-xs py-0.5 rounded bg-surface-container">SCN-IN-GATE01</span>
</div>
</div>

<div class="relative w-full h-[400px] rounded-xl overflow-hidden bg-on-background flex items-center justify-center select-none group">
<div id="reader-viewfinder" class="absolute inset-0 w-full h-full opacity-60 z-0"></div>

<div class="absolute inset-0 bg-gradient-to-b from-on-background/70 via-transparent to-on-background/80 pointer-events-none z-10"></div>
<div class="absolute top-md left-md flex items-center gap-xs px-sm py-xs rounded-full bg-on-background/80 backdrop-blur-md text-surface font-label-md text-label-md z-10">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<span>Kamera Scanner Siaga • ISO Auto • HD 1080p</span>
</div>
<div class="absolute top-md right-md flex items-center gap-xs px-sm py-xs rounded bg-on-background/80 backdrop-blur-md text-surface font-label-md text-label-md z-10">
<span class="material-symbols-outlined text-[14px] text-inverse-primary">tune</span>
<span>WDR AKTIF</span>
</div>

<div class="relative w-64 h-64 flex items-center justify-center z-10">
<div class="absolute -top-1 -left-1 w-6 h-6 border-t-2 border-l-2 border-inverse-primary"></div>
<div class="absolute -top-1 -right-1 w-6 h-6 border-t-2 border-r-2 border-inverse-primary"></div>
<div class="absolute -bottom-1 -left-1 w-6 h-6 border-b-2 border-l-2 border-inverse-primary"></div>
<div class="absolute -bottom-1 -right-1 w-6 h-6 border-b-2 border-r-2 border-inverse-primary"></div>

<div id="verified-overlay" class="hidden absolute inset-0 bg-primary/10 rounded-lg flex flex-col items-center justify-center p-md backdrop-blur-[2px] shadow-[inset_0_0_24px_rgba(0,83,219,0.3)] transition-all">
<div class="w-16 h-16 rounded-full bg-surface-container-lowest/90 flex items-center justify-center shadow-lg mb-sm">
<span class="material-symbols-outlined text-primary text-[36px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<span class="font-title-md text-title-md text-surface text-center font-bold tracking-tight">Kode QR Terverifikasi</span>
<span class="font-label-md text-label-md text-inverse-primary mt-xs font-mono" id="overlay-qr-code">TKN-RES-2024-9982B</span>
</div>

<div class="absolute inset-x-0 h-0.5 bg-gradient-to-r from-transparent via-inverse-primary to-transparent shadow-[0_0_12px_#b4c5ff] animate-pulse top-1/2"></div>
</div>

<div class="absolute bottom-md left-md right-md flex items-center justify-between pointer-events-none z-10">
<div class="flex items-center gap-xs text-surface/80 font-label-md text-label-md font-mono bg-on-background/70 px-sm py-xs rounded">
<span>LATENSI: 18ms</span>
<span>•</span>
<span id="scan-status-text">DECODE: SIAGA</span>
</div>
<div class="flex items-center gap-xs text-surface font-label-md text-label-md">
<span class="material-symbols-outlined text-[16px] text-primary-fixed">qr_code_2</span>
<span>Format: QR-ECC-H</span>
</div>
</div>
</div>

<div class="flex flex-col sm:flex-row items-center justify-between gap-md pt-xs">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-[20px]" id="icon-barrier">lock</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status Gerbang</span>
<span class="font-title-md text-title-md text-on-surface font-semibold" id="text-barrier-status">Palang Barrier: Siaga Terkunci</span>
</div>
</div>
<button class="w-full sm:w-auto px-md py-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg transition-colors flex items-center justify-center gap-sm" id="btn-manual-ticket" onclick="document.getElementById('manual-ticket-modal').style.display='flex'" type="button">
<span class="material-symbols-outlined text-[18px]">keyboard</span>
<span>Input Kode Tiket Manual</span>
</button>
</div>
</div>

<div class="bg-surface-container-lowest rounded-xl shadow-sm p-lg flex items-center justify-between gap-md">
    <div class="flex items-center gap-md">
        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-[26px]">directions_car</span>
        </div>
        <div class="flex flex-col">
            <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kapasitas Parkir Tamu</span>
            <span class="font-title-lg text-title-lg text-on-surface font-bold" id="text-kapasitas-parkir">
                150 / 150 Slot Tersedia
            </span>
        </div>
    </div>
</div>
</div>

<div class="xl:col-span-5 flex flex-col gap-lg">
<div class="bg-surface-container-lowest rounded-xl shadow-md p-lg flex flex-col gap-lg relative">
<div class="flex items-center justify-between pb-xs">
<div class="flex items-center gap-xs px-md py-xs rounded-full bg-primary/10 text-primary font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">verified_user</span>
<span>Akses VIP Undangan Residen Divalidasi</span>
</div>
<span class="font-label-md text-label-md text-secondary font-mono" id="display-ref-id">ID: #INV-XXXX</span>
</div>

<div class="p-md rounded-xl bg-surface-container flex flex-col gap-xs">
    <div class="flex items-center gap-xs text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">
        <span class="material-symbols-outlined text-[16px]">home_pin</span>
        <span>Tuan Rumah / Pengundang</span>
    </div>
    <span class="font-title-md text-title-md text-on-surface font-bold" id="res-pengundang">-</span>
    <div class="flex items-center gap-sm mt-xs">
        <span class="px-sm py-0.5 rounded bg-primary text-on-primary font-label-lg text-label-lg font-bold" id="res-unit">Unit #-</span>
    </div>
</div>

<div class="flex flex-col gap-xs">
    <label class="font-label-lg text-label-lg text-on-surface font-semibold">Nomor Plat Terdaftar</label>
    <input class="w-full px-md py-md rounded-xl bg-surface-container-low text-on-surface font-title-lg text-title-lg font-bold tracking-widest uppercase outline-none" id="res-plat" type="text" value="-" readonly/>
</div>

<div class="grid grid-cols-2 gap-md">
<div class="p-md rounded-xl bg-surface-container-low flex flex-col gap-xs">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kategori Akses</span>
<span class="font-title-md text-title-md text-on-surface font-semibold">Tamu Undangan</span>
<span class="font-label-md text-label-md text-secondary">Bebas Biaya Parkir</span>
</div>
<div class="p-md rounded-xl bg-surface-container-low flex flex-col gap-xs">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Durasi Berlaku</span>
<span class="font-title-md text-title-md text-on-surface font-semibold">24 Jam Penuh</span>
<span class="font-label-md text-label-md text-secondary">Hingga Besok 14:00</span>
</div>
</div>

<div class="flex flex-col gap-sm pt-xs">
<button class="w-full bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md font-bold py-md px-lg rounded-xl shadow-md transition-all flex items-center justify-center gap-sm group" type="button" onclick="confirmEntry()">
<span class="material-symbols-outlined text-[22px] group-hover:translate-x-0.5 transition-transform">garage</span>
<span>Konfirmasi Kendaraan Masuk</span>
</button>
<button class="w-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg py-sm px-md rounded-xl transition-colors flex items-center justify-center gap-xs" type="button" onclick="resetScanView()">
<span class="material-symbols-outlined text-[18px]">refresh</span>
<span>Batal / Pindai Ulang</span>
</button>
</div>
</div>

<div class="bg-surface-container-low rounded-xl p-lg flex flex-col gap-sm">
<div class="flex items-center gap-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-[20px]">info</span>
<span class="font-title-md text-title-md font-semibold">Ringkasan SOP Petugas Pos Jaga</span>
</div>
<ul class="flex flex-col gap-xs font-body-md text-body-md text-on-surface-variant list-inside list-disc pl-xs">
<li>Pastikan plat nomor fisik kendaraan sama dengan plat yang tertera pada layar.</li>
<li>Apabila tamu membawa kendaraan berbeda, perbarui kolom teks nomor plat di atas sebelum konfirmasi.</li>
<li>Tekan konfirmasi untuk mencetak tiket akses VIP masuk dan membuka palang barrier gerbang secara otomatis.</li>
</ul>
</div>
</div>
</div>
</div>
</main>

<footer class="w-full bg-surface-container-lowest shadow-[0_-1px_8px_rgba(0,0,0,0.02)] py-md">
<div class="w-full px-xl flex items-center justify-between font-label-md text-label-md text-on-surface-variant">
<span>© 2024 Safe Park Pos Jaga. Apartemen Terpadu.</span>
<div class="flex items-center gap-lg">
<span>Gerbang: <strong class="text-on-surface font-semibold">Pos Gerbang Utama</strong></span>
<span>Koneksi: <strong class="text-[#16a34a] font-semibold">Stabil (12ms)</strong></span>
</div>
</div>
</footer>
</div>

<div class="fixed inset-0 z-50 flex items-center justify-center p-md bg-on-background/70 backdrop-blur-md transition-all duration-200" id="manual-ticket-modal" style="display: none;">
<div class="relative w-full max-w-lg bg-surface-container-lowest rounded-xl shadow-2xl overflow-hidden flex flex-col border border-outline-variant/30">
<div class="p-lg border-b border-surface-container flex items-start justify-between bg-surface-container-low">
<div class="flex items-start gap-md">
<div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[24px]">keyboard</span>
</div>
<div class="flex flex-col">
<h3 class="font-title-lg text-title-lg text-on-surface font-bold">Input Kode Tiket Manual</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-xs">
              Masukkan kode tiket atau token QR undangan digital secara manual jika kamera pemindai terkendala.
            </p>
</div>
</div>
<button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" onclick="document.getElementById('manual-ticket-modal').style.display='none'" type="button">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<div class="p-lg flex flex-col gap-lg">
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface font-semibold flex items-center justify-between" for="input-manual-code">
<span>Kode Tiket / Token Undangan</span>
<span class="font-label-md text-label-md text-primary font-mono">Format: INV-2026-XXXX</span>
</label>
<div class="relative flex items-center">
<div class="absolute left-md flex items-center pointer-events-none text-on-surface-variant">
<span class="material-symbols-outlined text-[22px]">qr_code_2</span>
</div>
<input class="w-full pl-12 pr-24 py-md rounded-xl bg-surface-container-low border border-outline-variant/50 focus:border-primary focus:bg-surface-container-lowest text-on-surface font-mono font-bold text-title-md tracking-wider uppercase transition-all focus:outline-none" id="input-manual-code" placeholder="Contoh: INV-2026-9815" type="text"/>
</div>
</div>
</div>
<div class="p-lg bg-surface-container-low border-t border-surface-container flex items-center justify-end gap-md">
<button class="px-lg py-md rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg font-semibold transition-colors" onclick="document.getElementById('manual-ticket-modal').style.display='none'" type="button">
          Batal
</button>
<button class="px-xl py-md rounded-xl bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md font-bold transition-all shadow-md flex items-center gap-sm" onclick="processManualInput()" type="button">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
<span>Verifikasi Tiket</span>
</button>
</div>
</div>
</div>

<audio id="notifSound" src="{{ asset('audio/handoff.mp3') }}" preload="auto"></audio>

<script>
let lastScannedCode = "";
let isProcessing = false;

function processScanMasuk(kode) {
    if (!kode) return;
    if (isProcessing) return;
    isProcessing = true;

    fetch("{{ route('scan.masuk.process') }}", {
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
            lastScannedCode = kode;
            
            const elRef = document.getElementById('display-ref-id') || document.querySelector('.font-mono.text-secondary');
            if(elRef) elRef.innerText = "ID: #" + data.data.kode_unik;

            const elPengundang = document.getElementById('res-pengundang');
            if(elPengundang) elPengundang.innerText = data.data.nama_tamu + " (Tamu " + data.data.pengundang + ")";

            const elUnit = document.getElementById('res-unit');
            if(elUnit) elUnit.innerText = data.data.nomor_unit;

            const elPlat = document.getElementById('res-plat');
            if(elPlat) elPlat.value = data.data.nomor_plat;

            const elKapasitas = document.getElementById('text-kapasitas-parkir');
            if(elKapasitas && data.kapasitas) elKapasitas.innerText = data.kapasitas.text;

            const overlayVerified = document.getElementById('verified-overlay');
            if(overlayVerified) {
                const elQrCode = document.getElementById('overlay-qr-code');
                if(elQrCode) elQrCode.innerText = data.data.kode_unik;
                overlayVerified.classList.remove('hidden');
            }

            const elStatusText = document.getElementById('scan-status-text');
            if(elStatusText) elStatusText.innerText = "DECODE: VALID";

            alert("QR Pass Valid! Data berhasil dimuat.");
        } else {
            alert(data.message || "Kode QR tidak ditemukan di database!");
        }
    })
    .catch(err => {
        console.error("AJAX Scan Error:", err);
        alert("Gagal terhubung ke server.");
    })
    .finally(() => {
        setTimeout(() => {
            isProcessing = false;
        }, 3000);
    });
}

function confirmEntry() {
    if (!lastScannedCode) {
        alert('Silakan pindaikan QR Pass Tamu terlebih dahulu!');
        return;
    }

    const textStatus = document.getElementById('text-barrier-status');
    const iconBarrier = document.getElementById('icon-barrier');

    if (textStatus) {
        textStatus.innerText = "Palang Barrier: TERBUKA";
        textStatus.classList.add('text-emerald-600');
    }
    if (iconBarrier) iconBarrier.innerText = "lock_open";

    alert('Akses Dikonfirmasi! Barrier Otomatis Terbuka.');

    setTimeout(() => {
        resetScanView();
    }, 2500);
}

function resetScanView() {
    lastScannedCode = "";
    isProcessing = false;

    const overlayVerified = document.getElementById('verified-overlay');
    if(overlayVerified) overlayVerified.classList.add('hidden');

    const elPengundang = document.getElementById('res-pengundang');
    if(elPengundang) elPengundang.innerText = "-";

    const elUnit = document.getElementById('res-unit');
    if(elUnit) elUnit.innerText = "Unit #-";

    const elPlat = document.getElementById('res-plat');
    if(elPlat) elPlat.value = "-";

    const textStatus = document.getElementById('text-barrier-status');
    const iconBarrier = document.getElementById('icon-barrier');
    if(textStatus) {
        textStatus.innerText = "Palang Barrier: Siaga Terkunci";
        textStatus.classList.remove('text-emerald-600');
    }
    if(iconBarrier) iconBarrier.innerText = "lock";
}

function processManualInput() {
    const inputEl = document.getElementById('input-manual-code');
    if(inputEl && inputEl.value.trim()) {
        processScanMasuk(inputEl.value.trim());
        const modal = document.getElementById('manual-ticket-modal');
        if(modal) modal.style.display = 'none';
    }
}

let html5QrCode = new Html5Qrcode("reader-viewfinder");
html5QrCode.start(
    { facingMode: "environment" }, 
    { fps: 10, qrbox: { width: 220, height: 220 } },
    (decodedText) => {
        processScanMasuk(decodedText);
    }
).catch(err => {
    console.warn("Kamera tidak aktif:", err);
});

document.addEventListener('DOMContentLoaded', function () {
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
});
</script>
</body>
</html>