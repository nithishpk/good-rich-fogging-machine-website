<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Your Enquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thank You for Your Enquiry</h1>
    </div>

    <div class="content">
        <p>Dear {{ $enquiryData['name'] }},</p>

        <p>Thank you for contacting Goodrich Pest Control. We have received your enquiry and will get back to you shortly.</p>

        <p>Here's a summary of your enquiry:</p>

        <ul>
            <li><strong>Subject:</strong> {{ $enquiryData['subject'] }}</li>
            <li><strong>Message:</strong> {{ $enquiryData['message'] }}</li>
        </ul>

        <p>Our team will review your enquiry and respond within 24 hours.</p>

        <p>If you have any immediate concerns, please don't hesitate to call us.</p>
    </div>

    <div class="footer">
        <p>Best Regards,<br>
        Goodrich Pest Control Team<br>
        Bangalore</p>
    </div>
</body>
</html>
