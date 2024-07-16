<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 60; $i++) {
            Rating::create(
                [
                    "user_id" => rand(1, 10),
                    "rating" => rand(1, 5),
                    "rateable_type" => Article::class,
                    "rateable_id" => rand(1, 10)
                ]
            );
        }
    }
}
