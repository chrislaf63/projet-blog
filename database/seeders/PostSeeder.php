<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Post::factory()->create([
            'title' => 'Far Cry 5',
            'slug' => 'Far-Cry-5',
            'description' => 'Le jeu qui déchire !!',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'user_id' => '1',
            'image' => '1713774279.jpg'
        ]);
        $category = Categorie::factory(4)->create();
        $post = Post::factory(10)->create()->each(function ($post) {
            $post->category()->attach(rand(1, 4));
        });





//        $category->first()->posts()->($post);



    }
}
