<!DOCTYPE html>
<html>

<head>
    <title>Auth</title>
    <style>

    </style>
</head>

<body>
    <x-layout2></x-layout2>
    <h1 class="position-absolute top-50 start-50 translate-middle">Login Berhasil, Redirecting...</h1>
    <script>
        const url = "{{route('movie_list_page')}}"
        setTimeout(() => {
            window.location.href = url;
        }, 3000)
    </script>
</body>

</html>