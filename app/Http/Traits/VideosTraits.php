<?php

namespace App\Http\Traits;

use App\Http\Traits\SchemaMarkupTraits;
use Carbon\Carbon;

trait VideosTraits {
    public static function GetVideos($seo, $items) {

        foreach($items as $index => $item) {
            $items[$index]['dateHumans']   = static::parseDate($item['datePublished'] ?? '');
            $items[$index]['schemamarkup'] = SchemaMarkupTraits::VideoObject($seo, $item);
        }

        return collect($items)->chunk(3);
    }

    private static function parseDate($string='') {
        return Carbon::parse($string)->diffForHumans();
    }
}