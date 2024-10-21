<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\File;

/**
 * use App\Http\Traits\FilesTraits;
 * 
 * $info = FilesTraits::File('images/home/productos/arte-frances.webp');
 * echo "<pre>"; print_r($info); die('</pre>');
 * 
 * $info = FilesTraits::Folder('images/home/productos');
 * echo "<pre>"; print_r($info); die('</pre>');
 */

trait FilesTraits {

    public static function Folder(string $path) { 
        $files_info = []; 
        foreach (File::allFiles(public_path($path)) as $file) {
            $files_info[] = static::Info($file);
        }
        return $files_info;
    }

    public static function File(string $path) { 
        $path = public_path($path);
        $file = new \SplFileInfo($path);
        return static::Info($file);
    }

    public static function Info($file) { 
        [$width, $height] = getimagesize($file);
        return [
            "name"      => $file->getFilename(),
            "ext"       => $file->getExtension(),
            "size"      => $file->getSize(),
            "width"     => $width,
            "height"    => $height
        ];
    }
}