<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class chatEvent implements ShouldBroadcast

{
 
    public function __construct($text)
    {
        $this->text = $text;
    }

    public function broadcastOn()
    {
        return ['my-channel'];
    }

}
