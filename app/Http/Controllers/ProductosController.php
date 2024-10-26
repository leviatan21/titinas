<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\Http\Traits\SchemaMarkupTraits;
use App\Http\Traits\ProductosTraits;

class ProductosController extends Controller {
    //
    public function index() {
        include_once(storage_path('app/data/home.php'));

        [
            'seo-productos'=> $seo,
            'paragraph' => $paragraph,
            'productos' => $productos
        ] = home();

        static::seo($seo);

        return view('productos.index')
            ->with('paragraph', $paragraph)
            ->with('products', $productos);
    }
    //
    public function exclusivos() {
        include_once(storage_path('app/data/exclusivos.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = exclusivos();

        static::seo($seo);

        $items = Arr::map($items, function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Product(static::$seo, $item);
            return $item;
        });

        return view('productos.exclusivos')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function pasta() {
        include_once(storage_path('app/data/galeria-pasta.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items 
        ] = pasta();

        static::seo($seo);

        $items = ProductosTraits::parsePHP($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function tintas() {
        include_once(storage_path('app/data/galeria-tintas.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = tintas();

        static::seo($seo);

        $items = ProductosTraits::parsePHP($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function navidad() {

        static::seo([
            'title' => "Materiales para navidad Titina's",
            'description' => "Sellos de Goma - Stenciles - Vinilos - Sublimación - Transferencia - Multitransfer - Autoadhesivo - Etiquetas - Decoupage - Láminas de seda",
            'keywords' => "Sello, Stencil, Vinilos, Sublimación, Transferencia, Multitransfer, Autoadhesivo, Etiquetas, Decoupage, Láminas "
        ]);

        $items = ProductosTraits::filterNAV();

        return view('productos.navidad')
            ->with('productos', $items);
    }
    //
    public function transferencias() {
        include_once(storage_path('app/data/productos/transferencias.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = transferencias();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function decoupage() {
        include_once(storage_path('app/data/productos/decoupage.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = decoupage();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function cartulinas() {
        include_once(storage_path('app/data/productos/cartulinas.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = cartulinas();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function autoadhesivos() { 
        include_once(storage_path('app/data/productos/autoadhesivos.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items 
        ] = autoadhesivos();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function vinilos() {
        include_once(storage_path('app/data/productos/vinilos.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = vinilos();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function sublimacion() {
        include_once(storage_path('app/data/productos/sublimacion.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = sublimacion();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function artefrances() {
        include_once(storage_path('app/data/productos/artefrances.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = artefrances();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function sellos() {
        include_once(storage_path('app/data/productos/sellos.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = sellos();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
    //
    public function stenciles() {
        include_once(storage_path('app/data/productos/stenciles.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = stenciles();

        static::seo($seo);

        $items = ProductosTraits::parseJSON($items);

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $items);
    }
}