<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CatalogosController extends Controller {
    public function index() {
        include_once(app_path() . '/data/catalogos.php');

        static::seo(seo());

        $exclusivos = exclusivos();
        $especiales = especiales();
        $generales  = generales();
        
        return view('catalogos.index')
            ->with('exclusivos', $exclusivos)
            ->with('especiales', $especiales)
            ->with('generales', $generales);
    }
}