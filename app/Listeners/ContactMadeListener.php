<?php

namespace App\Listeners;

use App\Models\Contact;
use App\Mail\NotifyAdmin;
use App\Events\ContactMadeEvent;
use Illuminate\Support\Facades\Mail;

class ContactMadeListener
{
    public function __construct(
        public ContactMadeEvent $event
    ){}

    public function handle(): void
    {
        Mail::to(config('app.contact_us_email'))
            ->cc(config('app.cc_emails'))
            ->send(new NotifyAdmin($this->event->contact));
    }
}
