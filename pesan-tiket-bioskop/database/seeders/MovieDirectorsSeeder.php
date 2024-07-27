<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieDirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_directors')->insert([
            ['movie_directors_name' => 'Yoondong Oh, Geun Min'],
            ['movie_directors_name' => 'Kim Sung Han'],
            ['movie_directors_name' => 'Chris Renaud'],
            ['movie_directors_name' => 'Yoondong Oh'],
            ['movie_directors_name' => 'Michael Sarnoski'],
            ['movie_directors_name' => 'Adhe Dharmastriya'],
            ['movie_directors_name' => 'Kelsey Mann'],
            ['movie_directors_name' => 'Shawn Levy'],
            ['movie_directors_name' => 'Rizal Mantovani'],
            ['movie_directors_name' => 'Rizal Mantovani'],
            ['movie_directors_name' => 'Bayu Skak'],
            ['movie_directors_name' => 'Lee Isaac Chung'],
            // Add more directors as needed
        ]);
    }
}
