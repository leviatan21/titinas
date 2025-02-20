@extends('layouts.app')

@section('content')
<div class="container">
    
    <header class="page-header full-width">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    <article id="gallery-wrap-0" class="gallery-wrap mt-4">
        <header class="page-header">
            <h2 class="page-title color-brand">Efecto Gaudí Black Edition</h2>
        </header>

        <img src="{{asset('/images/releases/efecto-gaudi-black-edition-page-1.webp')}}" alt="Efecto Gaudi Black Edition hoja 1" 
            class="my-4" width="1200"
            decoding="async" loading="lazy" fetchpriority="auto" 
        />
        <img src="{{asset('/images/releases/efecto-gaudi-black-edition-page-2.webp')}}" alt="Efecto Gaudi Black Edition hoja 2" 
            class="my-4" width="1200"
            decoding="async" loading="lazy" fetchpriority="auto" 
        />
        <img src="{{asset('/images/releases/efecto-gaudi-black-edition-page-3.webp')}}" alt="Efecto Gaudi Black Edition hoja 3" 
            class="my-4" width="1200"
            decoding="async" loading="lazy" fetchpriority="auto" 
        />
    </article>
    
    <article id="gallery-wrap-0" class="gallery-wrap mt-4">
        <header class="page-header">
            <h2 class="page-title color-brand">Herramientas para puntillismo y cerámica</h2>
        </header>
        <img src="{{asset('/images/releases/herramientas.webp')}}" alt="herramientas" 
            class="my-4" width="1200"
            decoding="async" loading="lazy" fetchpriority="auto" 
        />
    </article>
</div>
@endsection