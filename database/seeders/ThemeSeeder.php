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
            'status'=> 1,
            'url'=>'https://images.unsplash.com/photo-1514361659284-59851c90d011?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ]);

        Theme::create([
            'name'=>'mariage',
            'status'=>1,
            'url'=>'https://images.pexels.com/photos/1114425/pexels-photo-1114425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);

        Theme::create([
            'name'=>'Anniversaire',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1560963689-7f69d8ca0518?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1103&q=80'
        ]);

        Theme::create([
            'name'=>'classiques',
            'status'=> 1,
            'url'=>'https://images.unsplash.com/photo-1591243315780-978fd00ff9db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ]);

        Theme::create([
            'name'=>'halloween',
            'status'=> 1,
            'url'=>'https://static.attr.dev/v2/640/360/75/aHR0cHM6Ly9tYWZvdXJjaGV0dGUuZncuY2RucHVsbC5jb20vbWFpbl9vcmlnaW5hbF81ZGEwZTkwMjY1ZjQ0XzMxODkyMi5qcGc=/378ba0252f59d6f70dc97ea2abb76cb12dd6287c302a522178efe4c7c6e5c718/image'
        ]);

        Theme::create([
            'name'=>'Mixologie moderne',
            'status'=> 1,
            'url'=>'https://images.unsplash.com/photo-1542518392-13317b1ee2a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ]);

        theme::create([
            'name'=>'Tropical paradise',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1560963689-b5682b6440f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1096&q=80'
        ]);
        theme::create([
            'name'=>'Strong cocktails',
            'status'=>1,
            'url'=>'https://images.unsplash.com/photo-1615887625746-f3d2aa27e048?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'
        ]);
        theme::create([
            'name'=>'St Valentin',
            'status'=>1,
            'url'=>'https://img.freepik.com/photos-gratuite/verres-vin-bougies-allumees-bouquet-roses_23-2147591278.jpg?w=1380&t=st=1688031978~exp=1688032578~hmac=6ec59d8a36e2a1bc9dbfbcfa9973b2ef65bcbdb7cd5a8d20ca4a3c13fd610ef5'
        ]);



    }
}
