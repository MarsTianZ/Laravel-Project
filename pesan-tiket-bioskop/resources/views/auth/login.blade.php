<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <x-layout2></x-layout2>
    <!-- form login -->
    <form action="{{ route('login') }}"  method="post">
        <section class="vh-10 py-lg-5" ">
        <div class="container py-lg-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 py-lg-5">
                <div class="col-12 col-md-8 col-lg-6 ">
                        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @csrf
            <!-- col-xl-5 -->
            <div class="card shadow-2-strong" style="border: 1rem;">
                <div class="card-body pb-xxl-5">

                    <h3 class="mb-5 text-center">LOGIN</h3>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="form-control form-control-lg rounded-pill" placeholder="Enter Email" />
                    </div>

                    <div class="form-outline mb-2">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password"
                            class="form-control form-control-lg rounded-pill" placeholder="Password" />
                    </div>

                    <!-- Checkbox -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-start mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label form-check" for="form1Example3"> Remember
                                    password
                                </label>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end mb-5">
                            <!-- Simple link -->
                            <a class="nav-link" style="font-weight: bold; color: gray;" href="#!">Forgot
                                Password?</a>
                        </div>

                        <div class="text-center">
                            <button class="btn login-btn btn-danger btn-lg container-lg btn-block rounded-pill"
                                type="submit">Login</button>
                        </div>
                        <div class="text-end">Belum punya akun? <a href="{{ route('register_page') }}">daftar!</a></div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>
    </form>
</body>

</html>
