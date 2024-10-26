@extends('layouts.app')

@section('content')
<div class="page-content page-videos">

    <div class="container">
        <section class="article">
            <div class="page-header">
                <h1 class="page-title">{{$SEO->TITLE}}</h1>
            </div>
        </section>

        @include('components.share')

        {{--
        <div class="container">
            <iframe 
            src="https://www.instagram.com/p/CgPvB3oDzMb/embed/" 
            scrolling="no" 
            allowtransparency="true" 
            allowfullscreen="true" 
            frameborder="0">Iframe not supported</iframe>
        </div>
        --}}
        {{--
        <div class="container">
            <blockquote
                class="instagram-media"
                data-instgrm-permalink="https://www.instagram.com/reel/CgPvB3oDzMb/?utm_source=ig_embed&amp;utm_campaign=loading"
                data-instgrm-version="14"
                style="background: #fff; border: 0; border-radius: 3px; box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 10px 0 rgba(0, 0, 0, 0.15); margin: 1px;max-width: 540px; min-width: 326px; padding: 0;width: 99.375%; width: -webkit-calc(100% - 2px); width: calc(100% - 2px);"
            ></blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
        --}}
        {{--
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
        <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/1560763354786699/" data-width="500" data-show-text="false">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/facebook/videos/1560763354786699/">
                <a href="https://www.facebook.com/facebook/videos/1560763354786699/">How to Share With Just Friends</a>
                <p>How to share with just friends.</p>
                Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on Friday, December 5, 2014
              </blockquote>
            </div>
          </div>
        --}}

        {{--
        <iframe 
            name="fde21881a8fd375dd" 
            width="500px" height="1000px" 
            data-testid="fb:video Facebook Social Plugin" 
            title="fb:video Facebook Social Plugin" 
            frameborder="0" 
            allowtransparency="true"
            allowfullscreen="true" 
            scrolling="no" 
            allow="encrypted-media" 
            src="https://web.facebook.com/v3.2/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2Fvideos%2F{{'1560763354786699'}}"
            <!--
            src="
            https://web.facebook.com/v3.2/plugins/video.php?app_id=
            &amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df944feddf96f38ecd%26domain%3D127.0.0.1%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252F127.0.0.1%253A8000%252Ffe36d93918885d93f%26relation%3Dparent.parent
            &amp;container_width=1110
            &amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2Fvideos%2F1560763354786699%2F
            &amp;locale=en_US
            &amp;sdk=joey
            &amp;show_text=false
            &amp;width=500" 
            -->
            style="border: none; visibility: visible; width: 500px; height: 281px;" 
            class=""
        ></iframe>
        --}}
        
        {{--
        https://fb.watch/vehKXhnx-P/
        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsantuariodeelefantes%2Fvideos%2F1560763354786699%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        <iframe src="https://www.facebook.com/plugins/video.php?videos=1560763354786699&height=314&&width=560&show_text=false&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        --}}

        @foreach($videos as $video)
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 my-4">
            @foreach($video as $item)
            <div class="col mb-3">
                <div class="card h-100 video-thumbnail">
                    @if(!empty($item['youtube-embed']))
                        @include('components.iframe-youtube-vertical', ['url'=>$item['youtube-embed'], 'title'=>$item['title']] )
                    @else
                    <img src="{{$item['image']}}" alt="{{$item['title']}}" 
                        class="img-thumbnail border border-light" height="200" 
                        decoding="async" loading="lazy" fetchpriority="auto"
                    />
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h2 class="text-center h4">
                            {!!$item['title']!!}
                        </h2>

                        @if(!empty($item['dateHumans']))
                        <p class="post-date text-right d-block" title="{{$item['datePublished']}}">
                            {{$item['dateHumans']}}
                        </p>
                        @endif

                        @if(!empty($item['description']))
                        <p>
                            {!!$item['description']!!}
                        </p>
                        @endif

                        @if(!empty($item['facebook-share']))
                        <a href="{{$item['facebook-share']}}" title="{{$item['title']}}" class="text-center mt-auto" target="_blank" rel="opener noreferrer nofollow">
                            <svg class="svg-inline--fa fa-video fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>
                            &nbsp;Ver video en Facebook
                        </a>
                        @endif
                        @if(empty($item['youtube-embed']) && !empty($item['youtube-share']))
                        <a href="{{$item['youtube-share']}}" title="{{$item['title']}}" class="text-center mt-auto" target="_blank" rel="opener noreferrer nofollow">
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