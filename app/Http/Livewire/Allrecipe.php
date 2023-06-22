<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class Allrecipe extends Component
{

    public $isOpen = false;

    public $name,$rdescription,$step_number,$sdescription,$dose,$theme;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('tipsy.cocktails', [
            'recipes' => Recipe::all()
        ])->layout('layouts.app');
    }

    public function update(Recipe $recipe)
    {
        $this->name = $recipe->name;
        $this->rdescription = $recipe->description;
        $this->step_number = $recipe->step->step_number;
        $this->sdescription = $recipe->step->step_desc;
        $this->dose = $recipe->step->dose;
        $this->theme = $recipe->theme;

        $this->openModal();


    }
}
