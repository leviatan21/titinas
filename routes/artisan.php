<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtisanController;

Route::get( '/',                    [ArtisanController::class, 'index']                )->name('artisan.index');