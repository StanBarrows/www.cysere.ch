<?php

namespace App\Models;

use App\Traits\IsPublishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use IsPublishable;
    use SoftDeletes;

    protected $casts = [
        'category_id' => 'integer',
        'authors' => 'array',
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

}
