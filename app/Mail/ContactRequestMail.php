<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $contact)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address(
                    $this->contact['email'],
                    $this->contact['name'],
                ),
            ],
            subject: 'Nouvelle demande — '.$this->subjectLabel(),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-request',
            with: [
                'subjectLabel' => $this->subjectLabel(),
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }

    public function subjectLabel(): string
    {
        return match ($this->contact['subject']) {
            'project' => 'Étude de projet',
            'technical' => 'Conseil technique',
            'availability' => 'Stock et livraison',
            'after-sales' => 'Service après-vente',
        };
    }
}
