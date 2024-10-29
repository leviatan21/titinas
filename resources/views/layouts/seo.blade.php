@isset($SEO->CANONICAL)<link rel="canonical" href={{$SEO->CANONICAL}} />@endisset

@isset($SEO->TITLE)<title>{!!$SEO->TITLE!!}</title>@endisset
@isset($SEO->TITLE)<meta name="title" content="{!!$SEO->TITLE!!}" />@endisset
@isset($SEO->DESCRIPTION)<meta name="description" content="{!!$SEO->DESCRIPTION!!}" />@endisset
@isset($SEO->KEYWORDS)<meta name="keywords" content="{!!$SEO->KEYWORDS!!}" />@endisset

{{-- Schema.org markup for Google+ --}}
@isset($SEO->TITLE)<meta itemprop="name" content="{!!$SEO->TITLE!!}" />@endisset
@isset($SEO->DESCRIPTION)<meta itemprop="description" content="{!!$SEO->DESCRIPTION!!}" />@endisset
@isset($SEO->LOGO)<meta itemprop="image" content="{{$SEO->LOGO}}" />@endisset

{{-- ui --}}
<meta name="theme-color" content="#014d81" />
<meta name="msapplication-TileColor" content="#014d81" />
<meta name="msapplication-TileImage" content="{{$SEO->LOGO}}" />

{{-- Open Graph / Facebook --}}
<meta property="og:type" content="website" />
@isset($SEO->SITE_TITLE)<meta property="og:site_name" content="{{$SEO->SITE_TITLE}}" />@endisset
@isset($SEO->TITLE)<meta property="og:title" content="{!!$SEO->TITLE!!}" />@endisset
@isset($SEO->DESCRIPTION)<meta property="og:description" content="{!!$SEO->DESCRIPTION!!}" />@endisset
@isset($SEO->LOCALE)<meta property="og:locale" content="{{$SEO->LOCALE}}" />@endisset
@isset($SEO->CANONICAL)<meta property="og:url" content="{{$SEO->CANONICAL}}" />@endisset
@isset($SEO->DATE_PUBLISHED)<meta property="article:published_time" content="{{$SEO->DATE_PUBLISHED}}" />@endisset
@isset($SEO->DATE_MODIFIED)<meta property="article:modified_time" content="{{$SEO->DATE_MODIFIED}}" />@endisset
@isset($SEO->LOGO)
<meta property="og:image" content="{{$SEO->LOGO}}" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:width" content="597" />
<meta property="og:image:height" content="645" />
@endisset

{{-- Twitter Card data --}}
<meta name="twitter:widgets:autoload" content="off" />
<meta name="twitter:widgets:csp" content="on" />
<meta name="twitter:widgets:theme" content="light" />
<meta name="twitter:card" content="summary" />
@isset($SEO->CANONICAL)<meta name="twitter:url" content="{{$SEO->CANONICAL}}" />@endisset
@isset($SEO->TITLE)<meta name="twitter:title" content="{!!$SEO->TITLE!!}" />@endisset
@isset($SEO->DESCRIPTION)<meta name="twitter:description" content="{!!$SEO->DESCRIPTION!!}" />@endisset
@isset($SEO->TWITTER_SITE)<meta name="twitter:site" content="{{$SEO->TWITTER_SITE}}" />@endisset
@isset($SEO->LOGO)<meta property="twitter:image:src" content="{{$SEO->LOGO}}" />@endisset
