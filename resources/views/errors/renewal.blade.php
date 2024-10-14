@extends('layouts.app')

@section('content')
<div id="page-wrap">
    <div class="page-content">
        <div class="main-wrapper renewal">

            <img src="{{asset('/images/renewal/shape-1.svg')}}" alt="" class="shape shape-1" loading="lazy" fetchpriority="high" />
            <img src="{{asset('/images/renewal/shape-2.svg')}}" alt="" class="shape shape-2" loading="lazy" fetchpriority="high" />
            <img src="{{asset('/images/renewal/shape-3.svg')}}" alt="" class="shape shape-3" loading="lazy" fetchpriority="high" />
            <img src="{{asset('/images/renewal/shape-4.svg')}}" alt="" class="shape shape-4" loading="lazy" fetchpriority="high" />
            <img src="{{asset('/images/renewal/shape-5.svg')}}" alt="" class="shape shape-5" loading="lazy" fetchpriority="high" />
            <img src="{{asset('/images/renewal/shape-6.svg')}}" alt="" class="shape shape-6" loading="lazy" fetchpriority="high" />

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 even-col">
                        <div class="img-wrapper">
                            <img src="{{asset('/images/renewal/img-1.svg')}}" alt="" loading="lazy" fetchpriority="high" />
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6 odd-col">
                        <div class="content-wrapper">
                            <h1>!!! Hola !!!</h1>
                            <h2>Nos renovamos !!!!</h2>
                            <p class="py-2">
                                Te invitamos a recorrer la nueva y renovada<br/>web de Titina's<br/>
                                donde encontrarás todos nuestros productos<br/>
                                con nuevas imágenes y mejoradas características
                            </p>
                            <div class="pt-5">
                                <a class="btn btn-dark" href="{{url('/')}}">Comenzar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    dataLayer.push({ 
        'event':"pageView", 
        'event_action':"pageView", 
        'event_category':"pageRenewal",
        'event_label':"pageRenewal",
        'event_value':"{{url()->current()}}"
    });
</script>
@endsection