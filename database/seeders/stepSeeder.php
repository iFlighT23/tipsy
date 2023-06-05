<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\step;

class stepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        step::create ([
            'step_number' =>'1',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'id_ingredient'=>'1',
            'id_recipe'=> "1"
        ]);

        step::create ([
            'step_number' =>'2',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'id_ingredient'=>'2',
            'id_recipe'=> "1"
        ]);

        step::create ([
            'step_number' =>'3',
            'step_desc'=>'verser',
            'dose'=>'2',
            'status'=>'1',
            'id_ingredient'=>'3',
            'id_recipe'=> "1"
        ]);

        step::create ([
            'step_number' =>'1',
            'step_desc'=>'verser',
            'dose'=>'2',
            'status'=>'1',
            'id_ingredient'=>'4',
            'id_recipe'=> ""
        ]);

        step::create ([
            'step_number' =>'2',
            'step_desc'=>'verser',
            'dose'=>'3',
            'status'=>'1',
            'id_ingredient'=>'5',
            'id_recipe'=> ""
        ]);

        step::create ([
            'step_number' =>'1',
            'step_desc'=>'verser',
            'dose'=>'1',
            'status'=>'1',
            'id_ingredient'=>'6',
            'id_recipe'=> ""
        ]);
    }
}
