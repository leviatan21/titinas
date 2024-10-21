<?php

function cartulinas() {
    return [
        [// Cartulinas Simple Faz
            'title' => 'Cartulinas Simple Faz',
            'description' => "Tamaño: A4 21x29cm<br />
                            180gr.<br />
                            Presentación: 2u x modelo",
            'image' => asset('/images/productos/cartulinas/simple-faz.webp'),
            'gallery' => 'productos/cartulinas/simple-faz'
        ],
        [// Cartulinas doble Faz
            'title' => 'Cartulinas doble Faz',
            'description' => "Tamaño: A3+ 32x47cm<br />
                            180gr.<br />
                            Presentación: 2u x modelo",
            'image' => asset('/images/productos/cartulinas/doble-faz.webp'),
            'gallery' => '/productos/cartulinas/doble-faz'
        ]
    ];
}