<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $detilas;
    public function __construct($detilas)
    {
        $this->detilas = $detilas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->from($this->detilas['email'])
        ->subject($this->detilas['services'])
        ->view('mail.contact')
        ->with('data', $this->detilas);
    }
}
