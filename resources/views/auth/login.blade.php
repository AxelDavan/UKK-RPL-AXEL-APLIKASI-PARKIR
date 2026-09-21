<!DOCTYPE html><html class="light" lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        try {
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "on-tertiary-fixed-variant": "#653e00",
                            "surface-container-highest": "#d9e3f6",
                            "surface-dim": "#d0dbed",
                            "surface-container-low": "#eff4ff",
                            "on-primary": "#ffffff",
                            "on-background": "#121c2a",
                            "on-secondary-fixed": "#002113",
                            "outline-variant": "#c3c6d7",
                            "tertiary-container": "#996100",
                            "surface-container-lowest": "#ffffff",
                            "surface-bright": "#f8f9ff",
                            "secondary-container": "#6cf8bb",
                            "primary-fixed": "#dbe1ff",
                            "on-error": "#ffffff",
                            "on-surface": "#121c2a",
                            "inverse-primary": "#b4c5ff",
                            "on-primary-fixed-variant": "#003ea8",
                            "error-container": "#ffdad6",
                            "surface-tint": "#0053db",
                            "on-error-container": "#93000a",
                            "inverse-surface": "#27313f",
                            "tertiary-fixed-dim": "#ffb95f",
                            "outline": "#737686",
                            "on-primary-container": "#eeefff",
                            "surface": "#f8f9ff",
                            "primary": "#2563eb",
                            "surface-container-high": "#dee9fc",
                            "on-secondary-fixed-variant": "#005236",
                            "on-secondary": "#ffffff",
                            "secondary-fixed-dim": "#4edea3",
                            "primary-fixed-dim": "#b4c5ff",
                            "secondary-fixed": "#6ffbbe",
                            "on-tertiary": "#ffffff",
                            "surface-container": "#e6eeff",
                            "on-tertiary-fixed": "#2a1700",
                            "on-primary-fixed": "#00174b",
                            "tertiary": "#784b00",
                            "tertiary-fixed": "#ffddb8",
                            "surface-variant": "#d9e3f6",
                            "on-tertiary-container": "#ffeedd",
                            "inverse-on-surface": "#eaf1ff",
                            "on-surface-variant": "#434655",
                            "on-secondary-container": "#00714d",
                            "primary-container": "#2563eb",
                            "error": "#ba1a1a",
                            "secondary": "#006c49",
                            "background": "#f8f9ff"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "2xl": "1rem",
                            "3xl": "1.5rem",
                            "full": "9999px"
                        },
                        "spacing": {
                            "container-padding-mobile": "16px",
                            "stack-lg": "24px",
                            "stack-sm": "4px",
                            "container-padding-desktop": "24px",
                            "stack-md": "12px",
                            "gutter": "16px",
                            "base": "8px"
                        },
                        "fontFamily": {
                            "body-md": ["Inter"],
                            "label-lg": ["Inter"],
                            "headline-lg": ["Plus Jakarta Sans"],
                            "headline-lg-mobile": ["Plus Jakarta Sans"],
                            "display-lg": ["Plus Jakarta Sans"],
                            "title-lg": ["Plus Jakarta Sans"],
                            "body-lg": ["Inter"],
                            "label-md": ["Inter"]
                        },
                        "fontSize": {
                            "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                            "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.1px", "fontWeight": "500"}],
                            "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                            "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "600"}],
                            "display-lg": ["57px", {"lineHeight": "64px", "letterSpacing": "-0.25px", "fontWeight": "700"}],
                            "title-lg": ["22px", {"lineHeight": "28px", "fontWeight": "500"}],
                            "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                            "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.5px", "fontWeight": "500"}]
                        }
                    },
                },
            }
        } catch (_e) {}
    </script>
</head>
<body class="bg-surface font-body-md text-on-background min-h-screen flex flex-col items-center justify-center p-container-padding-mobile overflow-x-hidden">
<a href="{{ route('welcome') }}">
    <button class="absolute top-6 left-6 p-2 rounded-full bg-white border border-outline-variant/40 text-on-surface-variant hover:text-primary hover:bg-primary/5 shadow-sm transition-all active:scale-95 group" aria-label="Kembali">
        <span class="material-symbols-outlined text-[24px]">arrow_back</span>
    </button>
</a>
<!-- Premium Gradient Background Decor -->
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
<div class="absolute -top-[20%] -left-[10%] w-[70%] h-[70%] rounded-full bg-primary/10 blur-[120px]"></div>
<div class="absolute -bottom-[20%] -right-[10%] w-[70%] h-[70%] rounded-full bg-primary/5 blur-[120px]"></div>
<!-- Subtle grid/pattern simulation -->
<div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#2563eb 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
</div>
<!-- Main Login Shell -->
<main class="w-full max-w-[440px] flex flex-col items-center gap-stack-lg animate-in fade-in duration-700">
<!-- Logo Section -->
<header class="flex flex-col items-center gap-stack-md mb-stack-md text-center">
<div class="p-4 bg-white rounded-2xl shadow-xl shadow-primary/10 ring-1 ring-black/5">
<img alt="Safe Park Logo" class="w-16 h-16 object-contain" src="{{ asset('image/screen.webp') }}"/>
</div>
<div class="mt-4">
<h1 class="font-headline-lg-mobile text-3xl font-bold text-on-surface tracking-tight">Safe Park</h1>
<p class="font-body-md text-on-surface-variant mt-2 max-w-[280pxhttps://lh3.googleusercontent.com/aida/AP1WRLs9mU8xDWVNmb6hvHj9dByIGhZjlzT375IDE_Jae-vanAcrqusqLiep5xsY5RtkDUr_pmYAZ5G1F5xr7bswkZY-RSOZatfOrSzERpPKTbDuyNYJMEhTdCMmXE0pMou_fZVZAIgbgEO37j_lOxIcSYneZHi1RMoBdefNey2VNuqkiMLo2rp0wdP8zIeB3ltJEEpa0qFTULe5N6eWiLhz0n_X3ppKGVJNQBVJb0olk6k5atmJY95pscGp0_f4] leading-relaxed">
                    Masukkan kredensial Anda untuk mengelola parkir residen.
                </p>
</div>
</header>
<!-- Premium Login Card -->
<section class="w-full bg-white border border-outline-variant/40 rounded-3xl p-10 shadow-[0_20px_50px_rgba(0,0,0,0.06)] backdrop-blur-sm">
<form class="flex flex-col gap-6" id="loginForm" method="POST" action={{ route('login') }}>
    @csrf
    @if ($errors->any())
    <div class="mb-4 rounded-lg bg-red-50 border border-red-200 p-4">
        <div class="flex items-start gap-3">
            <span class="material-symbols-outlined text-red-600">
                error
            </span>

            <div>
                <p class="font-semibold text-red-700">
                    Login gagal
                </p>

                <p class="text-sm text-red-600 mt-1">
                    {{ $errors->first() }}
                </p>
            </div>
        </div>
    </div>
@endif
<!-- Email Field -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-on-surface-variant ml-1" for="email">Email</label>
<div class="relative flex items-center group">
<span class="material-symbols-outlined absolute left-4 text-on-surface-variant group-focus-within:text-primary transition-colors">email</span>
<input class="w-full h-14 pl-12 pr-4 bg-surface-bright border border-outline-variant/60 rounded-xl font-body-lg text-on-surface outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline-variant/60" id="email" placeholder="Masukkan email" type="email" name="email"/>
</div>
</div>
<!-- Password Field -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-on-surface-variant ml-1" for="password">Kata Sandi</label>
<div class="relative flex items-center group">
<span class="material-symbols-outlined absolute left-4 text-on-surface-variant group-focus-within:text-primary transition-colors">lock</span>
<input class="w-full h-14 pl-12 pr-12 bg-surface-bright border border-outline-variant/60 rounded-xl font-body-lg text-on-surface outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline-variant/60" id="password" placeholder="••••••••" type="password" name="password"/>
<button aria-label="Toggle password visibility" class="absolute right-4 text-on-surface-variant hover:text-primary transition-colors" onclick="togglePassword()" type="button">
<span class="material-symbols-outlined text-[22px]" id="passwordIcon">visibility</span>
</button>
</div>
</div>
<!-- Utilities Row -->
<div class="flex items-center justify-between mt-2">
<label class="flex items-center gap-3 cursor-pointer group">
<div class="relative flex items-center justify-center">
<input class="peer sr-only" type="checkbox"/>
<div class="w-5 h-5 border-2 border-outline-variant rounded-md flex items-center justify-center transition-all peer-checked:bg-primary peer-checked:border-primary group-hover:border-primary">
<span class="material-symbols-outlined text-[14px] text-white opacity-0 peer-checked:opacity-100 transition-opacity font-bold">check</span>
</div>
</div>
<span class="font-body-md text-on-surface-variant group-hover:text-on-surface transition-colors">Ingat Saya</span>
</label>
<a class="font-label-lg text-primary font-semibold hover:text-primary/80 transition-all" href={{ route('password.request') }}>
                        Lupa Kata Sandi?
                    </a>
</div>
<!-- Action Button -->
<button type="submit"
            class="w-full h-14 mt-4 bg-primary hover:bg-primary/90 text-on-primary font-bold text-lg rounded-2xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2 group">
                Masuk
            <span class="material-symbols-outlined text-[22px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
</form>
</section>
<!-- Refined Footer -->
<footer class="flex flex-col items-center gap-8 mt-4 w-full">
<div class="h-px w-24 bg-outline-variant/30"></div>
<p class="font-body-md text-on-surface-variant">
                Residen baru? <a class="text-primary font-bold hover:underline underline-offset-4" href={{ route('register') }}>Daftarkan Kendaraan Anda</a>
</p>
<div class="flex gap-8 items-center">
<a class="flex items-center gap-2 text-on-surface-variant/60 hover:text-primary transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">help_outline</span>
<span class="text-xs font-semibold uppercase tracking-wider">Bantuan</span>
</a>
<a class="flex items-center gap-2 text-on-surface-variant/60 hover:text-primary transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">security</span>
<span class="text-xs font-semibold uppercase tracking-wider">Privasi</span>
</a>
</div>
</footer>
</main>
<script>
        /**
         * Toggle Password Visibility Logic
         */
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('passwordIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                passwordIcon.textContent = 'visibility';
            }
        }

        /**
         * Simple form submission micro-interaction
         */
        document.getElementById('loginForm').addEventListener('submit', (e) => {
            const btn = e.target.querySelector('button[type="submit"]');
            
            // Visual feedback
            btn.disabled = true;
            const originalContent = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span>';
            
            setTimeout(() => {
                btn.disabled = false;
                btn.innerHTML = originalContent;
            }, 1500);
        });
    </script>




</body></html>