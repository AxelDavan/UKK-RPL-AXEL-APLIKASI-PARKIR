<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Safe Park - Beranda</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#505f76",
                        "error": "#ba1a1a",
                        "surface": "#faf8ff",
                        "background": "#faf8ff",
                        "surface-bright": "#faf8ff",
                        "on-error-container": "#93000a",
                        "primary": "#004ac6",
                        "secondary-fixed": "#d3e4fe",
                        "on-secondary-container": "#54647a",
                        "surface-variant": "#e1e2ed",
                        "primary-container": "#2563eb",
                        "outline": "#737686",
                        "on-secondary-fixed-variant": "#38485d",
                        "tertiary-fixed-dim": "#bec6e0",
                        "surface-container-highest": "#e1e2ed",
                        "on-tertiary": "#ffffff",
                        "outline-variant": "#c3c6d7",
                        "on-primary": "#ffffff",
                        "surface-dim": "#d9d9e5",
                        "inverse-on-surface": "#f0f0fb",
                        "primary-fixed": "#dbe1ff",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-surface": "#191b23",
                        "surface-container-low": "#f3f3fe",
                        "secondary-fixed-dim": "#b7c8e1",
                        "surface-container-high": "#e7e7f3",
                        "surface-tint": "#0053db",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-container": "#ededf9",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#dae2fd",
                        "on-primary-fixed-variant": "#003ea8",
                        "secondary-container": "#d0e1fb",
                        "on-background": "#191b23",
                        "on-tertiary-container": "#eef0ff",
                        "inverse-surface": "#2e3039",
                        "tertiary-container": "#656d84",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#00174b",
                        "inverse-primary": "#b4c5ff",
                        "on-tertiary-fixed": "#131b2e",
                        "on-primary-container": "#eeefff",
                        "tertiary": "#4d556b",
                        "on-surface-variant": "#434655",
                        "on-error": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xl": "32px",
                        "unit": "4px",
                        "sm": "8px",
                        "margin-desktop": "32px",
                        "xs": "4px",
                        "md": "16px",
                        "lg": "24px",
                        "margin-mobile": "16px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "display-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "label-lg": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "label-md": ["11px", { "lineHeight": "16px", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-background text-on-background antialiased flex">

<!-- SIDEBAR -->
<nav class="bg-surface border-r border-outline-variant h-screen w-64 fixed left-0 top-0 hidden md:flex flex-col">
    <div class="p-lg">
        <h1 class="font-title-lg text-title-lg font-bold text-primary">Safe Park</h1>
        <p class="font-body-md text-body-md text-secondary mt-1">Smart Apartment Parking</p>
    </div>
    <div class="flex flex-col h-full py-lg px-md gap-sm">
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
            <span class="font-title-md text-title-md">Beranda</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('pemesanan') }}">
            <span class="material-symbols-outlined">directions_car</span>
            <span class="font-title-md text-title-md">Pemesanan</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('kendaraan') }}">
            <span class="material-symbols-outlined">garage</span>
            <span class="font-title-md text-title-md">Kendaraan</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('invite') }}">
            <span class="material-symbols-outlined">person_add</span>
            <span class="font-title-md text-title-md">Undang Tamu</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-title-md text-title-md">Profile</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="#">
            <span class="material-symbols-outlined">help</span>
            <span class="font-title-md text-title-md">Bantuan</span>
        </a>
    </div>
</nav>

<!-- MAIN CONTENT AREA -->
<div class="flex-1 ml-0 md:ml-64 flex flex-col min-h-screen">
    <!-- TOP NAVBAR -->
    <header class="bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm sticky top-0 z-40">
        <div class="flex justify-between items-center w-full px-6 py-3">
            <div class="md:hidden">
                <h1 class="text-lg font-bold text-primary">Safe Park</h1>
            </div>
            <div class="flex-1"></div>
        </div>
    </header>

    <!-- MAIN CANVAS -->
    <main class="flex-1 p-6 space-y-6 bg-surface-container-lowest">
        <!-- Welcome Header -->
        <div>
            <h2 class="text-2xl font-bold text-on-background">Selamat datang, {{ auth()->user()->name ?? 'Penghuni' }}</h2>
            <p class="text-secondary mt-1">Kelola kendaraan, pemesanan parkir, dan akses tamu Anda.</p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            
            <!-- Quick Stats (8 Cols) -->
            <div class="md:col-span-8 grid grid-cols-2 md:grid-cols-4 gap-4">
                
                <!-- Card 1: Kendaraan -->
                <div class="bg-surface rounded-xl p-4 border border-outline-variant shadow-sm flex flex-col items-center justify-center text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                    <span class="material-symbols-outlined text-primary mb-2 text-3xl">directions_car</span>
                    <p class="text-xs text-secondary font-semibold">Kendaraan</p>
                    <p class="text-base font-bold text-on-background mt-1">{{ $totalKendaraan ?? 0 }} Terdaftar</p>
                </div>

                <!-- Card 2: Status Parkir -->
                <div class="bg-surface rounded-xl p-4 border border-outline-variant shadow-sm flex flex-col items-center justify-center text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-secondary"></div>
                    <span class="material-symbols-outlined text-primary mb-2 text-3xl">local_parking</span>
                    <p class="text-xs text-secondary font-semibold">Status</p>
                    <p class="text-base font-bold text-on-background mt-1" id="val-status-text">
                        {{ $parkiraktif ? 'Parkir Aktif' : 'Tidak Ada' }}
                    </p>
                </div>

                <!-- Card 3: Okupansi -->
                <div class="bg-surface rounded-xl p-4 border border-outline-variant shadow-sm flex flex-col items-center justify-center text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                    <span class="material-symbols-outlined text-primary mb-2 text-3xl">grid_view</span>
                    <p class="text-xs text-secondary font-semibold">Okupansi</p>
                    <div class="w-full px-2 mt-2">
                        <div class="h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-primary" id="bar-okupansi" style="width: {{ $persenokupansi ?? 0 }}%"></div>
                        </div>
                        <p class="text-[11px] text-secondary mt-1" id="val-okupansi-text">{{ $slotterisi ?? 0 }}/{{ $totalslot ?? 150 }} Digunakan</p>
                    </div>
                </div>

                <!-- Card 4: Tamu Aktif -->
                <div class="bg-surface rounded-xl p-4 border border-outline-variant shadow-sm flex flex-col items-center justify-center text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-secondary"></div>
                    <span class="material-symbols-outlined text-primary mb-2 text-3xl">group</span>
                    <p class="text-xs text-secondary font-semibold">Tamu Aktif</p>
                    <p class="text-base font-bold text-on-background mt-1" id="val-tamu-aktif">{{ $tamuaktif ?? 0 }} Tamu</p>
                </div>
            </div>

            <!-- Current Parking Status Card (4 Cols) -->
            <div class="md:col-span-4 bg-surface rounded-xl p-6 border border-outline-variant shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">local_parking</span>
                            <h3 class="font-bold text-on-background">Parkir Aktif</h3>
                        </div>
                        <span class="px-2.5 py-1 bg-blue-100 text-primary text-xs font-semibold rounded-full" id="val-area-name">
                            {{ $parkiraktif->areaParkir->nama_area ?? 'Tower A' }}
                        </span>
                    </div>

                    <div class="space-y-3 mb-6 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-secondary">Kendaraan</span>
                            <span class="text-on-background font-bold" id="val-jenis-kendaraan">
                                {{ $parkiraktif->jenis_kendaraan ?? ($parkiraktif->kendaraan->jenis_kendaraan ?? '-') }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-secondary">Plat Nomor</span>
                            <span class="text-on-background font-bold font-mono" id="val-nomor-plat">
                                {{ $parkiraktif->nomor_plat ?? '-' }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-secondary">Lokasi</span>
                            <span class="text-on-background font-bold" id="val-lokasi">
                                {{ $parkiraktif->areaParkir->nama_area ?? '-' }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-secondary">Waktu Masuk</span>
                            <span class="text-on-background font-bold font-mono" id="val-waktu-masuk">
                                {{ $parkiraktif && $parkiraktif->waktu_masuk ? \Carbon\Carbon::parse($parkiraktif->waktu_masuk)->format('H:i') . ' WIB' : '-' }}
                            </span>
                        </div>
                        
                        <div class="pt-4 border-t border-outline-variant flex flex-col items-center">
                            <p class="text-secondary text-xs uppercase tracking-wider font-semibold">Durasi Parkir</p>
                            <p class="text-2xl font-bold text-primary font-mono mt-1" id="timer-durasi">00:00:00</p>
                        </div>
                    </div>
                </div>

                <button class="w-full bg-primary text-white py-2.5 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                    Lihat Detail
                </button>
            </div>

            <!-- Quick Actions -->
            <div class="md:col-span-12">
                <h3 class="font-bold text-on-background mb-4">Aksi Cepat</h3>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('pemesanan') }}" class="flex-1 min-w-[160px] flex flex-col items-center gap-2 bg-surface border border-outline-variant rounded-xl p-5 hover:bg-surface-container transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-primary text-3xl">add_circle</span>
                        <span class="font-semibold text-sm">Pesan Parkir</span>
                    </a>
                    <a href="{{ route('kendaraan') }}" class="flex-1 min-w-[160px] flex flex-col items-center gap-2 bg-surface border border-outline-variant rounded-xl p-5 hover:bg-surface-container transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-primary text-3xl">directions_car</span>
                        <span class="font-semibold text-sm text-on-background">Daftar Mobil</span>
                    </a>
                    <a href="{{ route('invite') }}" class="flex-1 min-w-[160px] flex flex-col items-center gap-2 bg-surface border border-outline-variant rounded-xl p-5 hover:bg-surface-container transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-primary text-3xl">person_add</span>
                        <span class="font-semibold text-sm text-on-background">Undang Tamu</span>
                    </a>
                    <a href="#" class="flex-1 min-w-[160px] flex flex-col items-center gap-2 bg-surface border border-outline-variant rounded-xl p-5 hover:bg-surface-container transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-primary text-3xl">visibility</span>
                        <span class="font-semibold text-sm text-on-background">List Tamu</span>
                    </a>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="md:col-span-12">
                <h3 class="font-bold text-on-background mb-4">Aktivitas Terbaru</h3>
                <div class="bg-surface rounded-xl border border-outline-variant overflow-hidden">
                    <div class="divide-y divide-outline-variant">
                        @forelse($aktivitas ?? [] as $act)
                            <div class="p-4 flex items-center gap-4 hover:bg-surface-container transition-colors">
                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-primary shrink-0">
                                    <span class="material-symbols-outlined">
                                        {{ $act->status == 'aktif' ? 'login' : 'logout' }}
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold text-on-background">
                                        Kendaraan {{ $act->status == 'aktif' ? 'Masuk' : 'Keluar' }}
                                    </p>
                                    <p class="text-xs text-secondary">
                                        {{ $act->jenis_kendaraan ?? 'Mobil' }} • {{ $act->nomor_plat }}
                                    </p>
                                </div>
                                <span class="text-xs text-secondary font-mono">
                                    {{ $act->created_at ? $act->created_at->format('H:i') : '-' }}
                                </span>
                            </div>
                        @empty
                            <div class="p-4 text-center text-xs text-secondary">Belum ada aktivitas terbaru</div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<!-- REAL-TIME TIMER & STATS POLLING SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Timer Durasi Parkir Real-Time
    const waktuMasukStr = "{{ $parkiraktif && $parkiraktif->waktu_masuk ? \Carbon\Carbon::parse($parkiraktif->waktu_masuk)->toIso8601String() : '' }}";
    let waktuMasukDate = waktuMasukStr ? new Date(waktuMasukStr) : null;

    function updateLiveTimer() {
        const timerEl = document.getElementById('timer-durasi');
        if (!timerEl) return;

        if (!waktuMasukDate) {
            timerEl.innerText = "00:00:00";
            return;
        }

        const now = new Date();
        const diffMs = Math.max(0, now - waktuMasukDate);

        const totalSeconds = Math.floor(diffMs / 1000);
        const hours   = String(Math.floor(totalSeconds / 3600)).padStart(2, '0');
        const minutes = String(Math.floor((totalSeconds % 3600) / 60)).padStart(2, '0');
        const seconds = String(totalSeconds % 60).padStart(2, '0');

        timerEl.innerText = `${hours}:${minutes}:${seconds}`;
    }

    updateLiveTimer();
    setInterval(updateLiveTimer, 1000);

    // 2. Refresh Okupansi & Stats Otomatis Via AJAX
    async function fetchLatestStats() {
        try {
            const response = await fetch("{{ route('owner.dashboard.stats') }}");
            if (!response.ok) return;

            const data = await response.json();

            const elOkupansi = document.getElementById('val-okupansi-text');
            const elTamu     = document.getElementById('val-tamu-aktif');
            const barOkupansi = document.getElementById('bar-okupansi');

            if (elOkupansi) elOkupansi.innerText = `${data.terisi_slot}/${data.total_slot} Digunakan`;
            if (elTamu) elTamu.innerText = `${data.tamu_aktif} Tamu`;
            if (barOkupansi) barOkupansi.style.width = `${data.persen_okupansi}%`;

            if (data.waktu_masuk) {
                waktuMasukDate = new Date(data.waktu_masuk);
            } else {
                waktuMasukDate = null;
            }
        } catch (err) {
            console.error("Gagal memperbarui status real-time:", err);
        }
    }

    setInterval(fetchLatestStats, 10000);
});
</script>

</body>
</html>