<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #28a745; color: white; padding: 20px; text-align: center; border-radius: 5px; }
        .content { padding: 20px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 5px; margin-top: 20px; }
        .detail-row { margin: 10px 0; }
        .label { font-weight: bold; color: #28a745; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Booking Notification</h2>
        </div>

        <div class="content">
            <p><strong>New booking received!</strong></p>

            <div style="background: white; padding: 15px; border-radius: 5px; margin: 20px 0;">
                <div class="detail-row">
                    <span class="label">Booking ID:</span> #{{ $booking->id }}
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
                <div class="detail-row">
                    <span class="label">Date:</span> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F d, Y') }}
                </div>
                <div class="detail-row">
                    <span class="label">Time:</span> {{ $booking->booking_time }}
                </div>
                @if($booking->message)
                <div class="detail-row">
                    <span class="label">Message:</span><br>
                    {{ $booking->message }}
                </div>
                @endif
                <div class="detail-row">
                    <span class="label">Status:</span> {{ ucfirst($booking->status) }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
