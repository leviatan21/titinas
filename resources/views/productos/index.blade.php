@extends('layouts.app')

@section('content')
<div id="page-wrap">
    <div class="page-content">

        <div class="page-header full-width">
            <h1 class="hidden">Materiales para el arte decorativo y la creatividad</h1>
        </div>

        @include('components.products-grid', ['products' => $products])

    </div>
</div>
@endsection