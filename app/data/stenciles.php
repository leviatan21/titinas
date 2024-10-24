<?php

if (!function_exists('seo')) {
    function seo() {
        return[
            'title' => "Stenciles - Titina's",
            'description' => "Stenciles de 200 micrones - Aptos para todo tipo de manualidades, pintura en tela y repostería",
            'keywords' => "Stencil, Stenciles, Manualidades, Pintura, Tela, Repostería"
        ];
    }
}

if (!function_exists('paragraph')) {
    function paragraph() {
        return "Stenciles de excelente calidad<br />
        200 micrones - Garantia de durabilidad<br />
        Aptos para todo tipo de manualidades, pintura en tela y repostería";
    }
}

function stenciles() {
    // Stenciles
    return [
        [
            'title' => 'Set para puntillismo',
            'description' => "Se venden por set de 9 U distintas",
            'image' => asset('/images/productos/stenciles/set-puntillismo-azul.webp'),
            'gallery' => ''
        ],
        [
            'title-nav' => 'Stenciles 5x24cm',
            'title' => 'Stenciles',
            'description' => "Tamaño: de 5x24cm",
            'image' => asset('/images/productos/stenciles/5x24.webp'),
            'gallery' => 'productos/stenciles/5x24'
        ],
        [
            'title-nav' => 'Stenciles 17x17cm',
            'title' => 'Stenciles',
            'description' => "Tamaño: de 17x17cm",
            'image' => asset('/images/productos/stenciles/17x17.webp'),
            'gallery' => 'productos/stenciles/17x17'
        ],
        [
            'title-nav' => 'Stenciles 27x12cm',
            'title' => 'Stenciles',
            'description' => "Tamaño: de 27x12cm",
            'image' => asset('/images/productos/stenciles/27x12.webp'),
            'gallery' => 'productos/stenciles/27x12'
        ],
        [
            'title-nav' => 'Stenciles 20x30cm',
            'title' => 'Stenciles',
            'description' => "Tamaño: de 20x30cm",
            'image' => asset('/images/productos/stenciles/20x30.webp'),
            'gallery' => 'productos/stenciles/20x30'
        ],
        [
            'title' => 'Stenciles',
            'description' => "Tamaño: de 30x30cm",
            'image' => asset('/images/productos/stenciles/30x30.webp'),
            'gallery' => 'productos/stenciles/30x30'
        ],
        [
            'title' => 'Stenciles',
            'description' => "Tamaño: de 40x55cm",
            'image' => asset('/images/productos/stenciles/40x55.webp'),
            'gallery' => 'productos/stenciles/40x55'
        ],
    ];
}
