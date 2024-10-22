<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class ComerciosController extends Controller {
    public function index() {
        include_once(app_path() . '/data/comercios.php');

        static::seo(seo());

        $comercios = Arr::map(comercios(), function(array $item) {
            return collect($item)->sortBy('name');
        });

        return view('comercios.index')
                ->with('comercios', $comercios);
    }
}