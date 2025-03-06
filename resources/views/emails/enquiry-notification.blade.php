<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Enquiry Received</title>
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
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .detail {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Enquiry Received</h1>
    </div>

    <div class="content">
        <p>A new enquiry has been submitted with the following details:</p>

        <div class="detail">
            <span class="label">Enquiry Type:</span>
            <span>{{ ucfirst($enquiryData['type']) }}</span>
        </div>

        @if(isset($enquiryData['products']) && $enquiryData['type'] === 'product')
        <div class="detail">
            <span class="label">Products:</span>
            <ul>
                @foreach($enquiryData['products'] as $product)
                    <li>{{ ucfirst($product) }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(isset($enquiryData['parts']) && $enquiryData['type'] === 'parts')
        <div class="detail">
            <span class="label">Parts:</span>
            <ul>
                @foreach($enquiryData['parts'] as $part)
                    <li>{{ ucfirst(str_replace('-', ' ', $part)) }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(isset($enquiryData['service']) && $enquiryData['type'] === 'service')
        <div class="detail">
            <span class="label">Service Type:</span>
            <span>{{ ucfirst($enquiryData['service']) }}</span>
        </div>
        @endif

        <div class="detail">
            <span class="label">Name:</span>
            <span>{{ $enquiryData['name'] }}</span>
        </div>

        <div class="detail">
            <span class="label">Phone:</span>
            <span>{{ $enquiryData['phone'] }}</span>
        </div>

        <div class="detail">
            <span class="label">Message:</span>
            <p>{{ $enquiryData['message'] }}</p>
        </div>
    </div>
</body>
</html>
