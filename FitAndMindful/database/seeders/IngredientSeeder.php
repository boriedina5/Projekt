<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //pita
        $ingredients = [
        'whole grain flour', 
        'lukewarm water', 
        'salt', 
        'fresh yeast',
        'peanut butter',
        'rice cakes'
    ];

    foreach ($ingredients as $name) {
        \App\Models\Ingredient::firstOrCreate(['name' => $name]);
    }
    }
}
