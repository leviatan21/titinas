<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

include_once(app_path() . '/data/productos.php');

class HomeController extends Controller {
    public function index() {

        static::seo([
            'title' => "Bienvenidos a Titina's materiales para el arte y la creatividad",
            'description' => "Titina's materiales para el arte y la creatividad, videos explicativos, cursos",
            'keywords' => "Titina's, materiales, arte, creatividad, exclusivos, transferencias, decoupage, cartulinas, autoadhesivos, vinilos, sublimación, arte frances, sellos, stenciles",
        ]);

        $slider = [
            [
                'href' => url('/manuales'),
                'image' => asset('/images/home/slider/manuales.webp'),
                'alt' => 'Manual de técnicas decorativas'
            ],
            [
                'href' => url('/historia'),
                'image' => asset('/images/home/slider/historia.webp'),
                'alt' => 'Un poco de historia'
            ],
            [
                'href' => url('/videos'),
                'image' => asset('/images/home/slider/videos.webp'),
                'alt' => 'Algunos videos en vivo'
            ],
        ];

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