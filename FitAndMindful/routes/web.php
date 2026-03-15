<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;


// Alapoldalak
Route::view('/', 'home')->name('home');
Route::view('/workouts', 'workouts')->name('workouts');
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