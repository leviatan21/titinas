<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Traits\SchemaMarkupTraits;

include_once(app_path() . '/data/videos.php');

class VideosController extends Controller {
    public function index() {
        
        $videos = videos();
        $description = 'Videos en vivo - mirá el que más te guste - Facebook ;)';

        $videos = static::parseVideos($videos);

        static::seo([
            'title' => "Videos - Titinas",
            'description' => $description,
            'keywords' => ""
        ]);

        $chunks = collect($videos)->chunk(3);

        return view('videos.index')
                ->with('chunks', $chunks);
    }
    private static function parseVideos($videos) {
        foreach($videos as $index => $item) {
            $videos[$index]['dateHumans']   = static::parseDate($item['datePublished'] ?? '');
            $videos[$index]['schemamarkup'] = SchemaMarkupTraits::VideoObject(static::$seo, $item);
        }
        return $videos;
    }

    private static function parseDate($string='') {
        return Carbon::parse($string)->diffForHumans();
    }
}