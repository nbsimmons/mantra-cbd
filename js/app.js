$(document).ready(function(){
	var heroBanner = new Swiper ('#hero-banner', {
	    // Optional parameters
	    direction: 'horizontal',
	    pagination: {
	      el: '.banner-pagination',
	      bulletClass: 'b-pagination-bullet',
		  bulletActiveClass: 'b-pagination-bullet-active',
		  clickable: true
		},
		autoplay: {
			delay: 5000,
		},

	})
});