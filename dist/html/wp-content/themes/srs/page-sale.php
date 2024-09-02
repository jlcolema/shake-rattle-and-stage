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

					<div id="products">

						<div class="inner-wrap">

							<div class="products flexslider">

								<?php

									$posts = get_field('products');

									if( $posts ): ?>

										<ul class="slides">

											<?php foreach( $posts as $post): ?>

												<?php setup_postdata($post); ?>

												<li>

													<img src="<?php the_field('product_image'); ?>" alt="<?php the_title(); ?>" />

													<div class="detail">

														<h2 class="title"><?php the_title(); ?></h2>

														<div class="price">

															Price: <span>$<?php the_field('product_price'); ?></span>

														</div>

														<div class="description">

															<?php the_field('product_description'); ?>

														</div>

													</div>

												</li>

											<?php endforeach; ?>

										</ul>

									<?php wp_reset_postdata(); ?>

								<?php endif; ?>

							</div>

						</div>

					</div>

					<div id="carousel">

						<div class="inner-wrap">

							<div class="carousel flexslider">

								<?php

									$posts = get_field('products');

									if( $posts ): ?>

										<ul class="slides">

											<?php foreach( $posts as $post): ?>

												<?php setup_postdata($post); ?>

												<li>

													<img src="<?php the_field('product_thumbnail'); ?>" alt="<?php the_title(); ?>" />

													<h3 class="title"><?php the_title(); ?></h3>

												</li>

											<?php endforeach; ?>

										</ul>

									<?php wp_reset_postdata(); ?>

								<?php endif; ?>

							</div>

						</div>

					</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>