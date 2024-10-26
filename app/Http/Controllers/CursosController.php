<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\Http\Traits\SchemaMarkupTraits;

class CursosController extends Controller {
    public function index() {
        include_once(storage_path('app/data/cursos.php'));

        [ 'seo'=>$seo, 'paragraph'=>$paragraph, 'horizontal'=>$horizontal, 'vertical'=>$vertical ] = cursos();

        static::seo($seo);

        $horizontal = Arr::map($horizontal, function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Course(static::$seo, static::$config, $item);
            return $item;
        });

        $vertical = Arr::map($vertical, function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Course(static::$seo, static::$config, $item);
            return $item;
        });

        return view('cursos.index')
                ->with('paragraph', $paragraph)
                ->with('horizontal', $horizontal)
                ->with('vertical', $vertical);
    }
}