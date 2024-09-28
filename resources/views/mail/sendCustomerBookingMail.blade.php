<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 10px 0;
        }

        .content {
            margin: 20px 0;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Booking Confirmation</h1>
        </div>
        <div class="content">
            <p>Dear {{ $data->user->name }},</p>
            <p>Thank you for booking with us! Here are your booking details:</p>
            <ul>
                <li><strong>Car Model:</strong> {{ $data->car->model }}</li>
                <li><strong>Start Date:</strong> {{ $data->start_date }}</li>
                <li><strong>End Date:</strong> {{ $data->end_date }}</li>
            </ul>
            <p>If you have any questions or need to make changes to your booking, please contact us at [Contact
                Information].</p>
            <p>We look forward to serving you!</p>
            <p>Best regards,</p>
            <p>Car Rental</p>
        </div>
        <div class="footer">
            <p>© {{ now()->format('Y') }} Car Rental. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
