<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DoneWorkout;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    /**
     * Display exercises for a given plan.
     */
    public function show($categoryName, $difficulty, $versionName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        // Default difficulty to Standard if none was provided
        $selectedDifficulty = $difficulty ?: 'Standard';

        // Restrict access for guests/auth users depending on plan version
        if (auth()->guest() && $versionName !== 'Guest') {
            abort(403, "Guests can't access this plan.");
        }

        if (auth()->check() && $versionName === 'Guest') {
            abort(403, "Authenticated users can't access guest plans.");
        }

        // Fetch the plan with all exercises
        $plan = Plan::where('category_id', $category->id)
            ->where('difficulty', $selectedDifficulty)
            ->where('version', $versionName)
            ->firstOrFail();

        $exercises = $plan->exercises;

        return view('plan-exercises', compact('category', 'plan', 'exercises'));
    }

    /**
     * Mark a plan as completed for the logged-in user.
     */
    public function complete(Plan $plan)
    {
        $user = Auth::user();

        // Only logged-in users can mark plans as completed
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Check if this plan is already marked as done
        $exists = DoneWorkout::where('user_id', $user->id)
            ->where('plan_id', $plan->id)
            ->exists();

        if (!$exists) {
            DoneWorkout::create([
                'user_id' => $user->id,
                'plan_id' => $plan->id,
                'completed_at' => now(),
            ]);
        }

        return response()->json(['message' => 'Plan marked as completed']);
    }
}