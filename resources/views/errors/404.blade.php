@extends('layouts.app')

@section('content')
<div class="page-content">
     <div class="page-404">
        <h2>¡Página no encontrada!</h2>
        <p>No podemos encontrar lo que estás buscando.</p>
        <p>Ir a <a href="{{url('/')}}">Página principal</a></p>
    </div>
</div>

<script>
    dataLayer.push({ 
        'event':"pageView", 
        'event_action':"pageView", 
        'event_category':"pageError",
        'event_label':"pageError",
        'event_value':"{{url()->current()}}"
    });
</script>
@endsection