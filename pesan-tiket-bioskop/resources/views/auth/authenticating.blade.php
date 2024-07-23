<!DOCTYPE html>
<html>

<head>
    <title>Authenticating Account</title>
</head>

<body>
    <h1>Authenticating your account...</h1>
    <script>
        const url = "{{route('movie_list_page')}}"
        setTimeout(() => {
            window.location.href = url;
        }, 2000)
    </script>
</body>

</html>