<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->create();

        $this->call([
            CategorySeeder::class
        ]);

        Post::factory()
            ->count(200)
            ->create();


        Comment::factory()
            ->count(500)
            ->create();
    }
}
