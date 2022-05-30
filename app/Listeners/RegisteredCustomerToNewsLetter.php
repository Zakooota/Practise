<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegisteredCustomerToNewsLetter
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
     * @param  \App\Providers\NewCustomerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
       dump('Registered to news letter');
    }
}
