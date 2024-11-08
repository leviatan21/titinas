<?php

namespace App\Http\Traits;

trait BlogTraits {
    use AuthorsTraits;

    static $route = 'blog';

    public static function GetPosts() {

        include_once(storage_path('app/data/blog.php'));

        $posts = posts();
        foreach($posts as $index => $item) {
            $posts[$index] = static::parsePost($item);
        }

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

        foreach($post['category'] as $index => $item) {
            $post['category'][$index] = static::parseCategory($item);
        }

        foreach($post['tag'] as $index => $item) {
            $post['tag'][$index] = static::parseTag($item);
        }

        return $post;
    }

    private static function parseCategory($string='') {
        return parseLink($string, static::$route.'/categoria', $string);
    }

    private static function parseTag($string='') {
        return parseLink($string, static::$route.'/tag', $string);
    }
}
