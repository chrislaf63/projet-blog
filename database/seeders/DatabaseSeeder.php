<?php

namespace Database\Seeders;

use App\Models\User;

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

        User::factory()->create([
            'name' => 'chrislaf',
            'email' => 'test@example.com',
            'password' => 'test',
            'role' => 'administrator',
        ]);

        User::factory()->create([
            'name' => 'chris',
            'email' => 'user@example.com',
            'password' => 'test',
            'role' => 'user',
        ]);

        User::factory(3)->create();

    }
}
