<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RedirectController extends Controller {

    public function index(Request $request) {
        $link   = null;
        $to     = $request->input('to', null);

        if ($to == 'shop') {
            $link = config('custom.tienda', null);
        }

        if ($to == 'catalogos') {
            $link = config('custom.drivePdf', null);
        }

        if ($link) {
            Log::channel('Redirection')->info('Page:', ['page' => $link]);
            return redirect()->away($link)->send();
        }

        return redirect('/');
    }

    static function renovado($route, $extension) {
        Log::channel('Renewal')->info('Page:', ['page' => "{$route}.{$extension}"]);
        return redirect('/sitio-renovado', 301);
    }
}
