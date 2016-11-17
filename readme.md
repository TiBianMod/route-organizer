## Route Organizer for Laravel
Route Organizer for Laravel is simple route solution to organize your Routes.

### Install

Require this package with composer using the following command
```
composer require tibian/route-organizer
```

### Usage

Open `App\Providers\RouteServiceProvider` on method `mapWebRoutes` / `mapApiRoutes` define new Routes for the Application.

```php
new RouteOrganizer('routes/web');
new RouteOrganizer('routes/api');
```

### Example for web routes
> ##### Note: The same you can do of course and for the api Routes

```php
protected function mapWebRoutes()
{
    Route::group([
        'middleware' => 'web',
        'namespace' => $this->namespace,
    ], function ($router) {
        new RouteOrganizer('routes/web'); // new Web Routes for the Application
        require base_path('routes/web.php');
    });
}
```

> Now you can Organize your Routes as you wish.
> * The following example is the best if you use PHPStorm and Laravel Plugin

```
/path/to/laravel/routes/web
    │   routes.php
    │
    └───Auth
    │   routes.php
    │
    └───Blog
    │   routes.php
    │
    └───Dashboard
    │   │   routes.php
    │   │
    │   └───Admin
    │       routes.php
    │
    └───Pages
    │   routes.php
    │
    └───etc...
```

##### Any idea for new projects, feel free to Contact me.

##### Thank you for visiting my Repository.