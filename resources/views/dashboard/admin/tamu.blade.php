@if (auth()->user()->role === 'admin')
    <!DOCTYPE html><html lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>List Pengunjung - Safe Park Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
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
                        "headline-md": ["Plus Jakarta Sans", "sans-serif"],
                        "body-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"],
                        "headline-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "code-sm": ["monospace"],
                        "title-md": ["Plus Jakarta Sans", "sans-serif"],
                        "title-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "display-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "label-md": ["Plus Jakarta Sans", "sans-serif"],
                        "sans": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    "fontSize": {
                        "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "body-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-lg": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "code-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "display-sm": ["30px", { "lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
<style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f8f9ff;
    }
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .material-symbols-outlined.fill-1 {
      font-variation-settings: 'FILL' 1;
    }
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #94a3b8;
    }
  </style>
</head>
<body class="text-slate-800 antialiased flex min-h-screen bg-[#f8f9ff]">
<!-- SIDEBAR (Desktop & Tablet) -->
<aside class="w-64 bg-white border-r border-slate-200 fixed inset-y-0 left-0 z-30 flex flex-col justify-between transition-all duration-300 hidden lg:flex">
<div>
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
</div>
<!-- Bottom Sidebar Section -->
<div class="p-4 border-t border-slate-100 space-y-1">
<a class="flex items-center gap-3 px-3.5 py-2 rounded-lg text-sm font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined text-slate-400">settings</span>
        Pengaturan
      </a>
<a class="flex items-center gap-3 px-3.5 py-2 rounded-lg text-sm font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined text-slate-400">help</span>
        Bantuan
      </a>
</div>
</aside>
<!-- MAIN WRAPPER -->
<div class="flex-1 lg:ml-64 flex flex-col min-w-0">
<!-- MAIN CONTENT CONTAINER -->
<main class="p-4 sm:p-6 lg:p-8 space-y-6 max-w-7xl w-full mx-auto">
<!-- PAGE TITLE & KPI SUMMARY -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-3">
<h2 class="text-2xl font-bold text-slate-900 tracking-tight">List Pengunjung</h2>

</div>
<p class="text-sm text-slate-500 mt-1">Kelola perizinan tamu, log waktu check-in, dan validasi akses apartemen Safe Park.</p>
</div>
<!-- Top Action Buttons -->
<div class="flex items-center gap-2.5 self-start md:self-auto">
<button type="button" 
        onclick="exportTableToCSV('data_pengunjung_safepark.csv')" 
        class="inline-flex items-center gap-2 px-4 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl transition-all shadow-xs hover:border-slate-300" 
        id="btnExport">
    <span class="material-symbols-outlined text-slate-500 text-[18px]">download</span>
    <span>Export Data</span>
    <span class="text-[10px] bg-slate-100 text-slate-600 px-1.5 py-0.5 rounded font-mono font-medium">CSV/XLS</span>
</button>

</div>
</div>
<!-- METRIC CARDS -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sedang Berkunjung</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{  number_format($sedangBerkunjung) }}</h3>

</div>
<div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">meeting_room</span>
</div>
</div>
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sudah Check-Out</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{ number_format($sudahCheckout) }}</h3>

</div>
<div class="w-11 h-11 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">logout</span>
</div>
</div>
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Kunjungan Hari Ini</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{ number_format($totalHariIni) }}</h3>

</div>
<div class="w-11 h-11 rounded-xl bg-blue-50 text-primary-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">event_available</span>
</div>
</div>
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Parkir Tamu Terisi</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{ number_format($parkirTerisi) }} <span class="text-xs font-normal text-slate-400">/ {{ number_format($totalSlotTamu) }}</span></h3>

</div>
<div class="w-11 h-11 rounded-xl bg-blue-50 text-primary-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">local_parking</span>
</div>
</div>
</div>
<!-- FILTER & SEARCH BAR PANEL -->
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs space-y-4">
    <form method="GET" action="{{ route('tamu') }}" id="filterForm">
        <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-3">
            
            <!-- Search Input -->
            <div class="relative flex-1">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
                <input 
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-10 pr-9 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:bg-white transition-all" 
                    id="visitorSearchInput" 
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Nama pengunjung atau nomor plat" 
                    type="text"
                >
                @if(request('search'))
                    <a href="{{ route('tamu') }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                        <span class="material-symbols-outlined text-[18px]">close</span>
                    </a>
                @endif
            </div>

            <!-- Filter Controls Group -->
            <div class="flex flex-wrap sm:flex-nowrap items-center gap-2.5">
                
                <!-- Status Filter Dropdown -->
                <div class="relative min-w-[170px] flex-1 sm:flex-initial">
                    <select 
                        name="status" 
                        id="statusFilterSelect"
                        onchange="this.form.submit()"
                        class="w-full appearance-none bg-slate-50 border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs font-semibold text-slate-700 cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-500"
                    >
                        <option value="">Semua Status</option>
                        <option value="checked-in" {{ request('status') === 'checked-in' ? 'selected' : '' }}>Sedang Berkunjung</option>
                        <option value="checked-out" {{ request('status') === 'checked-out' ? 'selected' : '' }}>Sudah Check-Out</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[18px]">filter_list</span>
                </div>

                <!-- Reset Filter Button -->
                <a href="{{ route('tamu') }}" class="p-2.5 border border-slate-200 rounded-xl hover:bg-slate-50 text-slate-500 hover:text-slate-800 transition-colors flex items-center justify-center" title="Reset filter">
                    <span class="material-symbols-outlined text-[20px]">restart_alt</span>
                </a>
            </div>
        </div>

        <!-- Quick Filter Tags -->
        <div class="flex items-center gap-2 pt-3 overflow-x-auto text-xs pb-1">
            <span class="text-slate-400 font-medium whitespace-nowrap">Filter Cepat:</span>
            
            <a href="{{ route('tamu') }}" 
               class="px-3 py-1 rounded-full font-medium transition-colors {{ !request('status') ? 'bg-primary-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' }}">
                Semua
            </a>

            <a href="{{ route('tamu', ['status' => 'checked-in', 'search' => request('search')]) }}" 
               class="px-3 py-1 rounded-full font-medium transition-colors {{ request('status') === 'checked-in' ? 'bg-primary-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' }}">
                Sedang Berkunjung
            </a>

            <a href="{{ route('tamu', ['status' => 'checked-out', 'search' => request('search')]) }}" 
               class="px-3 py-1 rounded-full font-medium transition-colors {{ request('status') === 'checked-out' ? 'bg-primary-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' }}">
                Check-Out
            </a>
        </div>
    </form>
</div>
<!-- MAIN TABLE & CARDS SECTION -->
<div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
<!-- Table Desktop View (Hidden on mobile) -->
<div class="hidden md:block overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-slate-200 bg-slate-50/70 text-[11px] font-bold uppercase tracking-wider text-slate-500">
<th class="py-3.5 px-4 w-12 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500 cursor-pointer" type="checkbox">
</th>
<th class="py-3.5 px-4">Informasi Pengunjung</th>
<th class="py-3.5 px-4">Tuan Rumah (Host)</th>
<th class="py-3.5 px-4">Waktu Check-In / Out</th>
<th class="py-3.5 px-4">Status</th>
<th class="py-3.5 px-4 text-center w-28">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-sm font-normal text-slate-700">
@forelse($daftartamu as $tamu)
<tr class="hover:bg-slate-50/80 transition-colors group">
    <td class="py-3.5 px-4 text-center">
        <input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500 cursor-pointer" type="checkbox">
    </td>
    <td class="py-3.5 px-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-blue-100 text-primary-700 font-bold flex items-center justify-center border border-blue-200 text-sm">
                <span class="material-symbols-outlined text-[20px]">
                    {{ strtolower($tamu->jenis_kendaraan ?? '') == 'motor' ? 'two_wheeler' : 'directions_car' }}
                </span>
            </div>
            <div>
                <!-- Nama Asli Tamu -->
                <div class="font-bold text-slate-900 leading-snug">
                    {{ $tamu->nama_tamu ?? 'Tamu (Undangan)' }} ({{ ucfirst($tamu->jenis_kendaraan ?? 'Mobil') }})
                </div>
                <div class="mt-1">
                    <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-slate-100 border border-slate-200 text-xs font-mono font-bold text-slate-700">
                        <span class="material-symbols-outlined text-[13px] text-slate-500">directions_car</span>
                        {{ $tamu->nomor_plat }}
                    </span>
                </div>
            </div>
        </div>
    </td>
    <td class="py-3.5 px-4">
        @if(str_contains(strtolower($tamu->nama_tamu ?? ''), 'karcis') || is_null($tamu->user_id) || ($tamu->user && $tamu->user->role === 'petugas'))
            <div class="font-semibold text-slate-900">Walk-in / Karcis</div>
            <div class="text-xs text-slate-500 font-medium">Unit: Slot Parkir Tamu</div>
        @else
            <div class="font-semibold text-slate-900">{{ $tamu->user->name ?? 'Residen' }}</div>
            <div class="text-xs text-primary-600 font-medium">Unit: {{ $tamu->user->nomor_unit ?? 'Unit Residen' }}</div>
        @endif
    </td>
    <td class="py-3.5 px-4">
        <div class="flex flex-col text-xs">
            <span class="font-semibold text-emerald-700 flex items-center gap-1">
                In: {{ $tamu->waktu_masuk ? \Carbon\Carbon::parse($tamu->waktu_masuk)->format('H:i') : '-' }} WIB
            </span>
            <span class="text-slate-400 mt-0.5">
                Out: {{ $tamu->waktu_keluar ? \Carbon\Carbon::parse($tamu->waktu_keluar)->format('H:i') . ' WIB' : '— (Aktif)' }}
            </span>
        </div>
    </td>
    <td class="py-3.5 px-4">
        @if($tamu->status === 'menunggu')
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200/80">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                Menunggu Kedatangan
            </span>
        @elseif($tamu->status === 'di_dalam' || $tamu->status === 'aktif')
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                Sedang Berkunjung
            </span>
        @else
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                Selesai (Checked Out)
            </span>
        @endif
    </td>
    <td class="py-3.5 px-4 text-center">
        <div class="flex items-center justify-center gap-1.5">
            @if(is_null($tamu->waktu_keluar) && ($tamu->status === 'aktif' || $tamu->status === 'di_dalam'))
                <form action="{{ route('tamu.checkout', $tamu->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-colors" title="Check Out">
                        <span class="material-symbols-outlined text-[19px]">logout</span>
                    </button>
                </form>
            @endif

            <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                    <span class="material-symbols-outlined text-[19px]">delete</span>
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="6" class="py-8 text-center text-slate-400">Belum ada data pengunjung.</td>
</tr>
@endforelse
</tbody>
</table>
</div>

<!-- PAGINATION & FOOTER -->
<div class="px-4 sm:px-6 py-4 border-t border-slate-200 flex items-center justify-between">
    <div>
        {{ $daftartamu->links() }}
    </div>
</div>
</div>
</div>
</main>
</div>
<script>
function exportTableToCSV(filename) {
    let csv = [];
    let table = document.querySelector("table");
    if (!table) {
        alert("Tidak ada data tabel untuk diexport!");
        return;
    }

    let rows = table.querySelectorAll("tr");

    for (let i = 0; i < rows.length; i++) {
        let row = [], cols = rows[i].querySelectorAll("td, th");
        for (let j = 1; j < cols.length - 1; j++) {
            let text = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, " ").replace(/\s+/g, " ").trim();
            text = text.replace(/"/g, '""');
            row.push('"' + text + '"');
        }
        if (row.length > 0) {
            csv.push(row.join(","));
        }
    }

    let csvFile = new Blob(["\ufeff" + csv.join("\n")], { type: "text/csv;charset=utf-8;" });
    let downloadLink = document.createElement("a");
    downloadLink.download = filename;
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}
</script>
</body></html>
@endif

@if (auth()->user()->role === 'petugas')
    <!DOCTYPE html><html lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>List Pengunjung - Safe Park Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
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
                }
            }
        }
    </script>
<style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f8f9ff;
    }
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .material-symbols-outlined.fill-1 {
      font-variation-settings: 'FILL' 1;
    }
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #94a3b8;
    }
  </style>
</head>
<body class="text-slate-800 antialiased flex min-h-screen bg-[#f8f9ff]">
<!-- SIDEBAR (Desktop & Tablet) -->
<aside class="w-64 bg-white border-r border-slate-200 fixed inset-y-0 left-0 z-30 flex flex-col justify-between transition-all duration-300 hidden lg:flex">
<div>
<!-- ================= SIDEBAR SAFE PARK ================= -->
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
                   px-4 py-3 mx-2 rounded-lg
                   transition-colors
                   {{ request()->routeIs('tamu')
                        ? 'bg-secondary-container text-on-secondary-container font-bold'
                        : 'text-on-surface-variant' }}"
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
</div>
<!-- Bottom Sidebar Section -->
<div class="p-4 border-t border-slate-100 space-y-1">
<a class="flex items-center gap-3 px-3.5 py-2 rounded-lg text-sm font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined text-slate-400">settings</span>
        Pengaturan
      </a>
<a class="flex items-center gap-3 px-3.5 py-2 rounded-lg text-sm font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined text-slate-400">help</span>
        Bantuan
      </a>
</div>
</aside>
<!-- MAIN WRAPPER -->
<div class="flex-1 lg:ml-64 flex flex-col min-w-0">
<!-- MAIN CONTENT CONTAINER -->
<main class="p-4 sm:p-6 lg:p-8 space-y-6 max-w-7xl w-full mx-auto">
<!-- PAGE TITLE & KPI SUMMARY -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-3">
<h2 class="text-2xl font-bold text-slate-900 tracking-tight">List Pengunjung</h2>

</div>
<p class="text-sm text-slate-500 mt-1">Kelola perizinan tamu, log waktu check-in, dan validasi akses apartemen Safe Park.</p>
</div>
<!-- Top Action Buttons -->
<div class="flex items-center gap-2.5 self-start md:self-auto">
<button type="button" 
        onclick="exportTableToCSV('data_pengunjung_safepark.csv')" 
        class="inline-flex items-center gap-2 px-4 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl transition-all shadow-xs hover:border-slate-300" 
        id="btnExport">
    <span class="material-symbols-outlined text-slate-500 text-[18px]">download</span>
    <span>Export Data</span>
    <span class="text-[10px] bg-slate-100 text-slate-600 px-1.5 py-0.5 rounded font-mono font-medium">CSV/XLS</span>
</button>
</div>
</div>
<!-- METRIC CARDS -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sedang Berkunjung</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{  number_format($sedangBerkunjung) }}</h3>

</div>
<div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">meeting_room</span>
</div>
</div>
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sudah Check-Out</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{ number_format($sudahCheckout) }}</h3>

</div>
<div class="w-11 h-11 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">logout</span>
</div>
</div>
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Kunjungan Hari Ini</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{ number_format($totalHariIni) }}</h3>

</div>
<div class="w-11 h-11 rounded-xl bg-blue-50 text-primary-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">event_available</span>
</div>
</div>
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
<div>
<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Parkir Tamu Terisi</p>
<h3 class="text-2xl font-extrabold text-slate-900 mt-1">{{ number_format($parkirTerisi) }} <span class="text-xs font-normal text-slate-400">/ {{ number_format($totalSlotTamu) }}</span></h3>

</div>
<div class="w-11 h-11 rounded-xl bg-blue-50 text-primary-600 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">local_parking</span>
</div>
</div>
</div>
<!-- FILTER & SEARCH BAR PANEL -->
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs space-y-4">
    <form method="GET" action="{{ route('tamu') }}" id="filterForm">
        <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-3">
            
            <!-- Search Input -->
            <div class="relative flex-1">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
                <input 
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-10 pr-9 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:bg-white transition-all" 
                    id="visitorSearchInput" 
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Nama pengunjung atau nomor plat" 
                    type="text"
                >
                @if(request('search'))
                    <a href="{{ route('tamu') }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                        <span class="material-symbols-outlined text-[18px]">close</span>
                    </a>
                @endif
            </div>

            <!-- Filter Controls Group -->
            <div class="flex flex-wrap sm:flex-nowrap items-center gap-2.5">
                
                <!-- Status Filter Dropdown -->
                <div class="relative min-w-[170px] flex-1 sm:flex-initial">
                    <select 
                        name="status" 
                        id="statusFilterSelect"
                        onchange="this.form.submit()"
                        class="w-full appearance-none bg-slate-50 border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs font-semibold text-slate-700 cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-500"
                    >
                        <option value="">Semua Status</option>
                        <option value="checked-in" {{ request('status') === 'checked-in' ? 'selected' : '' }}>Sedang Berkunjung</option>
                        <option value="checked-out" {{ request('status') === 'checked-out' ? 'selected' : '' }}>Sudah Check-Out</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[18px]">filter_list</span>
                </div>

                <!-- Reset Filter Button -->
                <a href="{{ route('tamu') }}" class="p-2.5 border border-slate-200 rounded-xl hover:bg-slate-50 text-slate-500 hover:text-slate-800 transition-colors flex items-center justify-center" title="Reset filter">
                    <span class="material-symbols-outlined text-[20px]">restart_alt</span>
                </a>
            </div>
        </div>

        <!-- Quick Filter Tags -->
        <div class="flex items-center gap-2 pt-3 overflow-x-auto text-xs pb-1">
            <span class="text-slate-400 font-medium whitespace-nowrap">Filter Cepat:</span>
            
            <a href="{{ route('tamu') }}" 
               class="px-3 py-1 rounded-full font-medium transition-colors {{ !request('status') ? 'bg-primary-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' }}">
                Semua
            </a>

            <a href="{{ route('tamu', ['status' => 'checked-in', 'search' => request('search')]) }}" 
               class="px-3 py-1 rounded-full font-medium transition-colors {{ request('status') === 'checked-in' ? 'bg-primary-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' }}">
                Sedang Berkunjung
            </a>

            <a href="{{ route('tamu', ['status' => 'checked-out', 'search' => request('search')]) }}" 
               class="px-3 py-1 rounded-full font-medium transition-colors {{ request('status') === 'checked-out' ? 'bg-primary-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' }}">
                Check-Out
            </a>
        </div>
    </form>
</div>
<!-- MAIN TABLE & CARDS SECTION -->
<div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
<!-- Table Desktop View (Hidden on mobile) -->
<div class="hidden md:block overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-slate-200 bg-slate-50/70 text-[11px] font-bold uppercase tracking-wider text-slate-500">
<th class="py-3.5 px-4 w-12 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500 cursor-pointer" type="checkbox">
</th>
<th class="py-3.5 px-4">Informasi Pengunjung</th>
<th class="py-3.5 px-4">Tuan Rumah (Host)</th>
<th class="py-3.5 px-4">Waktu Check-In / Out</th>
<th class="py-3.5 px-4">Status</th>
<th class="py-3.5 px-4 text-center w-28">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-sm font-normal text-slate-700">
@forelse($daftartamu as $tamu)
<tr class="hover:bg-slate-50/80 transition-colors group">
    <td class="py-3.5 px-4 text-center">
        <input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500 cursor-pointer" type="checkbox">
    </td>
    <td class="py-3.5 px-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-blue-100 text-primary-700 font-bold flex items-center justify-center border border-blue-200 text-sm">
                <span class="material-symbols-outlined text-[20px]">
                    {{ strtolower($tamu->jenis_kendaraan ?? '') == 'motor' ? 'two_wheeler' : 'directions_car' }}
                </span>
            </div>
            <div>
                <!-- Nama Asli Tamu -->
                <div class="font-bold text-slate-900 leading-snug">
                    {{ $tamu->nama_tamu ?? 'Tamu (Undangan)' }} ({{ ucfirst($tamu->jenis_kendaraan ?? 'Mobil') }})
                </div>
                <div class="mt-1">
                    <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-slate-100 border border-slate-200 text-xs font-mono font-bold text-slate-700">
                        <span class="material-symbols-outlined text-[13px] text-slate-500">directions_car</span>
                        {{ $tamu->nomor_plat }}
                    </span>
                </div>
            </div>
        </div>
    </td>
    <td class="py-3.5 px-4">
        @if(str_contains(strtolower($tamu->nama_tamu ?? ''), 'karcis') || is_null($tamu->user_id) || ($tamu->user && $tamu->user->role === 'petugas'))
            <div class="font-semibold text-slate-900">Walk-in / Karcis</div>
            <div class="text-xs text-slate-500 font-medium">Unit: Slot Parkir Tamu</div>
        @else
            <div class="font-semibold text-slate-900">{{ $tamu->user->name ?? 'Residen' }}</div>
            <div class="text-xs text-primary-600 font-medium">Unit: {{ $tamu->user->nomor_unit ?? 'Unit Residen' }}</div>
        @endif
    </td>
    <td class="py-3.5 px-4">
        <div class="flex flex-col text-xs">
            <span class="font-semibold text-emerald-700 flex items-center gap-1">
                In: {{ $tamu->waktu_masuk ? \Carbon\Carbon::parse($tamu->waktu_masuk)->format('H:i') : '-' }} WIB
            </span>
            <span class="text-slate-400 mt-0.5">
                Out: {{ $tamu->waktu_keluar ? \Carbon\Carbon::parse($tamu->waktu_keluar)->format('H:i') . ' WIB' : '— (Aktif)' }}
            </span>
        </div>
    </td>
    <td class="py-3.5 px-4">
        @if($tamu->status === 'menunggu')
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200/80">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                Menunggu Kedatangan
            </span>
        @elseif($tamu->status === 'di_dalam' || $tamu->status === 'aktif')
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                Sedang Berkunjung
            </span>
        @else
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                Selesai (Checked Out)
            </span>
        @endif
    </td>
    <td class="py-3.5 px-4 text-center">
        <div class="flex items-center justify-center gap-1.5">
            @if(is_null($tamu->waktu_keluar) && ($tamu->status === 'aktif' || $tamu->status === 'di_dalam'))
                <form action="{{ route('tamu.checkout', $tamu->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-colors" title="Check Out">
                        <span class="material-symbols-outlined text-[19px]">logout</span>
                    </button>
                </form>
            @endif

            <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                    <span class="material-symbols-outlined text-[19px]">delete</span>
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="6" class="py-8 text-center text-slate-400">Belum ada data pengunjung.</td>
</tr>
@endforelse
</tbody>
</table>
</div>

<!-- PAGINATION & FOOTER -->
<div class="px-4 sm:px-6 py-4 border-t border-slate-200 flex items-center justify-between">
    <div>
        {{ $daftartamu->links() }}
    </div>
</div>
</div>
</div>
</main>
</div>
<script>
function exportTableToCSV(filename) {
    let csv = [];
    let table = document.querySelector("table");
    if (!table) {
        alert("Tidak ada data tabel untuk diexport!");
        return;
    }

    let rows = table.querySelectorAll("tr");

    for (let i = 0; i < rows.length; i++) {
        let row = [], cols = rows[i].querySelectorAll("td, th");
        for (let j = 1; j < cols.length - 1; j++) {
            let text = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, " ").replace(/\s+/g, " ").trim();
            text = text.replace(/"/g, '""');
            row.push('"' + text + '"');
        }
        if (row.length > 0) {
            csv.push(row.join(","));
        }
    }

    let csvFile = new Blob(["\ufeff" + csv.join("\n")], { type: "text/csv;charset=utf-8;" });
    let downloadLink = document.createElement("a");
    downloadLink.download = filename;
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}
</script>
</body></html>
@endif