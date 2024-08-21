<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;


    /**
     * Create a new message instance.
     */
      public function __construct(array $contactData)
      {
        $this->contactData = $contactData;
      }



    public function build()
    {
        return $this->subject('New Contact Form Submission From: ' . $this->contactData['title'])
        ->view('emails.contact')
        ->with('contactData', $this->contactData);
    }
}
