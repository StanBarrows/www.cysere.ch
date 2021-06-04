<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;

class TeamControllerTest extends Controller
{
    public function index()
    {
        $users = User::published()->orderBy('name')->get();
        return view('team.index')->with(['users' => $users]);
    }

}
