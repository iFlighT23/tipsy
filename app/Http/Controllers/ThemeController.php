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
        $themes = Theme::all();

        return view('themes', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()// appel la vue
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)// fonction la ou il y a la requete pour la bd
    {
        $theme = new Theme;
        $theme->name = $request->name;
        if($request->status == 'on') {
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
    public function edit(Theme $theme)
    {
        // $theme = Theme::find($id); plus utile, on passe par l'objet directement, au lieu de l'id
        // dd($theme); on affiche notre objet brut
        return view ('edit', compact('theme'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Theme $theme)
    {
        $theme->name = $request->name;
        if($request->status == 'on') {
            $theme->status = 1;
        }else{
            $theme->status = 0;
        }
        // recupere le nom dans la variable theme, utilise le model requête,get renvoie le name( renvoie une valeur à une variable donnée),
        $theme->update();// met à jour la collection theme avec la route
        return redirect()->route('themes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();

        return redirect()->route('themes.index');
    }
}
