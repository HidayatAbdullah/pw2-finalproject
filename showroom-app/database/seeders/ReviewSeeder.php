<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Rama',
            'rating' => '8.5',
            'date' => '2000-01-12',
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => 'Reza',
            'rating' => '8.0',
            'date' => '2022-08-01',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => 'Ocid',
            'rating' => '9.0',
            'date' => '2023-03-02',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => 'Rama',
            'rating' => '8.5',
            'date' => '2020-01-12',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => 'Puki',
            'rating' => '9.5',
            'date' => '2021-01-12',
        ]);
    }
}
