<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\Http\Traits\SchemaMarkupTraits;
use App\Http\Traits\ProductosTraits;

class ProductosController extends Controller {
    //
    public function index() {
        include_once(app_path() . '/data/productos.php');

        static::seo(seo());

        $products = productos();

        return view('productos.index')
            ->with('products', $products);
    }
    //
    public function exclusivos() {
        include_once(app_path() . '/data/exclusivos.php');

        static::seo();

        $productos = Arr::map(exclusivos(), function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Product(static::$seo, $item);
            return $item;
        });

        return view('productos.exclusivos')
            ->with('productos', $productos);
    }
    //
    public function pasta() {
        include_once(app_path() . '/data/galeria-pasta.php');

        static::seo(seo());

        $productos = ProductosTraits::parsePHP(pasta());

        $paragraph = paragraph();

        return view('productos.fancybox')
                ->with('productos', $productos)
                ->with('paragraph', $paragraph);
    }
    //
    public function tintas() {
        include_once(app_path() . '/data/galeria-tintas.php');

        static::seo(seo());

        $productos = ProductosTraits::parsePHP(tintas());

        $paragraph = paragraph();

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $productos);
    }
    //
    public function navidad() {

        static::seo([
            'title' => "Materiales para navidad  Titina's"
        ]);

        $productos = ProductosTraits::filterNAV();

        return view('productos.navidad')
            ->with('productos', $productos);

    }
    //
    public function transferencias() {
        include_once(app_path() . '/data/transferencias.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(transferencias());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    //
    public function decoupage() {
        include_once(app_path() . '/data/decoupage.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(decoupage());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    //
    public function cartulinas() {
        include_once(app_path() . '/data/cartulinas.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(cartulinas());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    //
    public function autoadhesivos() { 
        include_once(app_path() . '/data/autoadhesivos.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(autoadhesivos());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    //
    public function vinilos() {
        include_once(app_path() . '/data/vinilos.php');

        static::seo( seo());

        $productos = ProductosTraits::parseJSON(vinilos());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    //
    public function sublimacion() {
        include_once(app_path() . '/data/sublimacion.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(sublimacion());

        $paragraph = paragraph();

        return view('productos.fancybox')
                ->with('productos', $productos)
                ->with('paragraph', $paragraph);
    }
    //
    public function artefrances() {
        include_once(app_path() . '/data/artefrances.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(artefrances());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    //
    public function sellos() {
        include_once(app_path() . '/data/sellos.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(sellos());

        $paragraph = paragraph();

        return view('productos.fancybox')
                ->with('productos', $productos)
                ->with('paragraph', $paragraph);
    }
    //
    public function stenciles() {
        include_once(app_path() . '/data/stenciles.php');

        static::seo(seo());

        $productos = ProductosTraits::parseJSON(stenciles());

        $paragraph = paragraph();

        return view('productos.fancybox')
                ->with('productos', $productos)
                ->with('paragraph', $paragraph);
    }
}