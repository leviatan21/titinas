@extends('layouts.app')


@section('content')
<div class="page-content contact">
    <div class="container pt-4">
        <header class="post-header">
            <h1 class="post-title">Posteos en Titina's</h1>
        </header>
    </div>

    @include('blog.grid', ['posts'=> $posts])

</div>
@endsection