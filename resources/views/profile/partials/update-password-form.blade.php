<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Ubah Kata Sandi - Safe Park</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
</head>
<body class="min-h-screen flex flex-col bg-[#f8f9ff] text-[#121c2a] font-['Inter'] antialiased">

    <!-- Header / Top Bar -->
    <header class="w-full top-0 bg-[#f8f9ff] flex items-center px-4 md:px-6 h-16">
        <a aria-label="Kembali" class="text-slate-600 hover:bg-slate-200/60 transition-colors p-2 rounded-full active:scale-95" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <h1 class="ml-4 font-bold text-lg text-[#004ac6] font-['Plus_Jakarta_Sans']">Ubah Kata Sandi</h1>
    </header>

    <!-- Main Canvas -->
    <main class="flex-grow flex items-center justify-center p-4 md:p-6 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-50 via-[#f8f9ff] to-[#f8f9ff]">
        <div class="w-full max-w-md bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-sm border border-slate-200">
            
            <div class="flex flex-col items-center mb-6">
                <img alt="Safe Park Logo" class="w-16 h-16 rounded-xl mb-3 object-cover shadow-sm" src="{{ asset('image/screen.webp') }}"/>
                <h2 class="text-2xl font-bold text-slate-900 text-center font-['Plus_Jakarta_Sans'] mb-1">Ubah Kata Sandi Akun</h2>
                <p class="text-sm text-slate-500 text-center">Silakan masukkan kata sandi saat ini dan kata sandi baru Anda.</p>
            </div>

            <form class="space-y-4 flex flex-col" method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <!-- Alert Sukses -->
                @if (session('status') === 'password-updated')
                    <div class="p-3.5 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-medium flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined text-[18px]">check_circle</span>
                        Kata sandi berhasil diperbarui!
                    </div>
                @endif

                <!-- Password Saat Ini -->
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1" for="current_password">Kata Sandi Saat Ini</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-slate-400">key</span>
                        <input name="current_password" required class="w-full pl-10 pr-10 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-[#004ac6] focus:bg-white transition-all outline-none" id="current_password" placeholder="Masukkan kata sandi saat ini" type="password"/>
                    </div>
                    @error('current_password', 'updatePassword')
                        <span class="text-xs text-red-500 mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Baru -->
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1" for="password">Kata Sandi Baru</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-slate-400">lock</span>
                        <input name="password" required class="w-full pl-10 pr-10 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-[#004ac6] focus:bg-white transition-all outline-none" id="password" placeholder="Masukkan kata sandi baru" type="password"/>
                    </div>
                    @error('password', 'updatePassword')
                        <span class="text-xs text-red-500 mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Konfirmasi Password Baru -->
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1" for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-slate-400">lock_reset</span>
                        <input name="password_confirmation" required class="w-full pl-10 pr-10 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-[#004ac6] focus:bg-white transition-all outline-none" id="password_confirmation" placeholder="Ulangi kata sandi baru" type="password"/>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-2">
                    <button class="w-full bg-[#004ac6] text-white font-semibold text-sm py-3 rounded-xl hover:bg-blue-700 transition-colors shadow-md shadow-blue-600/20 active:scale-95 flex items-center justify-center gap-2" type="submit">
                        <span class="material-symbols-outlined text-[18px]">save</span>
                        Simpan Kata Sandi
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>