<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Role;
use App\Models\UserStat;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            // all mocked users will have the same password string
            // 'password' => static::$password ??= Hash::make('password'),
            'password' => Hash::make(fake()->password(8)),
            'remember_token' => Str::random(10),
            'role_id' => Role::inRandomOrder()->first()->id,
        ];
    }

    public function admin()
    {
        return $this->state(function () {
            return [
                'role_id' => Role::where('role_type', 'admin')->first()->id,
            ];
        });
    }
        public function user()
    {
        return $this->state(function () {
            return [
                'role_id' => Role::where('role_type', 'user')->first()->id,
            ];
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
