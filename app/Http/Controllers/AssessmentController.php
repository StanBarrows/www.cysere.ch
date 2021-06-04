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
        $grouped = $services->groupBy('category_id');
        $active = $assessment->getActiveService();
        $next = $assessment->getNextService();
        $previous = $assessment->getPreviousService();
        $topics = $assessment->getTopics($active);
        $completed = $assessment->getCompleted();

        return view('assessment.index')->with([
            'grouped' => $grouped,
            'services' => $services,
            'active' => $active,
            'previous' => $previous,
            'next' => $next,
            'topics' => $topics,
            'completed' => $completed,
        ]);
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

        $topics = collect($request->except('_token'))->map(function ($value, $key) {
            return [
                'uuid' => $key,
                'value' => $value,
            ];
        })->toArray();

        $assessment->setTopics($active, $topics);
        session()->put(Assessment::SESSION, $assessment);

        return redirect()->route('assessment.index');
    }

    public function reset()
    {
        session()->forget(Assessment::SESSION);
        return redirect()->route('checklist.index');
    }

    public function finish()
    {
        session()->forget(Assessment::SESSION);
        return view('assessment.finish');
    }

}
