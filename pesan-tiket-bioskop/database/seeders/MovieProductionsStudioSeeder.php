<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieProductionsStudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_productions_studio')->insert([
            ['movie_productions_studio_name' => 'CJ 4DPlex, ScreenX Studio'],
            ['movie_productions_studio_name' => 'Columbia Pictures'],
            ['movie_productions_studio_name' => 'Universal Pictures'],
            ['movie_productions_studio_name' => 'CJ 4DPLEX, ScreenX Studio'],
            ['movie_productions_studio_name' => 'Paramount Pictures'],
            ['movie_productions_studio_name' => 'Mesari Pictures, JP Pictures'],
            ['movie_productions_studio_name' => 'Walt Disney Pictures'],
            ['movie_productions_studio_name' => 'Walt Disney Pictures'],
            ['movie_productions_studio_name' => 'MVP Pictures'],
            ['movie_productions_studio_name' => 'MD Pictures'],
            ['movie_productions_studio_name' => 'Starvision, Skak Studios'],
            ['movie_productions_studio_name' => 'Warner Bros. Pictures'],
        ]);
    }
}
