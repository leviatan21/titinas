<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

include_once(app_path() . '/data/cursos.php');
include_once(app_path() . '/helpers/schemamarkup-course.php');

class CursosController extends Controller {
    public function index() {

        static::seo([
            'title' => "Cursos y seminarios a distancia - Titinas",
            'description' => "Cursos y seminarios en videos - Efecto Gaudí - Pasta cerámica sin horno - Titinas",
            'keywords' => "Compras, Cursos, Seminarios, Gaudí, Pasta Cerámica, Espatul-art, Efecto oxido, Videos, Azulejos, Espejos, Grabado, Estampados",
        ]);

        $horizontal = cursosHorizontal();
        foreach($horizontal as $index => $item) {
            foreach($item['steps'] as $key => $step) {
                $horizontal[$index]['steps'][$key]['schemamarkup'] = SchemaMarkupCourse(static::$seo, static::$config, $step);
            }
        }

        $vertical = cursosVertical();
        foreach($vertical as $index => $item) {
            $vertical[$index]['schemamarkup'] = SchemaMarkupCourse(static::$seo, static::$config, $item);
        }

        return view('cursos.index')
            ->with('horizontal', $horizontal)
            ->with('vertical', $vertical);
    }
}