<?php

namespace App\Http\Livewire;

use App\Models\Step;
use App\Models\Recipe;
use Livewire\Component;

class Allrecipe extends Component
{

    public $isOpen = false;

    public $name,$description,$themes,$steps,$recipe_id;

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
        $this->description = $recipe->description;
        $this->themes = $recipe->themes;
        $this->steps = $recipe->steps;
        $this->recipe_id = $recipe->id;

        $this->openModal();

    }

    public function render()
    {
        return view('tipsy.cocktails', [
            'recipes' => Recipe::all()
        ])->layout('layouts.app');
    }
}

