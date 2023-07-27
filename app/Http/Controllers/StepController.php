<?php

namespace App\Http\Controllers;

use App\Models\Step;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $steps = Step::all();
        return view('step.index', compact('steps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $ingredients = Ingredient::all()->sortBy('name');//sortBy tri par nom (ordre alphabétique)
        $recipes = Recipe::all()->sortBy('name');

        return view('step.create', compact('ingredients', 'recipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ingredient_id' => 'required',
            'recipe_id' => 'required',
            'step_number' => 'required',
            'step_desc' => 'required',
            'dose' => 'required'
        ]);

        if ($request->status == 'on') {
            $validated['status']= 1;
        }

        Step::create($validated);

        return redirect('steps')->with('success', 'ingredient Ajouté avec succès');
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
    public function edit(Step $step)
    {
        $ingredients = Ingredient::all()->sortBy('name');
        $recipes = Recipe::all()->sortBy('name');
        return view('step.edit', compact('step','ingredients', 'recipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Step $step)
    {

        $step->step_number = $request->number;
        $step->recipe_id = $request->recipe_id;
        $step->step_desc = $request->step_desc;
        $step->dose = $request->dose;
        $step->ingredient_id = $request->ingredient_id;
        if ($request->status == 'on') {
            $step->status = 1;
        }else {
            $step->status = 0;
        }

        $step->update();

        return redirect()->route('steps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Step $step)
    {
        $step->delete();

        return redirect()->route('steps.index');
    }
}
