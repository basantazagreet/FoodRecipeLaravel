<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    function addRecipe(Request $req){
        $recipe = new Recipe;
        $recipe -> title = $req -> title; 
        $recipe -> description = $req -> description;
        $recipe -> ingredients = $req -> ingredients;
        $recipe -> steps = $req -> steps;

        $recipe -> img = $req -> file('file') -> store('img');

        $recipe -> isvegan = $req -> isvegan;
        $recipe -> readyin = $req -> readyin;
        $recipe -> origin = $req -> origin;
        $recipe -> category = $req -> category;
        


        $recipe -> save();
        return redirect('getrecipes');
    }

    function showRecipes(){
        return Recipe::all();
    }




}
