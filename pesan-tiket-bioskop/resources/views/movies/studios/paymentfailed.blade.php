<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
        }

        .receipt {
            background-color: #ffffff;
            color: #000000;
            padding: 20px;
            border-radius: 10px;
            width: 60%;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .receipt h2 {
            text-align: center;
            margin-top: 0;
            color: #dc3545;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            width: 60%;
            margin-bottom: 20px;
        }

        .footer button {
            width: 45%;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .home {
            background-color: #007bff;
            color: white;
        }

        .retry {
            background-color: #28a745;
            color: white;
        }

        .legal {
            display: flex;
            justify-content: space-between;
            width: 60%;
            margin-top: 20px;
        }

        .legal a {
            color: #dc3545;
            text-decoration: none;
        }

        .legal a:hover {
            text-decoration: underline;
        }

        .legal span {
            text-align: right;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .receipt.print-me,
            .receipt.print-me * {
                visibility: visible;
            }

            .receipt.print-me {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                height: auto;
                padding: 20px;
                margin: 0;
                box-shadow: none;
                border: 1px solid #000;
            }

            .receipt.print-me h2 {
                font-size: 18px;
                margin-bottom: 15px;
            }

            .receipt.print-me p {
                font-size: 14px;
                margin: 5px 0;
            }

            @page {
                size: auto;
                margin: 0mm;
            }
        }
    </style>
</head>

<body>
    <x-layout2></x-layout2>
    <div class="receipt">
        <h2>PAYMENT FAILED</h2>
    </div>

    <div class="footer">
        <button class="home" onclick="window.location='/'">Home</button>
    </div>

    <div class="legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <span>© 2024 Company Name</span>
    </div>
</body>

</html>