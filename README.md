

### install spatie/laravel-permission

https://docs.spatie.be/laravel-permission/v3/installation-laravel/


### run seed

RolesAndPermissionsSeeder.php


### add midelware

app/Http/Kernel.php

```php
protected $routeMiddleware = [
    // ...
    'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
    'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
    'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
];

protected $middlewareGroups = [
    'web' => [
        //....
    ],

    'admin' => [
        'web',
        'auth',
        'role:admin'
    ],

    'api' => [
        //...
    ],
];
```

### add route

app\Providers\RouteServiceProvider

```php
public function map()
{
    $this->mapApiRoutes();

    $this->mapWebRoutes();
    
    $this->mapAdminRoutes();

    //
}


protected function mapAdminRoutes()
{
            Route::prefix('admin')
            ->middleware('admin')
            ->namespace($this->namespace.'\Admin')
            ->group(base_path('routes/admin.php'));
}
```

```sh
npm install @fortawesome/fontawesome-free --save-dev
```

## add sass

```scss
@import '~@fortawesome/fontawesome-free/scss/fontawesome.scss';
@import "~@fortawesome/fontawesome-free/scss/solid.scss";
@import "~@fortawesome/fontawesome-free/scss/regular.scss";
@import "~@fortawesome/fontawesome-free/scss/brands.scss";
```


```
npm install startbootstrap-sb-admin-2 --save-dev
```

```scss
@import '~startbootstrap-sb-admin-2/scss/sb-admin-2';
```

app.js

```js
require('bootstrap');
require('startbootstrap-sb-admin-2/js/sb-admin-2');

```



