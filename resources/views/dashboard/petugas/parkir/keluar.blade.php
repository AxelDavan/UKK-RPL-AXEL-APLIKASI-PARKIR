<!DOCTYPE html>

<html lang="id" style=""><head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pindai Pintu Masuk - Safe Park Security Ops</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 1,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-error-container": "#93000a",
                      "on-surface": "#191b23",
                      "inverse-on-surface": "#f0f0fb",
                      "error": "#ba1a1a",
                      "on-surface-variant": "#434655",
                      "on-secondary-container": "#54647a",
                      "primary": "#004ac6",
                      "on-tertiary-container": "#eef0ff",
                      "surface-container-lowest": "#ffffff",
                      "outline-variant": "#c3c6d7",
                      "surface-tint": "#0053db",
                      "surface-container-highest": "#e1e2ed",
                      "inverse-primary": "#b4c5ff",
                      "on-secondary": "#ffffff",
                      "surface": "#faf8ff",
                      "surface-dim": "#d9d9e5",
                      "surface-variant": "#e1e2ed",
                      "error-container": "#ffdad6",
                      "tertiary-fixed-dim": "#bec6e0",
                      "on-primary-fixed": "#00174b",
                      "on-error": "#ffffff",
                      "on-secondary-fixed": "#0b1c30",
                      "surface-container": "#ededf9",
                      "primary-container": "#2563eb",
                      "secondary": "#505f76",
                      "primary-fixed": "#dbe1ff",
                      "tertiary-container": "#656d84",
                      "on-tertiary-fixed-variant": "#3f465c",
                      "surface-container-high": "#e7e7f3",
                      "tertiary": "#4d556b",
                      "tertiary-fixed": "#dae2fd",
                      "surface-bright": "#faf8ff",
                      "inverse-surface": "#2e3039",
                      "on-background": "#191b23",
                      "on-primary-container": "#eeefff",
                      "on-tertiary": "#ffffff",
                      "secondary-fixed": "#d3e4fe",
                      "on-primary": "#ffffff",
                      "outline": "#737686",
                      "secondary-container": "#d0e1fb",
                      "primary-fixed-dim": "#b4c5ff",
                      "secondary-fixed-dim": "#b7c8e1",
                      "on-primary-fixed-variant": "#003ea8",
                      "background": "#faf8ff",
                      "on-secondary-fixed-variant": "#38485d",
                      "surface-container-low": "#f3f3fe",
                      "on-tertiary-fixed": "#131b2e"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "gutter": "24px",
                      "margin-desktop": "32px",
                      "unit": "4px",
                      "xs": "4px",
                      "margin-mobile": "16px",
                      "lg": "24px",
                      "md": "16px",
                      "sm": "8px",
                      "xl": "32px"
              },
              "fontFamily": {
                      "label-md": [
                              "Plus Jakarta Sans"
                      ],
                      "display-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "title-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "label-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "body-md": [
                              "Plus Jakarta Sans"
                      ],
                      "body-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "title-md": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg-mobile": [
                              "Plus Jakarta Sans"
                      ]
              },
              "fontSize": {
                      "label-md": [
                              "11px",
                              {
                                      "lineHeight": "16px",
                                      "fontWeight": "500"
                              }
                      ],
                      "display-lg": [
                              "40px",
                              {
                                      "lineHeight": "48px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "title-lg": [
                              "20px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "600"
                              }
                      ],
                      "label-lg": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-md": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ],
                      "body-lg": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
                              }
                      ],
                      "title-md": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-lg": [
                              "32px",
                              {
                                      "lineHeight": "40px",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "700"
                              }
                      ],
                      "headline-lg-mobile": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "700"
                              }
                      ]
              }
      },
          },
        }
      </script>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen">
<!-- SideNavBar -->
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
                Scanner
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

        <!-- PROFILE -->
        <a
            href="{{ route('profile.edit') }}"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                person
            </span>

            <span class="font-label-lg text-label-lg">
                Profile
            </span>
        </a>

        <!-- SETTINGS -->
        <a
            href="#"
            class="flex items-center gap-4
                   text-on-surface-variant
                   px-4 py-3
                   rounded-lg
                   transition-colors
                   hover:text-primary"
        >
            <span class="material-symbols-outlined">
                settings
            </span>

            <span class="font-label-lg text-label-lg">
                Settings
            </span>
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
<!-- Main Layout -->
<div class="flex flex-col min-h-screen md:ml-64">
<!-- TopNavBar -->
<header class="bg-surface dark:bg-surface-container-low border-b border-outline-variant dark:border-outline shadow-sm flex justify-between items-center w-full px-margin-desktop h-16 sticky top-0 z-40">
<div class="flex items-center gap-4 md:hidden">
<div class="font-display-lg text-display-lg text-primary dark:text-inverse-primary">Safe Park</div>
</div>
<div class="hidden md:flex items-center gap-4">
<h2 class="font-title-md text-title-md text-on-surface font-semibold">Pindai Pintu Keluar</h2>
</div>
<div class="flex items-center gap-md">
<button class="text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-highest dark:hover:bg-surface-container-high transition-colors p-sm rounded-full">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-highest dark:hover:bg-surface-container-high transition-colors p-sm rounded-full">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
</button>
</div>
</header>
<!-- Page Content Canvas -->
<main class="flex-grow p-margin-mobile lg:p-margin-desktop space-y-gutter"><div class="flex items-center gap-1 bg-surface-container-high p-1 rounded-xl w-fit mb-lg">
    <a href="{{ route('masuk') }}">
        <button class="px-6 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-highest transition-colors">
            Pintu Masuk
        </button>
    </a>
    <a href="{{ route('keluar') }}">
        <button class="px-6 py-2 rounded-lg font-label-lg text-label-lg bg-surface-container-lowest text-primary shadow-sm font-bold">
            Pintu Keluar
        </button>
    </a>
</div>
<!-- Page Header Row -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 border-b border-outline-variant pb-4">
<div>
<h2 class="font-headline-lg text-headline-lg font-bold text-on-surface mb-1">Pindai Pintu Keluar</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Verifikasi kendaraan sebelum keluar dari area parkir.</p>
</div>
<div class="inline-flex items-center gap-2 bg-primary-fixed/20 text-primary-container px-3 py-1.5 rounded-full border border-primary-container/20">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-lg text-label-lg font-bold">Scanner Aktif — Gate 1 (Entry)</span>
</div>
</div>
<!-- 12-Column Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left/Center Area (Col-span 8) -->
<div class="lg:col-span-8 flex flex-col gap-gutter">
<!-- Camera Feed Card -->
<div class="bg-surface-container-lowest rounded-[16px] shadow-[0px_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/30 overflow-hidden relative">
<div class="absolute top-0 left-0 w-full p-4 flex justify-between items-start z-10 bg-gradient-to-b from-black/60 to-transparent">
<span class="font-label-lg text-label-lg text-white font-semibold flex items-center gap-2 bg-black/40 px-2 py-1 rounded backdrop-blur-sm"><span class="material-symbols-outlined text-[16px]" data-icon="videocam">videocam</span> Kamera Pintu Masuk 01</span>
<div class="flex flex-col items-end gap-2">
<span class="font-label-md text-label-md text-white bg-error px-2 py-0.5 rounded animate-pulse flex items-center gap-1 shadow-sm">
<span class="w-1.5 h-1.5 bg-white rounded-full"></span> REC
                                </span>
<span class="font-label-md text-label-md text-white/90 bg-black/40 px-2 py-0.5 rounded backdrop-blur-sm">
                                    SIGNAL: Excellent
                                </span>
</div>
</div>
<!-- Simulated Video Feed placeholder -->
<div class="bg-cover bg-center w-full aspect-video" data-alt="A high-resolution, slightly grainy simulated security camera feed showing the rear view of a modern sedan exiting a parking gate. The license plate is clearly visible in the center frame, illuminated by harsh overhead LED security lights against a dark, industrial parking structure background. The overall tone is clinical, vigilant, and highly functional." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCOO8fvtqmVPOCb_oKm6ygj6805leF-TJJvzGGepIsz3xq3a9CbTliyx6RFY_6hS8uU0KMhQR4fhEl-I5PAsu6bjknvqS-tjy9S6vreQG9-GWxsYQ-yKLEUrVrcBHA7JjByippLxKeSVuhwsZxWIEBeOBsrJFEKgQEFInOArDQqav5di8366_Rj3aS4o8B_DjEGucdQSIZ_tPjjyKZx_Ih8-zMQywylN-W8_PmnbzWtOFjmNG0Gg6G0Jw')">
<!-- Overlay targeting reticle -->
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<div class="w-64 h-24 border-2 border-primary/60 rounded flex items-center justify-center relative">
<div class="absolute -top-1 -left-1 w-4 h-4 border-t-2 border-l-2 border-primary"></div>
<div class="absolute -top-1 -right-1 w-4 h-4 border-t-2 border-r-2 border-primary"></div>
<div class="absolute -bottom-1 -left-1 w-4 h-4 border-b-2 border-l-2 border-primary"></div>
<div class="absolute -bottom-1 -right-1 w-4 h-4 border-b-2 border-r-2 border-primary"></div>
<div class="w-full h-0.5 bg-primary/30 absolute animate-[scan_2s_ease-in-out_infinite]"></div>
</div>
</div>
</div>
<div class="absolute bottom-0 left-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent flex justify-between items-center">
<span class="font-label-md text-label-md text-white/80" id="live-time">19.00.14 WIB</span>
<span class="font-label-md text-label-md text-white/80">LPR Engine v2.4 Active</span>
</div>
</div>
<!-- Manual Input Section -->
<div class="bg-surface-container-lowest rounded-[16px] shadow-[0px_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/30 p-lg">
<div class="flex items-center gap-3 mb-4">
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]" data-icon="keyboard">keyboard</span>
</div>
<h3 class="font-title-md text-title-md font-semibold text-on-surface">Input Plat Nomor Manual</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Gunakan form ini jika sistem tidak mendeteksi plat nomor secara otomatis (misal: plat rusak atau kotor).</p>
<div class="flex flex-col md:flex-row gap-4 items-end">
<div class="flex-grow w-full">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1 ml-1">Nomor Polisi</label>
<input class="w-full h-12 px-4 rounded-[8px] border border-outline-variant bg-surface focus:border-primary-container focus:ring-2 focus:ring-primary-container/20 outline-none transition-all font-body-lg text-body-lg text-on-surface uppercase font-mono tracking-wider placeholder-on-surface-variant/50" placeholder="Contoh: B 1234 CD" type="text"/>
</div>
<button class="h-12 px-6 bg-primary-container hover:bg-primary text-white font-label-lg text-label-lg font-bold rounded-[8px] shadow-sm transition-colors whitespace-nowrap flex items-center gap-2 w-full md:w-auto justify-center">
<span class="material-symbols-outlined text-[18px]" data-icon="check_circle">check_circle</span>
                                Verifikasi &amp; Buka
                            </button>
</div>
</div>
</div>
<!-- Right Area (Col-span 4) -->
<div class="lg:col-span-4 flex flex-col gap-gutter">
<!-- Quick Instructions Card -->
<div class="bg-surface-container-low rounded-[16px] border border-outline-variant/50 p-lg">
<h3 class="font-title-md text-title-md font-semibold text-on-surface mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="help_outline">help_outline</span>
                            Panduan Cepat
                        </h3>
<ol class="space-y-4">
<li class="flex gap-3 items-start">
<span class="flex-shrink-0 w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-md text-label-md font-bold mt-0.5">1</span>
<span class="font-body-md text-body-md text-on-surface">Arahkan kamera dengan jelas ke area plat nomor kendaraan.</span>
</li>
<li class="flex gap-3 items-start">
<span class="flex-shrink-0 w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-md text-label-md font-bold mt-0.5">2</span>
<span class="font-body-md text-body-md text-on-surface">Sistem LPR akan mendeteksi dan memverifikasi status pembayaran parkir.</span>
</li>
<li class="flex gap-3 items-start">
<span class="flex-shrink-0 w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-md text-label-md font-bold mt-0.5">3</span>
<span class="font-body-md text-body-md text-on-surface">Konfirmasi pembukaan palang pintu jika status valid.</span>
</li>
</ol>
</div>
<!-- Recent Exit Activity -->
<div class="bg-surface-container-lowest rounded-[16px] shadow-[0px_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/30 flex-grow flex flex-col overflow-hidden">
<div class="p-4 border-b border-outline-variant/30 bg-surface-bright flex justify-between items-center">
<h3 class="font-title-md text-title-md font-semibold text-on-surface flex items-center gap-2"><span class="material-symbols-outlined text-on-surface-variant" data-icon="history">history</span> Riwayat Pintu Masuk</h3>
<button class="text-primary font-label-md text-label-md hover:underline">Lihat Semua</button>
</div>
<div class="p-2 flex-grow overflow-y-auto">
<ul class="space-y-1">
<!-- Item 1 -->
<li class="p-3 hover:bg-surface-container transition-colors rounded-lg flex flex-col gap-2">
<div class="flex justify-between items-start">
<div class="flex items-center gap-2">
<span class="font-body-md text-body-md font-bold text-on-surface tracking-wider font-mono bg-surface-container-high px-2 py-1 rounded">B 8472 XYZ</span>
<span class="font-label-md text-label-md text-on-surface-variant bg-surface-variant px-2 py-0.5 rounded-full">Tamu</span>
</div>
<span class="font-label-md text-label-md text-on-surface-variant">14:30 PM</span>
</div>
<div class="flex items-center gap-1.5 text-[#166534] bg-[#dcfce7] px-2 py-1 rounded-md w-fit">
<span class="material-symbols-outlined text-[14px]" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-semibold">Pembayaran Berhasil</span>
</div>
</li>
<!-- Item 2 -->
<li class="p-3 hover:bg-surface-container transition-colors rounded-lg flex flex-col gap-2 border-t border-outline-variant/20">
<div class="flex justify-between items-start">
<div class="flex items-center gap-2">
<span class="font-body-md text-body-md font-bold text-on-surface tracking-wider font-mono bg-surface-container-high px-2 py-1 rounded">D 1932 AA</span>
<span class="font-label-md text-label-md text-primary-container bg-primary-fixed px-2 py-0.5 rounded-full">Penghuni</span>
</div>
<span class="font-label-md text-label-md text-on-surface-variant">14:15 PM</span>
</div>
<div class="flex items-center gap-1.5 text-[#166534] bg-[#dcfce7] px-2 py-1 rounded-md w-fit">
<span class="material-symbols-outlined text-[14px]" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-semibold">Akses Diberikan</span>
</div>
</li>
<!-- Item 3 -->
<li class="p-3 hover:bg-surface-container transition-colors rounded-lg flex flex-col gap-2 border-t border-outline-variant/20">
<div class="flex justify-between items-start">
<div class="flex items-center gap-2">
<span class="font-body-md text-body-md font-bold text-on-surface tracking-wider font-mono bg-surface-container-high px-2 py-1 rounded">B 1234 ABC</span>
<span class="font-label-md text-label-md text-on-surface-variant bg-surface-variant px-2 py-0.5 rounded-full">Tamu</span>
</div>
<span class="font-label-md text-label-md text-on-surface-variant">14:05 PM</span>
</div>
<div class="flex items-center gap-1.5 text-on-error-container bg-error-container px-2 py-1 rounded-md w-fit">
<span class="material-symbols-outlined text-[14px]" data-icon="warning" style="font-variation-settings: 'FILL' 1;">warning</span>
<span class="font-label-md text-label-md font-semibold">Belum Bayar</span>
</div>
</li>
<!-- Item 4 -->
<li class="p-3 hover:bg-surface-container transition-colors rounded-lg flex flex-col gap-2 border-t border-outline-variant/20">
<div class="flex justify-between items-start">
<div class="flex items-center gap-2">
<span class="font-body-md text-body-md font-bold text-on-surface tracking-wider font-mono bg-surface-container-high px-2 py-1 rounded">F 5678 GHI</span>
<span class="font-label-md text-label-md text-primary-container bg-primary-fixed px-2 py-0.5 rounded-full">Penghuni</span>
</div>
<span class="font-label-md text-label-md text-on-surface-variant">13:50 PM</span>
</div>
<div class="flex items-center gap-1.5 text-[#166534] bg-[#dcfce7] px-2 py-1 rounded-md w-fit">
<span class="material-symbols-outlined text-[14px]" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-semibold">Akses Diberikan</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</main>
</div>
<style>
        @keyframes scan {
            0% { top: 0; opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { top: 100%; opacity: 0; }
        }
    </style>
<script>
        // Simple script to update the live clock for realism
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', { hour12: false }) + ' WIB';
            const timeEl = document.getElementById('live-time');
            if(timeEl) timeEl.textContent = timeString;
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body></html>