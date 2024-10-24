<?php

if (!function_exists('seo')) {
    function seo() {
        return [
            'title' => "Láminas autoadhesivas - Titina's",
            'description' => "",
            'keywords' => ""
        ];
    }
}

if (!function_exists('paragraph')) {
    function paragraph() {
        return "";
    }
}

function autoadhesivos() {
    return [
        [// Etiquetas Latas adhesivas
            'title-nav' => 'Etiquetas Autoadhesivas para latas',
            'title' => 'Etiquetas autoadhesivas',
            'description' => "Etiquetas para LATAS<br />
                            Papel ilustración<br />
                            Tomate 25cm<br />
                            Ananá 29cm<br />
                            Durazno 33cm",
            'image' => asset('/images/productos/autoadhesivos/latas.webp'),
            'gallery' => 'productos/autoadhesivos/latas'
        ],
        [// Tablitas autoadhesivas
            'title-nav' => 'Etiquetas Autoadhesivas 12x30cm',
            'title' => 'Etiquetas autoadhesivas',
            'description' => "Papel ilustración<br />
                            Tamaño: 12x30cm",
            'image' => asset('/images/productos/autoadhesivos/tablitas.webp'),
            'gallery' => 'productos/autoadhesivos/tablitas'
        ],
        [// Decoupage Adhesivo 14x20 Sin Troquel
            'title-nav' => 'Papel Mate Autoadhesivo 14x20cm',
            'title' => 'Papel mate Autoadhesivo',
            'description' => "Tamaño 14x20cm<br />
                            Presentación: 4 unidades por modelo",
            'image' => asset('/images/productos/autoadhesivos/mate-14x20.webp'),
            'gallery' => 'productos/autoadhesivos/mate-14x20'
        ],
        [// Decoupage Adhesivo A4
            'title' => 'Autoadhesivo A4',
            'description' => "Papel obra satinado",
            'image' => asset('/images/productos/autoadhesivos/decoupage-a4.webp'),
            'gallery' => 'productos/autoadhesivos/decoupage-a4'
        ],
        [// Decoupage Adhesivo 30x30
            'title-nav' => 'Papel Ilustracion Autoadhesivo 30x30cm',
            'title' => 'Papel ilustracion Autoadhesivo',
            'description' => "Tamaño: 30x30cm",
            'image' => asset('/images/productos/autoadhesivos/ilustracion-30x30.webp'),
            'gallery' => 'productos/autoadhesivos/ilustracion-30x30'
        ],
        [// Decoupage ilustracion A3 Autoadhesivo
            'title' => 'Autoadhesivo A3+',
            'description' => "Papel Ilustración<br />
                            Tamaño: 32x47cm",
            'image' => asset('/images/productos/autoadhesivos/ilustracion-a3-plus.webp'),
            'gallery' => '/productos/autoadhesivos/ilustracion-a3-plus',
        ],
    ];
}