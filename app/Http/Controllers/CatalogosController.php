<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CatalogosController extends Controller {
    public function index() {
        include_once(storage_path('app/data/catalogos.php'));

        [
            'seo'       => $seo, 
            'paragraph' => $paragraph,
            'exclusivos'=> $exclusivos,
            'especiales'=> $especiales,
            'generales' => $generales
        ] = catalogos();

        static::seo($seo);

        return view('catalogos.index')
            ->with('paragraph', $paragraph)
            ->with('exclusivos', $exclusivos)
            ->with('especiales', $especiales)
            ->with('generales', $generales);
    }
}