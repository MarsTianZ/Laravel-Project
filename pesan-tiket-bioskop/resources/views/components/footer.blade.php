<head>
    <style>
        .footer {
    background-color: #ff0000;
    padding: 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.footer p, ul, li {
    font-weight: 500;
    margin-top: auto;
    margin-bottom: auto;
    color: white;
}
    </style>
    @vite('resources/js/app.js')
</head>

<body>
    <!-- Footer -->
    <footer class="footer mt-auto">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="row footer-collapse justify-content-end mx-auto px-5 py-2" id="footerNav">
                <ul class="footer-nav column-gap-3">
                    <li class="footer-item">
                        <a class="footer-link" href="#">Home</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-link" href="#">About Us</a>
                    </li>
                </ul> -->


                <div class=" col-lg-6 px-lg-0 text-lg-start">
                    <p class="text-light ">Privacy Policy | Terms of Service</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p class="text-light">&copy; 2021 Company Name</p>
                </div>
            </div>
        </div>
    </footer>
</body>
