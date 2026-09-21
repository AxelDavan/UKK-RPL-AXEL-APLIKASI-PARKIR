<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Atur Ulang Kata Sandi - Safe Park</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>
<body class="bg-[#f8f9ff] text-slate-800 font-['Plus_Jakarta_Sans'] min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-3xl p-8 border border-slate-200 shadow-xl">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-slate-900 mb-2">Buat Kata Sandi Baru</h1>
            <p class="text-xs text-slate-500">Silakan buat kata sandi baru untuk akun Safe Park Anda.</p>
        </div>

        <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
            @csrf

            <!-- Token Reset Password (Wajib) -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="email">Email</label>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-3.5 text-slate-400">email</span>
                    <input name="email" value="{{ old('email', $request->email) }}" required readonly class="w-full h-12 pl-11 pr-4 bg-slate-100 border border-slate-200 rounded-xl text-sm text-slate-500 outline-none" type="email"/>
                </div>
                @error('email')
                    <span class="text-xs text-red-500 mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Baru -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="password">Kata Sandi Baru</label>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-3.5 text-slate-400">lock</span>
                    <input name="password" required autofocus class="w-full h-12 pl-11 pr-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all" placeholder="••••••••" type="password"/>
                </div>
                @error('password')
                    <span class="text-xs text-red-500 mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <!-- Konfirmasi Password Baru -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-3.5 text-slate-400">lock_reset</span>
                    <input name="password_confirmation" required class="w-full h-12 pl-11 pr-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all" placeholder="••••••••" type="password"/>
                </div>
            </div>

            <button type="submit" class="w-full h-12 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm rounded-xl transition-all shadow-lg shadow-blue-600/20 active:scale-[0.98] flex items-center justify-center gap-2 mt-2">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Atur Ulang Kata Sandi
            </button>
        </form>
    </div>

</body>
</html>