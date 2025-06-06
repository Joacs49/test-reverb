<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public string $name,
        public string $text
    ) {}

     public function broadcastOn(): Channel
    {
        return new PrivateChannel('messages');
        // return new PrivateChannel('message.rooms.{id}');
    }

    // public function broadcastOn(): Channel
    // {
    //     return new Channel('messages');
    // }

    // public function broadcastAs(): string
    // {
    //     return 'MessageSent';
    // }

    // public function broadcastWith(): array
    // {
    //     return [
    //         'name' => $this->name,
    //         'text' => $this->text,
    //     ];
    // }
}
