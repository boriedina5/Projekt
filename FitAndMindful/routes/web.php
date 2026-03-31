<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;


// Alapoldalak
Route::view('/', 'home')->name('home');
Route::view('/workouts', 'workouts')->name('workouts');
Route::view('/workout-diary', 'workout-diary')->name('workout-diary');
Route::view('/food-diary', 'food-diary')->name('food-diary');
Route::view('/mental-health', 'mental-health')->name('mental-health');

// Recept lista oldal
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');

// Recept részletező oldal
Route::get('/recipes/{name}', [RecipeController::class, 'show'])->name('recipes.show');


// Journal főoldal (vendég → landing, user → rendezett lista)
Route::get('/journal', function () {

    if (!Auth::check()) {
        return view('journal-landing');
    }

    // FONTOS: itt NEM fut saját lekérdezés,
    // hanem a controller index metódusa
    return redirect()->action([JournalController::class, 'index']);

})->name('journal');


// Journal csak bejelentkezve
Route::middleware('auth')->group(function () {

    Route::get('/journal/create', [JournalController::class, 'create'])->name('journal.create');
    Route::post('/journal/store', [JournalController::class, 'store'])->name('journal.store');

    Route::get('/journal/{id}/edit', [JournalController::class, 'edit'])->name('journal.edit');
    Route::post('/journal/{id}/update', [JournalController::class, 'update'])->name('journal.update');

    Route::delete('/journal/{id}/delete', [JournalController::class, 'destroy'])->name('journal.delete');
});


// Hitelesítés (Login, Register)
Auth::routes();
