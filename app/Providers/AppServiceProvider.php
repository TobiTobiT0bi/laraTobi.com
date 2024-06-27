<?php

namespace App\Providers;

use App\View\Components\Crud;
use App\View\Components\Form;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('form', Form::class);
        Blade::component('crud', Crud::class);
    }
}
