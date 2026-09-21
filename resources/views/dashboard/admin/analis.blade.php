<!DOCTYPE html><html lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Analitik - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
  tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary-fixed": "#002113",
                      "on-primary-container": "#eeefff",
                      "inverse-primary": "#b4c5ff",
                      "tertiary-fixed": "#ffddb8",
                      "on-tertiary-fixed-variant": "#653e00",
                      "background": "#f8f9ff",
                      "primary-container": "#2563eb",
                      "surface-container-highest": "#d3e4fe",
                      "on-secondary-fixed-variant": "#005236",
                      "on-secondary": "#ffffff",
                      "on-primary-fixed-variant": "#003ea8",
                      "on-error-container": "#93000a",
                      "on-primary-fixed": "#00174b",
                      "surface-container-low": "#eff4ff",
                      "on-tertiary": "#ffffff",
                      "primary-fixed-dim": "#b4c5ff",
                      "surface-variant": "#d3e4fe",
                      "secondary": "#006c49",
                      "on-background": "#0b1c30",
                      "primary-fixed": "#dbe1ff",
                      "on-surface-variant": "#434655",
                      "surface-bright": "#f8f9ff",
                      "surface-tint": "#0053db",
                      "surface-dim": "#cbdbf5",
                      "tertiary": "#784b00",
                      "primary": "#004ac6",
                      "surface-container-lowest": "#ffffff",
                      "error-container": "#ffdad6",
                      "on-secondary-container": "#00714d",
                      "inverse-surface": "#213145",
                      "secondary-fixed": "#6ffbbe",
                      "surface": "#f8f9ff",
                      "on-tertiary-container": "#ffeedd",
                      "secondary-fixed-dim": "#4edea3",
                      "on-tertiary-fixed": "#2a1700",
                      "error": "#ba1a1a",
                      "outline": "#737686",
                      "inverse-on-surface": "#eaf1ff",
                      "tertiary-container": "#996100",
                      "secondary-container": "#6cf8bb",
                      "outline-variant": "#c3c6d7",
                      "on-error": "#ffffff",
                      "surface-container-high": "#dce9ff",
                      "on-primary": "#ffffff",
                      "on-surface": "#0b1c30",
                      "surface-container": "#e5eeff",
                      "tertiary-fixed-dim": "#ffb95f"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "stack-xs": "4px",
                      "stack-sm": "8px",
                      "stack-lg": "24px",
                      "container-max": "1440px",
                      "margin-mobile": "16px",
                      "sidebar-collapsed": "80px",
                      "stack-md": "16px",
                      "gutter": "24px",
                      "sidebar-width": "260px"
              },
              "fontFamily": {
                      "headline-md": [
                              "Plus Jakarta Sans"
                      ],
                      "body-sm": [
                              "Plus Jakarta Sans"
                      ],
                      "body-md": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "body-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "code-sm": [
                              "monospace"
                      ],
                      "title-md": [
                              "Plus Jakarta Sans"
                      ],
                      "title-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "display-sm": [
                              "Plus Jakarta Sans"
                      ],
                      "label-md": [
                              "Plus Jakarta Sans"
                      ]
              },
              "fontSize": {
                      "headline-md": [
                              "20px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-sm": [
                              "13px",
                              {
                                      "lineHeight": "18px",
                                      "fontWeight": "400"
                              }
                      ],
                      "body-md": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ],
                      "headline-lg": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-lg": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
                              }
                      ],
                      "code-sm": [
                              "12px",
                              {
                                      "lineHeight": "16px",
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
                      "title-lg": [
                              "18px",
                              {
                                      "lineHeight": "26px",
                                      "fontWeight": "600"
                              }
                      ],
                      "display-sm": [
                              "30px",
                              {
                                      "lineHeight": "38px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-md": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "600"
                              }
                      ]
              }
      },
          },
        }
</script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>"
<body class="bg-background text-on-background min-h-screen flex font-body-md">
<!-- SideNavBar -->
<!-- ================= SIDEBAR SAFE PARK ================= -->
<nav
    class="bg-surface-container-lowest
           w-sidebar-width h-full
           fixed left-0 top-0
           border-r border-outline-variant
           shadow-sm
           z-50
           transform -translate-x-full
           md:translate-x-0
           transition-transform duration-300 ease-in-out
           flex flex-col py-6"
    id="sidebar"
>

    <!-- LOGO + NAMA SAFE PARK -->
    <div class="px-6 mb-8 flex items-center gap-3">

        <!-- Logo -->
        <div class="w-10 h-10 rounded-full overflow-hidden flex items-center justify-center shrink-0">
            <img
                src="{{ asset('image/screen.webp') }}"
                alt="Safe Park Logo"
                class="w-full h-full object-cover"
            >
        </div>

        <!-- Nama -->
        <div>
            <h1 class="text-title-lg font-title-lg font-bold text-primary">
                Safe Park
            </h1>

            <p class="font-label-md text-label-md text-on-surface-variant">
                Smart Parking Admin
            </p>
        </div>

    </div>


    <!-- ================= MENU UTAMA ================= -->
    <div class="flex-1 overflow-y-auto">

        <ul class="space-y-1">

            <!-- Dashboard -->
            <li>
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>

                    <span class="font-body-md text-body-md">
                        Dashboard
                    </span>
                </a>
            </li>


            <!-- Kendaraan -->
            <li>
                <a
                    href="{{ route('dashboard.admin.kendaraan1') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        directions_car
                    </span>

                    <span class="font-body-md text-body-md">
                        Kendaraan
                    </span>
                </a>
            </li>


            <!-- Manajemen Pengguna -->
            <li>
                <a
                    href="{{ route('pengguna') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        group
                    </span>

                    <span class="font-body-md text-body-md">
                        Manajemen Pengguna
                    </span>
                </a>
            </li>

            <li>
                <a
                    href="{{ route('tamu') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        badge
                    </span>

                    <span class="font-body-md text-body-md">
                        List Pengunjung
                    </span>
                </a>
            </li>


            <!-- Area Parkir -->
            <li>
                <a
                    href="{{ route('peta') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        local_parking
                    </span>

                    <span class="font-body-md text-body-md">
                        Area Parkir
                    </span>
                </a>
            </li>


            <!-- Analitik -->
            <li>
                <a
                    href="{{ route('analitik') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        analytics
                    </span>

                    <span class="font-body-md text-body-md">
                        Analitik
                    </span>
                </a>
            </li>

        </ul>

    </div>


    <!-- ================= MENU BAWAH ================= -->
    <div class="px-6 mt-auto">

        <ul class="space-y-1">

            


            <!-- Bantuan -->
            <li>
                <a
                    href="#"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        help
                    </span>

                    <span class="font-body-sm text-body-sm">
                        Bantuan
                    </span>
                </a>
            </li>

        </ul>

    </div>

</nav>
<!-- ================= END SIDEBAR ================= -->
<!-- Main Content Area -->
<div class="flex-1 md:ml-sidebar-width flex flex-col min-h-screen relative bg-surface">
<!-- TopNavBar -->
<header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 z-50 backdrop-blur-md border-b border-outline-variant bg-surface-container-lowest/80">
<div class="flex justify-between items-center px-gutter max-w-container-max mx-auto h-full w-full">
<!-- Search on left -->
<div class="flex-1 max-w-md focus-within:ring-2 focus-within:ring-primary/20 transition-all rounded-lg overflow-hidden flex items-center bg-surface-container-low px-3 h-10">
<span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
<input class="w-full bg-transparent border-none focus:ring-0 text-body-md text-on-surface placeholder:text-outline h-full" placeholder="Cari..." type="text"/>
</div>
<!-- Actions on right -->
<div class="flex items-center gap-4">
<a class="h-8 w-8 rounded-full overflow-hidden bg-surface-container border border-outline-variant ml-2" href="{{ route('profile.edit') }}">
<img alt="Administrator Profile" class="w-full h-full object-cover" data-alt="A professional headshot of a corporate administrator, bright even lighting, clean neutral background, sharp focus, modern corporate aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVBfVeJ-79dbdwmEBKkKLi8_ZCGVxvkff85f-ApfJrlLP1JTkBnjn2og_CzjmG8cgNZndbdDOK3ZP9S443-hH8BY6S3u7dF3P448UbzUvFy3P0E7-UHPGwJJ_vfdkOSUCwngA1OHihm79wRgcgfO0FVsOoFuuJ1JuOLvwaTEAtMjOxrkDMTmbWInAitQEGa0tmTZ40x3DnZ8X3JBAs4DY_dm3HsE6a0q_NY1YOebuuk-63UNKQ31QD-g"/>
</a>
</div>
</div>
</header>
<!-- Canvas -->
<main class="flex-1 p-6 pt-24 w-full">
<!-- Page Header -->
<div class="mb-6 flex flex-col md:flex-row md:justify-between md:items-end gap-4">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Analitik</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Analisis performa dan aktivitas parkir.</p>
</div>
<div class="flex bg-surface-container-lowest rounded-lg border border-outline-variant p-1">
<!--<button class="px-4 py-1.5 text-body-sm font-label-md rounded-md bg-primary-container text-on-primary">Hari Ini</button>
<button class="px-4 py-1.5 text-body-sm font-label-md rounded-md text-on-surface hover:bg-surface-container">7 Hari</button>
<button class="px-4 py-1.5 text-body-sm font-label-md rounded-md text-on-surface hover:bg-surface-container">30 Hari</button>
<button class="px-4 py-1.5 text-body-sm font-label-md rounded-md text-on-surface hover:bg-surface-container flex items-center gap-1">Custom <span class="material-symbols-outlined text-[16px]">arrow_drop_down</span></button> -->
</div>
</div>
<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-6">
<div class="bg-surface-container-lowest border border-outline-variant p-4 shadow-sm flex flex-col rounded-lg">
<div class="flex justify-between items-start mb-4">
<span class="font-label-md text-label-md text-on-surface-variant">Total Kendaraan</span>
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-container text-[20px]" data-icon="directions_car">directions_car</span>
</div>
</div>
<div class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($totalkendaraan) }}</div>
<div class="mt-2 flex items-center gap-1 text-secondary">
<span class="material-symbols-outlined text-[16px]" data-icon="trending_up"></span>
<span class="font-body-sm text-body-sm"></span>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-4 shadow-sm flex flex-col rounded-lg">
<div class="flex justify-between items-start mb-4">
<span class="font-label-md text-label-md text-on-surface-variant">Total Pengunjung</span>
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-container text-[20px]" data-icon="group">group</span>
</div>
</div>
<div class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($sedangBerkunjung) }}</div>
<div class="mt-2 flex items-center gap-1 text-secondary">
<span class="material-symbols-outlined text-[16px]" data-icon="trending_up"></span>
<span class="font-body-sm text-body-sm"></span>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-4 shadow-sm flex flex-col rounded-lg">
<div class="flex justify-between items-start mb-4">
<span class="font-label-md text-label-md text-on-surface-variant">Total Transaksi</span>
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-container text-[20px]" data-icon="receipt_long">receipt_long</span>
</div>
</div>
<div class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($totaltransaksi) }}</div>
<div class="mt-2 flex items-center gap-1 text-secondary">
<span class="material-symbols-outlined text-[16px]" data-icon="trending_up"></span>
<span class="font-body-sm text-body-sm"></span>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-4 shadow-sm flex flex-col rounded-lg">
<div class="flex justify-between items-start mb-4">
<span class="font-label-md text-label-md text-on-surface-variant">Total Pendapatan</span>
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-container text-[20px]" data-icon="payments">payments</span>
</div>
</div>
<div class="font-headline-lg text-[22px] font-bold text-on-surface" id="card-total-pendapatan">{{ number_format($totalpendapatan, 0, ',','.') }}</div>
<div class="mt-2 flex items-center gap-1 text-secondary">
<span class="material-symbols-outlined text-[16px]" data-icon="trending_up"></span>
<span class="font-body-sm text-body-sm"></span>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-4 shadow-sm flex flex-col rounded-lg">
<div class="flex justify-between items-start mb-4">
<span class="font-label-md text-label-md text-on-surface-variant">Rata-rata Durasi</span>
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-container text-[20px]" data-icon="timer">timer</span>
</div>
</div>
<div class="font-headline-lg text-headline-lg text-on-surface">{{ $avgjamtext }}</div>
<div class="mt-2 flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-[16px]" data-icon="horizontal_rule"></span>
<span class="font-body-sm text-body-sm"></span>
</div>
</div>
</div>
<!-- First Row Charts -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
<!-- Aktivitas Kendaraan Chart -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 shadow-sm rounded-lg">
    <h3 class="font-title-md text-title-md text-on-surface mb-4">Aktivitas Kendaraan</h3>
    <div id="chartAktivitas"></div>
</div>
<!-- Pendapatan Parkir Chart -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 shadow-sm flex flex-col rounded-lg">
    <h3 class="font-title-md text-title-md text-on-surface mb-2">Pendapatan Parkir</h3>
    <div class="font-display-sm text-display-sm text-on-surface mb-4" id="chart-total-header">
        Rp {{ number_format($totalpendapatan, 0, ',', '.') }}
    </div>
    <div id="chartPendapatan"></div>
</div>
</div>
<!-- Second Row Charts -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
<!-- Tingkat Hunian Parkir -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 shadow-sm flex flex-col lg:flex-row items-center gap-6 rounded-lg">
    
    <!-- Kiri: Legenda Area Parkir -->
    <div class="w-full lg:w-1/2 flex flex-col">
        <h3 class="font-title-md text-title-md text-on-surface mb-6">Tingkat Hunian Parkir</h3>
        
        @php
            $colors = ['bg-primary-container', 'bg-primary-fixed-dim', 'bg-secondary-fixed', 'bg-tertiary-fixed'];
        @endphp

        <div class="space-y-4 w-full">
            @forelse($areas as $index => $area)
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full {{ $colors[$index % count($colors)] }}"></div>
                        <span class="text-body-sm text-on-surface">{{ $area->nama_area }}</span>
                    </div>
                    <span class="text-label-md font-bold text-on-surface">{{ $area->occupancy_calc }}%</span>
                </div>
            @empty
                <p class="text-body-sm text-on-surface-variant">Belum ada data area.</p>
            @endforelse
        </div>
    </div> 

    <!-- Kanan: ApexChart Donut -->
    <div class="w-full lg:w-1/2 flex justify-center items-center relative">
        <div id="chartHunian"></div>
        <div class="absolute flex flex-col items-center justify-center pointer-events-none">
            <span class="text-headline-md font-bold text-on-surface">{{ $totalTerisi }}</span>
            <span class="text-[10px] font-label-md text-on-surface-variant uppercase text-center">Terisi</span>
        </div>
    </div>

</div>
<!-- Tren Pengunjung -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 shadow-sm rounded-lg">
<h3 class="font-title-md text-title-md text-on-surface mb-6">Tren Pengunjung</h3>
<div class="h-48 flex items-end justify-between gap-4 px-2">
<div class="w-full flex justify-around items-end h-full">
<!-- Bar Group 1 -->
<div class="w-1/5 flex flex-col justify-end gap-1 h-full items-center">
<div class="w-8 bg-primary-container rounded-t-sm" style="height: 60%"></div>
<div class="w-8 bg-tertiary-fixed-dim rounded-t-sm" style="height: 30%"></div>
</div>
<!-- Bar Group 2 -->
<div class="w-1/5 flex flex-col justify-end gap-1 h-full items-center">
<div class="w-8 bg-primary-container rounded-t-sm" style="height: 80%"></div>
<div class="w-8 bg-tertiary-fixed-dim rounded-t-sm" style="height: 40%"></div>
</div>
<!-- Bar Group 3 -->
<div class="w-1/5 flex flex-col justify-end gap-1 h-full items-center">
<div class="w-8 bg-primary-container rounded-t-sm" style="height: 50%"></div>
<div class="w-8 bg-tertiary-fixed-dim rounded-t-sm" style="height: 25%"></div>
</div>
<!-- Bar Group 4 -->
<div class="w-1/5 flex flex-col justify-end gap-1 h-full items-center">
<div class="w-8 bg-primary-container rounded-t-sm" style="height: 90%"></div>
<div class="w-8 bg-tertiary-fixed-dim rounded-t-sm" style="height: 55%"></div>
</div>
</div>
</div>
<div class="mt-6 flex justify-center gap-6 border-t border-outline-variant/30 pt-4">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-primary-container"></div>
<span class="text-body-sm text-on-surface-variant">Penghuni</span>
</div>
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-tertiary-fixed-dim"></div>
<span class="text-body-sm text-on-surface-variant">Tamu</span>
</div>
</div>
</div>
</div>
<!-- Summary Table -->
<div class="bg-surface-container-lowest border border-outline-variant shadow-sm overflow-hidden w-full rounded-lg">
<div class="p-6 border-b border-outline-variant">
<h3 class="font-title-md text-title-md text-on-surface">Ringkasan Area Parkir</h3>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-low border-b border-outline-variant">
<tr>
<th class="px-6 py-4 text-label-md font-label-md text-on-surface-variant">Area</th>
<th class="px-6 py-4 text-label-md font-label-md text-on-surface-variant text-right">Kapasitas</th>
<th class="px-6 py-4 text-label-md font-label-md text-on-surface-variant text-right">Terisi</th>
<th class="px-6 py-4 text-label-md font-label-md text-on-surface-variant text-right">Tersedia</th>
<th class="px-6 py-4 text-label-md font-label-md text-on-surface-variant">Occupancy</th>
<th class="px-6 py-4 text-label-md font-label-md text-on-surface-variant">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/50">
    @forelse($areas as $area)
        <tr class="hover:bg-surface-container/50 transition-colors">
            <td class="px-6 py-4 text-body-md text-on-surface font-medium">{{ $area->nama_area }}</td>
            <td class="px-6 py-4 text-body-md text-on-surface text-right">{{ number_format($area->kapasitas_calc) }}</td>
            <td class="px-6 py-4 text-body-md text-on-surface text-right">{{ number_format($area->terisi_calc) }}</td>
            <td class="px-6 py-4 text-body-md text-on-surface text-right">{{ number_format($area->tersedia_calc) }}</td>
            <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                    <div class="w-full bg-surface-container rounded-full h-2 max-w-[100px]">
                        <div class="bg-primary-container h-2 rounded-full" style="width: {{ $area->occupancy_calc }}%"></div>
                    </div>
                    <span class="text-body-sm text-on-surface-variant">{{ $area->occupancy_calc }}%</span>
                </div>
            </td>
            <td class="px-6 py-4">
                <span class="inline-flex items-center px-2 py-1 rounded-md {{ $area->status_color }} text-label-md">
                    {{ $area->status_label }}
                </span>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="px-6 py-4 text-center text-on-surface-variant">Belum ada data area.</td>
        </tr>
    @endforelse
</tbody>
</table>
</div>
</div>
</main>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // 1. CHART AKTIVITAS KENDARAAN (BAR CHART)
    var optionsAktivitas = {
        chart: { type: 'bar', height: 260, toolbar: { show: false }, animations: { enabled: true, speed: 800 } },
        colors: ['#2563eb', '#006c49'],
        series: [
            { name: 'Kendaraan Masuk', data: @json($jamMasuk) },
            { name: 'Kendaraan Keluar', data: @json($jamKeluar) }
        ],
        xaxis: { categories: ['06:00', '09:00', '12:00', '15:00', '18:00', '21:00'] },
        plotOptions: { bar: { columnWidth: '45%', borderRadius: 4 } },
        dataLabels: { enabled: false }
    };
    new ApexCharts(document.querySelector("#chartAktivitas"), optionsAktivitas).render();

    // 2. CHART PENDAPATAN PARKIR (APEXCHARTS WAVE)
    var optionsPendapatan = {
        chart: { type: 'area', height: 200, toolbar: { show: false }, animations: { enabled: true, speed: 1000 } },
        colors: ['#2563eb'],
        stroke: { curve: 'smooth', width: 3 },
        fill: { type: 'gradient', gradient: { opacityFrom: 0.4, opacityTo: 0.05 } },
        series: [{ name: 'Pendapatan', data: @json($chartPendapatanData) }],
        xaxis: { categories: @json($chartPendapatanDates) },
        yaxis: { labels: { formatter: (val) => "Rp " + Math.round(val).toLocaleString('id-ID') } }
    };
    var chartPendapatan = new ApexCharts(document.querySelector("#chartPendapatan"), optionsPendapatan);
    chartPendapatan.render();

    // 3. DONUT CHART TINGKAT HUNIAN
    var optionsHunian = {
        chart: { type: 'donut', height: 220, animations: { enabled: true, speed: 800 } },
        colors: ['#2563eb', '#b4c5ff', '#6ffbbe'],
        labels: @json($donutLabels),
        series: @json($donutSeries),
        legend: { show: false },
        dataLabels: { enabled: false },
        plotOptions: { pie: { donut: { size: '75%' } } }
    };
    new ApexCharts(document.querySelector("#chartHunian"), optionsHunian).render();

    // 4. AUTO REFRESH REAL-TIME UNTUK TOTAL PENDAPATAN & GRAFIK (SETIAP 3 DETIK)
    async function refreshAnalitikData() {
        try {
            const res = await fetch("{{ route('analitik.chartdataanalis') }}");
            const result = await res.json();

            if (res.ok) {
                // Update Angka di KPI Card & Header Chart
                const elCard = document.getElementById('card-total-pendapatan');
                const elHeader = document.getElementById('chart-total-header');

                if (elCard) elCard.innerText = "Rp " + Math.round(result.total_pendapatan).toLocaleString('id-ID');
                if (elHeader) elHeader.innerText = "Rp " + Math.round(result.total_pendapatan).toLocaleString('id-ID');

                // Update Data ApexCharts Real-Time
                chartPendapatan.updateOptions({
                    xaxis: { categories: result.labels }
                });
                chartPendapatan.updateSeries([{
                    name: 'Pendapatan',
                    data: result.data
                }]);
            }
        } catch (err) {
            console.error('Gagal memperbarui analitik:', err);
        }
    }

    // Jalankan refresh otomatis tiap 3 detik
    setInterval(refreshAnalitikData, 3000);
});
</script>
</body>
</html>
</body></html>