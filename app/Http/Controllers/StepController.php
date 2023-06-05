<?php

namespace App\Http\Controllers;

use App\Models\Step;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $steps = Ingredient::join('Steps', 'ingredients.id', '=', 'steps.id_ingredient')
        ->get(['name','steps.*']);
        return view('step.index', compact('steps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('step.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_ingredient' => 'required',
            'step_number' => 'required',
            'step_desc' => 'required',
            'dose' => 'required',
            'status' => 'required'
        ]);

        Step::create($validated);

        return redirect('step')->with('success', 'ingredient Ajouté avec succès');
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
    public function edit(step $step)
    {
        return view('step.edit', compact('step'));
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
