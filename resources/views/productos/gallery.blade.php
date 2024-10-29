@extends('layouts.app')

@section('css')
{{--<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" type="text/css" media="all" />--}}
<link href="{{asset('css/libs/fancyapps/ui5.0/fancybox/fancybox.css')}}" rel="stylesheet" type="text/css" media="all" />'
@endsection

@section('js')
{{--<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" type="text/javascript" defer></script>--}}
<script src="{{asset('js/libs/fancyapps/ui5.0/fancybox/fancybox.umd.js')}}" type="text/javascript" defer></script>
@endsection

@section('content')
<div class="container">

    <header class="page-header full-width">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    @if(!empty($paragraph))
    <div class="post-content text-center pb-5 mt-4">
        @foreach ($paragraph as $text)
        <p>{!!$text!!}</p>
        @endforeach
    </div>
    @endif

    @foreach ($productos as $key => $item)
    <article class="gallery-wrap mt-4">

        <header class="page-header">
            @if(!empty($item['title']))
            <h2 class="page-title @isset ($item['important'])important @endisset" id="gallery-{{Str::slug($key, '-')}}" >
                <a class="bd-content-title" href="#gallery-{{Str::slug($key, '-')}}" data-anchorjs-icon="#">
                {!!$item['title']!!}
                </a>
            </h2>
            @endif

            @if(!empty($item['description']))
            <p>{!!$item['description']!!}</p>
            @endif

            @if(!empty($item['links']))
            @foreach ($item['links'] as $link)
            <p>
                <a href="{{$link['href']}}" title=" {{$link['text']}}" target="_blank" rel="opener noreferrer nofollow">
                    {{$link['text']}}
                </a>
            </p>
            @endforeach
            @endif
        </header>

        <div class="f-carousel">
        @if(empty($item['images']) && empty($item['gallery']))
            <img src="{{$item['image']}}" alt="{{strip_tags($item['title'] ?? '*')}}" 
                class="rounded" height="200" 
                decoding="async" loading="lazy" fetchpriority="auto"
            />
        @else

            <a href="javascript:void(0);" data-fancybox-trigger="gallery-{{$key}}">
            @if(!empty($item['text']))
                {!!$item['text']!!}
            @else
                <img src="{{$item['image']}}" alt="{{strip_tags($item['title'] ?? '*')}}" 
                    class="img-fluid rounded" height="200" 
                    decoding="async" loading="lazy" fetchpriority="auto"
                />
            @endif
            </a>

            <div class="d-none" data-images="{{count($item['images']??[])}}"  data-gallery="{{count($item['gallery']??[])}}">
            @if(!empty($item['images']))
                @foreach ($item['images'] as $image)
                    <a href="{{$image['src']}}" title="{{$image['caption']}}" data-fancybox="gallery-{{$key}}">
                        <img src="{{$image['thumbnail']}}" alt="{{$image['caption']}}" 
                            class="img-fluid rounded" height="200" 
                            decoding="async" loading="lazy" fetchpriority="low"
                        />
                    </a>
                @endforeach
            @endif
            @if(!empty($item['gallery']))
                @foreach ($item['gallery'] as $image)
                    <a href="{{$image['src']}}" title="{{$image['caption']}}" data-fancybox="gallery-{{$key}}" data-height="800" data-sizes="(max-width: 600px) 480px, 800px" data-thumb="{{$image['thumbnail']}}" data-caption="{{$image['caption']}}">
                        <img src="{{$image['thumbnail']}}" alt="{{$image['caption']}}" 
                            class="img-fluid rounded" height="200" 
                            decoding="async" loading="lazy" fetchpriority="low"
                        />
                    </a>
                @endforeach
            @endif
            </div>
        @endif
        </div>

    </article>
    @endforeach
</div>

@include('components.footer-tienda')
@include('components.footer-pedidos')

<script type="text/javascript">
$(document).ready(function() {
    FancyboxDefaults();
@foreach ($productos as $key => $item)
    Fancybox.bind('[data-fancybox="gallery-{{$key}}"]',Fancybox.defaults);
@endforeach
});
</script>

@endsection