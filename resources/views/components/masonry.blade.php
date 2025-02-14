

{{--<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>--}}
@section('js')
<script type='text/javascript' src="{{asset('/js/libs/masonry/masonry.pkgd.min.js?ver=4.2.2')}}" defer></script>
@endsection

<div class="container mt-5">
    <div class="grid masonry">
        <div class="grid-item">
            <img src="https://titinas.com.ar/images/productos/exclusivos/espatul-art.webp" />
        </div>
        <div class="grid-item grid-item--width2">
            <img src="https://titinas.com.ar/images/productos/exclusivos//nueva-pasta-ceramica-sin-horno.webp" />
        </div>
        <div class="grid-item">
            <img src="https://titinas.com.ar/images/productos/exclusivos/efecto-gaudi.webp" />
        </div>
    </div>
</div>

<style>
    .masonry {
        background: #EEE;
        max-width: 1200px;
    }
    /* clearfix */
    .masonry:after {
    content: '';
    display: block;
    clear: both;
    }

    .grid-item { 
        width: 200px;
        float: left;
        background: #D26;
        border: 2px solid #333;
        border-color: hsla(0, 0%, 0%, 0.5);
        border-radius: 5px;
    }
    .grid-item--width2 { width: 320px; }
    .grid-item--width3 { width: 480px; }
    .grid-item--width4 { width: 640px; }

    .grid-item--height2 { height: 200px; }
    .grid-item--height3 { height: 260px; }
    .grid-item--height4 { height: 360px; }
</style>

<script>
$(document).ready(function() {
    $('.masonry').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
    });
});
</script>
