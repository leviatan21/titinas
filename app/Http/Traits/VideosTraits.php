<?php

namespace App\Http\Traits;

use App\Http\Traits\SchemaMarkupTraits;

trait VideosTraits {

    public static function GetVideos($seo, $items) {

        foreach($items as $index => $item) {
            $items[$index]['image']         = parseAsset($item['image']);
            $items[$index]['dateHumans']    = parseDate($item['datePublished'] ?? '');
            $items[$index]['schemamarkup']  = SchemaMarkupTraits::VideoObject($seo, $item);
        }

        return collect($items)->sortByDesc('datePublished')->chunk(3);
    }
}
