<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['movie_title'] }}</title>
    
</head>
<x-layout></x-layout>
<button class="btn btn-danger fs-4"><a class="text-decoration-none text-light"
        href="{{ route('movies.back') }}">Kembali</a></button>
<section class="py-2"></section>
<div class="row">
    <div class="col-3 ">
        <img class="d-flex align-content-end flex-wrap border border-success p-2 mb-2 border-light"
            src="{{ $movie['movie_poster'] }}" alt="Movie Poster" style="max-width: 100%; height: auto;">
        <section class="py-2"></section>
        <button class="btn btn-primary rounded-circle fs-6"
            style="padding: 15px; pointer-events: none; ">{{ $movie['movie_ratings'] }}</button>
    </div>
    <div class="col">
        <h1 class="text-info">{{ $movie['movie_title'] }}</h1>
        <p><label class="fw-bold">Jenis Film :</label> {{ $movie['movie_type'] }}</p>
        <p><label class="fw-bold">Produser :</label> {{ $movie['movie_producers_name'] }}</p>
        <p><label class="fw-bold">Sutradara :</label> {{ $movie['movie_directors_name'] }}</p>
        <p><label class="fw-bold">Penulis :</label> {{ $movie['movie_writers_name'] }}</p>
        <p><label class="fw-bold">Produksi :</label> {{ $movie['movie_productions_studio_name'] }}</p>
        <p><label class="fw-bold">Cast:</label> {{ $movie['movie_casts_name'] }}</p>
        <p><label class="fw-bold">API:</label> {{ $movie['movie_slug'] }}</p>
        <div class="row">
            <div class="col">
                <span class="d-block p-2 text-bg-outline-light text-center border-top border-bottom"><a
                        class="text-decoration-none text-info" href="{{ $movie['movie_trailer'] }}"
                        target="_blank">Watch
                        Trailer</a></span>
            </div>
            <div class="col">
                <span class="d-block p-2 text-bg-outline-light text-center border-top border-bottom"><a
                        class="text-decoration-none text-info" href="/movies/{{ $movie['movie_slug'] }}/studios">Beli
                        Tiket</a></span>
            </div>
        </div>
        <p>
        <h2>Sinopsis</h2> {{ $movie['movie_synopsis'] }}</p>
    </div>
</div>

</html>
