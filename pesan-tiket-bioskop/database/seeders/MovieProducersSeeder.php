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
            ['movie_producers_name' => 'Tu Sun Song'],
            ['movie_producers_name' => '-'],
            ['movie_producers_name' => 'Chris Meledandri, Brett Hoffman'],
            ['movie_producers_name' => 'Tu Sun Song'],
            ['movie_producers_name' => 'Michael Bay, Andrew Form, Brad Fuller, John Krasinski'],
            ['movie_producers_name' => 'Darmawan Surjadi, Mulyadi JP'],
            ['movie_producers_name' => 'Mark Nielsen'],
            ['movie_producers_name' => 'Kevin Feige, Shawn Levy, Ryan Reynolds, Lauren Shuler Donner'],
            ['movie_producers_name' => 'Raam Punjabi, Amrit Punjabi'],
            ['movie_producers_name' => 'Manoj Punjabi'],
            ['movie_producers_name' => 'Chand Parwez Servia, Riza Servia'],
            ['movie_producers_name' => 'Patrick Crowley, Frank Marshall'],
            // Add more producers as needed
        ]);
    }
}
