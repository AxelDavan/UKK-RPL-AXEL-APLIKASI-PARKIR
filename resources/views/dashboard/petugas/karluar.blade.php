<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Safe Park - Proses Keluar Karcis</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#004ac6",
            "primary-container": "#2563eb",
            "on-primary": "#ffffff",
            "on-primary-container": "#eeefff",
            "primary-fixed": "#dbe1ff",
            "on-primary-fixed": "#00174b",
            "primary-fixed-dim": "#b4c5ff",
            "on-primary-fixed-variant": "#003ea8",
            "secondary": "#505f76",
            "secondary-container": "#d0e1fb",
            "on-secondary": "#ffffff",
            "on-secondary-container": "#54647a",
            "secondary-fixed": "#d3e4fe",
            "secondary-fixed-dim": "#b7c8e1",
            "on-secondary-fixed": "#0b1c30",
            "on-secondary-fixed-variant": "#38485d",
            "tertiary": "#4d556b",
            "tertiary-container": "#656d84",
            "on-tertiary": "#ffffff",
            "on-tertiary-container": "#eef0ff",
            "tertiary-fixed": "#dae2fd",
            "tertiary-fixed-dim": "#bec6e0",
            "on-tertiary-fixed": "#131b2e",
            "on-tertiary-fixed-variant": "#3f465c",
            "background": "#faf8ff",
            "surface": "#faf8ff",
            "surface-bright": "#faf8ff",
            "surface-dim": "#d9d9e5",
            "surface-container-lowest": "#ffffff",
            "surface-container-low": "#f3f3fe",
            "surface-container": "#ededf9",
            "surface-container-high": "#e7e7f3",
            "surface-container-highest": "#e1e2ed",
            "on-surface": "#191b23",
            "on-surface-variant": "#434655",
            "on-background": "#191b23",
            "outline": "#737686",
            "outline-variant": "#c3c6d7",
            "inverse-surface": "#2e3039",
            "inverse-on-surface": "#f0f0fb",
            "inverse-primary": "#b4c5ff",
            "surface-tint": "#0053db",
            "error": "#ba1a1a",
            "error-container": "#ffdad6",
            "on-error": "#ffffff",
            "on-error-container": "#93000a"
          },
          fontFamily: {
            sans: ["Plus Jakarta Sans", "sans-serif"],
            "body-md": ["Plus Jakarta Sans", "sans-serif"],
            "title-md": ["Plus Jakarta Sans", "sans-serif"],
            "title-lg": ["Plus Jakarta Sans", "sans-serif"],
            "label-md": ["Plus Jakarta Sans", "sans-serif"],
            "label-lg": ["Plus Jakarta Sans", "sans-serif"],
            "headline-lg": ["Plus Jakarta Sans", "sans-serif"],
            "display-lg": ["Plus Jakarta Sans", "sans-serif"]
          },
          fontSize: {
            "label-md": ["11px", { lineHeight: "16px", fontWeight: "500" }],
            "label-lg": ["12px", { lineHeight: "16px", fontWeight: "600" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
            "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
            "title-lg": ["20px", { lineHeight: "28px", fontWeight: "600" }],
            "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700" }],
            "display-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.02em", fontWeight: "700" }]
          },
          spacing: {
            "xs": "4px",
            "sm": "8px",
            "md": "16px",
            "lg": "24px",
            "xl": "32px",
            "gutter": "24px",
            "margin-desktop": "32px"
          },
          borderRadius: {
            DEFAULT: "0.25rem",
            lg: "0.5rem",
            xl: "0.75rem",
            full: "9999px"
          }
        }
      }
    };
  </script>
</head>
<body class="bg-background font-sans text-on-surface antialiased min-h-screen">

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

        <!-- DASHBOARD - AKTIF -->
        <a
            href="{{ route('dashboard') }}"
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
                   bg-secondary-container
                   text-on-secondary-container
                   rounded-lg
                   px-4 py-3 mx-2
                   font-bold"
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

<!-- MAIN CONTENT WRAPPER -->
<div class="pl-72 flex flex-col min-h-screen">
    <header class="fixed top-0 left-72 right-0 h-16 bg-surface-container-lowest/90 backdrop-blur-xl z-40 shadow-xs">
        <div class="h-16 w-full px-xl flex items-center justify-between">
            <div class="flex items-center gap-md">
                <span class="material-symbols-outlined text-primary text-[22px]">shield</span>
                <div class="flex items-center gap-xs text-on-surface-variant text-xs">
                    <span>Terminal Gerbang</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Sistem Pos Terpadu</span>
                </div>
            </div>
            <div class="flex items-center gap-lg">
                <div class="flex items-center gap-sm px-md py-xs rounded-full bg-secondary-container text-on-secondary-container text-xs font-semibold">
                    <span class="material-symbols-outlined text-[16px]">schedule</span>
                    <span id="header-clock">Loading waktu...</span>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full pt-20 flex-1 bg-background p-xl">
        <div class="flex flex-col w-full gap-lg">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-primary">Terminal Keberangkatan • Gate Out 01</span>
                <h1 class="text-2xl font-bold text-on-surface tracking-tight mt-1">Proses Keluar Karcis</h1>
                <p class="text-sm text-secondary">Penyelesaian sesi kunjungan & kalkulasi biaya parkir otomatis.</p>
            </div>

            <!-- METRIC CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                <div class="bg-surface-container-lowest rounded-xl p-md shadow-xs flex items-center gap-md">
                    <div class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[26px]">toll</span>
                    </div>
                    <div>
                        <span class="text-xs uppercase text-secondary font-semibold">Status Gerbang</span>
                        <h3 class="text-base font-bold text-on-surface">Palang Pintu Siaga</h3>
                        <span class="text-xs text-emerald-600 font-semibold">• Barrier Arm 01 Terkunci</span>
                    </div>
                </div>

                <div class="bg-surface-container-lowest rounded-xl p-md shadow-xs flex items-center gap-md">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-primary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[26px]">local_parking</span>
                    </div>
                    <div>
                        <span class="text-xs uppercase text-secondary font-semibold">Slot Parkir Tamu</span>
                        <h3 class="text-base font-bold text-primary">{{ $slottersedia ?? 114 }} Tersedia</h3>
                        <span class="text-xs text-secondary">Sinkronisasi kuota terotomatisasi</span>
                    </div>
                </div>
            </div>

            <!-- MAIN FORM & RINCIAN -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-lg items-start">
                
                <!-- LEFT FORM (7 COLS) -->
                <div class="lg:col-span-7 flex flex-col gap-lg bg-surface-container-lowest p-lg rounded-xl shadow-xs">
                    
                    <!-- INPUT NOMOR KARCIS -->
                    <div class="flex flex-col gap-xs">
                        <label class="text-xs font-bold text-on-surface flex justify-between" for="ticket-number">
                            <span>Nomor Karcis Fisik / Plat Nomor <span class="text-error">*</span></span>
                            <span class="text-secondary font-normal">Tekan F2 untuk fokus</span>
                        </label>
                        <div class="flex gap-sm">
                            <div class="relative flex-1">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline text-[20px]">qr_code_scanner</span>
                                <input class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-surface-container-low font-mono font-bold text-base uppercase focus:bg-white focus:ring-2 focus:ring-primary outline-none" id="ticket-number" placeholder="Contoh: A-00004 atau B 6178 KY" type="text" autocomplete="off"/>
                            </div>
                            <button class="bg-primary text-white hover:bg-primary/90 px-5 py-2.5 rounded-lg font-bold text-sm flex items-center gap-1 transition-all" id="btn-cari-data" type="button">
                                <span class="material-symbols-outlined text-[18px]">search</span>
                                <span>Cari Data</span>
                            </button>
                        </div>
                    </div>

                    <!-- VERIFIKASI PLAT NOMOR -->
                    <div class="flex flex-col gap-xs">
                        <label class="text-xs font-bold text-on-surface">Verifikasi Plat Nomor Kendaraan</label>
                        <div class="p-3 rounded-xl bg-surface-container-low">
                            <input class="px-4 py-2 rounded-lg bg-white font-mono font-bold text-lg uppercase tracking-widest border border-slate-200 w-full" id="input-plat" placeholder="B 0000 XXX" type="text" readonly/>
                        </div>
                    </div>

                    <!-- RINCIAN DURASI & TARIF -->
                    <div class="bg-surface-container p-md rounded-xl flex flex-col gap-md">
                        <span class="text-xs font-bold uppercase text-secondary">Rincian Durasi & Tarif Parkir Tamu</span>
                        
                        <div class="grid grid-cols-3 gap-md">
                            <div class="bg-white p-3 rounded-lg flex flex-col">
                                <span class="text-xs text-secondary">Waktu Masuk</span>
                                <span class="font-mono font-bold text-sm text-on-surface mt-1" id="val-waktu-masuk">--:-- WIB</span>
                                <span class="text-[10px] text-slate-400">Gate In 01</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg flex flex-col">
                                <span class="text-xs text-secondary">Waktu Keluar</span>
                                <span class="font-mono font-bold text-sm text-on-surface mt-1" id="val-waktu-keluar">--:-- WIB</span>
                                <span class="text-[10px] text-slate-400">Gate Out 01 (Sekarang)</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg flex flex-col">
                                <span class="text-xs text-secondary">Total Durasi</span>
                                <span class="font-mono font-bold text-sm text-primary mt-1" id="val-total-durasi">0 Jam 0 Menit</span>
                                <span class="text-[10px] text-slate-400">Perhitungan Presisi</span>
                            </div>
                        </div>

                        <!-- BIAYA PARKIR SUMMARY -->
                        <div class="p-4 rounded-xl bg-white flex justify-between items-center border border-slate-200">
                            <div>
                                <span class="text-xs font-bold uppercase text-secondary block">Total Biaya Parkir</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-extrabold font-mono text-slate-900" id="val-total-biaya">Rp 0</span>
                                    <span class="text-xs font-semibold text-primary" id="val-detail-biaya">(Rp 4.000/jam)</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="px-3 py-1 rounded-full bg-blue-50 text-primary text-xs font-bold inline-block">Tarif Parkir: Rp 4.000 / Jam</span>
                            </div>
                        </div>
                    </div>

                    <!-- TOMBOL PROSES -->
                    <div class="flex gap-md pt-2">
                        <button class="flex-1 bg-error hover:opacity-95 text-white font-bold py-3.5 px-6 rounded-xl shadow-md flex items-center justify-center gap-2 transition-all cursor-pointer" id="btn-process-exit" type="button">
                            <span class="material-symbols-outlined text-[22px]">lock_open</span>
                            <span>Proses Kendaraan Keluar & Buka Palang</span>
                        </button>
                        <button class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-bold py-3.5 px-4 rounded-xl transition-all flex items-center gap-1" id="btn-reset" type="button">
                            <span class="material-symbols-outlined text-[20px]">restart_alt</span>
                            <span>Reset</span>
                        </button>
                    </div>
                </div>

                <!-- RIGHT SUMMARY CARD (5 COLS) -->
                <div class="lg:col-span-5 bg-surface-container-lowest p-lg rounded-xl shadow-xs flex flex-col gap-md">
                    <h3 class="font-bold text-sm text-on-surface border-b pb-2">Ringkasan Sesi Kunjungan</h3>
                    
                    <div class="flex flex-col gap-3 text-xs">
                        <div class="flex justify-between items-center py-1">
                            <span class="text-secondary flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">directions_car</span>Nomor Plat Kendaraan</span>
                            <span class="font-mono font-bold text-sm text-slate-900" id="side-nomor-plat">-</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-secondary flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">apartment</span>Penghuni Dituju (Host)</span>
                            <span class="font-semibold text-slate-800">Slot Parkir Tamu</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-secondary flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">login</span>Timestamp Masuk</span>
                            <span class="font-mono text-slate-800" id="side-waktu-masuk">-</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-secondary flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">badge</span>Kategori Karcis</span>
                            <span class="px-2.5 py-0.5 rounded-full bg-slate-100 font-bold text-slate-700" id="side-kategori">Tamu</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

<!-- JAVASCRIPT CARI DATA & PROSES KELUAR -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Live Header Clock
    function updateHeaderClock() {
        const now = new Date();
        const timeStr = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' }) + ' WIB';
        const dateStr = now.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'short', year: 'numeric' });
        const el = document.getElementById('header-clock');
        if (el) el.innerText = `${dateStr} • ${timeStr}`;
    }
    updateHeaderClock();
    setInterval(updateHeaderClock, 1000);

    // 2. Shortcut F2
    const ticketInput = document.getElementById('ticket-number');
    document.addEventListener('keydown', function (e) {
        if (e.key === 'F2') {
            e.preventDefault();
            ticketInput?.focus();
            ticketInput?.select();
        }
    });

    let activeData = null;

    // 3. CARI DATA AJAX
    async function cariKarcisData() {
        const keyword = ticketInput ? ticketInput.value.trim() : '';
        if (!keyword) {
            alert('Masukkan Nomor Karcis atau Plat Nomor terlebih dahulu!');
            return;
        }

        try {
            const res = await fetch("{{ route('karluar.cari') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ nomor_karcis: keyword })
            });

            const result = await res.json();

            if (res.ok && result.status === 'success') {
                activeData = result.data;
                
                // Update Layar Kiri & Kanan
                document.getElementById('input-plat').value = activeData.nomor_plat;
                document.getElementById('val-waktu-masuk').innerText = activeData.waktu_masuk;
                document.getElementById('val-waktu-keluar').innerText = activeData.waktu_keluar;
                document.getElementById('val-total-durasi').innerText = activeData.durasi;
                document.getElementById('val-total-biaya').innerText = activeData.total_biaya_rp;
                document.getElementById('val-detail-biaya').innerText = `(Rp 4.000/jam • Terhitung ${activeData.jam_terhitung} Jam)`;

                document.getElementById('side-nomor-plat').innerText = activeData.nomor_plat;
                document.getElementById('side-waktu-masuk').innerText = activeData.waktu_masuk_full;
                document.getElementById('side-kategori').innerText = activeData.kategori;
            } else {
                alert(result.message || 'Karcis tidak ditemukan / sudah checkout!');
                resetForm();
            }
        } catch (err) {
            alert('Gagal terhubung ke server!');
        }
    }

    // Trigger Klik Tombol Cari Data & Enter Key
    document.getElementById('btn-cari-data')?.addEventListener('click', cariKarcisData);
    ticketInput?.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            cariKarcisData();
        }
    });

    // 4. RESET FORM
    function resetForm() {
        activeData = null;
        if (ticketInput) ticketInput.value = '';
        document.getElementById('input-plat').value = '';
        document.getElementById('val-waktu-masuk').innerText = '--:-- WIB';
        document.getElementById('val-waktu-keluar').innerText = '--:-- WIB';
        document.getElementById('val-total-durasi').innerText = '0 Jam 0 Menit';
        document.getElementById('val-total-biaya').innerText = 'Rp 0';
        document.getElementById('val-detail-biaya').innerText = '(Rp 4.000/jam)';

        document.getElementById('side-nomor-plat').innerText = '-';
        document.getElementById('side-waktu-masuk').innerText = '-';
        document.getElementById('side-kategori').innerText = 'Tamu';
    }
    document.getElementById('btn-reset')?.addEventListener('click', resetForm);

    // 5. PROSES KELUAR & BUKA PALANG
    document.getElementById('btn-process-exit')?.addEventListener('click', async function () {
        if (!activeData) {
            alert('Silakan cari/scan data karcis terlebih dahulu!');
            return;
        }

        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[22px]">progress_activity</span><span>Membuka Palang Pintu...</span>';

        try {
            const res = await fetch("{{ route('karluar.proses') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    karcis_id: activeData.karcis_id,
                    total_biaya: activeData.total_biaya
                })
            });

            const result = await res.json();

            if (res.ok && result.status === 'success') {
                btn.innerHTML = '<span class="material-symbols-outlined text-[22px]">check_circle</span><span>Palang Terbuka!</span>';
                btn.classList.remove('bg-error');
                btn.classList.add('bg-emerald-600');

                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            } else {
                alert(result.message || 'Gagal memproses keluar!');
                btn.disabled = false;
                btn.innerHTML = '<span class="material-symbols-outlined text-[22px]">lock_open</span><span>Proses Kendaraan Keluar & Buka Palang</span>';
            }
        } catch (err) {
            alert('Gagal terhubung ke server!');
            btn.disabled = false;
            btn.innerHTML = '<span class="material-symbols-outlined text-[22px]">lock_open</span><span>Proses Kendaraan Keluar & Buka Palang</span>';
        }
    });
});
</script>

</body>
</html>