<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resource/js/app.js')
</head>

<body>
    <x-layout></x-layout>
    <button class="btn btn-danger fs-4"><a class="text-decoration-none text-light"
            href="{{ route('movies.back') }}">Kembali</a></button>
    @foreach ($studios as $studio)
    <a href="/movies/{{$movie_slug}}/studios/{{ $studio['studio_slug'] }}">
        <div>
            <p>{{ $studio['studio_name'] }}</p>
            <p>{{ $studio['studio_status'] }}</p>
            <p>{{ $studio['studio_seat_count'] }}</p>
            <p>{{ $studio['studio_seat_empty'] }}</p>
            <p>{{ $studio['studio_seat_filled'] }}</p>
        </div>
    </a>
    @endforeach
</body>

</html>