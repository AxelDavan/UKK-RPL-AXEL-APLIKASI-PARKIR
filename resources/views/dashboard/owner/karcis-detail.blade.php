<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Detail Karcis & QR Parkir - Safe Park</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-100 text-slate-900 min-h-screen flex flex-col items-center justify-center p-4">

    <!-- Container Kartu Karcis -->
    <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden relative">
        
        <!-- Header Karcis -->
        <div class="bg-blue-600 text-white p-6 text-center relative">
            <span class="text-xs uppercase tracking-widest font-semibold bg-blue-500 px-3 py-1 rounded-full">Tanda Bukti</span>
            <h1 class="text-2xl font-bold mt-2">Safe Park Apartment</h1>
            <p class="text-xs text-blue-100 mt-0.5">Akses Resmi Slot Parkir Penghuni</p>
        </div>

        <!-- Body Detail -->
        <div class="p-6 space-y-6">
            
            <!-- Info Slot & Area -->
            <div class="flex items-center justify-between bg-slate-50 p-4 rounded-2xl border border-slate-100">
                <div>
                    <span class="text-xs text-slate-500 font-medium block">Lokasi Slot</span>
                    <h2 class="text-xl font-bold text-slate-800">{{ optional(optional($pemesanan->slotParkir)->areaParkir)->nama_area ?? 'Tower A' }}</h2>
                </div>
                <div class="bg-blue-600 text-white font-mono text-xl font-extrabold px-4 py-2 rounded-xl shadow-sm">
                    {{ optional($pemesanan->slotParkir)->kode_slot ?? '-' }}
                </div>
            </div>

            <!-- Bagian Kode Booking (QR Dihapus, Teks di Tengah & Warna Hitam) -->
            <div class="flex flex-col items-center justify-center py-8 bg-white border border-dashed border-slate-300 rounded-2xl">
                <span class="text-xs uppercase tracking-widest text-slate-400 font-semibold mb-2">Kode Booking Anda</span>
                <span class="font-mono text-2xl font-black text-slate-900 tracking-wider">
                    {{ $kodeBooking }}
                </span>
            </div>

            <!-- Detail Informasi Karcis -->
            <div class="space-y-3 text-sm border-t border-slate-100 pt-4">
                <div class="flex justify-between">
                    <span class="text-slate-500">Nama Pemilik</span>
                    <span class="font-semibold text-slate-800">{{ $user->name }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Kendaraan</span>
                    <span class="font-semibold text-slate-800">
                        @if($pemesanan->kendaraan)
                            {{ strtoupper($pemesanan->kendaraan->nomor_plat) }} ({{ $pemesanan->kendaraan->merk ?? 'Mobil' }})
                        @else
                            <span class="text-amber-600 font-medium italic">Belum Ditautkan</span>
                        @endif
                    </span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Tipe Paket</span>
                    <span class="font-semibold text-slate-800">{{ $pemesanan->tipe_booking ?? '-' }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Masa Berlaku</span>
                    <span class="font-semibold text-slate-800">{{ $pemesanan->tanggal_mulai ? \Carbon\Carbon::parse($pemesanan->tanggal_mulai)->format('d M Y') : '-' }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Status Karcis</span>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700 uppercase">
                        {{ $pemesanan->status }}
                    </span>
                </div>
            </div>

            <!-- Tombol Kembali Lebar Penuh -->
            <div class="pt-2">
                <a href="{{ route('kode') }}" class="w-full bg-slate-900 text-white py-3 rounded-xl font-semibold text-sm text-center shadow-md hover:bg-slate-800 transition-all flex items-center justify-center">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</body>
</html>