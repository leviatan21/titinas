@extends('layouts.app')

@section('content')
<div class="page-content contact">

    <div class="container">
        <article class=" page type-page status-publish has-post-thumbnail hentry">
            <header class="post-header">
                <h1 class="post-title">Contacto</h1>
            </header>
            <div class="post-content col-container">
                <div class="content-column col">
                    <div class="widget-title">
                        <h2 class="title">Gestión de pedidos y entregas</h2>
                    </div>
                    <ul style="padding-left: 0;">
                        <li>
                            <strong>{{$CONFIG->ANA_NAME}}</strong>  
                        </li>
                        <li>
                            <strong>Tel:</strong> <a href="tel:{{$CONFIG->ANA_TEL}}">{{$CONFIG->ANA_TEL}}</a>
                        </li>
                        <li>
                            <strong>Email:</strong> <a href="mailto:{{$CONFIG->ANA_EMAIL}}">{{$CONFIG->ANA_EMAIL}}</a>
                        </li>
                    </ul>
                </div>
                <div class="content-column col">
                    <div class="widget-title">
                        <h2 class="title">Gestión artística</h2>
                    </div>
                    <ul style="padding-left: 0;">
                        <li>
                            <strong>{{$CONFIG->ROX_NAME}}</strong>  
                        </li>
                        <li>
                            <strong>Tel:</strong>  <a href="tel:{{$CONFIG->ROX_TEL}}">{{$CONFIG->ROX_TEL}}</a>
                        </li>
                        <li>
                            <strong>Email:</strong> <a href="mailto:{{$CONFIG->ROX_EMAIL}}">{{$CONFIG->ROX_EMAIL}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </div>

    <div class="container pt-4">
        <article class="page type-page status-publish has-post-thumbnail hentry">
            <header class="post-header">
                <h2 class="page-title">Condiciones</h2>
            </header>
            <div class="post-content">

                    <ul class="blog-grid">
                        <li class="blog-list-style">
                            <strong class="title">Compra mínima por mayor: </strong> $ 150.000.-
                        </li>
                        <li class="blog-list-style">
                            <strong class="title">Envíos: </strong> <br/>
                            El pedido se envía por ANDREANI con quienes tenemos descuentos que trasladamos a nuestros clientes<br/>
                            O por un transporte a coordinar<br/>
                            También, por supuesto, pueden retirar en nuestra sede de Villa Uquiza CABA, o enviar 
                            un comisionista.
                        </li>
                        <li class="blog-list-style">
                            <strong class="title">Tiempos de entrega: </strong> <br/>
                            El pedido se ARMA luego de la aceptación del presupuesto/remito que será enviado por email/whatsapp al cliente<br/>
                            Se despacha una vez acreditado el pago, en un máximo de 7 días hábiles, pero en general es de 72hs.
                        </li>
                        <li class="blog-list-style">
                            <strong class="title">forma de pago: </strong> <br/>
                            CABA: pago contra entrega de pedido.
                            <br/>
                            Resto del país: a través de transferencia bancaria a <strong>Anabella Audubert</strong>
                            <br />
                            CUIT: 27-23505496-0
                            <br />
                            CBU: 0720049688000014438640
                            <br />
                            Alias: SUELA.SABLE.BAR
                            <br />
                            Banco Santander - Cuenta única 049-144386/4
                        </li>
                        <li class="blog-list-style">
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
                        </li>

                    </ul>

            </div>
        </article>
    </div>

    @include('components.footer-shop')
    @include('components.footer-pedidos')
    @include('components.footer-catalogos')

</div>
@endsection