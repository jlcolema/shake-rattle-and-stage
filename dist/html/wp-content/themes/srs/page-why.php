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

					<div class="content">

						<?php the_content(); ?>

					</div>

					<?php if( have_rows('reasons') ): ?>

						<div id="reasons">

							<ol>

							<?php while( have_rows('reasons') ): the_row();

								$reason_image = get_sub_field('reason_image');

								$reason_title = get_sub_field('reason_title');

								$reason_description = get_sub_field('reason_description');

							?>

								<li>

									<div class="photo">

										<img src="<?php echo $reason_image['url']; ?>" alt="<?php echo $reason_title; ?>" />

									</div>

									<h2 class="title"><?php echo $reason_title; ?></h2>

									<div class="description">

										<?php echo $reason_description; ?>

									</div>

								</li>

							<?php endwhile; ?>

							</ol>

						</div>

					<?php endif; ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>