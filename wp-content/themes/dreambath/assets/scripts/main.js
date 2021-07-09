import 'bootstrap/dist/js/bootstrap.bundle'
import 'owl.carousel/dist/owl.carousel.min'
import 'jquery-countdown/dist/jquery.countdown.min'

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

	/*------------------
	    CountDown
	--------------------*/
	var timerdate = $("#countdown-time").data('final-date')
	console.log(timerdate);


	$("#countdown-time").countdown(timerdate, function (event) {
		$(this).html(event.strftime("<div class='countdown__item'><span>%D</span> <span id='wer'>:</span> <br> <p>Days</p> </div>" + 
		"<div class='countdown__item'><span>%H</span> <span id='wer'>:</span> <br> <p>Hours</p> </div>" + 
		"<div class='countdown__item'><span>%M</span> <span id='wer'>:</span> <br> <p>Minutes</p> </div>" + 
		"<div class='countdown__item'><span>%S</span> <br> <p>Seconds</p> </div>"));
	});
