<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('login')}}" method="post">
            @csrf
            <label for="email">Email address</label><br />
            <input type="email" id="email" name="email" placeholder="Enter Email"><br />

            <label for="password">Password</label><br />
            <input type="password" id="password" name="password"><br />

            <div class="checkbox-container">
                <div>
                    <input type="checkbox" id="remember-me" name="remember-me" />
                    <label for="remember-me">Remember Me</label>
                </div>
                <div>
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <button class="login-btn" type="submit">Login</button>

            <p>Belum punya akun? <a href="{{route('register_page')}}">daftar!</a></p>
        </form>
    </div>
</body>

</html>