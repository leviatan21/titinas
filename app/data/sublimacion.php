<?php

if (!function_exists('seo')) {
    function seo() {
        return [
            'title' => "Láminas para sublimación - Titina's",
            'description' => "Láminas para sublimación realziadas con tintas de calidad profesional",
            'keywords' => "Láminas, sublimación, impresión"
        ];
    }
}

if (!function_exists('paragraph')) {
    function paragraph() {
        return "<p>Nuestras láminas están realziadas con tintas de calidad profesional<br />Super pliegos - Super precio - Super calidad</p>
                <p>El proceso de la sublimación en impresión se produce cuando la tinta para sublimación pasa del estado sólido (tinta sobre el papel) al estado gaseoso.<br />Especialmente se utiliza en telas, de alto grado de poliester.</p>
                <p>Los materiales rígidos sobre los que puede aplicarse deben tener aplicado un barniz especial que permite la sublimación.<br />Madera, metal, azulejos, loza, etc.</p>
                <p>Mediante esta técnica, se consigue que la impresión penetre de manera permanente en el material, proporcionando así que los colores se mantengan vivos y permiten ser lavados infinidad de veces sin perder su calidad.</p>";
    }
}

function sublimacion() {
    // Sublimación en pliegos
    return [
        [
            'title' => 'Sublimación por pliego',
            'description' => "Tamaño: 15x15cm<br />
                            Presentación: pliegos de 32x80cm con 10 imágenes",
            'image' => asset('/images/productos/sublimacion/S01.webp'),
            'gallery' => 'productos/sublimacion/S01'
        ],
        [
            'title' => 'Sublimación por pliego',
            'description' => "Tamaño: 20x30cm<br />
                            Presentación: pliegos de 32x80cm con 4 imágenes",
            'image' => asset('/images/productos/sublimacion/S20.webp'),
            'gallery' => 'productos/sublimacion/S20'
        ],
        [
            'title-nav' => 'Sublimación por pliego 20x30cm',
            'title' => 'Sublimación por pliego',
            'description' => "Motivos Navideños<br />
                            Tamaño: 20x30cm<br />
                            Presentación: pliegos de 32x80cm con 4 imágenes",
            'image' => asset('/images/productos/sublimacion/S20-nav.webp'),
            'gallery' => 'productos/sublimacion/S20-nav'
        ],
        [
            'title' => 'Sublimación por pliego',
            'description' => "Tamaño: 30x30cm<br />
                           Presentación: pliegos de 32x100cm con 3 imágenes",
            'image' => asset('/images/productos/sublimacion/S30.webp'),
            'gallery' => 'productos/sublimacion/S30'
        ],
        [
            'title-nav' => 'Sublimación por pliego 30x30cm',
            'title' => 'Sublimación por pliego',
            'description' => "Motivos Navideños<br />
                            Tamaño: 30x30cm<br />
                            Presentación: pliegos de 32x100cm con 3 imágenes",
            'image' => asset('/images/productos/sublimacion/S30-nav.webp'),
            'gallery' => 'productos/sublimacion/S30-nav'
        ],
    ];
}