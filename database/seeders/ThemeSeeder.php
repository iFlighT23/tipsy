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
        theme::create([
            'name'=>'St Valentin',
            'status'=>1,
            'url'=>'https://img.freepik.com/photos-gratuite/mise-plat-du-concept-belle-saint-valentin_23-2148717914.jpg?w=1800&t=st=1690186087~exp=1690186687~hmac=f90647e5771598e95f7c9e037607d57accdfeeb30dd74dbe6b432a6692a687a6',
            'color'=>'red'
        ]);

        theme::create([
            'name'=>'Strong cocktails',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1615887625746-f3d2aa27e048?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
            'color'=>'yellow'
        ]);

        Theme::create([
            'name'=>'Sans Alcool',
            'status'=> 1,
            'url'=> 'https://plus.unsplash.com/premium_photo-1661544376223-0bed58e7adf4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
            'color'=>'emerald'
        ]);

        Theme::create([
            'name'=>'Mariage',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1526894198609-10b3cdf45c52?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=844&q=80',
            'color'=> 'pink'
        ]);
        Theme::create([
            'name'=>'Anniversaire',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1560963689-7f69d8ca0518?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1103&q=80',
            'color'=>'purple'
        ]);
        Theme::create([
            'name'=>'Mixologie moderne',
            'status'=> 1,
            'url'=>'https://images.pexels.com/photos/2531185/pexels-photo-2531185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color'=>'green'
        ]);

        Theme::create([
            'name'=> 'Nouvel An',
            'status'=> 1,
            'url'=>'https://images.unsplash.com/photo-1576481564650-61d2ed81f6d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80',
            'color'=>'sky'
        ]);

        Theme::create([
            'name'=>'Classiques',
            'status'=> 1,
            'url'=>'https://images.unsplash.com/photo-1591243315780-978fd00ff9db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'color'=>'amber'
        ]);

        theme::create([
            'name'=>'Tropical paradise',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1560963689-b5682b6440f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1096&q=80',
            'color'=>'blue'
        ]);

        Theme::create([
            'name'=>'Halloween',
            'status'=> 1,
            'url'=>'https://static.attr.dev/v2/640/360/75/aHR0cHM6Ly9tYWZvdXJjaGV0dGUuZncuY2RucHVsbC5jb20vbWFpbl9vcmlnaW5hbF81ZGEwZTkwMjY1ZjQ0XzMxODkyMi5qcGc=/378ba0252f59d6f70dc97ea2abb76cb12dd6287c302a522178efe4c7c6e5c718/image',
            'color'=>'orange'
        ]);

    }
}
