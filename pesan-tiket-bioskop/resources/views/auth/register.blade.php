<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="username">Username</label><br />
        <input type="text" id="username" name="username" placeholder="Enter Username"><br />

        <label for="email">Email address</label><br />
        <input type="email" id="email" name="email" placeholder="Enter Email"><br />

        <label for="password">Password</label><br />
        <input type="password" id="password" name="password" placeholder="Enter Password"><br />

        <label for="no_telp">No. Telp</label><br />
        <input type="text" id="no_telp" name="no_telp" placeholder="Enter Phone Number"><br />

        <button type="submit">Register</button>

        <p>Sudah punya akun? <a href="{{ route('login_page') }}">masuk!</a> </p>
    </form>
</body>

</html>