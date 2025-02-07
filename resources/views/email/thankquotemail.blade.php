<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Requesting a Quotation</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
        }

            .header img {
                max-width: 120px;
                margin-bottom: 10px;
            }

            .header h1 {
                font-size: 24px;
                color: #007BFF;
            }

        .content {
            padding: 20px 0;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

            .btn:hover {
                background-color: #0056b3;
            }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ $message->embed(public_path('img/logo.png')) }}" alt="[Your Company Name] Logo">
            <h1>Thank You for Your Request</h1>
        </div>
        <div class="content">
            <p>Dear {{ $data['name'] }},</p>
            <p>Thank you for reaching out to us and requesting a quotation for our services/products. We appreciate the opportunity to assist you.</p>
            <p>Our team is currently reviewing your request and will provide a detailed quotation tailored to your requirements within the next 2 business days. If you have any additional information or special requests, please do not hesitate to share them with us.</p>
            <p>We look forward to serving you and ensuring your satisfaction with our offerings.</p>
            <p>Warm regards,</p>
            <p>
                <strong>LS Advance Calibration Services & Supply</strong><br>
                Customer Support Team<br>
                <a href="ls.calibrationservices@gmail.com">ls.calibrationservices@gmail.com</a> | (+63)9155656265
            </p>
            <a href="#" class="btn">Visit Our Website</a>
        </div>
        <div class="footer">
            <p>&copy; 2025 LS Advance Calibration Services & Supply. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
