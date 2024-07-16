<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = fake()->text();

        for ($i = 1; $i <= 60; $i++) {
            Comment::create(
                [
                    "user_id" => rand(1, 10),
                    "content" => $content,
                    "commentable_type" => Image::class,
                    "commentable_id" => rand(1, 10)
                ]
            );
        }
    }
}
