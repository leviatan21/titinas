<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\Http\Traits\SchemaMarkupTraits;
use App\Http\Traits\ProductosTraits;

class ProductosController extends Controller {
    // OK
    public function index() {

        static::seo([
            'title' => "Materiales para el arte y la creatividad - Titina's",
            'description' => "Espatul-art - Pasta cerámica sin horno - Efecto Gaudí - Tintas al alcohol - Textura piedra - Craquelador 3D - Efecto óxido",
            'keywords' => "espatul-art, Pasta, cerámica, sin horno, Efecto, Gaudí, Tintas, Textura, piedra, Craquelador 3D, Efecto óxido, Titina's",
        ]);

        include_once(app_path() . '/data/productos.php');
         $products = productos();

        return view('productos.index')
            ->with('products', $products);
    }
    // OK
    public function exclusivos() {
        static::seo([
            'title' => "Productos Exclusivos - Titina's",
            'description' => "Espatul-Art - Pasta cerámica sin horno - Efecto Gaudí, Tintas al alcohol - Textura piedra - Craquelador 3D - Efecto óxido",
            'keywords' => "Espatul-Art, Pasta, cerámica, sin horno, Efecto, Gaudí, Tintas, Textura piedra, Craquelador 3D, Efecto óxido"
        ]);

        include_once(app_path() . '/data/exclusivos.php');
        $productos = Arr::map(exclusivos(), function(array $item) {
            $item['schemamarkup'] = SchemaMarkupTraits::Product(static::$seo, $item);
            return $item;
        });

        return view('productos.exclusivos')
            ->with('productos', $productos);
    }
    // OK
    public function pasta() {
        static::seo([
            'title' => "Pasta cerámica sin horno - Titina's",
            'description' => "Pasta cerámica sin horno en polvo presentación en bolsa de un kilo",
            'keywords' => "Pasta, cerámica, sin horno, Trabajos, Talleres, Souvenirs"
        ]);

        $paragraph = "<p>La mejor opción para desarrollar tu hobby con esta pasta cerámica de fácil preparación y de secado al aire, no requiere horneado. Sólo hay que mezclar el producto con agua. Una vez amasada queda una arcilla blanca de textura suave y fina al tacto, sin olor. Prepará la porción de material que vayas a usar, por ejemplo 250gr para un plato de 15cm y 6mm de espesor.</p>
                    <p>Es muy maleable, ideal para modelar. Podés crear todo tipo de objetos decorativos de uso en seco, bijou, souvenires, platos, cuencos, alhajeros, porta sahumerios, portavelas, luminarias y muchos adornos más.</p>
                    <p>Con varillas niveladoras y palo de amasar se pueden hacer planchas y copiar por afuera moldes de cuencos o cajas de bordes redondeados. Pueden copiarse por adentro platos o formas de concavidad suave, también se puede usar en moldes de silicona de molduras y apliques florales.</p>
                    <p>La pasta cerámica no contrae, no se achica. Tiene un acabado similar al bizcocho cerámico. El secado a temperatura ambiente oscila entre uno y cuatro días, ese tiempo variará dependiendo de las condiciones climáticas, la humedad ambiente, el tamaño y espesor de la pieza. Luego de las primeras 24hs, se debe desmoldar, y pasadas las 48hs se puede colocar la pieza al sol o cerca de una fuente de calor para completar la evaporación del agua.</p>
                    <p>La pasta cerámica se puede teñir con pigmentos secos durante la preparación o pintar la pieza una vez seca con pinturas acrílicas, a la tiza, tintas, acuarelas, esmaltes, lacas y barnices.</p>
                    <p>Es poco recomendable exponer la pieza al aire libre, puesto que la lluvia o humedad constantes terminarían degradando el material, los objetos creados con pasta cerámica se pueden impermeabilizar con productos especiales para frentes y ladrillos. Es importante elegir un buen barniz o laca poliuretánica que sea para exterior. La pasta cerámica no es apta para uso culinario o alimenticio, las piezas no resisten la exposición constante al agua, pero se pueden limpiar con un trapo húmedo.</p>";

        include_once(app_path() . '/data/galeria-pasta.php');
        $productos = ProductosTraits::parsePHP(galeriaPasta());

        return view('productos.fancybox')
                ->with('paragraph', $paragraph)
                ->with('productos', $productos);
    }
    // OK
    public function tintas() {
        static::seo([
            'title' => "Tintas al alcohol - Titina's",
            'description' => "Las tintas al alcohol para sellos de goma - Fondos sobre papeles - Técnica de scrapbooking - Tarjetería y mix media",
            'keywords' => "Tintas, alcohol, sellos, papeles, Scrapbooking, Tarjetería, Pincel, Teñir"
        ]);

        $paragraph = "<p>Las tintas al alcohol se utilizan para sellos de goma en su función más básica y para hacer fondos sobre distintos papeles en la técnica de scrapbooking, tarjetería y mix media</p>
                    <p>También se pueden utilizar para pintar a pincel<br />Sirven asimismo para teñir barnices<br />Los trabajos se protejen con barniz al agua a gusto<br /></p>
                    <p>Pueden ver el programa Manos a la Obra en el que se utilizó las tintas y la Cerámica sin horno de Titinas<br /><a href='https://youtu.be/oPB1Xj6NKt8' target='_blank' rel='opener noreferrer nofollow'>Manos a la Obra - Lanzamiento de Tintas al alcohol</a><p>";

        include_once(app_path() . '/data/galeria-tintas.php');
        $productos = ProductosTraits::parsePHP(galeriaTintas());

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-18
    public function transferencias() {
        static::seo([
            'title' => "Láminas de Transferencia y Multitransfer - Titina's",
            'description' => "Transferencia - Tintas negas - Tintas color - Línea Oro - Línea Sepia - Multitransfer",
            'keywords' => "Papel especial, Calidad, Pultas, Tintas, Oro, Sepia, Multitransfer"
        ]);

        include_once(app_path() . '/data/transferencias.php');
        $productos = ProductosTraits::parseJSON(transferencias());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-19
    public function decoupage() {
        static::seo([
            'title' => "Todo para Decoupage - Titina's",
            'description' => "Decoupage húmedo - Papel ilustración - Papel mate - Papel de seda - Etiquetas - Kraft",
            'keywords' => "Decoración, Decoupage, Papel, Ilustración, Mate, Seda, Etiquetas, Kraft"
        ]);

        include_once(app_path() . '/data/decoupage.php');
        $productos = ProductosTraits::parseJSON(decoupage());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-19
    public function cartulinas() {
        static::seo([
            'title' => "Cartulinas - Titina's",
            'description' => "Cartulinas Simple Faz, Doble Faz, Cartulinas para Scrapbooking y manualidades",
            'keywords' => "Cartulinas, Simple faz, Doble faz, Packs, Scrapbooking, Manualidades"
        ]);

        include_once(app_path() . '/data/cartulinas.php');
        $productos = ProductosTraits::parseJSON(cartulinas());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-21 -SEO
    public function autoadhesivos() { 
        static::seo([
            'title' => "Láminas autoadhesivas - Titina's",
            'description' => "",
            'keywords' => ""
        ]);

        include_once(app_path() . '/data/autoadhesivos.php');
        $productos = ProductosTraits::parseJSON(autoadhesivos());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-18
    public function vinilos() {
        static::seo([
            'title' => "Vinilos - Titina's",
            'description' => "Vinilos transparentes - esmerilados - blanco mate - Para vidrio, acetato, acrílico, plástico y madera - Excelente terminación y protección",
            'keywords' => "Vinilos, Transparentes, Esmerilados, Blanco, Mate"
        ]);

        include_once(app_path() . '/data/vinilos.php');
        $productos = ProductosTraits::parseJSON(vinilos());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-21
    public function sublimacion() {
        static::seo([
            'title' => "Láminas para sublimación - Titina's",
            'description' => "Láminas para sublimación realziadas con tintas de calidad profesional",
            'keywords' => "Láminas, sublimación, impresión"
        ]);

        $paragraph ="<p>Nuestras láminas están realziadas con tintas de calidad profesional<br />Super pliegos - Super precio - Super calidad</p>
                    <p>El proceso de la sublimación en impresión se produce cuando la tinta para sublimación pasa del estado sólido (tinta sobre el papel) al estado gaseoso.<br />Especialmente se utiliza en telas, de alto grado de poliester.</p>
                    <p>Los materiales rígidos sobre los que puede aplicarse deben tener aplicado un barniz especial que permite la sublimación.<br />Madera, metal, azulejos, loza, etc.</p>
                    <p>Mediante esta técnica, se consigue que la impresión penetre de manera permanente en el material, proporcionando así que los colores se mantengan vivos y permiten ser lavados infinidad de veces sin perder su calidad.</p>";

        include_once(app_path() . '/data/sublimacion.php');
        $productos = ProductosTraits::parseJSON(sublimacion());

        return view('productos.fancybox')
            ->with('paragraph', $paragraph)
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-19
    public function artefrances() {
        static::seo([
            'title' => "Laminas para Arte Frances - Titina's",
            'description' => "Técnica Decorativa Bidimensional, que consiste en transformar una imagen plana, en otra con relieve y profundidad que da un aspecto Natural y Realista",
            'keywords' => "Arte ,Frances, Técnica, Decorativa, Bidimensional, Relieve, Realista"
        ]);

        include_once(app_path() . '/data/artefrances.php');
        $productos = ProductosTraits::parseJSON(artefrances());

        return view('productos.fancybox')
            ->with('productos', $productos);
    }
    // OK Stock 2024-10-19
    public function sellos() {
        static::seo([
            'title' => "Sellos bajo relieve - Titina's",
            'description' => "Sellos bajo relieve - Goma de 5.5mm color gris",
            'keywords' => "Sello, Sellos, Goma"
        ]);

        $paragraph = "Diseños con mucho detalle<br />
                     Goma de 5.5mm color gris";

        include_once(app_path() . '/data/sellos.php');
        $productos =  ProductosTraits::parseJSON(sellos());

        return view('productos.fancybox')
                ->with('paragraph', $paragraph)
                ->with('productos', $productos);
    }
    // OK Stock 2024-10-19
    public function stenciles() {
        static::seo([
            'title' => "Stenciles - Titina's",
            'description' => "Stenciles de 200 micrones - Aptos para todo tipo de manualidades, pintura en tela y repostería",
            'keywords' => "Stencil, Stenciles, Manualidades, Pintura, Tela, Repostería"
        ]);

        $paragraph = "Stenciles de excelente calidad<br />
                200 micrones - Garantia de durabilidad<br />
                Aptos para todo tipo de manualidades, pintura en tela y repostería";

        include_once(app_path() . '/data/stenciles.php');
        $productos = ProductosTraits::parseJSON(stenciles());

        return view('productos.fancybox')
                ->with('paragraph', $paragraph)
                ->with('productos', $productos);
    }
}