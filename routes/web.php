<?php

use App\Http\Livewire\Allrecipe;
use App\Http\Livewire\AllIngredient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/ingredient/create', [IngredientController::class, 'create'])->name('ingredient.create');
// Route::post('/ingredient', [IngredientController::class, 'store'])->name('ingredient.store');




Route::middleware([
    'auth:sanctum',
    config ('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('ingredients', AllIngredient::class)->name('ingredients');
    Route::resource('steps', StepController::class);
    Route::resource('recipes', RecipeController::class);
    Route::resource('themes', ThemeController::class);
    Route::get('/cocktails', Allrecipe::class)->name('cocktails');

    // Route::get('/themes', [ThemeController::class, 'index'])->name('themes');
    // Route::get('/themes/edit/{theme}', [ThemeController::class, 'edit'])->name('themes.edit');
    // Route::get('/themes/create', [ThemeController::class,'create'])->name('themes.create');
    // Route::post('/themes', [ThemeController::class,'store'])->name('themes.store');
});

Route::get('/all-themes', [FrontController::class,'themes'])->name('front.themes');
Route::get('/all-themes/{theme}', [FrontController::class,'theme'])->name('front.theme');
Route::get('/sansalcool',[FrontController::class,'recipesWithoutAlcohol'])->name('sansalcool');
Route::get('/wordcloud',[FrontController::class,'themeFilter'])->name('worldcloud');
Route::get('/',[FrontController::class,'index'])->name('accueil');

