<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ComerciosController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\RenewalController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ManualesController;
use App\Http\Controllers\ReleasesController;

// Global .html redirection
Route::get( '{any}.{extension}', function($route, $extension) { 
    return RedirectController::renovado($route, $extension);
})->where(['any'=>'([^\s"]+)', 'extension'=>'(php7|php|html|htm)'])->name('old');

Route::get( '/',                        [HomeController::class, 'index']                )->name('web.home');
Route::get( '/catalogos',               [CatalogosController::class, 'index']           )->name('web.catalogos');
Route::get( '/contacto',                [ContactoController::class, 'index']            )->name('web.contacto');
Route::get( '/comercios',               [ComerciosController::class, 'index']           )->name('web.comercios');
Route::get( '/historia',                [HomeController::class, 'historia']             )->name('web.historia');
Route::get( '/videos',                  [VideosController::class, 'index']              )->name('web.videos');
Route::get( '/sitio-renovado',          [RenewalController::class, 'index']             )->name('renovado');
Route::get( '/redirect',                [RedirectController::class, 'index']            )->name('redireccion');
Route::get( '/lanzamientos-marzo-2025', [ReleasesController::class, 'march2025']        )->name('lanzamientos.marzo.2025');

Route::prefix('/cursos')->group(function() {
    Route::get( '/',              [CursosController::class, 'index']                )->name('web.cursos');
    Route::get( '/capacitacion-efecto-gaudi-2025',  [CursosController::class, 'capacitacionEfectoGaudi2025']       )->name('web.capacitacion-efecto-gaudi-2025');
});
Route::prefix('/productos')->group(function() {
    Route::get( '/',               [ProductosController::class, 'index']            )->name('web.productos');
    Route::prefix('/exclusivos')->group(function () {
        Route::get( '/',                            [ProductosController::class, 'exclusivos']  )->name('web.exclusivos');
        Route::get( '/pasta-ceramica-sin-horno',    [ProductosController::class, 'pasta']       )->name('web.pasta-ceramica-sin-horno');
        Route::get( '/tintas-al-alcohol',           [ProductosController::class, 'tintas']      )->name('web.tintas-al-alcohol');
    });
    Route::get( '/navidad',         [ProductosController::class, 'navidad']         )->name('navidad');
    Route::get( '/transferencias',  [ProductosController::class, 'transferencias']  )->name('web.transferencias');
    Route::get( '/decoupage',       [ProductosController::class, 'decoupage']       )->name('web.decoupage');
    Route::get( '/cartulinas',      [ProductosController::class, 'cartulinas']      )->name('web.cartulinas');
    Route::get( '/autoadhesivos',   [ProductosController::class, 'autoadhesivos']   )->name('web.autoadhesivos');
    Route::get( '/vinilos',         [ProductosController::class, 'vinilos']         )->name('web.vinilos');
    Route::get( '/sublimacion',     [ProductosController::class, 'sublimacion']     )->name('web.sublimacion');
    Route::get( '/arte-frances',    [ProductosController::class, 'artefrances']     )->name('web.artefrances');
    Route::get( '/sellos',          [ProductosController::class, 'sellos']          )->name('web.sellos');
    Route::get( '/stenciles',       [ProductosController::class, 'stenciles']       )->name('web.stenciles');
    Route::get( '/herramientas',    [HomeController::class, 'proximamente']         )->name('web.herramientas');
    Route::get( '/pinturas',        [HomeController::class, 'proximamente']         )->name('web.pinturas');
    // https://titinas.com.ar/productos/Transferencia/A4%20NEGRAS/pages/LT128.htm
    Route::fallback([RenewalController::class, 'index']);
});
Route::prefix('/blog')->group(function () {
    Route::get( '/',                 [BlogController::class, 'index']               )->name('web.blog');
    Route::get( '/{post}',           [BlogController::class, 'post']                )->name('blog.post');
    Route::get( '/author/{author}',  [BlogController::class, 'author']              )->name('blog.author');
    Route::get( '/categoria/{cat}',  [BlogController::class, 'categoria']           )->name('blog.categoria');
    Route::get( '/tag/{tag}',        [BlogController::class, 'tag']                 )->name('blog.tag');
});
Route::prefix('/manuales')->group(function () {
    Route::get( '/',                 [ManualesController::class, 'index']           )->name('web.manuales');
    Route::get( '/{post}',           [ManualesController::class, 'post']            )->name('manuales.post');
    Route::get( '/author/{author}',  [ManualesController::class, 'author']          )->name('manuales.author');
});