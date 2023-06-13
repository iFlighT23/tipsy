<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create ([
            'step_number' =>'1',
            'step_desc'=>'verser',
            'dose'=> 1,
            'status'=> 1,
            'ingredient_id'=> 1,
            'recipe_id'=> 1
        ]);

        Step::create ([
            'step_number' =>'2',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'ingredient_id'=>'8',
            'recipe_id'=> 1
        ]);
        Step::create ([
            'step_number' =>'1',
            'step_desc'=>'verser',
            'dose'=> 3,
            'status'=> 1,
            'ingredient_id'=> 1,
            'recipe_id'=> 1
        ]);

        Step::create ([
            'step_number' =>'2',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'ingredient_id'=> 8,
            'recipe_id'=> 1
        ]);

        Step::create ([
            'step_number' =>'3',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'ingredient_id'=>'16',
            'recipe_id'=> 1
        ]);

        Step::create ([
            'step_number' =>'4',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'ingredient_id'=>'19',
            'recipe_id'=> 1
        ]);

        Step::create ([
            'step_number' =>'5',
            'step_desc'=>'ajouter des feuilles',
            'dose'=>'7',
            'status'=>'1',
            'ingredient_id'=>'17',
            'recipe_id'=> 1
        ]);
    }
}
