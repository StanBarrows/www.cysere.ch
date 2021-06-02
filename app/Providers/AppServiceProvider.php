<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Topic;
use App\Observers\CategoryObserver;
use App\Observers\ServiceObserver;
use App\Observers\TopicObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Category::observe(CategoryObserver::class);
        Service::observe(ServiceObserver::class);
        Topic::observe(TopicObserver::class);
    }
}
