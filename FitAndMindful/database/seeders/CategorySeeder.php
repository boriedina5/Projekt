<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Lose weight', 'access_level' => 'guest'],
            ['name' => 'Tone your body', 'access_level' => 'guest'],
            ['name' => 'Build muscles', 'access_level' => 'guest'],
            ['name' => 'Mobilization', 'access_level' => 'guest'],
            ['name' => 'Morning stretching', 'access_level' => 'guest'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category['name']],
            );
        }
    }
}
