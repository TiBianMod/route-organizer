## Route Organizer for Laravel
Route Organizer is simple route solution for Laravel.

### Install
Require this package with composer using the following command
```
composer require tibian/route-organizer
```
After updating composer, add the service provider to the providers array in config/app.php
```
TiBian\RouteOrganizer\RouteOrganizerServiceProvider::class,
```

### Usage
The default Route path is `app/Http/Routes`,
now under this entry point you can organize your Routes like you wish.

### Example
```
Routes (app/Http/Routes)
    │   routes.php
    │
    └───Pages
    │   routes.php
    │
    └───Auth
    │   routes.php
    │
    └───Dashboard
    │   │   routes.php
    │   │
    │   └───Admin
    │       routes.php
    │
    └───Blog
    │   routes.php
    │
    └───etc...
```

### Config
You can also publish the config file to change it as you wish.
```
php artisan vendor:publish --provider="TiBian\RouteOrganizer\RouteOrganizerServiceProvider" --tag=config
```

### I'm looking for:
- Individuals who can contribute to the Documentation.
- Participation in other Open Source Projects.

> Visit my Web Site and learn more [about me](https://tibian.me)

##### Any idea for new projects, feel free to Contact me.

##### Thank you for visiting my Repository.
