<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Seed plans for all categories.
     */
    public function run(): void
    {
        $plans = [
            'Lose weight' => [
                'Beginner' => [
                    'Guest' => ['sets' => 3],
                    'Plan 1' => ['sets' => 3],
                    'Plan 2' => ['sets' => 3],
                    'Plan 3' => ['sets' => 3],
                ],
                'Intermediate' => [
                    'Guest' => ['sets' => 4],
                    'Plan 1' => ['sets' => 4],
                    'Plan 2' => ['sets' => 4],
                    'Plan 3' => ['sets' => 4],
                ],
                'Advanced' => [
                    'Guest' => ['sets' => 5],
                    'Plan 1' => ['sets' => 5],
                    'Plan 2' => ['sets' => 5],
                    'Plan 3' => ['sets' => 5],
                ],
            ],

            'Tone your body' => [
                'Beginner' => [
                    'Guest' => ['sets' => 3],
                    'Full Body' => ['sets' => 3],
                    'Lower Body' => ['sets' => 3],
                    'Upper Body' => ['sets' => 3],
                ],
                'Intermediate' => [
                    'Guest' => ['sets' => 4],
                    'Full Body' => ['sets' => 4],
                    'Upper Body' => ['sets' => 4],
                    'Lower Body' => ['sets' => 4],
                ],
                'Advanced' => [
                    'Guest' => ['sets' => 5],
                    'Full Body' => ['sets' => 5],
                    'Lower Body' => ['sets' => 5],
                    'Upper Body' => ['sets' => 5],
                ],
            ],

            'Build muscles' => [
                'Beginner' => [
                    'Guest' => ['sets' => 3],
                    'Full Body' => ['sets' => 3],
                    'Lower Body' => ['sets' => 3],
                    'Upper Body' => ['sets' => 3],
                ],
                'Intermediate' => [
                    'Guest' => ['sets' => 4],
                    'Full Body' => ['sets' => 4],
                    'Upper Body' => ['sets' => 4],
                    'Lower Body' => ['sets' => 4],
                ],
                'Advanced' => [
                    'Guest' => ['sets' => 5],
                    'Full Body' => ['sets' => 4],
                    'Lower Body' => ['sets' => 4],
                    'Upper Body' => ['sets' => 4],
                ],
            ],

            'Mobilization' => [
                'Standard' => [
                    'Guest' => ['duration' => '7 minutes'],
                    'Upper Body' => ['duration' => '60 seconds'],
                    'Lower Body' => ['duration' => '60 seconds'],
                    'Full Body' => ['duration' => '60 seconds'],
                ],
            ],

            'Morning stretching' => [
                'Standard' => [
                    'Guest' => ['duration' => '6 minutes'],
                    'Upper Body' => ['duration' => '120 seconds'],
                    'Lower Body' => ['duration' => '120 seconds'],
                    'Full Body' => ['duration' => '120 seconds'],
                ],
            ],
        ];

        foreach ($plans as $categoryName => $difficulties) {
            $category = Category::where('name', $categoryName)->first();
            if (!$category) {
                echo "Warning: Category not found - {$categoryName}\n";
                continue;
            }

            foreach ($difficulties as $difficulty => $versions) {
                foreach ($versions as $versionName => $versionData) {
                    // Create or update plan
                    Plan::updateOrCreate(
                        [
                            'category_id' => $category->id,
                            'difficulty' => $difficulty,
                            'version' => $versionName,
                        ],
                        [
                            'sets' => $versionData['sets'] ?? 0,
                            'duration' => $versionData['duration'] ?? "0",
                        ]
                    );
                }
            }
        }
    }
}
