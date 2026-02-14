<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FoodDiary>
 */
class FoodDiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'calories' => fake()->numberBetween(100, 1000),
            'proteins' => fake()->numberBetween(5, 50),
            'fats' => fake()->numberBetween(5, 50),
            'carbohydrates' => fake()->numberBetween(10, 100),
            'date' => fake()->dateTimeBetween('-1 year', 'now'),
            'breakfasts' => fake()->words(3, true),
            'snacks' => fake()->words(2, true),
            'lunches' => fake()->words(3, true),
            'dinners' => fake()->words(3, true),
        ];
    }
}
