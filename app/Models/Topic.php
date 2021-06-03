<?php

namespace App\Models;

use App\Traits\IsPublishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;
    use IsPublishable;
    use SoftDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
