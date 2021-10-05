<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => "The Shawshank Redemption",
            'genre' => "Drama",
            'rating' => 8,
            'release_year' => 1994,
        ]);

        DB::table('movies')->insert([
            'title' => "The Godfather",
            'genre' => "Drama",
            'rating' => 9,
            'release_year' => 1972,
        ]);

        DB::table('movies')->insert([
            'title' => "The Dark Knight",
            'genre' => "Drama",
            'rating' => 7,
            'release_year' => 2008,
        ]);

        DB::table('movies')->insert([
            'title' => "Inception",
            'genre' => "Action",
            'rating' => 2,
            'release_year' => 2010,
        ]);

        DB::table('movies')->insert([
            'title' => "Toy Story",
            'genre' => "Family",
            'rating' => 10,
            'release_year' => "1995",
        ]);
    }
}
