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

Route::get('/', [RecipeController::class, 'index_user']);

Route::get('/about', function () {
    return view('team');
});

Route::get('/admin', [RecipeController::class, 'index']);

Route::get('/admin/delete/{id}', [RecipeController::class, 'destroy']);
Route::get('/admin/edit/{id}', [RecipeController::class, 'edit']);
Route::post('/admin/update/', [RecipeController::class, 'update']);

Route::get('/recipe', [RecipeController::class, 'create']);
Route::post('/add', [RecipeController::class, 'store']);
