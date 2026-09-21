<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('slot_parkir_id')->nullable()->constrained('slot_parkirs')->onDelete('set null');
            $table->unsignedBigInteger('kendaraan_id')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->string('durasi')->nullable();
            $table->string('tipe_booking')->nullable();
            $table->text('catatan')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};