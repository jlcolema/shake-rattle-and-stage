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

					<?php the_content(); ?>

					<?php if( have_rows('gallery') ): ?>

						<div class="gallery">

							<ul class="slides">

								<?php while( have_rows('gallery') ): the_row();

									/* Image */

									$attachment_id = get_sub_field('gallery_image');

									$full = "gallery_image";
									$thumbnail = "gallery_thumbnail";

									// Full (800 x 600)

									$image_full = wp_get_attachment_image_src( $attachment_id, $full );

									// Thumbnail (400 x 300)

									$image_thumbnail = wp_get_attachment_image_src( $attachment_id, $thumbnail );




									$gallery_image = get_sub_field('gallery_image');

									$gallery_description = get_sub_field('gallery_description');

								?>

								<li>

									<div class="thumbnail">

										<a class="fancybox" rel="gallery" href="<?php echo $image_full[0]; ?>">

											<img src="<?php echo $image_thumbnail[0]; ?>" alt="<?php echo $gallery_description; ?>" />

										</a>

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