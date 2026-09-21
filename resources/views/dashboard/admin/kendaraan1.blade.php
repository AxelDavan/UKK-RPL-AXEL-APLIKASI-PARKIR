<!DOCTYPE html>

<html lang="id" style=""><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kendaraan - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .modal-active {
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased min-h-screen flex">
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
<!-- Main Content Wrapper -->
<div class="ml-sidebar-width flex-1 flex flex-col">
<!-- TopNavBar (Shared Component) -->
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
<!-- Main Canvas -->
<main class="flex-1 p-gutter pt-[calc(64px+24px)] max-w-container-max mx-auto w-full">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Kendaraan</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Kelola kendaraan penghuni dan tamu apartemen</p>
</div>
<button class="bg-primary text-on-primary hover:bg-on-primary-fixed-variant transition-colors px-6 py-2.5 rounded-lg font-label-md text-label-md flex items-center gap-2 h-[40px] shadow-sm" id="addVehicleBtn">
<span class="material-symbols-outlined text-[18px]">add</span>
                    Tambah Kendaraan
                </button>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">
<!-- Card 1 -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-gutter shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="font-title-md text-title-md text-on-surface-variant">Total Kendaraan</h3>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">directions_car</span>
</div>
</div>
<a class="font-display-sm text-display-sm text-on-surface">{{ number_format($totalKendaraan) }}</a>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-gutter shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="font-title-md text-title-md text-on-surface-variant">Aktif</h3>
<div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
</div>
</div>
<div class="font-display-sm text-display-sm text-on-surface">{{ number_format($totalUser) }}</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-gutter shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="font-title-md text-title-md text-on-surface-variant">Menunggu</h3>
<div class="w-8 h-8 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-[18px]">pending_actions</span>
</div>
</div>
<div class="font-display-sm text-display-sm text-on-surface">{{ number_format($totalMenunggu) }}</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-gutter shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="font-title-md text-title-md text-on-surface-variant">Tamu</h3>
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[18px]">hail</span>
</div>
</div>
<div class="font-display-sm text-display-sm text-on-surface">{{ number_format($totalTamu) }}</div>
</div>
</div>
<!-- Toolbar (Search & Filters) -->
<div class="bg-surface-container-lowest border border-outline-variant p-stack-md flex flex-col sm:flex-row justify-between items-center gap-4 rounded-lg">
<div class="flex gap-2">
<button class="px-4 py-2 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md border border-transparent">Semua</button>
</div>
<div class="relative w-full sm:w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
<input id="Searchinput" class="w-full h-10 pl-10 pr-4 rounded-lg border border-outline-variant bg-surface text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" placeholder="Cari plat, pemilik..." type="text"/>
</div>
</div>
<!-- Data Table -->
<div class="bg-surface-container-lowest border border-t-0 border-outline-variant overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.05)] rounded-lg">
<div class="overflow-x-auto w-full">
<table class="w-full text-left border-collapse min-w-[900px]">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="py-3 px-4 font-title-md text-title-md text-on-surface w-16">No</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Plat Nomor</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Pemilik</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Unit</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Jenis</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Merk</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Warna</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface">Parkir</th>
<th class="py-3 px-4 font-title-md text-title-md text-on-surface text-right">Aksi</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md text-on-surface">

    @forelse($kendaraans as $index => $kendaraan)

        <tr class="border-b border-outline-variant/50 hover:bg-surface transition-colors h-[48px]">

            {{-- No --}}
            <td class="py-2 px-4 text-on-surface-variant">
                {{ $index + 1 }}
            </td>

            {{-- Plat Nomor --}}
            <td class="py-2 px-4 font-semibold">
                {{ $kendaraan->nomor_plat }}
            </td>

            {{-- Pemilik --}}
            <td class="py-2 px-4">
                {{ $kendaraan->user->name ?? 'Tidak diketahui' }}
            </td>

            {{-- Unit --}}
            <td class="py-2 px-4">
                {{ $kendaraan->user->nomor_unit ?? '-' }}
            </td>

            {{-- Jenis --}}
            <td class="py-2 px-4">
                {{ $kendaraan->jenis_kendaraan }}
            </td>

            {{-- Merk --}}
            <td class="py-2 px-4">
                {{ $kendaraan->merk }}
            </td>

            {{-- Warna --}}
            <td class="py-2 px-4">
                {{ $kendaraan->warna }}
            </td>

            {{-- Parkir --}}
            <td class="py-2 px-4">
                {{ $kendaraan->slotParkir->kode_slot ?? 'Belum diparkir' }}
            </td>

            {{-- Aksi --}}
            <td class="py-2 px-4">

                <div class="flex items-center justify-end gap-1 text-on-surface-variant">

                    {{-- Lihat --}}
                    <!-- <a
                        href="{{ route('kendaraan.show', $kendaraan->id) }}"
                        class="p-1 hover:text-primary hover:bg-surface-container rounded"
                    >
                        <span class="material-symbols-outlined text-[18px]">
                            visibility
                        </span>
                    </a> -->

                    {{-- Edit --}}
                    <button 
                        type="button"
                        class="p-1 hover:text-primary hover:bg-surface-container rounded edit-vehicle-btn"
                        data-id="{{ $kendaraan->id }}"
                        data-plat="{{ $kendaraan->nomor_plat }}"
                        data-user-id="{{ $kendaraan->user_id }}"
                        data-user-name="{{ $kendaraan->user->name ?? '' }}"
                        data-user-unit="{{ $kendaraan->user->nomor_unit ?? '-' }}"
                        data-merk="{{ $kendaraan->merk }}"
                        data-jenis="{{ $kendaraan->jenis_kendaraan }}"
                        data-warna="{{ $kendaraan->warna }}"
                        data-slot-id="{{ $kendaraan->slot_parkir_id }}"
                        data-slot-kode="{{ $kendaraan->slotParkir->kode_slot ?? '' }}"
                    >
                        <span class="material-symbols-outlined text-[18px]">edit</span>
                    </button>

                    {{-- Delete --}}
                    <form
                        method="POST"
                        action="{{ route('kendaraan.destroy', $kendaraan->id) }}"
                        onsubmit="return confirm('Yakin ingin menghapus kendaraan ini?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="p-1 hover:text-error hover:bg-error-container rounded"
                        >
                            <span class="material-symbols-outlined text-[18px]">
                                delete
                            </span>
                        </button>
                    </form>

                </div>

            </td>

        </tr>

    @empty

        <tr>
            <td
                colspan="9"
                class="py-10 text-center text-on-surface-variant"
            >
                Belum ada data kendaraan.
            </td>
        </tr>

    @endforelse

</tbody>
</table>
</div>
<!-- Pagination minimal -->
<div class="px-4 py-3 border-t border-outline-variant flex items-center justify-between bg-surface-container-lowest">

    <span class="text-body-sm text-on-surface-variant">
        Menampilkan
        {{ $kendaraans->firstItem() ?? 0 }}
        -
        {{ $kendaraans->lastItem() ?? 0 }}
        dari
        {{ $kendaraans->total() }}
    </span>

    <div>
        {{ $kendaraans->links() }}
    </div>
<div class="flex gap-2">
<button class="p-1 text-on-surface-variant hover:bg-surface-container rounded" disabled=""><span class="material-symbols-outlined">chevron_left</span></button>
<button class="p-1 text-on-surface-variant hover:bg-surface-container rounded"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>
</div>
</main>
</div>
<!-- Modal Edit Kendaraan -->
<div class="fixed inset-0 z-[100] hidden" id="editVehicleModal">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-surface/30 backdrop-blur-md transition-opacity" id="editModalBackdrop"></div>
    
    <!-- Modal Content -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg bg-surface-container-lowest rounded-xl shadow-lg border border-outline-variant overflow-hidden flex flex-col max-h-[90vh]">
        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant bg-surface-container-lowest">
            <h3 class="font-headline-md text-headline-md text-on-surface">Edit Kendaraan</h3>
            <button class="text-on-surface-variant hover:bg-surface-container p-2 rounded-full transition-colors flex items-center justify-center" id="closeEditModalBtn" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Form Body -->
        <div class="px-6 py-6 overflow-y-auto flex-1">
            <form class="flex flex-col gap-4" id="editVehicleForm" method="POST" action="">
                @csrf
                @method('PUT')

                <!-- Plat Nomor -->
                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-label-md text-on-surface-variant" for="editPlatNomor">Plat Nomor</label>
                    <input class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" id="editPlatNomor" name="nomor_plat" required type="text"/>
                </div>

                <!-- Pemilik (Autocomplete) -->
                <div class="flex flex-col gap-1 relative">
                    <label class="font-label-md text-label-md text-on-surface-variant">Pemilik</label>
                    <input autocomplete="off" class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none" id="editOwnerSearch" type="text"/>
                    <input id="editSelectedUserId" name="user_id" type="hidden"/>
                    <div class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-outline-variant rounded-lg shadow-lg z-50 max-h-60 overflow-y-auto" id="editOwnerResults"></div>
                </div>

                <!-- Merk -->
                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-label-md text-on-surface-variant" for="editMerk">Merk</label>
                    <input class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" id="editMerk" name="merk" required type="text"/>
                </div>

                <!-- Jenis Kendaraan -->
                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-label-md text-on-surface-variant" for="editJenis">Jenis Kendaraan</label>
                    <select class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none appearance-none cursor-pointer" id="editJenis" name="jenis_kendaraan" required>
                        <option value="mobil">Mobil</option>
                        <option value="motor">Motor</option>
                    </select>
                </div>

                <!-- Warna -->
                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-label-md text-on-surface-variant" for="editWarna">Warna</label>
                    <input class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" id="editWarna" name="warna" required type="text"/>
                </div>

                <!-- Tempat Parkir (Autocomplete) -->
                <div class="flex flex-col gap-1 relative">
                    <label class="font-label-md text-label-md text-on-surface-variant">Tempat Parkir</label>
                    <input autocomplete="off" class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none" id="editSlotSearch" type="text"/>
                    <input id="editSelectedSlotId" name="slot_parkir_id" required type="hidden"/>
                    <div class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-outline-variant rounded-lg shadow-lg z-50 max-h-60 overflow-y-auto" id="editSlotResults"></div>
                </div>
            </form>
        </div>

        <!-- Footer / Actions -->
        <div class="px-6 py-4 border-t border-outline-variant bg-surface-container-low flex justify-end gap-3 mt-auto">
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:bg-surface-container transition-colors border border-transparent" id="cancelEditBtn" type="button">Batal</button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-primary text-on-primary hover:bg-on-primary-fixed-variant transition-colors shadow-sm" form="editVehicleForm" type="submit">Simpan Perubahan</button>
        </div>
    </div>
</div>
<!-- Modal Overlay -->
<div class="fixed inset-0 z-[100] hidden" id="addVehicleModal">
<!-- Backdrop with heavy blur -->
<div class="absolute inset-0 bg-surface/30 backdrop-blur-md transition-opacity" id="modalBackdrop"></div>
<!-- Modal Content -->
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg bg-surface-container-lowest rounded-xl shadow-lg border border-outline-variant overflow-hidden flex flex-col max-h-[90vh]">
<!-- Header -->
<div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant bg-surface-container-lowest">
<h3 class="font-headline-md text-headline-md text-on-surface">Tambah Kendaraan</h3>
<button class="text-on-surface-variant hover:bg-surface-container p-2 rounded-full transition-colors flex items-center justify-center" id="closeModalBtn">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<!-- Form Body -->
<div class="px-6 py-6 overflow-y-auto flex-1">
<form class="flex flex-col gap-4" id="addVehicleForm" method="POST" action="{{ route('kendaraan.store') }}">
    @csrf
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="platNomor">Plat Nomor</label>
<input class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" id="platNomor" name="nomor_plat" placeholder="Cth: B 1234 XYZ" required="" type="text"/>
</div>
<div class="flex flex-col gap-1 relative">

    <label class="font-label-md text-label-md text-on-surface-variant">
        Pemilik
    </label>

    <input
        type="text"
        id="ownerSearch"
        placeholder="Cari nama atau nomor unit..."
        autocomplete="off"
        class="w-full h-10 px-3 rounded-lg border border-outline-variant
               bg-surface-container-lowest text-body-md
               focus:border-primary focus:ring-2 focus:ring-primary/20
               outline-none"
    >

    <!-- ID user yang sebenarnya dikirim -->
    <input
        type="hidden"
        name="user_id"
        id="selectedUserId"
    >

    <!-- Hasil pencarian -->
    <div
        id="ownerResults"
        class="hidden absolute top-full left-0 right-0 mt-1
               bg-white border border-outline-variant rounded-lg
               shadow-lg z-50 max-h-60 overflow-y-auto"
    ></div>

</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="pemilik">Merk</label>
<input class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" id="merk" name="merk" placeholder="Merk Kendaraan" required="" type="text"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="jenis">Jenis Kendaraan</label>
<select class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none appearance-none cursor-pointer" id="jenis" name="jenis_kendaraan" required="">
<option disabled="" selected="" value="">Pilih Jenis</option>
<option value="mobil">Mobil</option>
<option value="motor">Motor</option>
</select>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="warna">Warna</label>
<input class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" id="warna" name="warna" placeholder="Cth: Hitam, Putih, Silver" required="" type="text"/>
</div>
<!-- Input Tempat Parkir -->
<div class="flex flex-col gap-1 relative">
    <label class="font-label-md text-label-md text-on-surface-variant">
        Tempat Parkir
    </label>

    <input
        type="text"
        id="slotSearch"
        placeholder="Cari tempat yang masih kosong (cth: A-001)..."
        autocomplete="off"
        class="w-full h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none"
    >

    <!-- ID Slot Parkir yang dikirim ke Controller -->
    <input
        type="hidden"
        name="slot_parkir_id"
        id="selectedSlotId"
        required
    >

    <!-- Dropdown Hasil Pencarian Slot Kosong -->
    <div
        id="slotResults"
        class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-outline-variant rounded-lg shadow-lg z-50 max-h-60 overflow-y-auto"
    ></div>
</div>
</form>
</div>
<!-- Footer / Actions -->
<div class="px-6 py-4 border-t border-outline-variant bg-surface-container-low flex justify-end gap-3 mt-auto">
<button class="px-4 py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:bg-surface-container transition-colors border border-transparent" id="cancelBtn">
                Batal
            </button>
<button 
    class="px-4 py-2 rounded-lg font-label-md text-label-md bg-primary text-on-primary hover:bg-on-primary-fixed-variant transition-colors shadow-sm" 
    form="addVehicleForm" type="submit">
                Simpan
            </button>
</div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('addVehicleModal');
    const addBtn = document.getElementById('addVehicleBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const backdrop = document.getElementById('modalBackdrop');

    const ownerSearch = document.getElementById('ownerSearch');
    const selectedUserId = document.getElementById('selectedUserId');
    const ownerResults = document.getElementById('ownerResults');

    const form = document.getElementById('addVehicleForm');

    // Pengendali Modal Edit
    const editModal = document.getElementById('editVehicleModal');
    const editForm = document.getElementById('editVehicleForm');
    const closeEditBtn = document.getElementById('closeEditModalBtn');
    const cancelEditBtn = document.getElementById('cancelEditBtn');
    const editBackdrop = document.getElementById('editModalBackdrop');
    
    const editOwnerSearch = document.getElementById('editOwnerSearch');
    const editSelectedUserId = document.getElementById('editSelectedUserId');
    const editOwnerResults = document.getElementById('editOwnerResults');
    
    const editSlotSearch = document.getElementById('editSlotSearch');
    const editSelectedSlotId = document.getElementById('editSelectedSlotId');
    const editSlotResults = document.getElementById('editSlotResults');
    
    function closeEditModal() {
        editModal.classList.add('hidden');
        document.body.classList.remove('modal-active');
        editOwnerResults.classList.add('hidden');
        editSlotResults.classList.add('hidden');
    }
    
    closeEditBtn?.addEventListener('click', closeEditModal);
    cancelEditBtn?.addEventListener('click', closeEditModal);
    editBackdrop?.addEventListener('click', closeEditModal);
    
    // Buka dan Isi Data ke Modal Edit
    document.querySelectorAll('.edit-vehicle-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.dataset.id;
            editForm.action = `/dashboard/admin/kendaraan/${id}`;
        
            document.getElementById('editPlatNomor').value = this.dataset.plat;
            document.getElementById('editMerk').value = this.dataset.merk;
            document.getElementById('editJenis').value = this.dataset.jenis;
            document.getElementById('editWarna').value = this.dataset.warna;
        
            // Populate Data Pemilik
            editSelectedUserId.value = this.dataset.userId;
            editOwnerSearch.value = this.dataset.userName ? `${this.dataset.userName} — Unit ${this.dataset.userUnit}` : '';
        
            // Populate Data Slot Parkir
            editSelectedSlotId.value = this.dataset.slotId;
            editSlotSearch.value = this.dataset.slotKode;
        
            editModal.classList.remove('hidden');
            document.body.classList.add('modal-active');
        });
    });
    
    // Pencarian Pemilik pada Modal Edit
    editOwnerSearch?.addEventListener('input', function () {
        const keyword = this.value.toLowerCase().trim();
        editSelectedUserId.value = '';
    
        if (!keyword) {
            editOwnerResults.classList.add('hidden');
            return;
        }
    
        const results = users.filter(user => 
            (user.name || '').toLowerCase().includes(keyword) || 
            (user.nomor_unit || '').toLowerCase().includes(keyword)
        ).slice(0, 10);
    
        editOwnerResults.innerHTML = '';
    
        if (results.length === 0) {
            editOwnerResults.innerHTML = `<div class="px-4 py-3 text-sm text-gray-500">Pemilik tidak ditemukan</div>`;
        } else {
            results.forEach(user => {
                const item = document.createElement('button');
                item.type = 'button';
                item.className = 'w-full text-left px-4 py-3 hover:bg-gray-50 transition';
                item.innerHTML = `<div class="font-medium text-gray-900">${user.name}</div><div class="text-sm text-gray-500">Unit ${user.nomor_unit || '-'}</div>`;
                item.addEventListener('click', () => {
                    editOwnerSearch.value = `${user.name} — Unit ${user.nomor_unit || '-'}`;
                    editSelectedUserId.value = user.id;
                    editOwnerResults.classList.add('hidden');
                });
                editOwnerResults.appendChild(item);
            });
        }
        editOwnerResults.classList.remove('hidden');
    });
    
    // Pencarian Slot Parkir pada Modal Edit
    editSlotSearch?.addEventListener('input', function () {
        const keyword = this.value.toLowerCase().trim();
        editSelectedSlotId.value = '';
    
        if (!keyword) {
            editSlotResults.classList.add('hidden');
            return;
        }
    
        const results = slots.filter(slot => 
            slot.kode_slot.toLowerCase().includes(keyword)
        ).slice(0, 50);
    
        editSlotResults.innerHTML = '';
    
        if (results.length === 0) {
            editSlotResults.innerHTML = `<div class="px-4 py-3 text-sm text-gray-500">Slot tidak ditemukan</div>`;
        } else {
            results.forEach(slot => {
                const item = document.createElement('button');
                item.type = 'button';
                item.className = 'w-full text-left px-4 py-3 hover:bg-emerald-50 transition flex justify-between items-center';
                item.innerHTML = `<span class="font-medium text-gray-900">${slot.kode_slot}</span><span class="text-xs text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded font-bold">Tersedia</span>`;
                item.addEventListener('click', () => {
                    editSlotSearch.value = slot.kode_slot;
                    editSelectedSlotId.value = slot.id;
                    editSlotResults.classList.add('hidden');
                });
                editSlotResults.appendChild(item);
            });
        }
        editSlotResults.classList.remove('hidden');
    });
    
    /*
    |--------------------------------------------------------------------------
    | DATA OWNER DARI LARAVEL
    |--------------------------------------------------------------------------
    */

    const users = @json($users);


    /*
    |--------------------------------------------------------------------------
    | MODAL
    |--------------------------------------------------------------------------
    */

    function openModal() {
        modal.classList.remove('hidden');
        document.body.classList.add('modal-active');
    }

    function closeModal() {

        modal.classList.add('hidden');
        document.body.classList.remove('modal-active');

        form.reset();

        selectedUserId.value = '';

        ownerResults.classList.add('hidden');
        ownerResults.innerHTML = '';
    }


    addBtn.addEventListener('click', openModal);

    closeBtn.addEventListener('click', closeModal);

    cancelBtn.addEventListener('click', closeModal);

    backdrop.addEventListener('click', closeModal);


    /*
    |--------------------------------------------------------------------------
    | SEARCH OWNER
    |--------------------------------------------------------------------------
    */

    ownerSearch.addEventListener('input', function () {

        const keyword = this.value
            .toLowerCase()
            .trim();


        // Kalau admin mengetik ulang,
        // pilihan owner sebelumnya dibatalkan
        selectedUserId.value = '';


        if (keyword === '') {

            ownerResults.classList.add('hidden');

            ownerResults.innerHTML = '';

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | FILTER OWNER
        |--------------------------------------------------------------------------
        */

        const results = users
            .filter(function (user) {

                const name = (user.name || '')
                    .toLowerCase();

                const unit = (user.nomor_unit || '')
                    .toLowerCase();

                return (
                    name.includes(keyword) ||
                    unit.includes(keyword)
                );

            })
            .slice(0, 10);


        ownerResults.innerHTML = '';


        /*
        |--------------------------------------------------------------------------
        | TIDAK DITEMUKAN
        |--------------------------------------------------------------------------
        */

        if (results.length === 0) {

            ownerResults.innerHTML = `
                <div class="px-4 py-3 text-sm text-gray-500">
                    Pemilik tidak ditemukan
                </div>
            `;

            ownerResults.classList.remove('hidden');

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | HASIL PENCARIAN
        |--------------------------------------------------------------------------
        */

        results.forEach(function (user) {

            const item = document.createElement('button');

            item.type = 'button';

            item.className =
                'w-full text-left px-4 py-3 hover:bg-gray-50 transition';


            item.innerHTML = `
                <div class="font-medium text-gray-900">
                    ${user.name}
                </div>

                <div class="text-sm text-gray-500">
                    Unit ${user.nomor_unit || '-'}
                </div>
            `;


            /*
            |--------------------------------------------------------------------------
            | PILIH OWNER
            |--------------------------------------------------------------------------
            */

            item.addEventListener('click', function () {

                ownerSearch.value =
                    user.name +
                    ' — Unit ' +
                    (user.nomor_unit || '-');


                // Ini yang dikirim ke Laravel
                selectedUserId.value = user.id;


                // Sembunyikan hasil
                ownerResults.classList.add('hidden');

            });


            ownerResults.appendChild(item);

        });


        ownerResults.classList.remove('hidden');

    });

    /*
    |--------------------------------------------------------------------------
    | SEARCH SLOT PARKIR KOSONG
    |--------------------------------------------------------------------------
    */
    const slots = @json($slots); // Menerima data slot berstatus 'tersedia' dari controller

    const slotSearch = document.getElementById('slotSearch');
    const selectedSlotId = document.getElementById('selectedSlotId');
    const slotResults = document.getElementById('slotResults');

    slotSearch.addEventListener('input', function () {
        const keyword = this.value.toLowerCase().trim();
        selectedSlotId.value = '';

        if (keyword === '') {
            slotResults.classList.add('hidden');
            slotResults.innerHTML = '';
            return;
        }

        // Filter hanya slot kosong yang cocok dengan ketikan admin (misal 'A-1' atau 'A-001')
        const results = slots.filter(function (slot) {
            return slot.kode_slot.toLowerCase().includes(keyword);
        }).slice(0, 50);

        slotResults.innerHTML = '';

        if (results.length === 0) {
            slotResults.innerHTML = `
                <div class="px-4 py-3 text-sm text-gray-500">
                    Slot tidak ditemukan / sudah terisi
                </div>
            `;
            slotResults.classList.remove('hidden');
            return;
        }

        results.forEach(function (slot) {
            const item = document.createElement('button');
            item.type = 'button';
            item.className = 'w-full text-left px-4 py-3 hover:bg-emerald-50 transition flex justify-between items-center';

            item.innerHTML = `
                <span class="font-medium text-gray-900">${slot.kode_slot}</span>
                <span class="text-xs text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded font-bold">Tersedia</span>
            `;

            item.addEventListener('click', function () {
                slotSearch.value = slot.kode_slot;
                selectedSlotId.value = slot.id; // Menyimpan ID slot yang dipilih
                slotResults.classList.add('hidden');
            });

            slotResults.appendChild(item);
        });

        slotResults.classList.remove('hidden');
    });

});

document.addEventListener('DOMContentLoaded', function () {
    const Searchinput = document.getElementById('Searchinput');
    const tableRows = document.querySelectorAll('tbody tr');

    if (Searchinput) {
        Searchinput.addEventListener('input', function () {
            const keyword = this.value.toLowerCase().trim();

            tableRows.forEach(row => {
                // Ambil teks dari kolom Plat Nomor (kolom ke-2) & Pemilik (kolom ke-3)
                const platCell = row.children[1] ? row.children[1].textContent.toLowerCase() : '';
                const ownerCell = row.children[2] ? row.children[2].textContent.toLowerCase() : '';

                // Jika kata kunci cocok dengan plat atau pemilik, tampilkan barisnya
                if (platCell.includes(keyword) || ownerCell.includes(keyword)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none'; // Sembunyikan jika tidak cocok
                }
            });
        });
    }
});
</script>
</body></html>