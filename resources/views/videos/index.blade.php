@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="container">
        <section class="article">
            <div class="post-header">
                <h1 class="post-title">{{$SEO->TITLE}}</h1>
            </div>
        </section>

        @foreach($chunks as $chunk)
        <div class="row row-cols-1 row-cols-sm-3 my-4">
            @foreach($chunk as $item)
            <div class="col mb-3">
                <div class="card h-100 video-thumbnail">
                    <img src="{{$item['image']}}" alt="{{$item['title']}}" height="200" class="img-thumbnail border border-light" />
                    <div class="card-body d-flex flex-column">
                        <h2 class="text-center h4">
                            {{$item['title']}}
                        </h2>
                        @if(!empty($item['facebook']))
                        <a href="{{$item['facebook']}}" title="{{$item['title']}}" class="text-center mt-auto" target="_blank" rel="opener noreferrer nofollow">
                            <svg class="svg-inline--fa fa-video fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>
                            &nbsp;Ver video en Facebook
                        </a>
                        @endif
                        @if(!empty($item['youtube']))
                        <a href="{{$item['youtube']}}" title="{{$item['title']}}" class="text-center mt-auto" target="_blank" rel="opener noreferrer nofollow">
                            <svg class="svg-inline--fa fa-video fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>
                            &nbsp;Ver video en Youtube
                        </a>
                        @endif
                    </div>
                    @if(!empty($item['schemamarkup']))
                    @include('components.schemamarkup', ['schemamarkup' => $item['schemamarkup'] ])
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection