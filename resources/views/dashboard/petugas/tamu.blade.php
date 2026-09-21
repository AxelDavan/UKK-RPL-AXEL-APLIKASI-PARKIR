<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Guest Registration</title>
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
                      "display-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "title-md": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg-mobile": [
                              "Plus Jakarta Sans"
                      ],
                      "label-md": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "body-lg": [
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
                      ]
              },
              "fontSize": {
                      "display-lg": [
                              "40px",
                              {
                                      "lineHeight": "48px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "title-md": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-lg-mobile": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-md": [
                              "11px",
                              {
                                      "lineHeight": "16px",
                                      "fontWeight": "500"
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
                      "body-lg": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
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
                      "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
              }
            },
          },
        }
    </script>
</head>
<body class="bg-background text-on-background antialiased pb-[88px] md:pl-64 md:pb-0">
<!-- TopNavBar -->
<header class="bg-surface border-b border-outline-variant shadow-sm w-full fixed top-0 left-0 z-40 md:pl-64 h-16 flex justify-between items-center px-margin-mobile md:px-margin-desktop">
<div class="flex items-center gap-md">
</div>
<div class="flex items-center gap-sm">
<button class="p-sm text-on-surface-variant hover:bg-surface-container-highest rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="p-sm text-on-surface-variant hover:bg-surface-container-highest rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
</button>
</div>
</header>

<!-- Main Content -->
<main class="pt-20 px-margin-mobile md:px-margin-desktop py-lg max-w-3xl mx-auto">
<div class="mb-lg">
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background">Guest Registration</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-xs">Manual entry for walk-in visitors.</p>
</div>
<form class="bg-surface rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant p-lg flex flex-col gap-lg">
<!-- Guest Details Section -->
<div>
<h3 class="font-title-md text-title-md text-primary mb-md flex items-center gap-sm">
<span class="material-symbols-outlined" data-icon="person_outline">person_outline</span>
                    Informasi Tamu
                </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="namaTamu">Nama Tamu</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="namaTamu" placeholder="Masukkan nama lengkap" type="text"/>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="noTelepon">No Telepon</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="noTelepon" placeholder="08xx-xxxx-xxxx" type="tel"/>
</div>
</div>
</div>
<hr class="border-outline-variant"/>
<!-- Destination Section -->
<div>
<h3 class="font-title-md text-title-md text-primary mb-md flex items-center gap-sm">
<span class="material-symbols-outlined" data-icon="location_on">location_on</span>
                    Tujuan Kunjungan
                </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="unitTujuan">Unit Tujuan</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="unitTujuan" placeholder="Blok / Nomor" type="text"/>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="namaPenghuni">Nama Penghuni</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="namaPenghuni" placeholder="Nama penghuni unit" type="text"/>
</div>
<div class="flex flex-col gap-xs md:col-span-2">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="tujuan">Tujuan Kunjungan</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="tujuan" placeholder="Misal: Kurir, Keluarga, Meeting" type="text"/>
</div>
</div>
</div>
<hr class="border-outline-variant"/>
<!-- Vehicle Section -->
<div>
<h3 class="font-title-md text-title-md text-primary mb-md flex items-center gap-sm">
<span class="material-symbols-outlined" data-icon="directions_car">directions_car</span>
                    Data Kendaraan
                </h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="jenisKendaraan">Jenis Kendaraan</label>
<select class="form-select rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="jenisKendaraan">
<option>Mobil</option>
<option>Motor</option>
<option>Lainnya</option>
</select>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="nomorPlat">Nomor Plat</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md uppercase" id="nomorPlat" placeholder="B 1234 CD" type="text"/>
</div>
<div class="flex flex-col gap-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="warna">Warna</label>
<input class="form-input rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container focus:ring-opacity-50 text-body-md" id="warna" placeholder="Hitam, Putih, dll" type="text"/>
</div>
</div>
</div>
<!-- Generate Button -->
<div class="pt-sm">
<button class="w-full bg-primary-container text-on-primary font-title-lg text-title-lg py-md rounded-lg shadow-sm hover:shadow-[0_8px_16px_rgba(0,0,0,0.08)] transition-all flex items-center justify-center gap-sm" type="button">
<span class="material-symbols-outlined" data-icon="qr_code_2">qr_code_2</span>
                    GENERATE QR SEMENTARA
                </button>
</div>
</form>
</main>
<!-- BottomNavBar (Mobile) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-margin-mobile py-sm bg-surface shadow-[0_-4px_16px_rgba(0,0,0,0.1)] rounded-t-xl border-t border-outline-variant">
<a class="flex flex-col items-center justify-center text-on-surface-variant px-md py-xs hover:bg-surface-variant rounded-lg transition-colors" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-label-md text-label-md">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant px-md py-xs hover:bg-surface-variant rounded-lg transition-colors" href="{{ route('verifikasi') }}">
<span class="material-symbols-outlined" data-icon="verified">verified</span>
<span class="font-label-md text-label-md">Verifikasi</span>
</a>
<a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-lg py-xs transition-transform scale-90" href="#">
<span class="material-symbols-outlined" data-icon="people" data-weight="fill" style="font-variation-settings: 'FILL' 1;">people</span>
<span class="font-label-md text-label-md font-bold">Tamu</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant px-md py-xs hover:bg-surface-variant rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="qr_code">qr_code</span>
<span class="font-label-md text-label-md">Scan</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant px-md py-xs hover:bg-surface-variant rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-label-md text-label-md">Profil</span>
</a>
</nav>
</body></html>