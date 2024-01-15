<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Recipe;
use App\Models\Theme;

class RecipeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
/**
 * Je transforme mon fichier json en tableau laravel
 */
        $collection = File::json(public_path("/recipes.json"));

/**
 * Chaque ligne de mon tableau est stockées dans $value
 * Si la colonne cateogry existe
 * Et si Category est strcitement égal au 'text'
 * Alors le $theme prends la valeur numérique indiquée.
 * Si la colonne category existe pas, alors $theme sera null
 * Le nom de la recette sera egale a la ligne 'nom' du tableau.
 */
        foreach ($collection as $value) {
            $url = 'https://images.unsplash.com/photo-1516633630673-67bbad747022?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80';
            if (array_key_exists('category', $value)) {
                 if ($value['category'] === 'Before Dinner Cocktail'){
                    $themeId = 1;
                 } elseif ($value['category'] === 'All Day Cocktail') {
                    $themeId = [5,6];
                 } elseif ($value['category'] === 'After Dinner Cocktail') {
                    $themeId = 8;
                } elseif ($value['category'] === 'Longdrink') {
                    $themeId = [4,7];
                } elseif ($value['category'] === 'Sparkling Cocktail') {
                    $themeId = 2;
                } else {
                    $themeId = 3;
                    $url = 'https://images.pexels.com/photos/1028637/pexels-photo-1028637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
                }
            } else {
                $themeId = null;
            }
/**
 * j'entre enfin les données obtenues dans ma table recipe
 */
            $recipe = Recipe::create([
                'name'=>$value['name'],
                'description'=>'test json',
                'url'=> $url,
            ]);
/**
 * On synchronise ensuite l'id theme avec les recipes.
 */
            $recipe->themes()->sync($themeId);
        }

    }
}
