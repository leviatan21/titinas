<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class ComerciosController extends Controller {
    public function index() {
        include_once(storage_path('app/data/comercios.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = comercios();

        static::seo($seo);

        $comercios = Arr::map($items, function(array $item) {
            return collect($item)->sortBy('name');
        });

        return view('comercios.index')
            ->with('paragraph', $paragraph)
            ->with('comercios', $comercios);
    }
}