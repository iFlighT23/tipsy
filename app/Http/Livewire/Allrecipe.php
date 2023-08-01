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
/**
 * Déclaration des variables
 * avec protection sur la variable $queryString pour la recherche
 */

    public $isOpen = false;
    public $totalRecords;
    public $perPage = 10;
    public $filterTheme = null, $search = '';
    protected $queryString = [
        'search' => ['except' => ''],
        'filterTheme' => ['except' => ''],
    ];

    public $name, $themes, $descriptions, $ingredients, $steps, $recipe_id;

    public function loadMore()
    {
        $this->perPage += 10;
    }
/**
 * FOnction pour compter le nombre d'entrée dans la table Recipe
 */
    public function mount()
    {
        $this->totalRecords = Recipe::count();
    }
/**
 * Fonction openModal, pour ouvrir cette derniere
 */
    public function openModal()
    {
        $this->isOpen = true;
    }
/**
 * Fonction closeModal
 */
    public function closeModal()
    {
        $this->isOpen = false;
    }
/**
 * Fonction show pour afficher les ingrédients, thèmes, étapes dans la modal
 */
    public function show(Recipe $recipe)
    {

        $this->name = $recipe->name;
        $this->themes = $recipe->themes;
        $this->descriptions = $recipe->description;
        $this->steps = $recipe->steps;
        $this->recipe_id = $recipe->id;


        $this->openModal();
    }


/**
 * On retourne la vue tipsy.cocktails via guest.layouts, avec 2 requêtes :
 * $ingredient qui recherche les ingrédients qui correspondent a la recherche dans $this->search
 * $query qui recupère les données de la table recipe, et si filterTheme est pas null alors
 * on recupère les recettes en fonction des themes, grâce a theme_id
 * $recipes qui affiche les recettes en fonction de la recherche
 * $currentThemes, récupère tous les thèmes et servira pour le tri par thème dans la vue tipsy.cocktails
 */
    public function render()
    {

        $ingredients = Ingredient::where('name', 'LIKE', '%' . $this->search . '%')->get();

        $query = Recipe::query();

        if ($this->filterTheme != null) {
            $query->whereHas('themes', function ($query) {
                $query->where('theme_id', $this->filterTheme);
            });
        }

        $recipes = $query->where('name', 'LIKE', '%' . $this->search . '%')->limit($this->perPage)->get();

        $currentThemes = Theme::all();

        return view('tipsy.cocktails')->with(compact('recipes', 'currentThemes'))->layout('layouts.guest');
    }
}
