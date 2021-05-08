<?php

namespace App\Listeners;
use App\Models\Adminnotifcation;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserRegister;

class AdminUserRegNotify
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
    public function handle(UserRegister $event)
    {
        Adminnotifcation::create([

            'user_id'=>$event->user->id,
            'isseen'=>0,

        ]);
    
    }
}
