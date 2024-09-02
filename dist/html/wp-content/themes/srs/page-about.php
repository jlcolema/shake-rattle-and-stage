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

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>