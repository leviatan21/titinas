@extends('layouts.app')

@section('content')
<div class="page-content">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('blog.grid', ['posts'=> $posts])

    @if(!empty($authors))
    <div class="container pt-5">
        <div class="row">
            <div class="col bard-widget widget_categories">
                <div class="widget-title"><h3>Autores:</h3></div>
                <div class="authcloud">
                @foreach ($authors as $item)
                    <a href="{{$item['href']}}" class="tag-cloud-link" rel="author">{{$item['title']}}</a> @if(!$loop->last), @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!empty($cats))
    <div class="container pt-5">
        <div class="row">
            <div class="col bard-widget widget_categories">
                <div class="widget-title"><h3>Categorias:</h3></div>
                <div class="catcloud">
                @foreach ($cats as $item)
                    <a href="{{$item['href']}}" class="tag-cloud-link" rel="category">{{$item['title']}}</a> @if(!$loop->last), @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!empty($tags))
    <div class="container pt-5">
        <div class="row">
            <div class="col bard-widget widget_tag_cloud">
                <div class="widget-title"><h3>Tags:</h3></div>
                <div class="tagcloud">
                @foreach ($tags as $item)
                    <a href="{{$item['href']}}" class="tag-cloud-link" rel="tag">{{$item['title']}}</a> @if(!$loop->last), @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection