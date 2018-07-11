<?php

namespace Company;

use Illuminate\Support\ServiceProvider;

class CompanyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'company');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/company'),
        ]);
    }

    public function register(){

    }
}