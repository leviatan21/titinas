@extends('layouts.app')

@section('content')
<div class="container page-christmas">

    <header class="page-header full-width">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    @isset($paragraph)
    <div class="post-content pb-5 text-center">
        {!!$paragraph!!}
    </div>
    @endisset

    @foreach ($productos as $key => $item)
    <div class="panel my-4">
        <div class="panel-title">
            <h2 class="text-center display-3">
                @if (!empty($item['title-nav']))
                {!! $item['title-nav'] !!}
                @else
                {!! $item['title'] !!}
                @endif
            </h2>
            <img src="{{asset('/images/productos/navidad/logo-navidad.webp')}}" alt="logo navidad" 
                class="img-fluid logo-navidad" width="60" height="75"
                decoding="async" loading="lazy" fetchpriority="auto"
            />
        </div>
        <div class="row justify-content-center row-cols-2 row-cols-sm-3 row-cols-md-6 pt-4">
            @foreach ($item['gallery'] as $image)
            <div class="col text-center mb-3">
                <a href="{{$image['src']}}" 
                    title="{{$image['caption']}}" 
                    data-fancybox="gallery-{{$key}}" 
                    data-height="800" data-sizes="(max-width: 600px) 480px, 800px" 
                    data-thumb="{{$image['thumbnail']}}" 
                    data-caption="{{$image['caption']}}"
                >
                    <img 
                        src="{{$image['thumbnail']}}" alt="{{$image['caption']}}" 
                        class="img-fluid img-thumbnail rounded mx-auto" height="200" 
                        decoding="async" loading="lazy" fetchpriority="low"
                        style="max-height:200px; width:auto;"
                    />
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

@include('components.script-fancybox', ['items'=>$productos])

@include('components.footer-tienda')
@include('components.footer-pedidos')

@endsection