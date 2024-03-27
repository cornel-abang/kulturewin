<?php

namespace App\Jobs;

use App\Models\Contact;
use App\Mail\NotifyAdmin;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ContactMadeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $tries = 5;

    public function __construct(
        public Contact $contact
    ){}

    public function handle(): void
    {
        Mail::to(config('app.contact_us_email'))
            ->send(new NotifyAdmin($this->contact));
    }
}
