<?php

namespace App\Mail;

use App\Models\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * L'e-mail reçu par l'équipe pour chaque demande de devis.
 * « Répondre » écrit directement au demandeur.
 */
class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public QuoteRequest $quote) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->quote->email, $this->quote->name)],
            subject: 'Demande de devis '.$this->quote->reference().' — '.$this->quote->label('family').' — '.$this->quote->company,
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.quote-request');
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        if (! $this->quote->attachment_path) {
            return [];
        }

        return [
            Attachment::fromStorageDisk('local', $this->quote->attachment_path)
                ->as($this->quote->attachment_name ?: basename($this->quote->attachment_path)),
        ];
    }
}
