@extends('layouts.app')

@section('content')
<div class="container">

    <header class="page-header full-width">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    <div class="featured-slider-area my-4">
        <div id="featured-slider">
        @foreach ($slider as $item)
            <div class="slider-item">
                <a href="{{$item['href']}}">
                    <img src="{{$item['image']}}" alt="{{$item['alt']}}" 
                        class="featured-slider-image" width="1110" height="443"
                        decoding="sync" loading="lazy" fetchpriority="{{$loop->index===0 ? 'high' : 'low'}}"
                    />
                </a>
{{--
                <div class="cv-container image-overlay">
                    <div class="cv-outer">
                        <div class="cv-inner">
                            <div class="slider-info">	

                                <div class="slider-categories">
                                    slider-categories
                                </div> 

                                <h2 class="slider-title"> 
                                    <a href="#">slider-title</a>	
                                </h2>

                                <div class="slider-read-more">
                                    <a href="#">slider-read-more</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
--}}
            </div>
        @endforeach
        </div>
    </div>

    @include('components.products-drawers', ['products'=>$products])

</div>

@include('components.script-slider')

@include('components.footer-pedidos')

@include('components.footer-tienda')

@endsection