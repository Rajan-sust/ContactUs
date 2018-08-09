<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$sms;

    public function __construct($name,$sms) {
        $this->name = $name;
        $this->sms = $sms;
    }

  
    public function build() {
        return $this->view('mailme');
    }
}
