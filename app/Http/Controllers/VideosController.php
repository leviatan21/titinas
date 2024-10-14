<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\SchemaMarkupTraits;

include_once(app_path() . '/data/videos.php');

class VideosController extends Controller {
    public function index() {
        
        $videos = videos();
        $description = 'Videos en vivo - mirá el que más te guste - Facebook ;)';

        foreach ($videos as $index => $video) {
            $description .= " - {$video['title']}";
            $videos[$index]['schemamarkup'] = SchemaMarkupTraits::VideoObject(static::$seo, $video);
        }

        static::seo([
            'title' => "Videos - Titinas",
            'description' => $description,
            'keywords' => ""
        ]);

        $chunks = collect($videos)->chunk(3);

        return view('videos.index')
                ->with('chunks', $chunks);
    }
}