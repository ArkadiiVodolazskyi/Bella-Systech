<?php get_header(); ?>

	<section class="page_header">
		<div class="wrapper">
			<h2><?php the_title(); ?></h2>
		</div>
	</section>

	<div class="breadcrumbs">
		<div class="wrapper">
			<a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			<a href="<?php home_url(); ?>/study">
				Обучающие видео
			</a>
			<a class="current"><?php the_title(); ?></a>
		</div>
	</div>

	<section class="single_news single_videos">
		<div class="wrapper">

			<?php if( !post_password_required( get_the_ID() )) { ?>

				<?php while( have_rows('content') ): the_row(); ?>

					<?php while( have_rows('h3') ): the_row(); ?>
						<h3>
							<?php the_sub_field('text'); ?>
						</h3>
					<?php endwhile; ?>

					<?php while( have_rows('h4') ): the_row(); ?>
						<h4>
							<?php the_sub_field('text'); ?>
						</h4>
					<?php endwhile; ?>

					<?php while( have_rows('p') ): the_row(); ?>
						<p>
							<?php the_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while( have_rows('list') ): the_row(); ?>
						<p><strong>
							<?php the_sub_field('title'); ?>
						</strong></p>
						<ul>
							<?php while( have_rows('item') ): the_row(); ?>
								<li>
									<?php the_sub_field('text'); ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endwhile; ?>

					<?php while( have_rows('video') ): the_row(); ?>
						<video controls="" src="<?= get_sub_field('file_src'); ?>"></video>
					<?php endwhile; ?>

					<?php while( have_rows('gallery') ): the_row(); ?>
						<h3>
							<?php the_sub_field('title'); ?>
						</h3>
						<div class="cards cards-gallery">
							<?php
								$images = get_sub_field('images');
								foreach( $images as $image ) {
							?>
								<a
									class="card"
									href="<?= $image; ?>"
									data-lightbox="gallery_image"
								>
									<img src="<?= $image; ?>" alt="gallery_image">
								</a>
							<?php } ?>
						</div>
					<?php endwhile; ?>

				<?php endwhile; ?>

			<?php } else {
				echo get_the_password_form(get_the_ID());
			} ?>

		</div>
	</section>

<?php get_footer(); ?>