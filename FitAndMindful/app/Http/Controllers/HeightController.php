<?php

namespace App\Http\Controllers;

use App\Models\Height;
use App\Http\Requests\StoreHeightRequest;
use App\Http\Requests\UpdateHeightRequest;

class HeightController extends Controller
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
    public function store(StoreHeightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Height $height)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Height $height)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeightRequest $request, Height $height)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Height $height)
    {
        //
    }
}
