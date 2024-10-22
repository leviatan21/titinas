<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index() {

        static::seo([
            'title' => "Materiales para el arte decorativo y la creatividad",
            'description' => "Titina's materiales para el arte y la creatividad, videos explicativos, cursos",
            'keywords' => "Titina's, materiales, arte, creatividad, exclusivos, transferencias, decoupage, cartulinas, autoadhesivos, vinilos, sublimación, arte frances, sellos, stenciles",
        ]);

        include_once(app_path() . '/data/slider.php');
        $slider = slider();

        include_once(app_path() . '/data/productos.php');
        $products = productos();

        return view('home.index')
            ->with('slider', $slider)
            ->with('products', $products);
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