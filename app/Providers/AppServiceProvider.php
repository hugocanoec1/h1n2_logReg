<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

// HRC - https://scotch.io/tutorials/user-authorization-in-laravel-54-with-spatie-laravel-permission
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

}
