<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Recipe::all();
        return view('admin', ['recipes' => $data]);
    }

    public function index_user()
    {
        $data = Recipe::all();
        return view('home', ['recipes' => $data]);
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
        $recipe = Recipe::create([
            'name' => $data['name'],
            'ingredients' => $data['ingredients'],
            'directions' => $data['directions'],
            'image' => $data['image'],
            'category' => $data['category'],

        ]);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = date('Ymd') . '.' . $extension;
            $request->file('image')->move('images/', $newName);
            $recipe->image = $newName;
            $recipe->save();
        }
        return redirect('/admin');
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
        $data = Recipe::find($id);
        return view('edit', ['recipe' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $recipe = Recipe::where('recipe_id', $request->recipe_id)->update([
            'name' => $request->name,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'category' => $request->category,
        ]);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = date('Ymd') . '.' . $extension;
            $request->file('image')->move('images/', $newName);
            $recipe->image = $newName;
            $recipe->save();
        }
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Recipe::find($id);
        $data->delete();
        return redirect('/admin');
    }
}
