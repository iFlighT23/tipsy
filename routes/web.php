<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepController;
use App\Http\Controllers\IngredientController;

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
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::resource('ingredient', IngredientController::class);
        Route::resource('step', StepController::class);
        // Route::get('/', [IngredientController::class, 'index'])->name('index');
    });

