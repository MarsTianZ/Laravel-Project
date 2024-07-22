<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Movie List, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        h1 {
            margin: 0;
            font-size: 2rem;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 1rem;
        }

        .movie-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 1rem;
            padding: 1rem;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .movie-card img {
            max-width: 100%;
            border-radius: 5px;
        }

        .movie-card h2 {
            font-size: 1.5rem;
            margin: 0.5rem 0;
        }

        .movie-card p {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>

<body>

    <h1>Movie List</h1>

    <main class="container">
        @foreach($movies as $movie)
        <a href="/movies/{{$movie->movie_slug}}">
            <div class="movie-card">
                <h2>{{ $movie->movie_title }}</h2>
                <img src="{{ $movie->movie_poster }}" alt="{{ $movie->movie_title }} Poster">
                <p>Rating: {{ $movie->movie_ratings }}</p>
            </div>
        </a>
        @endforeach
    </main>
</body>

</html>