<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ParkirTransaksiUpdate implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Broadcast ke channel parking.
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('parkir'),
        ];
    }

    /**
     * Nama event yang diterima Laravel Echo.
     */
    public function broadcastAs(): string
    {
        return 'transaksi.update';
    }
}