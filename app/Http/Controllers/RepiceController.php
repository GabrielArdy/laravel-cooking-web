<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;

class RepiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Recipe::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('add-recipe', ['categories' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Recipe::create($data);
        return view('add-recipe');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
