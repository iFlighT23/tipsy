<?php

namespace App\Http\Controllers;
use App\Models\Theme;
use App\Models\Recipe;

class FrontController extends Controller
{

    public function themes()//affiche les thèmes
    {
        $themes = Theme::where('status', 1)->get();
        return view('tipsy.themes', compact('themes'));
    }

    public function theme(Theme $theme)// affiche les recettes en fonctions des thèmes
    {
        // objet theme et function recipes : on va chercher les recettes de l'objet theme
        // dd($theme->recipes);
        $recipes = $theme->recipes;
        return view ('tipsy.theme', compact('recipes','theme'));// function vue a 2 paramètre: l'endroit ou est la vue et les variables à envoyer
    }

    public function recipesWithoutAlcohol()//on passe par le controleur pour afficher la vue, on créer aussi la route correspondante
    {
        $recipes = Recipe::whereRelation('themes', 'id', 11)->get();
        return view('tipsy.sansalcool', compact('recipes'));
    }

}
