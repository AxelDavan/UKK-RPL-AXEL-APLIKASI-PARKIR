<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Laporan</title>
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
                },
            },
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #faf8ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.filled { font-variation-settings: 'FILL' 1; }
    </style>
<style>
@media print {
    /* Sembunyikan Sidebar, Navigasi, dan Form Filter saat dicetak */
    nav, header, form, .no-print, button {
        display: none !important;
    }

    /* Paksa Konten Utama Full Lebar */
    main, .report-print {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        position: absolute;
        top: 0;
        left: 0;
    }

    body {
        background-color: white !important;
        color: black !important;
    }

    table {
        width: 100% !important;
        border-collapse: collapse !important;
    }

    th, td {
        border: 1px solid #999 !important;
        padding: 8px !important;
        font-size: 12px !important;
    }

    @page {
        size: A4 landscape;
        margin: 10mm;
    }
}
</style>
</head>
<body class="bg-background text-on-background flex min-h-screen">

<header class="md:hidden flex justify-between items-center w-full px-margin-mobile h-16 bg-surface border-b border-outline-variant shadow-sm fixed top-0 z-40">
<div class="flex gap-sm no-print">
<span class="material-symbols-outlined text-on-surface-variant cursor-pointer" data-icon="notifications">notifications</span>
<span class="material-symbols-outlined text-on-surface-variant cursor-pointer" data-icon="account_circle">account_circle</span>
</div>
</header>

<nav class="hidden md:flex flex-col h-full py-6 w-64 fixed left-0 top-0
            bg-surface-container-low
            border-r border-outline-variant
            shadow-md z-40 no-print">

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
                   px-4 py-3 mx-2 rounded-lg
                   transition-colors
                   {{ request()->routeIs('dashboard')
                        ? 'bg-secondary-container text-on-secondary-container font-bold'
                        : 'text-on-surface-variant' }}"
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
                   px-4 py-3 mx-2 rounded-lg
                   transition-colors
                   {{ request()->routeIs('laporan')
                        ? 'bg-secondary-container text-on-secondary-container font-bold'
                        : 'text-on-surface-variant' }}"
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

<!-- Main Content Canvas -->
<main class="flex-1 md:ml-64 pt-16 md:pt-0 p-margin-mobile md:p-margin-desktop bg-background min-h-screen report-print">
<div class="flex flex-col md:flex-row md:justify-between md:items-end mb-xl gap-md">
<div class="flex gap-sm">
</div>
</div>

<form method="GET" action="{{ route('laporan') }}" class="flex flex-col md:flex-row md:justify-between md:items-end mb-xl gap-md no-print">
    <div>
        <h1 class="font-headline-lg text-headline-lg text-on-background mb-xs">Laporan Aktivitas</h1>
        <p class="font-body-md text-body-md text-on-surface-variant">Log komprehensif aktivitas keamanan sistem.</p>
    </div>
    
    <div class="flex flex-wrap gap-sm items-center">
        <!-- Filter Tanggal -->
        <select name="tanggal" onchange="this.form.submit()" class="px-md py-sm border border-outline-variant rounded-lg bg-surface text-on-surface text-label-lg font-label-lg outline-none cursor-pointer">
            <option value="semua" {{ $filterTanggal == 'semua' ? 'selected' : '' }}>Semua Waktu</option>
            <option value="hari_ini" {{ $filterTanggal == 'hari_ini' ? 'selected' : '' }}>Hari Ini</option>
            <option value="minggu_ini" {{ $filterTanggal == 'minggu_ini' ? 'selected' : '' }}>Minggu Ini</option>
            <option value="bulan_ini" {{ $filterTanggal == 'bulan_ini' ? 'selected' : '' }}>Bulan Ini</option>
        </select>

        <!-- TARUH DI SINI (Filter Aktivitas yang baru) -->
        <select name="aktivitas" onchange="this.form.submit()" class="px-md py-sm border border-outline-variant rounded-lg bg-surface text-on-surface text-label-lg font-label-lg outline-none cursor-pointer">
            <option value="semua" {{ $filterAktivitas == 'semua' ? 'selected' : '' }}>Semua Aktivitas</option>
            <option value="Masuk" {{ $filterAktivitas == 'Masuk' ? 'selected' : '' }}>Masuk</option>
            <option value="Keluar" {{ $filterAktivitas == 'Keluar' ? 'selected' : '' }}>Keluar</option>
            <option value="Verifikasi" {{ $filterAktivitas == 'Verifikasi' ? 'selected' : '' }}>Verifikasi</option>
        </select>

        <!-- Tombol Print / Export -->
        <button type="button" onclick="window.print()" class="flex items-center gap-xs px-md py-sm bg-primary-container text-on-primary-container rounded-lg hover:opacity-90 transition-opacity font-label-lg text-label-lg font-semibold shadow-sm">
            <span class="material-symbols-outlined" style="font-size: 18px;">print</span>
            Export
        </button>
    </div>
</form>

<div class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse report-table">
            <thead>
                <tr class="border-b border-outline-variant bg-surface-container-low text-on-surface-variant font-label-lg text-label-lg uppercase tracking-wider">
                    <th class="py-sm px-lg font-semibold">Waktu</th>
                    <th class="py-sm px-lg font-semibold">Aktivitas</th>
                    <th class="py-sm px-lg font-semibold">Petugas</th>
                    <th class="py-sm px-lg font-semibold">Detail</th>
                    <th class="py-sm px-lg font-semibold text-right">Status</th>
                </tr>
            </thead>
            <tbody class="font-body-md text-body-md text-on-surface">
                @forelse($logs as $log)
                    @php
                        $icon = match($log->kategori) {
                            'qr'         => 'qr_code',
                            'pembayaran' => 'payments',
                            'verifikasi' => 'verified_user',
                            default      => 'directions_car',
                        };

                        $bgColor = match($log->status) {
                            'ditolak'  => 'bg-error-container text-on-error-container border-error',
                            'aktif'    => 'bg-primary-fixed text-on-primary-fixed border-primary-fixed-dim',
                            default    => 'bg-secondary-fixed text-on-secondary-fixed border-secondary-fixed-dim',
                        };
                    @endphp
                    <tr class="border-b border-outline-variant hover:bg-surface-container-lowest transition-colors">
                        <td class="py-md px-lg text-on-surface-variant whitespace-nowrap">
                            {{ $log->created_at->format('H:i:s A') }}
                        </td>
                        <td class="py-md px-lg">
                            <div class="flex items-center gap-sm">
                                <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined" style="font-size: 16px;">{{ $icon }}</span>
                                </div>
                                <span class="font-medium">{{ $log->aktivitas }}</span>
                            </div>
                        </td>
                        <td class="py-md px-lg">{{ $log->user->name ?? 'System Auto' }}</td>
                        <td class="py-md px-lg text-on-surface-variant">{{ $log->detail ?? '-' }}</td>
                        <td class="py-md px-lg text-right">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium border {{ $bgColor }}">
                                {{ ucfirst($log->status) }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-lg text-center text-on-surface-variant">Belum ada riwayat aktivitas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-lg py-sm border-t border-outline-variant bg-surface-container-lowest report-pagination flex items-center justify-between">
        <div>{{ $logs->links() }}</div>
    </div>
</div>
</main>

<audio id="notifSound" src="{{ asset('audio/handoff.mp3') }}" preload="auto"></audio>

<script>
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
</body></html>