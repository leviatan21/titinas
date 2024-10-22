<?php

function seo() {
    return [
        'title' => "Cartulinas - Titina's",
        'description' => "Cartulinas Simple Faz, Doble Faz, Cartulinas para Scrapbooking y manualidades",
        'keywords' => "Cartulinas, Simple faz, Doble faz, Packs, Scrapbooking, Manualidades"
    ];
}

function paragraph() {
    return ;
}

function cartulinas() {
    return [
        [// Cartulinas Simple Faz
            'title' => 'Cartulinas Simple Faz',
            'description' => "Tamaño: A4 21x29cm<br />
                            180gr.<br />
                            Presentación: 2 unidades por modelo",
            'image' => asset('/images/productos/cartulinas/simple-faz.webp'),
            'gallery' => 'productos/cartulinas/simple-faz'
        ],
        [// Cartulinas doble Faz
            'title' => 'Cartulinas doble Faz',
            'description' => "Tamaño: A3+ 32x47cm<br />
                            180gr.<br />
                            Presentación: 2 unidades por modelo",
            'image' => asset('/images/productos/cartulinas/doble-faz.webp'),
            'gallery' => '/productos/cartulinas/doble-faz'
        ]
    ];
}