<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Recipe::factory()->count(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Recipe::create([
            'name' => 'Mojito',
            'description' => 'Ce cocktail cubain à base de rhum, dont la réputation n’est plus à faire, est assez facile à préparer et est toujours apprécié. Délectez-vous de sa fraîcheur et de ses arômes de menthe et de citron vert… Vous ravirez les papilles de vos convives à coup sûr lors de vos soirées ou apéritifs !'
        ]);
        Recipe::create([
            'name' => 'Pamplemousse et thé vert',
            'description' => 'Cocktail au pamplemousse et thé vert sans alcool – Ingrédients :1 litre de thé vert,2 pamplemousses,3 cuil à soupe de sucre,sucre,zestes de citron jaune,...'
        ]);
        Recipe::create([
            'name' => 'Bora Bora',
            'description' => 'Ananas, passion, citron, grenadine... Voici la recette du cocktail sans alcool Bora Bora, à déguster en format solo ou XXL lors de vos soirées.'
        ]);
        Recipe::create([
            'name' => 'Paradise',
            'description' => 'La plus célèbre recette cocktail à base d’abricot brandy, pour un apéritif fruité classique, née vraisemblablement dans les années 1920s à Londres.'
        ]);

        Recipe::create([
            'name' => 'Angel’s Face',
            'description' => 'Sélectionné dans la liste des cocktails inoubliables par l’IBA. Cet apéritif propose un équilibre entre sec et doux aux saveurs d’abricot, de pomme et les notes florales du gin'
        ]);

        Recipe::create([
            'name' => 'Paradise',
            'description' => 'La plus célèbre recette cocktail à base d’abricot brandy, pour un apéritif fruité classique, née vraisemblablement dans les années 1920s à Londres.'
        ]);

        Recipe::create([
            'name' => 'Paradise',
            'description' => 'La plus célèbre recette cocktail à base d’abricot brandy, pour un apéritif fruité classique, née vraisemblablement dans les années 1920s à Londres.'
        ]);


    }
}
