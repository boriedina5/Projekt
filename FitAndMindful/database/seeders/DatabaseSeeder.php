<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Roles
        $roles = ['admin', 'user', 'coach', 'psychologist'];
        // makes sure theres no more or less than unique roles existing, even if one is empty
        // updateOrCreate(what to check if it exists, what to update if it does)
        // here we only check if a role exists, if yes -> do nothing, else create lore
        foreach ($roles as $role) {
            Role::updateOrCreate(['role_type' => $role]);
        }

        // admin
        User::factory()
            ->admin()
            ->create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('Admin1234')
            ]);

        // test user
        User::factory()
            ->user()
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
            ]);
        
        // fake users
        User::factory(10)
            ->user()
            ->create();

        //Seederek meghívása
        $this ->call([
        IngredientSeeder::class,   
        RecipeSeeder::class
        ]);
    }

}
