;(function($){
	$(document).ready(function() {
		//slider on main pages
		$('.bxSlider').bxSlider({
		    auto: true,
		    autoHover: true,
		    controls: false,
		    pager: false,
		    slideWidth: 300,
		    minSlides: 2,
		    maxSlides: 3,
		    moveSlides: 1,
		    slideMargin: 10
		  });
	});
})(jQuery)