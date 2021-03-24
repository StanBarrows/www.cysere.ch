<?php

namespace App\Http\Controllers;

class StartIndexController extends Controller
{
    public function index()
    {
        $seo = (object) [
            'site' => 'Students Project FHNW',
            'title' => 'Cyber Security and Resilience (CSR SS21)',
            'image' => asset('images/cysere_seo.jpg'),
            'robots' => 'index/follow',
            'description' => 'Cyber Security and Resilience (CSR SS21)',
         ];

       return view('start', compact('seo'));
    }

}
