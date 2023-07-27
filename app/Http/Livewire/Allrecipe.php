<?php

namespace App\Http\Livewire;

use App\Models\Step;
use App\Models\Theme;
use App\Models\Recipe;
use App\Models\Theme;
use Livewire\Component;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class Allrecipe extends Component
{

    public $isOpen = false;
    public $totalRecords;
    public $perPage = 10;
    public $filterTheme = null, $search = '';
    protected $queryString = [
        'search' => ['except' => ''],
        'filterTheme' => ['except' => ''],
    ];

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
    

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $ingredients = Ingredient::query()
            ->where('name', 'like', "%{$key}%")
            // ->orWhere('recipe', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $recipes = Recipe::all();

            }

    public function render()
    {
        // Theme::where('name', 'St Valentin')

        // $filterTheme

        $query = Recipe::query();

        if ($this->filterTheme != null) {
            $query->whereHas('themes', function ($query) {
                $query->where('theme_id', $this->filterTheme);
            });
        }

        $recipes = $query->where('name', 'LIKE', '%'.$this->search.'%')->limit($this->perPage)->get();

        $currentThemes = Theme::all();

        return view('tipsy.cocktails')->with(compact('recipes', 'currentThemes'))->layout('layouts.guest');

    }

}

