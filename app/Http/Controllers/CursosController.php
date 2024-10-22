<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\Http\Traits\SchemaMarkupTraits;

class CursosController extends Controller {
    public function index() {
        include_once(app_path() . '/data/cursos.php');

        static::seo(seo());

        $horizontal = Arr::map(horizontal(), function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Course(static::$seo, static::$config, $item);
            return $item;
        });

        $vertical = Arr::map(vertical(), function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Course(static::$seo, static::$config, $item);
            return $item;
        });

        return view('cursos.index')
                ->with('horizontal', $horizontal)
                ->with('vertical', $vertical);
    }
}