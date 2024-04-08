<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'totophe',
//            'email' => 'totophe@example.com',
//            'password' => 'simplon63',
//        ]);

        Post::factory()->create([
            'title' => 'Assassin\'s creed',
            'description' => 'Le meilleur jeu de tous les temps',
            'content' => 'Découvrez ce jeu de dingue !!!'
        ]);
    }
}
