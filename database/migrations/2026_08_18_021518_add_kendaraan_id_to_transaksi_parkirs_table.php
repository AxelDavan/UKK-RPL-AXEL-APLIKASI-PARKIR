<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Kosongkan karena kolom kendaraan_id sudah ada di database/tabel utama
    }

    public function down(): void
    {
        Schema::table('transaksi_parkirs', function (Blueprint $table) {
            $table->dropForeign(['kendaraan_id']);
            $table->dropColumn('kendaraan_id');
        });
    }
};