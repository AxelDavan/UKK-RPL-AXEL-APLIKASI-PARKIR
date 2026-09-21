<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Chat;
use Carbon\Carbon;

class CleanupOldChats extends Command
{
    protected $signature = 'chat:cleanup';
    protected $description = 'Menghapus chat lama yang sudah expired';

    public function handle()
    {
        // Contoh: Hapus pesan yang usianya lebih dari 30 menit
        $expiredTime = Carbon::now()->subMinutes(15);

        // Hapus chat yang dibuat sebelum $expiredTime
        $deleted = Chat::where('created_at', '<', $expiredTime)->delete();

        $this->info("Berhasil menghapus {$deleted} pesan lama.");
    }
}