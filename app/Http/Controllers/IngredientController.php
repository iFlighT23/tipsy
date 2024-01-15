<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
// use App\Models\Recipe;
// use App\Models\Step;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ingredients = Ingredient::all()->sortBy('name');
        return view('ingredient.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required',
            'degree' => 'required'
        ]);

        if ($request->status == 'on') {
            $validated['status']= 1;
        }

        Ingredient::create($validated);

        return redirect('ingredients')->with('success', 'ingredient ajouté avec succès');
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
    public function edit(Ingredient $ingredient)
    {
        return view('ingredient.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $ingredient->name = $request->name;
        $ingredient->type = $request->type;
        $ingredient->degree = $request->degree;
        if ($request->status == 'on') {
            $ingredient->status = 1;
        }else {
            $ingredient->status = 0;
        }

        $ingredient->update();

        return redirect()->route('ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return redirect()->route('ingredients.index');
    }
}
