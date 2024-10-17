@extends('layouts.app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" type="text/javascript" defer></script>
@endsection

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="page-header full-width pb-4">
            <h1 class="page-title">{{$SEO->TITLE}}</h1>
        </div>

        @isset($paragraph)
        <div class="container">
            <div class="post-content pb-5 text-center">
                {!!$paragraph!!}
            </div>
        </div>
        @endisset

        @foreach ($productos as $key => $item)
        <div class="container">
            <article class="gallery-wrap">

                <header class="page-header">
                    @if(!empty($item['title']))
                    <h2 class="page-title @isset ($item['important'])important @endisset">{!!$item['title']!!}</h2>
                    @endif

                    @if(!empty($item['description']))
                    <p>{!!$item['description']!!}</p>
                    @endif

                    @if(!empty($item['instagram']))
                    <a href="{{$item['instagram']['link']}}" title="instagram" target="_blank" rel="opener noreferrer nofollow">
                        {{$item['instagram']['text']}}
                    </a>
                    @endif
                </header>

                <div class="f-carousel">
                @if(empty($item['images']))
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
                            class="mg-fluid rounded" height="200" 
                            decoding="async" loading="lazy" fetchpriority="auto"
                        />
                    @endif
                    </a>

                    <div class="d-none">
                    @foreach ($item['images'] as $image)
                        <a href="{{$image['src']}}" data-fancybox="gallery-{{$key}}" data-height="800" data-sizes="800px, 800px, 800px" data-thumb="{{$image['thumbnail']}}" data-caption="{{$image['caption']}}">
                            <img src="{{$image['thumbnail']}}" alt="{{$image['caption']}}" 
                                class="mg-fluid rounded" height="200" 
                                decoding="async" loading="lazy" fetchpriority="low"
                            />
                        </a>
                    @endforeach
                    </div>
                @endif
                </div>

            </article>
        </div>
        @endforeach

        @include('components.footer-shop')
        @include('components.footer-pedidos')

    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    FancyboxDefaults();
@foreach ($productos as $key => $item)
    Fancybox.bind('[data-fancybox="gallery-{{$key}}"]',Fancybox.defaults);
@endforeach
});
</script>

@endsection