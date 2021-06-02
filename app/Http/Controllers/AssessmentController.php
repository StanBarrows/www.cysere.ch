<?php

namespace App\Http\Controllers;

use App\Models\Category;

class AssessmentController extends Controller
{
    public function index()
    {
        $categories = Category::where('published', true)->orderBy('order')->get();
        return view('assessment.index')->with(['categories' => $categories]);
    }

}
