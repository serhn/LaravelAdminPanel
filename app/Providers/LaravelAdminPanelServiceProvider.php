<?php

namespace Serh\LaravelAdminPanel;

use Illuminate\Support\ServiceProvider;

class LaravelAdminPanelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dd("ddd");
        //
        $this->app->make('Serh\LaravelAdminPanel\Controllers\Admin\DashboardController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/view/admin', 'admin');
       /* $this->publishes(
            [
                __DIR__ . '/../../resources/view/admin' => resource_path("views") . "/admin",
            ],
            [
                __DIR__ . '/../../routes/admin.php' => base_path("routes") . "/admin.php",
            ]
        );
        */
        $this->loadRoutesFrom(__DIR__ . '/../../routes/admin.php');
    }
}
