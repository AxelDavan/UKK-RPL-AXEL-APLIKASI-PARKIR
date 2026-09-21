<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safe Park - Landing Page</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary": "#ffffff",
                      "inverse-on-surface": "#ebf1ff",
                      "primary-fixed": "#dbe1ff",
                      "on-tertiary-container": "#ffd19c",
                      "tertiary": "#653f00",
                      "surface-container-low": "#eff3ff",
                      "on-tertiary-fixed-variant": "#653e00",
                      "surface-container": "#e6eeff",
                      "inverse-primary": "#b4c5ff",
                      "on-secondary-container": "#0c714d",
                      "primary-container": "#0053db",
                      "on-primary": "#ffffff",
                      "tertiary-fixed": "#ffddb7",
                      "background": "#f8f9ff",
                      "primary": "#003ea8",
                      "on-primary-fixed-variant": "#003ea8",
                      "surface-container-lowest": "#ffffff",
                      "surface-tint": "#0053db",
                      "glass-surface": "rgba(248, 249, 255, 0.7)",
                      "surface-variant": "#d9e3f7",
                      "outline-variant": "#c3c6d7",
                      "on-tertiary-fixed": "#2a1700",
                      "on-primary-container": "#ced8ff",
                      "on-surface-variant": "#434655",
                      "on-error-container": "#93000a",
                      "on-primary-fixed": "#00174b",
                      "error-container": "#ffdad6",
                      "secondary-fixed-dim": "#81d8ad",
                      "on-error": "#ffffff",
                      "surface-container-highest": "#d9e3f7",
                      "surface-dim": "#d0daee",
                      "on-background": "#121c2a",
                      "surface-bright": "#f8f9ff",
                      "primary-fixed-dim": "#b4c5ff",
                      "inverse-surface": "#273140",
                      "outline": "#737686",
                      "glass-border": "rgba(255, 255, 255, 0.4)",
                      "on-secondary-fixed": "#002113",
                      "on-secondary-fixed-variant": "#005236",
                      "secondary-fixed": "#9df4c8",
                      "surface-container-high": "#dfe9fc",
                      "on-tertiary": "#ffffff",
                      "error": "#ba1a1a",
                      "on-surface": "#121c2a",
                      "surface": "#f8f9ff",
                      "secondary": "#006c49",
                      "tertiary-fixed-dim": "#fabb6b",
                      "secondary-container": "#9af2c5",
                      "tertiary-container": "#84550b"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "gutter-sm": "16px",
                      "base": "8px",
                      "margin-desktop": "auto",
                      "gutter-lg": "24px",
                      "margin-mobile": "16px",
                      "max-width": "1280px"
              },
              "fontFamily": {
                      "body-md": [
                              "Plus Jakarta Sans"
                      ],
                      "display-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "label-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "body-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "title-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "label-md": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg": [
                              "Plus Jakarta Sans"
                      ],
                      "headline-lg-mobile": [
                              "Plus Jakarta Sans"
                      ]
              },
              "fontSize": {
                      "body-md": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ],
                      "display-lg": [
                              "57px",
                              {
                                      "lineHeight": "64px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
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
                      "title-lg": [
                              "22px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "500"
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
                      ],
                      "headline-lg-mobile": [
                              "28px",
                              {
                                      "lineHeight": "36px",
                                      "fontWeight": "600"
                              }
                      ]
              }
      },
          },
        }
      </script>
<style>
        .glass-card {
            background: rgba(248, 249, 255, 0.7);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0px 12px 32px rgba(0, 83, 219, 0.08);
        }
      </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-glass-surface dark:bg-glass-surface backdrop-blur-md border-b border-glass-border shadow-sm transition-all duration-300 ease-in-out">
<div class="flex justify-between items-center max-w-max-width mx-auto px-gutter-lg h-20">
<div class="font-headline-lg text-headline-lg font-bold text-primary dark:text-inverse-primary flex items-center"><img alt="Safe Park Logo" class="w-10 h-10 object-contain mr-2 inline-block"                 src="{{ asset('image/screen.webp') }}">
                Safe Park
            </div>
<div class="hidden md:flex gap-8">
<a class="text-primary dark:text-inverse-primary font-bold border-b-2 border-primary font-label-lg text-label-lg py-7" href="{{ route('welcome') }}">Beranda</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('about') }}">Tentang Kami</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('fitur') }}">Fitur</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('review') }}">Ulasan</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('fitur') }}">FAQ</a>
</div>
<div>
<a class="bg-primary text-on-primary font-label-lg text-label-lg px-6 py-3 rounded-full hover:bg-primary-container hover:text-on-primary-container transition-colors duration-200" href="{{ route('login') }}">Mulai Sekarang</a>
</div>
</div>
</nav>
<main class="flex-grow pt-28 pb-12">
<!-- Hero Section -->
<section class="max-w-max-width mx-auto px-gutter-lg py-16 flex flex-col lg:flex-row items-center gap-12">
<div class="flex-1 space-y-6">
<h1 class="font-display-lg text-display-lg text-on-background">Revolusi Parkir Pintar untuk Hunian Modern</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Tingkatkan efisiensi dan keamanan dengan sistem manajemen parkir cerdas kami. Kontrol penuh dalam genggaman Anda.</p>
<div class="flex gap-4">
<a class="bg-primary text-on-primary font-label-lg text-label-lg px-6 py-3 rounded-full hover:bg-primary-container hover:text-on-primary-container transition-colors duration-200" href="{{ route('login') }}">Mulai Sekarang</a>
</div>
</div>
<div class="flex-1 relative w-full h-[400px]">

    <button
        type="button"
        id="heroVideoButton"
        class="relative w-full h-full group cursor-pointer focus:outline-none"
        aria-label="Putar video demo Safe Park"
    >

        <img
            class="w-full h-full object-contain drop-shadow-2xl rounded-2xl
                   transition-transform duration-300
                   group-hover:scale-[1.02]"
            data-alt="A highly detailed 3D isometric illustration of a modern smart parking system in an urban residential setting. The illustration features sleek cars, glowing digital entry gates, and clean geometric structures. The aesthetic is bright and modern, utilizing a color palette of pristine whites, soft greys, and vibrant primary blue accents. The lighting is soft and high-key, creating a clean, premium tech-forward mood."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaOc5SpaHZxlIY_zbE6c7InULvCi27mNW9ve2MRtKLMxDff-Ob7o5lGM8ZsS6dxpkf6k4exIyLOOjQbnJnKC40i3lWl-vQs4umG2bLyQCZp-ninD4bb6gR_HbP2_fC2E0s5z8jcuI5eS61_jOlTaEwxnUpKiXcyMeSbHBFydxsGsWDWLP7eE812ZYzuve-tAeEeLP0NOt9WJewCtVJXJaD8xZaql4e_jVzyFZhMOGyFdcBpUbW7STH_w"
        />

        <!-- Overlay ketika hover -->
        <div
            class="absolute inset-0 flex items-center justify-center
                   opacity-0 group-hover:opacity-100
                   transition-opacity duration-300"
        >
            <div
                class="w-20 h-20 rounded-full bg-primary/95
                       text-white flex items-center justify-center
                       shadow-2xl"
            >
                <span class="material-symbols-outlined text-[42px]">
                    play_arrow
                </span>
            </div>
        </div>

    </button>

</div>
</section>
<!-- Features -->
<section class="max-w-max-width mx-auto px-gutter-lg py-16 bg-surface-container-low rounded-3xl my-16">
<div class="text-center mb-12">
<h2 class="font-headline-lg text-headline-lg text-on-background">Kenapa Memilih Kami?</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="glass-card p-6 rounded-2xl hover:scale-105 transition-transform duration-300">
<span class="material-symbols-outlined text-4xl text-primary mb-4" data-icon="speed">speed</span>
<h3 class="font-title-lg text-title-lg mb-2">Cepat</h3>
<p class="text-on-surface-variant text-body-md">Akses instan tanpa antrean panjang.</p>
</div>
<div class="glass-card p-6 rounded-2xl hover:scale-105 transition-transform duration-300">
<span class="material-symbols-outlined text-4xl text-primary mb-4" data-icon="security">security</span>
<h3 class="font-title-lg text-title-lg mb-2">Aman</h3>
<p class="text-on-surface-variant text-body-md">Sistem keamanan terintegrasi 24/7.</p>
</div>
<div class="glass-card p-6 rounded-2xl hover:scale-105 transition-transform duration-300">
<span class="material-symbols-outlined text-4xl text-primary mb-4" data-icon="devices">devices</span>
<h3 class="font-title-lg text-title-lg mb-2">Responsif</h3>
<p class="text-on-surface-variant text-body-md">Akses dari berbagai perangkat dengan mudah.</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-inverse-surface py-12 border-t border-outline-variant w-full">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter-lg max-w-max-width mx-auto px-gutter-lg">
<div>
<div class="font-title-lg text-title-lg font-bold text-primary dark:text-inverse-primary mb-4">Safe Park</div>
<p class="font-body-md text-body-md text-on-surface-variant">© 2026 SafePark. All rights reserved by Axel Davan Prayoga - SMK N1 SANDEN</p>
</div>
<div class="flex flex-col gap-2">
<a class="text-on-surface-variant hover:text-primary font-body-md text-body-md transition-all hover:opacity-80" href="#">Produk</a>
<a class="text-on-surface-variant hover:text-primary font-body-md text-body-md transition-all hover:opacity-80" href="#">Perusahaan</a>
</div>
<div class="flex flex-col gap-2">
<a class="text-on-surface-variant hover:text-primary font-body-md text-body-md transition-all hover:opacity-80" href="#">Dukungan</a>
<a class="text-on-surface-variant hover:text-primary font-body-md text-body-md transition-all hover:opacity-80" href="#">Privasi</a>
</div>
<div class="flex flex-col gap-2">
<a class="text-on-surface-variant hover:text-primary font-body-md text-body-md transition-all hover:opacity-80" href="#">Syarat &amp; Ketentuan</a>
</div>
<!-- VIDEO MODAL -->
<div
    id="heroVideoModal"
    class="fixed inset-0 z-[9999] hidden items-center justify-center
           bg-black/80 backdrop-blur-sm p-4"
>

    <div class="relative w-full max-w-5xl">

        <!-- Tombol Close -->
        <button
            type="button"
            id="closeHeroVideo"
            class="absolute -top-12 right-0
                   text-white hover:text-gray-300
                   transition-colors"
            aria-label="Tutup video"
        >
            <span class="material-symbols-outlined text-[32px]">
                close
            </span>
        </button>

        <!-- Video -->
        <video
            id="heroVideo"
            class="w-full max-h-[80vh] rounded-2xl
                   shadow-2xl bg-black"
            controls
            playsinline
        >

            <source
                src="{{ asset('videos/vid.mp4') }}""
                type="video/mp4"
            >

            Browser kamu tidak mendukung video HTML5.

        </video>

    </div>
    <script>
    const heroVideoButton = document.getElementById('heroVideoButton');
    const heroVideoModal = document.getElementById('heroVideoModal');
    const heroVideo = document.getElementById('heroVideo');
    const closeHeroVideo = document.getElementById('closeHeroVideo');

    // Klik gambar PNG
    heroVideoButton.addEventListener('click', function () {

        heroVideoModal.classList.remove('hidden');
        heroVideoModal.classList.add('flex');

        heroVideo.currentTime = 0;

        heroVideo.play().catch(function(error) {
            console.log('Video tidak dapat autoplay:', error);
        });

    });


    // Tutup video
    closeHeroVideo.addEventListener('click', function () {

        heroVideo.pause();

        heroVideoModal.classList.add('hidden');
        heroVideoModal.classList.remove('flex');

    });


    // Klik area luar video
    heroVideoModal.addEventListener('click', function(event) {

        if (event.target === heroVideoModal) {

            heroVideo.pause();

            heroVideoModal.classList.add('hidden');
            heroVideoModal.classList.remove('flex');

        }

    });


    // Tekan ESC
    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            heroVideo.pause();

            heroVideoModal.classList.add('hidden');
            heroVideoModal.classList.remove('flex');

        }

    });
</script>
</div>
</div>
</footer>
</body></html>