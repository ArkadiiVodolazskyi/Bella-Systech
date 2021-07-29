<?php get_header(); ?>

	<section class="page_header">
		<div class="wrapper">
			<div class="date"><?= get_the_date(); ?></div>
			<h2><?php the_title(); ?></h2>
		</div>
	</section>

	<div class="breadcrumbs">
		<div class="wrapper">
			<a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			<a href="<?php home_url(); ?>/news">
				Новости
			</a>
			<a class="current"><?php the_title(); ?></a>
		</div>
	</div>

	<section class="single_news">
		<div class="wrapper">

			<img src="<?php echo get_field('main_img'); ?>" class="thumbnail" alt="post thumbnail">

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

		</div>
	</section>

	<section class="news other_news">
		<div class="wrapper">
			<h2>Читайте также</h2>

			<div class="cards cards-news toSlick" data-type="hs9" data-mobile="true" data-screen="1280">
				<?php
					// Show 4 other posts from news, except current
					$posts = get_posts( [
						'post_type' => 'news',
						'numberposts' => 4,
						'exclude' => url_to_postid(get_permalink())
					] );

					foreach( $posts as $key=>$post ) {
						setup_postdata($post);
						$url = get_permalink();
						$img = get_field('main_img');
						$date = get_the_date('j F Y', $post->id);
						$post_title = $post->post_title;
				?>

					<a href="<?= $url; ?>" class="card">
						<div class="image">
							<img src="<?= $img ?>" alt="news_thumbnail">
						</div>
						<div class="text">
							<span class="date"><?= $date; ?></span>
							<h6><?= $post_title; ?></h6>
						</div>
					</a>

				<?php }; wp_reset_postdata(); ?>
			</div>

		</div>
	</section>

<?php get_footer(); ?>