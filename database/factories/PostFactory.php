<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->title;
//        $search = array()
        return [
            'title' => $title,
            'slug' => str_replace(["é", "è", "ê", "à", "ù", ".", "'", " "], ["e", "e", "e", "a", "u", "", "", "-"], $title),
            'description' => fake()->sentence(),
            'content' => fake()->text(),
            'user_id' => fake()->randomDigit(),
            'image' => fake()->randomElement(['1713359586.jpg', '1713386543.png', '1713424704.png', '1713430520.jpg', '1713530934.jpg', '1713531479.jpg', '1713531643.png', '1713774279.jpg'])
        ];
    }

}

