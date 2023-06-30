<?php

namespace App\Http\Livewire;

use App\Models\Step;
use App\Models\Recipe;
use Livewire\Component;
use App\Models\Ingredient;

class Allrecipe extends Component
{

    public $isOpen = false;
    public $totalRecords;
    public $perPage = 10;

    public $name,$themes,$descriptions,$ingredients,$steps,$recipe_id;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function mount()
    {
        $this->totalRecords = Recipe::count();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function show(Recipe $recipe)
    {

        $this->name = $recipe->name;
        $this->themes = $recipe->themes;
        $this->descriptions = $recipe->description;
        $this->steps = $recipe->steps;
        $this->recipe_id = $recipe->id;

        $this->openModal();

    }

    // public function render()
    // {
    //     return view('tipsy.cocktails', [
    //         'recipes' => Recipe::all()
    //     ])->layout('layouts.app');
    // }

    public function render()
    {
        return view('tipsy.cocktails')->with('recipes', Recipe::limit($this->perPage)->get()
    );
    }

}

