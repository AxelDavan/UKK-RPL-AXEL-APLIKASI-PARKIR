<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lupa Kata Sandi - Safe Park</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>
<body class="bg-[#f8f9ff] text-slate-800 font-['Plus_Jakarta_Sans'] min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-3xl p-8 border border-slate-200 shadow-xl">
        <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-blue-600 mb-6 transition-colors">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Kembali ke Login
        </a>

        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-slate-900 mb-2">Lupa Kata Sandi?</h1>
            <p class="text-xs text-slate-500 leading-relaxed">
                Masukkan alamat email yang terdaftar. Kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.
            </p>
        </div>

        <!-- Alert Status Sukses Kirim Email -->
        @if (session('status'))
            <div class="mb-4 p-3.5 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-semibold flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">check_circle</span>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="email">Email Terdaftar</label>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-3.5 text-slate-400">email</span>
                    <input name="email" value="{{ old('email') }}" required autofocus class="w-full h-12 pl-11 pr-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all" placeholder="nama@email.com" type="email"/>
                </div>
                @error('email')
                    <span class="text-xs text-red-500 mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full h-12 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm rounded-xl transition-all shadow-lg shadow-blue-600/20 active:scale-[0.98] flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">send</span>
                Kirim Tautan Reset
            </button>
        </form>
    </div>

</body>
</html>