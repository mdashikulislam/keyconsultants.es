(function ($) {
	'use strict';

	$(document).on('click', '.show-password', function () {
		let input = $($(this).parent('.input-password').find('input'));
		if (input.attr('type') == 'password') {
			input.attr('type', 'text');
			$(this).text('visibility_off');
		} else {
			input.attr('type', 'password');
			$(this).text('visibility');
		}
	});

	var btn = $('.scrollTopBtn');
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
			$('.seller-popup').css('bottom', '80px');
		} else {
			$('.seller-popup').css('bottom', '10px');
			btn.removeClass('show');
		}
	});
	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '300');
	});

	$('input[type="tel"],input[type="number"],.number').keyup(function (e) {
		if (/\D/g.test(this.value)) {
			this.value = this.value.replace(/\D/g, '');
		}
	});

	let header_height = $('.header-bottom-area').innerHeight();
	$(window).scroll(function () {
		if ($(window).scrollTop() >= header_height) {
			$('.header-bottom-area').addClass('sticky');
		} else {
			$('.header-bottom-area').removeClass('sticky');
		}
	});

	$('.slider-active').slick({
		dots: true,
		infinite: false,
		arrows: false,
		fade: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});

	$(document).on('click', '.mainmenu-responsive li span', function () {
		$(this).parent('.mainmenu-responsive li').find('.submenu').slideToggle();
	});
	$(document).on('click', '.responsive-trigger', function () {
		$(this).toggleClass('active');
		$('.mainmenu-responsive').toggleClass('active');
	});
})(jQuery);
