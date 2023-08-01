<?php

namespace App\Http\Livewire;

use App\Models\Step;
use App\Models\Theme;
use App\Models\Recipe;
use Livewire\Component;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class Allrecipe extends Component
{

    public $isOpen = false;
    public $totalRecords;
    public $perPage = 10;
    public $filterTheme = null, $filterIngredient = null, $search = '';
    protected $queryString = [
        'search' => ['except' => ''],
        'filterTheme' => ['except' => ''],
        'filterIngredient' => ['except' => ''],
    ];

    public $name, $themes, $descriptions, $ingredients, $steps, $recipe_id;

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

    public function render()
    {
        $query = Recipe::query();

        if ($this->filterTheme != null) {
            $query->whereHas('themes', function ($query) {
                $query->where('theme_id', $this->filterTheme);
            });
        }

        // on a définit la requête de search avec les valeurs demandées dans mon formulaire

        if ($this->search != null) {
            $query->whereHas('ingredients', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->orWhere('name', 'LIKE', '%' . $this->search . '%');
        }

        $recipes = $query->limit($this->perPage)->get();

        $currentThemes = Theme::all();
        $search = $this->search;

        // retourne la vue(('tipsy.cocktail') avec le nom de mes variables recipes, currentThemes, search) on va lui dire d'utilisé le layout.guest

        return view('tipsy.cocktails')->with(compact('recipes', 'currentThemes', 'search'))->layout('layouts.guest');
    }
}
