<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $type;

    public function __construct(Booking $booking, $type = 'client')
    {
        $this->booking = $booking;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type === 'admin') {
            return $this->subject('New Booking Notification - EB1 Filing Experts')
                        ->view('emails.booking-admin');
        }

        return $this->subject('Booking Confirmation - EB1 Filing Experts')
                    ->view('emails.booking-confirmation');
    }
}
