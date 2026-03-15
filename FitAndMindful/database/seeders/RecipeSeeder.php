<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Ez hiányzik az importok közül!
use App\Models\Recipe; // Ezt is importálni kell!
use App\Models\Ingredient;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. LÉPÉS: Létrehozunk vagy megkeresünk egy felhasználót, akit hozzárendelünk a recepthez
        // Ez javítja az "Undefined variable $user" hibát
        $user = User::first() ?? User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        // 1. Recept létrehozása a 'receipes' táblába
        // A mezőnevek a terved alapján: recipe_kcal, recipe_carbohydrate, stb.
        $pita = Recipe::create([
            'name' => 'Wholemeal Pita Bread',
            'recipe_kcal' => 920,
            'recipe_ch' => 156,
            'recipe_fat' => 6,
            'recipe_protein' => 36,
            'recipe_description' => "1. Knead the ingredients into a soft dough, then let it rise until it has doubled in size in about an hour.\n2. Once it has risen, cut it into four equal pieces, shape it into a ball, and let it rest for 5-10 minutes.\n3. On a floured board, roll them into 2-3 mm thick circles.\n4. I cover them with a clean kitchen towel and let them rest for another 30 minutes.\n5. Bake them in an oven preheated to 220 degrees, on the oven rack, for 5-6 minutes.",
            'user_id' => $user->id
        ]);

        // 2. Hozzávalók hozzárendelése (már az adatbázisból keresve)
        // Előfeltétel: Az IngredientSeeder már lefutott és feltöltötte az 'ingredients' táblát!
        $ingredientsWithAmount = [
            'whole grain flour' => '25 dcg',
            'lukewarm water' => '2 dl',
            'salt' => '1 ts',
            'fresh yeast' => '2 dcg',
        ];

        foreach ($ingredientsWithAmount as $name => $amount) {
            // Megkeressük a hozzávalót a neve alapján az 'ingredients' táblában
            $ingredient = Ingredient::where('name', $name)->first();
            
            if ($ingredient) {
                // Összekapcsoljuk a recepttel a 'receipe_ingredients' táblán keresztül
                // Az 'amount' érték a kapcsolótáblába kerül
                $pita->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
    }
}