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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nomor_plat', 20)->unique();
            $table->string('merk', 100);
            $table->string('warna', 50);
            $table->enum('jenis_kendaraan', ['mobil', 'motor', 'truk']);
            $table->enum('status', ['menunggu','disetujui','ditolak']);
            $table->foreignId('slot_parkir_id')->nullable()->constrained('slot_parkirs')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
