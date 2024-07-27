<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Movie List, initial-scale=1.0">
    <title>Movie List</title>
    <style>
      .l {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 1rem;
        }

        .movie-card {
            border: 0px solid #ddd;
            border-radius: 5px;
            margin: 1rem;
            padding: 1rem;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .movie-card img {
            max-width: 100%;
            border-radius: 20px;
        }

        .movie-card h2 {
            font-size: 1.3rem;
            margin: 0.5rem 0;
        }

        .movie-card p {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>

<body>
    <x-layout></x-layout>
    <div class="row">
        <div class="col"><span class="text-center "><a
                    class="text-decoration-none text-bg-danger text-light px-5  fs-3">NOW PLAYING</a></span>
        </div>
    </div>


    <main class="l">
        @foreach ($movies as $movie)
            <a class="text-decoration-none text-light" href="/movies/{{ $movie->movie_slug }}">
                <div class="movie-card ">
                    <img class="border border-success p-2 mb-2 border-dark" src="{{ $movie->movie_poster }}"
                        alt="{{ $movie->movie_title }} Poster">
                    <h2>{{ $movie->movie_title }}</h2>
                    <button class="btn btn-primary rounded fs-6"
                        style="padding: 2px; pointer-events: none; ">{{ $movie->movie_ratings }}</button>
                </div>
            </a>
        @endforeach
    </main>
</body>

</html>
