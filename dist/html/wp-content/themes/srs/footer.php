	<footer id="footer" role="contentinfo">

		<div class="wrap">

			<p id="copyright">&copy; <?php echo date("Y"); echo " "; bloginfo( 'name' ); ?>, All rights reserved.</p>

			<div id="created-by">

				<a href="http://www.techyscouts.com" rel="external">A Techy Scouts Creation</a>

			</div>

		</div>

	</footer>

	<?php wp_footer(); ?>

	<?php

		/* Plugins */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/matchmedia.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/picturefill.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/flexslider.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/fitvids.js"></script>

	<?php if ( is_page( 'home' ) ) { ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/scroll.js"></script>

	<script>

		/*-------------------------------------------
			Smooth Scrolling
		-------------------------------------------*/

		// Notes...


		$('.go-to a').smoothScroll({

			offset: -40

		});

	</script>

	<?php } ?>

	<?php if ( is_page( 'gallery' ) ) { ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/fancybox.js"></script>

	<script>

		/*-------------------------------------------
			Photo Zoom
		-------------------------------------------*/

		// Notes...


		$(document).ready(function() {

			$('.fancybox').fancybox();

		});

	</script>

	<?php } ?>

	<?php if ( is_page( 'how' ) ) { ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/fancybox.js"></script>

	<script>

		/*-------------------------------------------
			Photo Zoom
		-------------------------------------------*/

		// Notes...


		$(".fancybox").fancybox({

			beforeShow : function() {

        		var alt = this.element.find('img').attr('alt');

		        this.inner.find('img').attr('alt', alt);

		        this.title = alt;

    		}

		});


		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});

	</script>

	<?php } ?>

	<?php

		/* Functions */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/functions.js"></script>

	<?php

		/* Analytics */

	?>

	<?php if( the_field( 'google_analytics', 'option' ) ): ?>

		<!--

		Asynchronous google analytics; this is the official snippet.

		Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

		-->

		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php the_field( 'google_analytics', 'option'); ?>', 'domainname.com');

			ga('send', 'pageview');

		</script>

	<?php endif; ?>

</body>

</html>