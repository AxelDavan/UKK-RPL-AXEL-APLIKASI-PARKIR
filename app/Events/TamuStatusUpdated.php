<?php

namespace App\Events;

use App\Models\Tamu;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TamuStatusUpdated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tamu;

    public function __construct(Tamu $tamu)
    {
        $this->tamu = $tamu;
    }

    public function broadcastOn()
    {
        // Broadcast privat berdasarkan ID Owner / Residen
        return new PrivateChannel('owner.' . $this->tamu->user_id);
    }

    public function broadcastAs()
    {
        return 'tamu.updated';
    }
}
