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
            ['movie_writers_name' => 'Writer 1'],
            ['movie_writers_name' => 'Writer 2'],
            ['movie_writers_name' => 'Writer 3'],
            // Add more writers as needed
        ]);
    }
}
