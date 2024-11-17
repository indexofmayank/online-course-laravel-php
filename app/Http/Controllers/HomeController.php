<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Courses;

class HomeController extends Controller
{
    public function index(Request $request) {
        $categories = Category::select('id', 'name')
                    ->take(5)
                    ->get();
        $courses = Courses::paginate(6); // Paginate courses to display 6 per page
        return view('pages.Homepage', compact('categories', 'courses'));
    }
}
