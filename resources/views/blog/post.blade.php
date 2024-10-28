@extends('layouts.app')

@section('content')
<div class="page-content py-4">
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

                @if(!empty($post['author']['title']))
                <div class="post-author">
                    By&nbsp;<a href="{{$post['author']['href']}}" title="{{$post['author']['title']}}" rel="author">{{$post['author']['title']}}</a>
                </div>
                @endif

            </footer>

            @if (!empty($post['schemamarkup']))
            @include('components.schemamarkup', ['schemamarkup' => $post['schemamarkup'] ])
            @endif
        </article>
    </div>

    @if (!empty($prev) || !empty($next))
    <div class="container">
        <div class="single-navigation">
            @if (!empty($prev))
            <div class="previous-post">
                @if (!empty($prev['image']))
                <div class="post-media">
                    <a href="{{$prev['link']['href']}}" title="{{$prev['title']}}">
                        <img src="{{$prev['image']}}" alt="{{$prev['title']}}" 
                            class="img-fluid" width="75"
                            decoding="async" loading="lazy" fetchpriority="auto"
                        />
                    </a>
                </div>
                @endif

                <div class="post-content">
                    <div class="arrow-post">
                        @include('components.svg.arrow-left-long')&nbsp;Anterior
                    </div>
                    <a href="{{$prev['link']['href']}}" title="{{$prev['title']}}">
                        <div class="post-title">{{$prev['title']}}</div>
                    </a>
                </div>
            </div>
            @endif

            @if (!empty($next))
            <div class="next-post">
                @if (!empty($next['image']))
                <div class="post-media">
                    <a href="{{$next['link']['href']}}" title="{{$next['title']}}">
                        <img src="{{$next['image']}}" alt="{{$next['title']}}" 
                            class="img-fluid" width="75"
                            decoding="async" loading="lazy" fetchpriority="auto"
                        />
                    </a>
                </div>
                @endif
                <div class="post-content">
                    <div class="arrow-post">
                        @include('components.svg.arrow-right-long')&nbsp;Siguiente
                    </div>
                    <a href="{{$next['link']['href']}}" title="{{$next['title']}}">
                        <div class="post-title">{{$next['title']}}</div>
                    </a>
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>

</div>
@endsection
