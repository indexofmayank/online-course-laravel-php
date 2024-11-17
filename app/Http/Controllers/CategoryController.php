<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch only the first 5 categories with 'id' and 'name'
        $categories = Category::select('id', 'name')
            ->take(5)
            ->get();

            var_dump($categories);

        return view('categories.index', compact('categories'));
    }
}
