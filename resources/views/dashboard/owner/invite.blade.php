<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undang Tamu (Invite Guest) - Safe Park Resident Dashboard</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
  
  <!-- CDN QR CODE GENERATOR LIGHTWEIGHT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

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
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 500, 'GRAD' 0, 'opsz' 24;
    }
  </style>
</head>
<body class="bg-surface text-slate-800 font-sans min-h-screen flex antialiased">

  <!-- LEFT SIDEBAR -->
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
      <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10" href="{{ route('invite') }}">
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

  <!-- MAIN CONTENT -->
  <main class="flex-1 flex flex-col min-w-0 pb-16 overflow-y-auto md:ml-64">
    <div class="px-6 lg:px-10 pt-8 max-w-7xl w-full mx-auto space-y-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- FORM LEFT COLUMN -->
        <section class="lg:col-span-7 bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
          <div class="flex items-center justify-between pb-5 mb-6 border-b border-slate-100">
            <div>
              <h3 class="text-2xl font-bold text-on-background">Formulir Undangan Tamu</h3>
              <p class="text-xs text-slate-500 mt-1">Lengkapi rincian identitas pengunjung dan nomor kendaraan yang akan datang.</p>
            </div>
            <span class="text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 px-2.5 py-1 rounded-full flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Sistem Instan
            </span>
          </div>

          <!-- Form Section -->
          <form id="formInviteTamu" class="space-y-5" onsubmit="event.preventDefault();">
              @csrf
              <input type="hidden" id="inputJenisKendaraan" name="jenis_kendaraan" value="mobil">
          
              <!-- Nama Lengkap Tamu -->
              <div>
                  <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                      Nama Lengkap Tamu <span class="text-red-500">*</span>
                  </label>
                  <div class="relative">
                      <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                          <span class="material-symbols-outlined text-[20px]">person</span>
                      </span>
                      <!-- BIKIN VALUE KOSONG DI SINI -->
                      <input type="text" id="nama_tamu" name="nama_tamu" value="" placeholder="Masukkan nama lengkap tamu" class="w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 font-medium focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" required>
                  </div>
              </div>
            
              <!-- Nomor WhatsApp Tamu -->
              <div>
                  <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                      Nomor WhatsApp Tamu <span class="text-red-500">*</span>
                  </label>
                  <div class="relative">
                      <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                          <span class="material-symbols-outlined text-[20px]">call</span>
                      </span>
                      <!-- BIKIN VALUE KOSONG DI SINI -->
                      <input type="tel" id="nomor_whatsapp" name="nomor_whatsapp" value="" placeholder="08xxxxxxxxxx" class="w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 font-medium focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" required>
                  </div>
                  <span class="text-[11px] text-slate-400 mt-1 block">Tautan QR Pass akan otomatis dikirimkan ke nomor ini setelah diterbitkan.</span>
              </div>
            
              <!-- Jenis Kendaraan & Plat -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                      <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                          Jenis Kendaraan <span class="text-red-500">*</span>
                      </label>
                      <div class="grid grid-cols-2 p-1 bg-slate-100 rounded-xl border border-slate-200">
                          <button type="button" id="btnMobil" onclick="selectVehicle('mobil')" class="py-2 rounded-lg text-xs font-bold bg-white text-blue-600 shadow-sm border border-slate-200/50 flex items-center justify-center gap-1.5 transition-all">
                              <span class="material-symbols-outlined text-[18px]">directions_car</span>
                              <span>Mobil</span>
                          </button>
                          <button type="button" id="btnMotor" onclick="selectVehicle('motor')" class="py-2 rounded-lg text-xs font-semibold text-slate-600 hover:text-slate-900 flex items-center justify-center gap-1.5 transition-all">
                              <span class="material-symbols-outlined text-[18px]">two_wheeler</span>
                              <span>Motor</span>
                          </button>
                      </div>
                  </div>
                
                  <div>
                      <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                          Nomor Plat Kendaraan <span class="text-red-500">*</span>
                      </label>
                      <div class="relative">
                          <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                              <span class="material-symbols-outlined text-[20px]">pin</span>
                          </span>
                          <!-- BIKIN VALUE KOSONG DI SINI -->
                          <input type="text" id="nomor_plat" name="nomor_plat" value="" placeholder="Contoh: B 1234 ABC" class="w-full pl-10 pr-4 py-2 text-sm uppercase rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 font-mono font-bold tracking-wider focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" required>
                      </div>
                  </div>
              </div>
            
              <!-- Tanggal & Waktu -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                      <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                          Tanggal & Waktu Kunjungan <span class="text-red-500">*</span>
                      </label>
                      <div class="relative">
                          <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                              <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                          </span>
                          <input type="datetime-local" id="waktu_kunjungan" name="waktu_kunjungan" value="{{ date('Y-m-d\TH:i') }}" class="w-full pl-10 pr-3 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 font-medium focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" required>
                      </div>
                  </div>

              </div>
            
              <!-- Callout Note -->
              <div class="p-3.5 rounded-xl bg-blue-50/60 border border-blue-100 flex items-start gap-3 text-xs text-blue-900">
                  <span class="material-symbols-outlined text-blue-600 text-[20px] shrink-0 mt-0.5">info</span>
                  <div>
                      <span class="font-bold">Ketentuan Parkir Tamu:</span> Tiket QR Pass ini berlaku selama 12 jam sejak waktu kedatangan yang dipilih. Kuota slot tamu apartemen akan dikunci secara otomatis di sistem pos jaga gerbang.
                  </div>
              </div>
            
              <!-- Submit Button -->
              <div class="pt-2">
                  <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 active:scale-[0.99] text-white font-bold text-sm shadow-lg shadow-blue-500/25 flex items-center justify-center gap-2 transition-all">
                      <span class="material-symbols-outlined text-[20px]">qr_code_2</span>
                      <span>Generate QR Pass Tamu</span>
                  </button>
              </div>
          </form>
        </section>

        <!-- CARD PREVIEW RIGHT COLUMN -->
        <section class="lg:col-span-5 space-y-4">
          <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-7 relative overflow-hidden">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
              <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-extrabold flex items-center justify-center text-sm">P</div>
                <div>
                  <h4 class="text-xl font-bold text-on-background">QR Pass Access Card</h4>
                  <p class="text-[13px] text-slate-500">Safe Park Visitor Credential</p>
                </div>
              </div>
              <span class="px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-[10px] font-extrabold uppercase tracking-wide">VALID • AKTIF</span>
            </div>

            <div class="mb-5 text-center">
              <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 text-blue-700 font-bold text-xs border border-blue-100">
                <span class="material-symbols-outlined text-[16px] text-blue-600">verified_user</span>
                <span>Akses Gate Utama &amp; Parkir Tamu</span>
              </div>
            </div>

            <!-- Container Render QR Code -->
            <div class="flex flex-col items-center justify-center mb-6">
              <div class="p-4 bg-white rounded-2xl border border-slate-200 shadow-md flex flex-col items-center relative group">
                
                <!-- QR Code dirender dinamis di sini -->
                <div id="qrcode" class="w-48 h-48 flex items-center justify-center"></div>

                <div class="mt-2.5 text-center">
                  <span class="font-mono text-[11px] font-bold text-slate-500 tracking-wider" id="displayRefCode">REF: #INV-2026-9815</span>
                </div>
              </div>
              <p class="text-[11px] text-slate-400 mt-2 text-center">Tunjukkan kode QR ini ke kamera scanner di pos jaga gerbang masuk</p>
            </div>

            <!-- Informasi Detail Tamu -->
            <div class="bg-slate-50 rounded-xl p-4 border border-slate-100 space-y-2.5 mb-6 text-xs">
              <div class="flex items-center justify-between">
                <span class="text-slate-500 font-medium">Nama Tamu</span>
                <span class="font-bold text-slate-900 text-sm" id="displayNamaTamu">-</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-slate-500 font-medium">Plat Nomor</span>
                <span class="font-mono font-bold text-slate-900 px-2 py-0.5 rounded bg-white border border-slate-200 text-xs" id="displayPlatNomor">-</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-slate-500 font-medium">Unit Tujuan</span>
                <span class="font-bold text-slate-900">{{ auth()->user()->name ?? 'Residen' }} - Unit #1408</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-slate-500 font-medium">Masa Berlaku</span>
                <span class="font-semibold text-blue-700" id="displayMasaBerlaku">12 Jam (Sejak Kedatangan)</span>
              </div>
              <div class="flex items-center justify-between pt-1 border-t border-slate-200/60">
                <span class="text-slate-500 font-medium">Status Pembayaran</span>
                <span class="font-bold text-emerald-600 flex items-center gap-1">
                  <span class="material-symbols-outlined text-[14px]">check_circle</span>
                  Gratis (Ditanggung Residen)
                </span>
              </div>
            </div>

            <!-- Actions -->
            <div class="space-y-2.5">
              <!-- Bagikan via WhatsApp Button -->
              <button type="button" onclick="shareToWhatsApp()" class="w-full py-2.5 px-4 rounded-xl bg-white hover:bg-slate-50 active:scale-[0.99] text-slate-700 border border-slate-200 font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all shadow-sm">
                <span class="material-symbols-outlined text-[18px]">share</span>
                <span>Bagikan via WhatsApp</span>
              </button>
            
              <!-- Unduh Gambar QR Button -->
              <button type="button" onclick="downloadQRCode()" class="w-full py-2.5 px-4 rounded-xl bg-white hover:bg-slate-50 active:scale-[0.99] text-slate-700 border border-slate-200 font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all shadow-sm">
                <span class="material-symbols-outlined text-[18px]">download</span>
                <span>Unduh Gambar QR</span>
              </button>
              <button type="button" class="w-full py-2 text-center text-xs font-semibold text-slate-500 hover:text-blue-600 transition-colors flex items-center justify-center gap-1">
                <span class="material-symbols-outlined text-[16px]">link</span>
                <span>Salin Tautan Akses Tamu</span>
              </button>
            </div>
          </div>
        </section>

      </div>
    </div>
  </main>

  <!-- JAVASCRIPT DINAMIS -->
  <script>
    // 1. Inisialisasi QR Code awal
    let qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "INV-2026-9815",
        width: 180,
        height: 180,
        colorDark : "#0f172a",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });

    // 2. Fungsi Toggle Pilihan Jenis Kendaraan (Mobil vs Motor)
    function selectVehicle(type) {
        document.getElementById('inputJenisKendaraan').value = type;

        const btnMobil = document.getElementById('btnMobil');
        const btnMotor = document.getElementById('btnMotor');

        if (type === 'mobil') {
            btnMobil.className = "py-2 rounded-lg text-xs font-bold bg-white text-blue-600 shadow-sm border border-slate-200/50 flex items-center justify-center gap-1.5 transition-all";
            btnMotor.className = "py-2 rounded-lg text-xs font-semibold text-slate-600 hover:text-slate-900 flex items-center justify-center gap-1.5 transition-all";
        } else {
            btnMotor.className = "py-2 rounded-lg text-xs font-bold bg-white text-blue-600 shadow-sm border border-slate-200/50 flex items-center justify-center gap-1.5 transition-all";
            btnMobil.className = "py-2 rounded-lg text-xs font-semibold text-slate-600 hover:text-slate-900 flex items-center justify-center gap-1.5 transition-all";
        }
    }

    // 3. Event Listener Form Submit AJAX
    document.getElementById('formInviteTamu').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch("{{ route('invite.store') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                // Update Teks di Preview Card
                document.getElementById('displayNamaTamu').innerText = data.data.nama_tamu;
                document.getElementById('displayPlatNomor').innerText = data.data.nomor_plat;
                document.getElementById('displayRefCode').innerText = "REF: #" + data.kode_unik;

                // Render Ulang QR Code Baru Sesuai Kode Unik yang Diterbitkan
                qrcode.clear();
                qrcode.makeCode(data.kode_unik);

                alert(data.message);
            } else {
                alert('Gagal: ' + (data.message || 'Terjadi kesalahan'));
            }
        })
        .catch(err => {
            console.error(err);
            alert('Terjadi kesalahan jaringan.');
        });
    });

    // Variable global untuk menyimpan kode unik terakhir
    let currentKodeUnik = "INV-2026-9815";
      
    // Fungsi 1: Bagikan via WhatsApp
    function shareToWhatsApp() {
        const namaTamu = document.getElementById('displayNamaTamu').innerText || 'Tamu';
        const platNomor = document.getElementById('displayPlatNomor').innerText || '-';
        const waNumberInput = document.getElementById('nomor_whatsapp').value.replace(/[^0-9]/g, '');
    
        // Format nomor HP agar diawali 62 (standar WhatsApp)
        let waFormatted = waNumberInput;
        if (waFormatted.startsWith('0')) {
            waFormatted = '62' + waFormatted.slice(1);
        }
      
        // Pesan rapi yang dikirim via WhatsApp
        const message = `Halo *${namaTamu}*,\n\nBerikut adalah *QR Pass Akses Parkir Tamu Safe Park* Anda:\n\n` +
                        `*Kode Referensi:* ${currentKodeUnik}\n` +
                        `*Plat Nomor:* ${platNomor}\n` +
                        `*Unit Tujuan:* {{ auth()->user()->name ?? 'Residen' }} - Unit #1408\n` +
                        `*Masa Berlaku:* 12 Jam sejak kedatangan\n\n` +
                        `Silakan tunjukkan QR Pass ini ke kamera scanner di pos jaga gerbang masuk.\n\n` +
                        `Terima Kasih!`;
      
        const encodedMessage = encodeURIComponent(message);
        
        // Buka WhatsApp API di tab baru
        if (waFormatted) {
            window.open(`https://wa.me/${waFormatted}?text=${encodedMessage}`, '_blank');
        } else {
            window.open(`https://api.whatsapp.com/send?text=${encodedMessage}`, '_blank');
        }
    }
    
    // Fungsi 2: Undah Gambar QR Code
    function downloadQRCode() {
        // Cari elemen image/canvas di dalam container #qrcode
        const qrImg = document.querySelector("#qrcode img") || document.querySelector("#qrcode canvas");
    
        if (!qrImg) {
            alert("Gambar QR belum tersedia!");
            return;
        }
      
        let imageSrc = "";
        if (qrImg.tagName.toLowerCase() === "img") {
            imageSrc = qrImg.src;
        } else if (qrImg.tagName.toLowerCase() === "canvas") {
            imageSrc = qrImg.toDataURL("image/png");
        }
      
        // Buat elemen link virtual untuk trigger download file PNG
        const downloadLink = document.createElement("a");
        downloadLink.href = imageSrc;
        downloadLink.download = `QR_Pass_${currentKodeUnik}.png`;
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    }
    
    // Fungsi 3: Salin Tautan Akses
    function copyAccessLink() {
        const accessUrl = window.location.origin + "/scanner?code=" + currentKodeUnik;
        
        navigator.clipboard.writeText(accessUrl).then(() => {
            const btnText = document.getElementById('btnCopyText');
            btnText.innerText = "Tautan Berhasil Disalin! ✓";
            setTimeout(() => {
                btnText.innerText = "Salin Tautan Akses Tamu";
            }, 2000);
        });
    }
  </script>

</body>
</html>