<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="page-title">

						<h1><?php the_title(); ?></h1>

					</div>

					<?php if( have_rows('slides') ): ?>

						<div id="slideshow">

							<div class="inner-wrap">

								<div class="flexslider">

									<ul class="slides">

										<?php while( have_rows('slides') ): the_row();

											$slide_image = get_sub_field('slide_image');

											$slide_title = get_sub_field('slide_title');

										?>

										<li>

											<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_title; ?>" />

											<div class="title">

												<div class="inner-title">

													<span><?php echo $slide_title; ?></span>

												</div>

											</div>

										</li>

										<?php endwhile; ?>

									</ul>

								</div>

								<div class="lights">

									<div class="light left"></div>

									<div class="light middle"></div>

									<div class="light right"></div>

								</div>

							</div>

						</div>

					<?php endif; ?>

					<div id="summary">

						<div class="inner-wrap">

							<div class="inner-inner-wrap">

								<div class="header">

									<h1 class="title"><?php the_field('summary_title'); ?></h1>

								</div>

								<div class="content">

									<?php the_field('summary_content'); ?>

								</div>

								<div class="more">

									<a href="<?php the_field('summary_link'); ?>">Read More</a>

								</div>

								<div class="go-to">

									<a href="#video">&darr;</a>

								</div>

							</div>

						</div>

					</div>

					<div id="video">

						<div class="inner-wrap">

							<iframe width="1280" height="720" src="//www.youtube.com/embed/<?php the_field('video_url'); ?>?rel=0" frameborder="0" allowfullscreen></iframe>

						</div>

					</div>

					<div id="testimonials">

						<div class="inner-wrap">

							<div class="inner-inner-wrap">

								<div class="header">

									<h3 class="title">Testimonials</h3>

								</div>

								<div class="flexslider">

									<?php

										$posts = get_field('testimonials');

										if( $posts ): ?>

											<ul class="slides">

												<?php foreach( $posts as $post): ?>

													<?php setup_postdata($post); ?>

													<li>

														<blockquote>

															<div class="quote">

																<?php the_field('testimonial_quote'); ?>

															</div>

															<cite><?php the_title(); ?>, <?php the_field('testimonial_age'); ?>, <?php the_field('testimonial_company'); ?></cite>

														</blockquote>

													</li>

												<?php endforeach; ?>

											</ul>

										<?php wp_reset_postdata(); ?>

									<?php endif; ?>

								</div>

							</div>

						</div>

					</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>