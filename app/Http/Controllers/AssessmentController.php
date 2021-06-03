<?php

namespace App\Http\Controllers;

use App\Classes\Assessment;
use App\Models\Service;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        if (!session()->has(Assessment::SESSION)) {
            return redirect()->route('checklist.index');
        }

        $assessment = session()->get(Assessment::SESSION);

        if (!$assessment->getActiveService()) {

            $active = $assessment->getServices()->first();
            $assessment->setActiveService($active);
        }

        $services = $assessment->getServices();
        $active = $assessment->getActiveService();
        $next = $assessment->getNextService();
        $previous = $assessment->getPreviousService();
        $topics = $assessment->getTopics($active);

        return view('assessment.index')->with([
            'services' => $services,
            'active' => $active,
            'previous' => $previous,
            'next' => $next,
            'topics' => $topics,
        ]);
    }

    public function reset()
    {
        session()->flush();
        return redirect()->route('start.index');
    }

    public function set(Service $service)
    {
        $assessment = session()->get(Assessment::SESSION);
        $assessment->setActiveService($service);
        session()->put(Assessment::SESSION, $assessment);
        return redirect()->route('assessment.index');
    }

    public function check(Request $request)
    {
        $assessment = session()->get(Assessment::SESSION);
        $active = $assessment->getActiveService();

        $topics = collect($request->except('_token'))->map(function ($value, $key)
        {
            return [
                'uuid' => $key,
                'value' => $value,
            ];
        })->toArray();

        $assessment->setTopics($active, $topics);
        session()->put(Assessment::SESSION, $assessment);

        return redirect()->route('assessment.index');
    }

    public function finish()
    {
        return redirect()->route('assessment.finish');
    }

}
