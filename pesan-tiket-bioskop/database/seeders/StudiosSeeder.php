<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = Movie::all(); // Assuming you have a Movie model

        foreach ($movies as $movie) {
            for ($i = 0; $i < 5; $i++) {
                DB::table('studios')->insert([
                    'studio_name' => 'Studio ' . ($i + 1),
                    'studio_status' => 'TERSEDIA',
                    'studio_slug' => Str::slug('Studio ' . ($i + 1)),
                    'studio_seat_count' => 70,
                    'studio_seat_empty' => 70,
                    'studio_seat_filled' => 0,
                    'movie_id' => $movie->movie_id,
                    'movie_slug' => $movie->movie_slug,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                for ($j = 0; $j < 60; $j++) {
                    DB::table('studio_seats')->insert([
                        'studio_id' => $i + 1,
                        'seat_status' => 'TERSEDIA',
                        'seat_number' => 'A' . ($j + 1),
                    ]);
                }
            }
        }
    }
}
