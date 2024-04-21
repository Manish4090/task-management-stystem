<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Task;

class TaskUpdatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $task;
    public $userEmail;

    public function __construct(Task $task,  $userEmail)
    {
        $this->task = $task;
        $this->userEmail = $userEmail;
    }
}
