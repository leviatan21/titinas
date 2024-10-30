@extends('layouts.app')

@section('content')

@section('css')
<style>
.page-content{background:linear-gradient(120deg,rgb(233,247,255) 0%,rgb(231,214,246) 100%);}
.panel{background-color:#FFFFFFD1;}.related-posts{background-color:#00000005;}
</style>
@endsection

<div class="container page-blog">

    @include('components.share')

    <div class="panel mt-4">
        <article class="post status-publish">
            @if(!empty($post['image']))
            <div class="post-media">
                <img src="{{$post['image']}}" alt="{{$post['title']}}"
                    class="card-img-top" width="1200"
                    decoding="async" loading="lazy" fetchpriority="auto"
                />
            </div>
            @endif

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
                    <h2 class="h5">También te puede interesar:</h2>
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
                    <h2 class="h5">En Titina's tenemos toda esta gama de productos:</h2>
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
                    <h2 class="h5">Manual de esta técnica</h2>
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
    </div>

    @if (!empty($prev) || !empty($next))
    @include('components.single-navigation', ['prev'=>$prev, 'next'=>$next])
    @endif

</div>
@endsection
