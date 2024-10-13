

@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endsection

@section('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection

<script type="text/javascript">
$(document).ready(function() {
    slider();
});

function slider() {
	var RTL = false;
	if ( $('html').attr('dir') == 'rtl' ) {
		RTL = true;
	}

	$('#featured-slider').slick({
		'prevArrow': '<span class="prev-arrow icon-angle-left"> <svg class="svg-inline--fa fa-solid fa-caret-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"> <path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/></svg> </span>',
		'nextArrow': '<span class="next-arrow icon-angle-right"> <svg class="svg-inline--fa fa-solid fa-caret-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg> </span>',
		'dotsClass': 'slider-dots',
		'adaptiveHeight': true,
		'rtl': RTL,
		'speed': 750,
  		'customPaging': function(slider, i) {
            return '';
        }
	});
}
</script>