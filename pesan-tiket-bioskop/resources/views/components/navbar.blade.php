<head>
    <style>
        .navbar-nav .nav-item {
            position: relative;
        }
        .navbar-nav .nav-item:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #ff0000;
            /* Change this color as needed */
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transition: transform 0.5s ease;
            transform-origin: bottom center;
        }

        .navbar-nav .nav-item:hover:after,
        .navbar-nav .nav-item.active:after {
            transform: scaleX(1);
            transform-origin: bottom center;
        }
        .navbar-nav .nav-item.active:after {
            transform: scaleX(1);
            transform-origin: bottom center;
        }

    </style>
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 px-5 py-2 fs-3 fw-bold text-danger" href="#">LOGO</span>
            {{-- <!-- <a class="navbar-brand mx-auto" href="#">
                <!-- <img src="logo.png" alt="Logo" width="30" height="24"> -->
        <!-- LOGO -->
        <!-- </a> --> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end mx-auto px-5 py-2" id="navbarNav">
                <ul class="navbar-nav column-gap-3">

                    <li class="nav-item">
                        <a class="nav-link fs-4" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="/history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                            Keluar
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
