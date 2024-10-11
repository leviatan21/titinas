<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Traits\BlogTraits;
use App\Http\Traits\PaginateTraits;
use App\Http\Traits\SchemaMarkupTraits;

include_once(app_path() . '/data/blog-posts.php');

class BlogController extends Controller {
    use BlogTraits, PaginateTraits, SchemaMarkupTraits;

    public function index() {
        static::seo([
            'title' => "",
            'description' => "",
            'keywords' => ""
        ]);

        $posts = BlogTraits::GetPosts();

        ['items'=>$items,'paginator'=>$paginator] = PaginateTraits::Paginate($posts);

        return view('blog.index')
                ->with([
                    'posts' => $items,
                    'paginator' => $paginator,
                ]);
    }

    public function post($slug='') {

        ['post'=>$post, 'prev'=>$prev, 'next'=>$next] = BlogTraits::GetBySlug($slug);

        if (!$post) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No existe el postoeo para {$slug}"],
                404
            );
        }

        $post['schemamarkup'] = SchemaMarkupTraits::BlogPosting(static::$seo, $post);

        static::seo([
            'title' => "",
            'description' => "",
            'keywords' => ""
        ]);

        return view('blog.post')
                ->with([
                    'post' => $post,
                    'prev' => $prev,
                    'next' => $next
                ]);
    }

    public function categoria($slug='') {

        ['posts'=>$posts,'category'=>$category] = BlogTraits::GetByCategory($slug);

        if (!$category) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No hay posteos para la categoría {$slug}"],
                404
            );
        }

        ['items'=>$items,'paginator'=>$paginator] = PaginateTraits::Paginate($posts);

        static::seo([
            'title' => "Posteos para la categoría \"{$category['title']}\"",
            'description' => "",
            'keywords' => "",
        ]);

        return view('blog.posts')
                ->with([
                    'posts' => $items,
                    'paginator'=> $paginator
                ]);
    }

    public function tag($slug='') {

        ['posts'=>$posts,'tag'=>$tag] = BlogTraits::GetByTag($slug);

        if (!$tag) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No hay posteos para el tag {$slug}"],
                404
            );
        }

        ['items'=>$items,'paginator'=>$paginator] = PaginateTraits::Paginate($posts);

        static::seo([
            'title' => "Posteos para el tag \"{$tag['title']}\"",
            'description' => "",
            'keywords' => ""
        ]);

        return view('blog.posts')
                ->with([
                    'posts' => $items,
                    'paginator'=> $paginator
                ]);
    }

    public function author($slug='') {

        ['posts'=>$posts,'author'=>$author] = BlogTraits::GetByAuthor($slug);

        if (!$author) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No hay posteos para el autor {$slug}"],
                404
            );
        }

        ['items'=>$items,'paginator'=>$paginator] = PaginateTraits::Paginate($posts);

        $content = BlogTraits::GetAuthor($slug);

        static::seo([
            'title' => "Posteos para el autor \"{$author['title']}\"",
            'description' => "",
            'keywords' => ""
        ]);

        return view('blog.posts')
                ->with([
                    'author' => array_merge($author, $content),
                    'posts' => $items,
                    'paginator'=> $paginator
                ]);
    }
}