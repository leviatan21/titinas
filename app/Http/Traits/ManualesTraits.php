<?php

namespace App\Http\Traits;

trait ManualesTraits {

    static $route = 'manuales';

    public static function GetPosts() {
        include_once(storage_path('app/data/manuales.php'));

        $posts = posts();
        foreach($posts as $index => $item) {
            $posts[$index] = static::parsePost($item);
        }

        return collect($posts);
    }

    public static function GetBySlug($slug='') {
        $posts  = static::GetPosts();

        $post   = $posts->filter( function($value, $key) use ($slug) {
            return $value['link']['slug'] == $slug;
        })->first();

        $prev   = $posts->before($post);
        $next   = $posts->after($post);

        return [
            'post' => $post,
            'prev' => $prev,
            'next' => $next,
        ];
    }

    public static function GetByAuthor($slug='') {
        $posts      = static::GetPosts();
        $filtered   = [];
        $author     = [];

        foreach($posts as $post) {
            if (!isset($post['author'])) { continue; }
            if ($post['author']['slug'] === $slug) {
                $author     = $post['author'];
                $filtered[] = $post;
            }
        }

        return [
            'author' => $author,
            'posts' => collect($filtered)
        ];
    }

    public static function GetAuthor($slug='') {
        include_once(storage_path('app/data/authors.php'));

        $authors = authors();
        return ($authors[$slug] ?? []);
    }

    private static function parsePost($post) {
        $post['dateHumans'] = parseDate($post['dateModified'] ?? '');
        $post['link']       = static::parseLink($post['title'] ?? '');
        $post['author']     = static::parseAuthor($post['author'] ?? '');
        return $post;
    }

    private static function parseLink($string='') {
        $route = static::$route;
        $slug = parseSlug($string, '-');
        $href = url( "/$route/$slug" );
        return [
            'title' => 'Seguir leyendo',
            'slug'  => $slug,
            'href'  => $href
        ];
    }

    private static function parseAuthor($string='') {
        $route = static::$route;
        $slug = parseSlug($string, '-');
        $href = url( "/$route/author/$slug" );
        return [
            'title' => $string,
            'slug'  => $slug,
            'href'  => $href
        ];
    }
}