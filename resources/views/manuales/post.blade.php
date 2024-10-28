@extends('layouts.app')

@section('content')
<div class="page-content page-manuals">
    <div class="container">
        @include('components.share')
        <div class="panel mt-4 mb-6">
            <article class="row manual-container post status-publish">

                <div class="col col-12 manual-header">
                    
                    @if(!empty($post['image']))
                    <div class="post-media">
                        <img src="{{$post['image']}}" alt="{{$post['title']}}"
                            class="card-img-top" width="1200" height="200"
                            decoding="async" loading="eager" fetchpriority="high"
                        />
                    </div>
                    @endif

                    <div class="manual-title @isset($post['image'])has-media @endisset">
                        <span class="leaf left">
                            @include('components.svg.leaf')
                        </span>
                        <div class="title">
                            Técnica
                            <h1>{{$post['title']}}</h1>
                        </div>
                        <span class="leaf right">
                            @include('components.svg.leaf')
                        </span>
                    </div>
                </div>

                @if(!empty($post['related-blog']))
                <div class="col col-12 manual-related">
                    <h2 class="h5">Características y particularidades:</h2>
                    <a 
                        href="{{$post['related-blog']}}" 
                        title="Leer nota en el blog" 
                        aria-label="Leer nota en el blog" 
                        data-toggle="tooltip" 
                        data-placement="right" 
                        class="link-icon" 
                        rel="opener noreferrer follow"
                    >
                        @include('components.svg.blog')
                    </a>
                </div>
                @endif

                @if(!empty($post['materiales']))
                <div class="col col-12 manual-materials">
                    <h2 class="h4">Materiales básicos:</h2>
                    <div class="post-content">
                        <p>{!! $post['materiales'] !!}</p>
                    </div>
                </div>
                @endif

                @if(!empty($post['instrucciones']))
                <div class="col col-12 manual-instructions">
                    <h2 class="h4">Instrucciones:</h2>
                    <div class="post-content">
                        @foreach ($post['instrucciones'] as $item)
                        <p>{!!$item!!}</p>
                        @endforeach
                    </div>
                </div>
                @endif

                @if(!empty($post['related-links']))
                <div class="col col-12 manual-links">
                    <h3 class="h5">En Titina's tenemos toda esta gama de productos:</h3>
                    <div class="post-content">
                        @foreach ($post['related-links'] as $item)
                        <p>
                            {{$item['text']}} 
                            <a 
                                href="{{$item['href']}}" 
                                title="Leer más sobre {{$item['text']}}" 
                                aria-label="Leer más sobre {{$item['text']}}" 
                                data-toggle="tooltip" 
                                data-placement="right" 
                                class="link-icon" 
                                rel="opener noreferrer follow"
                            >
                                @include('components.svg.hand')
                            </a>
                        </p>
                        @endforeach
                    </div>
                </div>
                @endif

                @if(!empty($post['related-videos']))
                <div class="col col-12 manual-videos">
                    <h3 class="h5">Cortos y videos relacionados:</h3>
                    <div class="post-content">
                        @foreach ($post['related-videos'] as $item)
                        <p>
                            {{$item['text']}} 
                            <a 
                                href="{{$item['href']}}" 
                                title="Ver {{$item['text']}}" 
                                aria-label="Ver {{$item['text']}}" 
                                data-toggle="tooltip" 
                                data-placement="right" 
                                class="link-icon" 
                                rel="opener noreferrer follow"
                            >
                            @include('components.svg.video')
                            </a>
                        </p>
                        @endforeach
                    </div>
                </div>
                @endif

                @if(!empty($post['author']))
                <div class="col col-12 manual-footer">
                    @if(!empty($post['author']['title']))
                    <div class="post-author">
                        By&nbsp;<a href="{{$post['author']['href']}}" title="{{$post['author']['title']}}" rel="author">{{$post['author']['title']}}</a>
                    </div>
                    @endif

                    @if(!empty($post['dateHumans']))
                    <span class="post-date">{{$post['dateHumans']}}</span>
                    @endif
                </div>
                @endif

            </article>
        </div>
    </div>
</div>
@endsection