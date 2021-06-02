<?php

namespace App\Observers;

use App\Models\Topic;
use Illuminate\Support\Str;

class TopicObserver
{
    /**
     * Handle the partner "creating" event.
     *
     * @param \App\Models\Topic $topic
     * @return void
     */
    public function creating(Topic $topic)
    {
        $topic->uuid = Str::orderedUuid()->toString();
    }
}
