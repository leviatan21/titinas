@extends('layouts.app')

@section('content')
<div class="container page-contacts">

    <header class="page-header">
        <h1 class="page-title">{{$SEO->TITLE}}</h1>
    </header>

    @include('components.share')

    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 mt-4">
        <div class="col mb-3">
            <div class="card contact h-100">
                <div class="card-header">
                    <h2 class="card-title">Gestión de pedidos y entregas</h2>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="block">
                        <strong>{{$CONFIG->ANA_NAME}}</strong> 
                    </span>
                    <span class="block">
                        <strong>Tel:</strong> <a href="tel:{{$CONFIG->ANA_TEL}}">{{$CONFIG->ANA_TEL}}</a>
                    </span>
                    <span class="block">
                        <strong>Email:</strong> <a href="mailto:{{$CONFIG->ANA_EMAIL}}">{{$CONFIG->ANA_EMAIL}}</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card contact h-100">
                <div class="card-header">
                    <h2 class="card-title">Gestión artística</h2>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="block">
                        <strong>{{$CONFIG->ROX_NAME}}</strong>  
                    </span>
                    <span class="block">
                        <strong>Tel:</strong>  <a href="tel:{{$CONFIG->ROX_TEL}}">{{$CONFIG->ROX_TEL}}</a>
                    </span>
                    <span class="block">
                        <strong>Email:</strong> <a href="mailto:{{$CONFIG->ROX_EMAIL}}">{{$CONFIG->ROX_EMAIL}}</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header pt-5">
        <h2 class="page-title">Condiciones</h2>
    </div>
    <div class="row">
        <div class="col">

            <div class="card bg-light mt-4">
                <div class="card-body d-flex flex-column">
                    <div class="block">
                        <strong class="title">Compra mínima por mayor: </strong> $ 150.000.-
                    </div>
                </div>
            </div>

            <div class="card bg-light mt-4">
                <div class="card-body d-flex flex-column">
                    <div class="block">
                        <strong class="title">Envíos: </strong> <br />
                    El pedido se envía por ANDREANI con quienes tenemos descuentos que trasladamos a nuestros clientes<br />
                    O por un transporte a coordinar<br />
                    También, por supuesto, pueden retirar en nuestra sede de Villa Uquiza CABA, o enviar 
                    un comisionista.
                    </div>
                </div>
            </div>

            <div class="card bg-light mt-4">
                <div class="card-body d-flex flex-column">
                    <div class="block">
                        <strong class="title">Tiempos de entrega: </strong>
                        <br />
                        El pedido se ARMA luego de la aceptación del presupuesto/remito que será enviado por email/whatsapp al cliente<br />
                        Se despacha una vez acreditado el pago, en un máximo de 7 días hábiles, pero en general es de 72hs.
                    </div>
                </div>
            </div>

            <div class="card bg-light mt-4">
                <div class="card-body d-flex flex-column">
                    <div class="block">
                        <strong class="title">forma de pago: </strong>
                        <br />
                        CABA: pago contra entrega de pedido.
                        <br />
                        Resto del país: a través de transferencia bancaria a <strong>Anabella Audubert</strong>
                        <br />
                        CUIT: 27-23505496-0
                        <br />
                        CBU: 0720049688000014438640
                        <br />
                        Alias: SUELA.SABLE.BAR
                        <br />
                        Banco Santander - Cuenta única 049-144386/4
                    </div>
                </div>
            </div>

            <div class="card bg-light mt-4">
                <div class="card-body d-flex flex-column">
                    <div class="block">
                        <strong class="title">LOS NUEVOS CLIENTES</strong> <br />
                        Recibirán junto con el pedido "muestras vivas" de nuestros productos exclusivos una muestra para que exhiban.
                        <br />
                        Pueden comunicarse con nosotras a <a href="mailto:{{$CONFIG->EMAIL_VENTAS}}">{{$CONFIG->EMAIL_VENTAS}}</a>
                        <br />
                        Si tienen profesoras que deseen aprender técnicas como el Efecto Gaudí o la Pasta Cerámica sin horno, ofrecemos seminarios a distancia, hay muchos seminarios disponibles que pueden impplementar en sus talleres. 
                        <br />
                        Los precios son sumamente accesibles, se envía un link privado para verlo y dura PARA SIEMPRE.
                        <br />
                        Pueden ver mas información en <a href="{{$SEO->SITEURL}}">nuestra página</a>
                        </div>
                </div>
            </div>
        
        </div>
    </div>

</div>

@include('components.footer-tienda')
@include('components.footer-pedidos')
@include('components.footer-catalogos')

@endsection