<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Verifikasi Kendaraan</title>
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
                      "display-lg": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "title-md": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                      "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                      "label-md": ["11px", {"lineHeight": "16px", "fontWeight": "500"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                      "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "title-lg": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                      "label-lg": ["12px", {"lineHeight": "16px", "fontWeight": "600"}],
                      "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
              }
            }
          }
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #faf8ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .card-shadow { box-shadow: 0px 2px 8px rgba(0,0,0,0.05); }
        .card-hover:hover { box-shadow: 0px 8px 16px rgba(0,0,0,0.08); transform: translateY(-2px); transition: all 0.2s ease; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col md:flex-row font-body-md overflow-x-hidden">

<!-- SIDEBAR DESKTOP -->
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
                   px-4 py-3 mx-2 rounded-lg
                   transition-colors
                   {{ request()->routeIs('verifikasi')
                        ? 'bg-secondary-container text-on-secondary-container font-bold'
                        : 'text-on-surface-variant' }}"
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

<header class="md:hidden flex justify-between items-center w-full px-margin-mobile h-16 bg-surface dark:bg-surface-container-low shadow-sm z-30 fixed top-0 left-0">
<div class="font-headline-lg-mobile text-headline-lg-mobile text-primary dark:text-inverse-primary tracking-tight">Safe Park</div>
<div class="flex gap-md text-primary dark:text-inverse-primary">
<button aria-label="Notifications" class="hover:bg-surface-container-highest p-2 rounded-full transition-colors"><span class="material-symbols-outlined">notifications</span></button>
<button aria-label="Account" class="hover:bg-surface-container-highest p-2 rounded-full transition-colors"><span class="material-symbols-outlined">account_circle</span></button>
</div>
</header>

<main class="flex-grow pt-20 md:pt-8 px-margin-mobile md:px-margin-desktop md:ml-64 pb-24 md:pb-8 w-full max-w-[1600px] mx-auto">
<header class="mb-8 flex flex-col md:flex-row md:justify-between md:items-end gap-4">
<div>
<h2 class="font-display-lg text-display-lg text-on-background mb-2">Verifikasi Kendaraan</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Kelola permohonan pendaftaran kendaraan penghuni.</p>
</div>
<div class="flex bg-surface-container rounded-lg p-1 w-full md:w-auto self-start">
<button class="flex-1 md:flex-none px-6 py-2 rounded-md bg-surface text-primary font-label-lg text-label-lg shadow-sm">Menunggu ({{ number_format($countMenunggu) }})</button>
<button class="flex-1 md:flex-none px-6 py-2 rounded-md text-on-surface-variant hover:bg-surface-variant font-label-lg text-label-lg transition-colors">Disetujui ({{ number_format($countDisetujui) }})</button>
<button class="flex-1 md:flex-none px-6 py-2 rounded-md text-on-surface-variant hover:bg-surface-variant font-label-lg text-label-lg transition-colors">Ditolak ({{ number_format($countDitolak) }})</button>
</div>
</header>

<form method="GET" action="{{ route('verifikasi') }}" class="bg-surface rounded-xl p-4 mb-8 card-shadow flex flex-col md:flex-row gap-4 items-center border border-outline-variant/30">
<input type="hidden" name="status" value="{{ $status }}">
<div class="relative w-full md:w-96">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-10 pr-4 py-2 rounded-lg border border-outline-variant bg-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md transition-shadow" value="{{ request('search') }}" name="search" placeholder="Cari nama, plat nomor, atau unit..." type="text"/>
</div>
<div class="flex gap-2 w-full md:w-auto ml-auto">
<button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-container-high font-label-lg text-label-lg transition-colors bg-surface">
<span class="material-symbols-outlined" style="font-size: 18px;">filter_list</span>
                    Filter
                </button>
</div>
</form>

<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-gutter" id="cardGrid">
    @forelse($permohonan as $item)
        <div class="bg-surface rounded-[16px] p-[24px] card-shadow card-hover border border-outline-variant/20 flex flex-col h-full relative overflow-hidden transition-all duration-300" id="card-{{ $item->id }}">
            
            <div class="absolute top-0 left-0 w-full h-1 {{ $item->status === 'menunggu' ? 'bg-[#fbbf24]' : ($item->status === 'disetujui' ? 'bg-[#16a34a]' : 'bg-error') }}"></div>

            <div class="flex justify-between items-start mb-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold">
                        {{ strtoupper(substr($item->user->name ?? 'U', 0, 2)) }}
                    </div>
                    <div>
                        <h3 class="font-title-lg text-title-lg text-on-background">{{ $item->user->name ?? 'Tanpa Nama' }}</h3>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Unit: {{ $item->user->nomor_unit ?? '-' }}</p>
                    </div>
                </div>

                @if($item->status === 'menunggu')
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#fef3c7] text-[#92400e] font-label-lg text-label-lg border border-[#fde68a]">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#d97706]"></span> Menunggu Verifikasi
                    </span>
                @elseif($item->status === 'disetujui')
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 font-label-lg text-label-lg border border-emerald-300">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Disetujui
                    </span>
                @else
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-red-100 text-red-800 font-label-lg text-label-lg border border-red-300">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span> Ditolak
                    </span>
                @endif
            </div>

            <div class="grid grid-cols-2 gap-y-4 gap-x-2 mb-6 p-4 bg-surface-container-lowest rounded-lg border border-outline-variant/30 flex-grow">
                <div>
                    <p class="font-label-md text-label-md text-outline mb-1">Plat Nomor</p>
                    <p class="font-title-md text-title-md text-on-background font-mono bg-surface-container px-2 py-1 inline-block rounded">{{ $item->nomor_plat }}</p>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-outline mb-1">Tipe</p>
                    <p class="font-body-md text-body-md flex items-center gap-1 capitalize">
                        <span class="material-symbols-outlined text-outline" style="font-size: 18px;">
                            {{ strtolower($item->jenis_kendaraan ?? '') === 'motor' ? 'two_wheeler' : 'directions_car' }}
                        </span> 
                        {{ $item->jenis_kendaraan ?? 'Mobil' }}
                    </p>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-outline mb-1">Merk / Warna</p>
                    <p class="font-body-md text-body-md">{{ $item->merk }} / {{$item->warna }}</p>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-outline mb-1">Tgl Pengajuan</p>
                    <p class="font-body-md text-body-md">{{ $item->created_at ? $item->created_at->format('d M Y, H:i') : '-' }}</p>
                </div>
            </div>

            <div class="flex gap-2 mt-auto">
                <button class="flex-1 py-2 rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-container-high font-label-lg text-label-lg transition-colors bg-surface">Lihat Detail</button>
                
                @if($item->status === 'menunggu')
                    <div class="flex gap-2">
                        <!-- Button Tolak -->
                        <button type="button" 
                                onclick="processVerification({{ $item->id }}, 'ditolak')" 
                                aria-label="Tolak" 
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-error text-on-error hover:bg-[#991b1b] transition-colors">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                        <!-- Button Setujui -->
                        <button type="button" 
                                onclick="processVerification({{ $item->id }}, 'disetujui')" 
                                aria-label="Setujui" 
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#16a34a] text-white hover:bg-[#15803d] transition-colors">
                            <span class="material-symbols-outlined">check</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    @empty
        <div class="col-span-full py-12 text-center text-on-surface-variant">
            Tidak ada data permohonan kendaraan berstatus <b>{{ $status }}</b>.
        </div>
    @endforelse
</div>
</main>

<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-margin-mobile py-sm bg-surface dark:bg-surface-container border-t border-outline-variant dark:border-outline shadow-lg rounded-t-xl">
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high rounded-full transition-colors group" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined group-hover:text-primary">home</span>
<span class="font-label-md text-label-md-mobile mt-1">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-lg py-xs scale-90 transition-transform" href="#">
<span class="material-symbols-outlined">verified</span>
<span class="font-label-md text-label-md-mobile mt-1">Verifikasi</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high rounded-full transition-colors group" href="{{ route('tamu') }}">
<span class="material-symbols-outlined group-hover:text-primary">people</span>
<span class="font-label-md text-label-md-mobile mt-1">Tamu</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high rounded-full transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">qr_code</span>
<span class="font-label-md text-label-md-mobile mt-1">Scan</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-surface-variant px-md py-xs hover:bg-surface-variant dark:hover:bg-surface-container-high rounded-full transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">person</span>
<span class="font-label-md text-label-md-mobile mt-1">Profil</span>
</a>
</nav>

<!-- ELEMENT AUDIO NOTIFIKASI -->
<audio id="notifSound" src="{{ asset('audio/handoff.mp3') }}" preload="auto"></audio>

<script>
async function processVerification(id, newStatus) {
    if (!confirm(`Apakah Anda yakin ingin men-${newStatus} permohonan kendaraan ini?`)) {
        return;
    }

    try {
        const response = await fetch(`/verifikasi/${id}/status`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ status: newStatus })
        });

        const result = await response.json();

        if (response.ok && result.success) {
            const card = document.getElementById(`card-${id}`);
            if (card) {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.95)';
                setTimeout(() => card.remove(), 300);
            }
        } else {
            alert('Gagal memproses verifikasi: ' + (result.message || 'Terjadi kesalahan pada server.'));
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Terjadi kesalahan jaringan atau server.');
    }
}

// SCRIPT REAL-TIME CHECK NOTIFIKASI BANTUAN
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

    const bantuanLink = document.querySelector('a[href="{{ route("admin.bantuan") }}"]');
    if (bantuanLink) {
      bantuanLink.addEventListener('click', function() {
        if (bantuanBadge) bantuanBadge.classList.add('hidden');
      });
    }
});
</script>

</body></html>