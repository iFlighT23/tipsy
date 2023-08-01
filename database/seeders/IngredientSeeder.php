<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
/**
 *  je transforme mon fichier de données json en tableau laravel
 */
        $collection = File::json(public_path("/recipes.json"));
/**
 * Chaque ligne du tableau est stockées dans la variable $value.
 * Si la colonne ingrédient du tableau n'est pas nulle alors
 * Chaque ligne 'ingrédient' du tableau est stockées dans $ingredient
 * Si la colonne ingrédient du tableau existe, alors la ligne 'label' est utilisée pour le nom, et 'ingredient' comme type
 * Sinon 'ingredient' est le nom, et le type est alcool.
 * Si la colonne ingrédient est nulle, alors la ligne spéciale sera le nom, et accompagnement le type.
 */
        foreach ($collection as $value) {
            if ($value['ingredients'] != null) {
                foreach ( $value['ingredients'] as $ingredient) {
                    if (array_key_exists('ingredient', $ingredient)) {
                       if(array_key_exists('label', $ingredient)) {
                        $name = $ingredient['label'];
                        $type = $ingredient['ingredient'];
                       } else {
                        $name = $ingredient['ingredient'];
                        $type = 'alcool';
                       }
                    } else {
                        $name = $ingredient['special'];
                        $type = 'Accompagnement';
                    }
/**
 * J'entre les données obtenues dans ma table Ingredient
 */
                    Ingredient::firstOrCreate ([
                        'name' => $name,
                        'type' => $type,
                        'degree' => 0,
                        'status' => 1
                    ]);
                }
            }
        }
    }
}
