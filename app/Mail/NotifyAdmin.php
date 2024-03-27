<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Contact $contact)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'RE: KultureWin Site - New Enquiry',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact-us.notify-admin',
            with: ['contact' => $this->contact]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
