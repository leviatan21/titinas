<?php

function slider() {
    return [
        [
            'href' => url('/productos/navidad'),
            'image' => asset('/images/home/slider/navidad.webp'),
            'alt' => 'Todos nuestros productos de Navidad'
        ],
        [
            'href' => url('/historia'),
            'image' => asset('/images/home/slider/historia.webp'),
            'alt' => 'Un poco de historia'
        ],
        [
            'href' => url('/videos'),
            'image' => asset('/images/home/slider/videos.webp'),
            'alt' => 'Algunos videos en vivo'
        ],
        [
            'href' => url('/manuales'),
            'image' => asset('/images/home/slider/manuales.webp'),
            'alt' => 'Manual de técnicas decorativas'
        ],
    ];
}