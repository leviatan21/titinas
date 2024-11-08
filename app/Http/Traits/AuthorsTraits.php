<?php

namespace App\Http\Traits;

trait AuthorsTraits {

    public static function GetAuthor($slug='') {
        include_once(storage_path('app/data/authors.php'));

        $author = authors()[$slug] ?? null;
        if (!$author) {
            return [];
        }

        $author['image'] = asset($author['image']);

        return $author;
    }

    private static function parseAuthor($string='') {
        return parseLink($string, static::$route.'/author', $string);
    }
}
