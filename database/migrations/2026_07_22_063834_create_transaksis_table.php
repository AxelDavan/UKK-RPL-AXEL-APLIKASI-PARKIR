<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('transaksi_parkirs', function (Blueprint $table) {
        $table->id();

        // Owner / User (Nullable untuk Tamu)
        $table->foreignId('user_id')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();

        // Area Parkir (Bikin nullable biar tidak error kalau belum pilih area)
        $table->foreignId('area_parkir_id')
            ->nullable()
            ->constrained('area_parkirs')
            ->cascadeOnDelete();

        // Kendaraan (TAMBAHKAN BAGIAN INI)
        $table->foreignId('kendaraan_id')
            ->nullable()
            ->constrained('kendaraans')
            ->nullOnDelete(); // Nullable khusus Tamu/Non-Langganan
        $table->string('nomor_plat');
        $table->string('jenis_kendaraan')->default('mobil');

        // Petugas Jaga (TAMBAHKAN INI)
        $table->foreignId('petugas_id')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();

        // Waktu Parkir
        $table->dateTime('waktu_masuk');
        $table->dateTime('waktu_keluar')->nullable();

        // Tarif
        $table->decimal('tarif', 10, 2)->default(0);

        // Status
        $table->enum('status', [
            'aktif',
            'selesai'
        ])->default('aktif');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_parkirs');
    }
};