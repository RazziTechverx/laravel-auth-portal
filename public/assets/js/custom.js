$(document).ready(function(){
	// WOW JS
	new WOW().init();

    // scroll function for header background on scroll //
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll > 0) {
			$("body").addClass("scrolled");
		} else {
			$("body").removeClass("scrolled");
		}
	});

	// Hamburger
	$(".hamburger").click(function(){
		$("body").toggleClass("menu-btn-clicked");
	});

	// Header Dropdown Arrow
	$(".header-bottom nav > ul > li").children("ul").parent("li").addClass("has-dropdown");

	// Banner slider
	$('.home-banner-slider').slick({
		dots: true,
		arrows: false,
		loop: true,
		autoplay: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	  });
});