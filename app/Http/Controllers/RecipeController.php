<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\theme;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $themes = Theme::all();
        return view('recipe.create', compact('themes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
  


        $recipe = Recipe::create($validated);

        $recipe->themes()->sync([1, 2, 3]);

        return redirect('recipe')->with('success', 'recette ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $recipe = Recipe::findOrFail($id);
        $recipe->name = $request->get('name');
        $recipe->description = $request('description');

        $recipe->update($recipe->all);
        return redirect('recipe')->with('success', 'recette modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('recipe')->with('success', 'recette  avec succès');
    }

}
