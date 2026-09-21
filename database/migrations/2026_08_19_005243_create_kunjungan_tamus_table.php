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
        Schema::create('kunjungan_tamus', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('nama_tamu');
            $table->string('nomor_telepon')->nullable();

            $table->string('plat_nomor')->nullable();

            $table->enum('jenis_kendaraan', [
                'Mobil',
                'Motor'
            ])->nullable();

            $table->string('warna')->nullable();

            $table->dateTime('waktu_kunjungan')->nullable();

            $table->enum('status', [
                'menunggu',
                'disetujui',
                'ditolak',
                'selesai'
            ])->default('menunggu');

            $table->timestamp('disetujui_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan_tamus');
    }
};
