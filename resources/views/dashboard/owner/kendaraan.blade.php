<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kendaraan Saya - Safe Park</title>
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
    <style>
        body { background-color: #faf8ff; }
        .glass-card { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 1px solid rgba(226, 232, 240, 0.5); }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex">

<!-- SideNavBar -->
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
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('kendaraan') }}">
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

<!-- Main Content Canvas -->
<main class="flex-1 md:ml-64 w-full md:w-[calc(100%-16rem)] min-h-screen flex flex-col relative">
    <header class="bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm docked full-width top-0 sticky z-40">
        <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-sm">
            <div class="md:hidden flex items-center gap-sm">
                <span class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-primary">Safe Park</span>
            </div>
            <div class="hidden md:block flex-1"></div>
            <div class="flex items-center gap-sm">
                
            </div>
        </div>
    </header>

    <div class="p-margin-mobile md:p-margin-desktop flex-1 max-w-7xl mx-auto w-full flex flex-col gap-lg relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-md">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-background mb-xs">Kendaraan Saya</h2>
                <p class="font-body-lg text-body-lg text-secondary">Kelola kendaraan yang terdaftar di akun Anda.</p>
            </div>
            <button class="bg-primary-container text-on-primary font-label-lg text-label-lg px-md py-sm rounded-lg hover:bg-primary transition-colors shadow-sm flex items-center gap-xs" onclick="document.getElementById('registerModal').classList.remove('hidden')">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Daftarkan Kendaraan
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <!-- Stat Cards -->
            <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-md">
                <div class="glass-card rounded-[16px] p-lg flex items-center gap-md shadow-[0_2px_8px_rgba(0,0,0,0.05)]">
                    <div class="w-12 h-12 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">directions_car</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary">Total Kendaraan</p>
                        <p class="font-title-lg text-title-lg text-on-background" id="stat-total">{{ $totalKendaraan ?? 0 }}</p>
                    </div>
                </div>
                <div class="glass-card rounded-[16px] p-lg flex items-center gap-md shadow-[0_2px_8px_rgba(0,0,0,0.05)]">
                    <div class="w-12 h-12 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-600">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary">Disetujui</p>
                        <p class="font-title-lg text-title-lg text-on-background" id="stat-disetujui">{{ $disetujui ?? 0 }}</p>
                    </div>
                </div>
                <div class="glass-card rounded-[16px] p-lg flex items-center gap-md shadow-[0_2px_8px_rgba(0,0,0,0.05)]">
                    <div class="w-12 h-12 rounded-full bg-amber-500/10 flex items-center justify-center text-amber-600">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">pending_actions</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary">Menunggu Verifikasi</p>
                        <p class="font-title-lg text-title-lg text-on-background" id="stat-menunggu">{{ $menunggu ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <!-- Left Column: Daftar Kendaraan -->
            <div class="lg:col-span-8 flex flex-col gap-md">
                <h3 class="font-title-md text-title-md text-on-background border-b border-outline-variant pb-xs">Daftar Kendaraan</h3>

                <!-- Container List Kendaraan (Akan diperbarui via JS tanpa merusak layout) -->
                <div id="kendaraan-list-container" class="flex flex-col gap-md">
                    <?php $listData =$kendaraans ?? $Kendaraans ?? $totalkendaraan ?? []; ?>

                    <?php if (count($listData) > 0): ?>
                        <?php foreach ($listData as $k): ?>
                        <div class="glass-card rounded-[16px] p-md flex flex-col justify-between shadow-[0_2px_8px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_16px_rgba(0,0,0,0.08)] transition-all">
                            <div class="flex justify-between items-start mb-sm">
                                <div>
                                    <div class="flex items-center gap-sm mb-xs">
                                        <h4 class="font-title-md text-title-md text-on-background font-bold">
                                            <?= e($k->merk ?? $k->merek ?? 'Kendaraan') ?> <?= e($k->model ?? '') ?>
                                        </h4>
                                        <?php if (($k->status ?? '') == 'disetujui'): ?>
                                            <span class="bg-emerald-500/10 text-emerald-700 font-label-md text-label-md px-2 py-0.5 rounded-full border border-emerald-500/20">Disetujui</span>
                                        <?php elseif (($k->status ?? '') == 'ditolak'): ?>
                                            <span class="bg-red-500/10 text-red-700 font-label-md text-label-md px-2 py-0.5 rounded-full border border-red-500/20">Ditolak</span>
                                        <?php else: ?>
                                            <span class="bg-amber-500/10 text-amber-700 font-label-md text-label-md px-2 py-0.5 rounded-full border border-amber-500/20">Menunggu Verifikasi</span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="font-label-lg text-label-lg text-primary font-mono font-semibold tracking-wider">
                                        <?= e($k->nomor_plat ?? $k->nomor_plat ?? 'B 0000 XXX') ?>
                                    </p>
                                </div>

                                <!-- Tombol Hapus Langsung -->
                                <button type="button" 
                                        onclick="if(confirm('Yakin ingin menghapus kendaraan <?= e($k->nomor_plat ?? $k->nomor_plat ?? '') ?>?')) { document.getElementById('delete-form-<?= $k->id ?>').submit(); }"
                                        class="flex items-center gap-1 bg-error/10 hover:bg-error text-error hover:text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition-all border border-error/20 shadow-sm active:scale-95">
                                    <span class="material-symbols-outlined text-[16px]">delete</span>
                                    Hapus
                                </button>

                                <form id="delete-form-<?= $k->id ?>" action="{{ route('kendaraanowner.destroy', $k->id ?? 0) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>

                            <div class="grid grid-cols-2 gap-sm mt-xs pt-xs border-t border-outline-variant/30">
                                <div>
                                    <p class="font-label-md text-label-md text-outline">Warna</p>
                                    <p class="font-body-md text-body-md text-on-background font-medium"><?= e($k->warna ?? '-') ?></p>
                                </div>
                                <div>
                                    <p class="font-label-md text-label-md text-outline">Tipe</p>
                                    <p class="font-body-md text-body-md text-on-background font-medium"><?= e($k->jenis_kendaraan ?? 'Motor') ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="glass-card rounded-[16px] p-lg text-center text-secondary border border-dashed border-outline-variant">
                            Belum ada kendaraan terdaftar.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- KOTAK TAMBAH KENDARAAN LAIN (Aman di luar container polling JS) -->
                <div class="border-2 border-dashed border-outline-variant rounded-[16px] p-xl flex flex-col items-center justify-center text-center text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="document.getElementById('registerModal').classList.remove('hidden')">
                    <span class="material-symbols-outlined text-display-lg mb-sm">add_circle</span>
                    <p class="font-title-md text-title-md">Tambah Kendaraan Lain</p>
                    <p class="font-body-md text-body-md text-outline mt-xs">Daftarkan kendaraan baru untuk mendapatkan akses parkir.</p>
                </div>
            </div>

            <!-- Right Column: Informasi Verifikasi -->
            <div class="lg:col-span-4 flex flex-col gap-md">
                <div class="glass-card rounded-[16px] p-lg shadow-[0_2px_8px_rgba(0,0,0,0.05)]">
                    <h3 class="font-title-md text-title-md text-on-background mb-md flex items-center gap-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">info</span>
                        Informasi Verifikasi
                    </h3>
                    <p class="font-body-md text-body-md text-secondary mb-md">
                        Kendaraan baru yang didaftarkan akan berstatus <strong class="text-amber-600 font-semibold bg-amber-500/10 px-1 rounded">Menunggu Verifikasi</strong>. Admin gedung akan meninjau dokumen yang diunggah dalam 1x24 jam kerja.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal Register Real-time -->
<div class="fixed inset-0 z-[100] hidden" id="registerModal">
    <div class="absolute inset-0 bg-inverse-surface/40 backdrop-blur-sm" onclick="closeRegisterModal()"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[calc(100%-32px)] max-w-2xl bg-surface rounded-[16px] shadow-[0_12px_32px_rgba(0,0,0,0.12)] flex flex-col max-h-[90vh]">
        <div class="flex justify-between items-center p-lg border-b border-outline-variant">
            <h3 class="font-title-lg text-title-lg text-on-background">Daftarkan Kendaraan Baru</h3>
            <button class="text-secondary hover:text-on-background p-1 rounded-full hover:bg-surface-container" onclick="closeRegisterModal()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form id="formDaftarKendaraan" action="{{ route('kendaraan.store.ajax') }}" method="POST" onsubmit="submitKendaraan(event)">
            @csrf
            <div class="p-lg overflow-y-auto font-body-md text-body-md text-on-background space-y-md">
                
                <!-- Pilih Slot Parkir -->
                <div class="flex flex-col gap-xs">
                    <label class="font-label-lg text-label-lg text-on-surface font-semibold flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]">local_parking</span>
                        Pilih Slot Parkir Anda
                    </label>
                    <select id="select_slot" name="pemesanan_id" required class="w-full rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container/20 bg-surface-container-lowest py-2 px-3">
                        <option value="">-- Memuat slot parkir Anda... --</option>
                    </select>
                    <p class="text-xs text-secondary">*Hanya menampilkan slot parkir yang pernah Anda beli/pesan.</p>
                </div>
            
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-lg text-label-lg text-on-surface">Nomor Polisi (Plat)</label>
                        <!-- Disesuaikan dengan kolom nomor_plat -->
                        <input name="nomor_plat" required class="w-full rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container/20 bg-surface-container-lowest py-2 px-3 font-mono uppercase" placeholder="B 1234 CD" type="text"/>
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-lg text-label-lg text-on-surface">Jenis Kendaraan</label>
                        <!-- Disesuaikan dengan enum ['mobil', 'motor', 'truk'] -->
                        <select name="jenis_kendaraan" required class="w-full rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container/20 bg-surface-container-lowest py-2 px-3">
                            <option value="mobil">Mobil</option>
                            <option value="motor">Motor</option>
                            <option value="truk">Truk</option>
                        </select>
                    </div>
                </div>
            
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-lg text-label-lg text-on-surface">Merk Kendaraan</label>
                        <!-- Disesuaikan dengan kolom merk -->
                        <input name="merk" required class="w-full rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container/20 bg-surface-container-lowest py-2 px-3" placeholder="Contoh: Honda Vario 150" type="text"/>
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-lg text-label-lg text-on-surface">Warna</label>
                        <!-- Disesuaikan dengan kolom warna -->
                        <input name="warna" required class="w-full rounded-lg border-outline-variant focus:border-primary-container focus:ring focus:ring-primary-container/20 bg-surface-container-lowest py-2 px-3" placeholder="Contoh: Hitam" type="text"/>
                    </div>
                </div>
            </div>
        
            <div class="p-lg border-t border-outline-variant flex justify-end gap-sm bg-surface-container-lowest rounded-b-[16px]">
                <button type="button" class="px-md py-sm rounded-lg font-label-lg text-label-lg border border-outline text-secondary hover:bg-surface-container transition-colors" onclick="closeRegisterModal()">Batal</button>
                <button type="submit" id="btnSubmitModal" class="px-md py-sm rounded-lg font-label-lg text-label-lg bg-primary-container text-on-primary hover:bg-primary transition-colors shadow-sm">Simpan Pendaftaran</button>
            </div>
        </form>
    </div>
</div>

<!-- Script Polling Realtime JavaScript -->
<script>
    setInterval(() => {
        fetch("/api/kendaraan/real-time")
            .then(res => res.json())
            .then(data => {
                if(data.total !== undefined) document.getElementById('stat-total').innerText = data.total;
                if(data.disetujui !== undefined) document.getElementById('stat-disetujui').innerText = data.disetujui;
                if(data.menunggu !== undefined) document.getElementById('stat-menunggu').innerText = data.menunggu;

                if (data.kendaraans) {
                    let html = '';
                    if(data.kendaraans.length === 0) {
                        html = `<div class="glass-card rounded-[16px] p-lg text-center text-secondary border border-dashed border-outline-variant">Belum ada kendaraan terdaftar.</div>`;
                    } else {
                        data.kendaraans.forEach(k => {
                            let badge = '';
                            if(k.status === 'disetujui') {
                                badge = `<span class="bg-emerald-500/10 text-emerald-700 font-label-md text-label-md px-2 py-0.5 rounded-full border border-emerald-500/20">Disetujui</span>`;
                            } else if(k.status === 'ditolak') {
                                badge = `<span class="bg-red-500/10 text-red-700 font-label-md text-label-md px-2 py-0.5 rounded-full border border-red-500/20">Ditolak</span>`;
                            } else {
                                badge = `<span class="bg-amber-500/10 text-amber-700 font-label-md text-label-md px-2 py-0.5 rounded-full border border-amber-500/20">Menunggu Verifikasi</span>`;
                            }

                            let plat = k.nomor_plat || k.plat_nomor || 'B 0000 XXX';
                            let merk = k.merek || k.merk || 'Kendaraan';
                            let model = k.model || '';

                            html += `
                            <div class="glass-card rounded-[16px] p-md flex flex-col justify-between shadow-[0_2px_8px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_16px_rgba(0,0,0,0.08)] transition-all">
                                <div class="flex justify-between items-start mb-sm">
                                    <div>
                                        <div class="flex items-center gap-sm mb-xs">
                                            <h4 class="font-title-md text-title-md text-on-background font-bold">${merk} ${model}</h4>
                                            ${badge}
                                        </div>
                                        <p class="font-label-lg text-label-lg text-primary font-mono font-semibold tracking-wider">${plat}</p>
                                    </div>
                                    <button type="button" 
                                            onclick="if(confirm('Yakin ingin menghapus kendaraan ${plat}?')) { alert('Proses hapus ID: ' + ${k.id}); }"
                                            class="flex items-center gap-1 bg-error/10 hover:bg-error text-error hover:text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition-all border border-error/20 shadow-sm active:scale-95">
                                        <span class="material-symbols-outlined text-[16px]">delete</span>
                                        Hapus
                                    </button>
                                </div>
                                <div class="grid grid-cols-2 gap-sm mt-xs pt-xs border-t border-outline-variant/30">
                                    <div>
                                        <p class="font-label-md text-label-md text-outline">Warna</p>
                                        <p class="font-body-md text-body-md text-on-background font-medium">${k.warna || '-'}</p>
                                    </div>
                                    <div>
                                        <p class="font-label-md text-label-md text-outline">Tipe</p>
                                        <p class="font-body-md text-body-md text-on-background font-medium">${k.jenis_kendaraan || 'Motor'}</p>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }
                    document.getElementById('kendaraan-list-container').innerHTML = html;
                }
            })
            .catch(err => console.error(err));
    }, 3000);

    // Function Buka Modal & Fetch Slot Milik User
    function openRegisterModal() {
    document.getElementById('registerModal').classList.remove('hidden');
    const selectSlot = document.getElementById('select_slot');
    selectSlot.innerHTML = '<option value="">-- Memuat slot parkir Anda... --</option>';

    fetch("{{ route('kendaraan.myslot') }}")
        .then(res => res.json())
        .then(data => {
            selectSlot.innerHTML = '';
            
            if (data.slots && data.slots.length > 0) {
                selectSlot.innerHTML = '<option value="">-- Pilih Slot Parkir --</option>';
                data.slots.forEach(p => {
                    // Ambil nama/kode slot dari relasi slotParkir
                    let namaSlot = p.slot_parkir ? (p.slot_parkir.nama_slot || p.slot_parkir.kode_slot || ('Slot #' + p.slot_parkir.id)) : ('Pemesanan #' + p.id);
                    let tipe = p.tipe_booking ? ` (${p.tipe_booking})` : '';
                    
                    selectSlot.innerHTML += `<option value="${p.id}">${namaSlot}${tipe}</option>`;
                });
            } else {
                selectSlot.innerHTML = '<option value="">Anda belum memiliki slot parkir (Beli slot dulu)</option>';
            }
        })
        .catch(err => {
            console.error('Error:', err);
            selectSlot.innerHTML = '<option value="">Gagal memuat slot parkir</option>';
        });
}

function closeRegisterModal() {
    document.getElementById('registerModal').classList.add('hidden');
    document.getElementById('formDaftarKendaraan').reset();
}

// Ubah fungsi trigger di tombol utama
document.querySelectorAll("button[onclick*='registerModal']").forEach(btn => {
    btn.setAttribute("onclick", "openRegisterModal()");
});
document.querySelectorAll("div[onclick*='registerModal']").forEach(div => {
    div.setAttribute("onclick", "openRegisterModal()");
});

// Kirim Data via Real-Time AJAX (Tanpa Reload)
function submitKendaraan(e) {
    e.preventDefault();
    const form = document.getElementById('formDaftarKendaraan');
    const btn = document.getElementById('btnSubmitModal');
    const formData = new FormData(form);

    btn.disabled = true;
    btn.innerText = 'Menyimpan...';

    fetch(form.action, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        },
        body: formData
    })
    .then(async res => {
        const data = await res.json();
        if (!res.ok) {
            // Jika validasi Laravel gagal (Error 422)
            if (data.errors) {
                let errMessages = Object.values(data.errors).flat().join('\n');
                throw new Error(errMessages);
            }
            throw new Error(data.message || 'Gagal menyimpan data.');
        }
        return data;
    })
    .then(data => {
        btn.disabled = false;
        btn.innerText = 'Simpan Pendaftaran';

        if (data.success) {
            alert(data.message);
            closeRegisterModal();
            // Polling JS akan memperbarui daftar kendaraan secara real-time!
        }
    })
    .catch(err => {
        btn.disabled = false;
        btn.innerText = 'Simpan Pendaftaran';
        console.error('Error Submit:', err);
        alert('Gagal:\n' + err.message);
    });
}
</script>

</body>
</html>