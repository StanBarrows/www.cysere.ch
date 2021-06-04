<?php

namespace App\Http\Controllers;


use App\Models\Service;

class ServicesController extends Controller
{
    public function show(Service $service)
    {
        if (!$service->published) {
            return redirect()->route('start.index');
        }

        return view('services.show')
            ->with([
                'service' => $service
            ]);
    }

}
