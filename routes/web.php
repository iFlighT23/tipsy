<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('recipe', RecipeController::class);


    // Route::get('/themes', [ThemeController::class, 'index'])->name('themes');
    // Route::get('/themes/edit/{theme}', [ThemeController::class, 'edit'])->name('themes.edit');
    // Route::get('/themes/create', [ThemeController::class,'create'])->name('themes.create');
    // Route::post('/themes', [ThemeController::class,'store'])->name('themes.store');

    Route::resource('themes', ThemeController::class);

});


