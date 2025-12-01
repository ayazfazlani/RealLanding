<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageNotification extends Mailable
{
    use Queueable, SerializesModels;

    public ContactMessage $messageData;

    public function __construct(ContactMessage $message)
    {
        $this->messageData = $message;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Message',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message',
            with: [
                'messageData' => $this->messageData,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
