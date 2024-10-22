<?php

function seo() {
    return [
        'title' => "Productos para el arte y la creatividad - Titina's",
        'description' => "Espatul-art - Pasta cerámica sin horno - Efecto Gaudí - Tintas al alcohol - Textura piedra - Craquelador 3D - Efecto óxido",
        'keywords' => "espatul-art, Pasta, cerámica, sin horno, Efecto, Gaudí, Tintas, Textura, piedra, Craquelador 3D, Efecto óxido, Titina's",
    ];
}

function paragraph() {
    return ;
}

function productos() {
    return [
        [
            'alt' => 'exclusivos',
            'href' => url('/productos/exclusivos'),
            'image' => asset('/images/home/productos/exclusivos.webp')
        ],
        [
            'alt' => 'transferencias',
            'href' => url('/productos/transferencias'),
            'image' => asset('/images/home/productos/transferencias.webp')
        ],
        [
            'alt' => 'decoupage',
            'href' => url('/productos/decoupage'),
            'image' => asset('/images/home/productos/decoupage.webp')
        ],
        [
            'alt' => 'cartulinas',
            'href' => url('/productos/cartulinas'),
            'image' => asset('/images/home/productos/cartulinas.webp')
        ],
        [
            'alt' => 'autoadhesivos',
            'href' => url('/productos/autoadhesivos'),
            'image' => asset('/images/home/productos/autoadhesivos.webp')
        ],
        [
            'alt' => 'vinilos',
            'href' => url('/productos/vinilos'),
            'image' => asset('/images/home/productos/vinilos.webp')
        ],
        [
            'alt' => 'sublimacion',
            'href' => url('/productos/sublimacion'),
            'image' => asset('/images/home/productos/sublimacion.webp')
        ],
        [
            'alt' => 'arte frances',
            'href' => url('/productos/arte-frances'),
            'image' => asset('/images/home/productos/arte-frances.webp')
        ],
        [
            'alt' => 'sellos',
            'href' => url('/productos/sellos'),
            'image' => asset('/images/home/productos/sellos.webp')
        ],
        [
            'alt' => 'stenciles',
            'href' => url('/productos/stenciles'),
            'image' => asset('/images/home/productos/stenciles.webp')
        ],
        [
            'alt' => 'herramientas',
            'href' => url('/productos/herramientas'),
            'image' => asset('/images/home/productos/herramientas.webp')
        ],
        [
            'alt' => 'pinturas',
            'href' => url('/productos/pinturas'),
            'image' => asset('/images/home/productos/pinturas.webp')
        ],
    ];
}