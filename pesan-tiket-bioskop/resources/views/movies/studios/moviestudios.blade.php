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
    @foreach ($studios as $studio)
        <a href="/movies/{{ $movie_slug }}/studios/{{ $studio['studio_slug'] }}">
            <ul class="list-group rounded-4 py-2">
                    <li class="list-group-item d-flex justify-content-between bg-secondary">
                        <div class="d-flex w-100">
                            <div class="p-2 me-auto p-2 align-self-center">
                                <h3 class="fw-bold ">{{ $studio['studio_name'] }}</h3>
                            </div>
                            <div class="p-2 align-self-center"> <span
                                    class="badge bg-success">{{ $studio['studio_status'] }}</span>
                            </div>
                            <div class="p-2 mb-3 align-self-center">
                                <div class="p-2"><label class="fs-4">Seat :
                                        {{ $studio['studio_seat_count'] }}</label></div>
                                <div class="p-2"><label class="fs-4">Kosong :
                                        {{ $studio['studio_seat_empty'] }}</label></div>
                                <div class="p-2"><label class="fs-4">Terisi :
                                        {{ $studio['studio_seat_filled'] }}</label></div>
                            </div>
                        </div>
                    </li>
            </ul>
        </a>
    @endforeach
    <section class="d-flex justify-content-center align-items-center py-4">
        <button class="btn btn-danger fs-4"><a class="text-decoration-none text-light"
                href="{{ route('movies.back') }}">Kembali</a></button>
    </section>
</body>

</html>
