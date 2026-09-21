<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('transaksi_parkirs', function (Blueprint $table) {
            $table->foreignId('kendaraan_id')
                ->after('user_id')
                ->constrained('kendaraans')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('transaksi_parkirs', function (Blueprint $table) {
            $table->dropForeign(['kendaraan_id']);
            $table->dropColumn('kendaraan_id');
        });
    }
};