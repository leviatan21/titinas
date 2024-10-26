<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index() {
        include_once(storage_path('app/data/home.php'));

        [
            'seo-home'  => $seo,
            'slider'    => $slider,
            'productos' => $productos
        ] = home();

        static::seo($seo);

        return view('home.index')
            ->with('slider', $slider)
            ->with('products', $productos);
    }

    public function historia() {
        static::seo([
            'title' => "La historia de Titina's"
        ]);
        return view('historia.index');
    }

    public function proximamente() {
        return view('proximamente');
    }
}