<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #007BFF;
            text-align: center;
            padding: 20px;
        }

            .email-header img {
                max-width: 150px;
            }

        .email-body {
            padding: 20px;
            color: #333;
        }

            .email-body h1 {
                color: #007BFF;
                font-size: 24px;
                margin-bottom: 10px;
            }

            .email-body p {
                font-size: 16px;
                line-height: 1.5;
                margin-bottom: 10px;
            }

            .email-body .details {
                background: #f9f9f9;
                padding: 15px;
                border-radius: 5px;
                margin-bottom: 20px;
            }

        .email-footer {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #666;
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section with Logo -->
        <div class="email-header">
            <img src="{{ $message->embed(public_path('img/logo.png')) }}" alt="Company Logo">
        </div>

        <!-- Body Section -->
        <div class="email-body">
            <h1>New Inquiry Received</h1>
            <p>You have received a new inquiry from the contact form on your website. Here are the details:</p>

            <div class="details">
                <p><strong>Full Name:</strong> {{ $data['name'] }}</p>
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
                <p><strong>Phone Number:</strong> {{ $data['phoneNumber'] }}</p>
                <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $data['message'] }}</p>
            </div>

            <p>Please respond to the inquiry at your earliest convenience.</p>
        </div>

        <!-- Footer Section -->
        <div class="email-footer">
            &copy; {{ date('Y') }} LS Advance Calibration Supply & Services. All rights reserved.<br>
            <!--<a href=" $privacyPolicyUrl " style="color: #007BFF; text-decoration: none;">Privacy Policy</a> |
            <a href=" $termsUrl " style="color: #007BFF; text-decoration: none;">Terms of Service</a>-->
        </div>
    </div>
</body>
</html>
