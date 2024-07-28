<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Purchase History</title>
    <style>

    </style>
</head>

<body>
    <x-layout></x-layout>
        <table class="table table-hover border rounded-">
            <thead class="table-light">
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