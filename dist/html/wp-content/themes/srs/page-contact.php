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

					<div id="map">

						<div class="inner-wrap">

							<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?client=safari&amp;oe=UTF-8&amp;q=1225+Wilshire+Boulevard,+Los+Angeles,+CA,+United+States&amp;ie=UTF8&amp;hq=&amp;hnear=1225+Wilshire+Blvd,+Los+Angeles,+California+90017&amp;gl=us&amp;t=m&amp;z=14&amp;ll=34.053355,-118.265582&amp;output=embed"></iframe>

						</div>

					</div>

					<div class="vcard">

						<div class="fn n org"><?php bloginfo('name'); ?></div>

						<div class="adr">

							<div class="street"><?php the_field('contact_street', 'option'); ?></div>

							<span class="locality"><?php the_field('contact_city', 'option'); ?></span>,

							<span class="region">CA</span>

							<span class="zipcode"><?php the_field('contact_zipcode', 'option'); ?></span>

						</div>

						<div class="tel"><?php the_field('contact_phone', 'option'); ?></div>

						<div class="email">

							<a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a>

						</div>

					</div>

					<div id="contact-form">

						<div class="inner-wrap">

							<div class="form">

								<?php gravity_form(

									// $id_or_title

									"1",

									// $display_title

									true,

									// $display_description

									true,

									// $display inactive

									false,

									// $field_values

									null,

									// $ajax

									false,

									// $tabindex

									1

								); ?>

							</div>

						</div>

					</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>