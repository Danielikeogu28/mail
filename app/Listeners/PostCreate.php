<?php

namespace App\Listeners;

use App\Events\PostCreateEvent;
use App\Mail\PostCreatMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PostCreate
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostCreateEvent $event): void
    {
        Mail::to($event->email)->send(new  PostCreatMail());
    }
}
