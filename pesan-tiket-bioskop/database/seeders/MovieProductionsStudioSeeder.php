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
            ['movie_productions_studio_name' => 'Studio 1'],
            ['movie_productions_studio_name' => 'Studio 2'],
            ['movie_productions_studio_name' => 'Studio 3'],
            // Add more studios as needed
        ]);
    }
}
