<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .detail-row {
            margin: 10px 0;
            padding: 10px;
            background: white;
            border-left: 4px solid #007bff;
        }
        .label {
            font-weight: bold;
            color: #007bff;
        }
        .footer {
            text-align: center;
            color: #666;
            font-size: 12px;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>{{ $isAdmin ? 'New Booking Request' : 'Booking Confirmation' }}</h2>
        </div>

        <div class="content">
            @if ($isAdmin)
                <p>A new booking has been submitted. Here are the details:</p>
            @else
                <p>Hi {{ $booking->name }},</p>
                <p>Thank you for scheduling a meeting with us! Your booking has been confirmed.</p>
            @endif

            <div class="detail-row">
                <span class="label">Name:</span> {{ $booking->name }}
            </div>
            <div class="detail-row">
                <span class="label">Email:</span> {{ $booking->email }}
            </div>
            <div class="detail-row">
                <span class="label">Phone:</span> {{ $booking->phone }}
            </div>
            <div class="detail-row">
                <span class="label">Booking Date:</span> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F d, Y') }}
            </div>
            <div class="detail-row">
                <span class="label">Booking Time:</span> {{ $booking->booking_time }}
            </div>
            @if ($booking->message)
            <div class="detail-row">
                <span class="label">Message:</span><br>
                {{ $booking->message }}
            </div>
            @endif

            @if ($isAdmin)
                <p style="margin-top: 20px;"><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
                <p>Please review this booking and confirm if you can accommodate this meeting.</p>
            @else
                <p style="margin-top: 20px;">Our team will reach out to you shortly to confirm the meeting details.</p>
                <p>If you need to reschedule or have any questions, please don't hesitate to contact us.</p>
            @endif
        </div>

        <div class="footer">
            <p>Best regards,<br><strong>{{ config('app.name', 'EB Filing Experts') }} Team</strong></p>
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'EB Filing Experts') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
