<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomNewUserMail;

class WelcomeNewCustomerListener implements ShouldQueue
{
 
    public function handle($event)
    {
        sleep(5);
        Mail::to($event->customer->email)->send(new WelcomNewUserMail());
    }
}
