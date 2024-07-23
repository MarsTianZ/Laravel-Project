<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'movie_poster' => 'path/to/blackpink.jpg',
                'movie_title' => 'Blackpink World Tour Born Pink In Cinemas',
                'movie_slug' => Str::slug('Blackpink World Tour Born Pink In Cinemas'),
                'movie_type' => 'Music',
                'movie_producers_id' => 1,
                'movie_directors_id' => 1,
                'movie_writers_id' => 1,
                'movie_productions_studio_id' => 1,
                'movie_casts_id' => 1,
                'movie_trailer' => 'path/to/trailer1.mp4',
                'movie_synopsis' => 'A documentary on Blackpink\'s world tour.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/kalki.jpg',
                'movie_title' => 'Kalki 2898 AD',
                'movie_slug' => Str::slug('Kalki 2898 AD'),
                'movie_type' => 'Science Fiction',
                'movie_producers_id' => 2,
                'movie_directors_id' => 2,
                'movie_writers_id' => 2,
                'movie_productions_studio_id' => 2,
                'movie_casts_id' => 2,
                'movie_trailer' => 'path/to/trailer2.mp4',
                'movie_synopsis' => 'A futuristic adventure in the year 2898.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/despicableme4.jpg',
                'movie_title' => 'Despicable Me 4 (IMAX 2D)',
                'movie_slug' => Str::slug('Despicable Me 4 IMAX 2D'),
                'movie_type' => 'Animation',
                'movie_producers_id' => 3,
                'movie_directors_id' => 3,
                'movie_writers_id' => 3,
                'movie_productions_studio_id' => 3,
                'movie_casts_id' => 3,
                'movie_trailer' => 'path/to/trailer3.mp4',
                'movie_synopsis' => 'Gru and the minions are back in action.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/despicableme4.jpg',
                'movie_title' => 'Despicable Me 4',
                'movie_slug' => Str::slug('Despicable Me 4'),
                'movie_type' => 'Animation',
                'movie_producers_id' => 3,
                'movie_directors_id' => 3,
                'movie_writers_id' => 3,
                'movie_productions_studio_id' => 3,
                'movie_casts_id' => 3,
                'movie_trailer' => 'path/to/trailer3.mp4',
                'movie_synopsis' => 'Gru and the minions are back in action.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/quietplace1.jpg',
                'movie_title' => 'A Quiet Place: Day One (IMAX 2D)',
                'movie_slug' => Str::slug('A Quiet Place Day One IMAX 2D'),
                'movie_type' => 'Horror',
                'movie_producers_id' => 1,
                'movie_directors_id' => 2,
                'movie_writers_id' => 1,
                'movie_productions_studio_id' => 1,
                'movie_casts_id' => 1,
                'movie_trailer' => 'path/to/trailer4.mp4',
                'movie_synopsis' => 'The terrifying origins of the creatures.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/quietplace2.jpg',
                'movie_title' => 'A Quiet Place: Day One',
                'movie_slug' => Str::slug('A Quiet Place Day One'),
                'movie_type' => 'Horror',
                'movie_producers_id' => 2,
                'movie_directors_id' => 2,
                'movie_writers_id' => 2,
                'movie_productions_studio_id' => 2,
                'movie_casts_id' => 2,
                'movie_trailer' => 'path/to/trailer4.mp4',
                'movie_synopsis' => 'The terrifying origins of the creatures.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/insideout2.jpg',
                'movie_title' => 'Inside Out 2',
                'movie_slug' => Str::slug('Inside Out 2'),
                'movie_type' => 'Animation',
                'movie_producers_id' => 3,
                'movie_directors_id' => 3,
                'movie_writers_id' => 3,
                'movie_productions_studio_id' => 3,
                'movie_casts_id' => 3,
                'movie_trailer' => 'path/to/trailer5.mp4',
                'movie_synopsis' => 'The emotions are back with new adventures.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/insideout2-3d.jpg',
                'movie_title' => 'Inside Out 2 (3D)',
                'movie_slug' => Str::slug('Inside Out 2 3D'),
                'movie_type' => 'Animation',
                'movie_producers_id' => 3,
                'movie_directors_id' => 3,
                'movie_writers_id' => 3,
                'movie_productions_studio_id' => 3,
                'movie_casts_id' => 3,
                'movie_trailer' => 'path/to/trailer5.mp4',
                'movie_synopsis' => 'The emotions are back with new adventures.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/twilight.jpg',
                'movie_title' => 'Twilight of the Warriors: Walled In',
                'movie_slug' => Str::slug('Twilight of the Warriors Walled In'),
                'movie_type' => 'Action',
                'movie_producers_id' => 1,
                'movie_directors_id' => 1,
                'movie_writers_id' => 1,
                'movie_productions_studio_id' => 1,
                'movie_casts_id' => 1,
                'movie_trailer' => 'path/to/trailer6.mp4',
                'movie_synopsis' => 'An action-packed thriller.',
                'movie_ratings' => 'D17+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/sijuki.jpg',
                'movie_title' => 'Si Juki the Movie: Harta Pulau Monyet',
                'movie_slug' => Str::slug('Si Juki the Movie Harta Pulau Monyet'),
                'movie_type' => 'Comedy',
                'movie_producers_id' => 2,
                'movie_directors_id' => 2,
                'movie_writers_id' => 2,
                'movie_productions_studio_id' => 2,
                'movie_casts_id' => 2,
                'movie_trailer' => 'path/to/trailer7.mp4',
                'movie_synopsis' => 'A fun adventure on Monkey Island.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/sekawanlimo.jpg',
                'movie_title' => 'Sekawan Limo',
                'movie_slug' => Str::slug('Sekawan Limo'),
                'movie_type' => 'Drama',
                'movie_producers_id' => 3,
                'movie_directors_id' => 3,
                'movie_writers_id' => 3,
                'movie_productions_studio_id' => 3,
                'movie_casts_id' => 3,
                'movie_trailer' => 'path/to/trailer8.mp4',
                'movie_synopsis' => 'A thrilling adventure with five friends.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'path/to/bikeriders.jpg',
                'movie_title' => 'The Bikeriders',
                'movie_slug' => Str::slug('The Bikeriders'),
                'movie_type' => 'Drama',
                'movie_producers_id' => 1,
                'movie_directors_id' => 1,
                'movie_writers_id' => 1,
                'movie_productions_studio_id' => 1,
                'movie_casts_id' => 1,
                'movie_trailer' => 'path/to/trailer9.mp4',
                'movie_synopsis' => 'A gritty tale of a motorcycle gang.',
                'movie_ratings' => 'D17+',
                "movie_price" => 50000
            ],
            // Add more movies as needed
        ]);
    }
}