<?php

namespace App\Listeners;

use App\Events\TaskUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskUpdatedMail;
use App\Jobs\SendTaskUpdatedEmail;
use Carbon\Carbon;

class SendTaskUpdatedNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(TaskUpdatedEvent $event)
    {
        $userEmail = $event->userEmail; 
        $sendMailUpdateTask = (new SendTaskUpdatedEmail($event->task))->delay(Carbon::now()->addSeconds(30));
        dispatch($sendMailUpdateTask);
        //Mail::to($event->task->user->email)->send(new TaskUpdatedMail($event->task));
    }
    
}
