<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $isAdmin;

    public function __construct(Booking $booking, $isAdmin = false)
    {
        $this->booking = $booking;
        $this->isAdmin = $isAdmin;
    }

    public function build()
    {
        $subject = $this->isAdmin
            ? 'New Booking Request - ' . $this->booking->name
            : 'Booking Confirmation';

        return $this->subject($subject)
                    ->view('emails.booking-confirmation')
                    ->with([
                        'booking' => $this->booking,
                        'isAdmin' => $this->isAdmin,
                    ]);
    }
}
