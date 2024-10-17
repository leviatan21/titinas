@extends('layouts.app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" type="text/javascript" defer></script>
@endsection

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="page-header full-width pb-4">
            <h1 class="page-title">{{$SEO->TITLE}}</h1>
        </div>

        @isset($paragraph)
        <div class="container">
            <div class="post-content pb-5 text-center">
                {!!$paragraph!!}
            </div>
        </div>
        @endisset

        @foreach ($productos as $key => $item)
        <div class="container">

            <article id="gallery-wrap-{{$key}}" class="gallery-wrap">

                <header class="page-header">
                    @if(!empty($item['title']))
                    <h2 class="page-title @isset ($item['important'])important @endisset">{!!$item['title']!!}</h2>
                    @endif

                    @if(!empty($item['description']))
                    <p>{!!$item['description']!!}</p>
                    @endif

                    @if(!empty($item['instagram']))
                    <a href="{{$item['instagram']['link']}}" title="instagram" target="_blank" rel="opener noreferrer nofollow">
                        {{$item['instagram']['text']}}
                    </a>
                    @endif
                </header>

                <div class="f-carousel">
                    @if(empty($item['images']))
                    <img src="{{$item['image']}}" alt="{{strip_tags($item['title'] ?? '*')}}" 
                        class="rounded" height="200" 
                        decoding="async" loading="lazy" fetchpriority="auto"
                    />
                    @else
                    <a href="javascript:void(0);" id="gallery-trigger-{{$key}}">
                        @if(!empty($item['text']))
                        {!!$item['text']!!}
                        @else
                            <img src="{{$item['image']}}" alt="{{strip_tags($item['title'] ?? '*')}}" 
                            class="rounded" height="200" 
                            decoding="async" loading="lazy" fetchpriority="auto"
                        />
                        @endif
                    </a>
                    @endif
                </div>

                @if(!empty($item['images']))
                <script type="text/javascript">
                    $(document).ready(function() {
                        document.getElementById("gallery-trigger-{{$key}}").addEventListener("click", (e) => {
                            e.preventDefault();
                            e.stopPropagation();
                            Fancybox.show([
                                @foreach ($item['images'] as $image)
                                {"caption":"{{$image['caption']}}","src":"{{$image['src']}}","thumb":"{{$image['thumbnail']}}","height":"800","sizes":"800px, 800px, 800px"},
                                @endforeach
                            ]);
                            return false;
                        });
                    });
                </script>
                @endif
            </article>
        </div>
        @endforeach

        @include('components.footer-shop')
        @include('components.footer-pedidos')

    </div>
</div>
{{--
<script type="text/javascript">
$(document).ready(function() {
@foreach ($productos as $key => $item)
    Fancybox.bind(document.getElementById("gallery-wrap-{{$key}}"),'[data-fancybox]', {
        'l10n':{'CLOSE':'Cerrar','NEXT':'Siguiente diapositiva','PREV':'Diapositiva anterior','GOTO':'Ir a la diapositiva #%d','MODAL':'Puedes cerrar esta ventana con la tecla ESC','ERROR':'Algo salió mal, inténtalo de nuevo más tarde','IMAGE_ERROR':'Imagen no encontrada','ELEMENT_NOT_FOUND':'Elemento HTML no encontrado','AJAX_NOT_FOUND':'Error al cargar el AJAX : No encontrado','AJAX_FORBIDDEN':'Error al cargar el AJAX : Prohibido','IFRAME_ERROR':'Error al cargar la página','TOGGLE_ZOOM':'Cambiar el nivel de zoom','TOGGLE_THUMBS':'Cambiar a miniaturas','TOGGLE_SLIDESHOW':'Cambiar a modo presentación','TOGGLE_FULLSCREEN':'Cambiar a modo pantalla completa','DOWNLOAD':'Descargar','PANUP':'Mover hacia arriba','PANDOWN':'Mover hacia abajo','PANLEFT':'Mover hacia la izquierda','PANRIGHT':'Mover hacia la derecha','ZOOMIN':'Mover a la derecha','ZOOMOUT':'Disminuir el zoom','TOGGLEZOOM':'Alternar nivel de zoom','TOGGLE1TO1':'Alternar nivel de zoom','ITERATEZOOM':'Alternar nivel de zoom','ROTATECCW':'Girar en sentido antihorario','ROTATECW':'Rotar las agujas del reloj','FLIPX':'Voltear horizontalmente','FLIPY':'Voltear verticalmente','FITX':'Ajustar horizontalmente','FITY':'Ajustar verticalmente','RESET':'Reiniciar','TOGGLEFS':'Alternar pantalla completa'},
        'compact':false,'idle':false,'animated':false,'showClass':false,'hideClass':false,'dragToClose':false,'contentClick':'next',
        'Images':{'initialSize':'fit','zoom':false},
        'Thumbs':{'type':'classic','Carousel':{center:function(){return this.contentDim>this.viewportDim}}},
        'Toolbar':{'display':{'left':['infobar'],'right':['iterateZoom','rotateCCW','rotateCW','flipX','flipY','slideshow','fullscreen','thumbs','close']}}
    });
@endforeach
});
</script>
--}}
@endsection