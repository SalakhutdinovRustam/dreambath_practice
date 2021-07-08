import 'bootstrap/dist/js/bootstrap.bundle'
import 'owl.carousel/dist/owl.carousel.min'

/*--------------------------
	    Banner Slider
	----------------------------*/
	$(".banner__slider").owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: true,
		smartSpeed: 1200,
		autoHeight: false,
		autoplay: false,
		nav: true,
	});

	$(".customer__slider").owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: true,
		smartSpeed: 1200,
		autoHeight: false,
		autoplay: false,
		nav: true,
	});