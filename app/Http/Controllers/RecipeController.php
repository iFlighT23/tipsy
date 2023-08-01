<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $validated = $request->validate([// validated= variable request validé (on demande a valider le nom et la description)
            'name' => 'required|max:255',
            'description' => 'required',
            'url' => 'required'
        ]);



        $recipe = Recipe::create($validated);

        $recipe->themes()->sync($request->themes);

        return redirect('recipes')->with('success', 'recette ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {

        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        $themes = Theme::all();
        return view('recipe.edit', compact('recipe', 'themes'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'url' => 'required'
        ]);

        $recipe->update($validated);

        $recipe->themes()->sync($request->themes);


        return redirect('recipes')->with('success', 'recette modifiée avec succès');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('recipes')->with('success', 'recette  supprimée avec succès');
    }

}
