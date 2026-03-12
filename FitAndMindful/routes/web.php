<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'home')->name('home');
Route::view('/workouts', 'workouts')->name('workouts');
Route::view('/workout-diary', 'workout-diary')->name('workout-diary');
Route::view('/recipes', 'recipes')->name('recipes');
Route::view('/food-diary', 'food-diary')->name('food-diary');
Route::view('/journal', 'journal')->name('journal');
Route::view('/mental-health', 'mental-health')->name('mental-health');

Auth::routes();
