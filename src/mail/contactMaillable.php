<?php

namespace JivanSubedi\ContactHandler\mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contactMaillable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $email;
    public $name;
    public $subject;
    /**
     * Create a new message instance.
     */
    public function __construct($message,$name,$email,$subject)

    {
        $this->message = $message;
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
    }
    public function build(){
        return $this->markdown('contact::contact.contact-maillable')->with(['message'=> $this->message ,'email'=> $this->email,'name'=>$this->name,'subject'=>$this->subject]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */

    // public function content(): Content
    // {
        // return new Content(
        //     markdown: 'contact.contact-maillable',
        // );
        
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
