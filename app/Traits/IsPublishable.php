<?php

namespace App\Traits;

trait IsPublishable
{
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
