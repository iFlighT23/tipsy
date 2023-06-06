<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        Ingredient::create ([
            'name' =>'Rhum blanc',
            'type' =>'Alcool fort',
            'degree' => '55',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'jus ananas',
            'type' =>'jus',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'crème de noix de coco',
            'type' =>'autre',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Gin',
            'type' =>'Alcool fort',
            'degree' => '45',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Tequila',
            'type' =>'Alcool fort',
            'degree' => '35',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Whisky',
            'type' =>'Alcool fort',
            'degree' => '40',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Jus de banane',
            'type' =>'Jus',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Jus de citron',
            'type' =>'Jus',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Citron Vert',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Sirop de grenadine',
            'type' =>'Jus',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Orange',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Jus d\'Orange',
            'type' =>'Jus',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Citron',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Thé vert',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Jus de Pamplemousse',
            'type' =>'jus',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Sucre',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Feuille de menthe',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Menthe fraîche',
            'type' =>'Garniture',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Eau gazeuse',
            'type' =>'Eau',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Glaçon',
            'type' =>'Garniture',
            'status'=>'1'
        ]);
    }
}
