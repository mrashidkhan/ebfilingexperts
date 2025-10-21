<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Mail\BookingConfirmation;
use Illuminate\Http\Request;
use Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required|string',
        ]);

        try {
            // Save booking to database
            $booking = Booking::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'] ?? null,
                'booking_date' => $validated['date'],
                'booking_time' => $validated['time'],
                'status' => 'confirmed'
            ]);

            // Send confirmation email to client
            Mail::to($booking->email)->send(new BookingConfirmation($booking));

            // Send notification email to admin
            Mail::to('mrashid2000@gmail.com')->send(new BookingConfirmation($booking, 'admin'));

            return response()->json([
                'success' => true,
                'message' => 'Booking confirmed! Check your email for details.',
                'booking_id' => $booking->id
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error processing booking: ' . $e->getMessage()
            ], 500);
        }
    }

    public function index()
    {
        return Booking::all();
    }

    public function show($id)
    {
        return Booking::findOrFail($id);
    }
}
