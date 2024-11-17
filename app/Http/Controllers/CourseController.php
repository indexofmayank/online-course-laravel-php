<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Category;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Courses::select('id', 'title')->get();
        $categories = Category::select('id', 'name')->get();
        return view('pages/Course', compact('courses', 'categories'));
    }

    public function getCourseForCategory($categoryId = null)
    {
        $query = Courses::query();

        if ($categoryId !== null) {
            $query->where('category_id', $categoryId);
        }

        $courses = $query->paginate(6);

        return response()->json([
            'courses' => $courses->items(), 
            'current_page' => $courses->currentPage(),
            'last_page' => $courses->lastPage(),
            'total' => $courses->total(),
            'next_page_url' => $courses->nextPageUrl(),
            'prev_page_url' => $courses->previousPageUrl(),
        ]);
    }
}
