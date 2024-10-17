<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Controllers\Controller;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
    //  api: __DIR__.'/../routes/api.php',
    //  commands: __DIR__.'/../routes/console.php',
    //  health: '/up',
        then: function () {
            Route::namespace('Artisan')->prefix('artisan')->name('artisan.')->group(__DIR__.'/../routes/artisan.php');
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
        new Controller();
    })->create();
