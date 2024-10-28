@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('/css/plugins/woocommerce/woocommerce-smallscreen.css?ver=9.2.2')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('/css/plugins/woocommerce/woocommerce.css?ver=7.2.2')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset("/css/plugins/woocommerce/woocommerce-grid.css{$REFRESH}")}}" type="text/css" media="all" />
@endsection

@section('js')
<script type='text/javascript' src="{{asset('/js/plugins/woocommerce/woocommerce.min.js?ver=7.2.2')}}" defer></script>
@endsection

@section('content')
<div class="container">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    @isset($exclusivos)
    @include('catalogos.table', ['title'=>'Productos Exclusivos', 'items'=>$exclusivos])
    @endisset

    @isset($especiales)
    @include('catalogos.table', ['title'=>'Especiales', 'items'=>$especiales])
    @endisset

    @isset($generales)
    @include('catalogos.table', ['title'=>'Generales', 'items'=>$generales])
    @endisset
</div>

@include('components.footer-catalogos')

@endsection
