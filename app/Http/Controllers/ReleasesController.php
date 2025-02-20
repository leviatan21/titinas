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

        /*
            <style>
                .pdfobject-container { height: 100vh; border: 1px solid #ccc; }
                </style>
                <div id="efecto-gaudi-black-edition"></div>
                <script src="https://unpkg.com/pdfobject"></script>
                
                <script>
                    PDFObject.embed(
                        '{{asset('/pdf/lanzamientos-efecto-gaudi-black-edition.pdf')}}',
                        "#efecto-gaudi-black-edition",
                        {
                            'title':'Lanzamientos Marzo 2025',
                            'forcePDFJS':false,
                            'forceIframe':true,
                            //'fallbackLink':false,
                            'fallbackLink': "<p>Clique <a target='_blank' href='{{asset('/pdf/lanzamientos-efecto-gaudi-black-edition.pdf')}}'>aqui</a> si el PDF no se muestra</p>",
                            'pdfOpenParams':{'view':'Fit', 'page':'1', 'zoom':'100', 'toolbar':0, 'statusbar':0}
                        }
                    );
                </script>
            */
        return view('releases.march2025');
    }
}
