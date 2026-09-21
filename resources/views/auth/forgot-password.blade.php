<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lupa Kata Sandi - Safe Park</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-primary-fixed-variant": "#003ea8",
                      "on-surface": "#121c2a",
                      "on-primary": "#ffffff",
                      "primary-fixed-dim": "#b4c5ff",
                      "on-error": "#ffffff",
                      "error-container": "#ffdad6",
                      "tertiary": "#784b00",
                      "on-background": "#121c2a",
                      "tertiary-fixed": "#ffddb8",
                      "secondary-fixed-dim": "#4edea3",
                      "secondary-fixed": "#6ffbbe",
                      "background": "#f8f9ff",
                      "surface-container-highest": "#d9e3f6",
                      "on-error-container": "#93000a",
                      "secondary": "#006c49",
                      "error": "#ba1a1a",
                      "on-tertiary": "#ffffff",
                      "inverse-surface": "#27313f",
                      "surface": "#f8f9ff",
                      "surface-tint": "#0053db",
                      "primary-fixed": "#dbe1ff",
                      "on-surface-variant": "#434655",
                      "surface-variant": "#d9e3f6",
                      "on-secondary-fixed": "#002113",
                      "tertiary-container": "#996100",
                      "surface-dim": "#d0dbed",
                      "surface-bright": "#f8f9ff",
                      "on-tertiary-container": "#ffeedd",
                      "on-secondary": "#ffffff",
                      "surface-container-high": "#dee9fc",
                      "secondary-container": "#6cf8bb",
                      "tertiary-fixed-dim": "#ffb95f",
                      "primary": "#004ac6",
                      "inverse-on-surface": "#eaf1ff",
                      "primary-container": "#2563eb",
                      "surface-container": "#e6eeff",
                      "on-primary-container": "#eeefff",
                      "on-tertiary-fixed": "#2a1700",
                      "on-secondary-fixed-variant": "#005236",
                      "inverse-primary": "#b4c5ff",
                      "outline-variant": "#c3c6d7",
                      "on-tertiary-fixed-variant": "#653e00",
                      "on-secondary-container": "#00714d",
                      "surface-container-lowest": "#ffffff",
                      "surface-container-low": "#eff4ff",
                      "outline": "#737686",
                      "on-primary-fixed": "#00174b"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "container-padding-desktop": "24px",
                      "stack-sm": "4px",
                      "stack-lg": "24px",
                      "base": "8px",
                      "container-padding-mobile": "16px",
                      "stack-md": "12px",
                      "gutter": "16px"
              },
              "fontFamily": {
                      "display-lg": ["Plus Jakarta Sans"],
                      "label-md": ["Inter"],
                      "headline-lg-mobile": ["Plus Jakarta Sans"],
                      "body-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "headline-lg": ["Plus Jakarta Sans"],
                      "title-lg": ["Plus Jakarta Sans"],
                      "label-lg": ["Inter"]
              },
              "fontSize": {
                      "display-lg": ["57px", {"lineHeight": "64px", "letterSpacing": "-0.25px", "fontWeight": "700"}],
                      "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.5px", "fontWeight": "500"}],
                      "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "600"}],
                      "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                      "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                      "title-lg": ["22px", {"lineHeight": "28px", "fontWeight": "500"}],
                      "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.1px", "fontWeight": "500"}]
              }
            }
          }
        }
    </script>
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
        .bg-dynamic-gradient {
            background: linear-gradient(135deg, #f8f9ff 0%, #e6eeff 50%, #d9e3f6 100%);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-dynamic-gradient text-on-surface min-h-screen flex flex-col font-body-md antialiased relative overflow-hidden">
<!-- Main Content Area -->
<main class="flex-grow flex items-center justify-center p-container-padding-mobile z-10">
<div class="w-full max-w-md glass-card rounded-lg shadow-lg p-8 sm:p-10 flex flex-col items-center">
<!-- Logo -->
<div class="mb-stack-lg">
<img alt="Safe Park Logo" class="w-32 h-auto object-contain" src="{{ asset('image/screen.webp') }}"/>
</div>
<!-- Header Text -->
<div class="text-center mb-stack-lg w-full">
<h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-surface mb-stack-sm">
                    Lupa Kata Sandi
                </h1>
<p class="font-body-md text-body-md text-on-surface-variant">
                    Masukkan email Anda untuk menerima instruksi pengaturan ulang kata sandi.
                </p>
</div>
<!-- Form -->
<form action="#" class="w-full flex flex-col gap-stack-md" method="POST">
<!-- Email Input -->
<div class="flex flex-col gap-stack-sm">
<label class="font-label-md text-label-md text-on-surface" for="email">Email</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">mail</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-sm focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface transition-shadow outline-none" id="email" name="email" placeholder="nama@email.com" required="" type="email"/>
</div>
</div>
<!-- Submit Button -->
<button class="mt-stack-sm w-full bg-primary text-on-primary font-label-lg text-label-lg py-3 rounded-full hover:bg-primary-container active:scale-95 transition-all shadow-sm flex items-center justify-center gap-2" type="submit">
                    Kirim Tautan Pemulihan
                </button>
</form>
<!-- Back to Login Link -->
<div class="mt-stack-lg text-center">
<a class="font-label-md text-label-md text-primary hover:text-primary-container transition-colors inline-flex items-center gap-1" href="{{ route('login') }}">
                    Kembali Login
                </a>
</div>
</div>
</main>
<!-- Note: BottomNavBar is intentionally suppressed as this is a linear/transactional screen -->
</body></html>