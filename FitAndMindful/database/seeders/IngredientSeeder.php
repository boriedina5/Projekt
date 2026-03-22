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
        
        $ingredients = [
            'whole grain flour', 
            'lukewarm water', 
            'salt', 
            'fresh yeast',
            'peanut butter',
            'rice cakes',
            'plain rice cakes',
            'peanut butter',
            'chocolate',
            'medium celery',
            'medium potato',
            'medium onion',
            'sunflower oil',
            'garlic',
            'pepper',
            'bouillon cube',
            'cooking cream (20%)',
            'soup dumplings',
            'croutons',
            'medium apple',
            'natural peanut butter',
            'cinnamon',
            'low-fat cottage cheese',
            'mixed berries',
            'blueberries',
            'raspberries',
            'honey',
            'large eggs',
            'black pepper',
            'cooked quinoa',
            'canned chickpeas',
            'cucumber',
            'bell pepper',
            'olive oil',
            'lemon juice',
            'whole wheat tortilla',
            'deli turkey breast',
            'hummus',
            'spinach',
            'mixed greens',
            'tomatoes',
            'canned lentil soup',
            'whole grain bread',
            'salmon fillet',
            'asparagus spears',
            'sweet potato',
            'lemon slice',
            'skinless chicken breast',
            'broccoli',
            'carrots',
            'snow peas',
            'low-sodium soy sauce',
            'ginger',
            'brown rice',
            'lean ground turkey',
            'kidney beans',
            'black beans',
            'diced tomatoes',
            'plain greek yogurt'

    ];
    foreach ($ingredients as $name) {
        \App\Models\Ingredient::firstOrCreate(['name' => $name]);
    }
    }
}
