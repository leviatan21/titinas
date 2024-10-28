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
                        decoding="sync" loading="lazy" fetchpriority="high"
                    />
                </a>  
        
            </div>
        @endforeach
        </div>
    </div>
    
    @include('components.products-drawers', ['products'=>$products])

</div>

@include('components.slider')
@include('components.footer-tienda')
@include('components.footer-pedidos')

@endsection