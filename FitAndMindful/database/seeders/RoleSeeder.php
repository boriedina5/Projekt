<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'user', 'coach', 'psychologist'];
        // makes sure theres no more or less than unique roles existing, even if one is empty
        // updateOrCreate(what to check if it exists, what to update if it does)
        // here we only check if a role exists, if yes -> do nothing, else create lore
        foreach ($roles as $role) {
            Role::updateOrCreate(['role_type' => $role]);
        }
    }
}
