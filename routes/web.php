<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view("recipeform","recipeform");
Route::post("addrecipe",[RecipeController::class,'addRecipe']);
Route::get("getrecipes",[RecipeController::class,'showRecipes']);

Route::post("addphoto",[RecipeController::class,'addPhoto']);
Route::view("photoform","photoform");