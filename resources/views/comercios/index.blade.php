@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="container pt-4">
        <article class="article">
            <header class="post-header">
                <h1 class="post-title">Puntos de venta</h1>
            </header>
            <p class="post-content">
                    Buscá el comercio que quede mas cerca de tu casa<br/>
                    Si no encontras, podes escribirnos a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a><br/>
                    y darnos los datos de tu comercio mas cercano<br/>
                    Nosotros los contactaremos.
            </p>
            <p class="post-footer">
                Para consultas y pedidos de cursos a distancia escribirnos a
                <a href="mailto:{{$CONFIG->EMAIL_ADISTANCIA}}">{{$CONFIG->EMAIL_ADISTANCIA}}</a>
            </p>
        </article>
    </div>

    <div class="container pt-4">
@foreach ($comercios as $key => $items)
        <article class="article">
            <h2 class="page-title" id="shops-{{$key}}">
                <span class="bd-content-title">
                    {{$key}}
                    <a class="black anchor-link" href="#shops-{{$key}}">#</a>
                </span>
            </h2>
            <ul class="blog-grid shops">
                @foreach ($items as $item)
                <li class="blog-list-style">
                    <article class="article">
                        <div class="post-header">
                            <h3 class="post-title">{!!$item['name']!!}</h3>
                        </div>
                        <div class="post-body">
                        @isset($item['address'])
                            @foreach ($item['address'] as $address)
                                <span class="post-author block">{!!$address!!}</span>
                            @endforeach
                        @endisset
                        </div>
                        <div class="post-footer">
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
                        </div>

                    </article>
                </li>
                @endforeach
            </ul>
        </article>
@endforeach
    </div>

    @include('components.footer-shop')
    @include('components.footer-pedidos')

</div>

@endsection