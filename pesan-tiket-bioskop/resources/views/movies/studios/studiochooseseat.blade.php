<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Seat Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
        }

        .studio-info {
            flex: 1;
        }

        .seat-selection {
            flex: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .screen {
            width: 80%;
            height: 20px;
            background-color: #ccc;
            margin-bottom: 10px;
            text-align: center;
            line-height: 20px;
            border-radius: 10px;
        }

        .seats {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            gap: 10px;
        }

        .seat {
            width: 50px;
            height: 50px;
            background-color: gray;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            cursor: pointer;
        }

        .seat.sold {
            background-color: red;
        }

        .seat.selected {
            background-color: green;
        }

        .payment-methods {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #b22222;
            padding: 20px;
            border-radius: 10px;
        }

        .payment-methods button {
            width: 80%;
            padding: 10px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .checkout {
            background-color: green;
            color: white;
        }

        .back-button {
            background-color: red;
            color: white;
            width: 150px;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
        }

        .payment-button.selected {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <div class="studio-info">
        <h1>{{$studio->studio_name}}</h1>
        <div class="seat-selection">
            <div class="screen">Layar</div>
            <div class="seats">
                @foreach ($seats as $seat)
                <div class="seat {{ $seat->seat_status == 'TERSEDIA' ? '' : 'sold' }} {{ $seat->is_selected ? 'selected' : '' }}" id="seat-{{ $seat->seat_number }}" onclick="selectSeat('{{ $seat->seat_number }}')">
                    {{ $seat->seat_number }}
                </div>
                @endforeach
            </div>
            <div class="back-button" onclick="history.back()">Kembali</div>
        </div>
    </div>

    <div class="payment-methods">
        <h2>Pilih Metode Pembayaran</h2>
        <button class="payment-button" onclick="selectPayment(this)">E-Wallet</button>
        <button class="payment-button" onclick="selectPayment(this)">Virtual Account</button>
        <button class="payment-button" onclick="selectPayment(this)">Indomaret</button>
        <button class="payment-button" onclick="selectPayment(this)">QRIS</button>
        <button class="checkout" onclick="checkout()" disabled>Checkout</button>
    </div>

    <script>
        const selectedSeats = [];
        let selectedPayment = null;

        function selectSeat(seatNumber) {
            const seat = document.getElementById(`seat-${seatNumber}`);
            if (seat.classList.contains('selected')) {
                seat.classList.remove('selected');
                const index = selectedSeats.indexOf(seatNumber);
                if (index !== -1) {
                    selectedSeats.splice(index, 1);
                }
            } else {
                seat.classList.add('selected');
                if (!selectedSeats.includes(seatNumber)) {
                    selectedSeats.push(seatNumber);
                }
            }
            updateCheckoutButton();
        }

        function selectPayment(button) {
            const paymentButtons = document.querySelectorAll('.payment-button');
            paymentButtons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');
            selectedPayment = button.textContent;
            updateCheckoutButton();
        }

        function updateCheckoutButton() {
            const checkoutButton = document.querySelector('.checkout');
            checkoutButton.disabled = !(selectedSeats.length > 0 && selectedPayment);
        }

        function checkout() {
            if (selectedSeats.length > 0 && selectedPayment) {
                const baseUrl = `/movies/{{$movie_slug}}/studios/{{$studio->studio_slug}}/checkout`;
                const url = new URL(baseUrl, window.location.origin);

                url.searchParams.set('seats', selectedSeats.join(','));
                url.searchParams.set('payment', selectedPayment);

                window.location.href = url.toString();
            } else {
                alert('Please select seats and a payment method before checking out.');
            }
        }
    </script>
</body>

</html>