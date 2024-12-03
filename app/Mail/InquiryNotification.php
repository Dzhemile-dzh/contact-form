<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class InquiryNotification extends Mailable
{
    public $inquiry;

    public function __construct($inquiry)
    {
        $this->inquiry = $inquiry;
    }

    public function build()
    {
        return $this->subject('New Inquiry Notification')
            ->view('email.inquiry_notification');
    }
}
