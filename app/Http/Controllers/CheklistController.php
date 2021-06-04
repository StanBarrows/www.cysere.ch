<?php

namespace App\Http\Controllers;

use App\Classes\Assessment;
use App\Models\Category;
use Illuminate\Http\Request;

class CheklistController extends Controller
{
    public function index()
    {
        if (session()->exists(Assessment::SESSION)) {
            return redirect()->route('assessment.index');
        }

        $categories = Category::orderBy('order')->with('services')->get();

        return view('checklist.index')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $keys = array_keys($request->except('_token'));

        if (!count($keys)) {
            flash(__('application/checklist.empty_selection'));
            return redirect()->back();
        }

        $assessment = new Assessment();
        $assessment->setServices($keys);

        session()->put(Assessment::SESSION, $assessment);

        return redirect()->route('assessment.index');
    }

}
