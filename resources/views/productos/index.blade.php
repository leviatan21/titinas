@extends('layouts.app')

@section('content')
{{--
<div class="w-100 h-100">
    <div class="parallax bgimg-1">
        <div class="caption">
            <span class="border">SCROLL DOWN</span>
        </div>
    </div>
    <div class="parallax-after">
        <div class="bg-777">
            <h3>Parallax Demo</h3>
            <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
        </div>
    </div>

    <div class="parallax bgimg-2">
        <div class="caption">
            <span class="border transparent">LESS HEIGHT</span>
        </div>
    </div>
    <div class="parallax-after">
        <div class="bg-ddd">
            <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
        </div>
    </div>

    <div class="parallax bgimg-3">
        <div class="caption">
            <span class="border transparent">SCROLL UP</span>
        </div>
    </div>
    <div class="parallax-after">
        <div class="bg-ddd">
            <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
        </div>
    </div>
</div>
--}}
<div class="container">
    
    <header class="page-header full-width">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    @include('components.products-drawers', ['products'=>$products])

</div>
@endsection