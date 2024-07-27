<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Purchase History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }

        .logo {
            color: #ff0000;
            font-weight: bold;
            font-size: 24px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a.active {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
        }

        footer {
            background-color: #ff0000;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">LOGO</div>
            <nav>
                <a href="#">Home</a>
                <a href="#" class="active">History</a>
                <a href="#">Contact us</a>
                <a href="#">Keluar</a>
            </nav>
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Judul Film</th>
                    <th>Studio</th>
                    <th>Seat</th>
                    <th>Jenis Pembayaran</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                <tr>
                    <td>{{$payment->payment_id}}</td>
                    <td>{{$payment->user_id}}</td>
                    <td>{{$payment->nama}}</td>
                    <td>{{$payment->movie->movie_title}}</td>
                    <td>{{$payment->studio->studio_name}}</td>
                    <td>{{$payment->seat->seat_number}}</td>
                    <td>{{$payment->jenis_pembayaran}}</td>
                    <td>{{$payment->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <span>© 2021 Company Name</span>
    </footer>
</body>

</html>