@extends('layouts.app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" type="text/javascript"></script>
@endsection

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="post-header full-width py-5">
            <h1 class="post-title">{{$SEO->TITLE}}</h1>
        </div>

        @isset($paragraph)
        <div class="container">
            <div class="post-content pb-5 text-center">
                {!!$paragraph!!}
            </div>
        </div>
        @endisset

        <div class="container">
 
            @foreach ($productos as $key => $item)
            <article id="gallery-wrap-{{$key}}"  class="gallery-wrap">

                <header class="post-header">
                    @if(!empty($item['title']))
                    <h2 class="page-title @isset ($item['important'])important @endisset">{!!$item['title']!!}</h2>
                    @endif

                    @if(!empty($item['description']))
                    <p>{!!$item['description']!!}</p>
                    @endif

                    @if(!empty($item['instagram']))
                    <a href="{{$item['instagram']['link']}}" title="Facbook" target="_blank" rel="opener noreferrer nofollow">
                        {{$item['instagram']['text']}}
                    </a>
                    @endif
                </header>

                <div id="gallery-wrap-{{$key}}" class="f-carousel">
                    @if(empty($item['images']))
                    <img src="{{$item['image']}}" alt="{{strip_tags($item['title'] ?? '*')}}" class="rounded" height="200" loading="lazy" fetchpriority="high" />
                    @else
                    <a href="javascript:void(0);" data-fancybox-trigger="gallery-{{$key}}">
                        @if(!empty($item['text']))
                        {!!$item['text']!!}
                        @else
                        <img src="{{$item['image']}}" alt="{{strip_tags($item['title'] ?? '*')}}" class="rounded" height="200" loading="lazy" fetchpriority="high" />
                        @endif
                    </a>
                    @endif

                    <div style="display:none">
                        @foreach ($item['images'] as $image)
                        <a href="{{$image['src']}}" data-fancybox="gallery-{{$key}}" data-height="800" data-sizes="800px, 800px, 800px" data-caption="{{$image['caption']}}">
                            <img src="{{$image['thumbnail']}}" alt="{{strip_tags($item['title'] ?? '*')}}" loading="lazy" fetchpriority="low" />
                        </a>
                        @endforeach
                    </div>
                </div>

            </article>
            @endforeach

        </div>

        @include('components.footer-shop')
        @include('components.footer-pedidos')

    </div>
</div>

{{-- 
https://fancyapps.com/fancybox/plugins/images/ 
https://jsfiddle.net/bezu63qg/
https://stackblitz.com/edit/js-x7cx7w?file=index.html,index.js,style.css
--}}

<script type="text/javascript">
$(document).ready(function() {
@foreach ($productos as $key => $item)
    Fancybox.bind(document.getElementById("gallery-wrap-{{$key}}"),'[data-fancybox]', {
        'compact':false,'idle':false,'animated':false,'showClass':false,'hideClass':false,
        'dragToClose':false,'Images':{'initialSize':'fit','zoom':false},
        'Thumbs':{'type':'classic','Carousel':{center:function(){return this.contentDim > this.viewportDim}}},
        'Toolbar': {'display': {'left': ['infobar'],'right': ['iterateZoom','rotateCCW','rotateCW','flipX','flipY','slideshow','fullscreen','thumbs','close']}}
    });
@endforeach
});
</script>

@endsection