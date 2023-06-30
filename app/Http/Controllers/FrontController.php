<?php

namespace App\Http\Controllers;
use App\Models\Theme;

class FrontController extends Controller
{

    public function themes()
    {
        $themes = Theme::where('status', 1)->get();
        return view('tipsy.themes', compact('themes'));
    }

    public function theme(Theme $theme)
    {
        // objet theme et function recipes : on va chercher les recettes de l'objet theme
        // dd($theme->recipes);
        $recipes = $theme->recipes;
        return view ('tipsy.theme', compact('recipes','theme'));// function vue a 2 paramètre: l'endroit ou est la vue et les variables à envoyer
    }
}
