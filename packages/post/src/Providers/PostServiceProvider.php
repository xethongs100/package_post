<?php

namespace Post\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // include controller
        $this->app->make('Post\Http\Controllers\PostController');
        // include view
        $this->loadViewsFrom(__DIR__ . '../../Views', 'post');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // include router
        include __DIR__ . '../../Routes/routes.php';
    }
}
