<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // List all your seeders here
            MovieCastsSeeder::class,
            MovieDirectorsSeeder::class,
            MovieProducersSeeder::class,
            MovieProductionsStudioSeeder::class,
            MoviesSeeder::class,
            MovieWritersSeeder::class,
            // Add any other seeders you have
        ]);
    }
}
