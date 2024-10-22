<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\VideosTraits;

class VideosController extends Controller {
    use VideosTraits;

    public function index() {
        include_once(app_path() . '/data/videos.php'); 
      
        static::seo(seo());

        $videos = VideosTraits::GetVideos(static::$seo, videos());

        return view('videos.index')
                ->with('chunks', $videos);
    }
}