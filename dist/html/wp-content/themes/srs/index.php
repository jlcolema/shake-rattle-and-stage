<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

						<?php posted_on(); ?>

						<div class="entry">

							<?php the_content(); ?>

						</div>

						<footer class="postmetadata">

							<?php the_tags(__('Tags: ','techy'), ', ', '<br />'); ?>
							<?php _e('Posted in','techy'); ?> <?php the_category(', ') ?> |
							<?php comments_popup_link(__('No Comments &#187;','techy'), __('1 Comment &#187;','techy'), __('% Comments &#187;','techy')); ?>

						</footer>

					</article>

				<?php endwhile; ?>

				<?php post_navigation(); ?>

				<?php else : ?>

					<h2><?php _e('Nothing Found','techy'); ?></h2>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
