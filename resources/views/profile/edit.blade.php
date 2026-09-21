@if (auth()->user()->role === 'admin')
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Profile - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                      "headline-md": ["Plus Jakarta Sans"],
                      "body-sm": ["Plus Jakarta Sans"],
                      "body-md": ["Plus Jakarta Sans"],
                      "headline-lg": ["Plus Jakarta Sans"],
                      "body-lg": ["Plus Jakarta Sans"],
                      "code-sm": ["monospace"],
                      "title-md": ["Plus Jakarta Sans"],
                      "title-lg": ["Plus Jakarta Sans"],
                      "display-sm": ["Plus Jakarta Sans"],
                      "label-md": ["Plus Jakarta Sans"]
              }
            }
          }
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8f9ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.fill { font-variation-settings: 'FILL' 1; }
</style>
</head>
<body class="bg-background text-on-surface antialiased min-h-screen font-body-md">

<!-- SIDEBAR ADMIN -->
<nav
    class="bg-surface-container-lowest w-sidebar-width h-full fixed left-0 top-0 border-r border-outline-variant shadow-sm z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col py-6"
    id="sidebar"
>
    <div class="px-6 mb-8 flex items-center gap-3">
        <div class="w-10 h-10 rounded-full overflow-hidden flex items-center justify-center shrink-0">
            <img src="{{ asset('image/screen.webp') }}" alt="Safe Park Logo" class="w-full h-full object-cover">
        </div>
        <div>
            <h1 class="text-title-lg font-title-lg font-bold text-primary">Safe Park</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Smart Parking Admin</p>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto">
        <ul class="space-y-1">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-body-md text-body-md">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.admin.kendaraan1') }}" class="flex items-center gap-3 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">directions_car</span>
                    <span class="font-body-md text-body-md">Kendaraan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pengguna') }}" class="flex items-center gap-3 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-body-md text-body-md">Manajemen Pengguna</span>
                </a>
            </li>
            <li>
                <a href="{{ route('peta') }}" class="flex items-center gap-3 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">local_parking</span>
                    <span class="font-body-md text-body-md">Area Parkir</span>
                </a>
            </li>
            <li>
                <a href="{{ route('analitik') }}" class="flex items-center gap-3 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">analytics</span>
                    <span class="font-body-md text-body-md">Analitik</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="px-6 mt-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-3 w-full px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-body-sm text-body-sm">Keluar</span>
            </button>
        </form>
    </div>
</nav>

<!-- MAIN CONTENT -->
<main class="ml-sidebar-width pt-16 p-gutter max-w-container-max mx-auto">
<div class="mb-8">
    <h2 class="font-headline-lg text-headline-lg text-on-surface">Pengaturan Profile</h2>
    <p class="font-body-md text-body-md text-on-surface-variant">Kelola informasi pribadi dan preferensi keamanan Anda.</p>
</div>

@if (session('success'))
    <div class="mb-6 p-4 rounded-lg bg-emerald-100 border border-emerald-300 text-emerald-800 text-sm font-semibold flex items-center gap-2">
        <span class="material-symbols-outlined">check_circle</span>
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Column: Profile Card -->
<div class="lg:col-span-1 flex flex-col gap-6">
    <div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm flex flex-col items-center text-center rounded-lg">
        <div class="relative mb-4">
            <!-- AVATAR INISIAL NAMA -->
            <div class="w-24 h-24 rounded-full bg-[#004ac6] text-white font-bold text-3xl flex items-center justify-center uppercase shadow-md ring-4 ring-blue-50 border-2 border-white">
                {{ strtoupper(substr($user->name, 0, 2)) }}
            </div>
        </div>
        <h3 class="font-title-lg text-title-lg text-on-surface mb-1 font-title-md">{{ $user->name }}</h3>
        <p class="font-body-md text-body-md text-primary font-medium mb-1 uppercase">{{ $user->role }}</p>
        <p class="font-body-sm text-body-sm text-on-surface-variant flex items-center justify-center gap-1">
            <span class="material-symbols-outlined text-[14px]">corporate_fare</span>Operations
        </p>
    </div>
</div>

<!-- Right Column: Settings & Forms -->
<div class="lg:col-span-2 flex flex-col gap-6">
    <!-- FORM INFORMASI PRIBADI -->
    <div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg">
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')

            <div class="flex justify-between items-center mb-6">
                <h3 class="font-title-md text-title-md text-on-surface">Informasi Pribadi</h3>
                <button type="submit" class="bg-primary hover:bg-primary-fixed-variant text-white px-4 py-2 rounded-lg font-label-md text-label-md transition-colors shadow-sm">
                    Simpan Perubahan
                </button>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface-variant mb-1">Nama Depan / Lengkap</label>
                    <input name="name" class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" type="text" value="{{ old('name', $user->name) }}" required>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface-variant mb-1">Email Publik</label>
                    <input name="email" class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" type="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface-variant mb-1">Nomor Telepon</label>
                    <input name="nomor_telepon" class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" type="tel" value="{{ old('nomor_telepon', $user->nomor_telepon ?? '') }}" placeholder="08xxxxxxxxxx">
                </div>
            </div>
        </form>
    </div>

    <!-- Keamanan Akun & Izin Sistem -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Security Card -->
        <div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg flex flex-col justify-between">
            <div>
                <h3 class="font-title-md text-title-md text-on-surface mb-4">Keamanan Akun</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center pb-4 border-b border-surface-variant">
                        <div>
                            <p class="font-body-md text-body-md text-on-surface font-medium">Kata Sandi</p>
                            <!-- STATUS KATA SANDI REAL-TIME -->
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Diperbarui {{ $user->updated_at ? $user->updated_at->diffForHumans() : 'baru saja' }}
                            </p>
                        </div>
                        <a class="px-3 py-1.5 bg-surface border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-variant transition-colors" href="{{ route('profile.password') }}">Ubah</a>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <p class="font-body-sm text-body-sm text-on-surface-variant">Pastikan kata sandi Anda menggunakan kombinasi huruf dan angka.</p>
            </div>
        </div>

        <!-- System Permissions -->
        <div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg">
            <h3 class="font-title-md text-title-md text-on-surface mb-4">Izin Sistem</h3>
            <ul class="space-y-3">
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary fill">check_circle</span>
                    <span class="font-body-md text-body-md text-on-surface">Akses Dashboard &amp; Analitik</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary fill">check_circle</span>
                    <span class="font-body-md text-body-md text-on-surface">Manajemen Pengguna (Admin)</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary fill">check_circle</span>
                    <span class="font-body-md text-body-md text-on-surface">Kontrol Gerbang &amp; Area Parkir</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Account Preferences (Next Update) -->
    <div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg opacity-80">
        <div class="flex justify-between items-center mb-4">
            <h3 class="font-title-md text-title-md text-on-surface">Preferensi Akun</h3>
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-800 border border-amber-200">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                Segera Hadir (Next Update)
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Bahasa -->
            <div>
                <label class="block font-label-md text-label-md text-on-surface-variant mb-1">Bahasa</label>
                <select disabled class="w-full h-10 px-3 bg-slate-100 border border-outline-variant rounded-lg text-body-md font-body-md text-slate-400 cursor-not-allowed">
                    <option>Bahasa Indonesia (Default)</option>
                </select>
            </div>

            <!-- Tema Tampilan -->
            <div>
                <label class="block font-label-md text-label-md text-on-surface-variant mb-1">Tema Tampilan</label>
                <select disabled class="w-full h-10 px-3 bg-slate-100 border border-outline-variant rounded-lg text-body-md font-body-md text-slate-400 cursor-not-allowed">
                    <option>Mode Terang (Default)</option>
                </select>
            </div>
        </div>
    </div>
</div>
</div>
</main>

</body>
</html>
@endif

@if (auth()->user()->role === 'owner')
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profile Saya - Safe Park</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #faf8ff; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
</style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen flex flex-col md:flex-row w-full">

<!-- SideNavBar (Desktop) -->
<nav class="bg-surface border-r border-outline-variant h-screen w-64 fixed left-0 top-0 hidden md:flex flex-col">
    <div class="p-lg">
        <h1 class="font-title-lg text-title-lg font-bold text-primary">Safe Park</h1>
        <p class="font-body-md text-body-md text-secondary mt-1">Smart Apartment Parking</p>
    </div>
    <div class="flex flex-col h-full py-lg px-md gap-sm">
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('dashboard') }}">
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
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10 " href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-title-md text-title-md">Profile</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="{{ route('bantuan') }}">
            <span class="material-symbols-outlined">help</span>
            <span class="font-title-md text-title-md">Bantuan</span>
        </a>
    </div>
</nav>

<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col w-full md:ml-64 min-h-screen pb-20 md:pb-0">
<main class="flex-1 p-6 md:p-8 w-full max-w-6xl mx-auto space-y-6">

    <div class="mb-6">
        <h2 class="text-2xl md:text-3xl font-bold text-on-surface">Profile Saya</h2>
        <p class="text-sm text-on-surface-variant mt-1">Kelola informasi akun dan data penghuni.</p>
    </div>

    @if (session('success'))
        <div class="p-4 rounded-lg bg-emerald-100 border border-emerald-300 text-emerald-800 text-sm font-semibold flex items-center gap-2">
            <span class="material-symbols-outlined">check_circle</span>
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
        <div class="md:col-span-8 flex flex-col gap-6">
            <!-- Profile Header Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200/80 flex flex-col md:flex-row items-center md:items-start gap-6 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 rounded-bl-full -z-0"></div>

                <!-- Avatar Inisial Nama -->
                <div class="relative z-10 w-20 h-20 rounded-full bg-[#004ac6] text-white font-bold text-3xl flex items-center justify-center uppercase shrink-0 shadow-md ring-4 ring-blue-50 border-2 border-white">
                    {{ strtoupper(substr($user->name, 0, 2)) }}
                </div>   

                <div class="flex-1 text-center md:text-left z-10">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-on-surface">{{ $user->name }}</h3>
                            <p class="text-sm text-on-surface-variant">{{ strtoupper($user->role) . ($user->nomor_unit ? ' - Unit ' . $user->nomor_unit : '') }}</p>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-50 text-[#004ac6] rounded-full text-xs font-semibold self-center md:self-auto border border-blue-100">
                            <span class="material-symbols-outlined text-sm">check_circle</span>
                            Akun Aktif
                        </span>
                    </div>
                </div>
            </div>

            <!-- Personal Information Form Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200/80">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="flex justify-between items-center mb-4 pb-2 border-b border-slate-100">
                        <h4 class="text-base font-semibold text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">badge</span>
                            Informasi Pribadi
                        </h4>
                        <button type="submit" class="bg-primary hover:bg-primary-fixed-variant text-white px-3.5 py-1.5 rounded-lg text-xs font-semibold transition-colors shadow-sm">
                            Simpan Perubahan
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1">
                            <label class="text-xs font-semibold text-on-surface-variant">Nama Lengkap</label>
                            <input name="name" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-sm text-on-surface focus:outline-none focus:border-primary" type="text" value="{{ old('name', $user->name) }}" required />
                        </div>

                        <div class="flex flex-col gap-1">
                            <label class="text-xs font-semibold text-on-surface-variant">Email</label>
                            <input name="email" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-sm text-on-surface focus:outline-none focus:border-primary" type="email" value="{{ old('email', $user->email) }}" required />
                        </div>

                        <div class="flex flex-col gap-1">
                            <label class="text-xs font-semibold text-on-surface-variant">Nomor Telepon</label>
                            <input name="nomor_telepon" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-sm text-on-surface focus:outline-none focus:border-primary" type="tel" value="{{ old('nomor_telepon', $user->nomor_telepon ?? '') }}" placeholder="08xxxxxxxxxx" />
                        </div>

                        <div class="flex flex-col gap-1">
                            <label class="text-xs font-semibold text-on-surface-variant">Unit</label>
                            <input class="w-full bg-slate-100 border border-slate-200 rounded-lg p-2.5 text-sm text-secondary cursor-not-allowed" readonly type="text" value="{{ $user->nomor_unit ?? 'A-1' }}" />
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="md:col-span-4 flex flex-col gap-6">
            <!-- Security Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200/80">
                <h4 class="text-base font-semibold text-on-surface mb-2 pb-2 border-b border-slate-100 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">security</span>
                    Keamanan Akun
                </h4>
                <p class="text-xs text-on-surface-variant mb-4">
                    Kata Sandi Diperbarui: <strong class="text-on-surface">{{ $user->updated_at ? $user->updated_at->diffForHumans() : 'baru saja' }}</strong>
                </p>
                <div class="flex flex-col">
                    <a href="{{ route('profile.password') }}"> 
                        <button type="button" class="w-full flex items-center justify-between py-2 hover:bg-slate-50 px-2 rounded-lg transition-colors group">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary group-hover:text-primary">password</span>
                                <span class="text-sm font-medium text-on-surface">Ubah Kata Sandi</span>
                            </div>
                            <span class="material-symbols-outlined text-slate-400">chevron_right</span>
                        </button>
                    </a>
                </div>
            </div>

            <!-- Settings / Danger Zone -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200/80">
                <h4 class="text-base font-semibold text-error mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
                    <span class="material-symbols-outlined text-error">settings</span>
                    Pengaturan
                </h4>
                <p class="text-xs text-on-surface-variant mb-4">Sesi anda saat ini akan diakhiri di perangkat ini.</p>
                <button class="w-full bg-red-600 text-white hover:bg-red-700 font-semibold text-sm px-4 py-2.5 rounded-lg transition-colors shadow-sm flex items-center justify-center gap-2" onclick="document.getElementById('logoutModal').classList.remove('hidden'); document.getElementById('logoutModal').classList.add('flex')">
                    <span class="material-symbols-outlined text-lg">logout</span>
                    Keluar
                </button>
            </div>
        </div>
    </div>
</main>
</div>

<!-- Logout Confirmation Modal -->
<div class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/40 backdrop-blur-sm p-4" id="logoutModal">
    <div class="bg-white rounded-xl p-6 shadow-xl border border-slate-200 max-w-sm w-full">
        <div class="flex flex-col items-center text-center">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-2xl">warning</span>
            </div>
            <h3 class="text-lg font-bold text-on-surface mb-1">Keluar dari akun?</h3>
            <p class="text-xs text-on-surface-variant mb-6">Anda harus login kembali untuk mengakses data apartemen dan kendaraan Anda.</p>
            <div class="flex w-full gap-2">
                <button class="flex-1 bg-slate-100 border border-slate-200 text-on-surface hover:bg-slate-200 font-semibold text-xs px-4 py-2.5 rounded-lg transition-colors" onclick="document.getElementById('logoutModal').classList.add('hidden'); document.getElementById('logoutModal').classList.remove('flex')">
                    Batal
                </button>
                <form method="POST" action="{{ route('logout') }}" class="flex-1">
                    @csrf
                    <button type="submit" class="w-full bg-red-600 text-white hover:bg-red-700 font-semibold text-xs px-4 py-2.5 rounded-lg transition-colors">
                        Ya, Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endif