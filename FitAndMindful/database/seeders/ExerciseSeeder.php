<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Exercise;
use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exerciseData = [
            'Lose weight' => [
                'Beginner' => [
                    'Guest' => [
                        ['name' => 'Jumping Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Knee-to-Elbow', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Butt Kicks', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Mountain Climbers', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plank Jacks', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Basic Burpees', 'quantity' => 5, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Plan 1' => [
                        ['name' => 'Jumping Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Standing Torso Twist', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Butt Kicks', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Mountain Climbers', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'High Knees', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Plank Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Plan 2' => [
                        ['name' => 'Jump Rope', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Running in Place', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Jumping Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Mountain Climbers', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'High Knees', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Plank Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Plan 3' => [
                        ['name' => 'No-Jump Burpees', 'quantity' => 5, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plank Tucks', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Single-Leg Hops', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Mountain Climbers', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Running in Place', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Standing Torso Twist', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                ],
                'Intermediate' => [
                    'Guest' => [
                        ['name' => 'Jumping Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Squat Step Backs', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Side Bends', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Side Knee-to-Elbow', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Knee-to-Elbow', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Plan 1' => [
                        ['name' => 'Marching in Place', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Skater Jumps', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Single-Leg Hops', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Opposite Elbow to Knee', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Flutter Kicks', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Jumping Jacks', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Plan 2' => [
                        ['name' => 'Jump Rope', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'High Knees', 'quantity' => 40, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Butt Kicks', 'quantity' => 40, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'No-Jump Burpees', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Jump Squats', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Marching in Place', 'quantity' => 20, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                    'Plan 3' => [
                        ['name' => 'Marching in Place', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Side Shuffles', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Boxer Shuffle', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Opposite Elbow to Knee', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Single-Leg Hops', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                ],
                'Advanced' => [
                    'Guest' => [
                        ['name' => 'Jumping Jacks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Hop Heel Clicks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Pacer Steps', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Mountain Climbers', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plank Jacks', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Basic Burpees', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Plan 1' => [
                        ['name' => 'Walk-Outs', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Side Shuffles', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Basic Burpees', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Jump Lunges', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Boxer Shuffle', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Skater Jumps', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Plan 2' => [
                        ['name' => 'Jump Squats', 'quantity' => 40, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Single-Leg Hops', 'quantity' => 50, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Basic Burpees', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plank Tucks', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Opposite Elbow to Knee', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Marching in Place', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                    'Plan 3' => [
                        ['name' => 'Jumping Jacks', 'quantity' => 50, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Running in Place', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Mountain Climbers', 'quantity' => 50, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Basic Burpees', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Jump Lunges', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Marching in Place', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                ]
            ],
            'Tone your body' => [
                'Beginner' => [
                    'Guest' => [
                        ['name' => 'Scissor Kicks', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plank Leg Lifts', 'quantity' => 5, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Squat and Reach', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Down Dog and Bear', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bird Dog', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Pilates March', 'quantity' => 40, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Squats', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Glute Bridges', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Push-Ups', 'quantity' => 5, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Shoulder Taps', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Crunch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Fire Hydrant', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Glute Bridges', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Squats', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lying Leg Lifts', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Triceps Dip', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bicep Curl (with Bottles/Weights)', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Reverse Plank', 'quantity' => 20, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Bicycle Crunch', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Cobra Pose', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                ],
                'Intermediate' => [
                    'Guest' => [
                        ['name' => 'Glute Bridges', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Wall Sit', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Standing Side Leg Raises', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Slow Push-ups', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plank with Shoulder Taps', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Dead Bug', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Squats', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lateral Lunges', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Toe Touch', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 30, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Cobra Pose', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Squats', 'quantity' => 25, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lying Leg Lifts', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Fire Hydrant', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Back Extensions', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Triceps Dip', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Push-Ups', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Spider Crawl', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Hammer Curl (with Bottles/Weights)', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                ],
                'Advanced' => [
                    'Guest' => [
                        ['name' => 'Single-Leg Glute Bridges', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Pilates Teaser', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bird Dog', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Lateral Leg Lift', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 30, 'quantity_type' => 'sec,each', 'img' => ' '],
                        ['name' => 'Ab Curl', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Donkey Kicks', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Pistol Squat', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Single-Leg Glute Bridges', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Spider Crawl (Dynamic)', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Hammer Curl (with Bottles/Weights)', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Pistol Squat (Assisted)', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Single-Leg Glute Bridges', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Fire Hydrant', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Russian Twist', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Crunch', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bird Dog', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bicep Curl (with Bottles/Weights)', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                ],
            ],
            'Build muscles' => [
                'Beginner' => [
                    'Guest' => [
                        ['name' => 'Press-Up on Knees', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Squats', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Sit-ups', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Glute Kickback', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Squats', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Glute Bridges', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Push-Ups', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Shoulder Taps', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Crunch', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Fire Hydrant', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Glute Bridges', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Squats', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lying Leg Lifts', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Triceps Dip', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bicep Curl (with Bottles/Weights)', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Reverse Plank', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Bicycle Crunch', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Cobra Pose', 'quantity' => 40, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                ],
                'Intermediate' => [
                    'Guest' => [
                        ['name' => 'Press-Up', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Overhead Crunch', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Dips', 'quantity' => 15, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Step-Ups', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Calf Raises', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 10, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Squats', 'quantity' => 40, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lateral Lunges', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Toe Touch', 'quantity' => 40, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Cobra Pose', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Squats', 'quantity' => 35, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 40, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lying Leg Lifts', 'quantity' => 35, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Fire Hydrant', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Back Extensions', 'quantity' => 25, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Triceps Dip', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Push-Ups', 'quantity' => 25, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Spider Crawl', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Hammer Curl (with Bottles/Weights)', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                ],
                'Advanced' => [
                    'Guest' => [
                        ['name' => 'Diamond Push-Ups', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Back Extensions', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Plyometric Push-Ups', 'quantity' => 20, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Side-to-side Lunges', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Plié Squat Calf Raises', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Pistol Squat', 'quantity' => 15, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Pistol Squat', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 40, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Single-Leg Glute Bridges', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Spider Crawl (Dynamic)', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Hammer Curl (with Bottles/Weights)', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Pistol Squat (Assisted)', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bulgarian Split Squat', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Lunges', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Single-Leg Glute Bridges', 'quantity' => 20, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Sumo Squat', 'quantity' => 40, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Fire Hydrant', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Russian Twist', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Side Plank', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Crunch', 'quantity' => 30, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bird Dog', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Superman', 'quantity' => 30, 'quantity_type' => 'rep,each', 'img' => ' '],
                        ['name' => 'Bicep Curl (with Bottles/Weights)', 'quantity' => 25, 'quantity_type' => 'rep,each', 'img' => ' '],
                    ],
                ],
            ],
            'Mobilization' => [
                'Standard' => [
                    'Guest' => [
                        ['name' => 'Cat-Cow', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Supine Hip Internal & External Rotation', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => '90/90 Hip Switch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Half Kneeling Hip Flexor', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Thoracic Spine Rotation', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Shoulder Controlled Articular Rotations', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Arm and Shoulder Circles', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Chest Opener', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Wrist Rotations', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Scapular Push-Ups', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Crossover Shoulder Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Neck Circles', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Hip Circles', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Ankle Rotations', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Dynamic Hamstring Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Knee Flexion and Extension', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Butterfly Stretch (Dynamic)', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lateral Lunge Stretch (Side to Side)', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Cat-Cow Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Kneeling Torso Rotations', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'World\'s Greatest Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Side Bends (Standing)', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Inchworm', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Overhead Reach and Back Bend', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                ],
            ],
            'Morning stretching' => [
                'Standard' => [
                    'Guest' => [
                        ['name' => 'Supine Spinal Twist', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Double Knee-to-Chest Stretch', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Figure-Four Stretch', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Standing/Seated Side Bend', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Seated Forward Fold', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                        ['name' => 'Neck Stretch', 'quantity' => 60, 'quantity_type' => 'sec', 'img' => ' '],
                    ],
                    'Upper body' => [
                        ['name' => 'Chest Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Overhead Triceps Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Cross-Body Shoulder Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Lat Stretch (Hanging/Seated Bend)', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Forearm Flexor/Extensor Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Bicep Stretch (Wall/Corner)', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Lower body' => [
                        ['name' => 'Seated Hamstring Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Standing/Kneeling Quad Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Figure-Four / Piriformis Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Calf Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Hip Flexor Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Seated Wide-Leg Straddle Stretch', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                    'Full Body' => [
                        ['name' => 'Child\'s Pose', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Supine Spinal Twist', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Downward-Facing Dog', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Eagle Arms', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Neck Side Tilts', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                        ['name' => 'Full Body Stretch (Supine)', 'quantity' => 10, 'quantity_type' => 'rep', 'img' => ' '],
                    ],
                ],
            ],
        ];

        function exerciseImagePath($exerciseName, $isGuest = false)
        {
            $debug = false;
            $normalized = strtolower(trim($exerciseName));

            $guestMapping = [
                'jumping jacks' => 'jumping_jacks.png',
                'knee-to-elbow' => 'knee_to_elbow.png',
                'butt kicks' => 'butt_kicks.png',
                'mountain climbers' => 'climbers.png',
                'plank jacks' => 'plank_jacks.png',
                'basic burpees' => 'basic_burpees.png',
                'squat step backs' => 'squat_steps_backs.png',
                'side bends' => 'side_bends.png',
                'side knee-to-elbow' => 'side_knee_to_elbow.png',
                'hop heel clicks' => 'hop_heel_clicks.png',
                'pacer steps' => 'pacer_steps.png',
                'scissor kicks' => 'scisso_kicks.png',
                'plank leg lifts' => 'plank_leg_lift.png',
                'squat and reach' => 'squat_reach.png',
                'down dog and bear' => 'down_dogs_and_bear.png',
                'bird dog' => 'bird_dog.png',
                'pilates march' => 'pilates_march.png',
                'glute bridges' => 'glute_bridge.jpg',
                'wall sit' => 'wall_sit.jpg',
                'standing side leg raises' => 'standing_side_leg_raises.jpg',
                'slow push-ups' => 'Press_up.png',
                'plank with shoulder taps' => 'Plank_with_shoulder_taps.jpg',
                'dead bug' => 'dead_bug.jpg',
                'single-leg glute bridges' => 'sl_glute_bridge.png',
                'pilates teaser' => 'pilates_teaser.png',
                'lateral leg lift' => 'lateral_leg_lift.png',
                'side plank' => 'side_plank.png',
                'ab curl' => 'ab_curl.png',
                'donkey kicks' => 'donkey_kicks.png',
                'press-up on knees' => 'Press_up_on_Knees.png',
                'squats' => 'squats.jpg',
                'sit-ups' => 'sit_ups.jpg',
                'lunges' => 'Lunges.jpg',
                'superman' => 'Superman.png',
                'glute kickback' => 'glute_kickback.jpg',
                'press-up' => 'Press_up.png',
                'overhead crunch' => 'overhead_crunch.png',
                'dips' => 'Dips.jpg',
                'step-ups' => 'step_up.jpg',
                'bulgarian split squat' => 'bulgarian_split_squat .jpg',
                'calf raises' => 'calf_raises.png',
                'diamond push-ups' => 'Diamond_push_up.jpg',
                'back extensions' => 'back_extensions.jpg',
                'plyometric push-ups' => 'plyometric_push_up.jpg',
                'side-to-side lunges' => 'Side_to_side_lunges.jpg',
                'plié squat calf raises' => 'Pile_Squat_Calf_Raises .jpg',
                'pistol squat' => 'pistol_squat.jpg',
                'cat-cow' => 'cat_cow.jpg',
                'supine hip internal & external rotation' => 'Supine_Hip_Internal_External_Rotation.jpg',
                '90/90 hip switch' => 'Hip_Switch.png',
                'half kneeling hip flexor' => 'Half_Kneeling_Hip_Flexor.jpg',
                'thoracic spine rotation' => 'Thoracic_Spine_Rotation.jpg',
                'shoulder controlled articular rotations' => 'shoulder_controlled_articular_rotations.jpg',
                'supine spinal twist' => 'Supine_Spinal_Twist.jpg',
                'double knee-to-chest stretch' => 'Double_KneeToChest_Stretch.jpg',
                'figure-four stretch' => 'Figure_Four_Stretch.jpg',
                'standing/seated side bend' => 'Seated_Side_Bend.jpg',
                'seated forward fold' => 'Seated_Forward_Fold.jpg',
                'neck stretch' => 'Neck_Stretch.jpg',
            ];

            $authMapping = [
                'ankle rotations' => 'Feet-and-Ankle-Rotation.gif',
                'arm and shoulder circles' => 'arm-circles.jpg',
                'back extensions' => 'rounded-back-extension.jpg',
                'basic burpees' => 'burpee.jpg',
                'bicycle crunch' => 'bicycle-crunch.jpg',
                'bird dog' => 'bird-dog.jpg',
                'bicep curl (with bottles/weights)' => 'bicep-curl.png',
                'bicep stretch (wall/corner)' => 'flat-wall-bicep-stretch.jpg',
                'boxer shuffle' => 'boxer-shuffle.jpg',
                'bulgarian split squat' => 'bulgarian-split-squat.jpg',
                'butterfly stretch (dynamic)' => 'butterfly-yoga-pose.gif',
                'butt kicks' => 'butt-kicks.jpg',
                'calf stretch' => 'calf-stretch.jpg',
                'cat-cow stretch' => 'cat-cow-stretch.jpg',
                'chest stretch' => 'chest-strech.jpg',
                'child\'s pose' => 'Balasana-Child-Pose.gif',
                'mountain climbers' => 'mountain-climber.jpg',
                'cobra pose' => 'cobra-yoga.jpg',
                'crunch' => 'crunch.jpg',
                'cross-body shoulder stretch' => 'Across-Chest-Shoulder-Stretch.gif',
                'crossover shoulder stretch' => 'Across-Chest-Shoulder-Stretch.gif',
                'downward-facing dog' => 'downward-facing-dog.jpg',
                'dynamic hamstring stretch' => 'hamstring-stretch.jpg',
                'eagle arms' => 'eagle-pose-garudasana.jpg',
                'figure-four / piriformis stretch' => 'standing-figure-four-pose.jpg',
                'fire hydrant' => 'fire-hydrants.png',
                'flutter kicks' => 'flutter-kicks.jpg',
                'forearm flexor/extensor stretch' => 'forearm -flexor-stretch.png',
                'four-count push-up' => 'push-up.jpg',
                'full body stretch (supine)' => 'lying-knee-to-chest-stretch.jpg',
                'glute bridges' => 'glute-bridges.jpg',
                'hammer curl (with bottles/weights)' => 'hammer-curl.jpg',
                'high knees' => 'high-knee-run.jpg',
                'hip circles' => 'hip-circles.jpg',
                'hip flexor stretch' => 'crossover-kneeling-hip-flexor-stretch.jpg',
                'inchworm' => 'inchworm.jpg',
                'jump lunges' => 'jump-lunge.jpg',
                'jump rope' => 'jump-rope.jpg',
                'jump squats' => 'jumping-squat.jpg',
                'jumping jacks' => 'jumping-jacks.jpg',
                'knee flexion and extension' => 'knee-extension.gif',
                'kneeling torso rotations' => 'kneeling-back-rotation.jpg',
                'lat stretch (hanging/seated bend)' => 'lat-stretch-on-bench.jpg',
                'lunges' => 'lunges.jpg',
                'lying leg lifts' => 'lying-leg-raise.jpg',
                'marching in place' => 'Marching in place.mp4',
                'neck circles' => 'neck-circle-stretch.jpg',
                'neck side tilts' => 'side-neck-stretch.jpg',
                'no-jump burpees' => 'no-jump-burpee.jpg',
                'opposite elbow to knee' => 'lying-elbow-to-knee.jpg',
                'overhead triceps stretch' => 'overhead-triceps-stretch.jpg',
                'pistol squat' => 'pistol-squat.jpg',
                'pistol squat (assisted)' => 'pistol-squat.jpg',
                'plank jacks' => 'plank-jack.jpg',
                'plank tucks' => 'plank-knee-tucks.jpg',
                'push-ups' => 'push-up.jpg',
                'reverse plank' => 'reverse-plank.jpg',
                'running in place' => 'Run.gif',
                'russian twist' => 'russian-twist.jpg',
                'scapular push-ups' => 'scapula-push-up.jpg',
                'seated hamstring stretch' => 'Seated-Hamstring-Stretch.jpg',
                'seated wide-leg straddle stretch' => 'sitting-wide-leg-adductor-stretch.jpg',
                'shoulder taps' => 'shoulder_tap.png',
                'side bends (standing)' => 'standing-side-bend.jpg',
                'side plank' => 'Side-Plank.jpg',
                'side shuffles' => 'side-shuffle.jpg',
                'single-leg glute bridges' => 'single-straight-leg-glute-bridge.jpg',
                'single-leg hops' => 'single-leg-hopping.jpg',
                'skater jumps' => 'skaters-jump.jpg',
                'spider crawl' => 'spider-crawl-push-up.jpg',
                'spider crawl (dynamic)' => 'spider-crawl-push-up.jpg',
                'squats' => 'squat.png',
                'standing torso twist' => 'Standing-Torso-Twist.jpg',
                'standing/kneeling quad stretch' => 'kneeling-quad-stretch-behind-back.gif',
                'sumo squat' => 'Sumo-Squat.jpg',
                'superman' => 'superman.jpg',
                'supine spinal twist' => 'supine-spinal-twist-yoga-pose.jpg',
                'toe touch' => 'toe-touch.png',
                'walk-outs' => 'walk-outs.png',
                'world\'s greatest stretch' => 'worlds-greatest-stretch.jpg',
                'wrist rotations' => 'wrist-rotations.gif',
                'triceps dip' => 'bench-dip-on-floor.jpg',
                'lateral lunges' => 'lateral-lunge.jpg',
                'chest opener' => 'dynamic-chest-stretch.jpg',
                'overhead reach and back bend' => 'down-dog-to-cobra.png',
                'lateral lunge stretch (side to side)' => 'side-lunge-stretch.jpg'
            ];

            $mapping = $isGuest ? $guestMapping : $authMapping;

            $filename = $mapping[$normalized] ?? null;

            $folder = $isGuest ? 'forVisitors' : 'forUsers';

            // If not found → return default immediately
            if (!$filename) {
                if ($debug) {
                    if ($isGuest) echo "[WARNING] '{$normalized}' from [Guest] not found → using default\n";
                    else echo "[WARNING] '{$normalized}' from [Auth] not found → using default\n";
                }
                return "images/Workouts/Exercieses/{$folder}/default.jpg";
            }

            $path = public_path("images/Workouts/Exercieses/{$folder}/{$filename}");

            // Only check existence for real files
            if (!file_exists($path)) {
                if ($debug) {
                    echo "[ERROR] File missing: {$filename}\n";
                }
                return "images/Workouts/Exercieses/{$folder}/default.jpg";
            }

            if ($debug) {
                echo "[OK] {$normalized} → {$filename}\n";
            }

            return "images/Workouts/Exercieses/{$folder}/{$filename}";
        }

        // Determine if the user is a guest
        $isGuest = !Auth::check();

        foreach ($exerciseData as $categoryName => $difficulties) {
            $category = Category::where('name', $categoryName)->first();
            if (!$category) continue;

            foreach ($difficulties as $difficulty => $versions) {
                foreach ($versions as $versionName => $exercises) {
                    $plan = Plan::where('category_id', $category->id)
                        ->where('difficulty', $difficulty)
                        ->where('version', $versionName)
                        ->first();

                    if (!$plan) continue;

                    // Determine mapping per plan
                    $isGuestPlan = strtolower($plan->version) === 'guest';

                    foreach ($exercises as $exercise) {
                        if (empty($exercise['name']) || empty($exercise['quantity_type'])) continue;

                        Exercise::updateOrCreate(
                            [
                                'plan_id' => $plan->id,
                                'exercise_name' => $exercise['name'],
                            ],
                            [
                                'quantity' => $exercise['quantity'] ?? null,
                                'quantity_type' => $exercise['quantity_type'],
                                'img' => exerciseImagePath($exercise['name'], $isGuestPlan),
                            ]
                        );
                    }
                }
            }
        }
    }
}
