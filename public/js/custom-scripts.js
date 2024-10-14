
$(document).ready(function() {
	ScrollTop();
	MobileMenu();
});

function ScrollTop() {
	$('.scrolltop').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$('html, body').animate({'scrollTop':0},800);
		return false;
	});
}

function MobileMenu() {
	$('.mobile-menu-btn').on( 'click', function() {
		$('.mobile-menu-container').slideToggle();
	});
	$(window).on('resize', function() {
		if ( $('.main-menu-container').css('display') === 'block' ) {
			$('.mobile-menu-container').css({'display':'none'});
		}
		if ($('.mobile-menu-btn').css('display') === 'none') {
			$('.mobile-menu-container').css({'display':'none'});
		}
	});
}

function FancyboxDefaults() {
	Fancybox.defaults = {
        ...Fancybox.defaults,
        'compact':false,'idle':false,'animated':false,'showClass':false,'hideClass':false,'dragToClose':false,'contentClick':false,'backdropClick':false,
        'Images':{'initialSize':'fit','protected':true,'zoom':false},
        'Thumbs':{'type':'classic','Carousel':{'infinite':false,center:function(){return this.contentDim>this.viewportDim}}},
        'Toolbar':{'display':{'left':['infobar'],'right':['iterateZoom','rotateCCW','rotateCW','flipX','flipY','slideshow','fullscreen','thumbs','close']}},
        'l10n':{'CLOSE':'Cerrar','NEXT':'Siguiente diapositiva','PREV':'Diapositiva anterior','GOTO':'Ir a la diapositiva #%d','MODAL':'Puedes cerrar esta ventana con la tecla ESC','ERROR':'Algo salió mal, inténtalo de nuevo más tarde','IMAGE_ERROR':'Imagen no encontrada','ELEMENT_NOT_FOUND':'Elemento HTML no encontrado','AJAX_NOT_FOUND':'Error al cargar el AJAX : No encontrado','AJAX_FORBIDDEN':'Error al cargar el AJAX : Prohibido','IFRAME_ERROR':'Error al cargar la página','TOGGLE_ZOOM':'Cambiar el nivel de zoom','TOGGLE_THUMBS':'Cambiar a miniaturas','TOGGLE_SLIDESHOW':'Cambiar a modo presentación','TOGGLE_FULLSCREEN':'Cambiar a modo pantalla completa','DOWNLOAD':'Descargar','PANUP':'Mover hacia arriba','PANDOWN':'Mover hacia abajo','PANLEFT':'Mover hacia la izquierda','PANRIGHT':'Mover hacia la derecha','ZOOMIN':'Mover a la derecha','ZOOMOUT':'Disminuir el zoom','TOGGLEZOOM':'Alternar nivel de zoom','TOGGLE1TO1':'Alternar nivel de zoom','ITERATEZOOM':'Alternar nivel de zoom','ROTATECCW':'Girar en sentido antihorario','ROTATECW':'Rotar las agujas del reloj','FLIPX':'Voltear horizontalmente','FLIPY':'Voltear verticalmente','FITX':'Ajustar horizontalmente','FITY':'Ajustar verticalmente','RESET':'Reiniciar','TOGGLEFS':'Alternar pantalla completa'},
    };
}