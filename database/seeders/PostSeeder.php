<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'content' => 'This is the first post.',
            ],
            [
                'content' => 'This is the second post.',
            ],
            [
                'content' => 'This is the third post.',
            ],
        ];
        Post::insert($posts);
    }
}
