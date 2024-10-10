<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

include_once(app_path() . '/data/catalogos.php');

class CatalogosController extends Controller {
    public function index() {

        static::seo([
            'title' => "Catálogo de productos - Titinas",
            'description' => "Productos Exclusivos - Espatul-Art - Pasta cerámica sin horno - Efecto Gaudí - Tintas al alcohol - Craquelador 3D - Transferencias Multitransfer - Cartulinas",
            'keywords' => "Espatul-Art, Pasta, Cerámica, sin horno, Efecto, Gaudí, Tintas, Alcohol, Craquelador, 3D, Decoupage, ArteFrances, Cartulinas, Kraft, Multitransfer, Seda, Sellos, Stenciles, Transfer, Vinilo"
        ]);

        $exclusivos = exclusivos();
        $especiales = especiales();
        $generales = generales();
        
        return view('catalogos.index')
            ->with('exclusivos', $exclusivos)
            ->with('especiales', $especiales)
            ->with('generales', $generales);
    }
}