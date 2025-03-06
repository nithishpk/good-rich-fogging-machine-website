<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryNotification extends Mailable
{
    use SerializesModels;

    public $enquiryData;

    public function __construct($enquiryData)
    {
        $this->enquiryData = $enquiryData;
    }

    public function build()
    {
        return $this->subject('New ' . ucfirst($this->enquiryData['type']) . ' Enquiry from ' . $this->enquiryData['name'])
            ->view('emails.enquiry-notification');
    }
}
