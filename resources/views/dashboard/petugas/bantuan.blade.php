<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Pos Bantuan Petugas - Safe Park</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
  
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#004ac6',
            surface: '#f8f9ff',
          },
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'sans-serif']
          }
        }
      }
    }
  </script>
</head>
<body class="bg-[#f8f9ff] text-slate-800 font-sans antialiased min-h-screen flex">

  <!-- Sidebar Simple Admin -->
  <aside class="w-64 bg-white border-r border-slate-200/80 p-6 flex flex-col shrink-0 hidden md:flex h-screen">
    <div class="mb-8">
      <h1 class="text-xl font-bold text-[#004ac6]">Safe Park</h1>
      <p class="text-xs text-slate-400">Dashboard Petugas Pos</p>
    </div>
    <nav class="space-y-1">
      <a href="{{ route('petugas.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 font-semibold text-sm">
        <span class="material-symbols-outlined">dashboard</span> Dashboard
      </a>
      <a href="{{ route('admin.bantuan') }}" class="flex items-center justify-between px-4 py-2.5 rounded-xl text-[#004ac6] bg-blue-50 font-bold text-sm">
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined">chat</span> Bantuan Chat
        </div>
        <span id="bantuanBadge" class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse hidden"></span>
      </a>
    </nav>
  </aside>

  <!-- Main Content Layout WhatsApp Style -->
  <div class="flex-1 flex flex-col h-screen overflow-hidden">
    
    <div class="p-4 bg-white border-b border-slate-200">
      <h2 class="text-lg font-bold text-slate-800">Pos Pelayanan & Live Chat Penghuni</h2>
    </div>

    <!-- TAMPILAN GAYA WHATSAPP (Kiri List User, Kanan Chat Box) -->
    <div class="flex-1 flex overflow-hidden">
      
      <!-- SISI KIRI: List Penghuni yang Chat -->
      <div class="w-80 bg-white border-r border-slate-200 flex flex-col shrink-0">
        <div class="p-3 border-b border-slate-100 bg-slate-50/50">
          <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Daftar Obrolan Masuk</span>
        </div>
        
        <!-- Container User List -->
        <div id="userList" class="flex-1 overflow-y-auto divide-y divide-slate-100">
          <!-- Diisi via JavaScript -->
        </div>
      </div>

      <!-- SISI KANAN: Layar Obrolan Chat -->
      <div class="flex-1 bg-slate-50/60 flex flex-col">
        
        <!-- Header Chat User yang Dipilih -->
        <div id="chatHeader" class="p-4 bg-white border-b border-slate-200 hidden items-center justify-between">
          <div class="flex items-center gap-3">
            <div id="activeUserAvatar" class="w-10 h-10 rounded-full bg-[#004ac6] text-white flex items-center justify-center font-bold text-sm">
              R
            </div>
            <div>
              <h3 id="activeUserName" class="font-bold text-sm text-slate-800">Pilih Penghuni</h3>
              <p id="activeUserUnit" class="text-xs text-slate-400">Unit #--</p>
            </div>
          </div>
        </div>

        <!-- Placeholder kalau belum pilih user -->
        <div id="noUserSelected" class="flex-1 flex flex-col items-center justify-center text-slate-400 space-y-2">
          <span class="material-symbols-outlined text-5xl">forum</span>
          <p class="text-xs font-medium">Pilih salah satu penghuni di sebelah kiri untuk mulai obrolan</p>
        </div>

        <!-- Area Pesan -->
        <div id="chatBox" class="flex-1 p-4 overflow-y-auto space-y-3 hidden">
          <div id="messageContainer" class="space-y-3"></div>
        </div>

        <!-- Form Kirim Balasan Admin -->
        <div id="chatInputArea" class="p-3 bg-white border-t border-slate-200 hidden">
          <form id="adminChatForm" class="flex items-center gap-2">
            <input type="text" id="adminPesanInput" placeholder="Ketik balasan petugas di sini..." class="flex-1 bg-slate-100 border-none rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:ring-2 focus:ring-[#004ac6] focus:bg-white" required autocomplete="off"/>
            <button type="submit" class="p-2.5 rounded-xl bg-[#004ac6] hover:bg-blue-700 text-white shadow-md active:scale-95 transition-all">
              <span class="material-symbols-outlined text-lg">send</span>
            </button>
          </form>
        </div>

      </div>

    </div>

  </div>

  <audio id="notifSound" src="{{ asset('audio/handoff.mp3') }}" preload="auto"></audio>

  <!-- JAVASCRIPT REALTIME ADMIN -->
  <script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const userList = document.getElementById('userList');
    const chatHeader = document.getElementById('chatHeader');
    const noUserSelected = document.getElementById('noUserSelected');
    const chatBox = document.getElementById('chatBox');
    const chatInputArea = document.getElementById('chatInputArea');
    const messageContainer = document.getElementById('messageContainer');
    const adminChatForm = document.getElementById('adminChatForm');
    const adminPesanInput = document.getElementById('adminPesanInput');

    let selectedUserId = null;

    // Fetch Daftar User
    async function fetchUsers() {
      try {
        const response = await fetch("{{ route('admin.bantuan.users') }}");
        const users = await response.json();
        renderUserList(users);
      } catch (err) {
        console.error("Gagal load user:", err);
      }
    }

    function renderUserList(users) {
      userList.innerHTML = '';
      if (users.length === 0) {
        userList.innerHTML = `<div class="p-4 text-xs text-slate-400 text-center">Belum ada obrolan masuk</div>`;
        return;
      }

      users.forEach(u => {
        const activeClass = selectedUserId === u.id ? 'bg-blue-50/80 border-l-4 border-[#004ac6]' : 'hover:bg-slate-50';
        const div = document.createElement('div');
        div.className = `p-3.5 cursor-pointer transition-all flex items-center gap-3 ${activeClass}`;
        div.onclick = () => selectUser(u);

        div.innerHTML = `
          <div class="w-9 h-9 rounded-full bg-slate-200 text-slate-700 font-bold text-xs flex items-center justify-center shrink-0">
            ${u.name.charAt(0).toUpperCase()}
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between mb-0.5">
              <h4 class="text-xs font-bold text-slate-800 truncate">${u.name}</h4>
              <span class="text-[10px] text-slate-400">${u.last_time}</span>
            </div>
            <p class="text-[11px] text-slate-500 truncate">${u.last_message || 'Unit #' + u.unit}</p>
          </div>
        `;
        userList.appendChild(div);
      });
    }

    // Pilih User & Tampilkan Chat
    function selectUser(user) {
      selectedUserId = user.id;
      document.getElementById('activeUserName').innerText = user.name;
      document.getElementById('activeUserUnit').innerText = 'Unit #' + user.unit;
      document.getElementById('activeUserAvatar').innerText = user.name.charAt(0).toUpperCase();

      noUserSelected.classList.add('hidden');
      chatHeader.classList.remove('hidden');
      chatHeader.classList.add('flex');
      chatBox.classList.remove('hidden');
      chatInputArea.classList.remove('hidden');

      fetchUserChats();
      fetchUsers();
    }

    // Fetch Chat Spesifik User
    async function fetchUserChats() {
      if (!selectedUserId) return;
      try {
        const response = await fetch(`/admin/bantuan/chats/${selectedUserId}`);
        const chats = await response.json();
        renderChats(chats);
      } catch (err) {
        console.error("Gagal load chat:", err);
      }
    }

    function renderChats(chats) {
      messageContainer.innerHTML = '';
      chats.forEach(c => {
        const div = document.createElement('div');
        if (c.is_petugas) {
          // Balasan Petugas (Kanan)
          div.className = 'flex items-start justify-end gap-2.5 max-w-[80%] ml-auto';
          div.innerHTML = `
            <div class="bg-[#004ac6] text-white p-3 rounded-2xl rounded-tr-none shadow-sm">
              <p class="text-xs">${escapeHtml(c.pesan)}</p>
              <span class="text-[9px] text-blue-200 mt-1 block text-right">${c.waktu}</span>
            </div>
          `;
        } else {
          // Pesan Penghuni (Kiri)
          div.className = 'flex items-start gap-2.5 max-w-[80%]';
          div.innerHTML = `
            <div class="bg-white p-3 rounded-2xl rounded-tl-none border border-slate-200 shadow-sm">
              <p class="text-xs text-slate-800">${escapeHtml(c.pesan)}</p>
              <span class="text-[9px] text-slate-400 mt-1 block text-right">${c.waktu}</span>
            </div>
          `;
        }
        messageContainer.appendChild(div);
      });
      chatBox.scrollTop = chatBox.scrollHeight;
    }

    function escapeHtml(text) {
      const div = document.createElement('div');
      div.innerText = text;
      return div.innerHTML;
    }

    // Kirim Balasan Admin
    adminChatForm.addEventListener('submit', async function(e) {
      e.preventDefault();
      const pesan = adminPesanInput.value.trim();
      if (!pesan || !selectedUserId) return;

      adminPesanInput.value = '';

      try {
        await fetch(`/admin/bantuan/kirim/${selectedUserId}`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
          },
          body: JSON.stringify({ pesan: pesan })
        });
        fetchUserChats();
      } catch (err) {
        console.error("Gagal kirim balasan:", err);
      }
    });

    // Auto-update & Notification check
    const bantuanBadge = document.getElementById('bantuanBadge');
    const notifSound = document.getElementById('notifSound');
    let lastChatId = localStorage.getItem('last_seen_chat_id') || 0;

    async function checkNewMessages() {
      try {
        const response = await fetch("{{ route('admin.bantuan.users') }}");
        if (!response.ok) return;

        const users = await response.json();

        if (users.length > 0) {
          let latestChatId = 0;
          users.forEach(u => {
            if (u.last_chat_id > latestChatId) {
              latestChatId = u.last_chat_id;
            }
          });

          if (latestChatId > lastChatId) {
            if (bantuanBadge) bantuanBadge.classList.remove('hidden');

            if (notifSound) {
              notifSound.play().catch(e => console.log("Audio play blocked by browser:", e));
            }

            lastChatId = latestChatId;
            localStorage.setItem('last_seen_chat_id', lastChatId);
          }
        }
      } catch (err) {
        console.error("Gagal mengecek notifikasi pesan:", err);
      }
    }

    fetchUsers();
    setInterval(() => {
      fetchUsers();
      checkNewMessages();
      if (selectedUserId) fetchUserChats();
    }, 2000);
  </script>

</body>
</html>