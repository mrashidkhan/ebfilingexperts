<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #007bff; color: white; padding: 20px; text-align: center; border-radius: 5px; }
        .content { padding: 20px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 5px; margin-top: 20px; }
        .detail-row { margin: 10px 0; }
        .label { font-weight: bold; color: #007bff; }
        .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Booking Confirmation</h2>
        </div>

        <div class="content">
            <p>Hi {{ $booking->name }},</p>
            <p>Thank you for scheduling a meeting with EB1 Filing Experts. Your booking has been confirmed.</p>

            <div style="background: white; padding: 15px; border-radius: 5px; margin: 20px 0;">
                <div class="detail-row">
                    <span class="label">Date:</span> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F d, Y') }}
                </div>
                <div class="detail-row">
                    <span class="label">Time:</span> {{ $booking->booking_time }}
                </div>
                <div class="detail-row">
                    <span class="label">Name:</span> {{ $booking->name }}
                </div>
                <div class="detail-row">
                    <span class="label">Email:</span> {{ $booking->email }}
                </div>
                <div class="detail-row">
                    <span class="label">Phone:</span> {{ $booking->phone }}
                </div>
                @if($booking->message)
                <div class="detail-row">
                    <span class="label">Message:</span><br>
                    {{ $booking->message }}
                </div>
                @endif
            </div>

            <p>Our team will reach out to you shortly to confirm the details. If you have any questions, feel free to contact us.</p>
            <p>Best regards,<br><strong>EB1 Filing Experts Team</strong></p>
        </div>

        <div class="footer">
            <p>&copy; 2025 EB1 Filing Experts. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
