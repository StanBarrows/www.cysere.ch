<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    /**
     * Handle the partner "creating" event.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function creating(Category $category)
    {
        $category->uuid = Str::orderedUuid()->toString();
        $category->slug = Str::slug($category->title);
    }
}
