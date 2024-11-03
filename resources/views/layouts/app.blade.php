<!DOCTYPE html>
<html lang="{{$SEO->LOCALE}}" dir="ltr">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        @isset($SEO->FACEBOOK_PIXEL)
        <link rel="preconnect"  href="https://www.facebook.com" />
        @endif
        @isset($SEO->GOOGLE_TAGMANAGER)
        <link rel="preconnect"  href="https://www.googletagmanager.com" />
        <link rel="preload"     href={{"https://www.googletagmanager.com/gtm.js?id={$SEO->GOOGLE_TAGMANAGER}"}} as="script" />
        @endif
        <link rel="preload"     href="{{asset("/css/styles.css{$REFRESH}")}}" as="style" />

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        @isset($ERRORPAGE)
        <meta name="robots" content="noindex, nofollow" />
        <meta name="errorpage" content="true" />
        <meta name="errortype" content="404 - Not Found" />
        <meta name="prerender-status-code" content="404" />
        @else
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        @endif

        <link href="{{asset('/favicon.ico')}}" rel="Shortcut Icon" type="image/x-icon" />
        <link href="{{asset('/favicon.jpg')}}" rel="icon"  type="image/jpg" sizes="32x32" />
        <link href="{{asset('/favicon.jpg')}}" rel="icon" type="image/jpg"sizes="192x192" />
        <link href="{{asset('/favicon.jpg')}}" rel="apple-touch-icon" type="image/jpg" />
        <meta name="msapplication-TileImage" content="{{asset('/favicon.jpg')}}" />

        <link rel="sitemap" type="application/xml" title="Site map" href={{asset("/sitemap.xml")}} />

        @include('layouts.seo-head')

        <link href="{{asset("/css/styles.css{$REFRESH}")}}" rel="stylesheet" type="text/css" media="all" />
        @yield('css')

        <script src="{{asset("/js/libs/jquery/3.7.1/jquery.min.js{$REFRESH}")}}" type="text/javascript" sync></script>
 
        @include('layouts.googletagmanager', ['mode'=>'head'])

        @include('layouts.facebookpixel')

    </head>

    <body>

        @include('layouts.googletagmanager', ['mode'=>'body'])

        @include('layouts.header')

        <main class="page-content">
            @yield('content')
            @include('components.schemamarkup', ['schemamarkup'=>$SCHEMA_MARKUP])
        </main>

        @include('layouts.footer')

        <script src="{{asset("/js/libs/bootstrap/4.6.2/bootstrap.bundle.min.js{$REFRESH}")}}" type="text/javascript" defer></script>
        <script src="{{asset("/js/scripts.js{$REFRESH}")}}" type="text/javascript" defer></script>
        @yield('js')

    </body>
</html>