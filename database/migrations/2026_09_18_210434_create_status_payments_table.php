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
        Schema::create('status_payments', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('pemesanan_id')->nullable()->constrained('pemesanans')->onDelete('cascade');
            $table->foreignId('slot_parkir_id')->nullable()->constrained('slot_parkirs')->onDelete('cascade');
            $table->decimal('amount', 12, 2)->default(0);
            $table->string('payment_method')->default('qris');
            $table->enum('status', ['pending', 'berhasil', 'gagal'])->default('pending');
            $table->text('qris_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_payments');
    }
};