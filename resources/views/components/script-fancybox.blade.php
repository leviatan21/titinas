
@section('css')
{{--<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" type="text/css" media="all" />--}}
<link href="{{asset('css/libs/fancyapps/ui5.0/fancybox/fancybox.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('js')
{{--<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" type="text/javascript" defer></script>--}}
<script src="{{asset('js/libs/fancyapps/ui5.0/fancybox/fancybox.umd.js')}}" type="text/javascript" defer></script>
@endsection

<script type="text/javascript">
$(document).ready(function() {
    FancyboxDefaults();
    @foreach ($items as $key => $item)
        Fancybox.bind('[data-fancybox="gallery-{{$key}}"]',Fancybox.defaults);
    @endforeach
});
</script>