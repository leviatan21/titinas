@extends('layouts.app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" type="text/javascript" defer></script>
@endsection

@section('content')
<div id="page-wrap">
    <div class="page-content page-christmas">

        <div class="page-header full-width pb-4">
            <h1 class="page-title">{{$SEO->TITLE}}</h1>
        </div>

        @include('components.share')

        @isset($paragraph)
        <div class="container">
            <div class="post-content pb-5 text-center">
                {!!$paragraph!!}
            </div>
        </div>
        @endisset

        @foreach ($productos as $key => $item)
        <div class="container my-4">
            <div class="panel">
                <div class="panel-title">
                    <h2 class="text-center display-3">
                        @if (!empty($item['title-nav']))
                        {!! $item['title-nav'] !!}
                        @else
                        {!! $item['title'] !!}
                        @endif
                    </h2>
                    <img  src="{{asset('/images/productos/navidad/logo-navidad.webp')}}" alt="logo navidad" 
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
        </div>
        @endforeach
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