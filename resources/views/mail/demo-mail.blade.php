<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            padding: 20px;
        }
        .email-header {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .email-body {
            margin: 20px 0;
        }
        .email-body p {
            margin: 10px 0;
        }
        .email-footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Welcome to Our Service!</h1>
        </div>
        <div class="email-body">
            <p> {{ $mailBody }},</p>
            <p>Thank you for signing up for our service. We're excited to have you on board!</p>
            <p>If you have any questions, feel free to reach out to our support team.</p>
            <p>Best regards,<br>Laravel Team</p>
        </div>
        <div class="email-footer">
            <p>&copy; 2025 Laravel. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
