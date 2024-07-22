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
            ['movie_directors_name' => 'Director 1'],
            ['movie_directors_name' => 'Director 2'],
            ['movie_directors_name' => 'Director 3'],
            // Add more directors as needed
        ]);
    }
}
