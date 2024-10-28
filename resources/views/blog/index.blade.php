@extends('layouts.app')

@section('content')
<div class="container">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('blog.grid', ['posts'=>$posts])

    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 pt-5">

        @if(!empty($authors))
        <div class="col">
            <div class="bard-widget widget_categories">
                <div class="widget-title"><h3>Autores:</h3></div>
                <div class="authcloud">
                @foreach ($authors as $item)
                    <a href="{{$item['href']}}" class="tag-cloud-link" rel="author">{{$item['title']}}</a>@if(!$loop->last),&nbsp; @endif
                @endforeach
                </div>
            </div>
        </div>
        @endif

        @if(!empty($cats))
        <div class="col">
            <div class="bard-widget widget_categories">
                <div class="widget-title"><h3>Categorias:</h3></div>
                <div class="catcloud">
                @foreach ($cats as $item)
                    <a href="{{$item['href']}}" class="tag-cloud-link" rel="category">{{$item['title']}}</a>@if(!$loop->last),&nbsp; @endif
                @endforeach
                </div>
            </div>
        </div>
        @endif

        @if(!empty($tags))
        <div class="col">
            <div class="bard-widget widget_tag_cloud">
                <div class="widget-title"><h3>Tags:</h3></div>
                <div class="tagcloud">
                @foreach ($tags as $item)
                    <a href="{{$item['href']}}" class="tag-cloud-link" rel="tag">{{$item['title']}}</a>@if(!$loop->last),&nbsp; @endif
                @endforeach
                </div>
            </div>
        </div>
        @endif

    </div>

</div>
@endsection