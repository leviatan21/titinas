<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactoController extends Controller {
    public function index() {

        static::seo([
            'title' => "Contacto - Titinas",
            'description' => "Gestión de pedidos y entregas - Gestión artística",
            'keywords' => "Gestión, clientes, pedidos, entregas, artística, envíos, tiempos, pagos"
        ]);

        return view('contacto.index');
    }
}