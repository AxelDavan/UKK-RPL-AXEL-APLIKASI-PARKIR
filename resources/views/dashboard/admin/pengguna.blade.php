<!DOCTYPE html><html lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Safe Park - Manajemen Pengguna</title>
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
    </script>
<style>
        body { background-color: #F8FAFC; }
        .glass-card {
            background: rgba(255, 255, 255, 1);
            border: 1px solid #E2E8F0;
            box-shadow: 0px 1px 3px rgba(0,0,0,0.05), 0px 4px 6px rgba(0,0,0,0.02);
        }
        .zebra-row:hover { background-color: #F8FAFC; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="text-on-background font-body-md overflow-x-hidden">
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
<!-- Main Content -->
<main class="md:ml-[260px] pt-24 px-4 md:px-6 pb-12 max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
<div>
<h2 class="text-headline-lg font-headline-lg text-on-background">Manajemen Pengguna</h2>
<p class="text-body-md font-body-md text-on-surface-variant mt-1">Kelola owner, petugas, admin Safe Park</p>
</div>
<button class="bg-primary hover:bg-primary/90 text-white font-label-md text-label-md py-2.5 px-5 rounded-lg flex items-center gap-2 transition-colors self-start md:self-auto shadow-sm" onclick="document.getElementById('add-user-modal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px]">add</span>
                Tambah Pengguna
            </button>
</div>
<!-- Stats Bento Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
<div class="glass-card p-5 flex flex-col justify-between h-32 relative overflow-hidden group rounded-lg">
<div class="flex justify-between items-start z-10">
<span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Total Pengguna</span>
<span class="material-symbols-outlined text-primary-container bg-surface-container-low p-1.5 rounded-lg">group</span>
</div>
<div class="z-10">
<span class="text-display-sm font-display-sm text-on-background">{{ number_format($totalUser) }}</span>
<div class="flex items-center gap-1 mt-1 text-secondary">
<span class="material-symbols-outlined text-[14px]"></span>
<span class="text-label-md font-label-md"></span>
</div>
</div>
</div>
<div class="glass-card p-5 flex flex-col justify-between h-32 relative overflow-hidden group rounded-lg">
<div class="flex justify-between items-start z-10">
<span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Owner</span>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg">home</span>
</div>
<div class="z-10">
<span class="text-display-sm font-display-sm text-on-background">{{ number_format($totalOwner) }}</span>
<div class="flex items-center gap-1 mt-1 text-secondary">
<span class="material-symbols-outlined text-[14px]"></span>
<span class="text-label-md font-label-md"></span>
</div>
</div>
</div>
<div class="glass-card p-5 flex flex-col justify-between h-32 relative overflow-hidden group rounded-lg">
<div class="flex justify-between items-start z-10">
<span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Petugas</span>
<span class="material-symbols-outlined text-purple-600 bg-purple-100 p-1.5 rounded-lg">security</span>
</div>
<div class="z-10">
<span class="text-display-sm font-display-sm text-on-background">{{ number_format($totalPetugas) }}</span>
<div class="flex items-center gap-1 mt-1 text-on-surface-variant">
<span class="material-symbols-outlined text-[14px]">horizontal_rule</span>
<span class="text-label-md font-label-md">Stabil</span>
</div>
</div>
</div>
<div class="glass-card p-5 flex flex-col justify-between h-32 relative overflow-hidden group rounded-lg">
<div class="flex justify-between items-start z-10">
<span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Admin</span>
<span class="material-symbols-outlined text-blue-800 bg-blue-100 p-1.5 rounded-lg">admin_panel_settings</span>
</div>
<div class="z-10">
<span class="text-display-sm font-display-sm text-on-background">{{ number_format($totalAdmin) }}</span>
<div class="flex items-center gap-1 mt-1 text-on-surface-variant">
<span class="material-symbols-outlined text-[14px]">horizontal_rule</span>
<span class="text-label-md font-label-md">Stabil</span>
</div>
</div>
</div>
</div>
<!-- Filter Bar -->
<div class="glass-card p-4 mb-6 flex flex-col lg:flex-row justify-between items-center gap-4 rounded-lg">
<form
    method="GET"
    action="{{ route('pengguna') }}"
    class="relative w-full lg:w-1/3"
>

    <span class="material-symbols-outlined absolute left-3 top-1/2
                 -translate-y-1/2 text-on-surface-variant text-[20px]">
        search
    </span>

    <input
        id="searchInput"
        type="text"
        name="search"
        value="{{ request('search') }}"
        class="w-full pl-10 pr-4 py-2 bg-surface-container-lowest
               border border-outline-variant rounded-lg"
        placeholder="Cari nama, email, atau unit..."
    >

</form>
<div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
<form
    method="GET"
    action="{{ route('pengguna') }}"
    class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto"
>

    <select
        name="role"
        onchange="this.form.submit()"
        class="px-4 py-2 bg-surface-container-lowest
               border border-outline-variant rounded-lg"
    >
        <option value="">Semua Role</option>

        <option
            value="owner"
            {{ request('role') === 'owner' ? 'selected' : '' }}
        >
            Owner
        </option>

        <option
            value="petugas"
            {{ request('role') === 'petugas' ? 'selected' : '' }}
        >
            Petugas
        </option>

        <option
            value="admin"
            {{ request('role') === 'admin' ? 'selected' : '' }}
        >
            Admin
        </option>
    </select>

</form>
</div>
</div>
<!-- User Data Table -->
<div class="glass-card overflow-hidden rounded-lg">
<div class="p-6 border-b border-outline-variant bg-surface-container-lowest flex justify-between items-center">
<h3 class="text-title-lg font-title-lg text-on-background">Daftar Pengguna <span class="text-body-md font-body-md text-on-surface-variant ml-2 font-normal">{{ (number_format($totalUser)) }}</span></h3>
<button class="text-on-surface-variant hover:text-primary transition-colors">
</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[1000px]">
<thead>
<tr class="border-b border-outline-variant bg-surface">
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider w-16">No</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Pengguna</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Email</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Unit</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Role</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Terakhir Login</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider text-right">Aksi</th>
</tr>
</thead>
<tbody class="text-body-sm font-body-sm">

@forelse($users as $index => $user)

<tr class="border-b border-outline-variant/50 h-[64px] zebra-row">

    {{-- NO --}}
    <td class="py-3 px-6 text-on-surface-variant">
        {{ $users->firstItem() + $index }}
    </td>

    {{-- PENGGUNA --}}
    <td class="py-3 px-6">
        <div class="flex items-center gap-3">

            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600
                        flex items-center justify-center font-bold text-label-md">
                {{ strtoupper(substr($user->name, 0, 2)) }}
            </div>

            <div>
                <div class="font-semibold text-on-background">
                    {{ $user->name }}
                </div>
            </div>

        </div>
    </td>

    {{-- USERNAME --}}
    <td class="py-3 px-6 text-on-surface-variant">
        {{ $user->email ?? '-' }}
    </td>

    {{-- UNIT --}}
    <td class="py-3 px-6 text-on-surface">
        {{ $user->nomor_unit ?? '-' }}
    </td>

    {{-- ROLE --}}
    <td class="py-3 px-6">

        @if($user->role === 'admin')

            <span class="inline-flex items-center h-6 px-2.5 rounded-full
                         bg-blue-800 text-white text-[11px] font-semibold">
                Admin
            </span>

        @elseif($user->role === 'petugas')

            <span class="inline-flex items-center h-6 px-2.5 rounded-full
                         bg-purple-100 text-purple-700 text-[11px] font-semibold">
                Petugas
            </span>

        @else

            <span class="inline-flex items-center h-6 px-2.5 rounded-full
                         bg-blue-100 text-blue-700 text-[11px] font-semibold">
                Owner
            </span>

        @endif

    </td>

    {{-- STATUS --}}
    <td class="py-3 px-6">

        @if($user->status === 'aktif')

            <span class="inline-flex items-center h-6 px-2.5 rounded-full
                         bg-[#D1FAE5] text-[#065F46]
                         text-[11px] font-semibold">
                Aktif
            </span>

        @else

            <span class="inline-flex items-center h-6 px-2.5 rounded-full
                         bg-surface-variant text-on-surface-variant
                         text-[11px] font-semibold">
                Nonaktif
            </span>

        @endif

    </td>

    {{-- TERAKHIR LOGIN --}}
    <td class="py-3 px-6 text-on-surface-variant">

        @if($user->last_login_at)
            {{ \Carbon\Carbon::parse($user->last_login_at)->diffForHumans() }}
        @else
            Belum login
        @endif

    </td>

    {{-- AKSI --}}
    <td class="py-3 px-6 text-right">

        <div class="flex justify-end gap-1">

            {{-- EDIT --}}
            <button
                type="button"
                class="text-on-surface-variant hover:text-primary transition-colors p-1.5 rounded hover:bg-surface-container edit-user-btn"
                data-id="{{ $user->id }}"
                data-name="{{ $user->name }}"
                data-telepon="{{ $user->nomor_telepon ?? '' }}"
                data-email="{{ $user->email ?? '' }}"
                data-role="{{ $user->role }}"
                data-unit="{{ $user->nomor_unit ?? '' }}"
                data-status="{{ $user->status }}"
                title="Edit"
            >
                <span class="material-symbols-outlined text-[18px]">
                    edit
                </span>
            </button>


            {{-- DELETE --}}
            <form
                action="{{ route('pengguna.destroy', $user->id) }}"
                method="POST"
                onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="text-on-surface-variant hover:text-error
                           transition-colors p-1.5 rounded
                           hover:bg-error-container/50"
                    title="Hapus"
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
    <td colspan="8" class="py-10 text-center text-on-surface-variant">
        Belum ada pengguna.
    </td>
</tr>

@endforelse

</tbody>
</table>
</div>
<div class="p-4 border-t border-outline-variant flex flex-col sm:flex-row items-center justify-between bg-surface gap-4">
<span class="text-body-sm text-on-surface-variant">
        Menampilkan
        {{ $users->firstItem() ?? 0 }}
        -
        {{ $users->lastItem() ?? 0 }}
        dari
        {{ $users->total() }}
        pengguna
    </span>

    <div>
        {{ $users->links() }}
    </div>
<div class="flex gap-1">
<button class="px-3 py-1.5 border border-outline-variant rounded hover:bg-surface-container disabled:opacity-50 text-body-sm font-medium" disabled="">Prev</button>
<button class="px-3 py-1.5 bg-primary text-white rounded text-body-sm font-medium">1</button>
<button class="px-3 py-1.5 border border-outline-variant rounded hover:bg-surface-container text-body-sm font-medium text-on-surface">2</button>
<button class="px-3 py-1.5 border border-outline-variant rounded hover:bg-surface-container text-body-sm font-medium text-on-surface">3</button>
<span class="px-2 py-1.5 text-on-surface-variant">...</span>
<button class="px-3 py-1.5 border border-outline-variant rounded hover:bg-surface-container text-body-sm font-medium text-on-surface">Next</button>
</div>
</div>
</div>
</main>
<!-- Overlay for Mobile Sidebar -->
<div class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity" id="sidebar-overlay"></div>
<!-- Edit User Modal -->
<div class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm" id="edit-user-modal">
    <div class="bg-surface-container-lowest shadow-xl w-full max-w-lg max-h-[90vh] flex flex-col overflow-hidden rounded-lg">
        <div class="flex justify-between items-center p-6 border-b border-outline-variant">
            <h3 class="text-title-lg font-title-lg text-on-background">Edit Data Pengguna</h3>
            <button class="text-on-surface-variant hover:bg-surface-container rounded-full p-1" type="button" onclick="document.getElementById('edit-user-modal').classList.add('hidden')">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        
        <div class="p-6 overflow-y-auto">
            <form class="space-y-4" action="" method="POST" id="editUserForm">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-label-md font-label-md text-on-surface mb-1">Nama Lengkap</label>
                    <input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" id="edit_name" name="name" required type="text">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-label-md font-label-md text-on-surface mb-1">Nomor Telepon</label>
                        <input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" id="edit_telepon" name="nomor_telepon" required type="text">
                    </div>
                    <div>
                        <label class="block text-label-md font-label-md text-on-surface mb-1">Email</label>
                        <input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" id="edit_email" name="email" required type="email">
                    </div>
                </div>

                <div>
                    <label class="block text-label-md font-label-md text-on-surface mb-1">Password Baru <span class="text-xs text-outline font-normal">(Kosongkan jika tidak diubah)</span></label>
                    <input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" placeholder="Masukkan password baru" type="password" name="password">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-label-md font-label-md text-on-surface mb-1">Role</label>
                        <select class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md bg-white" id="edit_role" name="role" required>
                            <option value="owner">Owner</option>
                            <option value="petugas">Petugas</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-label-md font-label-md text-on-surface mb-1">Unit (Optional)</label>
                        <input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" id="edit_unit" name="nomor_unit" type="text">
                    </div>
                </div>

                <div>
                    <label class="block text-label-md font-label-md text-on-surface mb-1">Status</label>
                    <select class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md bg-white" id="edit_status" name="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="p-6 border-t border-outline-variant flex justify-end gap-3 bg-surface-container">
            <button class="px-5 py-2.5 rounded-lg border border-outline-variant font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" onclick="document.getElementById('edit-user-modal').classList.add('hidden')" type="button">Batal</button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-primary text-on-primary hover:bg-on-primary-fixed-variant transition-colors shadow-sm" form="editUserForm" type="submit">Simpan Perubahan</button>
        </div>
    </div>
</div>
<!-- Add User Modal -->
<div class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm" id="add-user-modal">
<div class="bg-surface-container-lowest shadow-xl w-full max-w-lg max-h-[90vh] flex flex-col overflow-hidden rounded-lg">
<div class="flex justify-between items-center p-6 border-b border-outline-variant">
<h3 class="text-title-lg font-title-lg text-on-background">Tambah Pengguna Baru</h3>
<button class="text-on-surface-variant hover:bg-surface-container rounded-full p-1" onclick="document.getElementById('add-user-modal').classList.add('hidden')">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="p-6 overflow-y-auto">
<form class="space-y-4" action="{{ route('pengguna.store') }}" method="POST" id="addUserForm">
    @csrf
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1">Nama Lengkap</label>
<input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" placeholder="Masukkan nama lengkap" type="text" name="name" required>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1">Nomor Telepon</label>
<input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" placeholder="+62857Xxxxxx" type="text" name="nomor_telepon" required>
</div>
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1">Email</label>
<input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" placeholder="Alamat email" type="email" name="email" required>
</div>
</div>
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1">Password Sementara</label>
<input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" placeholder="Masukkan password" type="password" name="password" required>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1">Role</label>
<select
    class="w-full px-4 py-2 border border-outline-variant rounded-lg
           focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary
           text-body-md bg-white"
    name="role"
    required
>
    <option value="owner">Owner</option>
    <option value="petugas">Petugas</option>
    <option value="admin">Admin</option>
</select>
</div>
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1">Unit (Optional)</label>
<input class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md" placeholder="Contoh: A-1204" type="text" name="nomor_unit">
</div>
</div>
<div>
<label class="block text-label-md font-label-md text-on-surface mb-1" >Status</label>
<select class="w-full px-4 py-2 border border-outline-variant rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md bg-white" name="status" required>
<option value="aktif">Aktif</option>
<option value="nonaktif">Nonaktif</option>
</select>
</div>
</form>
</div>
<div class="p-6 border-t border-outline-variant flex justify-end gap-3 bg-surface-container">
<button class="px-5 py-2.5 rounded-lg border border-outline-variant font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" onclick="document.getElementById('add-user-modal').classList.add('hidden')" type="button">Batal</button>
<button 
    class="px-4 py-2 rounded-lg font-label-md text-label-md bg-primary text-on-primary hover:bg-on-primary-fixed-variant transition-colors shadow-sm" 
    form="addUserForm" type="submit">
                Simpan
            </button>
</div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editModal = document.getElementById('edit-user-modal');
    const editForm = document.getElementById('editUserForm');

    // Buka dan Auto-fill Modal Edit
    document.querySelectorAll('.edit-user-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.dataset.id;
            
            // Set URL Action Form secara dinamis
            editForm.action = `/dashboard/admin/pengguna/${id}`;

            // Autofill field input modal
            document.getElementById('edit_name').value = this.dataset.name;
            document.getElementById('edit_telepon').value = this.dataset.telepon;
            document.getElementById('edit_email').value = this.dataset.email;
            document.getElementById('edit_role').value = this.dataset.role;
            document.getElementById('edit_unit').value = this.dataset.unit;
            document.getElementById('edit_status').value = this.dataset.status;

            editModal.classList.remove('hidden');
        });
    });

    // Close modal saat klik di luar kontainer modal
    editModal?.addEventListener('click', function (e) {
        if (e.target === editModal) {
            editModal.classList.add('hidden');
        }
    });
});

        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeSidebarBtn = document.getElementById('close-sidebar-btn');

        function toggleSidebar() {
            const isOpen = sidebar.classList.contains('translate-x-0');
            if (isOpen) {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            } else {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
            }
        }

        mobileMenuBtn.addEventListener('click', toggleSidebar);
        closeSidebarBtn.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);
        
        // Modal close on clicking outside
        const modal = document.getElementById('add-user-modal');
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>






</body></html>