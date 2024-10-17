@extends('layouts.app')

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <header class="page-header full-width">
            <h1 class="hidden">Materiales para el arte decorativo y la creatividad</h1>
        </header>

        <div class="container my-4">
            <div class="featured-slider-area">
                <div id="featured-slider">
    @foreach ($slider as $item)
                <div class="slider-item">
                    <a href="{{$item['href']}}">
                        <img src="{{$item['image']}}" alt="{{$item['alt']}}" 
                        class="img-fluid rounded" width="1110" height="443"
                        decoding="sync" loading="lazy" fetchpriority="high"
                    />
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