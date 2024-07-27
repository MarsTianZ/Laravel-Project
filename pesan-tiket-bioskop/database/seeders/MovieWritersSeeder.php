<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieWritersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_writers')->insert([
            ['movie_writers_name' => '-'],
            ['movie_writers_name' => 'Kim Kyung Chan'],
            ['movie_writers_name' => 'Ken Daurio, Mike White'],
            ['movie_writers_name' => '-'],
            ['movie_writers_name' => 'Kimberly Ryder, Wulan Guritno, Ibrahim Risyad, Rowiena Umboh, Piet Pagau, Niniek Arum, Dyan Deye, Dafina Jamasir, Hanisah Halim, Sugesta Handayani, Evelyn Aurora'],
            ['movie_writers_name' => 'Oscar Haviv Sebastian'],
            ['movie_writers_name' => 'Dave Holstein, Meg LeFauve'],
            ['movie_writers_name' => 'Shawn Levy, Rhett Reese, Ryan Reynolds, Zeb Wells, Paul Wernick'],
            ['movie_writers_name' => 'Husein M Atmodjo'],
            ['movie_writers_name' => 'Lele Laila'],
            ['movie_writers_name' => 'Nona Ica'],
            ['movie_writers_name' => 'Mark L. Smith'],
            // Add more writers as needed
        ]);
    }
}
