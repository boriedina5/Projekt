<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plan;

class PlanController extends Controller
{
    public function select($categoryName, $selectedDifficulty = null)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        // Get all difficulties for this category (filtered by auth/guest)
        $difficulties = Plan::where('category_id', $category->id)
            ->when(auth()->guest(), fn($q) => $q->where('version', 'Guest'))
            ->when(auth()->check(), fn($q) => $q->where('version', '!=', 'Guest'))
            ->distinct('difficulty')
            ->pluck('difficulty')
            ->toArray();

        // If no difficulty selected
        if (!$selectedDifficulty) {
            // If there’s only one difficulty and it’s Standard, skip selection
            if (count($difficulties) === 1 && strtolower($difficulties[0]) === 'standard') {
                $selectedDifficulty = 'Standard';
            } else {
                // Show difficulty selection page
                return view('plan-selection', compact('category', 'difficulties', 'selectedDifficulty'));
            }
        }

        // Get versions for the selected difficulty
        $versions = Plan::where('category_id', $category->id)
            ->where('difficulty', $selectedDifficulty)
            ->when(auth()->guest(), fn($q) => $q->where('version', 'Guest'))
            ->when(auth()->check(), fn($q) => $q->where('version', '!=', 'Guest'))
            ->pluck('version')
            ->toArray();

        // If only one version, skip version selection and go directly to exercises
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
