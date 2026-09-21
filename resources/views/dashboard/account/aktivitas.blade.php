<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Aktivitas Login</title>
<!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#004ac6",
            "primary-container": "#2563eb",
            "primary-fixed": "#dbe1ff",
            "primary-fixed-dim": "#b4c5ff",
            "on-primary": "#ffffff",
            "on-primary-container": "#eeefff",
            "on-primary-fixed": "#00174b",
            "on-primary-fixed-variant": "#003ea8",
            "secondary": "#505f76",
            "secondary-container": "#d0e1fb",
            "secondary-fixed": "#d3e4fe",
            "secondary-fixed-dim": "#b7c8e1",
            "on-secondary": "#ffffff",
            "on-secondary-container": "#54647a",
            "on-secondary-fixed": "#0b1c30",
            "on-secondary-fixed-variant": "#38485d",
            "tertiary": "#4d556b",
            "tertiary-container": "#656d84",
            "tertiary-fixed": "#dae2fd",
            "tertiary-fixed-dim": "#bec6e0",
            "on-tertiary": "#ffffff",
            "on-tertiary-container": "#eef0ff",
            "on-tertiary-fixed": "#131b2e",
            "on-tertiary-fixed-variant": "#3f465c",
            "error": "#ba1a1a",
            "error-container": "#ffdad6",
            "on-error": "#ffffff",
            "on-error-container": "#93000a",
            "background": "#faf8ff",
            "on-background": "#191b23",
            "surface": "#faf8ff",
            "surface-dim": "#d9d9e5",
            "surface-bright": "#faf8ff",
            "surface-container-lowest": "#ffffff",
            "surface-container-low": "#f3f3fe",
            "surface-container": "#ededf9",
            "surface-container-high": "#e7e7f3",
            "surface-container-highest": "#e1e2ed",
            "surface-variant": "#e1e2ed",
            "on-surface": "#191b23",
            "on-surface-variant": "#434655",
            "outline": "#737686",
            "outline-variant": "#c3c6d7",
            "inverse-surface": "#2e3039",
            "inverse-on-surface": "#f0f0fb",
            "inverse-primary": "#b4c5ff",
            "surface-tint": "#0053db"
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          spacing: {
            "xs": "4px",
            "sm": "8px",
            "md": "16px",
            "lg": "24px",
            "xl": "32px",
            "gutter": "24px",
            "margin-mobile": "16px",
            "margin-desktop": "32px",
            "unit": "4px"
          },
          fontFamily: {
            "display-lg": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"]
          },
          fontSize: {
            "display-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.02em", fontWeight: "700" }],
            "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700" }],
            "headline-lg-mobile": ["24px", { lineHeight: "32px", fontWeight: "700" }],
            "title-lg": ["20px", { lineHeight: "28px", fontWeight: "600" }],
            "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "label-lg": ["12px", { lineHeight: "16px", fontWeight: "600" }],
            "label-md": ["11px", { lineHeight: "16px", fontWeight: "500" }]
          }
        }
      }
    };
  </script>
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
  </style>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface antialiased min-h-screen">
<div class="w-full">
<main class="w-full pt-16 pb-16 bg-background">
<div class="flex flex-col max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-lg gap-lg">
<!-- Top Navigation & Header Block -->
<header class="flex flex-col gap-sm">
<div class="flex flex-wrap items-center justify-between gap-md">
<div class="flex flex-col gap-xs">
<a class="inline-flex items-center gap-xs font-title-md text-body-md text-secondary hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
<span>Kembali ke Profil</span>
</a>
</div>
</div>
<div class="flex flex-col gap-xs mt-xs">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Aktivitas Login</h1>
<p class="font-body-md text-body-md text-on-surface-variant">
              Riwayat percobaan dan aktivitas masuk akun Safe Park Anda dalam 30 hari terakhir.
            </p>
</div>
</header>
<!-- Filter Controls Bar -->
<section class="bg-surface-container-lowest rounded-xl p-md shadow-sm flex flex-col lg:flex-row items-center justify-between gap-md">
<!-- Search Bar -->
<div class="relative w-full lg:w-96 flex items-center">
<span class="material-symbols-outlined absolute left-md text-[20px] text-outline pointer-events-none">search</span>
<input class="w-full pl-10 pr-md py-sm bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors border-0" placeholder="Cari berdasarkan IP, perangkat, atau kota..." type="text"/>
</div>
<!-- Quick Filter Pills & Date Range -->
<div class="flex flex-wrap items-center justify-between w-full lg:w-auto gap-sm">
<div class="flex items-center gap-xs bg-surface-container-low p-xs rounded-lg">
<button class="px-md py-xs rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-sm">
                Semua (42)
              </button>
<button class="flex items-center gap-xs px-md py-xs rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container font-label-lg text-label-lg transition-colors">
<span class="w-2 h-2 rounded-full bg-primary inline-block"></span>
<span>Berhasil (39)</span>
</button>
<button class="flex items-center gap-xs px-md py-xs rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container font-label-lg text-label-lg transition-colors">
<span class="w-2 h-2 rounded-full bg-error inline-block"></span>
<span>Gagal / Mencurigakan (3)</span>
</button>
</div>
<div class="flex items-center gap-xs px-md py-sm bg-surface-container-low rounded-lg text-on-surface font-title-md text-label-lg cursor-pointer hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-[18px] text-secondary">date_range</span>
<span>30 Hari Terakhir</span>
<span class="material-symbols-outlined text-[16px] text-outline">expand_more</span>
</div>
</div>
</section>
<!-- History Data Table Container -->
<section class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<div class="overflow-x-auto w-full">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant">
<th class="py-md px-lg font-label-lg text-label-lg uppercase tracking-wider" scope="col">WAKTU &amp; TANGGAL</th>
<th class="py-md px-lg font-label-lg text-label-lg uppercase tracking-wider" scope="col">PERANGKAT &amp; BROWSER</th>
<th class="py-md px-lg font-label-lg text-label-lg uppercase tracking-wider" scope="col">ALAMAT IP &amp; LOKASI</th>
<th class="py-md px-lg font-label-lg text-label-lg uppercase tracking-wider" scope="col">METODE / 2FA</th>
<th class="py-md px-lg font-label-lg text-label-lg uppercase tracking-wider" scope="col">STATUS</th>
<th class="py-md px-lg font-label-lg text-label-lg uppercase tracking-wider text-right" scope="col">TINDAKAN / DETAIL</th>
</tr>
</thead>
<tbody class="text-on-surface divide-y divide-surface-container-low/40">
<!-- Row 1: Active Session -->
<tr class="hover:bg-surface-container-low/60 transition-colors">
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">Hari ini, 09:15 WIB</span>
<span class="font-label-md text-label-md text-outline">Sesi Saat Ini</span>
</div>
</td>
<td class="py-md px-lg">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">desktop_windows</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md">Windows 11 PC</span>
<span class="font-label-md text-label-md text-secondary">Edge Browser v124</span>
</div>
</div>
</td>
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md font-mono text-on-surface">182.1.2.3</span>
<span class="font-label-md text-label-md text-secondary">Jakarta Selatan, ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-lg bg-surface-container text-on-surface-variant font-label-md text-label-md">
<span class="material-symbols-outlined text-[14px] text-primary">verified</span>
<span>2FA Disetujui</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md">
<span class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>
<span>Berhasil</span>
</div>
</td>
<td class="py-md px-lg text-right">
<button class="px-sm py-xs text-primary hover:bg-surface-container rounded-lg font-title-md text-body-md transition-colors">
                      Detail
                    </button>
</td>
</tr>
<!-- Row 2: Auto Logout -->
<tr class="bg-surface-container-lowest hover:bg-surface-container-low/60 transition-colors">
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">Kemarin, 21:04 WIB</span>
<span class="font-label-md text-label-md text-outline">Keluar Otomatis</span>
</div>
</td>
<td class="py-md px-lg">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">laptop_mac</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md">MacBook Pro</span>
<span class="font-label-md text-label-md text-secondary">Safari 17.4</span>
</div>
</div>
</td>
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md font-mono text-on-surface">180.252.19.45</span>
<span class="font-label-md text-label-md text-secondary">Tangerang, ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-lg bg-surface-container text-on-surface-variant font-label-md text-label-md">
<span class="material-symbols-outlined text-[14px] text-primary">fingerprint</span>
<span>Biometrik Face ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md">
<span class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>
<span>Berhasil</span>
</div>
</td>
<td class="py-md px-lg text-right">
<button class="px-sm py-xs text-primary hover:bg-surface-container rounded-lg font-title-md text-body-md transition-colors">
                      Detail
                    </button>
</td>
</tr>
<!-- Row 3: Mobile App -->
<tr class="hover:bg-surface-container-low/60 transition-colors">
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">17 Sep 2026, 14:20 WIB</span>
<span class="font-label-md text-label-md text-outline">Koneksi Seluler 5G</span>
</div>
</td>
<td class="py-md px-lg">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">smartphone</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md">iPhone 13</span>
<span class="font-label-md text-label-md text-secondary">Mobile App Safe Park</span>
</div>
</div>
</td>
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md font-mono text-on-surface">114.122.38.90</span>
<span class="font-label-md text-label-md text-secondary">Jakarta Selatan, ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-lg bg-surface-container text-on-surface-variant font-label-md text-label-md">
<span class="material-symbols-outlined text-[14px] text-secondary">token</span>
<span>Kredensial App</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md">
<span class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>
<span>Berhasil</span>
</div>
</td>
<td class="py-md px-lg text-right">
<button class="px-sm py-xs text-primary hover:bg-surface-container rounded-lg font-title-md text-body-md transition-colors">
                      Detail
                    </button>
</td>
</tr>
<!-- Row 4: Failed Attempt (Warning) -->
<tr class="bg-error-container/20 hover:bg-error-container/30 transition-colors">
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">15 Sep 2026, 03:22 WIB</span>
<span class="font-label-md text-label-md text-error">Anomali Waktu Dini Hari</span>
</div>
</td>
<td class="py-md px-lg">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-error-container/50 flex items-center justify-center text-error flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">terminal</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md">Linux x86_64</span>
<span class="font-label-md text-label-md text-secondary">Firefox 126</span>
</div>
</div>
</td>
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md font-mono text-on-surface">36.72.210.88</span>
<span class="font-label-md text-label-md text-secondary">Surabaya, ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-lg bg-error-container/50 text-on-error-container font-label-md text-label-md">
<span class="material-symbols-outlined text-[14px]">lock_reset</span>
<span>Kata Sandi Salah</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-full bg-error-container text-on-error-container font-label-md text-label-md">
<span class="w-1.5 h-1.5 rounded-full bg-error inline-block"></span>
<span>Gagal (Kata Sandi Salah)</span>
</div>
</td>
<td class="py-md px-lg text-right">
<button class="px-sm py-xs text-error hover:bg-error-container rounded-lg font-title-md text-body-md transition-colors">
                      Blokir IP
                    </button>
</td>
</tr>
<!-- Row 5: Critical / Automated Bot Block -->
<tr class="bg-error-container/40 hover:bg-error-container/50 transition-colors">
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">15 Sep 2026, 03:25 WIB</span>
<span class="font-label-md text-label-md text-error font-semibold">Tindakan Mitigasi Aktif</span>
</div>
</td>
<td class="py-md px-lg">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-error text-on-error flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">smart_toy</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md text-error">Linux x86_64</span>
<span class="font-label-md text-label-md text-error">Unknown Automated Bot</span>
</div>
</div>
</td>
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md font-mono text-on-surface">36.72.210.88</span>
<span class="font-label-md text-label-md text-secondary">Surabaya, ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-lg bg-inverse-surface text-inverse-on-surface font-label-md text-label-md">
<span class="material-symbols-outlined text-[14px]">block</span>
<span>Brute-force Block</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-full bg-error text-on-error font-label-md text-label-md shadow-sm">
<span class="material-symbols-outlined text-[12px]">security_update_warning</span>
<span>Gagal / Mencurigakan (Diblokir Otomatis)</span>
</div>
</td>
<td class="py-md px-lg text-right">
<button class="px-sm py-xs text-error hover:bg-surface-container-lowest rounded-lg font-title-md text-body-md transition-colors">
                      Audit Log
                    </button>
</td>
</tr>
<!-- Row 6: Manual Logout -->
<tr class="hover:bg-surface-container-low/60 transition-colors">
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">12 Sep 2026, 10:45 WIB</span>
<span class="font-label-md text-label-md text-outline">Keluar Manual</span>
</div>
</td>
<td class="py-md px-lg">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">desktop_windows</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md">Windows PC</span>
<span class="font-label-md text-label-md text-secondary">Chrome 128</span>
</div>
</div>
</td>
<td class="py-md px-lg">
<div class="flex flex-col">
<span class="font-title-md text-body-md font-mono text-on-surface">182.1.2.3</span>
<span class="font-label-md text-label-md text-secondary">Jakarta Selatan, ID</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-lg bg-surface-container text-on-surface-variant font-label-md text-label-md">
<span class="material-symbols-outlined text-[14px] text-primary">verified</span>
<span>2FA Disetujui</span>
</div>
</td>
<td class="py-md px-lg">
<div class="inline-flex items-center gap-xs px-sm py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md">
<span class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>
<span>Berhasil</span>
</div>
</td>
<td class="py-md px-lg text-right">
<button class="px-sm py-xs text-primary hover:bg-surface-container rounded-lg font-title-md text-body-md transition-colors">
                      Detail
                    </button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<footer class="flex flex-col sm:flex-row items-center justify-between p-lg gap-md bg-surface-container-low/50">
<div class="flex items-center gap-xs text-on-surface-variant font-body-md text-body-md">
<span>Menampilkan</span>
<span class="font-title-md text-on-surface">1 - 6</span>
<span>dari</span>
<span class="font-title-md text-on-surface">42</span>
<span>aktivitas autentikasi</span>
</div>
<div class="flex items-center gap-md">
<span class="font-label-md text-label-md text-secondary">Halaman 1 dari 7</span>
<div class="flex items-center gap-xs">
<button class="px-sm py-xs rounded-lg text-outline bg-surface-container-lowest shadow-sm opacity-50 cursor-not-allowed font-title-md text-body-md" disabled="">
                  Sebelumnya
                </button>
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-title-md text-body-md flex items-center justify-center shadow-sm">
                  1
                </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-title-md text-body-md flex items-center justify-center transition-colors">
                  2
                </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-title-md text-body-md flex items-center justify-center transition-colors">
                  3
                </button>
<button class="px-sm py-xs rounded-lg text-on-surface bg-surface-container-lowest hover:bg-surface-container shadow-sm font-title-md text-body-md transition-colors">
                  Selanjutnya
                </button>
</div>
</div>
</footer>
</section>
<!-- Bottom Navigation Link to Active Devices -->
<section class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-lg bg-surface-container-lowest rounded-xl shadow-sm gap-md">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-lg bg-secondary-container flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">devices</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">Perangkat yang Sedang Aktif</span>
<span class="font-body-md text-body-md text-on-surface-variant">Saat ini ada 2 sesi terhubung yang memerlukan pengawasan aktif.</span>
</div>
</div>
<a class="inline-flex items-center gap-xs px-md py-sm bg-surface-container text-on-surface hover:bg-surface-container-high rounded-lg font-title-md text-body-md transition-colors self-end sm:self-center" href="#">
<span>Kelola Perangkat Aktif</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</section>
</div>
</main>
</div>
</body></html>