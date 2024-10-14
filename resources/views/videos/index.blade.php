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
                        <a href="{{$item['href']}}" title="{{$item['title']}}" class="text-center mt-auto" target="_blank" rel="opener noreferrer nofollow">
                            Ver video en <br/>
                            <svg class="svg-inline--fa fa-facebook-f fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>acebook
                        </a>
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