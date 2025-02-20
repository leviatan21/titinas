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
        <style>
            .pdfobject-container { height: 100vh; border: 1px solid #ccc; }
        </style>
        <div id="efecto-gaudi-black-edition"></div>
        <script src="https://unpkg.com/pdfobject"></script>
        
        <script>
            PDFObject.embed(
                "{{asset('/pdf/lanzamientos-efecto-gaudi-black-edition.pdf')}}",
                "#efecto-gaudi-black-edition",
                {
                    'fallbackLink': false,
                    'title':'Lanzamientos Marzo 2025',
                    'pdfOpenParams': { 'view':'Fit', 'page':'1', 'zoom':'100', 'toolbar':0, 'statusbar':0 }
                }
            );
        </script>
    </article>
    
    <article id="gallery-wrap-0" class="gallery-wrap mt-4">
        <header class="page-header">
            <h2 class="page-title color-brand">Herramientas para puntillismo</h2>
        </header>
        <img src="{{asset('/images/releases/herramientas.webp')}}" alt="herramientas" 
            class="my-4" width="1200"
            decoding="async" loading="lazy" fetchpriority="auto" 
        />
    </article>
</div>
@endsection