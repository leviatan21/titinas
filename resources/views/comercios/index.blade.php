@extends('layouts.app')

@section('content')
<div class="page-content page-shops">

    <div class="container">
        <section class="article">
            <div class="page-header">
                <h1 class="page-title">{{$SEO->TITLE}}</h1>
            </div>

            @include('components.share')

            <div class="border rounded bg-light text-dark mt-4 p-4">
                <p class="post-content h5">
                    Buscá el comercio que quede mas cerca de tu casa.<br />
                    Si no encontras, podes escribirnos a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a> .<br />
                    y darnos los datos de tu comercio mas cercano, que nosotros los contactaremos.
                </p>
                <p class="post-footer h5">
                    Para consultas y pedidos de cursos a distancia escribirnos a
                    <a href="mailto:{{$CONFIG->EMAIL_ADISTANCIA}}">{{$CONFIG->EMAIL_ADISTANCIA}}</a>
                    <a href="{{$CONFIG->PUNTO_VENTA}}" title="Quiero convertirme en punto de venta oficial." target="_blank" rel="opener noreferrer nofollow">
                        <img src="{{asset('/images/puntoventa.webp')}}" alt="puntoventa" 
                            class="my-4" width="1200"
                            decoding="async" loading="lazy" fetchpriority="auto" 
                        />
                    </a>
                </p>
            </div>
        </section>
    </div>

    @foreach ($comercios as $key => $items)
    <div class="container my-4">
        <div class="panel">

            <h2 class="post-title" id="shops-{{Str::slug($key, '-')}}">
                <a class="bd-content-title" href="#shops-{{Str::slug($key, '-')}}" data-anchorjs-icon="#">
                    {{$key}}
                </a>
            </h2>

            @if(count($items))
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pt-4">
                @foreach ($items as $item)
                <div class="col mb-3">
                    <article class="card shop h-100">

                        <header class="card-header">
                            <h3 class="card-title">
                                {!!$item['name']!!}
                            </h3>
                        </header>

                        <div class="card-body d-flex flex-column">
                            @isset($item['address'])
                                @foreach ($item['address'] as $address)
                                    <span class="card-address">{!!$address!!}</span>
                                @endforeach
                            @endisset
                        </div>

                        <footer class="card-footer d-flex flex-column">
                            @isset($item['href'])
                                @foreach ($item['href'] as $text => $href)
                                    <span class="block">
                                        <a href="{{$href}}" rel="nofollow noopener" target="_blank">{{$text}}</a>
                                    </span>
                                @endforeach
                            @endisset
                            @isset($item['email'])
                                @foreach ($item['email'] as $email)
                                    <span class="block">
                                        <a href="mailto:{{$email}}">Email</a>
                                    </span>
                                @endforeach
                            @endisset
                        </footer>

                    </article>
                </div>
                @endforeach
            </div>
            @else
            <div class="row row-cols-1">
                <div class="col mb-3">
                    Aún no tenemos comercios asociados en {{ucfirst($key)}}
                    <br /> 
                    <a href="{{$CONFIG->PUNTO_VENTA}}" target="_blank" rel="opener noreferrer nofollow">
                        Quiero convertirme en punto de venta oficial.
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endforeach

    @include('components.footer-tienda')
    @include('components.footer-pedidos')

</div>
@endsection