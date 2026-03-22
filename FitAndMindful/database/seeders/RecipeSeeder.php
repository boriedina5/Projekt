<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Recipe; 
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
        //Pita ----------------------------------------------------------------------------------------
        $pita = Recipe::create([
            'name' => 'Wholemeal Pita Bread',
            'recipe_kcal' => 920,
            'recipe_ch' => 156,
            'recipe_fat' => 6,
            'recipe_protein' => 36,
            'recipe_description' => "1. Knead the ingredients into a soft dough, then let it rise until it has doubled in size in about an hour.\n2. Once it has risen, cut it into four equal pieces, shape it into a ball, and let it rest for 5-10 minutes.\n3. On a floured board, roll them into 2-3 mm thick circles.\n4. I cover them with a clean kitchen towel and let them rest for another 30 minutes.\n5. Bake them in an oven preheated to 220 degrees, on the oven rack, for 5-6 minutes.",
            'user_id' => $user->id
        ]);

        $pitaIngredients = [
            'whole grain flour' => '25 dcg',
            'lukewarm water' => '2 dl',
            'salt' => '1 ts',
            'fresh yeast' => '2 dcg',
        ];

        foreach ($pitaIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', strtolower($name))->first();
            
            if ($ingredient) {
                $pita->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //RiceCakebar-------------------------------------------------------------------------------------------
        $riceCakeBar = Recipe::create([
            'name' => 'Rice Cake Bars',
            'recipe_kcal' => 598.5,
            'recipe_ch' => 27.6,
            'recipe_fat' => 46.2,
            'recipe_protein' => 13.2,
            'recipe_description' => "1. Break up the puffed rice into a bowl.\n2. Pour in the peanut butter.\n3. Mix together and place on a baking tray (lined with baking paper).\n4. Melt the chocolate and pour it over the tray.\n5. Put into the fridge for 1-2 hours.",
            'user_id' => $user->id
        ]);

        $riceCakeIngredients = [
            'plain rice cakes' => '5 pieces',
            'peanut butter' => '1/3 cup',
            'chocolate' => '1 bar', 
        ];

        foreach ($riceCakeIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', strtolower($name))->first();
            
            if ($ingredient) {
                $riceCakeBar->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Soup--------------------------------------------------------------------------------------------------
        $celerySoup = Recipe::create([
            'name' => 'Cream Of Celery Soup',
            'recipe_kcal' => 101,
            'recipe_ch' => 12,
            'recipe_fat' => 5.4,
            'recipe_protein' => 2.3,
            'recipe_description' => "1. Thoroughly clean the vegetables, peel the celery, potatoes, and onions, and chop them into small pieces.\n2. Sauté the onions in oil until translucent, then add the celery and potatoes and stir. Add enough water to cover.\n3. Add the peeled garlic, bouillon cube, salt, and pepper.\n4. Cook until the vegetables are tender. Purée with an immersion blender. Pour in the cream and bring to a boil again.\n5. Serve hot with soup dumplings or croutons.",
            'user_id' => $user->id
        ]);

        $soupIngredients = [
            'medium celery' => '1 piece',
            'medium potato' => '1 piece',
            'medium onion' => '1 piece',
            'sunflower oil' => '1 tablespoon',
            'garlic' => '1 large',
            'salt' => '1 teaspoon',
            'pepper' => '1 pinch',
            'bouillon cube' => '0.5 piece',
            'cooking cream (20%)' => '1 dl',
        ];

        foreach ($soupIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', strtolower($name))->first();
            
            if ($ingredient) {
                $celerySoup->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //apple peanut butter--------------------------------------------------------------------------------------------------
        $applePeanutButter = Recipe::create([
            'name' => 'Apple Slices With Peanut Butter And Cinnamon',
            'recipe_kcal' => 265, 
            'recipe_ch' => 25,
            'recipe_fat' => 15,
            'recipe_protein' => 8,
            'recipe_description' => "1. Slice the apple.\n2. Spread the peanut butter evenly over the slices.\n3. Sprinkle with cinnamon.",
            'user_id' => $user->id
        ]);

        $appleIngredients = [
            'medium Apple' => '1 piece',
            'Natural Peanut Butter' => '2 tbsp',
            'Cinnamon' => '1 dash',
        ];

        foreach ($appleIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $applePeanutButter->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Cottage Cheese & Berries--------------------------------------------------------------------------------------------------
        $cottageCheeseBerries = Recipe::create([
            'name' => 'Cottage Cheese And Berries',
            'recipe_kcal' => 150,
            'recipe_ch' => 15,
            'recipe_fat' => 14,
            'recipe_protein' => 3,
            'recipe_description' => "1. Place cottage cheese in a bowl.\n2. Top with mixed berries and drizzle with honey if desired.",
            'user_id' => $user->id
        ]);

        $cottageCheeseIngredients = [
            'Low-fat Cottage Cheese' => '1/2 cup',
            'Mixed Berries' => '1/2 cup',
            'Honey' => '1 tsp',
        ];

        foreach ($cottageCheeseIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $cottageCheeseBerries->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Hard-Boiled Eggs-------------------------------------------------------------------------------------
        $hardBoiledEggs = Recipe::create([
            'name' => 'Hard Boiled Eggs',
            'recipe_kcal' => 150,
            'recipe_ch' => 1,
            'recipe_fat' => 10,
            'recipe_protein' => 13,
            'recipe_description' => "1. Peel the eggs and sprinkle with a pinch of black pepper.",
            'user_id' => $user->id
        ]);

        $eggIngredients = [
            'large Eggs' => '2 pieces',
            'Black Pepper' => '1 pinch',
        ];

        foreach ($eggIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $hardBoiledEggs->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        // Quinoa & Chickpea Salad----------------------------------------------------------------------------
        $quinoaSalad = Recipe::create([
            'name' => 'Quinoa And Chickpea Salad',
            'recipe_kcal' => 400,
            'recipe_ch' => 55,
            'recipe_fat' => 14,
            'recipe_protein' => 15,
            'recipe_description' => "1. Combine all solid ingredients in a bowl.\n2. Whisk olive oil, lemon juice, salt, and pepper for the dressing.\n3. Pour dressing over the salad and mix well.",
            'user_id' => $user->id
        ]);

        $quinoaIngredients = [
            'cooked quinoa' => '1/2 cup',
            'canned chickpeas' => '1/2 cup',
            'cucumber' => '1/2 cup',      
            'bell pepper' => '1/2 cup',   
            'olive oil' => '1 tbsp',
            'lemon juice' => '1 tbsp',
            'salt' => 'to taste',
            'pepper' => 'to taste',
        ];

        foreach ($quinoaIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $quinoaSalad->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Turkey and Veggie Wrap (Whole Wheat)-------------------------------------------------------------------
        $turkeyWrap = Recipe::create([
            'name' => 'Turkey And Veggie Whole Wheat Wrap',
            'recipe_kcal' => 315,
            'recipe_ch' => 35,
            'recipe_fat' => 20,
            'recipe_protein' => 10,
            'recipe_description' => "1. Spread hummus on the tortilla.\n2. Layer with turkey slices, spinach/greens, tomatoes, and cucumber.\n3. Roll up tightly and slice in half.",
            'user_id' => $user->id
        ]);

        $wrapIngredients = [
            'Whole Wheat Tortilla' => '1 piece',
            'Deli Turkey Breast' => '3 slices',
            'Hummus' => '1 tbsp',
            'Spinach' => '1 handful',
            'Mixed Greens' => '1 handful',
            'Sliced Tomatoes and Cucumber' => '1/4 cup',
        ];

        foreach ($wrapIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $turkeyWrap->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Simple Lentil Soup-----------------------------------------------------------------------------------
        $lentilSoup = Recipe::create([
            'name' => 'Simple Lentil Soup',
            'recipe_kcal' => 375,
            'recipe_ch' => 60,
            'recipe_fat' => 7,
            'recipe_protein' => 20,
            'recipe_description' => "1. Heat the soup.\n2. Serve hot with a slice of whole grain bread.",
            'user_id' => $user->id
        ]);

        $lentilIngredients = [
            'canned lentil soup' => '1.5 cups', 
            'whole grain bread' => '1 piece',
        ];

        foreach ($lentilIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $lentilSoup->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Baked Salmon with Roasted Asparagus & Sweet Potato----------------------------------------------------
        $bakedSalmon = Recipe::create([
            'name' => 'Baked Salmon with Roasted Asparagus And Sweet Potato',
            'recipe_kcal' => 475,
            'recipe_ch' => 35,
            'recipe_fat' => 20,
            'recipe_protein' => 40,
            'recipe_description' => "1. Preheat oven to 400°F (200°C).\n2. Toss asparagus and cubed sweet potato with olive oil, salt, and pepper.\n3. Place salmon on a lined baking sheet, top with a lemon slice, and season.\n4. Roast for 15-20 minutes, or until salmon is cooked through and vegetables are tender.",
            'user_id' => $user->id
        ]);

        $salmonIngredients = [
            'Salmon Fillet' => '4oz',
            'Asparagus spears' => '1 cup',
            'Sweet Potato' => '1 small',
            'Olive Oil' => '1 tsp',
            'Lemon slice' => '1 piece',
            'Salt' => 'to taste',
            'Pepper' => 'to taste',
        ];

        foreach ($salmonIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $bakedSalmon->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Chicken Breast Stir-Fry with Brown Rice-----------------------------------------------------------------
        $chickenStirFry = Recipe::create([
            'name' => 'Chicken Breast Stir Fry With Brown Rice',
            'recipe_kcal' => 425,
            'recipe_ch' => 45,
            'recipe_fat' => 10,
            'recipe_protein' => 35,
            'recipe_description' => "1. Cook brown rice. Stir-fry chicken in a pan until cooked.\n2. Add vegetables, soy sauce, and ginger.\n3. Cook until vegetables are tender-crisp.\n4. Serve over brown rice.",
            'user_id' => $user->id
        ]);

        $stirFryIngredients = [
            'skinless chicken breast' => '4oz',
            'broccoli'=> '1/3 cup',
            'carrots'=> '1/3 cup',
            'snow peas'=> '1/3 cup',
            'soy sauce'=> '2 tbsp',
            'ginger'=> '1 tsp',
            'brown rice'=> '1/2 cup',
        ];

        foreach ($stirFryIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $chickenStirFry->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
        //Turkey Chili (Bean-Based)------------------------------------------------------------------------------
        $turkeyChili = Recipe::create([
            'name' => 'Turkey Chili Bean Based',
            'recipe_kcal' => 400,
            'recipe_ch' => 50,
            'recipe_fat' => 10,
            'recipe_protein' => 30,
            'recipe_description' => "1. Make the chili using these ingredients: lean ground turkey, kidney beans, black beans, diced tomatoes.\n2. Serve in a bowl and top with a spoonful of plain Greek yogurt.",
            'user_id' => $user->id
        ]);

        $chiliIngredients = [
            'lean ground turkey' => '1 cups',
            'kidney beans' => '1/3 cups',
            'black beans' => '1/3 cups' ,
            'diced tomatoes' => '1/3 cups',
            'Plain Greek Yogurt' => '2 tbsp',
        ];

        foreach ($chiliIngredients as $name => $amount) {
            $ingredient = Ingredient::where('name', 'like', strtolower($name))->first();
            
            if ($ingredient) {
                $turkeyChili->ingredients()->attach($ingredient->id, ['amount' => $amount]);
            }
        }
    }
}