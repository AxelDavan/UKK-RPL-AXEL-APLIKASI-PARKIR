<!DOCTYPE html><html class="light" lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-variant": "#d9e3f6",
                    "surface-tint": "#0053db",
                    "inverse-primary": "#b4c5ff",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-surface": "#121c2a",
                    "surface-container": "#e6eeff",
                    "surface-container-high": "#dee9fc",
                    "secondary-fixed-dim": "#4edea3",
                    "secondary-container": "#6cf8bb",
                    "on-primary-container": "#eeefff",
                    "inverse-surface": "#27313f",
                    "primary-fixed": "#dbe1ff",
                    "primary-container": "#2563eb",
                    "on-secondary-container": "#00714d",
                    "tertiary-fixed": "#ffddb8",
                    "surface-container-low": "#eff4ff",
                    "surface-bright": "#f8f9ff",
                    "on-tertiary-container": "#ffeedd",
                    "tertiary": "#784b00",
                    "on-secondary": "#ffffff",
                    "on-background": "#121c2a",
                    "tertiary-container": "#996100",
                    "surface-dim": "#d0dbed",
                    "secondary": "#006c49",
                    "on-surface-variant": "#434655",
                    "error": "#ba1a1a",
                    "on-primary": "#ffffff",
                    "on-tertiary-fixed": "#2a1700",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-error-container": "#93000a",
                    "secondary-fixed": "#6ffbbe",
                    "outline-variant": "#c3c6d7",
                    "surface": "#f8f9ff",
                    "error-container": "#ffdad6",
                    "on-secondary-fixed-variant": "#005236",
                    "on-secondary-fixed": "#002113",
                    "tertiary-fixed-dim": "#ffb95f",
                    "on-primary-fixed": "#00174b",
                    "on-error": "#ffffff",
                    "background": "#f8f9ff",
                    "inverse-on-surface": "#eaf1ff",
                    "surface-container-lowest": "#ffffff",
                    "primary": "#004ac6",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-fixed-variant": "#653e00",
                    "surface-container-highest": "#d9e3f6",
                    "outline": "#737686"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-sm": "4px",
                    "stack-md": "12px",
                    "base": "8px",
                    "container-padding-desktop": "24px",
                    "container-padding-mobile": "16px",
                    "gutter": "16px",
                    "stack-lg": "24px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Plus Jakarta Sans"],
                    "title-lg": ["Plus Jakarta Sans"],
                    "display-lg": ["Plus Jakarta Sans"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-lg": ["Plus Jakarta Sans"],
                    "label-lg": ["Inter"],
                    "label-md": ["Inter"]
            },
            "fontSize": {
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "600"}],
                    "title-lg": ["22px", {"lineHeight": "28px", "fontWeight": "500"}],
                    "display-lg": ["57px", {"lineHeight": "64px", "letterSpacing": "-0.25px", "fontWeight": "700"}],
                    "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                    "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.1px", "fontWeight": "500"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.5px", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #f8f9ff;
            color: #121c2a;
            font-family: 'Inter', sans-serif;
        }
        .font-plus-jakarta {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Custom input focus states to match MD3 */
        .md3-input:focus-within label {
            transform: translateY(-1.4rem) scale(0.85);
            color: #004ac6;
            background-color: white;
            padding: 0 4px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-surface-container-lowest via-surface-container-low to-surface-container text-on-background min-h-screen pb-24">
<!-- Top AppBar Component -->
<header class="bg-surface w-full top-0 sticky flex items-center px-container-padding-mobile md:px-container-padding-desktop h-16 z-50">
<a href={{ route('login') }} class="flex items-center gap-4">
<button class="p-2 transition-colors duration-200 ease-in-out hover:bg-surface-variant/50 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-primary">arrow_back</span>
</button>
<h1 class="font-title-lg text-title-lg text-on-surface">Pendaftaran Kendaraan</h1>
</a>
</header>
<main class="max-w-xl mx-auto px-container-padding-mobile md:px-container-padding-desktop pt-8">
<!-- Logo and Intro -->
<div class="flex flex-col items-center mb-stack-lg text-center">
<div class="w-20 h-20 mb-4 overflow-hidden rounded-xl shadow-sm">
<img class="w-full h-full object-cover"                 src="{{ asset('image/screen.webp') }}">
<h2 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-surface mb-2">Selamat Datang</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Lengkapi data diri Anda untuk memulai pengalaman parkir yang lebih mudah di apartemen kami.</p>
</div>
@if ($errors->any())
    <div style="background:red;color:white;padding:10px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('register') }}" class="space-y-stack-lg">
    @csrf
<!-- Informasi Pribadi Section -->
<section class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/30 shadow-sm">
<div class="flex items-center gap-2 mb-stack-lg">
<span class="material-symbols-outlined text-primary">person</span>
<h3 class="font-title-lg text-title-lg text-on-surface">Informasi Pribadi</h3>
</div>
<div class="space-y-stack-md">
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="fullName">Nama Lengkap</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="fullName" placeholder="Contoh: Budi Santoso" type="text" name="name">
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md"><div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="unitNumber">Nomor Unit</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="unitNumber" placeholder="Contoh: Tower A - 12B" type="text" name="nomor_unit">
</div>
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="phoneNumber">Nomor Telepon</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="phoneNumber" placeholder="0812xxxx" type="tel" name="nomor_telepon">
</div></div><div class="relative mt-2">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="email">Email</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="email" placeholder="Contoh: budi@email.com" type="email" name="email">
</div>
<div class="relative mt-2">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="password">Password</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="password" placeholder="••••••••" type="password" name="password">
</div>
<div class="relative mt-2">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="verifikasi">Verifikasi Password</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="verifikasi" placeholder="••••••••" type="password" name="password_confirmation">
</div>

</div>
</section>
<!-- Informasi Kendaraan Section -->
<section class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/30 shadow-sm relative overflow-hidden">
<!-- Status Strip - MD3 inspired visual cue -->
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-container"></div>
<div class="flex items-center gap-2 mb-stack-lg">
<span class="material-symbols-outlined text-primary">directions_car</span>
<h3 class="font-title-lg text-title-lg text-on-surface">Data Kendaraan</h3>
</div>
<div class="space-y-stack-md"><div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="plateNumber">Nomor Plat</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md uppercase" id="plateNumber" placeholder="B 1234 ABC" type="text" name="nomor_plat">
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="vehicleModel">Merk/Model Kendaraan</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="vehicleModel" placeholder="Contoh: Toyota Avanza" type="text" name="merk">
</div>
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1" for="vehicleColor">Warna Kendaraan</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md" id="vehicleColor" placeholder="Contoh: Hitam Metalik" type="text" name="warna">
</div>
</div>
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-1">Tipe Kendaraan</label>
<div class="flex gap-4 mt-2">
<label class="flex items-center gap-2 cursor-pointer">
<input type="radio" name="jenis_kendaraan" value="mobil" class="w-5 h-5 text-primary border-outline-variant focus:ring-primary">
<span class="font-body-md text-body-md text-on-surface">Mobil</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input type="radio" name="jenis_kendaraan" value="motor" class="w-5 h-5 text-primary border-outline-variant focus:ring-primary">
<span class="font-body-md text-body-md text-on-surface">Motor</span>
</label>
</div>
</div></div>
</section>
<!-- Submit Button -->
<button class="w-full bg-primary-container text-on-primary-container hover:bg-primary py-4 rounded-full font-title-lg text-title-lg transition-all duration-300 shadow-sm hover:shadow-md active:scale-95 flex items-center justify-center gap-2" type="submit">
<span class="">Daftar Sekarang</span>
<span class="material-symbols-outlined">how_to_reg</span>
</button>
</form>
<!-- Help Section -->
<div class="mt-8 text-center pb-8">
<p class="font-body-md text-body-md text-on-surface-variant mb-2">Butuh bantuan proses pendaftaran?</p>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg text-primary hover:underline transition-all" href="#">
<span class="material-symbols-outlined text-[18px]">support_agent</span>
                Hubungi Manajemen
            </a>
</div>
</main>
<!-- Bottom Navigation Bar (Hidden on registration as it's a focused task) -->
<!-- Applying "The Destination Rule": Transactional/Onboarding pages suppress nav -->
<script>
        // Micro-interaction for the submit button
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            
            btn.disabled = true;
            btn.innerHTML = `<span class="animate-spin material-symbols-outlined">sync</span> Memproses...`;
            
            setTimeout(() => {
                btn.classList.replace('bg-primary-container', 'bg-secondary');
                btn.classList.replace('text-on-primary-container', 'text-on-secondary');
                btn.innerHTML = `<span class="material-symbols-outlined">check_circle</span> Berhasil Terdaftar`;
                
                setTimeout(() => {
                    btn.disabled = false;
                    btn.classList.replace('bg-secondary', 'bg-primary-container');
                    btn.classList.replace('text-on-secondary', 'text-on-primary-container');
                    btn.innerHTML = originalText;
                }, 3000);
            }, 1500);
        });

        // Plate number auto-uppercase
        document.getElementById('plateNumber').addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    </script>




</body></html>