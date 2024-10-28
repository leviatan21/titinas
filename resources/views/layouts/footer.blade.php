
<footer id="page-footer" class="clearfix">
    <div class="footer-socials">
@isset($SOCIAL->facebook)
        <a href="{{$SOCIAL->facebook}}" 
            title="Seguinos en Facbook" 
            aria-label="Seguinos en Facbook" 
            data-toggle="tooltip" 
            data-placement="top" 
            target="_blank" 
            rel="opener noreferrer nofollow"
        >
            <span class="footer-socials-icon">
                @include('components.svg.facebook')
            </span>
        </a>
@endisset
@isset($SOCIAL->instagram)
        <a href="{{$SOCIAL->instagram}}" 
            title="Seguinos en Instagram" 
            aria-label="Seguinos en Instagram" 
            data-toggle="tooltip" 
            data-placement="top" 
            target="_blank" 
            rel="opener noreferrer nofollow"
        >
            <span class="footer-socials-icon">
                @include('components.svg.instagram')
            </span>
        </a>
@endisset
@isset($SOCIAL->pinterest)
        <a href="{{$SOCIAL->pinterest}}" 
            title="Seguinos en Pinterest" 
            aria-label="Seguinos en Pinterest" 
            data-toggle="tooltip" 
            data-placement="top" 
            target="_blank" 
            rel="opener noreferrer nofollow"
        >
            <span class="footer-socials-icon">
                @include('components.svg.pinterest')
            </span>
        </a>
@endisset
@isset($SOCIAL->youtube)
        <a href="{{$SOCIAL->youtube}}" 
            aria-label="Seguinos en Youtube" 
            title="Seguinos en Youtube" 
            data-toggle="tooltip" 
            data-placement="top" 
            target="_blank" 
            rel="opener noreferrer nofollow"
        >
            <span class="footer-socials-icon">
                @include('components.svg.youtube')
            </span>
        </a>
@endisset
@isset($SOCIAL->whatsapp)
        <a href="{{$SOCIAL->whatsapp}}" 
            title="Escribinos por Whatsapp" 
            aria-label="Escribinos por Whatsapp" 
            data-toggle="tooltip" 
            data-placement="top" 
            target="_blank" 
            rel="opener noreferrer nofollow"
        >
            <span class="footer-socials-icon">
                @include('components.svg.whatsapp')
            </span>
        </a>
@endisset
@isset($SOCIAL->tienda)
        <a href="{{$SOCIAL->tienda}}" 
            aria-label="Comprar en la tienda oficial" 
            title="Comprar en la tienda oficial" 
            data-toggle="tooltip" 
            data-placement="top" 
            target="_blank" 
            rel="opener noreferrer nofollow"
        >
            <span class="footer-socials-icon">
                @include('components.svg.shopping')
            </span>
        </a>
@endisset
    </div>

    <div class="footer-copyright">
        <div class="page-footer-inner container">
            <div class="copyright-info">
                © {{date('Y')}} - Derechos Reservados | 
                <span class="credit">
                    Diseño y desarrollo <a href="https://www.linkedin.com/in/gabriel-vazquez-84431531/" title="Desarrollador NodeJs BackEnd" data-toggle="tooltip" data-placement="top" target="_blank" rel="opener noreferrer nofollow">Leviatan21</a>
                </span>
            </div>
        </div>
    </div>

    <span class="scrolltop" title="Ir arriba" data-toggle="tooltip" data-placement="left" >
        @include('components.svg.angle-up')
    </span>

</footer>
