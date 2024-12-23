<?php

// app/Http/Controllers/RecipeController.php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('category')->latest()->get();
        return view('recipes.index', compact('recipes')); // Проверяем, что здесь действительно вызовется "recipes.index"
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe')); // Проверяем, что здесь вызовется "recipes.show"
    }

    public function create()
    {
        $categories = Category::all();
        return view('recipes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $recipe = new Recipe($validated);
        $recipe->user_id = auth()->id();
        $recipe->save();

        return redirect()->route('recipes.my');
    }

    public function myRecipes()
    {
        $recipes = auth()->user()->recipes;
        return view('recipes.my', compact('recipes'));
    }
}
