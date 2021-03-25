<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($send)
    {
        $this-> msg = $send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->msg->email)->view('templateEmail')->with(['send'=> $this->msg]);
    }
}
