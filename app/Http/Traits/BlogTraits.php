<?php

namespace App\Http\Traits;
use Illuminate\Support\Arr;

trait BlogTraits {
    use AuthorsTraits;

    static $route = 'blog';

    public static function GetPosts() {

        include_once(storage_path('app/data/blog.php'));

        $posts = Arr::map(posts(), function(array $item) {
            return static::parsePost($item);
        });

        return collect($posts)->sortByDesc('datePublished');
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
        $author     = static::GetAuthor($slug);

        $filtered = $posts->filter(function($post) use ($slug) {
            return $post['author']['slug'] ?? '' === $slug;
        });

        return [
            'author' => $author,
            'posts' => $filtered ?? []
        ];
    }

    public static function GetCategories() {
        $list       = [];
        $posts      = static::GetPosts();

        foreach($posts as $post) {
            foreach($post['category'] as $item) {
                $list[] = $item;
            }
        }

        return $list;
    }

    public static function GetAuthors() {
        $list       = [];
        $posts      = static::GetPosts();

        foreach($posts as $post) {
            $list[] = $post['author'];
        }

        return $list;
    }

    public static function GetCategoriesDescription() {
        $descriptions   = [];
        $list           = static::GetCategories();
        foreach($list as $item) {
            $descriptions[] = $item['title'];
        }
        return implode(' - ', $descriptions);
    }

    public static function GetTag() {
        $list       = [];
        $posts      = static::GetPosts();

        foreach($posts as $post) {
            foreach($post['tag'] as $item) {
                $list[] = $item;
            }
        }

        return $list;
    }

    public static function GetTagDescription() {
        $descriptions   = [];
        $list           = static::GetTag();
        foreach($list as $item) {
            $descriptions[] = $item['title'];
        }
        return implode(' - ', $descriptions);
    }

    public static function GetByCategory($slug='') {
        $posts      = static::GetPosts();
        $filtered   = [];
        $category   = [];

        foreach($posts as $post) {
            foreach($post['category'] as $item) {
                if ($item['slug'] === $slug) {
                    $category   = $item;
                    $filtered[] = $post;
                }
            }
        }

        return [
            'category' => $category,
            'posts' => collect($filtered)
        ];
    }

    public static function GetByTag($slug='') {
        $posts      = static::GetPosts();
        $filtered   = [];
        $tag        = [];
    
        foreach($posts as $post) {
            foreach($post['tag'] as $item) {
                if ($item['slug'] === $slug) {
                    $tag        = $item;
                    $filtered[] = $post;
                }
            }
        }
    
        return [
            'tag' => $tag,
            'posts' => collect($filtered)
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

        if (!empty($post['related-manual'])) {
            $post['related-manual'] = static::parseLinks($post['related-manual']);
        }

        if (!empty($post['category'])) {
            $post['category'] = Arr::map($post['category'] ,function($item) {
                return static::parseCategory($item);
            });
        }

        if (!empty($post['tag'])) {
            $post['tag'] = Arr::map($post['tag'] ,function($item) {
                return static::parseTag($item);
            });
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

    private static function parseCategory($string='') {
        return parseLink($string, static::$route.'/categoria', $string);
    }

    private static function parseTag($string='') {
        return parseLink($string, static::$route.'/tag', $string);
    }
}
