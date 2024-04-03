<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $post = Post::inRandomOrder()->first();
        $category = category::inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-12 months', 'now');
        return [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => $category->name,
            'like_count' => fake()->numberBetween(100, 500) *10s,
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}
