<?php

if (!function_exists('seo')) {
    function seo() {
        return [
            'title' => "Todo para Decoupage - Titina's",
            'description' => "Decoupage húmedo - Papel ilustración - Papel mate - Papel de seda - Etiquetas - Kraft",
            'keywords' => "Decoración, Decoupage, Papel, Ilustración, Mate, Seda, Etiquetas, Kraft"
        ];
    }
}

if (!function_exists('paragraph')) {
    function paragraph() {
        return "";
    }
}

function decoupage() {
    return [
        [// Etiquetas Latas Papel comun
            'title-nav' => 'Decoupage papel obra para latas',
            'title' => 'Decoupage latas',
            'description' => "Papel obra<br />
                            Etiquetas para LATAS<br />
                            Tomate 25cm<br />
                            Ananá 29cm<br />
                            Durazno 33cm",
            'image' => asset('/images/productos/decoupage/latas.webp'),
            'gallery' => 'productos/decoupage/latas'
        ],
        [// Tablitas papel común
            'title-nav' => 'Decoupage papel obra 12x30cm',
            'title' => 'Decoupage',
            'description' => "Papel obra<br />
                            Tamaño: 12x30cm",
            'image' => asset('/images/productos/decoupage/obra-12x30.webp'),
            'gallery' => 'productos/decoupage/obra-12x30'
        ],
        [// Decoupage en humedo 14x20
            'important' => true,
            'title' => 'Decoupage en húmedo',
            'description' => "<strong style='color:red'>!!! LIQUIDACIÓN !!!</strong><br />
                            Tamaño 14x20cm<br />
                            Presentación 4 unidades",
            'image' => asset('/images/productos/decoupage/humedo-14x20.webp'),
            'gallery' => 'productos/decoupage/humedo-14x20'
        ],
        [// Decoupage común A4
            'title-nav' => 'Decoupage papel obra A4',
            'title' => 'Decoupage A4',
            'description' => "Papel obra<br />
                            Tamaño 21x29cm<br />
                            Presentación: 3 unidades por modelo",
            'image' => asset('/images/productos/decoupage/obra-a4.webp'),
            'gallery' => 'productos/decoupage/obra-a4'
        ],        
        [// Decoupage común 30x30
            'title-nav' => 'Decoupage papel obra 30x30cm',
            'title' => 'Decoupage',
            'description' => "Papel obra<br />
                            Tamaño: 30x30cm<br />
                            Presentación: 3 unidades por modelo",
            'image' => asset('/images/productos/decoupage/obra-30x30.webp'),
            'gallery' => 'productos/decoupage/obra-30x30'
        ],
        [// Decoupage común A3
            'title' => 'Decoupage A3+',
            'description' => "Papel obra<br />
                            Tamaño: 32x47cm<br />
                            Presentación: 3 unidades por modelo",
            'image' => asset('/images/productos/decoupage/obra-a3-plus.webp'),
            'gallery' => 'productos/decoupage/obra-a3-plus'
        ],

        [// Kraft A4
            'title' => 'Inspiración Kraft A4',
            'description' => 'Inspirados en la decoración moderna<br />
                            Inspirados en "volver a lo natural"<br />
                            Impronta rústica sin agregados<br />
                            Se pegan con Pegamento Multipropósito o cola de carpintero<br />
                            Ideal para muebles: mesas, placard, cómodas, cajones y baules, etc.<br />
                            Tamaño: 21x29cm Muy fuertes - 80gr<br />
                            Presentación: 3 unidades por modelo',
            'image' => asset('/images/productos/decoupage/kraft-a4.webp'),
            'gallery' => 'productos/decoupage/kraft-a4'
        ],
        [// Kraft A3 
            'title' => 'Inspiración Kraft A3',
            'description' => 'Inspirados en la decoración moderna<br />
                            Inspirados en "volver a lo natural"<br />
                            Impronta rústica sin agregados<br />
                            Se pegan con Pegamento Multipropósito o cola de carpintero<br />
                            Ideal para muebles: mesas, placard, cómodas, cajones y baules, etc.<br />
                            Tamaño: A3, Muy fuertes - 80gr<br />
                            Presentación: 3 unidades por modelo',
            'image' => asset('/images/productos/decoupage/kraft-a3.webp'),
            'gallery' => 'productos/decoupage/kraft-a3'
        ],
        [// Decoupage Seda Hibrida
            'important' => true,
            'title' => 'Láminas de seda',
            'description' => "La aplicas sobre cualquier superficie, con el pegamento adecuado para cada superficie<br />
                            <strong style='color:red'>HASTA AGOTAR STOCK DE ESTOS MODELOS 20% DE DESCUENTO POR MAYOR</strong><br />
                            Para realizar Decoupage en todo tipo de superficies<br />
                            Pinta de un color claro previamente, ya que las láminas de seda son traslúcidas<br />
                            Aplicá barníz, cera, laca o el material que más te guste directamente sobre la lámina<br />
                            Tamaño: 50x70cm<br />
                            Presentación: 2 unidades por modelo",
            'image' => asset('/images/productos/decoupage/seda-hibrida-50x70.webp'),
            'gallery' => 'productos/decoupage/seda-hibrida-50x70'
        ],
        [// Decoupage Seda Lavable [Stock: 2024-10-21]
            'title-nav' => 'Láminas de seda lavables 50x70cm',
            'title' => 'Láminas de seda lavables',
            'description' => "Láminas de seda de alta calidad de impresión<br />
                            La aplicas sobre cualquier superficie, con el pegamento adecuado para cada superficie, y depues la podes lavar<br />
                            Se pueden barnizar, sin mojar el pincel con agua.<br />
                            Se puede proteger con cualquier barniz al agua, lacas, cera, etc<br />
                            Tamaño: 50x70cm<br />
                            Presentación: 2 unidades por modelo",
            'image' => asset('/images/productos/decoupage/seda-lavable-50x70.webp'),
            'gallery' => 'productos/decoupage/seda-lavable-50x70',
            'links' => [
                [
                    'text' => '¿Viste nuestro video en Instagram?',
                    'href' => 'https://www.instagram.com/reel/CgPvB3oDzMb/?utm_source=ig_web_copy_link'
                ]
            ]
        ],
        [// Decoupage Seda Lavable [Stock: 2024-10-21]
            'title' => 'Láminas de seda lavables 22x36cm',
            'title' => 'Láminas de seda lavables',
            'description' => "Láminas de seda de alta calidad de impresión<br />
                            La aplicas sobre cualquier superficie, con el pegamento adecuado para cada superficie, y depues la podes lavar<br />
                            Se pueden barnizar, sin mojar el pincel con agua.<br />
                            Se puede proteger con cualquier barniz al agua, lacas, cera, etc<br />
                            Tamaño: 22x36cm<br />
                            Presentación: 2 unidades por modelo",
            'image' => asset('/images/productos/decoupage/seda-lavable-22x36.webp'),
            'gallery' => 'productos/decoupage/seda-lavable-22x36'
        ],
    ];
}