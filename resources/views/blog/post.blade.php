@extends('layouts.app')

@section('content')
<div class="container">

    <article class="post type-post status-publish">
        @if(!empty($post['image']))
        <div class="post-media">
            <img src="{{$post['image']}}" alt="{{$post['title']}}"
                class="card-img-top" width="1200"
                decoding="async" loading="lazy" fetchpriority="auto"
            />
        </div>
        @endif

        @include('components.share')

        <header class="page-header">
            <h1 class="page-title">{!!$post['title']!!}</h1>

            <span class="border-divider"></span>

            @if(!empty($post['dateHumans']))
            <div class="post-meta clearfix">
                <span class="post-date">{{$post['dateHumans']}}</span>
            </div>
            @endif
        </header>

        <div class="post-content">
            @foreach ($post['content'] as $content)
            <p>{!!$content!!}</p>
            @endforeach
        </div>

        @if (!empty($post['related-blog']))
            <div class="related-posts">
                <h2 class="h4">También te puede interesar:</h2>
                <div class="row">
                    @foreach ($post['related-blog'] as $item)
                    <section class="col col-6">
                        <h3 class="h5"><a href="{{$item['href']}}" rel="opener noreferrer follow">{{$item['text']}}</a></h3>
                    </section>
                    @endforeach
                </div>
            </div>
        @endif

        @if (!empty($post['related-links']))
            <div class="related-posts">
                <h2 class="h4">En Titina's tenemos toda esta gama de productos:</h2>
                <div class="row">
                    @foreach ($post['related-links'] as $item)
                    <section class="col col-6">
                        <h3 class="h5"><a href="{{$item['href']}}" rel="opener noreferrer follow">{{$item['text']}}</a></h3>
                    </section>
                    @endforeach
                </div>
            </div>
        @endif

        @if (!empty($post['related-manual']))
            <div class="related-posts">
                <h2 class="h4">Manual de esta técnica</h2>
                <div class="row">
                    @foreach ($post['related-manual'] as $item)
                    <section class="col col-6">
                        <h3 class="h5"><a href="{{$item['href']}}" rel="opener noreferrer follow">{{$item['text']}}</a></h3>
                    </section>
                    @endforeach
                </div>
            </div>
        @endif

        <footer class="post-footer">

            @if(!empty($post['author']['title']))
            <div class="post-author">
                Por&nbsp;<a href="{{$post['author']['href']}}" title="{{$post['author']['title']}}" rel="author">{{$post['author']['title']}}</a>
            </div>
            @endif

            @if(!empty($post['category']))
            <div class="post-categories">
                @foreach ($post['category'] as $category)
                <a href="{{$category['href']}}" rel="category">{{$category['title']}}</a>
                @endforeach
            </div>
            @endif

            @if(!empty($post['tag']))
            <div class="post-tags">
                @foreach ($post['tag'] as $tag)
                <a href="{{$tag['href']}}" rel="tag">{{$tag['title']}}</a>
                @endforeach
            </div>
            @endif

        </footer>

        @if (!empty($post['schemamarkup']))
        @include('components.schemamarkup', ['schemamarkup'=>$post['schemamarkup']])
        @endif
    </article>

    @if (!empty($prev) || !empty($next))
    @include('components.single-navigation', ['prev'=>$prev, 'next'=>$next])
    @endif

</div>
@endsection
