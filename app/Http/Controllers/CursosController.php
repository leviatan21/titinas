<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\SchemaMarkupTraits;

class CursosController extends Controller {
    public function index() {

        static::seo([
            'title' => "Cursos y seminarios a distancia - Titinas",
            'description' => "Cursos y seminarios en videos - Efecto Gaudí - Pasta cerámica sin horno - Titinas",
            'keywords' => "Compras, Cursos, Seminarios, Gaudí, Pasta Cerámica, Espatul-art, Efecto oxido, Videos, Azulejos, Espejos, Grabado, Estampados",
        ]);

        include_once(app_path() . '/data/cursos.php');
        $horizontal = cursosHorizontal();
        foreach($horizontal as $index => $item) {
            foreach($item['steps'] as $key => $step) {
                $step['title'] = "{$item['title']}: {$step['title']}";
                $horizontal[$index]['steps'][$key]['schemamarkup'] = SchemaMarkupTraits::Course(static::$seo, static::$config, $step);
            }
        }

        $vertical = cursosVertical();
        foreach($vertical as $index => $item) {
            $vertical[$index]['schemamarkup'] = SchemaMarkupTraits::Course(static::$seo, static::$config, $item);
        }

        return view('cursos.index')
            ->with('horizontal', $horizontal)
            ->with('vertical', $vertical);
    }
}