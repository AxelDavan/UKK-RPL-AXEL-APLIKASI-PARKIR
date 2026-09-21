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
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('kode_unik')->unique();
            $table->string('nama_tamu');
            $table->string('nomor_whatsapp');
            $table->enum('jenis_kendaraan', ['mobil', 'motor']);
            $table->string('nomor_plat');
            $table->dateTime('waktu_kunjungan');
            $table->enum('status', ['menunggu', 'di_dalam', 'selesai', 'batal'])->default('menunggu');
            $table->timestamp('waktu_masuk')->nullable();
            $table->timestamp('waktu_keluar')->nullable();
            $table->integer('durasi_jam')->nullable();
            $table->decimal('total_tarif', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};