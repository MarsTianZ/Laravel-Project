<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['movie_title'] }}</title>
</head>

<body>
    <div>
        <h1>{{ $movie['movie_title'] }}</h1>
        <img src="{{ $movie['movie_poster'] }}" alt="Movie Poster" style="max-width: 100%; height: auto;">
        <p><strong>Type:</strong> {{ $movie['movie_type'] }}</p>
        <p><strong>Ratings:</strong> {{ $movie['movie_ratings'] }}</p>
        <p><strong>Producers:</strong> ID {{ $movie['movie_producers'] }}</p>
        <p><strong>Directors:</strong> ID {{ $movie['movie_directors_name'] }}</p>
        <p><strong>Writers:</strong> ID {{ $movie['movie_writers_name'] }}</p>
        <p><strong>Production Studio:</strong> ID {{ $movie['movie_productions_studio_name'] }}</p>
        <p><strong>Cast:</strong> ID {{ $movie['movie_casts_name'] }}</p>
        <p><strong>Trailer:</strong> <a href="{{ $movie['movie_trailer'] }}" target="_blank">Watch Trailer</a></p>
        <p><strong>Synopsis:</strong> {{ $movie['movie_synopsis'] }}</p>
        <p><strong>Slug:</strong> {{ $movie['movie_slug'] }}</p>
        <a href="/movies/{{ $movie['movie_slug'] }}/studios">Beli Tiket</a>
    </div>
</body>

</html>