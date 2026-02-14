<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Height;
use App\Models\Weight;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserStat>
 */
class UserStatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Randomly decide whether the user will have height/weight data or not
        // Create weight and height records only if they are not null
        $heightRecord = fake()->optional() ? Height::factory()->create() : null;
        $weightRecord = fake()->optional() ? Weight::factory()->create() : null;

        return [
            'shoulder_measures' => fake()->optional()->numberBetween(30, 60),
            'upperArm_measures' => fake()->optional()->numberBetween(20, 50),
            'foreArm_measures' => fake()->optional()->numberBetween(15, 40),
            'chest_measures' => fake()->optional()->numberBetween(70, 130),
            'abs_measures' => fake()->optional()->numberBetween(60, 120),
            'waist_measures' => fake()->optional()->numberBetween(60, 110),
            'hip_measures' => fake()->optional()->numberBetween(70, 120),
            'butt_measures' => fake()->optional()->numberBetween(70, 130),
            'thight_measures' => fake()->optional()->numberBetween(40, 80),
            'calf_measures' => fake()->optional()->numberBetween(30, 60),

            'height_id' => $heightRecord?->id,
            'weight_id' => $weightRecord?->id,
        ];
    }
}
