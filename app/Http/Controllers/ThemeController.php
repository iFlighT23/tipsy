<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;


class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::all();// dans la variable theme ce trouve les resultats de ma requete

        return view('theme.index', compact('themes'));//la variable theme est envoyée à la vue index
        // [
        //     'themes' => $themes
        // ]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()// appel la vue
    {
        return view('theme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)// fonction la ou il y a la requete pour la bd
    {
        $theme = new Theme;// objet theme de type model
        $theme->name = $request->name;
        $theme->url = $request->url; //url= champs de l'objet
        // prend le champs nom dans le formulaire et l'assigne dans la variable thème
        if($request->status == 'on') {// on vérifie si le status est coché on alors on assigne 1 àla propriété status de l'objet theme
            $theme->status = 1;
        }
        $theme->save();

        return redirect()->route('themes.index');
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
    public function edit(Theme $theme)// 2 paramettre objet de type model Theme et la variable theme
    {
        // $theme = Theme::find($id); plus utile, on passe par l'objet directement, au lieu de l'id
        // dd($theme); on affiche notre objet brut
        return view ('theme.edit', compact('theme'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Theme $theme)
    {
        $theme->name = $request->name;
        $theme->url = $request->url;
        if($request->status == 'on') {
            $theme->status = 1;
        }else{
            $theme->status = 0;
        }
        // récupère le nom dans la variable theme, utilise le model requête,get renvoie le name( renvoie une valeur à une variable donnée),
        $theme->update();
        return redirect()->route('themes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)// $theme est une instance du modèle Theme.
    {
        $theme->delete();

        return redirect()->route('themes.index');
    }
}
