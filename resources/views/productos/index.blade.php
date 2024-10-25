@extends('layouts.app')

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="page-header full-width pb-4">
            <h1 class="page-title">{{$SEO->TITLE}}</h1>
        </div>

        @include('components.share')

        @include('components.products-grid', ['products' => $products])

    </div>
</div>
@endsection