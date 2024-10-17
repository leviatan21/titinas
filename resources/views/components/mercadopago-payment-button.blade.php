

<script 
    src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js" 
    data-preference-id="{{$preference_id}}" 
    data-source="{{$type ?? 'button'}}" 
    data-button-label="{{$title ?? 'Mercado Pago'}}"
    defer
></script>