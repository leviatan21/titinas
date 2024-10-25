@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container">
        <article class=" page type-page status-publish has-post-thumbnail hentry">
            <header class="page-header">
                <h1 class="page-title">{{$SEO->TITLE}}</h1>
            </header>

            @include('components.share')

            <div class="post-content">
                <ul class="blog-grid">
                    <li class="blog-list-style">
                        <strong class="title">Videos: </strong> <br />
                        <p>
                            Los comprás y los tenés disponibles para siempre
                        </p>
                        <p>
                            La modalidad de nuestros cursos y capacitaciones a distancia es como si estuvieras en forma presencial,
                            en tiempo real, solo con pequeñas ediciones para agregar el mayor contenido posible y una mejor vista<br />
                            La diferencia entre seminario y capacitacion es que esta ultima esta basada en la TECNICA y no en el OBJETO a realizar<br />
                            En cambio los seminarios convocan al aprendizaje de una o varias tecnicas a traves de la realizacion de un trabajo en concreto.
                        </p>
                    </li>
                    <li class="blog-list-style">
                        <strong class="title">Forma de envio: </strong> <br />
                        Se les envía un link por mail para que puedan verlo.
                    </li>
                    <li class="blog-list-style">
                        <strong class="title">Tiempos de entrega: </strong> <br />
                        Si compra por Mercado pago debe enviar un mail a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a> para coordinar el envío. <br />
                        De no recibir mail de su parte se enviará el link del curso a mail con el cual compró en Mercado Pago
                    </li>
                    <li class="blog-list-style">
                        <strong class="title">Certificaciones: </strong> <br />
                        En las capacitaciones Ud. puede solicitar su certificación enviando fotos de los trabajos realizados y una foto suya al lado de los mismos a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a> <br />
                        ES IMPORTANTE QUE EN SUBJET/TEMA DEL MAIL INDIQUE EL NOMBRE DEL SEMINARIO<br />
                        y su nombre y apellido completo + mail con el cual se registró para adquirir los seminarios.
                    </li>
                    <li class="blog-list-style">
                        <strong class="title">TRANSFERENCIA BANCARIA: </strong> <br />
                        Si depositás o tranferís<br />
                        Envías la boleta de deósito a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a><br />
                        Se envía el link a la dirección de mail que indiques
                    </li>
                    <li class="blog-list-style">
                        <strong class="title">MERCADERÍA DE FABRICACIÓN EXCLUSIVA / PUNTO DE VENTA: </strong> <br />
                        Para el caso de la Pasta cerámica sin horno y el Efecto Gaudi, <br />
                        si Ud. no consigue el producto en su localidad, nosotros podemos enviarle por correo ANDREANI <br />
                        en forma minorista para que pueda realizar el trabajo. <br />
                        Y si posee taller, podemos luego venderle a precios preferenciales para que dicte los seminarios.
                    </li>
                    <li class="blog-list-style">
                        Para consultas y pedidos de cursos a distancia escribirnos a <a href="mailto:{{$CONFIG->EMAIL_ADISTANCIA}}">{{$CONFIG->EMAIL_ADISTANCIA}}</a>
                    </li>
                </ul>
            </div>
        </article>
    </div>

    <div class="container">
        @if (!empty($horizontal))
        @include('components.cursos-horizontal', ['courses' => $horizontal ])
        @endempty

        @if (!empty($vertical))
        @include('components.cursos-vertical', ['courses' => $vertical ])
        @endempty
    </div>
</div>
@endsection