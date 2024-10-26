<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\VideosTraits;

class VideosController extends Controller {
    use VideosTraits;
    
    public function index() {

        include_once(storage_path('app/data/videos.php'));

        [
            'seo'       => $seo,
            'paragraph' => $paragraph,
            'items'     => $items
        ] = videos();

        static::seo($seo);

        $items = VideosTraits::GetVideos(static::$seo, $items);

        return view('videos.index')
                ->with('paragraph', $paragraph)
                ->with('videos', $items);
    }
}