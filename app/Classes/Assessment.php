<?php

namespace App\Classes;

use App\Models\Service;
use App\Models\Topic;
use Illuminate\Support\Collection;

class Assessment
{
    const SESSION = 'assessment';

    public $services;
    public $activeService;
    public $topics;

    public function setServices(array $services)
    {
        $this->services = $services;
    }

    public function getServices(): ?Collection
    {
        return Service::published()->whereIn('uuid', $this->services)->orderBy('uuid')->get();
    }

    public function setActiveService(Service $service)
    {
        $this->activeService = $service->uuid;
    }

    public function getActiveService(): ?Service
    {
        try {
            return Service::where('uuid', $this->activeService)->firstOrFail();
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getNextService(): ?Service
    {
        $uuid = $this->getActiveService()->uuid;
        return $this->getServices()->where('uuid', '>', $uuid)->first();
    }

    public function getPreviousService(): ?Service
    {
        $uuid = $this->getActiveService()->uuid;
        return $this->getServices()->where('uuid', '<', $uuid)->first();
    }

    public function setTopics(Service $service, array $topics)
    {
        $this->topics[$service->uuid] = array_values($topics);
    }

    public function getTopics(Service $service): ?Collection
    {
        try {
            $options = $this->topics[$service->uuid];


            $collection = collect($options)->map(function ($option) {
                try {
                    $model = Topic::where('uuid', $option['uuid'])->firstOrFail();
                    return (object)[
                        'uuid' => $model->uuid,
                        'model' => $model,
                        'extended' => $option['value'] === $model->expected_value
                    ];
                } catch (\Exception $exception) {
                    return [
                        'uuid' => null
                    ];
                }
            })->whereNotNull('uuid');

            return $collection;

        } catch (\Exception $exception) {
            return null;
        }
    }

}
