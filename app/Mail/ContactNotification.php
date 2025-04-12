<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $dateTime;
    public $ip;

    public function __construct($data, $dateTime, $ip)
    {
        $this->data = $data;
        $this->dateTime = $dateTime;
        $this->ip = $ip;
    }

    public function build()
    {
        return $this->from('jaime.perez.penaloza@gmail.com', 'Website Contact')
                    ->subject('New Message from Contact Form')
                    ->view('emails.contact-notification')
                    ->with([
                        'data' => $this->data,
                        'dateTime' => $this->dateTime,
                        'ip' => $this->ip,
                    ]);
    }
}
