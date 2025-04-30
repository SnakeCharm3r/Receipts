<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt #{{ $receipt->id }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 30px;
            background: #f9f9f9;
        }
        .receipt {
            background: #fff;
            padding: 20px 40px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .header, .footer {
            text-align: center;
        }
        h2 {
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .total {
            text-align: right;
            font-weight: bold;
        }
        .status {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
        .thank-you {
            margin-top: 30px;
            text-align: center;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="receipt">
    <div class="header">
        {{-- Replace with your actual logo if needed --}}
        {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-width: 100px;"> --}}
        <h2>Your Company Name</h2>
        <p>123 Business Street, Dar es Salaam, TZ<br>
        Phone: +255 712 345 678 | info@yourcompany.com<br>
        TIN: 123-456-789</p>
    </div>

    <hr>

    <p>
        <strong>Receipt #: </strong>{{ $receipt->id }}<br>
        <strong>Date: </strong>{{ \Carbon\Carbon::parse($receipt->payment_date)->format('F d, Y') }}
    </p>

    <p>
        <strong>Invoice #: </strong>{{ $receipt->invoice->id ?? 'N/A' }}<br>
        <strong>Payment Method: </strong>{{ $receipt->payment_method ?? 'N/A' }}
    </p>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Invoice Payment</td>
                <td>{{ number_format($receipt->amount_paid, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <p class="total">TOTAL PAID: {{ number_format($receipt->amount_paid, 2) }}</p>

    <div class="status">
        Status: PAID IN FULL
    </div>

    @if($receipt->notes)
    <div style="margin-top: 15px;">
        <strong>Notes:</strong>
        <p>{{ $receipt->notes }}</p>
    </div>
    @endif

    <div class="thank-you">
        Thank you for your business!
    </div>
</div>

</body>
</html>
