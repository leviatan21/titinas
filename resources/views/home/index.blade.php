@extends('layouts.app')

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="post-header full-width">
            <h1 class="hidden">Materiales para el arte decorativo y la creatividad</h1>
        </div>

        <div class="container mb-4">
            <div class="featured-slider-area">
                <div id="featured-slider" data-slick='{ "autoplay":true, "autoplaySpeed":5000, "slidesToShow":1, "slidesToScroll":1, "fade":true}'>
    @foreach ($slider as $item)
                <div class="slider-item">
                    <a href="{{$item['href']}}">
                        <img src="{{$item['image']}}" alt="{{$item['alt']}}" />
                    </a>  
{{--
                    <div class="slider-item-bg" style="background-image: url({{$item['image']}});"></div>
                    <div class="cv-container image-overlay">
                        <div class="cv-outer">
                            <div class="cv-inner">
                                <div class="slider-info">
                                    <div class="slider-categories">
                                    </div>
                                    <h2 class="slider-title">
                                    </h2>
                                    <div class="slider-read-more">
                                        <a href="{{$item['href']}}">read more</a>
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
        </div>

        @include('components.products-grid', ['products' => $products])
        @include('components.footer-shop')
        @include('components.footer-pedidos')

    </div>
</div>

@include('components.slider')

@endsection