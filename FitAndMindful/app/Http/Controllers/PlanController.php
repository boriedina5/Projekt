<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plan;

class PlanController extends Controller
{
    /**
     * Show plan selection or redirect to exercises if only one option exists.
     */
    public function select($categoryName, $selectedDifficulty = null)
    {
        // Fetch the category by name or fail if not found
        $category = Category::where('name', $categoryName)->firstOrFail();

        // Get all difficulties for this category
        $difficulties = Plan::where('category_id', $category->id)
            ->when(auth()->guest(), fn($q) => $q->where('version', 'Guest'))  // Guest users only see guest plans
            ->when(auth()->check(), fn($q) => $q->where('version', '!=', 'Guest')) // Auth users skip guest plans
            ->distinct('difficulty')
            ->pluck('difficulty')
            ->toArray();

        // If only one difficulty and it's Standard, skip selection
        if (count($difficulties) === 1 && strtolower($difficulties[0]) === 'standard') {
            $selectedDifficulty = 'Standard';
        } else {
            // Otherwise, show the difficulty selection page
            return view('plan-selection', compact('category', 'difficulties', 'selectedDifficulty'));
        }

        // Get all versions for the selected difficulty / user
        $versions = Plan::where('category_id', $category->id)
            ->where('difficulty', $selectedDifficulty)
            ->when(auth()->guest(), fn($q) => $q->where('version', 'Guest'))
            ->when(auth()->check(), fn($q) => $q->where('version', '!=', 'Guest'))
            ->pluck('version')
            ->toArray();

        // If only one version exists, skip version selection and go directly to exercises
        if (count($versions) === 1) {
            $versionName = $versions[0];
            return redirect()->route('plan.exercises', [
                'categoryName' => $category->name,
                'selectedDifficulty' => $selectedDifficulty,
                'versionName' => $versionName
            ]);
        }

        // Show version selection page
        return view('plan-selection', compact('category', 'versions', 'selectedDifficulty'));
    }
}
