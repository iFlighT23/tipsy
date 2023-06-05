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
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Tequila',
            'type' =>'Alcool fort',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Whisky',
            'type' =>'Alcool fort',
            'status'=>'1'
        ]);

        Ingredient::create ([
            'name' =>'Jus de banane',
            'type' =>'Jus',
            'status'=>'1'
        ]);
    }
}
