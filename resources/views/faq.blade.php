<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>FAQ - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        .glass-panel {
            background: rgba(248, 249, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0px 12px 32px rgba(0, 83, 219, 0.08);
        }
        
        .accordion-content {
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        
        .accordion-content.open {
            max-height: 500px; /* Arbitrary large value */
            opacity: 1;
        }
        
        .accordion-icon {
            transition: transform 0.3s ease;
        }
        
        .open .accordion-icon {
            transform: rotate(45deg);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col pt-20">
<!-- Top Navigation -->
<nav class="fixed top-0 w-full z-50 bg-glass-surface dark:bg-glass-surface backdrop-blur-md border-b border-glass-border shadow-sm transition-all duration-300 ease-in-out">
<div class="flex justify-between items-center max-w-max-width mx-auto px-gutter-lg h-20">
<div class="font-headline-lg text-headline-lg font-bold text-primary dark:text-inverse-primary flex items-center"><img alt="Safe Park Logo" class="w-10 h-10 object-contain mr-2 inline-block"                 src="{{ asset('image/screen.webp') }}">
                Safe Park
            </div>
<div class="hidden md:flex gap-8">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('welcome') }}">Beranda</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200" href="{{ route('about') }}">Tentang Kami</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200"  href="{{ route('fitur') }}">Fitur</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg py-7 hover:bg-primary-container/10 transition-colors duration-200"  href="{{ route('review') }}">Ulasan</a>
<a class="text-primary dark:text-inverse-primary font-bold border-b-2 border-primary font-label-lg text-label-lg py-7" href="{{ route('faq') }}">FAQ</a>
</div>
<div>
<a class="bg-primary text-on-primary font-label-lg text-label-lg px-6 py-3 rounded-full hover:bg-primary-container hover:text-on-primary-container transition-colors duration-200" href="{{ route('login') }}">Mulai Sekarang</a>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow max-w-max-width w-full mx-auto px-margin-mobile md:px-gutter-lg pb-24">
<!-- Hero Section -->
<section class="py-16 md:py-24 text-center">
<h1 class="font-display-lg text-display-lg md:font-display-lg md:text-display-lg mb-6">Bagaimana kami bisa membantu?</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-12 max-w-2xl mx-auto">Cari di basis pengetahuan kami atau telusuri kategori di bawah untuk menemukan jawaban atas pertanyaan Anda.</p>
<div class="relative max-w-2xl mx-auto">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-outline" data-icon="search">search</span>
</div>
<input class="w-full bg-surface-container border-0 border-b-2 border-transparent focus:border-primary rounded-t-lg pl-12 pr-4 py-4 font-body-lg text-body-lg text-on-background placeholder:text-outline transition-all duration-300 outline-none shadow-sm" placeholder="Cari pertanyaan..." type="text"/>
</div>
</section>
<!-- Category Tabs -->
<section class="mb-12">
<div class="flex overflow-x-auto hide-scrollbar gap-2 pb-4 border-b border-outline-variant justify-start md:justify-center">
<button class="px-6 py-2 rounded-full bg-primary-container text-on-primary-container font-label-lg text-label-lg whitespace-nowrap transition-colors">Umum</button>
<button class="px-6 py-2 rounded-full text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-colors">Akun</button>
<button class="px-6 py-2 rounded-full text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-colors">Fitur</button>
<button class="px-6 py-2 rounded-full text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-colors">Penagihan</button>
<button class="px-6 py-2 rounded-full text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-colors">Keamanan</button>
</div>
</section>
<!-- FAQ Accordions -->
<section class="max-w-3xl mx-auto mb-20 space-y-4">
<!-- Accordion Item 1 -->
<div class="glass-panel rounded-xl overflow-hidden accordion-item cursor-pointer">
<div class="px-6 py-5 flex justify-between items-center bg-surface-container/50 hover:bg-surface-container transition-colors">
<h3 class="font-title-lg text-title-lg text-on-background">Apa platform ini?</h3>
<span class="material-symbols-outlined accordion-icon text-primary" data-icon="add">add</span>
</div>
<div class="accordion-content bg-surface-container-lowest">
<div class="px-6 py-5 border-t border-outline-variant/30 text-on-surface-variant font-body-md text-body-md">
                        Safe Park adalah platform manajemen SaaS premium yang dirancang untuk merampingkan operasi parkir sebuah apartemen. Kami memadukan arsitektur kelas atas dengan perangkat lunak mutakhir untuk memberikan pengalaman kontrol yang mudah bagi operator dan pengguna.
                    </div>
</div>
</div>
<!-- Accordion Item 2 -->
<div class="glass-panel rounded-xl overflow-hidden accordion-item cursor-pointer">
<div class="px-6 py-5 flex justify-between items-center bg-surface-container/50 hover:bg-surface-container transition-colors">
<h3 class="font-title-lg text-title-lg text-on-background">Apakah data saya aman?</h3>
<span class="material-symbols-outlined accordion-icon text-primary" data-icon="add">add</span>
</div>
<div class="accordion-content bg-surface-container-lowest">
<div class="px-6 py-5 border-t border-outline-variant/30 text-on-surface-variant font-body-md text-body-md">
                        Ya, tentu saja. Kami menggunakan enkripsi tingkat perusahaan untuk semua data saat transit dan saat istirahat. Infrastruktur kami di-host pada server yang aman dan sesuai, memastikan informasi Anda tetap terlindungi di bawah standar industri tertinggi.
                    </div>
</div>
</div>
<!-- Accordion Item 3 -->
<div class="glass-panel rounded-xl overflow-hidden accordion-item cursor-pointer">
<div class="px-6 py-5 flex justify-between items-center bg-surface-container/50 hover:bg-surface-container transition-colors">
<h3 class="font-title-lg text-title-lg text-on-background">Apakah semua orang dapat mengakses situs ini?</h3>
<span class="material-symbols-outlined accordion-icon text-primary" data-icon="add">add</span>
</div>
<div class="accordion-content bg-surface-container-lowest">
<div class="px-6 py-5 border-t border-outline-variant/30 text-on-surface-variant font-body-md text-body-md">
                        Ya, anda dapat mengakses situs ini jika anda sudah membeli apartemen atau datang sebagai tamu.
                    </div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="glass-panel rounded-2xl p-8 md:p-12 text-center max-w-4xl mx-auto mb-12">
<h2 class="font-headline-lg text-headline-lg md:font-headline-lg md:text-headline-lg mb-4">Masih Butuh Bantuan?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-8">Tim dukungan kami tersedia sepanjang waktu untuk membantu Anda dengan pertanyaan apa pun.</p>
<div class="flex flex-col sm:flex-row justify-center gap-4">
<button class="flex items-center justify-center gap-2 bg-primary text-on-primary px-8 py-3 rounded-lg font-label-lg text-label-lg h-12 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined" data-icon="chat" data-weight="fill" style="font-variation-settings: 'FILL' 1;">chat</span>
                    Live Chat
                </button>
<button class="flex items-center justify-center gap-2 bg-surface-container text-on-surface hover:bg-surface-container-high px-8 py-3 rounded-lg font-label-lg text-label-lg h-12 transition-colors border border-glass-border">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
                    Dukungan Email
                </button>
</div>
</section>
</main>
<!-- Floating Help Button -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-primary text-on-primary rounded-full shadow-[0px_12px_32px_rgba(0,83,219,0.2)] flex items-center justify-center hover:scale-105 transition-transform z-40">
<span class="material-symbols-outlined" data-icon="help_outline" data-weight="fill" style="font-variation-settings: 'FILL' 1;">help_outline</span>
</button>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-inverse-surface py-12 border-t border-outline-variant w-full mt-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter-lg max-w-max-width mx-auto px-gutter-lg">
<div class="col-span-1 md:col-span-1">
<div class="font-title-lg text-title-lg md:font-title-lg md:text-title-lg font-bold text-primary dark:text-inverse-primary mb-4">Safe Park</div>
<p class="font-body-md text-body-md md:font-body-md md:text-body-md text-on-surface-variant">© 2026 SafePark. All rights reserved by Axel Davan Prayoga - SMK N1 SANDEN</p>
</div>
<div class="col-span-1 flex flex-col gap-3">
<a class="font-body-md text-body-md md:font-body-md md:text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Produk</a>
<a class="font-body-md text-body-md md:font-body-md md:text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Perusahaan</a>
</div>
<div class="col-span-1 flex flex-col gap-3">
<a class="font-body-md text-body-md md:font-body-md md:text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Dukungan</a>
<a class="font-body-md text-body-md md:font-body-md md:text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Privasi</a>
</div>
<div class="col-span-1 flex flex-col gap-3">
<a class="font-body-md text-body-md md:font-body-md md:text-body-md text-on-surface-variant hover:text-primary underline decoration-primary transition-all opacity-100 hover:opacity-80" href="#">Syarat &amp; Ketentuan</a>
</div>
</div>
</footer>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const header = item.querySelector('.px-6.py-5.flex');
                const content = item.querySelector('.accordion-content');
                
                header.addEventListener('click', () => {
                    const isOpen = content.classList.contains('open');
                    
                    // Close all others (optional, for true accordion behavior)
                    document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('open'));
                    document.querySelectorAll('.accordion-icon').forEach(i => i.textContent = 'add');

                    if (!isOpen) {
                        content.classList.add('open');
                        item.querySelector('.accordion-icon').textContent = 'remove';
                    }
                });
            });
        });
    </script>
</body></html>