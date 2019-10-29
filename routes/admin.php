<?php

Route::group(
    [
        'prefix' => 'adm1n',
        'middleware' => ['admin'],
        'namespace' => 'Serh\LaravelAdminPanel\Controllers\Admin'
    ],

    function () {
        Route::get('/settings/{tab?}', 'SettingsController@index')->name('settings');
        Route::resource('/orders', 'OrderController');
        Route::resource('/users', 'UserController');
        Route::resource('/groups', 'GroupController');
        Route::resource('/', 'DashboardController');
    }
);
