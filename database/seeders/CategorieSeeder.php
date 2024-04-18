<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Categorie::factory(10)->create();

        Categorie::factory()->create([
            'categorie' => 'News',
        ]);

        Categorie::factory()->create([
            'categorie' => 'Astuces'
        ]);

        Categorie::factory()->create([
            'categorie' => 'Brèves'
        ]);

        Categorie::factory()->create([
            'categorie' => 'Insolite'
        ]);
    }
}
