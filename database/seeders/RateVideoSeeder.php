<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 90; $i++) {
            Rating::create(
                [
                    "user_id" => rand(1, 10),
                    "rating" => rand(1, 5),
                    "rateable_type" => Video::class,
                    "rateable_id" => rand(1, 10)
                ]
            );
        }
    }
}
