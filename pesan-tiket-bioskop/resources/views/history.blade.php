<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Purchase History</title>
    <style>
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

    </style>
</head>

<body>
    <x-layout></x-layout>
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

</body>

</html>