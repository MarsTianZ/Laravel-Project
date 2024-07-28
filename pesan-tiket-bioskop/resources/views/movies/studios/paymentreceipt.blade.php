<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
        }

        .receipt {
            background-color: #b0b0b0;
            color: black;
            padding: 20px;
            border-radius: 10px;
            width: 60%;
            margin-bottom: 20px;
        }

        .receipt h2 {
            text-align: center;
            margin-top: 0;
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
        }

        .home {
            background-color: blue;
            color: white;
        }

        .print {
            background-color: teal;
            color: white;
        }

        .legal {
            display: flex;
            justify-content: space-between;
            width: 60%;
            margin-top: 20px;
        }

        .legal a {
            color: red;
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
    @foreach ($payments as $payment)
    <div class="receipt" id="receipt-{{ $payment->payment_id }}">
        <h2>STRUK PEMBAYARAN TIKET BIOSKOP</h2>
        <p><strong>ID Pembayaran:</strong> {{ $payment->payment_id }}</p>
        <p><strong>Nomor Kursi:</strong> {{ $payment->seat_number }}</p>
        <p><strong>Nama:</strong> {{ $payment->nama }}</p>
        <p><strong>Jenis Pembayaran:</strong> {{ $payment->jenis_pembayaran }}</p>
        <p><strong>Status Pembayaran:</strong> {{ $payment->status_pembayaran }}</p>
        <p><strong>Total Bayar:</strong> {{ $payment->total }}</p>
    </div>

    <div class="footer">
        <button class="home" onclick="window.location='/'">Home</button>
        <button class="print" onclick="printReceipt('{{ $payment->payment_id }}')">Print Ticket</button>
    </div>
    @endforeach
    <button class="print" onclick="window.print()">Print All Tickets</button>

    <div class="legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <span>© 2021 Company Name</span>
    </div>
    <script>
        function printReceipt(paymentId) {
            document.querySelectorAll('.receipt').forEach(function(el) {
                el.classList.remove('print-me');
            });
            document.getElementById('receipt-' + paymentId).classList.add('print-me');
            window.print();
            setTimeout(function() {
                document.getElementById('receipt-' + paymentId).classList.remove('print-me');
            }, 100);
        }
    </script>
</body>

</html>