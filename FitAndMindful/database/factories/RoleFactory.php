<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // unique == only one of each role
            'role_type' => fake()->unique()->randomElement([
                'admin',
                'user',
                'coach',
                'psychologist',
            ]),
        ];
    }
}
