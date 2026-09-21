<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Buat Karcis &amp; Input Plat</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
    @media print {
    body * {
        visibility: hidden;
    }

    #thermalReceipt, #thermalReceipt * {
        visibility: visible;
    }

    #thermalReceipt {
        position: absolute;
        left: 0;
        top: 0;
        width: 80mm !important;
        margin: 0 !important;
        padding: 8px !important;
        border: none !important;
        box-shadow: none !important;
        background: white !important;
    }

    @page {
        size: 80mm auto;
        margin: 0;
    }
    @media print {
    @page {
        size: 80mm auto;
        margin: 0mm !important;
    }

    body {
        margin: 0 !important;
        padding: 0 !important;
    }

    #thermalReceipt > span:first-child {
        display: none !important;
    }
}
}
  </style>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#004ac6",
            "primary-container": "#2563eb",
            "on-primary": "#ffffff",
            "on-primary-container": "#eeefff",
            "primary-fixed": "#dbe1ff",
            "on-primary-fixed": "#00174b",
            "primary-fixed-dim": "#b4c5ff",
            "on-primary-fixed-variant": "#003ea8",
            "secondary": "#505f76",
            "secondary-container": "#d0e1fb",
            "on-secondary": "#ffffff",
            "on-secondary-container": "#54647a",
            "secondary-fixed": "#d3e4fe",
            "secondary-fixed-dim": "#b7c8e1",
            "on-secondary-fixed": "#0b1c30",
            "on-secondary-fixed-variant": "#38485d",
            "tertiary": "#4d556b",
            "tertiary-container": "#656d84",
            "on-tertiary": "#ffffff",
            "on-tertiary-container": "#eef0ff",
            "tertiary-fixed": "#dae2fd",
            "tertiary-fixed-dim": "#bec6e0",
            "on-tertiary-fixed": "#131b2e",
            "on-tertiary-fixed-variant": "#3f465c",
            "background": "#faf8ff",
            "surface": "#faf8ff",
            "surface-bright": "#faf8ff",
            "surface-dim": "#d9d9e5",
            "surface-container-lowest": "#ffffff",
            "surface-container-low": "#f3f3fe",
            "surface-container": "#ededf9",
            "surface-container-high": "#e7e7f3",
            "surface-container-highest": "#e1e2ed",
            "on-surface": "#191b23",
            "on-surface-variant": "#434655",
            "on-background": "#191b23",
            "outline": "#737686",
            "outline-variant": "#c3c6d7",
            "inverse-surface": "#2e3039",
            "inverse-on-surface": "#f0f0fb",
            "inverse-primary": "#b4c5ff",
            "surface-tint": "#0053db",
            "error": "#ba1a1a",
            "error-container": "#ffdad6",
            "on-error": "#ffffff",
            "on-error-container": "#93000a"
          },
          fontFamily: {
            sans: ["Plus Jakarta Sans", "sans-serif"],
            "body-md": ["Plus Jakarta Sans", "sans-serif"],
            "title-md": ["Plus Jakarta Sans", "sans-serif"],
            "title-lg": ["Plus Jakarta Sans", "sans-serif"],
            "label-md": ["Plus Jakarta Sans", "sans-serif"],
            "label-lg": ["Plus Jakarta Sans", "sans-serif"],
            "headline-lg": ["Plus Jakarta Sans", "sans-serif"],
            "display-lg": ["Plus Jakarta Sans", "sans-serif"]
          },
          fontSize: {
            "label-md": ["11px", { lineHeight: "16px", fontWeight: "500" }],
            "label-lg": ["12px", { lineHeight: "16px", fontWeight: "600" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
            "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
            "title-lg": ["20px", { lineHeight: "28px", fontWeight: "600" }],
            "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700" }],
            "display-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.02em", fontWeight: "700" }]
          },
          spacing: {
            "xs": "4px",
            "sm": "8px",
            "md": "16px",
            "lg": "24px",
            "xl": "32px",
            "gutter": "24px",
            "margin-desktop": "32px"
          },
          borderRadius: {
            DEFAULT: "0.25rem",
            lg: "0.5rem",
            xl: "0.75rem",
            full: "9999px"
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

<!-- Content Wrap -->
<div class="pl-72 flex flex-col min-h-screen">

<!-- MAIN WORKSPACE -->
<main class="w-full pt-16 flex-1 bg-background p-xl">
@if(session('error'))
    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-xl font-bold">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-xl font-bold">
        <ul>
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="flex flex-col w-full">
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-md mb-xl">
<div class="flex flex-col">
<div class="flex items-center gap-xs text-on-surface-variant font-label-md text-label-md uppercase tracking-wider mb-xs">
<span>OPERASIONAL GERBANG MASUK</span>
<span>•</span>
<span class="text-primary font-semibold">GATE 01 INBOUND</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Buat Karcis &amp; Input Plat</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-xs">
              Penerbitan karcis fisik mandiri sekaligus pencatatan nomor plat kendaraan tamu masuk dalam satu langkah cepat.
            </p>
</div>
<div class="flex items-center gap-sm px-md py-sm bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 self-start md:self-center">
<span class="relative flex h-3 w-3">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-600"></span>
</span>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg font-semibold text-on-surface">Dispenser Karcis Online</span>
<span class="font-label-md text-label-md text-on-surface-variant">Thermal EPSON TM-T82X • Siap Cetak</span>
</div>
<span class="material-symbols-outlined text-emerald-600 ml-xs text-[20px]">print</span>
</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-md mb-xl">
<div class="p-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-md border border-outline-variant/30">
    <div class="flex items-start justify-between">
        <div class="flex items-center gap-md">
            <div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary shadow-sm font-bold text-lg">
                <span>P</span>
            </div>
            <div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block">SLOT TAMU TERSEDIA</span>
                <span class="font-label-md text-label-md text-primary font-semibold">Ground Floor &amp; Basement</span>
            </div>
        </div>
        <span class="px-sm py-xs rounded-full bg-primary/10 text-primary font-label-md text-label-md font-semibold shrink-0" id="slotPersenText">
            {{ $persenKosong ?? 0 }}% Kosong
        </span>
    </div>
    <div class="flex flex-col gap-xs">
        <div class="flex items-baseline gap-xs">
            <span class="font-headline-lg text-headline-lg font-bold text-on-surface tracking-tight" id="slotTersediaText">
                {{ $parkirTerisi }}
            </span>
            <span class="font-title-md text-title-md text-on-surface-variant font-normal" id="slotTotalText">
                / {{ $totalSlotTamu ?? 150 }} Slot
            </span>
        </div>
        <div class="w-full bg-surface-container rounded-full h-2 overflow-hidden">
            <div class="bg-primary-container h-2 rounded-full transition-all duration-500" id="slotProgressBar" style="width: {{ $persenKosong ?? 0 }}%;"></div>
        </div>
    </div>
</div>

<div class="p-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-md border border-outline-variant/30">
<div class="flex items-start justify-between">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary shadow-sm">
<span class="material-symbols-outlined text-[22px]">fence</span>
</div>
<div>
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block">BARRIER GATE 01</span>
<span class="font-label-md text-label-md text-on-surface-variant">Palang Masuk Inbound</span>
</div>
</div>
<div class="flex items-center gap-xs px-sm py-xs rounded-full bg-surface-container font-label-md text-label-md font-semibold text-on-surface shrink-0">
<span class="w-2 h-2 rounded-full bg-[#16a34a] animate-pulse"></span>
<span>Siaga / Tertutup</span>
</div>
</div>
<div class="flex flex-col gap-xs">
<div class="flex items-center gap-xs">
<span class="material-symbols-outlined text-primary text-[18px]">sensors</span>
<span class="font-title-md text-title-md font-semibold text-on-surface">Sensor Loop Aktif</span>
</div>
<p class="font-label-md text-label-md text-on-surface-variant">Motorized Barrier Normal • Response &lt;0.5s</p>
</div>
</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-xl items-start">
<div class="lg:col-span-7 flex flex-col gap-lg">
<div class="bg-surface-container-lowest rounded-xl p-lg shadow-sm border border-outline-variant/30 flex flex-col gap-lg relative overflow-hidden">
<div class="absolute -top-12 -right-12 w-48 h-48 bg-primary/5 rounded-full blur-2xl pointer-events-none"></div>

<form action="{{ route('karsuk.store') }}" method="POST" id="formKarcis">
    @csrf
    <input type="hidden" name="jenis_kendaraan" id="inputJenisKendaraan" value="mobil">
    <input type="hidden" name="kategori" value="Parkir Tamu (Non-Undangan)">
    <input type="hidden" name="nomor_karcis" value="{{ $nomorKarcisBerikutnya ?? 'A-00001' }}">

<div class="flex items-center justify-between border-b border-outline-variant/40 pb-md">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-primary text-[24px]">assignment</span>
<h2 class="font-title-lg text-title-lg font-bold text-on-surface">Formulir Karcis &amp; Plat Kendaraan Masuk</h2>
</div>
<span class="font-label-md text-label-md px-sm py-xs rounded bg-surface-container text-on-surface-variant font-semibold">
                  Pos Utama - Gate 01
                </span>
</div>

<div class="flex items-center justify-between p-md bg-surface-container-low rounded-xl border border-outline-variant/20">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider font-semibold">NOMOR KARCIS BERIKUTNYA</span>
<span class="font-headline-lg text-headline-lg tracking-tight font-bold text-on-surface" id="ticketNumberDisplay">{{ $nomorKarcisBerikutnya }}</span>
</div>
<div class="flex flex-col items-end gap-xs">
<span class="inline-flex items-center gap-xs px-sm py-xs rounded-full bg-primary-fixed text-on-primary-fixed font-label-md text-label-md font-semibold">
<span class="material-symbols-outlined text-[14px]">auto_mode</span>
                    Auto-Increment Aktif
                  </span>
<span class="font-label-md text-label-md text-on-surface-variant">Seri Harian Pos Utama</span>
</div>
</div>

<div class="flex flex-col gap-sm">
<label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between">
<span class="font-semibold">Jenis Kendaraan Tamu</span>
<span class="text-on-surface-variant font-label-md text-label-md">Pilih Tarif &amp; Akses Jalur</span>
</label>
<div class="grid grid-cols-1 md:grid-cols-3 gap-sm" id="vehicleSelector">
<button class="vehicle-pill flex items-center justify-center gap-sm py-md px-sm rounded-xl font-label-lg text-label-lg transition-all shadow-sm bg-primary-container text-on-primary-container font-semibold" data-type="mobil" type="button">
<span class="material-symbols-outlined text-[20px]">directions_car</span>
<span class="text-left leading-tight">Mobil Pribadi<br/><span class="text-[10px] font-normal opacity-90">Tarif Reguler</span></span>
</button>
<button class="vehicle-pill flex items-center justify-center gap-sm py-md px-sm rounded-xl bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all font-label-lg text-label-lg" data-type="motor" type="button">
<span class="material-symbols-outlined text-[20px]">two_wheeler</span>
<span class="text-left leading-tight">Sepeda Motor<br/><span class="text-[10px] font-normal opacity-75">Tarif Roda 2</span></span>
</button>
<button class="vehicle-pill flex items-center justify-center gap-sm py-md px-sm rounded-xl bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all font-label-lg text-label-lg" data-type="logistik" type="button">
<span class="material-symbols-outlined text-[20px]">local_shipping</span>
<span class="text-left leading-tight">Operasional / Logistik<br/><span class="text-[10px] font-normal opacity-75">Akses Khusus</span></span>
</button>
</div>
</div>

<div class="flex flex-col gap-sm">
<div class="flex items-center justify-between">
<label class="font-label-lg text-label-lg text-on-surface flex items-center gap-xs font-semibold" for="plateInput">
<span>Nomor Plat Kendaraan</span>
<span class="text-error font-bold">*</span>
</label>
<span class="font-label-md text-label-md text-on-surface-variant">Gunakan Huruf Kapital &amp; Spasi</span>
</div>
<div class="relative flex items-center">
<span class="absolute left-md material-symbols-outlined text-on-surface-variant text-[24px]">pin</span>
<input autocomplete="off" class="w-full pl-12 pr-28 py-md bg-surface-container-low text-on-surface placeholder:text-outline-variant font-title-lg text-title-lg uppercase tracking-wider rounded-xl border border-outline-variant/30 focus:outline-none focus:bg-surface-container-lowest focus:border-primary focus:shadow-md transition-all font-bold" id="plateInput" name="nomor_plat" placeholder="Contoh: B 2341 TZA" type="text" value="B 2341 TZA"/>
<button class="absolute right-md flex items-center gap-xs px-sm py-xs rounded-lg bg-surface-variant text-on-surface-variant hover:bg-surface-container-highest transition-colors font-label-md text-label-md" id="clearPlateBtn" type="button">
<span class="material-symbols-outlined text-[16px]">backspace</span>
<span>Hapus</span>
</button>
</div>
</div>

<div class="flex flex-col gap-xs p-md bg-surface-container-low rounded-xl border border-dashed border-outline-variant/60">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider font-semibold">KATEGORI / TUAN RUMAH</span>
<span class="material-symbols-outlined text-on-surface-variant text-[16px]">lock</span>
</div>
<div class="flex items-center gap-sm mt-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">badge</span>
<input class="bg-transparent font-body-md text-body-md font-semibold text-on-surface focus:outline-none w-full cursor-not-allowed" readonly="" type="text" value="Parkir Tamu (Non-Undangan)"/>
</div>
<span class="font-label-md text-label-md text-on-secondary-container mt-xs">Akses Publik Terbatas • Gate 01</span>
</div>

<div class="flex flex-col sm:flex-row items-center gap-md pt-md border-t border-outline-variant/40">
    <button class="w-full sm:flex-1 flex items-center justify-center gap-sm py-md px-lg rounded-xl text-white shadow-md transition-all active:scale-[0.99] bg-primary hover:bg-primary-container" id="printTicketBtn" type="submit">
        <span class="material-symbols-outlined text-[24px]">print</span>
        <span class="material-symbols-outlined text-[22px]">fence</span>
        <span class="font-title-md text-title-md font-bold tracking-wide">Cetak Karcis &amp; Proses Masuk</span>
    </button>
    <button class="w-full sm:w-auto flex items-center justify-center gap-sm py-md px-lg rounded-xl bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md font-semibold" id="resetFormBtn" type="button">
        <span class="material-symbols-outlined text-[20px]">restart_alt</span>
        <span>Reset Form</span>
    </button>
</div>
</form>
</div>

<div class="bg-surface-container-lowest rounded-xl p-lg shadow-sm border border-outline-variant/30 flex flex-col gap-md">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
</div>
<div>
<h3 class="font-title-md text-title-md font-bold text-on-surface">Panduan Singkat Petugas Jaga</h3>
<p class="font-label-md text-label-md text-on-surface-variant">Prosedur cepat penerbitan karcis dan pembukaan palang gerbang</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md pt-xs">
<div class="flex items-start gap-sm p-sm rounded-lg bg-surface-container-low border border-outline-variant/20">
<span class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center font-label-lg text-label-lg font-bold shrink-0">
                    1
                  </span>
<p class="font-body-md text-body-md text-on-surface leading-tight">
                    Periksa plat nomor dari kamera ANPR atau ketik langsung jika belum terbaca.
                  </p>
</div>
<div class="flex items-start gap-sm p-sm rounded-lg bg-surface-container-low border border-outline-variant/20">
<span class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center font-label-lg text-label-lg font-bold shrink-0">
                    2
                  </span>
<p class="font-body-md text-body-md text-on-surface leading-tight">
                    Tekan 'Cetak Karcis &amp; Proses Masuk' untuk cetak karcis &amp; buka barrier gate otomatis.
                  </p>
</div>
<div class="flex items-start gap-sm p-sm rounded-lg bg-surface-container-low border border-outline-variant/20">
<span class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center font-label-lg text-label-lg font-bold shrink-0">
                    3
                  </span>
<p class="font-body-md text-body-md text-on-surface leading-tight">
                    Serahkan struk karcis fisik kepada pengemudi menuju Ground Floor G12.
                  </p>
</div>
</div>
</div>
</div>

<div class="lg:col-span-5 flex flex-col items-center">
<div class="w-80 h-3 flex justify-between overflow-hidden opacity-30">
<div class="w-full flex">
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
<div class="w-2 h-2 rotate-45 bg-surface-container-highest -mt-1 mx-0.5 shrink-0"></div>
</div>
</div>

<div class="w-80 bg-surface-container-lowest p-lg rounded-xl shadow-lg border border-outline-variant/30 flex flex-col items-center text-center transition-all duration-300" id="thermalReceipt">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-xs font-semibold">
                PRATINJAU KARCIS FISIK (80MM)
              </span>
<div class="flex items-center gap-xs mb-xs">
<span class="font-title-md text-title-md font-bold text-on-surface tracking-tighter">PARKIR SAFE PARK</span>
</div>
<span class="font-label-md text-label-md font-bold text-on-surface">POS GERBANG MASUK UTAMA</span>
<span class="font-label-md text-label-md text-on-surface-variant">Apartemen Terpadu Tower Gardenia</span>

<div class="w-full my-md border-b border-dashed border-outline-variant/80"></div>

<div class="flex flex-col items-center">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider font-semibold">NOMOR BUKTI PARKIR</span>
<span class="font-display-lg text-display-lg font-bold text-on-surface tracking-tight my-xs" id="previewTicketId">{{ $nomorKarcisBerikutnya }}</span>
<span class="px-sm py-xs rounded bg-surface-container font-label-md text-label-md font-bold text-on-surface uppercase" id="previewVehicleType">
                  KENDARAAN: MOBIL PRIBADI
                </span>
</div>

<div class="w-full my-md border-b border-dashed border-outline-variant/80"></div>

<div class="w-full flex flex-col gap-xs text-left">
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-on-surface-variant">Nomor Plat:</span>
<span class="font-title-md text-title-md font-bold text-on-surface" id="previewPlateNumber">B 2341 TZA</span>
</div>
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-on-surface-variant">Waktu Masuk:</span>
<span class="font-label-md text-label-md font-semibold text-on-surface" id="previewWaktuMasuk"></span>
</div>
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-on-surface-variant">Kategori:</span>
<span class="font-label-md text-label-md font-semibold text-on-surface">Parkir Tamu (Non-Undangan)</span>
</div>
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-on-surface-variant">Lokasi Parkir Rekomendasi:</span>
<span class="font-label-md text-label-md font-semibold text-primary">Tempat Parkir Tamu</span>
</div>
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-on-surface-variant">Pos Jaga:</span>
<span class="font-label-md text-label-md text-on-surface font-semibold">Gate 01 (IN-01)</span>
</div>
</div>

<div class="w-full my-md flex flex-col items-center gap-xs">
<div class="w-full flex justify-center items-center gap-[2px] h-8 px-md mt-xs">
<span class="w-[2px] h-full bg-on-surface"></span>
<span class="w-[4px] h-full bg-on-surface"></span>
<span class="w-[1px] h-full bg-on-surface"></span>
<span class="w-[3px] h-full bg-on-surface"></span>
<span class="w-[1px] h-full bg-on-surface"></span>
<span class="w-[5px] h-full bg-on-surface"></span>
<span class="w-[2px] h-full bg-on-surface"></span>
<span class="w-[1px] h-full bg-on-surface"></span>
<span class="w-[4px] h-full bg-on-surface"></span>
<span class="w-[2px] h-full bg-on-surface"></span>
<span class="w-[1px] h-full bg-on-surface"></span>
<span class="w-[3px] h-full bg-on-surface"></span>
<span class="w-[2px] h-full bg-on-surface"></span>
<span class="w-[5px] h-full bg-on-surface"></span>
<span class="w-[1px] h-full bg-on-surface"></span>
<span class="w-[3px] h-full bg-on-surface"></span>
<span class="w-[2px] h-full bg-on-surface"></span>
<span class="w-[4px] h-full bg-on-surface"></span>
<span class="w-[1px] h-full bg-on-surface"></span>
<span class="w-[2px] h-full bg-on-surface"></span>
<span class="w-[3px] h-full bg-on-surface"></span>
</div>
<span class="font-label-md text-label-md text-on-surface tracking-widest font-mono font-semibold">{{ $nomorKarcisBerikutnya }}</span>
</div>

<div class="w-full my-xs border-b border-dashed border-outline-variant/80"></div>

<div class="flex flex-col gap-xs text-[10px] leading-tight text-on-surface-variant text-center px-xs py-xs">
<p class="font-bold text-on-surface">PERHATIAN &amp; PERATURAN PARKIR:</p>
<p>1. Tiket ini merupakan tanda bukti parkir yang sah.</p>
<p>2. Kehilangan karcis dikenakan denda administrasi Rp 50.000,- beserta bukti STNK sah.</p>
<p>3. Segala kerusakan atau kehilangan barang di dalam kendaraan bukan tanggung jawab manajemen.</p>
<p class="font-bold text-on-surface mt-xs tracking-wider">SIMPAN TIKET INI HINGGA KELUAR GERBANG</p>
</div>
</div>

<div class="hidden mt-md w-80 p-md bg-emerald-700 text-white rounded-xl shadow-md flex items-center gap-sm transition-all duration-300" id="printSuccessToast">
<span class="material-symbols-outlined text-[24px]">check_circle</span>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg font-bold">Karcis Dicetak &amp; Barrier Terbuka!</span>
<span class="font-label-md text-label-md text-emerald-100">Palang Gerbang 01 Terbuka Otomatis</span>
</div>
</div>
</div>
</div>
</div>
</main>

<footer class="w-full bg-surface-container-lowest shadow-[0_-1px_8px_rgba(0,0,0,0.02)] py-md border-t border-outline-variant/30">
<div class="w-full px-xl flex items-center justify-between font-label-md text-label-md text-on-surface-variant">
<span>© 2026 SafePark. All rights reserved by Axel Davan Prayoga - SMK N1 SANDEN</span>
<div class="flex items-center gap-lg">
<span>Gerbang: <strong class="text-on-surface font-semibold">Pos Gerbang Utama</strong></span>
<span>Koneksi: <strong class="text-[#16a34a] font-semibold">Stabil (12ms)</strong></span>
</div>
</div>
</footer>
</div>

<audio id="notifSound" src="{{ asset('audio/handoff.mp3') }}" preload="auto"></audio>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. ELEMEN SELEKTOR
    const plateInput          = document.getElementById('plateInput');
    const previewPlate        = document.getElementById('previewPlateNumber');
    const previewVehicle      = document.getElementById('previewVehicleType');
    const inputJenisKendaraan = document.getElementById('inputJenisKendaraan');
    const clearPlateBtn       = document.getElementById('clearPlateBtn');
    const resetFormBtn        = document.getElementById('resetFormBtn');
    const vehicleButtons      = document.querySelectorAll('.vehicle-pill');
    const formKarcis          = document.getElementById('formKarcis');

    // 2. LIVE PREVIEW PLAT NOMOR
    if (plateInput && previewPlate) {
        plateInput.addEventListener('input', function () {
            const val = this.value.toUpperCase();
            this.value = val;
            previewPlate.innerText = val.trim() !== '' ? val : 'B 2341 TZA';
        });
    }

    // 3. LIVE PREVIEW JENIS KENDARAAN
    vehicleButtons.forEach(button => {
        button.addEventListener('click', function () {
            vehicleButtons.forEach(b => {
                b.classList.remove('bg-primary-container', 'text-on-primary-container', 'font-semibold');
                b.classList.add('bg-surface-container', 'text-on-surface-variant');
            });

            this.classList.remove('bg-surface-container', 'text-on-surface-variant');
            this.classList.add('bg-primary-container', 'text-on-primary-container', 'font-semibold');

            const type = this.getAttribute('data-type');
            if (inputJenisKendaraan) inputJenisKendaraan.value = type;

            if (previewVehicle) {
                if (type === 'motor') previewVehicle.innerText = 'KENDARAAN: SEPEDA MOTOR';
                else if (type === 'logistik') previewVehicle.innerText = 'KENDARAAN: OPERASIONAL / LOGISTIK';
                else previewVehicle.innerText = 'KENDARAAN: MOBIL PRIBADI';
            }
        });
    });

    // 4. TOMBOL HAPUS PLAT
    if (clearPlateBtn && plateInput) {
        clearPlateBtn.addEventListener('click', function () {
            plateInput.value = '';
            if (previewPlate) previewPlate.innerText = 'B 0000 XXX';
            plateInput.focus();
        });
    }

    // 5. TOMBOL RESET FORM
    if (resetFormBtn) {
        resetFormBtn.addEventListener('click', function () {
            if (plateInput) plateInput.value = '';
            if (previewPlate) previewPlate.innerText = 'B 2341 TZA';
            if (previewVehicle) previewVehicle.innerText = 'KENDARAAN: MOBIL PRIBADI';
            if (inputJenisKendaraan) inputJenisKendaraan.value = 'mobil';
        });
    }

    // 6. SUBMIT FORM
    if (formKarcis) {
        formKarcis.addEventListener('submit', function (e) {
            if (!plateInput.value.trim()) {
                e.preventDefault();
                alert('Harap isi nomor plat kendaraan terlebih dahulu!');
                plateInput.focus();
            }
        });
    }

    // 7. JAM REAL-TIME HEADER
    function updateHeaderClock() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        const dateStr = `${days[now.getDay()]}, ${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()}`;
        const timeStr = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}:${String(now.getSeconds()).padStart(2, '0')}`;

        const elDate = document.getElementById('header-date');
        const elClock = document.getElementById('header-clock');

        if (elDate) elDate.innerText = dateStr;
        if (elClock) elClock.innerText = timeStr;
    }

    updateHeaderClock();
    setInterval(updateHeaderClock, 1000);

    // 8. WAKTU MASUK REAL-TIME STRUK
    function updatePreviewTime() {
        const now = new Date();
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        const dayNum = now.getDate();
        const monthName = months[now.getMonth()];
        const year = now.getFullYear();

        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        const formattedTime = `${dayNum} ${monthName} ${year} • ${hours}:${minutes} WIB`;

        const elPreviewTime = document.getElementById('previewWaktuMasuk');
        if (elPreviewTime) elPreviewTime.innerText = formattedTime;
    }

    updatePreviewTime();
    setInterval(updatePreviewTime, 1000);

    // 9. NOTIFIKASI BANTUAN REAL-TIME
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
</body></html>