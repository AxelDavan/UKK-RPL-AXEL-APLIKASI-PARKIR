<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Fitur</title>
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
                    "display-lg": [
                            "Plus Jakarta Sans"
                    ],
                    "body-md": [
                            "Plus Jakarta Sans"
                    ],
                    "title-lg": [
                            "Plus Jakarta Sans"
                    ],
                    "label-lg": [
                            "Plus Jakarta Sans"
                    ],
                    "body-lg": [
                            "Plus Jakarta Sans"
                    ],
                    "headline-lg-mobile": [
                            "Plus Jakarta Sans"
                    ],
                    "label-md": [
                            "Plus Jakarta Sans"
                    ],
                    "headline-lg": [
                            "Plus Jakarta Sans"
                    ]
            },
            "fontSize": {
                    "display-lg": [
                            "57px",
                            {
                                    "lineHeight": "64px",
                                    "letterSpacing": "-0.02em",
                                    "fontWeight": "700"
                            }
                    ],
                    "body-md": [
                            "14px",
                            {
                                    "lineHeight": "20px",
                                    "fontWeight": "400"
                            }
                    ],
                    "title-lg": [
                            "22px",
                            {
                                    "lineHeight": "28px",
                                    "fontWeight": "500"
                            }
                    ],
                    "label-lg": [
                            "14px",
                            {
                                    "lineHeight": "20px",
                                    "letterSpacing": "0.02em",
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
                    "headline-lg-mobile": [
                            "28px",
                            {
                                    "lineHeight": "36px",
                                    "fontWeight": "600"
                            }
                    ],
                    "label-md": [
                            "12px",
                            {
                                    "lineHeight": "16px",
                                    "letterSpacing": "0.05em",
                                    "fontWeight": "600"
                            }
                    ],
                    "headline-lg": [
                            "32px",
                            {
                                    "lineHeight": "40px",
                                    "letterSpacing": "-0.01em",
                                    "fontWeight": "600"
                            }
                    ]
            }
    },
        },
      }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-background antialiased pt-20">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-glass-surface dark:bg-glass-surface backdrop-blur-md border-b border-glass-border shadow-sm transition-all duration-300 ease-in-out">
<div class="flex justify-between items-center max-w-max-width mx-auto px-gutter-lg h-20">
<div class="font-headline-lg text-headline-lg font-bold text-primary dark:text-inverse-primary flex items-center"><img alt="Safe Park Logo" class="w-10 h-10 object-contain mr-2 inline-block"                 src="{{ asset('image/screen.webp') }}">
                Safe Park
            </div>
<div class="hidden md:flex gap-8">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('welcome') }}">Beranda</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('about') }}">Tentang Kami</a>
<a class="text-primary dark:text-inverse-primary font-bold border-b-2 border-primary font-label-lg text-label-lg py-7" href="{{ route('fitur') }}">Fitur</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('review') }}">Ulasan</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('faq') }}">FAQ</a>
</div>
<div>
<a class="bg-primary text-on-primary font-label-lg text-label-lg px-6 py-3 rounded-full hover:bg-primary-container hover:text-on-primary-container transition-colors duration-200" href="{{ route('login') }}">Mulai Sekarang</a>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="max-w-max-width mx-auto px-margin-mobile md:px-gutter-lg pb-24">
<!-- Hero Section -->
<section class="py-24 flex flex-col items-center text-center">
<h1 class="font-display-lg text-display-lg text-on-surface mb-6">Segala yang Anda Butuhkan dalam Satu Platform</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-12">Temukan alat canggih dan antarmuka intuitif yang dirancang untuk menyederhanakan alur kerja manajemen media, analitik, dan berbagi Anda.</p>
</section>
<!-- Feature Grid -->
<section class="mb-32">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter-lg">
<!-- Card 1 -->
<div class="bg-glass-surface backdrop-blur-md border border-glass-border rounded-xl p-6 shadow-[0px_12px_32px_rgba(0,83,219,0.08)] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="perm_media" style="font-variation-settings: 'FILL' 1;">perm_media</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Manajemen Media</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Pusatkan semua aset Anda dengan kategorisasi cerdas.</p>
</div>
<!-- Card 2 -->
<div class="bg-glass-surface backdrop-blur-md border border-glass-border rounded-xl p-6 shadow-[0px_12px_32px_rgba(0,83,219,0.08)] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="audio_file" style="font-variation-settings: 'FILL' 1;">audio_file</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Dukungan MP3</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Pemutaran audio yang mulus dan pengeditan metadata.</p>
</div>
<!-- Card 3 -->
<div class="bg-glass-surface backdrop-blur-md border border-glass-border rounded-xl p-6 shadow-[0px_12px_32px_rgba(0,83,219,0.08)] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="video_file" style="font-variation-settings: 'FILL' 1;">video_file</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Dukungan MP4</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Rendering video berkualitas tinggi dan analisis frame-demi-frame.</p>
</div>
<!-- Card 4 -->
<div class="bg-glass-surface backdrop-blur-md border border-glass-border rounded-xl p-6 shadow-[0px_12px_32px_rgba(0,83,219,0.08)] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="analytics" style="font-variation-settings: 'FILL' 1;">analytics</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Analitik Lanjutan</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Selami lebih dalam metrik performa dan keterlibatan pengguna.</p>
</div>
</div>
</section>
<!-- Featured Feature Showcase -->
<section class="mb-32">
<div class="bg-surface-container-low rounded-[2rem] p-8 md:p-16 flex flex-col md:flex-row items-center gap-12 shadow-sm border border-glass-border">
<div class="flex-1 space-y-6">
<h2 class="font-headline-lg text-headline-lg text-primary">Organisasi Berbasis AI</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Biarkan algoritma canggih kami secara otomatis menandai, menyortir, dan mengategorikan seluruh pustaka media Anda. Habiskan lebih sedikit waktu mengelola dan lebih banyak waktu berkreasi.</p>
<h1>    </h1>
<a class="bg-primary text-on-primary font-label-lg text-label-lg px-6 py-3 rounded-full hover:bg-primary-container hover:text-on-primary-container transition-colors duration-200" href="https://id.linkedin.com/pulse/ai-driven-organization-model-sanjay-saini-cmxbc?tl=id">Lihat Selengkapnya</a>
</div>
<div class="flex-1 w-full rounded-xl overflow-hidden shadow-lg border border-glass-border relative">
<div class="bg-cover bg-center w-full h-80" data-alt="A sleek, modern user interface mockup displaying a media library dashboard. The interface features a clean, light-mode aesthetic with soft blue accents and subtle glassmorphic overlays. It shows a grid of abstract image thumbnails, sidebar navigation, and a prominent 'Auto-Tagging in Progress' notification. The overall feeling is professional, organized, and technologically advanced." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKrjFpNsqBp3jmQFXaw8xzXMWoZaFMumWgS-IpxTnavy8be6Fv-m5iEQ_qRYXYMpYHnFgmwNJAaplNR_aqlyy18qqfTxRb3EOC4RDPm15ZVZYohRqKrLFhAYlX-WoEvfCT2_ISXKo9oAzz9q_0sZi4M2t6LePBxObBEe2IrIEX2oqV4PE1OQXkFnfEYINSZhqP_KF9z4ky3_bvOa_pBS82GRgKUeyvzfvll9Mhbg93pTqIebISQWLroA')"></div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 bg-surface-container-lowest dark:bg-inverse-surface border-t border-outline-variant">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter-lg max-w-max-width mx-auto px-gutter-lg">
<div class="flex flex-col gap-4">
<span class="font-title-lg text-title-lg font-bold text-primary dark:text-inverse-primary">Safe Park</span>
<span class="font-body-md text-body-md text-on-surface-variant">© 2024 Safe Park. Hak cipta dilindungi undang-undang.</span>
</div>
<div class="flex flex-col gap-3">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Produk</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Perusahaan</a>
</div>
<div class="flex flex-col gap-3">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Dukungan</a>
</div>
<div class="flex flex-col gap-3">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Privasi</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Syarat &amp; Ketentuan</a>
</div>
</div>
</footer>
</body></html>