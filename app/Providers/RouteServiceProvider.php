<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        // People route-model binding
        $router->bind('peoples', function($id)
        {
            return \App\People::findOrFail($id);
        });

        // Project route-model binding
        $router->bind('projects', function($id)
        {
            return \App\Project::findOrFail($id);
        });

        // Publication route-model binding
        $router->bind('publications', function($id)
        {
            return \App\Publication::findOrFail($id);
        });

        // Email route-model binding
        $router->bind('emails', function($id)
        {
            return \App\Email::findOrFail($id);
        });
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
