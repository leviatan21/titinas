@extends('layouts.app')

@section('content')
<div class="container page-manuals-index">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('manuales.grid', ['posts'=>$posts])

</div>
@endsection