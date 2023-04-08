<?php

namespace App\Listeners;

use App\Events\MatchCreated;
use App\Models\User;
use App\Notifications\NewMatch;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewMatchNotifications implements ShouldQueue
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
     * @param  \App\Events\MatchCreated  $event
     * @return void
     */
    public function handle(MatchCreated $event)
    {
        User::where('id', $event->matches->matchedUser_id)->notify(new NewMatch($event->matches));
        User::where('id', $event->matches->user_id)->notify(new NewMatch($event->matches));
    }
}
