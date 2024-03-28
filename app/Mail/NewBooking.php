<?php

namespace App\Mail;

use App\Models\BookArtist;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class NewBooking extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public BookArtist $booking)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'RE: KultureWin Site - New Artist Booking',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.artist.new-booking',
            with: ['booking' => $this->booking]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
