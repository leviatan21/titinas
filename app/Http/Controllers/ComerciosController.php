<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

include_once(app_path() . '/data/comercios.php');

class ComerciosController extends Controller {
    public function index() {

        static::seo([
            'title' => "Comercios y puntos de venta - Titinas",
            'description' => "Buscá el comercio que quede mas cerca de tu casa.",
            'keywords' => "venta, comercios, consultas, pedidos, contacto, caba, gba, provincias, argentina"
        ]);

        $comercios = comercios();

        foreach($comercios as $key => $comercio) {
            $comercios[$key] = collect($comercios[$key])->sortBy('name');
        }

        return view('comercios.index')
            ->with('comercios', $comercios);
    }
}