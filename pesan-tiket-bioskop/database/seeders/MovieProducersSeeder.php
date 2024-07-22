<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieProducersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_producers')->insert([
            ['movie_producers_name' => 'Producer 1'],
            ['movie_producers_name' => 'Producer 2'],
            ['movie_producers_name' => 'Producer 3'],
            // Add more producers as needed
        ]);
    }
}
