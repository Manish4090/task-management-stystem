<?php

namespace App\Listeners;

use App\Events\TaskCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskCreatedMail;
use App\Jobs\SendTaskCreatedEmail;
use Carbon\Carbon;

class SendTaskCreatedNotification
{
    /**
     * Create the event listener.
     */
    use InteractsWithQueue;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TaskCreatedEvent $event)
    {
        $userEmail = $event->userEmail; 
        $addSchedule = (new SendTaskCreatedEmail($event->task))->delay(Carbon::now()->addSeconds(30));
        dispatch($addSchedule);
        //SendTaskCreatedEmail::dispatch($event->task, $userEmail)->delay(now()->addSeconds(5));
        //Mail::to($userEmail)->send(new TaskCreatedMail($event->task));
    }
}
