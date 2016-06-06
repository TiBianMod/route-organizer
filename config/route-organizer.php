<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route Path
    |--------------------------------------------------------------------------
    |
    | This is the path to store all your route files
    */
    'routePath' => app_path('Http/Routes'),

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware are run during every request to your application.
    | https://laravel.com/docs/master/middleware
    */
    'middleware' => [
        'web'
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespace
    |--------------------------------------------------------------------------
    |
    | This namespace is applied to your controller routes.
    */
    'namespace' => 'App\Http\Controllers',

];
