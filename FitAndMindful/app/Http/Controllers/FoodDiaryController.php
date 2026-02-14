<?php

namespace App\Http\Controllers;

use App\Models\FoodDiary;
use App\Http\Requests\StoreFoodDiaryRequest;
use App\Http\Requests\UpdateFoodDiaryRequest;

class FoodDiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFoodDiaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FoodDiary $foodDiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodDiary $foodDiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodDiaryRequest $request, FoodDiary $foodDiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodDiary $foodDiary)
    {
        //
    }
}
