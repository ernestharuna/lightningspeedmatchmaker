<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\Admin;
use App\Notifications\NewUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        foreach (Admin::cursor() as $admin) {
            $admin->notify(new NewUser($event->user));
        }
    }
}
