<?php

namespace App\Http\Controllers;
use App\Models\Theme;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use illuminate\Support\Facades\mail;

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
        $recipes = Recipe::whereRelation('themes', 'id', 3)->get();
        return view('tipsy.sansalcool', compact('recipes'));

    }

    public function index()
    {
        if (session('age_verified')) {
            // Si l'âge est vérifié, continuez vers la page d'accueil normale
            $themes = Theme::where('status', 1)->get();
            return view('tipsy.accueil')->with(compact('themes'));
        } else {
            // Sinon, affichez le modal d'âge
            return view('tipsy.checkAge');
        }


    }

    public function filterIngredient(Request $request)

    {
    // sert à retourner sur la route cocktails dans mon search  avec la valeur qui est demandé(valeur de la requête de mon input de mon formulaire)(de la barre de recherche)


        return redirect()->route('cocktails', ['search' => $request->search]);
    }

    public function checkAge(Request $request)
    {
        $age = $request->input('age');

        // Vérifiez l'âge de l'utilisateur
        if ($age >= 18) {
            // Stockez l'âge vérifié dans la session
            $request->session()->put('age_verified', true);
            return redirect()->route('cocktails');
        } else {
            // Redirigez l'utilisateur vers le modal d'âge
            $request->session()->put('age_verified', false);
            return redirect()->route('sansalcool');
            // return redirect()->route('accueil')->with('error', 'Vous devez être majeur pour accéder au site.');
        }//with créer une variable de session

        // Redirigez l'utilisateur vers la page d'accueil normale

    }
    public function create()// appel la vue
    {
        return view('tipsy.form');
    }

    public function store(Request $request)
    {
        // Validez les entrées du formulaire ici selon vos besoins.
        $mail = new mail;
        $mail = $request->input('email');
        $mail = $request->input('message');
        $toEmail = 'corinneeasy555@gmail.com'; // Adresse e-mail externe de destination

        // Envoi de l'e-mail
        Mail::send([], [], function ($message) use ($mail) {
            $message->to($mail);

        });

        return redirect()->back()->with('success', 'E-mail envoyé avec succès !');
    }

    public function mentions()// appel la vue
    {
        return view('tipsy.mentions');
    }

    public function cookies()// appel la vue
    {
        return view('tipsy.cookies');
    }

    public function conditions()// appel la vue
    {
        return view('tipsy.conditions');
    }
}
