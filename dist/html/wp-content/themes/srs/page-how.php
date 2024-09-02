<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="page-title">

						<h1>

							<span><?php the_title(); ?></span>

						</h1>

					</div>

					<div id="hero">

						<div class="inner-wrap">

							<img src="<?php the_field('hero_image'); ?>" alt="<?php the_field('hero_description'); ?>" />

						</div>

					</div>

					<div class="content">

						<?php the_content(); ?>

					</div>

					<?php if( have_rows('how_it_works') ): ?>

						<div class="gallery">

							<ul class="slides">

								<?php while( have_rows('how_it_works') ): the_row();

									$how_it_works_before = get_sub_field('how_it_works_before');

									$how_it_works_after = get_sub_field('how_it_works_after');

									$image_id = $post->ID;

									$count++

								?>

								<li>

									<div class="thumbnail">

										<a class="fancybox" rel="gallery" href="#image-<?php echo $count; ?>">

											<div class="before">

												<img src="<?php echo $how_it_works_before['url']; ?>" alt="" />

												<p>Before</p>

											</div>

											<div class="after">

												<img src="<?php echo $how_it_works_after['url']; ?>" alt="" />

												<p>After</p>

											</div>

										</a>

										<div class="zoom" id="image-<?php echo $count; ?>">

											<div class="before">

												<img src="<?php echo $how_it_works_before['url']; ?>" alt="" />

												<p>Before</p>

											</div>

											<div class="after">

												<img src="<?php echo $how_it_works_after['url']; ?>" alt="" />

												<p>After</p>

											</div>

										</div>

									</div>

								</li>

								<?php endwhile; ?>

							</ul>

						</div>

					<?php endif; ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>