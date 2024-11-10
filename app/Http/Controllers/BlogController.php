<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\BlogTraits;
use App\Http\Traits\PaginateTraits;
use App\Http\Traits\SchemaMarkupTraits;

class BlogController extends Controller {
    use BlogTraits, PaginateTraits, SchemaMarkupTraits;

    public function index() {

        $posts  = BlogTraits::GetPosts();

        [
            'items'     => $items,
            'paginator' => $paginator
        ] = PaginateTraits::Paginate($posts);

        $authors            = BlogTraits::GetAuthors();
        $cats               = BlogTraits::GetCategories();
        $catsDescriptions   = BlogTraits::GetCategoriesDescription();
        $tags               = BlogTraits::GetTag();
        $tagsDescriptions   = BlogTraits::GetTagDescription();

        static::Seo([
            'title' => "El blog de Titina's",
            'description' => "$catsDescriptions",
            'keywords' => "$tagsDescriptions"
        ]);

        return view('blog.index')
            ->with('posts', $items)
            ->with('authors', collect($authors)->unique('slug')->take(6))
            ->with('cats', collect($cats)->unique('slug')->take(6))
            ->with('tags', collect($tags)->unique('slug')->take(6))
            ->with('paginator', $paginator);
    }

    public function post($slug='') {

        [
            'post'  => $post, 
            'prev'  => $prev, 
            'next'  => $next
        ] = BlogTraits::GetBySlug($slug);

        if (!$post) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No existe el postoeo para {$slug}"],
                404
            );
        }

        $post['schemamarkup'] = SchemaMarkupTraits::BlogPosting(static::$seo, $post);

        static::Seo([
            'title' => "Posteo {$post['title']}",
            'description' => $post['content'][0],
            'keywords' => ""
        ]);

        return view('blog.post')
            ->with('post', $post)
            ->with('prev', $prev)
            ->with('next', $next);
    }

    public function author($slug='') {

        $content = BlogTraits::GetAuthor($slug);
        if (!$content) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No hay contenido para el autor {$slug}"],
                404
            );
        }

        [
            'posts'     => $posts,
            'author'    => $author
        ] = BlogTraits::GetByAuthor($slug);

        [
            'items'     => $items,
            'paginator' => $paginator
        ] = PaginateTraits::Paginate($posts);

        $author = array_merge($author, $content);

        static::Seo([
            'title' => "\"{$author['title']}\" escribe en el blog de Titina's",
            'description' => "{$author['title']} - {$author['content'][0]}"
        ]);

        return view('blog.posts')
            ->with('author', $author)
            ->with('posts', $items)
            ->with('paginator', $paginator);
    }

    public function categoria($slug='') {

        [
            'posts'     => $posts,
            'category'  => $category
        ] = BlogTraits::GetByCategory($slug);

        if (!$category) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No hay posteos para la categoría {$slug}"],
                404
            );
        }

        $cats = BlogTraits::GetCategoriesDescription();

        [
            'items'     => $items,
            'paginator' => $paginator
        ] = PaginateTraits::Paginate($posts);

        static::Seo([
            'title' => "Posteos para la categoría \"{$category['title']}\"",
            'description' => "Categorías - $cats"
        ]);

        return view('blog.posts')
            ->with('posts', $items)
            ->with('paginator', $paginator);
    }

    public function tag($slug='') {

        [
            'posts' => $posts,
            'tag'   => $tag
        ] = BlogTraits::GetByTag($slug);

        if (!$tag) {
            return response()->view(
                'blog.no-posts',
                ['title' => "No hay posteos para el tag {$slug}"],
                404
            );
        }

        $tags = BlogTraits::GetTagDescription();

        [
            'items'     => $items,
            'paginator' => $paginator
        ] = PaginateTraits::Paginate($posts);

        static::Seo([
            'title' => "Posteos para el tag \"{$tag['title']}\"",
            'description' => "Tags: $tags"
        ]);

        return view('blog.posts')
            ->with('posts', $items)
            ->with('paginator', $paginator);
    }
}
