<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Quotation</title>
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
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
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
        .field-label {
            font-weight: bold;
        }
        .field-value {
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ $message->embed(public_path('img/logo.png')) }}" alt="[Your Company Name] Logo">
            <h1>Request for Quotation</h1>
        </div>
        <div class="content">
            <p>Dear LS Advance Calibration Services & Supply,</p>
            <p>Please find below my request for a quotation:</p>

            <div class="field-value">
                <span class="field-label">Full Name:</span> {{ $data['name'] }}
            </div>
            <div class="field-value">
                <span class="field-label">Email:</span> <a href="mailto:[Customer's Email]">{{ $data['email'] }}</a>
            </div>
            <div class="field-value">
                <span class="field-label">Company Name:</span> {{ $data['companyName'] }}
            </div>
            <div class="field-value">
                <span class="field-label">Company Address:</span> {{ $data['companyAddress'] }}
            </div>
            <div class="field-value">
                <span class="field-label">Phone Number:</span> {{ $data['phoneNumber'] }}
            </div>
            <div class="field-value">
                <span class="field-label">Subject:</span> {{ $data['subject'] }}
            </div>
            <div class="field-value">
                <span class="field-label">Message:</span>
                <p>{{ $data['message'] }}</p>
            </div>

            <p>I look forward to your response and hope to receive a detailed quotation at your earliest convenience. If you need additional information, feel free to contact me via email or phone.</p>

            <p>Thank you for your attention to this request.</p>
            <p>Best regards,</p>
            <p><strong>{{ $data['name'] }}</strong></p>
        </div>
        <div class="footer">
            <p>&copy; 2025 LS Advance Calibration Services & Supply. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
