<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        Theme::create([
            'name'=> 'Nouvel An',
            'status'=>'1'
        ]);

        Theme::create([
            'name'=>'mariage',
            'status'=>'1'
        ]);

        Theme::create([
            'name'=>'Anniversaire',
            'status'=>'1'
        ]);

        Theme::create([
            'name'=>'cocktails à faire avec les enfants',
            'status'=>'1'
        ]);

        Theme::create([
            'name'=>'EVJF',
            'status'=>'1'
        ]);

        Theme::create([
            'name'=>'Par couleur',
            'status'=>'1'
        ]);

        theme::create([
            'name'=>'recettes secrètes',
            'status'=>'1'
        ]);


    }
}
