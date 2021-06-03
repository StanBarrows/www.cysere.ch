<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceObserver
{
    /**
     * Handle the partner "creating" event.
     *
     * @param  \App\Models\Service $service
     * @return void
     */
    public function creating(Service $service)
    {
        $service->uuid = Str::orderedUuid()->toString();
    }
}
