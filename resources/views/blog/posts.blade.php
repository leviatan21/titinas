@extends('layouts.app')

@section('content')
<div class="container">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @if (!empty($author))
    <div class="post-content py-4">

        @if (!empty($author['image']))
        <div class="post-media float-left pr-4">
            <img src="{{$author['image']}}" alt="{{$author['title']}}" 
                class="author-image" width="500" height="380" 
                decoding="async" loading="lazy" fetchpriority="auto"
            />
        </div>
        @endif

        @foreach ($author['content'] as $content)
        <p>{!!$content!!}</p>
        @endforeach
    </div>
    <span class="border-divider"></span>
    <div class="clearfix"></div>
    @endif

    @include('blog.grid', ['posts'=>$posts])

</div>
@endsection