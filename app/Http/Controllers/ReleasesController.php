<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ReleasesController extends Controller {

    public function march2025() {
        static::Seo([
            'title' => "Lanzamientos Marzo 2025"
        ]);
        /*
        https://github.com/pipwerks/PDFObject?tab=readme-ov-file
        https://pdfobject.com/api/#pdfopenparams
        https://pdfobject.com/examples/pdf-open-params.html
        */
        return view('releases.march2025');
    }
}
