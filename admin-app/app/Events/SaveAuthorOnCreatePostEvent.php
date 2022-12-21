<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SaveAuthorOnCreatePostEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    private $_data;

    public function __construct($data)
    {
        $this->_data = $data;
    }

    public function getData() {
        return $this->_data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
/*     public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    } */
}
