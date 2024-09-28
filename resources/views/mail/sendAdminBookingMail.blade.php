<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Car Rental Booking</title>
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
            <h1>New Booking Alert</h1>
        </div>
        <div class="content">
            <p>Dear Admin,</p>
            <p>A new car rental booking has been made. Here are the details:</p>
            <ul>
                <li><strong>Customer Name:</strong> {{ $data->user->name }}</li>
                <li><strong>Email:</strong> {{ $data->user->email }}</li>
                <li><strong>Phone:</strong> {{ $data->user->phone_number }}</li>
                <li><strong>Address:</strong> {{ $data->user->address }}</li>
                <li><strong>Car Model:</strong> {{ $data->car->model }}</li>
                <li><strong>Start Date:</strong> {{ $data->start_date }}</li>
                <li><strong>End Date:</strong> {{ $data->end_date }}</li>
            </ul>
            <p>Please ensure that the booking is processed and the car is ready for the customer.</p>
            <p>Best regards,</p>
            <p>Car Rental</p>
        </div>
        <div class="footer">
            <p>© {{ now()->format('Y') }} Car Rental. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
