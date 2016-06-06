<?php

namespace TiBian\RouteOrganizer;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class RouteOrganizerServiceProvider
 *
 * @package TiBian\RouteOrganizer
 */
class RouteOrganizerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/../config/route-organizer.php' => config_path('route-organizer.php'),
        ], 'config');

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapRoutes($router);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/route-organizer.php', 'route-organizer');
    }

    /**
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    protected function mapRoutes(Router $router)
    {
        $router->group([
            'namespace' => config('route-organizer.namespace'),
            'middleware' => config('route-organizer.middleware'),
        ], function ($router) {
            new RouteOrganizer();
        });
    }
}
