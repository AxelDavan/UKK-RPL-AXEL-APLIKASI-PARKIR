<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Ulasan</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary": "#ffffff",
                        "glass-border": "rgba(255, 255, 255, 0.4)",
                        "primary-container": "#0053db",
                        "tertiary": "#653f00",
                        "inverse-surface": "#273140",
                        "on-tertiary-container": "#ffd19c",
                        "on-secondary": "#ffffff",
                        "primary-fixed-dim": "#b4c5ff",
                        "surface-container": "#e6eeff",
                        "surface-bright": "#f8f9ff",
                        "on-secondary-fixed-variant": "#005236",
                        "tertiary-fixed": "#ffddb7",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#434655",
                        "tertiary-fixed-dim": "#fabb6b",
                        "surface-container-low": "#eff3ff",
                        "surface-container-highest": "#d9e3f7",
                        "on-secondary-container": "#0c714d",
                        "on-background": "#121c2a",
                        "surface": "#f8f9ff",
                        "surface-tint": "#0053db",
                        "on-tertiary-fixed": "#2a1700",
                        "on-primary-fixed": "#00174b",
                        "on-primary-container": "#ced8ff",
                        "surface-container-lowest": "#ffffff",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-tertiary": "#ffffff",
                        "outline-variant": "#c3c6d7",
                        "surface-variant": "#d9e3f7",
                        "surface-dim": "#d0daee",
                        "primary": "#003ea8",
                        "inverse-on-surface": "#ebf1ff",
                        "on-surface": "#121c2a",
                        "outline": "#737686",
                        "inverse-primary": "#b4c5ff",
                        "secondary": "#006c49",
                        "glass-surface": "rgba(248, 249, 255, 0.7)",
                        "secondary-container": "#9af2c5",
                        "background": "#f8f9ff",
                        "secondary-fixed-dim": "#81d8ad",
                        "secondary-fixed": "#9df4c8",
                        "tertiary-container": "#84550b",
                        "primary-fixed": "#dbe1ff",
                        "on-error": "#ffffff",
                        "surface-container-high": "#dfe9fc",
                        "on-tertiary-fixed-variant": "#653e00",
                        "on-secondary-fixed": "#002113"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "base": "8px",
                        "gutter-lg": "24px",
                        "margin-desktop": "auto",
                        "gutter-sm": "16px",
                        "max-width": "1280px"
                    },
                    "fontFamily": {
                        "display-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "display-lg": ["57px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "title-lg": ["22px", { "lineHeight": "28px", "fontWeight": "500" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-surface-bright text-on-surface antialiased min-h-screen flex flex-col">
<!-- Top Navigation (Desktop) -->
<nav class="fixed top-0 w-full z-50 bg-glass-surface dark:bg-glass-surface backdrop-blur-md border-b border-glass-border shadow-sm transition-all duration-300 ease-in-out">
<div class="flex justify-between items-center max-w-max-width mx-auto px-gutter-lg h-20">
<div class="font-headline-lg text-headline-lg font-bold text-primary dark:text-inverse-primary flex items-center"><img alt="Safe Park Logo" class="w-10 h-10 object-contain mr-2 inline-block"                src="{{ asset('image/screen.webp') }}">
                Safe Park
            </div>
<div class="hidden md:flex gap-8">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('welcome') }}">Beranda</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('about') }}">Tentang Kami</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200"  href="{{ route('fitur') }}">Fitur</a>
<a class="text-primary dark:text-inverse-primary font-bold border-b-2 border-primary font-label-lg text-label-lg py-7" href="{{ route('review') }}">Ulasan</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('faq') }}">FAQ</a>
</div>
<div>
<a class="bg-primary text-on-primary font-label-lg text-label-lg px-6 py-3 rounded-full hover:bg-primary-container hover:text-on-primary-container transition-colors duration-200" href="{{ route('login') }}">Mulai Sekarang</a>
</div>
</div>
</nav>
<!-- Side Navigation (Mobile Layout mapped for visual completeness if needed, but per mandate top row text links prohibited on mobile md:hidden) -->
<!-- Content Canvas -->
<main class="flex-1 mt-20 (md:mt-24) pt-12 pb-24 px-margin-mobile md:px-gutter-lg max-w-max-width mx-auto w-full">
<!-- Hero Section -->
<header class="text-center mb-16">
<h1 class="font-display-lg text-display-lg text-on-surface mb-4">Apa Kata Pengguna Kami</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Temukan mengapa ribuan orang mempercayai Safe Park untuk perjalanan harian dan penyimpanan kendaraan yang aman. Pengalaman nyata dari pengemudi nyata.</p>
</header>
<!-- Rating Summary Bento Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-16">
<!-- Overall Score -->
<div class="bg-glass-surface backdrop-blur-md border border-glass-border rounded-xl p-8 shadow-[0px_12px_32px_rgba(0,83,219,0.08)] flex flex-col items-center justify-center">
<div class="font-display-lg text-display-lg text-primary mb-2">4.8</div>
<div class="flex text-tertiary-fixed mb-2">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star_half</span>
</div>
<div class="font-body-md text-body-md text-on-surface-variant">Berdasarkan 2,451 ulasan</div>
</div>
<!-- Distribution Bars -->
<div class="lg:col-span-2 bg-glass-surface backdrop-blur-md border border-glass-border rounded-xl p-8 shadow-[0px_12px_32px_rgba(0,83,219,0.08)]">
<h3 class="font-title-lg text-title-lg text-on-surface mb-6">Ringkasan Rating</h3>
<div class="space-y-4">
<div class="flex items-center gap-4">
<div class="font-label-md text-label-md w-16 text-on-surface-variant">5 Bintang</div>
<div class="flex-1 bg-surface-container-highest rounded-full h-2 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 82%"></div>
</div>
<div class="font-label-md text-label-md w-8 text-right text-on-surface-variant">82%</div>
</div>
<!-- Add more bars as needed -->
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest py-12 border-t border-outline-variant grid grid-cols-1 md:grid-cols-4 gap-gutter-lg max-w-max-width mx-auto px-gutter-lg w-full">
<div>
<div class="font-title-lg text-title-lg font-bold text-primary mb-4">Safe Park</div>
<p class="font-body-md text-body-md text-on-surface-variant">© 2026 SafePark. All rights reserved by Axel Davan Prayoga - SMK N1 SANDEN</p>
</div>
<div class="flex flex-col gap-2 font-body-md text-body-md">
<a class="text-on-surface-variant hover:text-primary hover:underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Produk</a>
<a class="text-on-surface-variant hover:text-primary hover:underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Perusahaan</a>
</div>
<div class="flex flex-col gap-2 font-body-md text-body-md">
<a class="text-on-surface-variant hover:text-primary hover:underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Dukungan</a>
<a class="text-on-surface-variant hover:text-primary hover:underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Privasi</a>
</div>
<div class="flex flex-col gap-2 font-body-md text-body-md">
<a class="text-on-surface-variant hover:text-primary hover:underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Syarat</a>
</div>
</footer>
</body></html>