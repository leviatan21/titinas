@extends('layouts.app')

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="page-header full-width pb-4">
            <h1 class="page-title">{{$SEO->TITLE}}</h1>
        </div>

        @include('components.share')
 
       <div class="container">
            @foreach ($productos as $key => $item)
            <article id="gallery-wrap-{{$key}}"  class="gallery-wrap">

                <header class="page-header">
                    @isset($item['title'])
                    <h2 class="page-title color-brand">{!!$item['title']!!}</h2>
                    @endisset

                    @isset($item['subtitle'])
                    <h3 class="post-title">{!!$item['subtitle']!!}</h3>
                    @endisset

                    @isset($item['description'])
                    <p class="pt-4">{!!$item['description']!!}</p>
                    @endisset

                    @isset($item['more'])
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="collapse-{{$key}}">
                                    <div class="card card-body text-justify">
                                        @foreach ($item['more'] as $more)
                                        <p>{{$more}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#collapse-{{$key}}" class="d-block text-center" aria-controls="collapse-{{$key}}" data-toggle="collapse" role="button" aria-expanded="false">
                            <span class="collapsed">Ver más</span>
                            <span class="expanded">Ver menos</span>
                        </a>
                    @endisset

                    @isset($item['related'])
                    <a href="{{$item['related']['href']}}" title="{!!$item['title']!!}" class="d-block text-center">
                        <p>{{$item['related']['text']}}</p>
                    </a>
                    @endisset

                </header>

                <div class="f-carousel">
                    <img src="{{$item['image']}}" alt="{!!$item['title']!!}" 
                        class="rounded" width="800" height="200" 
                        decoding="async" loading="lazy" fetchpriority="high"
                    />
                </div>

                @isset($item['youtube'])
                <div class="row mt-4">
                    @foreach ($item['youtube'] as $youtube)
                    <div class="col-sm mb-2">
                        @include('components.iframe-youtube-horizontal', ['url'=>$youtube, 'title'=>$item['title']] )
                    </div>
                    @endforeach
                </div>
                @endisset

                @if(!empty($item['schemamarkup']))
                @include('components.schemamarkup', ['schemamarkup' => $item['schemamarkup'] ])
                @endif
            </article>
            @endforeach
        </div>

        @include('components.footer-tienda')
        @include('components.footer-pedidos')
    </div>
</div>

@endsection