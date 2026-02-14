<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('-1 year', 'now'),
            'gratitudes' => fake()->paragraph(),
            'positive_things' => fake()->paragraph(),
            'negative_things' => fake()->paragraph(),
            'moods' => fake()->sentence(),
            'thoughts' => fake()->paragraph(),
        ];
    }
}
