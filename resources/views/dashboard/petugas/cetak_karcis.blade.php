<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Park - Bukti Karcis {{ $karcis->nomor_karcis }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>
<body class="bg-slate-100 font-['Plus_Jakarta_Sans'] min-h-screen flex flex-col items-center justify-center p-6">

    <!-- Container Card Struk Thermal -->
    <div class="w-80 bg-white p-6 rounded-2xl shadow-xl border border-slate-200 flex flex-col items-center text-center">
        
        <!-- Header Struk -->
        <div class="flex items-center gap-1 mb-1">
            <span class="font-bold text-slate-900 tracking-tight text-lg">PARKIR SAFE PARK</span>
        </div>
        <span class="text-xs font-bold text-slate-800">POS GERBANG MASUK UTAMA</span>
        <span class="text-xs text-slate-500">Apartemen Terpadu Tower Gardenia</span>

        <div class="w-full my-3 border-b border-dashed border-slate-300"></div>

        <!-- Nomor Bukti Parkir -->
        <span class="text-xs text-slate-500 uppercase tracking-wider font-semibold">NOMOR BUKTI PARKIR</span>
        <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight my-2">{{ $karcis->nomor_karcis }}</h1>
        <span class="px-3 py-1 rounded bg-slate-100 text-xs font-bold text-slate-700 uppercase">
            KENDARAAN: {{ strtoupper($karcis->jenis_kendaraan) }}
        </span>

        <div class="w-full my-3 border-b border-dashed border-slate-300"></div>

        <!-- Detail Transaksi -->
        <div class="w-full flex flex-col gap-2 text-left text-xs">
            <div class="flex justify-between items-center">
                <span class="text-slate-500">Nomor Plat:</span>
                <span class="font-bold text-slate-900 text-sm">{{ $karcis->nomor_plat }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-slate-500">Waktu Masuk:</span>
                <span class="font-semibold text-slate-800">{{ \Carbon\Carbon::parse($karcis->waktu_masuk)->format('d M Y • H:i') }} WIB</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-slate-500">Kategori:</span>
                <span class="font-semibold text-slate-800">{{ $karcis->kategori }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-slate-500">Pos Jaga:</span>
                <span class="font-semibold text-slate-800">Gate 01 (IN-01)</span>
            </div>
        </div>

        <!-- Simulated Barcode -->
        <div class="w-full my-4 flex flex-col items-center gap-1">
            <div class="w-full flex justify-center items-center gap-[2px] h-8 px-4">
                <span class="w-[2px] h-full bg-slate-800"></span>
                <span class="w-[4px] h-full bg-slate-800"></span>
                <span class="w-[1px] h-full bg-slate-800"></span>
                <span class="w-[3px] h-full bg-slate-800"></span>
                <span class="w-[5px] h-full bg-slate-800"></span>
                <span class="w-[2px] h-full bg-slate-800"></span>
                <span class="w-[4px] h-full bg-slate-800"></span>
                <span class="w-[2px] h-full bg-slate-800"></span>
            </div>
            <span class="text-xs font-mono font-semibold text-slate-800 tracking-widest">*{{ $karcis->nomor_karcis }}*</span>
        </div>

        <div class="w-full my-2 border-b border-dashed border-slate-300"></div>

        <!-- Regulations -->
        <div class="text-[10px] leading-tight text-slate-500 text-center flex flex-col gap-1">
            <p class="font-bold text-slate-800">PERHATIAN & PERATURAN PARKIR:</p>
            <p>1. Tiket ini merupakan tanda bukti parkir yang sah.</p>
            <p>2. Kehilangan karcis dikenakan denda administrasi Rp 50.000,-.</p>
            <p class="font-bold text-slate-800 mt-1">SIMPAN TIKET INI HINGGA KELUAR GERBANG</p>
        </div>
    </div>
    
    <!-- Tombol Navigasi & Print -->
    <div class="mt-6 flex flex-col gap-3 w-80 print:hidden">
        <div class="flex gap-3">
            <a href="{{ route('karsuk') }}" class="flex-1 flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl shadow-md transition-all text-sm">
                <span class="material-symbols-outlined text-[18px]">add_card</span>
                Buat Karcis Lagi
            </a>
            <a href="{{ route('tamu') }}" class="flex items-center justify-center gap-2 bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-3 px-4 rounded-xl transition-all text-sm">
                Daftar Tamu
            </a>
        </div>
        
        <!-- Tombol Print Khusus Struk -->
        <button onclick="window.print()" class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 px-4 rounded-xl shadow-md transition-all text-sm">
            <span class="material-symbols-outlined text-[18px]">print</span>
            Cetak Karcis (Print)
        </button>
    </div>

    <!-- CSS Khusus untuk Print Thermal -->
    <style>
        @media print {
            body {
                background: white !important;
                display: block !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            /* Sembunyikan semua elemen kecuali kartu struk */
            .print\:hidden {
                display: none !important;
            }
            /* Bikin ukuran kartu pas buat printer thermal kertas */
            div.w-80 {
                width: 100% !important;
                max-width: 100% !important;
                box-shadow: none !important;
                border: none !important;
                padding: 0 !important;
                margin: 0 !important;
            }
        }
    </style>
</body>
</html>

</body>
</html>