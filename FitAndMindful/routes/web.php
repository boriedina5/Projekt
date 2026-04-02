<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
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


// MENTAL HEALTH – vendégnek landing, usernek rendes oldal
Route::get('/mental-health', function () {
    if (!Auth::check()) {
        return view('mental-health-landing');
    }
    return view('mental-health');
})->name('mental-health');


// Recept lista oldal
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');

// Recept részletező oldal
Route::get('/recipes/{name}', [RecipeController::class, 'show'])->name('recipes.show');


// Vendég → landing
Route::get('/journal', function () {
    if (!Auth::check()) {
        return view('journal-landing');
    }
    return redirect()->route('journal.index');
})->name('journal');


// Bejelentkezett user → controller
Route::middleware('auth')->group(function () {

    Route::get('/journal/list', [JournalController::class, 'index'])
        ->name('journal.index');

    Route::get('/journal/create', [JournalController::class, 'create'])
        ->name('journal.create');

    Route::post('/journal/store', [JournalController::class, 'store'])
        ->name('journal.store');

    Route::get('/journal/{id}/edit', [JournalController::class, 'edit'])
        ->name('journal.edit');

    Route::put('/journal/{id}/update', [JournalController::class, 'update'])
        ->name('journal.update');

    Route::delete('/journal/{id}/delete', [JournalController::class, 'destroy'])
        ->name('journal.delete');
});


// Mentális egészség modulok (dinamikus aloldalak)
Route::get('/modules/{slug}', [ModuleController::class, 'show'])
    ->name('modules.show');


// Hitelesítés (Login, Register)
Auth::routes();
