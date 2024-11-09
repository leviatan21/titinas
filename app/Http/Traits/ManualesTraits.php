<?php

namespace App\Http\Traits;
use Illuminate\Support\Arr;

trait ManualesTraits {
    use AuthorsTraits;

    static $route = 'manuales';

    public static function GetPosts() {
        include_once(storage_path('app/data/manuales.php'));

        $posts = Arr::map(posts(), function(array $item) {
            return static::parsePost($item);
        });

        return collect($posts)->sortByDesc('datePublished');
    }

    public static function GetBySlug($slug='') {
        $posts  = static::GetPosts();

        $post   = $posts->filter(function($value, $key) use ($slug) {
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
        $author     = static::GetAuthor($slug);

        $filtered = $posts->filter(function($post) use ($slug) {
            return $post['author']['slug'] ?? '' === $slug;
        });

        return [
            'author' => $author,
            'posts' => $filtered ?? []
        ];
    }

    private static function parsePost($post) {
        $post['dateHumans'] = parseDate($post['dateModified'] ?? '');
        $post['image']      = parseAsset($post['image'] ?? '');
        $post['link']       = parseLink($post['title'] ?? '', static::$route);
        $post['author']     = static::parseAuthor($post['author'] ?? '');

        if (!empty($post['related-blog' ])) {
            $post['related-blog' ] = url($post['related-blog' ]);
        }

        if (!empty($post['related-links'])) {
            $post['related-links'] = static::parseLinks($post['related-links']);
        }

        if (!empty($post['related-videos'])) {
            $post['related-videos'] = static::parseLinks($post['related-videos']);
        }

        return $post;
    }

    private static function parseLinks(array $links=[]) {
        if (empty($links)) {
            return $links;
        }
        return Arr::map($links, function(array $item) {
            $item['href'] = url($item['href']);
            return $item;
        });
    }
}
