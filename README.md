# ProjectUKK

Project web application Laravel Herd untuk manajemen parkir.

Nama Peserta: Axel Davan Prayoga
Kelas: XII RPL 1
Judul Project: SafePark
Studi Kasus: Aplikasi Parkir / Pengelolaan Parkir Apartemen
Teknologi:
- Frontend: Blade Templating Engine, Tailwind CSS
- Backend: PHP / Laravel Framework
- Database: MySQL
Fitur:
- Login: Autentikasi multi-role untuk Owner (Penghuni), Petugas (Security), dan Administrator.
- Pemesanan Slot Parkir: Memesan slot parkir gedung secara online berdasarkan area yang dipilih.
- Manajemen Kendaraan: Pendaftaran kendaraan baru dan fitur penempatan kendaraan eksisting (unassigned) ke slot parkir baru secara dinamis.
- Otomatisasi Status Slot: Pembaruan status slot parkir otomatis (hijau/biru) ketika user atau pemesanan dihapus.
- Akses Tamu (QR Pass): Pembuatan kode QR akses masuk bagi tamu penghuni untuk divalidasi oleh petugas gerbang.
- Pembayaran Terintegrasi: Transaksi pembayaran sewa slot menggunakan Midtrans Payment Gateway dan metode QRIS SeaBank.
- Pembaruan Real-Time: Pemantauan status parkir dan data kendaraan secara real-time menggunakan JavaScript polling.
Cara Menjalankan:
1. Pastikan Anda sudah menginstal PHP, Composer, dan Node.js di komputer lokal.
2. Buka terminal atau command prompt pada folder utama project, lalu instal dependensi PHP.
Database:
- database/database.sql

Dokumentasi:
- docs/01-analisis-kebutuhan.pdf
- docs/02-perancangan.pdf
- docs/03-dokumentasi-program.pdf
- docs/04-pengujian.pdf
- docs/05-debugging.pdf
- docs/06-evaluasi.pdf
- docs/screenshots/ (berisi tangkapan layar login, dashboard, transaksi, dan pengujian)
Demo:
....
Akun Pengujian:
- Admin
  - Username / Email: admin123@gmail.com
  - Password: admin123
- Petugas
  - Username / Email: petugas123@gmail.com
  - Password: petugas123
- User / Peminjam
  - Username / Email: user123@gmail.com
  - Password: user1234

Known Issues:
- Integrasi gateway pembayaran masih menggunakan lingkungan sandbox / simulasi transaksi.