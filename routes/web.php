<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
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




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('recipe', RecipeController::class);
});
// Route::get('/recipes', [RecipeController::class,'index'])->name('recipes');

// Route::get('/create',[RecipeController::class,'create'])->name('create.recipe');

// Route::post('/store',[RecipeController::class,'store'])->name('store.recipe');

// Route::get('/show',[RecipeController::class,'show'])->name('show.recipe');

// Route::get('/edit',[RecipeController::class,'edit'])->name('edit.recipe');

// Route::patch('/update',[RecipeController::class,'update'])->name('update.recipe');

// Route::post('/recipe/destroy/{recipe}', [RecipeController::class,'destroy'])->name('recipe.destroy');

