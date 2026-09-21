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
        Schema::create('karcis_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_karcis');
            $table->foreignId('transaksi_parkir_id')->constrained('transaksi_parkirs')->onDelete('cascade');
            $table->foreignId('petugas_id')->constrained('users')->onDelete('cascade');
            $table->string('jenis_kendaraan');
            $table->string('nomor_plat');
            $table->string('kategori');
            $table->timestamp('waktu_masuk');
            $table->string('status')->default('aktif');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karcis_masuks');
    }
};
