@extends('layouts.app')

@section('content')
<div class="container">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    <div class="row">
        <div class="col">

            <div class="card bg-light mt-4">
                <div class="card-body d-flex flex-column">
                    <div class="block text-center">
                        <strong class="title">Titina's & Origen Creativo</strong>
                        <p>
                            con Roxana Caballero y Rita Barraza Morán<br />
                        </p>
                        <p>
                            <strong>¡Completamente online y super completa!</strong>
                        </p>
                        <p>
                            Inscripción Febrero 2025<br />
                            Iniciamos en marzo 2025
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm mb-2">
                    @include('components.iframe-youtube-horizontal', ['url'=>'https://www.youtube.com/embed/4B-pVegdWH8', 'title'=>'Capacitación Efecto Gaudí 2025'])
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <ul class="blog-grid">
                <li class="blog-list-style text-center">
                    Descargar información en PDF <a href="{{asset('/pdf/CAPACITACION-ONLINE-EFECTO-GAUDI-2025.pdf')}}" rel="nofollow noopener" target="_blank">aquí</a>
                </li>
            </ul>
        </div>

    </div>

</div>

@include('components.footer-tienda')

@endsection