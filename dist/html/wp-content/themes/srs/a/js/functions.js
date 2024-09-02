
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Nav Toggle
		-------------------------------------------*/

		// Notes...


		$("#nav").find(".toggle").click(function() {

			$(this).next("ul").toggleClass("open");

		});


		/*-------------------------------------------
			FitVids
		-------------------------------------------*/

		// Notes...


		$("#video").fitVids();


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		// $("body").addClass("dev");


		// Displays screen size on the fly.


		// var windowSize = $(window).width();

		// $("#footer").after('<div id="dev"></div>');

		// $("#dev").text(windowSize);


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Slideshow
		-------------------------------------------*/

		// Notes...


		$("#slideshow").find(".flexslider").flexslider({

			animation: "slide",
			slideshowSpeed: 15000,
			useCSS: false,
			smoothHeight: true,

			start: function(slider){

				// $("body").removeClass("loading");

			}

		});


		/*-------------------------------------------
			Testimonials
		-------------------------------------------*/

		// Notes...


		$("#testimonials").find(".flexslider").flexslider({

			animation: "slide",
			slideshow: false,
			useCSS: false,
			smoothHeight: true,
			controlNav: false,

			start: function(slider){

				// $("body").removeClass("loading");

			}

		});


		/*-------------------------------------------
			Products
		-------------------------------------------*/

		// Notes...


		$('.carousel').flexslider({

			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 200,
			itemMargin: 0,
			minItems: 1,
			maxItems: 4,
			asNavFor: '.products'

		});

		$('.products').flexslider({

			animation: "fade",
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false,
			sync: ".carousel"

		});


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		// var windowSize = $(window).width();

		// $("#dev").text(windowSize);


	});


})(window.jQuery);