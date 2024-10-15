<?php

namespace App\Http\Traits;

use App\Http\Traits\SchemaMarkupTraits;
use Carbon\Carbon;

include_once(app_path() . '/data/videos.php');

trait VideosTraits {
    public static function GetVideos($seo) {
        $videos = videos();

        foreach($videos as $index => $item) {
            $videos[$index]['dateHumans']   = static::parseDate($item['datePublished'] ?? '');
            $videos[$index]['schemamarkup'] = SchemaMarkupTraits::VideoObject($seo, $item);
        }

        return collect($videos)->chunk(3);
    }

    private static function parseDate($string='') {
        return Carbon::parse($string)->diffForHumans();
    }
}