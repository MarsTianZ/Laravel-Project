<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieCastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_casts')->insert([
            ['movie_casts_name' => 'Cast 1'],
            ['movie_casts_name' => 'Cast 2'],
            ['movie_casts_name' => 'Cast 3'],
            // Add more casts as needed
        ]);
    }
}
