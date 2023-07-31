<?php

namespace Database\Seeders;

use App\Models\step;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * TOUT le code qui suit remplit la table STEP de données !!!
     */
    public function run(): void
    {

/**
 * je transforme mon fichier json en tableau laravel
 * J'initialise ma variable $number
 */

        $collection = File::json(public_path("/recipes.json"));
        $number = 0;

/**
 * Je stock chaque ligne de mon tableau dans la variable $value
 * Si la colonne ingredient n'est pas null, ma varaible $recipename a le 'name' de mon tableau et mon $number = 0
 */
        foreach ($collection as $value) {
            if ($value['ingredients'] != null) {
                $recipeName = $value['name'];
                $number = 0;
/**
 * Pour chaque ligne de mon tableau ingredient
 * j'incrémente ma variable $number de 1 ( $number++ correspond à $number = $number + 1)
 * Si la colonne ingredient existe, et si il y ala colonne 'label'
 * alors $name = 'label' de mon tableau
 * Sinon $name = 'ingreddient' de mon tableau
 * Et $dose = 'amount, $desc = verser
 * Et si la colonne ingredient exsite pas, alors :
 * $name = special, $desc=ajouter
 * Et si la colonne dashes existe, alors $dose= dashes
 */
                foreach ( $value['ingredients'] as $ingredient) {
                    $number++;

                     if (array_key_exists('ingredient', $ingredient)) {

                        if (array_key_exists('label', $ingredient)) {
                            $name = $ingredient['label'];
                         } else {
                            $name = $ingredient['ingredient'];
                        }
                        $dose = $ingredient['amount'];
                        $desc = 'Verser';
                    } else {
                        $name = $ingredient['special'];
                        $desc = 'Ajouter';
                        if (array_key_exists('dashes', $ingredient)) {
                        $dose = $ingredient['dashes'];
                        }
                    }
/**
 * $ingredientId est le resultat de ma requete dans la table Ingredient ou le nom de l'ingredient = ma varaible $name, et qui prend la valeur de son ID
 * Même chose avec la table recipes
 */
                        $ingredientId = Ingredient::where('name', $name)->value('id');
                        $recipeId = Recipe::where('name', $recipeName)->value('id');
/**
 * J'entre les valeurs obtenues dans ma table Step
 */
                        Step::firstOrCreate ([
                        'step_number' => $number,
                        'step_desc' => $desc,
                        'dose' => $dose,
                        'status' => 1,
                        'ingredient_id' => $ingredientId,
                        'recipe_id' => $recipeId
                        ]);
                    }

            }
        }
    }
}
