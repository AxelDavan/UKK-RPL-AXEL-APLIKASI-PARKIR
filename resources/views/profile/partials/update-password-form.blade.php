<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Atur Ulang Kata Sandi - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#004ac6",
                        "surface-container-low": "#eff4ff",
                        "on-secondary": "#ffffff",
                        "on-surface-variant": "#434655",
                        "tertiary-fixed-dim": "#ffb95f",
                        "tertiary-container": "#996100",
                        "primary-fixed": "#dbe1ff",
                        "inverse-surface": "#27313f",
                        "on-surface": "#121c2a",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "error-container": "#ffdad6",
                        "on-primary": "#ffffff",
                        "surface-dim": "#d0dbed",
                        "secondary-fixed-dim": "#4edea3",
                        "inverse-on-surface": "#eaf1ff",
                        "primary-fixed-dim": "#b4c5ff",
                        "surface-container-high": "#dee9fc",
                        "inverse-primary": "#b4c5ff",
                        "secondary": "#006c49",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-highest": "#d9e3f6",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed": "#2a1700",
                        "tertiary": "#784b00",
                        "surface": "#f8f9ff",
                        "surface-container": "#e6eeff",
                        "on-secondary-fixed-variant": "#005236",
                        "tertiary-fixed": "#ffddb8",
                        "on-secondary-fixed": "#002113",
                        "primary-container": "#2563eb",
                        "outline": "#737686",
                        "on-primary-fixed-variant": "#003ea8",
                        "outline-variant": "#c3c6d7",
                        "surface-tint": "#0053db",
                        "secondary-fixed": "#6ffbbe",
                        "surface-bright": "#f8f9ff",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#ffeedd",
                        "background": "#f8f9ff",
                        "on-tertiary-fixed-variant": "#653e00",
                        "surface-variant": "#d9e3f6",
                        "on-primary-container": "#eeefff",
                        "on-background": "#121c2a",
                        "on-secondary-container": "#00714d",
                        "on-primary-fixed": "#00174b",
                        "secondary-container": "#6cf8bb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-desktop": "24px",
                        "stack-lg": "24px",
                        "stack-md": "12px",
                        "stack-sm": "4px",
                        "container-padding-mobile": "16px",
                        "base": "8px",
                        "gutter": "16px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "label-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "title-lg": ["22px", { "lineHeight": "28px", "fontWeight": "500" }],
                        "display-lg": ["57px", { "lineHeight": "64px", "letterSpacing": "-0.25px", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "600" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.1px", "fontWeight": "500" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.5px", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
<style>
        body { background-color: theme('colors.background'); color: theme('colors.on-background'); }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid theme('colors.outline-variant');
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased">
<!-- Top App Bar - Linear/Transactional Intent (No Nav Shell needed, just simple header) -->
<header class="w-full top-0 bg-surface flex items-center px-container-padding-mobile md:px-container-padding-desktop h-16 w-full flat no shadows">
<a aria-label="Kembali" class="text-on-surface-variant hover:bg-surface-container-high transition-colors p-2 rounded-full active:scale-95 transition-transform" href="{{ route('profile.edit') }}">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</a>
<h1 class="ml-4 font-title-lg text-title-lg text-primary">Lupa Kata Sandi</h1>
</header>
<!-- Main Canvas -->
<main class="flex-grow flex items-center justify-center p-container-padding-mobile md:p-container-padding-desktop bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-surface-container-low via-background to-background">
<div class="w-full max-w-md w-full glass-card rounded-xl p-stack-lg shadow-sm">
<div class="flex flex-col items-center mb-stack-lg">
<img alt="Safe Park Logo" class="w-16 h-16 rounded-md mb-stack-md object-contain" src="https://lh3.googleusercontent.com/aida/AP1WRLvD6lzocwZCP8CVrUMcnY5ckZ6imUJ980Nxn0vgqUwj19aA3Sq3SUug4tI2ptkAMhkOFkI_Qy95z-5P_do_BVhGynvxbTgKvfKsgRtHBZABjre2Xdrt-sqo029OXPfJ4grTuaRikYoIqhWWiScyCsDfR_Dn_yILy9SAn6ikp77Ye3dBsC-OiENYdc4VWRWIijXMonHpNwp1nMS5fA3r9I35G7TKGlfN045-3Y40I5KCXK7aIz00j4UxLchm"/>
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface text-center mb-stack-sm">Atur Ulang Kata Sandi</h2>
<p class="font-body-md text-body-md text-on-surface-variant text-center">Silakan masukkan kata sandi baru Anda di bawah ini. Pastikan kata sandi Anda kuat dan unik.</p>
</div>
<form class="space-y-stack-md flex flex-col" method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('put')
<!-- New Password Field -->
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-stack-sm" for="new_password">Kata Sandi Baru</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline" data-icon="lock">lock</span>
<input class="w-full pl-10 pr-10 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-lg text-body-lg text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" id="new_password" placeholder="Masukkan kata sandi baru" type="password"/>
<button aria-label="Toggle password visibility" class="absolute right-3 text-outline hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility_off">visibility_off</span>
</button>
</div>
</div>
<!-- Confirm Password Field -->
<div class="relative">
<label class="block font-label-md text-label-md text-on-surface-variant mb-stack-sm" for="confirm_password">Konfirmasi Kata Sandi Baru</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline" data-icon="lock">lock</span>
<input class="w-full pl-10 pr-10 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-lg text-body-lg text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" id="confirm_password" placeholder="Ulangi kata sandi baru" type="password"/>
<button aria-label="Toggle password visibility" class="absolute right-3 text-outline hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility_off">visibility_off</span>
</button>
</div>
</div>
<!-- Password Requirements Checklist -->
<div class="bg-surface-container-low p-stack-md rounded-lg mt-stack-md border border-outline-variant">
<ul class="space-y-2">
<li class="flex items-center text-on-surface-variant font-body-md text-body-md">
<span class="material-symbols-outlined text-outline mr-2 text-[18px]" data-icon="circle">circle</span>
                            Minimal 8 karakter
                        </li>
<li class="flex items-center text-on-surface-variant font-body-md text-body-md">
<span class="material-symbols-outlined text-outline mr-2 text-[18px]" data-icon="circle">circle</span>
                            Kombinasi huruf besar &amp; kecil
                        </li>
<li class="flex items-center text-on-surface-variant font-body-md text-body-md">
<span class="material-symbols-outlined text-outline mr-2 text-[18px]" data-icon="circle">circle</span>
                            Menggunakan angka atau simbol
                        </li>
</ul>
</div>
<!-- Actions -->
<div class="pt-stack-md flex flex-col gap-stack-sm">
<button class="w-full bg-primary text-on-primary font-label-lg text-label-lg py-3 rounded-full hover:bg-surface-tint transition-colors shadow-sm active:scale-95 flex items-center justify-center" type="submit">
                        Simpan Kata Sandi
                    </button>
</div>
</form>
</div>
</main>
<script>
        // Simple password toggle logic for demo purposes
        const toggleButtons = document.querySelectorAll('button[aria-label="Toggle password visibility"]');
        toggleButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('.material-symbols-outlined');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.textContent = 'visibility';
                    icon.setAttribute('data-icon', 'visibility');
                } else {
                    input.type = 'password';
                    icon.textContent = 'visibility_off';
                    icon.setAttribute('data-icon', 'visibility_off');
                }
            });
        });
    </script>
</body></html>