<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Bantuan & Live Chat - Safe Park</title>
  
  <!-- Google Fonts & Material Symbols -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
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
</head>
<body class="bg-[#faf8ff] text-[#191b23] font-sans antialiased min-h-screen flex flex-col md:flex-row w-full">

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
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('kendaraan') }}">
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
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10 mt-auto" href="{{ route('bantuan') }}">
            <span class="material-symbols-outlined">help</span>
            <span class="font-title-md text-title-md">Bantuan</span>
        </a>
    </div>
</nav>

<nav id="mobile-sidebar" class="bg-surface border-r border-outline-variant h-screen w-64 fixed left-0 top-0 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col md:hidden">
    <div class="p-lg flex justify-between items-center">
        <div>
            <h1 class="font-title-lg text-title-lg font-bold text-primary">Safe Park</h1>
            <p class="font-body-md text-body-md text-secondary mt-1">Smart Apartment Parking</p>
        </div>
        <button onclick="toggleMobileSidebar()" class="text-secondary hover:text-primary">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <div class="flex flex-col h-full py-lg px-md gap-sm overflow-y-auto">
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
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('invite') }}">
            <span class="material-symbols-outlined">person_add</span>
            <span class="font-title-md text-title-md">Undang Tamu</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary hover:text-primary hover:bg-surface-container transition-colors" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-title-md text-title-md">Profile</span>
        </a>
        <a class="flex items-center gap-md px-md py-sm rounded-lg text-primary font-bold border-r-4 border-primary bg-primary-container/10 mt-auto" href="{{ route('bantuan') }}">
            <span class="material-symbols-outlined">help</span>
            <span class="font-title-md text-title-md">Bantuan</span>
        </a>
    </div>
</nav>

<!-- BACKDROP GELAP UNTUK MOBILE SIDEBAR -->

  <!-- Main Content Area -->
  <div class="flex-1 flex flex-col w-full md:ml-64 min-h-screen">
    <main class="flex-1 p-6 md:p-8 w-full max-w-5xl mx-auto flex flex-col h-screen">
        <header class="bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm sticky top-0 z-40">
          <div class="flex justify-between items-center w-full px-6 py-3">
            <div class="flex items-center gap-3 md:hidden">
                <!-- Tombol Hamburger Menu Mobile -->
                <button onclick="toggleMobileSidebar()" class="text-secondary hover:text-primary focus:outline-none">
                    <span class="material-symbols-outlined text-2xl">menu</span>
                </button>
                <h1 class="text-lg font-bold text-primary">Safe Park</h1>
            </div>
            <div class="flex-1"></div>
          </div>
        </header>
      
      <!-- Page Header -->
      <div class="mb-4">
        <h2 class="text-2xl font-bold text-[#191b23]">Bantuan & Pos Petugas</h2>
        <p class="text-xs text-[#505f76] mt-0.5">Hubungi petugas operasional parkir secara langsung jika mengalami kendala.</p>
      </div>

      <!-- Chat Layout Container -->
      <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm flex-1 flex flex-col overflow-hidden mb-4">
        
        <!-- Chat Header -->
        <div class="p-4 bg-slate-50 border-b border-slate-200/80 flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="relative">
              <div class="w-10 h-10 rounded-full bg-[#004ac6] text-white flex items-center justify-center font-bold text-sm">
                P
              </div>
              <span class="w-3 h-3 bg-emerald-500 border-2 border-white rounded-full absolute bottom-0 right-0"></span>
            </div>
            <div>
              <h3 class="font-bold text-sm text-slate-800">Petugas Pos Parkir Utama</h3>
              <p class="text-[11px] text-emerald-600 font-semibold flex items-center gap-1">
                <span>•</span> Siap Melayani (24 Jam)
              </p>
            </div>
          </div>

          <a href="https://wa.me/6285770798229" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-emerald-50 text-emerald-700 hover:bg-emerald-100 font-semibold text-xs border border-emerald-200 transition-colors">
            <span class="material-symbols-outlined text-sm">call</span>
            <span>Darurat (WhatsApp)</span>
          </a>
        </div>

        <!-- Chat Area / Message List -->
        <div id="chatBox" class="flex-1 p-4 overflow-y-auto space-y-4 bg-slate-50/50">
          
          <div class="flex justify-center">
            <span class="text-[10px] bg-slate-200/60 text-slate-600 px-3 py-1 rounded-full font-medium">
              Sesi Obrolan Terhubung dengan Sistem Pos Parkir
            </span>
          </div>

          <!-- Pesan Sambutan Otomatis -->
          <div class="flex items-start gap-2.5 max-w-[80%]">
            <div class="w-8 h-8 rounded-full bg-[#004ac6] text-white flex items-center justify-center font-bold text-xs shrink-0">
              P
            </div>
            <div class="bg-white p-3.5 rounded-2xl rounded-tl-none border border-slate-200/80 shadow-sm">
              <p class="text-xs text-slate-700 leading-relaxed">
                Halo Bpk/Ibu <span class="font-bold text-slate-900">{{ auth()->user()->name ?? 'Residen' }}</span>. Ada kendala seputar slot parkir, palang pintu, atau undangan tamu yang bisa petugas bantu?
              </p>
              <span class="text-[9px] text-slate-400 mt-1 block text-right">Sistem Pos</span>
            </div>
          </div>

          <!-- Container untuk render pesan dari DB -->
          <div id="messageContainer" class="space-y-4"></div>

        </div>

        <!-- Chat Input Form -->
        <div class="p-3 bg-white border-t border-slate-200">
          <form id="chatForm" class="flex items-center gap-2">
            <input type="text" id="pesanInput" placeholder="Tulis kendala Anda di sini..." class="flex-1 bg-slate-100 border-none rounded-xl px-4 py-2.5 text-xs text-slate-800 placeholder:text-slate-400 focus:ring-2 focus:ring-[#004ac6] focus:bg-white transition-all" required autocomplete="off"/>
            
            <button type="submit" id="sendBtn" class="p-2.5 rounded-xl bg-[#004ac6] hover:bg-blue-700 text-white shadow-md shadow-blue-600/20 active:scale-95 transition-all flex items-center justify-center">
              <span class="material-symbols-outlined text-lg">send</span>
            </button>
          </form>
        </div>

      </div>

    </main>
  </div>

  <!-- SCRIPT CHAT REALTIME (AJAX / POLLING) -->
  <script>
    const chatBox = document.getElementById('chatBox');
    const messageContainer = document.getElementById('messageContainer');
    const chatForm = document.getElementById('chatForm');
    const pesanInput = document.getElementById('pesanInput');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let totalChatsCount = 0;

    // Fungsi Fetch Pesan dari Database
    async function fetchChats() {
      try {
        const response = await fetch("{{ route('bantuan.get') }}");
        const chats = await response.json();

        // Render jika ada pesan baru
        if (chats.length !== totalChatsCount) {
          totalChatsCount = chats.length;
          renderChats(chats);
        }
      } catch (error) {
        console.error("Gagal mengambil data chat:", error);
      }
    }

    // Fungsi Render Elemen Chat
    function renderChats(chats) {
      messageContainer.innerHTML = '';

      chats.forEach(chat => {
        const messageDiv = document.createElement('div');

        if (chat.is_petugas) {
          // Chat Balasan dari Petugas (Kiri)
          messageDiv.className = 'flex items-start gap-2.5 max-w-[80%]';
          messageDiv.innerHTML = `
            <div class="w-8 h-8 rounded-full bg-[#004ac6] text-white flex items-center justify-center font-bold text-xs shrink-0">P</div>
            <div class="bg-white p-3.5 rounded-2xl rounded-tl-none border border-slate-200/80 shadow-sm">
              <p class="text-xs text-slate-700 leading-relaxed">${escapeHtml(chat.pesan)}</p>
              <span class="text-[9px] text-slate-400 mt-1 block text-right">${chat.waktu}</span>
            </div>
          `;
        } else {
          // Chat dari Owner (Kanan)
          messageDiv.className = 'flex items-start justify-end gap-2.5 max-w-[80%] ml-auto';
          messageDiv.innerHTML = `
            <div class="bg-[#004ac6] text-white p-3.5 rounded-2xl rounded-tr-none shadow-sm">
              <p class="text-xs leading-relaxed">${escapeHtml(chat.pesan)}</p>
              <span class="text-[9px] text-blue-200 mt-1 block text-right">${chat.waktu}</span>
            </div>
          `;
        }

        messageContainer.appendChild(messageDiv);
      });

      // Auto-scroll ke paling bawah saat pesan baru masuk
      chatBox.scrollTop = chatBox.scrollHeight;
    }

    // Sanitisasi HTML biar aman dari XSS
    function escapeHtml(text) {
      const div = document.createElement('div');
      div.innerText = text;
      return div.innerHTML;
    }

    function toggleMobileSidebar() {
      const sidebar = document.getElementById('mobile-sidebar');
      const backdrop = document.getElementById('sidebar-backdrop');
      
      sidebar.classList.toggle('-translate-x-full');
      backdrop.classList.toggle('hidden');
    }

    // Event Listener Kirim Chat
    chatForm.addEventListener('submit', async function(e) {
      e.preventDefault();
      const pesan = pesanInput.value.trim();
      if (!pesan) return;

      pesanInput.value = '';

      try {
        const response = await fetch("{{ route('bantuan.kirim') }}", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
          },
          body: JSON.stringify({ pesan: pesan })
        });

        if (response.ok) {
          fetchChats(); // Refresh daftar chat langsung
        }
      } catch (error) {
        console.error("Gagal mengirim pesan:", error);
      }
    });

    // Jalankan awal & polling otomatis setiap 2 detik
    fetchChats();
    setInterval(fetchChats, 2000);
  </script>

</body>
</html>