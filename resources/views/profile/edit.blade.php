@if (auth()->user()->role === 'admin')
    <!DOCTYPE html><html lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Profil - Safe Park</title>
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
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8f9ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.fill { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-background text-on-surface antialiased min-h-screen font-body-md">
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

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="flex items-center gap-3 px-6 py-3
                           text-on-surface-variant
                           hover:bg-surface-container
                           transition-colors"
                >
                    <span class="material-symbols-outlined">
                        logout
                    </span>

                    <span class="font-body-sm text-body-sm">
                        Keluar
                    </span>
                </button>
            </form>


        </ul>

    </div>

</nav>
<!-- ================= END SIDEBAR ================= -->
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
<!-- Main Content -->
<main class="ml-sidebar-width pt-16 p-gutter max-w-container-max mx-auto">
<div class="mb-8">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Pengaturan Profil</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Kelola informasi pribadi dan preferensi keamanan Anda.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Column: Profile Card & Danger Zone -->
<div class="lg:col-span-1 flex flex-col gap-6">
<!-- Profile Header Card -->
<div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm flex flex-col items-center text-center rounded-lg"><div class="relative mb-4"><div class="w-24 h-24 rounded-full overflow-hidden border-4 border-surface-container-low shadow-sm"><img alt="Admin User Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFtR-PuaO3l51wLnfbeT4ZVLJHRXFmMi-1tFgGQ_K3boFXFIMrgbKGGPdcAFqds2F-VJDPey8-Ji0fYxJwTpTlRTHLLlAzXm1oRk9l4ToiTWm4IUei4mmClIXJDSOlDw9Fe3ZtKEiYH_-Kv8C87qdK1O3KLu0POu7tiNYFtpISoWBcBMnjp7zYrcuNOqo3A0m71t0HSN971vQv_W-XcTR4vxp28U_HTb-RxePhRtDqHHgKCELfWjLkAw"></div><button class="absolute bottom-0 right-0 p-1.5 bg-primary-container text-on-primary-container rounded-full shadow-md hover:bg-primary hover:text-on-primary transition-colors"><span class="material-symbols-outlined text-[16px]">edit</span></button></div><h3 class="font-title-lg text-title-lg text-on-surface mb-1 font-title-md">{{ $user->name }}</h3><p class="font-body-md text-body-md text-primary font-medium mb-1">{{ $user->role }}</p><p class="font-body-sm text-body-sm text-on-surface-variant flex items-center justify-center gap-1"><span class="material-symbols-outlined text-[14px]">corporate_fare</span>Operations</p></div>
</div>
<!-- Right Column: Settings & Forms -->
<div class="lg:col-span-2 flex flex-col gap-6">
<!-- Personal Information -->
<div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg">
<div class="flex justify-between items-center mb-6">
<h3 class="font-title-md text-title-md text-on-surface">Informasi Pribadi</h3>
<button class="text-primary hover:text-primary-fixed-dim font-label-md text-label-md">Simpan Perubahan</button>
</div>
<form class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="md:col-span-2">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1">Nama Depan</label>
<input class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" type="text" value="{{ $user->name }}">
</div>
<div class="md:col-span-2">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1">Email Publik</label>
<input class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" type="email" value="{{ $user->email }}">
</div>
<div class="md:col-span-2">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1">Nomor Telepon</label>
<input class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" type="tel" value="{{ $user->nomor_telepon ?? '' }}">
</div>
</form>
</div>
<!-- Security & Permissions (Bento Grid Style) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Security Card -->
<div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg">
<h3 class="font-title-md text-title-md text-on-surface mb-4">Keamanan Akun</h3>
<div class="space-y-4">
<div class="flex justify-between items-center pb-4 border-b border-surface-variant">
<div>
<p class="font-body-md text-body-md text-on-surface font-medium">Kata Sandi</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Diperbarui 30 hari yang lalu</p>
</div>
<a class="px-3 py-1.5 bg-surface border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-variant transition-colors" href="{{ route('profile.password') }}">Ubah</a>
</div>
<div class="flex justify-between items-center">
<div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Update password</p>
</div>
</div>
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
<li class="flex items-center gap-3 opacity-50">
<span class="material-symbols-outlined text-outline">cancel</span>
<span class="font-body-md text-body-md text-on-surface-variant">Pengaturan Sistem Inti (Super Admin)</span>
</li>
</ul>
</div>
</div>
<!-- Account Preferences -->
<div class="bg-surface-container-lowest border border-outline-variant p-stack-lg shadow-sm rounded-lg">
<h3 class="font-title-md text-title-md text-on-surface mb-4">Preferensi Akun</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block font-label-md text-label-md text-on-surface-variant mb-1">Bahasa</label>
<select class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary">
<option>Bahasa Indonesia</option>
<option>English (US)</option>
</select>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface-variant mb-1">Zona Waktu</label>
<select class="w-full h-10 px-3 bg-surface border border-outline-variant rounded-lg text-body-md font-body-md focus:outline-none focus:border-primary">
<option>(GMT+07:00) Waktu Indonesia Barat</option>
<option>(GMT+08:00) Waktu Indonesia Tengah</option>
<option>(GMT+09:00) Waktu Indonesia Timur</option>
</select>
</div>
</div>
</div>
</div>
</div>
</main>




</body></html>
@endif

@if (auth()->user()->role === 'owner')
    <!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profil Saya - Safe Park</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
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
                    fontFamily: {
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
                    fontSize: {
                        "display-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "headline-lg-mobile": ["24px", { lineHeight: "32px", fontWeight: "700" }],
                        "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700" }],
                        "title-lg": ["20px", { lineHeight: "28px", fontWeight: "600" }],
                        "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
                        "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                        "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
                        "label-lg": ["12px", { lineHeight: "16px", fontWeight: "600" }],
                        "label-md": ["11px", { lineHeight: "16px", fontWeight: "500" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.filled {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<script>
    const editProfileBtn = document.getElementById('editProfileBtn');
    const editProfileText = document.getElementById('editProfileText');
    const profileForm = document.getElementById('profileForm');
    const profileInputs = document.querySelectorAll('.profile-input');

    let isEditing = false;

    editProfileBtn.addEventListener('click', function () {

        // MODE EDIT
        if (!isEditing) {

            isEditing = true;

            profileInputs.forEach(input => {
                input.removeAttribute('readonly');

                input.classList.remove(
                    'bg-surface-container-low',
                    'cursor-not-allowed'
                );

                input.classList.add(
                    'bg-white',
                    'border-primary'
                );
            });

            editProfileText.textContent = 'Simpan Perubahan';

            editProfileBtn.querySelector('.material-symbols-outlined')
                .textContent = 'save';

        }

        // MODE SIMPAN
        else {
            profileForm.submit();
        }
    });
</script>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen flex flex-col md:flex-row w-full">
 <!-- SideNavBar -->
<nav class="bg-surface border-r border-outline-variant h-screen w-64 fixed left-0 top-0 hidden md:flex flex-col z-30">
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
<a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('profile.edit') }}">
<span class="material-symbols-outlined">person</span>
<span class="font-title-md text-title-md">Profile</span>
</a>
<a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="#">
    <span class="material-symbols-outlined">help</span>
    <span class="font-title-md text-title-md">Bantuan</span>
</a>
</div>
</nav>
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
<a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('profile.edit') }}">
<span class="material-symbols-outlined">person</span>
<span class="font-title-md text-title-md">Profile</span>
</a>
<a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors mt-auto" href="#">
<span class="material-symbols-outlined">help</span>
<span class="font-title-md text-title-md">Bantuan</span>
</a>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col w-full md:ml-64 min-h-screen pb-20 md:pb-0">

<!-- Canvas -->
<main class="flex-1 p-margin-mobile md:p-margin-desktop w-full max-w-6xl mx-auto space-y-lg">
<!-- Page Header -->
<div class="mb-lg">
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">Profil Saya</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-xs">Kelola informasi akun dan data penghuni.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-lg items-start">
<!-- Main Info Column -->
<div class="md:col-span-8 flex flex-col gap-lg">
<!-- Profile Header Card -->
<div class="bg-surface-container-lowest rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/20 flex flex-col md:flex-row items-center md:items-start gap-lg relative overflow-hidden">
<!-- Decorative background element -->
<div class="absolute top-0 right-0 w-32 h-32 bg-primary-container/5 rounded-bl-full -z-0"></div>
<div class="relative z-10 w-24 h-24 rounded-full overflow-hidden border-4 border-surface shadow-sm shrink-0">
<img alt="Alex Davan Avatar" class="w-full h-full object-cover" data-alt="A professional, high-quality headshot of a modern adult male resident in a well-lit luxury apartment lobby. The lighting is soft and flattering, highlighting a clean, contemporary aesthetic. The background is slightly blurred with subtle architectural details in cool, neutral tones. The overall mood is approachable, secure, and upscale, fitting a premium residential management app." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0OdeutXKo-eKDSFu5GtHkufdMRfswafbkH8SLQJrFuCdUVxJnt9FJwDBX4hOSgeTIzgA2AL35lwh3cN2M13KEhAczhxEBT4NbPY0fhe4SPuPbfIZKSIX-q3XeChsj1NTCmHtHRM2c5drdIQNI7cjFm53wFkKETjHBS_Iw4rJI6Ujg2EMjry-M7YQGJrG0C28VvW0rJ63M6bWo9qwmEdYL843PNjFVNi-UII29MsEf2m5w_lMgqewVAw"/>
</div>
<div class="flex-1 text-center md:text-left z-10">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-md mb-sm">
<div>
<h3 class="font-title-lg text-title-lg text-on-surface">{{ $user->name }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $user->role . $user->nomor_unit }}</p>
</div>
<span class="inline-flex items-center gap-xs px-sm py-1 bg-[#d3e4fe]/40 text-[#004ac6] rounded-full font-label-md text-label-md self-center md:self-auto">
<span class="material-symbols-outlined text-[16px]">check_circle</span>
                                    Akun Aktif
                                </span>
</div>
</div>
</div>
<!-- Personal Information Form Card -->
<div class="bg-surface-container-lowest rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/20">
<h4 class="font-title-md text-title-md text-on-surface mb-md pb-sm border-b border-outline-variant/30 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">badge</span>
                            Informasi Pribadi
                        </h4>
<form method="POST" action="{{ route('profile.update') }}" id="profileForm">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">

        <!-- Nama -->
        <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">
                Nama Lengkap
            </label>

            <input
                name="name"
                class="profile-input w-full bg-surface border border-outline-variant/50 rounded-lg p-sm text-body-md text-on-surface focus:outline-none focus:border-primary-container transition-colors"
                readonly
                type="text"
                value="{{ $user->name }}"
            />
        </div>

        <!-- Email -->
        <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">
                Email
            </label>

            <input
                name="email"
                class="profile-input w-full bg-surface border border-outline-variant/50 rounded-lg p-sm text-body-md text-on-surface focus:outline-none focus:border-primary-container transition-colors"
                readonly
                type="email"
                value="{{ $user->email }}"
            />
        </div>

        <!-- Nomor Telepon -->
        <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">
                Nomor Telepon
            </label>

            <input
                name="phone"
                class="profile-input w-full bg-surface border border-outline-variant/50 rounded-lg p-sm text-body-md text-on-surface focus:outline-none focus:border-primary-container transition-colors"
                readonly
                type="tel"
                value="{{ $user->nomor_telepon ?? '' }}"
            />
        </div>

        <!-- Unit -->
        <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">
                Unit
            </label>

            <input
                name="unit"
                class="profile-input w-full bg-surface border border-outline-variant/30 rounded-lg p-sm text-body-md text-secondary"
                readonly
                type="text"
                value="{{ $user->nomor_unit ?? '' }}"
            />
        </div>

    </div>
</form>
</div>
</div>
<!-- Secondary Column (Security & Settings) -->
<div class="md:col-span-4 flex flex-col gap-lg">
<!-- Security Card -->
<div class="bg-surface-container-lowest rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/20">
<h4 class="font-title-md text-title-md text-on-surface mb-md pb-sm border-b border-outline-variant/30 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">security</span>
                            Keamanan Akun
                        </h4>
<div class="flex flex-col">
<a href="{{ route('profile.password') }}"> 
<button type="submit" class="flex items-center justify-between py-sm hover:bg-surface-container-low px-2 -mx-2 rounded-lg transition-colors group">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary group-hover:text-primary">password</span>
<span class="font-body-md text-body-md text-on-surface">Ubah Kata Sandi</span>
</div>
<span class="material-symbols-outlined text-outline-variant">chevron_right</span>
</button>
</a>
<div class="h-[1px] w-full bg-outline-variant/20 my-xs"></div>
<a href="{{ route('aktivitas') }}" class="flex items-center justify-between py-sm hover:bg-surface-container-low px-2 -mx-2 rounded-lg transition-colors group">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary group-hover:text-primary">history</span>
<span class="font-body-md text-body-md text-on-surface">Aktivitas Login</span>
</div>
<span class="material-symbols-outlined text-outline-variant">chevron_right</span>
</a>
<div class="h-[1px] w-full bg-outline-variant/20 my-xs"></div>
<a href="{{ route('perangkat') }}" class="flex items-center justify-between py-sm hover:bg-surface-container-low px-2 -mx-2 rounded-lg transition-colors group">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary group-hover:text-primary">devices</span>
<span class="font-body-md text-body-md text-on-surface">Perangkat Aktif</span>
</div>
<span class="material-symbols-outlined text-outline-variant">chevron_right</span>
</a>
</div>
</div>
<!-- Settings / Danger Zone -->
<div class="bg-surface-container-lowest rounded-xl p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)] border border-outline-variant/20">
<h4 class="font-title-md text-title-md text-error mb-md pb-sm border-b border-outline-variant/30 flex items-center gap-2">
<span class="material-symbols-outlined text-error">settings</span>
                            Pengaturan
                        </h4>
<p class="font-label-md text-label-md text-on-surface-variant mb-md">Sesi anda saat ini akan diakhiri di perangkat ini.</p>
<button class="w-full bg-error text-on-error hover:bg-on-error-container font-label-lg text-label-lg px-md py-sm rounded-lg transition-colors shadow-sm flex items-center justify-center gap-sm" onclick="document.getElementById('logoutModal').classList.remove('hidden'); document.getElementById('logoutModal').classList.add('flex')">
<span class="material-symbols-outlined text-[20px]">logout</span>
                            Keluar
                        </button>
</div>
</div>
</div>
</main>
</div>
<!-- Logout Confirmation Modal (Hidden by default) -->
<div class="hidden fixed inset-0 z-[100] items-center justify-center bg-inverse-surface/40 backdrop-blur-sm p-margin-mobile" id="logoutModal">
<div class="bg-surface-container-lowest rounded-xl p-lg shadow-[0_12px_32px_rgba(0,0,0,0.12)] border border-outline-variant/20 max-w-sm w-full animate-[fadeIn_0.2s_ease-out]">
<div class="flex flex-col items-center text-center">
<div class="w-12 h-12 bg-error-container text-error rounded-full flex items-center justify-center mb-md">
<span class="material-symbols-outlined text-[28px]">warning</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface mb-xs">Keluar dari akun?</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-lg">Anda harus login kembali untuk mengakses data apartemen dan kendaraan Anda.</p>
<div class="flex w-full gap-sm">
<button class="flex-1 bg-surface border border-outline-variant text-on-surface hover:bg-surface-container font-label-lg text-label-lg px-md py-sm rounded-lg transition-colors" onclick="document.getElementById('logoutModal').classList.add('hidden'); document.getElementById('logoutModal').classList.remove('flex')">
                        Batal
                    </button>
<form method="POST" action="{{ route('logout') }}">
    @csrf
<button class="flex-1 bg-error text-on-error hover:bg-on-error-container font-label-lg text-label-lg px-md py-sm rounded-lg transition-colors">
                        Ya, Keluar
                    </button>
</form>
</div>
</div>
</div>
</div>
<style>
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95) translateY(10px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
    </style>
</body></html>
@endif