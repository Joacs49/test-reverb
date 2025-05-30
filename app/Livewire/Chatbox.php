<?php

namespace App\Livewire;

use App\Events\MessageSent;
use Livewire\Component;
use Livewire\Attributes\On;

class Chatbox extends Component
{
    /**
     * @var string[]
     */
    public array $messages = [];
    public string $message = '';
    // public Room $room;

    public function addMessage()
    {
        MessageSent::dispatch(auth()->user()->name, $this->message);

        $this->reset('message');
    }

    // #[On('echo:messages,MessageSent')]
    // ('echo-private:messages.rooms.{room.id},MessageSent')]
    #[On('echo-private:messages,MessageSent')]
    public function onMessageSent($event)
    {
        // dd($event);
        $this->messages[] = $event;
    }

    public function render()
    {
        return view('livewire.chatbox');
    }
}
