<?php

namespace App\Listeners;

use App\Events\UserItem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class UserLogger
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
     * @param  object  $event
     * @return void
     */
    public function handle(UserItem $event)
    {   
        DB::table('logs')->insert([
            'user_id' => auth()->user()->id,
            'log_entry' => $event->log
        ]);
    }
}
