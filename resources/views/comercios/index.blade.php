@extends('layouts.app')

@section('content')
<div class="container page-shops">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>


    @include('components.share')
    <section class="article">
        <div class="border rounded bg-light text-dark mt-4 p-4">
            <p class="post-content h5">
                Buscá el comercio que quede mas cerca de tu casa.<br />
                Si no encontras, podes escribirnos a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a> .<br />
                y darnos los datos de tu comercio mas cercano, que nosotros los contactaremos.
            </p>

            <p class="post-footer h5">
                <a href="{{$CONFIG->PUNTO_VENTA}}" title="Quiero convertirme en punto de venta oficial." target="_blank" rel="opener noreferrer nofollow">
                    <img src="{{asset('/images/puntoventa.webp')}}" alt="puntoventa" 
                        class="my-4" width="1200"
                        decoding="async" loading="lazy" fetchpriority="auto" 
                    />
                </a>
            </p>
        </div>
    </section>

    @foreach ($comercios as $key => $items)
    <div class="panel my-4" id="shops-{{Str::slug($key, '-')}}">

        <div class="d-flex">
            <hr class="bar" />
            <h2 class="post-title">
                <a class="bd-content-title" href="#shops-{{Str::slug($key, '-')}}" data-anchorjs-icon="#">
                    {{$key}}
                </a>
            </h2>
        </div>

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
                Aún no tenemos comercios asociados aquí.
                <br /> 
                <a href="{{$CONFIG->PUNTO_VENTA}}" title="Quiero convertirme en punto de venta oficial." target="_blank" rel="opener noreferrer nofollow">
                    Quiero convertirme en punto de venta oficial.
                </a>
            </div>
        </div>
        @endif
    </div>
    @endforeach

</div>

@include('components.footer-catalogos')

@include('components.footer-pedidos')

@include('components.footer-tienda')

@endsection