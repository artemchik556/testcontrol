<?php
// app/Http/Controllers/CategoryController.php
namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $recipes = $category->recipes()->latest()->get();
        return view('categories.show', compact('recipes', 'category'));
    }
}
