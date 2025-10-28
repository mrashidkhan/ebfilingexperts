<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Models\Staff;


use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {

        return view('pages.index', );
    }


    // }

    public function eb1visa()
    {


    return view('pages.eb1-visa');
    }



    public function contactus()
{


    return view('pages.contactus');
}



public function storeBooking(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string|max:1000',
                'booking_date' => 'required|date_format:Y-m-d',
                'booking_time' => 'required|string',
            ]);

            \Log::info('=== BOOKING REQUEST ===');
            \Log::info('Validated data:', $validated);

            // Convert 12-hour time (11:30 AM) to 24-hour time (11:30:00)
            $timeString = $validated['booking_time'];
            $timeIn24Hour = $this->convertTo24HourFormat($timeString);

            \Log::info('Converted time from ' . $timeString . ' to ' . $timeIn24Hour);

            // Create and store the booking in the database
            $booking = Booking::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'],
                'booking_date' => $validated['booking_date'],
                'booking_time' => $timeIn24Hour,  // Use converted 24-hour format
                'status' => 'pending',
            ]);

            \Log::info('✓ Booking created successfully', ['booking_id' => $booking->id]);

            // Send confirmation email to the customer
            Mail::to($validated['email'])->send(new BookingConfirmation($booking));
            \Log::info('✓ Customer email sent to ' . $validated['email']);

            // Send notification email to admin
            Mail::to('muhammadrashidkhan800@gmail.com')->send(new BookingConfirmation($booking, true));
            \Log::info('✓ Admin email sent to muhammadrashidkhan800@gmail.com');

            // Redirect back with success message
            return redirect()->back()->with('success', 'Thanks, We will contact you soon');

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed', ['errors' => $e->errors()]);
            return redirect()->back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            \Log::error('Booking creation failed', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect()->back()
                ->withInput()
                ->with('error', 'There was an error processing your booking. Please try again.');
        }
    }

    /**
     * Convert 12-hour format (e.g., "11:30 AM") to 24-hour format (e.g., "11:30:00")
     */
    private function convertTo24HourFormat($time12hour)
    {
        try {
            // Parse the 12-hour time using Carbon
            $parsedTime = Carbon::createFromFormat('h:i A', $time12hour);
            // Return in 24-hour format with seconds
            return $parsedTime->format('H:i:s');
        } catch (\Exception $e) {
            \Log::error('Time conversion failed', ['input' => $time12hour, 'error' => $e->getMessage()]);
            // Default to 09:00:00 if conversion fails
            return '09:00:00';
        }
    }


public function o1avisa()
{


    return view('pages.o1avisa');
}

public function eb2niw()
{


    return view('pages.eb2-niw');
}



public function ourstory()
{


    return view('pages.our-story');
}



public function leadershipteam()
{
    // Get CEO staff member
    $ceo = Staff::where('position', 'CEO')
                ->orWhere('position', 'Founder & CEO')
                ->orWhere('position', 'LIKE', '%CEO%')
                ->where('status', 'active')
                ->first();

    // Get other staff members (not CEO)
    $staffMembers = Staff::where('position', '!=', 'CEO')
                        ->where('position', 'NOT LIKE', '%CEO%')
                        ->where('status', 'active')
                        ->get();

    return view('pages.leadership-team', [
        'ceo' => $ceo,
        'staffMembers' => $staffMembers,
    ]);
}



    public function reports()
{


    return view('pages.reports');
}

public function annualreport2024()
{


    return view('pages.annual-report-2024');
}



public function partnershipsboundless()
{


    return view('pages.partnerships-boundless');
}

public function medianews()
{


    return view('pages.media-news');
}


    public function webinar()
{


    return view('pages.webinar');
}

public function turingai()
{


    return view('pages.turing-ai');
}

    public function reviews()
{


    return view('pages.reviews');
}

public function resources()
{


    return view('pages.resources');
}


public function casestudies()
{


    return view('pages.case-studies');
}


public function vodcast()
{


    return view('pages.vodcast');
}

public function blog()
{


    return view('pages.blog');
}

public function faqs()
{


    return view('pages.faqs');
}

public function whoarewe()
{


    return view('pages.who-are-we');
}

public function refundpolicy()
{


    return view('pages.refund-policy');
}

public function disclaimer()
{


    return view('pages.disclaimer');
}

    public function testimonials()
    {
        return view('pages.testimonials');
    }


    public function privacypolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsofuse()
    {
        return view('pages.terms-of-use');
    }


    public function whychooseus()
    {
        return view('pages.why-choose-us');
    }


}
