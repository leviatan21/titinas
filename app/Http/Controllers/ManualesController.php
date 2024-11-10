<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\ManualesTraits;
use App\Http\Traits\PaginateTraits;
use App\Http\Traits\SchemaMarkupTraits;

class ManualesController extends Controller {
    use ManualesTraits, PaginateTraits, SchemaMarkupTraits;

    public function index() {

        $posts  = ManualesTraits::GetPosts();

        [
            'items'     => $items, 
            'paginator' => $paginator
        ] = PaginateTraits::Paginate($posts);

        static::Seo([
            'title' => "Los manuales de Titina's"
        ]);

        return view('manuales.index')
            ->with('posts', $items)
            ->with('paginator', $paginator);
    }

    public function post($slug='') {

        [
            'post'  => $post, 
            'prev'  => $prev, 
            'next'  => $next
        ] = ManualesTraits::GetBySlug($slug);

        if (!$post) {
            return response()->view(
                'manuales.no-posts',
                ['title' => "No existe el manual para {$slug}"],
                404
            );
        }

        $post['schemamarkup'] = SchemaMarkupTraits::ManualPosting(static::$seo, $post);

        static::Seo([
            'title' => "Manual {$post['title']}",
            'description' => $post['description'],
            'keywords' => ""
        ]);

        return view('manuales.post')
            ->with('post', $post)
            ->with('prev', $prev)
            ->with('next', $next);
    }

    public function author($slug='') {

        $content = ManualesTraits::GetAuthor($slug);
        if (!$content) {
            return response()->view(
                'manuales.no-posts',
                ['title' => "No hay contenido para el autor {$slug}"],
                404
            );
        }

        [
            'posts'     => $posts,
            'author'    => $author
        ] = ManualesTraits::GetByAuthor($slug);

        [
            'items'     => $items,
            'paginator' => $paginator
        ] = PaginateTraits::Paginate($posts);

        $author = array_merge($author, $content);

        static::Seo([
            'title' => "\"{$author['title']}\" escribe manuales para Titina's",
            'description' => "{$author['title']} - {$author['content'][0]}"
        ]);

        return view('manuales.posts')
            ->with('author', $author)
            ->with('posts', $items)
            ->with('paginator', $paginator);
    }
}
