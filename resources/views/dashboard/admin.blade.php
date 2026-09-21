<!DOCTYPE html><html lang="id" style="">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Ringkasan Dasbor - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .bento-large {
            grid-column: span 2;
        }

        @media (max-width: 1024px) {
            .bento-large {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md antialiased min-h-screen">
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

            


            <!-- Profile -->
            <li>
                <a
                    href="{{ route('profile.edit') }}"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        person
                    </span>

                    <span class="font-body-sm text-body-sm">
                        Profile
                    </span>
                </a>
            </li>

        </ul>

    </div>

</nav>
<!-- ================= END SIDEBAR ================= -->

<!-- Main Content Canvas -->
<main class="pt-24 pb-12 px-gutter md:ml-[260px] max-w-container-max mx-auto transition-all duration-200">
<!-- Page Header -->
<div class="mb-8">
<h2 class="font-display-sm text-display-sm text-on-surface mb-2">Ringkasan Dasbor</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Analitik parkir waktu nyata untuk sektor apartemen.</p>
</div>
<!-- Stats Bento Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
<!-- Stat Card 1 -->
<div class="glass-card p-stack-lg flex flex-col gap-4 relative overflow-hidden rounded-lg">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary-container rounded-full opacity-20 blur-xl"></div>
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-outline uppercase tracking-wider">Residents</p>
<a class="font-headline-lg text-headline-lg text-on-surface mt-1">{{ number_format($totalUsers) }}</a>
</div>
<div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">person</span>
</div>
</div>
<div class="flex items-center gap-1 text-secondary text-label-md font-label-md mt-auto">
<span class="material-symbols-outlined text-[16px]"></span>
<span class=""></span>
</div>
</div>
<!-- Stat Card 3 -->
<div class="glass-card p-stack-lg flex flex-col gap-4 rounded-lg">
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-outline uppercase tracking-wider">Tersedia</p>
<h3 class="font-headline-lg text-headline-lg text-on-surface mt-1">{{ number_format($slotTersedia) }}</h3>
</div>
<div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
</div>
</div>
<!-- Stat Card 4 (Progress) -->
<div class="glass-card p-stack-lg flex flex-col gap-4 bg-surface-container-lowest rounded-lg">
  <div class="flex justify-between items-start">
    <div>
      <p class="font-label-md text-label-md text-outline uppercase tracking-wider">Slot Terisi</p>
      <h3 class="font-headline-lg text-headline-lg text-on-surface mt-1">{{ number_format($slotTerisi) }}</h3>
    </div>
    <div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-error">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">directions_car</span>
    </div>
  </div>
  <div class="mt-auto">
    <div class="flex justify-between font-label-md text-label-md mb-2">
      <span class="text-on-surface-variant">{{ $occupancyPercent }}% Kapasitas</span>
      <span class="text-outline">{{ number_format($totalKapasitas) }} Total</span>
    </div>
    <div class="w-full h-2 bg-surface-variant rounded-full overflow-hidden">
      <div class="h-full bg-primary rounded-full" style="width: {{ $occupancyPercent }}%;"></div>
    </div>
  </div>
</div>
<!-- Stat Card 5 -->
<div class="glass-card p-stack-lg flex flex-col gap-4 rounded-lg">
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-outline uppercase tracking-wider">Pengunjung Hari Ini</p>
<h3 class="font-headline-lg text-headline-lg text-on-surface mt-1">
    {{ number_format($totalHariIni) }}
</h3>
</div>
<div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary-fixed-dim">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
</div>
</div>
<div class="flex items-center gap-1 text-secondary text-label-md font-label-md mt-auto">
<span class="material-symbols-outlined text-[16px]"></span>
<span class=""></span>
</div>
</div>
<!-- Stat Card 6 -->
<div class="glass-card p-stack-lg flex flex-col gap-4 relative overflow-hidden bg-primary-container text-on-primary-container border-none shadow-md rounded-lg">
<div class="absolute right-0 bottom-0 w-32 h-32 bg-white rounded-full opacity-10 blur-2xl translate-x-8 translate-y-8"></div>
<div class="flex justify-between items-start relative z-10">
<div>
<p class="font-label-md text-label-md opacity-80 uppercase tracking-wider">Pendapatan Hari Ini</p>
<h3 class="font-headline-lg text-headline-lg mt-1">Rp {{ number_format($pendapatanHariIni, 0, ',', '.') }}</h3>
</div>
<div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white backdrop-blur-sm">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
</div>
</div>
</div>
<!-- Stat Card 7 -->
<div class="glass-card p-stack-lg flex flex-col gap-4 relative overflow-hidden bg-primary-container text-on-primary-container border-none shadow-md rounded-lg">
<div class="absolute right-0 bottom-0 w-32 h-32 bg-white rounded-full opacity-10 blur-2xl translate-x-8 translate-y-8"></div>
<div class="flex justify-between items-start relative z-10">
<div>
<p class="font-label-md text-label-md opacity-80 uppercase tracking-wider">Pendapatan Slot Parkir</p>
<h3 class="font-headline-lg text-headline-lg mt-1">Rp {{ number_format($pendapatanSlotParkir ?? 0, 0, ',', '.') }}</h3>
</div>
<div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white backdrop-blur-sm">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
</div>
</div>
</div>
</div>
<!-- Charts Area -->
<div class="bento-grid mb-8">
<!-- Main Line Chart -->
<div class="glass-card p-stack-lg bento-large bg-surface-container-lowest flex flex-col rounded-lg">
<div class="flex justify-between items-center mb-6">
<h3 class="font-title-md text-title-md text-on-surface">Aktivitas Parkir Harian</h3>
</div>
<div class="flex-1 w-full h-64 relative">
<canvas id="dailyActivityChart" width="886" height="354" style="display: block; box-sizing: border-box; height: 236px; width: 590.7px;"></canvas>
</div>
</div>
<!-- Donut Chart -->
<div class="glass-card p-stack-lg bg-surface-container-lowest flex flex-col items-center rounded-lg">
  <h3 class="font-title-md text-title-md text-on-surface w-full text-left mb-6">Status Hunian</h3>
  <div class="relative w-48 h-48 mb-4">
    <canvas id="occupancyChart" width="288" height="288"></canvas>
    <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
      <span class="font-headline-md text-headline-md text-on-surface">{{ number_format($totalHunianAktif) }}</span>
      <span class="font-label-md text-label-md text-outline">Total</span>
    </div>
  </div>
  <div class="w-full flex justify-center gap-6 mt-4">
    <div class="flex items-center gap-2">
      <div class="w-3 h-3 rounded-full bg-primary"></div>
      <span class="font-label-md text-label-md text-on-surface-variant">Resident ({{ $residentPercent }}%)</span>
    </div>
    <div class="flex items-center gap-2">
      <div class="w-3 h-3 rounded-full bg-tertiary-fixed-dim"></div>
      <span class="font-label-md text-label-md text-on-surface-variant">Guest ({{ $guestPercent }}%)</span>
    </div>
  </div>
</div>
</div>
<!-- Bottom Area -->
<div class="bento-grid">
<!-- Bar Chart -->
<div class="glass-card p-stack-lg bg-surface-container-lowest flex flex-col rounded-lg">
<div class="flex justify-between items-center mb-6">
<h3 class="font-title-md text-title-md text-on-surface">Pengunjung Bulanan</h3>
</div>
<div class="flex-1 w-full h-48 relative">
<canvas id="monthlyVisitorChart" width="388" height="409" style="display: block; box-sizing: border-box; height: 272.7px; width: 258.7px;"></canvas>
</div>
</div>
<!-- Timeline / Recent Activity -->
<div class="glass-card p-stack-lg bg-surface-container-lowest bento-large flex flex-col rounded-lg">
  <div class="flex justify-between items-center mb-6 border-b border-outline-variant pb-4">
    <h3 class="font-title-md text-title-md text-on-surface">Aktivitas Terbaru</h3>
    <a class="font-label-md text-label-md text-primary hover:underline" href="{{ route('analitik') }}">Lihat Semua</a>
  </div>
  <div class="flex flex-col gap-0 relative">
    <div class="absolute left-[19px] top-4 bottom-4 w-px bg-outline-variant"></div>

    @forelse($recentActivities as $act)
      @php
        $isMasuk = is_null($act->waktu_keluar);
        $icon = $isMasuk ? 'login' : 'logout';
        $iconColor = $isMasuk ? 'text-primary' : 'text-tertiary';
        $tipe = $act->user_id ? 'Resident' : 'Tamu';
        $statusText = $isMasuk ? 'masuk ke' : 'keluar dari';
        $waktu = Carbon\Carbon::parse($act->updated_at)->diffForHumans();
      @endphp
      <div class="flex gap-4 py-3 relative z-10 hover:bg-surface-container-low transition-colors rounded-lg px-2 -mx-2">
        <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center {{ $iconColor }} shrink-0 ring-4 ring-surface-container-lowest">
          <span class="material-symbols-outlined text-[20px]">{{ $icon }}</span>
        </div>
        <div class="flex-1">
          <p class="font-body-md text-body-md text-on-surface">
            <span class="font-bold">{{ $act->kendaraan->nomor_plat ?? 'Kendaraan' }}</span> ({{ $tipe }}) {{ $statusText }} {{ $act->areaParkir->nama_area ?? 'Area Parkir' }}.
          </p>
          <p class="font-label-md text-label-md text-outline mt-1">{{ $waktu }}</p>
        </div>
        <div class="hidden sm:block">
          <span class="px-2 py-1 bg-surface-variant text-on-surface-variant font-label-md text-label-md rounded">
            {{ $act->areaParkir->nama_area ?? 'Parkir' }}
          </span>
        </div>
      </div>
    @empty
      <p class="text-body-sm text-outline py-4 text-center">Belum ada aktivitas transaksi terbaru.</p>
    @endforelse
  </div>
</div>
</div>
</main>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#213145',
                titleFont: { family: 'Plus Jakarta Sans', size: 13 },
                bodyFont: { family: 'Plus Jakarta Sans', size: 13 },
                padding: 12,
                cornerRadius: 8
            }
        }
    };

    // 1. CHART AKTIVITAS PARIKIR HARIAN (Real-time via fetch)
    const ctxLine = document.getElementById('dailyActivityChart').getContext('2d');
    const dailyActivityChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['06:00', '09:00', '12:00', '15:00', '18:00', '21:00', '00:00'],
            datasets: [
                {
                    label: 'Masuk',
                    data: [0, 0, 0, 0, 0, 0, 0],
                    borderColor: '#004ac6',
                    backgroundColor: 'rgba(0, 74, 198, 0.1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                },
                {
                    label: 'Keluar',
                    data: [0, 0, 0, 0, 0, 0, 0],
                    borderColor: '#ffb95f',
                    borderWidth: 2,
                    borderDash: [5, 5],
                    tension: 0.4,
                    fill: false
                }
            ]
        },
        options: {
            ...commonOptions,
            plugins: {
                legend: { display: true, position: 'top', align: 'end' }
            }
        }
    });

    async function updateDailyActivityChart() { 
        try { 
            const response = await fetch('/admin/dashboard/chart-data'); 
            if (response.ok) { 
                const data = await response.json(); 
                dailyActivityChart.data.labels = data.labels; 
                dailyActivityChart.data.datasets[0].data = data.masuk; 
                dailyActivityChart.data.datasets[1].data = data.keluar; 
                dailyActivityChart.update(); 
            } 
        } catch (error) { 
            console.error('Gagal update grafik:', error); 
        } 
    }
    
    // Load pertama kali
    updateDailyActivityChart();

    // 2. CHART STATUS HUNIAN (DONUT)
    const ctxDonut = document.getElementById('occupancyChart').getContext('2d');
    new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: ['Resident', 'Guest'],
            datasets: [{
                data: [{{ $residentCount }}, {{ $guestCount }}],
                backgroundColor: ['#004ac6', '#ffb95f'],
                borderWidth: 0
            }]
        },
        options: {
            ...commonOptions,
            cutout: '75%'
        }
    });

    // 3. CHART PENGUNJUNG BULANAN (BAR)
    const ctxBar = document.getElementById('monthlyVisitorChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: @json($monthlyLabels),
            datasets: [{
                label: 'Pengunjung',
                data: @json($monthlyData),
                backgroundColor: '#d3e4fe',
                hoverBackgroundColor: '#004ac6',
                borderRadius: 4
            }]
        },
        options: commonOptions
    });
});
</script>

</body></html>