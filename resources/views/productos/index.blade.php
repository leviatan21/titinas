@extends('layouts.app')

@section('content')
<div class="container">
    
    <header class="page-header full-width">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    @include('components.products-drawers', ['products'=>$products])

</div>
@endsection