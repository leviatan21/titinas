<!DOCTYPE html>
<html lang="{{$SEO->LOCALE}}">
    <head>
        <link rel="preconnect"   href="https://fonts.googleapis.com" />
        <link rel="preconnect"   href="https://www.googletagmanager.com" />
        <link rel="preconnect"   href="https://www.facebook.com" />
        <link rel="preconnect"   href="https://cdn.jsdelivr.net" />

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        @if (isset($ERRORPAGE))
        <meta name="robots" content="noindex, nofollow" />
        <meta name="errorpage" content="true" />
        <meta name="errortype" content="404 - Not Found" />
        <meta name="prerender-status-code" content="404" />
        @else
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        @endif

        <link href={{asset('/favicon.ico')}} rel="Shortcut Icon" type="image/x-icon" />
        <link href="{{asset('/favicon.jpg')}}" sizes="32x32" rel="icon" />
        <link href="{{asset('/favicon.jpg')}}" sizes="192x192" rel="icon" />
        <link href="{{asset('/favicon.jpg')}}" rel="apple-touch-icon" />
        <meta name="msapplication-TileImage" content="{{asset('/favicon.jpg')}}" />

        @include('layouts.seo')

        <link href="{{asset("/css/styles.css{$REFRESH}")}}" rel="stylesheet" type="text/css" media="all" />
        @yield('css')

        <script src="{{asset("/js/libs/jquery/3.7.1/jquery.min.js{$REFRESH}")}}" type="text/javascript"></script>
 
        @include('layouts.googletagmanager',['mode'=>'head'])

        @include('layouts.facebookpixel')

    </head>

    <body> 
        @include('layouts.googletagmanager',['mode'=>'body'])
        @include('layouts.header')

        <main>
            @yield('content')
            @include('components.schemamarkup',['schemamarkup'=>$SCHEMA_MARKUP])
        </main>

        @include('layouts.footer')

        <script src="{{asset('/js/plugins/js.cookie.min.js?ver=2.1.4-wc.7.2.2')}}" type="text/javascript"></script>
        <script src="{{asset("/js/libs/bootstrap/4.6.2/bootstrap.bundle.min.js{$REFRESH}")}}" type="text/javascript"></script>
        <script src="{{asset("/js/custom-scripts.js{$REFRESH}")}}" type="text/javascript"></script>
        @yield('js')

    </body>
</html>