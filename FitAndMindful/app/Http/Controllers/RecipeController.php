<?php

namespace App\Http\Controllers;

use App\Models\Recipe; 
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Itt le kell kérni a recepteket, hogy a főoldal ne legyen üres!
        $recipes = Recipe::all();
        return view('recipes', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   public function show($name)
    {
    // A 'wholemeal-pita-bread'-ből 'wholemeal pita bread' lesz
    $searchName = str_replace('-', ' ', $name);

    $recipe = Recipe::with('ingredients')
        ->where('name', 'like', $searchName)
        ->firstOrFail();

    return view('recipe-details', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}