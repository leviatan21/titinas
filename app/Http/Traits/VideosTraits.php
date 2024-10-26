<?php

namespace App\Http\Traits;

use App\Http\Traits\SchemaMarkupTraits;

trait VideosTraits {
    public static function GetVideos($seo, $items) {

        foreach($items as $index => $item) {
            $items[$index]['dateHumans']   = parseDate($item['datePublished'] ?? '');
            $items[$index]['schemamarkup'] = SchemaMarkupTraits::VideoObject($seo, $item);
        }

        return collect($items)->chunk(3);
    }
}