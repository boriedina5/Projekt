<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
