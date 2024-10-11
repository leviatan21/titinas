<?php

namespace App\Http\Traits;

trait FancyboxTraits {
    public static function Gallery( $asset, $images ) {

        foreach($images as $index => $image) {
            $images[$index] = [
                'caption' => "- $image -",
                'src' => asset("$asset/$image.webp"),
                'thumbnail' => asset("$asset/thumbnails/$image.webp"),
            ];
        }

        return $images;
    }
}