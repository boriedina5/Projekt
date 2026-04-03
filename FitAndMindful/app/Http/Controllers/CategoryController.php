<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource (all workout categories).
     */
    public function index()
    {
        $categories = Category::all();

        // Metadata for displaying categories on the workouts page
        $categoryMeta = [
            'Lose weight' => [
                'row1' => 'PLAN FOR',
                'row2' => 'LOSE WEIGHT',
                'img' => 'loseWeight.jpg',
                'cardClasses' => ''
            ],
            'Tone your body' => [
                'row1' => 'PLAN FOR',
                'row2' => 'TONE YOUR BODY',
                'img' => 'toneYourBody.jpeg',
                'cardClasses' => ''
            ],
            'Build muscles' => [
                'row1' => 'PLAN FOR',
                'row2' => 'BUILD MUSCLES',
                'img' => 'buildMuscles.jpg',
                'cardClasses' => ''
            ],
            'Mobilization' => [
                'row1' => '',
                'row2' => 'MOBILIZATION',
                'img' => 'mobilization.jpg',
                'cardClasses' => ''
            ],
            'Morning stretching' => [
                'row1' => '',
                'row2' => 'MORNING STRETCHING',
                'img' => 'morningStretch.jpg',
                'cardClasses' => ''
            ],
        ];

        return view('workouts', compact('categories', 'categoryMeta'));
    }
}