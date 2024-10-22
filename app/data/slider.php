<?php

function slider() {
    return [
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