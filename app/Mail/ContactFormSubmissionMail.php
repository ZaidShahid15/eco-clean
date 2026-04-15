<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmissionMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public array $payload)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Eco Clean Contact Form: ' . ($this->payload['subject'] ?: 'New Inquiry'),
            replyTo: $this->payload['email']
                ? [
                    new Address($this->payload['email'], $this->payload['name']),
                ]
                : [],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-submission',
            with: ['payload' => $this->payload],
        );
    }
}
