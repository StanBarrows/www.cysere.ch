<?php

namespace App\Http\Controllers;

use App\Models\Category;

class StartIndexController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order')->with('services')->get();
        return view('start', compact('categories'));
    }

}
