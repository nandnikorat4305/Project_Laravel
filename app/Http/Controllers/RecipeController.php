<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Show only 3 latest recipes on home page
    public function home()
    {
        $recipes = Recipe::latest()->take(3)->get();
        return view('home', compact('recipes'));
    }

    // Show all recipes with optional search & category filter
    public function index(Request $request)
    {
        $query = Recipe::query();

        if ($request->filled('search')) {
            $query->where('title', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $recipes = $query->get();

        return view('recipes.index', compact('recipes'));
    }

    // Show single recipe (View Recipe page)
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }

    // Show the create recipe form
    public function create()
    {
        return view('recipes.create');
    }

    // Store new recipe in database
    public function store(Request $request)
{
    $recipe = new Recipe();
    $recipe->title = $request->title;
    $recipe->category = $request->category;
    $recipe->description = $request->description;
    $recipe->ingredients = $request->ingredients;
    $recipe->steps = $request->steps;
    $recipe->image = null;
    $recipe->save();

    return "SAVED SUCCESSFULLY";
}
}
