<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="web_dashboard" name="shell-type"/>
<title>Perangkat Aktif - Safe Park</title>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<!-- Tailwind CSS with Plugins -->
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
            "primary-fixed": "#dbe1ff",
            "on-primary-fixed": "#00174b",
            "secondary": "#505f76",
            "secondary-container": "#d0e1fb",
            "secondary-fixed": "#d3e4fe",
            "on-secondary-fixed": "#0b1c30",
            "surface": "#faf8ff",
            "background": "#faf8ff",
            "surface-container-lowest": "#ffffff",
            "surface-container-low": "#f3f3fe",
            "surface-container": "#ededf9",
            "surface-container-high": "#e7e7f3",
            "surface-container-highest": "#e1e2ed",
            "on-surface": "#191b23",
            "on-surface-variant": "#434655",
            "outline": "#737686",
            "outline-variant": "#c3c6d7",
            "error": "#ba1a1a",
            "error-container": "#ffdad6",
            "on-error": "#ffffff",
            "on-error-container": "#93000a",
            "inverse-surface": "#2e3039",
            "inverse-on-surface": "#f0f0fb"
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
            "margin-desktop": "32px",
            "margin-mobile": "16px"
          },
          fontFamily: {
            "display-lg": ["Plus Jakarta Sans", "sans-serif"],
            "headline-lg": ["Plus Jakarta Sans", "sans-serif"],
            "title-lg": ["Plus Jakarta Sans", "sans-serif"],
            "title-md": ["Plus Jakarta Sans", "sans-serif"],
            "body-lg": ["Plus Jakarta Sans", "sans-serif"],
            "body-md": ["Plus Jakarta Sans", "sans-serif"],
            "label-lg": ["Plus Jakarta Sans", "sans-serif"],
            "label-md": ["Plus Jakarta Sans", "sans-serif"]
          },
          fontSize: {
            "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700" }],
            "title-lg": ["20px", { lineHeight: "28px", fontWeight: "600" }],
            "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
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
    }
    ::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface antialiased min-h-screen">
<div class="w-full">
<main class="w-full pt-10 pb-16 bg-background">
<div class="px-margin-desktop py-lg flex flex-col gap-lg max-w-[1240px] w-full mx-auto">
<!-- Top Navigation & Header Area -->
<header class="flex flex-col gap-sm">
<div class="flex items-center justify-between">
<a class="inline-flex items-center gap-xs font-title-md text-body-md text-secondary hover:text-primary transition-colors group" href="#">
<span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform">arrow_back</span>
<span>Kembali ke Profil</span>
</a>
<!-- Live Indicator Badge -->
<div class="inline-flex items-center gap-sm px-md py-xs rounded-full bg-surface-container-lowest shadow-sm">
<span class="relative flex h-2.5 w-2.5">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
</span>
</div>
</div>
<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-md mt-xs">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Perangkat Aktif</h1>
<p class="font-body-md text-body-md text-secondary mt-xs max-w-2xl">
                Kelola sesi dan perangkat yang saat ini terhubung ke akun Safe Park Anda. Putus akses segera bila ada perangkat yang tidak dikenali.
              </p>
</div>
<div class="flex items-center gap-sm self-start sm:self-auto">
<button class="inline-flex items-center gap-xs px-md py-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-title-md text-label-lg transition-colors border border-outline-variant/30" onclick="refreshSessions()" type="button">
<span class="material-symbols-outlined text-[18px]">sync</span>
<span>Segarkan Status</span>
</button>
</div>
</div>
</header>
<!-- Current Active Device (Hero Card) -->
<section class="relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm border border-outline-variant/40 p-lg">
<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary-container"></div>
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-lg pl-1">
<!-- Device Info -->
<div class="flex items-start sm:items-center gap-md">
<div class="relative flex-shrink-0 w-16 h-16 rounded-xl bg-secondary-container/60 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[36px]">laptop_mac</span>
<span class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-surface-container-lowest flex items-center justify-center">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
</span>
</div>
<div class="flex flex-col">
<div class="flex flex-wrap items-center gap-sm">
<span class="font-title-lg text-title-md text-on-surface">Windows 11 PC • Edge Browser</span>
<div class="inline-flex items-center gap-xs px-sm py-xs rounded-full bg-primary-fixed text-on-primary-fixed font-title-md text-label-md">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
<span>Sesi Saat Ini</span>
</div>
</div>
<div class="flex flex-wrap items-center gap-x-md gap-y-xs font-body-md text-label-lg text-secondary mt-xs">
<div class="inline-flex items-center gap-xs">
<span class="material-symbols-outlined text-[16px] text-outline">location_on</span>
<span>Jakarta Selatan, Indonesia</span>
</div>
<div class="inline-flex items-center gap-xs font-mono">
<span class="material-symbols-outlined text-[16px] text-outline">lan</span>
<span>182.1.2.3</span>
</div>
<div class="inline-flex items-center gap-xs text-primary font-medium">
<span class="material-symbols-outlined text-[16px]">verified_user</span>
<span>Aktif Sekarang</span>
</div>
</div>
</div>
</div>
<!-- Verification Status & Action -->
<div class="flex flex-wrap items-center gap-sm sm:self-auto">
<div class="px-md py-sm rounded-lg bg-surface-container-low flex items-center gap-sm border border-outline-variant/30">
<span class="material-symbols-outlined text-primary text-[20px]">enhanced_encryption</span>
<div class="flex flex-col">
<span class="font-title-md text-label-md text-on-surface leading-tight">Terverifikasi 2FA</span>
<span class="font-label-md text-label-md text-secondary leading-tight">Kunci Hardware FIDO2</span>
</div>
</div>
<button class="px-md py-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-title-md text-label-lg transition-colors inline-flex items-center gap-xs border border-outline-variant/30" type="button">
<span class="material-symbols-outlined text-[18px]">info</span>
<span>Detail Log</span>
</button>
</div>
</div>
</section>
<!-- Other Active Sessions Section -->
<section class="rounded-xl bg-surface-container-lowest shadow-sm border border-outline-variant/40 p-lg flex flex-col gap-lg">
<!-- Section Title & Meta -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-sm pb-md border-b border-surface-container">
<div>
<h2 class="font-title-lg text-title-lg text-on-surface">Sesi Perangkat Lainnya</h2>
<p class="font-body-md text-body-md text-secondary mt-xs">
                Perangkat berikut tercatat memiliki izin akses masuk ke akun Anda. Keluarkan jika Anda merasa tidak mengenalinya.
              </p>
</div>
<span class="font-label-md text-label-md text-outline font-mono flex-shrink-0">ID Akun: SP-SEC-88391</span>
</div>
<!-- Device List -->
<div class="flex flex-col gap-sm" id="devices-list-container">
<!-- Device Item 1: iPhone -->
<div class="group flex flex-col md:flex-row md:items-center justify-between p-md rounded-xl bg-surface-container-low hover:bg-surface-container transition-all gap-md border border-outline-variant/20" id="device-item-1">
<div class="flex items-start sm:items-center gap-md min-w-0">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-center text-on-surface-variant flex-shrink-0 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[24px]">smartphone</span>
</div>
<div class="flex flex-col min-w-0">
<div class="flex flex-wrap items-center gap-sm">
<span class="font-title-md text-title-md text-on-surface truncate">iPhone 13 • Safe Park Mobile v2.4</span>
<span class="px-xs py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-title-md text-label-md">Mobile App</span>
</div>
<div class="flex flex-wrap items-center gap-x-md gap-y-xs font-body-md text-label-lg text-secondary mt-xs">
<span class="inline-flex items-center gap-xs">
<span class="material-symbols-outlined text-[15px] text-outline">location_on</span>
                      Jakarta Selatan, ID
                    </span>
<span class="inline-flex items-center gap-xs font-mono">
<span class="material-symbols-outlined text-[15px] text-outline">dns</span>
                      114.122.38.90
                    </span>
<span class="inline-flex items-center gap-xs text-secondary">
<span class="material-symbols-outlined text-[15px] text-outline">schedule</span>
                      Aktif 18 menit yang lalu
                    </span>
</div>
</div>
</div>
<div class="flex items-center gap-sm self-end md:self-center flex-shrink-0">
<button class="px-md py-sm rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-title-md text-label-lg transition-colors inline-flex items-center gap-xs" onclick="terminateSession('device-item-1', 'iPhone 13')" type="button">
<span class="material-symbols-outlined text-[18px]">logout</span>
<span>Keluarkan</span>
</button>
</div>
</div>
<!-- Device Item 2: MacBook Pro -->
<div class="group flex flex-col md:flex-row md:items-center justify-between p-md rounded-xl bg-surface-container-low hover:bg-surface-container transition-all gap-md border border-outline-variant/20" id="device-item-2">
<div class="flex items-start sm:items-center gap-md min-w-0">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-center text-on-surface-variant flex-shrink-0 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[24px]">laptop_chromebook</span>
</div>
<div class="flex flex-col min-w-0">
<div class="flex flex-wrap items-center gap-sm">
<span class="font-title-md text-title-md text-on-surface truncate">MacBook Pro 14" • Safari 17.4 (macOS Sonoma)</span>
<span class="px-xs py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-title-md text-label-md">Workstation</span>
</div>
<div class="flex flex-wrap items-center gap-x-md gap-y-xs font-body-md text-label-lg text-secondary mt-xs">
<span class="inline-flex items-center gap-xs">
<span class="material-symbols-outlined text-[15px] text-outline">location_on</span>
                      Tangerang, Banten, ID
                    </span>
<span class="inline-flex items-center gap-xs font-mono">
<span class="material-symbols-outlined text-[15px] text-outline">dns</span>
                      180.252.19.45
                    </span>
<span class="inline-flex items-center gap-xs text-secondary">
<span class="material-symbols-outlined text-[15px] text-outline">schedule</span>
                      Kemarin, 21:04 WIB
                    </span>
</div>
</div>
</div>
<div class="flex items-center gap-sm self-end md:self-center flex-shrink-0">
<button class="px-md py-sm rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-title-md text-label-lg transition-colors inline-flex items-center gap-xs" onclick="terminateSession('device-item-2', 'MacBook Pro 14&quot;')" type="button">
<span class="material-symbols-outlined text-[18px]">logout</span>
<span>Keluarkan</span>
</button>
</div>
</div>
<!-- Device Item 3: iPad Pro -->
<div class="group flex flex-col md:flex-row md:items-center justify-between p-md rounded-xl bg-surface-container-low hover:bg-surface-container transition-all gap-md border border-outline-variant/20" id="device-item-3">
<div class="flex items-start sm:items-center gap-md min-w-0">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-center text-on-surface-variant flex-shrink-0 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[24px]">tablet_mac</span>
</div>
<div class="flex flex-col min-w-0">
<div class="flex flex-wrap items-center gap-sm">
<span class="font-title-md text-title-md text-on-surface truncate">iPad Pro 11" • Chrome v128 (iPadOS)</span>
<span class="px-xs py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-title-md text-label-md">Tablet Patroli</span>
</div>
<div class="flex flex-wrap items-center gap-x-md gap-y-xs font-body-md text-label-lg text-secondary mt-xs">
<span class="inline-flex items-center gap-xs">
<span class="material-symbols-outlined text-[15px] text-outline">location_on</span>
                      Surabaya, Jawa Timur, ID
                    </span>
<span class="inline-flex items-center gap-xs font-mono">
<span class="material-symbols-outlined text-[15px] text-outline">dns</span>
                      36.72.210.88
                    </span>
<span class="inline-flex items-center gap-xs text-secondary">
<span class="material-symbols-outlined text-[15px] text-outline">schedule</span>
                      3 hari yang lalu
                    </span>
</div>
</div>
</div>
<div class="flex items-center gap-sm self-end md:self-center flex-shrink-0">
<button class="px-md py-sm rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-title-md text-label-lg transition-colors inline-flex items-center gap-xs" onclick="terminateSession('device-item-3', 'iPad Pro 11&quot;')" type="button">
<span class="material-symbols-outlined text-[18px]">logout</span>
<span>Keluarkan</span>
</button>
</div>
</div>
</div>
<!-- Bottom Action Panel -->
<div class="pt-md flex flex-col sm:flex-row items-center justify-between gap-md border-t border-surface-container">
<div class="flex items-center gap-xs text-secondary font-label-md text-label-md">
<span class="material-symbols-outlined text-[16px] text-outline">shield_lock</span>
<span>Sesi yang tidak aktif &gt;30 hari otomatis diputus oleh sistem keamanan pusat</span>
</div>
<button class="w-full sm:w-auto px-lg py-md rounded-xl bg-error hover:bg-on-error-container text-on-error font-title-md text-label-lg transition-all shadow-sm flex items-center justify-center gap-sm" onclick="terminateAllOtherSessions()" type="button">
<span class="material-symbols-outlined text-[20px]">power_settings_new</span>
<span>Keluar dari Semua Perangkat Lain</span>
</button>
</div>
</section>
<!-- Security Advisory Card -->
<section class="p-lg rounded-xl bg-surface-container-low shadow-sm border border-outline-variant/30 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-md">
<div class="flex items-start gap-md">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">lock</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-md text-on-surface">Perlindungan Kriptografi End-to-End</span>
<p class="font-body-md text-label-lg text-secondary mt-xs">
                Seluruh sesi dilindungi token terenkripsi AES-256. Jika Anda mencurigai adanya aktivitas tidak wajar, segera ganti kata sandi master Anda.
              </p>
</div>
</div>
<a class="flex-shrink-0 px-md py-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container shadow-sm text-primary font-title-md text-label-lg transition-colors inline-flex items-center gap-xs border border-outline-variant/30" href="#">
<span class="material-symbols-outlined text-[18px]">key</span>
<span>Ubah Kata Sandi</span>
</a>
</section>
</div>
</main>
</div>
<!-- Toast Notification Container -->
<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-sm pointer-events-none" id="toast-container"></div>
<!-- Client-side Interactive Behavior -->
<script>
    let activeOtherSessions = 3;

    function showToast(message, type = 'default') {
      const container = document.getElementById('toast-container');
      if (!container) return;

      const toast = document.createElement('div');
      toast.className = `pointer-events-auto px-md py-sm rounded-lg shadow-xl text-label-lg font-title-md flex items-center gap-sm transition-all transform translate-y-4 opacity-0 ${
        type === 'error' ? 'bg-error text-on-error' : 'bg-inverse-surface text-inverse-on-surface'
      }`;
      
      const iconName = type === 'error' ? 'report' : 'check_circle';
      toast.innerHTML = `
        <span class="material-symbols-outlined text-[18px]">${iconName}</span>
        <span>${message}</span>
      `;

      container.appendChild(toast);

      requestAnimationFrame(() => {
        toast.classList.remove('translate-y-4', 'opacity-0');
      });

      setTimeout(() => {
        toast.classList.add('opacity-0', 'translate-y-2');
        setTimeout(() => toast.remove(), 300);
      }, 3500);
    }

    function terminateSession(elementId, deviceName) {
      const el = document.getElementById(elementId);
      if (!el) return;

      el.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
      el.style.opacity = '0';
      el.style.transform = 'translateX(20px)';

      setTimeout(() => {
        el.remove();
        activeOtherSessions = Math.max(0, activeOtherSessions - 1);
        showToast(`Akses untuk ${deviceName} berhasil diputus.`, 'error');

        const container = document.getElementById('devices-list-container');
        if (container && container.children.length === 0) {
          container.innerHTML = `
            <div class="py-xl flex flex-col items-center justify-center text-center">
              <span class="material-symbols-outlined text-outline text-[48px] mb-xs">devices_off</span>
              <span class="font-title-md text-title-md text-on-surface">Tidak ada sesi aktif lainnya</span>
              <p class="font-body-md text-body-md text-secondary mt-xs max-w-sm">Hanya sesi saat ini pada komputer ini yang memiliki akses ke Safe Park Enterprise.</p>
            </div>
          `;
        }
      }, 260);
    }

    function terminateAllOtherSessions() {
      const container = document.getElementById('devices-list-container');
      if (!container || activeOtherSessions === 0) {
        showToast('Tidak ada sesi lain untuk diputuskan.');
        return;
      }

      container.innerHTML = `
        <div class="py-xl flex flex-col items-center justify-center text-center">
          <span class="material-symbols-outlined text-outline text-[48px] mb-xs">devices_off</span>
          <span class="font-title-md text-title-md text-on-surface">Semua sesi lain telah berhasil dihentikan</span>
          <p class="font-body-md text-body-md text-secondary mt-xs max-w-sm">Hanya sesi saat ini pada komputer ini yang memiliki akses ke Safe Park Enterprise.</p>
        </div>
      `;
      activeOtherSessions = 0;
      showToast('Seluruh sesi perangkat lain berhasil diputus seketika.', 'error');
    }

    function refreshSessions() {
      showToast('Daftar perangkat telah diperbarui dari server.');
    }
  </script>
</body></html>