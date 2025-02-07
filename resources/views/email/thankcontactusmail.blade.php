<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
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
            margin-bottom: 15px;
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
            <h1>Thank You for Contacting Us!</h1>
            <p>Dear {{ $data['name'] }},</p>
            <p>We appreciate you reaching out to <strong>LS Advance Calibration Services</strong>. Your inquiry is important to us, and our support team will review it promptly.</p>
            <p>We strive to provide the best service possible and will get back to you within [expected response time]. In the meantime, feel free to browse our <a href="#" style="color: #007BFF;">Help Center</a> for more information.</p>
            <p>Thank you for choosing us!</p>
            <p>Best Regards,</p>
            <p><strong>LS Advance Calibration Services Team</strong></p>
        </div>

        <!-- Footer Section -->
        <div class="email-footer">
            &copy; {{ date('Y') }} LS Advance Calibration Services. All rights reserved.<br>
            <!--<a href=" $privacyPolicyUrl " style="color: #007BFF; text-decoration: none;">Privacy Policy</a> | 
            <a href=" $termsUrl " style="color: #007BFF; text-decoration: none;">Terms of Service</a>-->
        </div>
    </div>
</body>
</html>
