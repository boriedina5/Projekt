<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;

// Home page
Route::view('/', 'home')
    ->name('home');

// Workouts page
Route::get('/workouts', [CategoryController::class, 'index'])
    ->name('workouts.index');
// Plan selection (difficulty / version)
Route::get('/workouts/{categoryName}/{selectedDifficulty?}', [PlanController::class, 'select'])
    ->name('plan.select');
// Plan exercises page
Route::get('/workouts/{categoryName}/{selectedDifficulty}/{versionName}', [ExerciseController::class, 'show'])
    ->name('plan.exercises');
// Save completed plans
Route::post('/done-workouts/{plan}/complete', [ExerciseController::class, 'complete'])
    ->middleware('auth')
    ->name('done-workouts.complete');

Route::view('/workout-diary', 'workout-diary')->name('workout-diary');
Route::view('/food-diary', 'food-diary')->name('food-diary');
Route::view('/journal', 'journal')->name('journal');
Route::view('/mental-health', 'mental-health')->name('mental-health');

// Recept lista oldal (Kezeli a 'recipes' és 'recipes.index' neveket is)
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/recipes-list', [RecipeController::class, 'index'])->name('recipes.index');

// Recept részletező oldal
// Fontos: Csak ez az egy maradjon meg a /recipe/{name} útvonalhoz!
Route::get('/recipe/{name}', [RecipeController::class, 'show'])->name('recipe.show');

// Hitelesítés (Login, Register) útvonalak
Auth::routes();
