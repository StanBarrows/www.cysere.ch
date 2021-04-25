<?php

namespace App\Http\Controllers;


use App\Models\Service;
use GrahamCampbell\Markdown\Facades\Markdown;

class ServicesController extends Controller
{
    public function show(Service $service)
    {
       return view('services.show')->with([
           'category' => $service->category->title,
           'title' => $service->title,
           'description' => $service->description,
           'body' =>  Markdown::convertToHtml($service->body),
       ]);
    }

}
