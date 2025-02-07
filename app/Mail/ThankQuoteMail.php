<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class ThankQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Public property to hold input data
    public $attachFile;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $attachFile)
    {
        //

        $this->data = $data;
        $this->name = $data['name'];
        $this->attachFile = $attachFile;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('ls.calibrationservices@gmail.com','LS Advance Calibration Services & Supply'),
            //subject: 'Thank Quote Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.thankquotemail',
            with: ['data' => $this->name],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            //Attachment::fromPath($this->attachFile),
        ];
    }
}
