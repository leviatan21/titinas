<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Carbon::setLocale('es');
    }

    /**
     * Register any application services.
     */
    public function register() {
        //
    }
}
