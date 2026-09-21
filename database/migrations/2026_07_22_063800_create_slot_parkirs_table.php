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
        Schema::create('slot_parkirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_parkir_id')->constrained('area_parkirs')->cascadeOnDelete();
            $table->string('kode_slot', 10);
            $table->enum('status', ['tersedia', 'terisi', 'dipesan', 'maintenance'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slot_parkirs');
    }
};
