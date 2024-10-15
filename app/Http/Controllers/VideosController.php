<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\VideosTraits;

include_once(app_path() . '/data/videos.php');

class VideosController extends Controller {
    use VideosTraits;

    public function index() {
        
        static::seo([
            'title' => "Videos - Titinas",
            'description' => 'Videos en vivo - mirá el que más te guste - Youtube - Facebook',
            'keywords' => "Multitransfer, Stencil, Cerámica, Tintas, Gaudí, Láminas, Decoupage, Bandejas"
        ]);

        $videos = VideosTraits::GetVideos(static::$seo);

        return view('videos.index')
                ->with('chunks', $videos);
    }
}