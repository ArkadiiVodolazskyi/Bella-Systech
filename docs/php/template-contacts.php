<?php
  /*
    Template Name: Контакты
  */
?>

<?php get_header(); ?>

	<!-- Content start -->

	<section class="page_header">
		<div class="wrapper">
			<h2><?php the_title(); ?></h2>
		</div>
	</section>

	<div class="breadcrumbs">
		<div class="wrapper">
			<a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			<a href="#" class="current"><?php the_title(); ?></a>
		</div>
	</div>

	<section class="page_contacts">
		<div class="wrapper">
			<div class="left">
				<div class="choose_city">
					<?php while( have_rows('dealer_list_contacts') ): the_row(); ?>
					<button
						<?= get_row_index() === 1 ? "class='active'" : ''; ?>
						data-city="city_<?= get_row_index(); ?>"
					>
						<?php the_sub_field('city'); ?>
					</button>
					<?php endwhile; ?>
				</div>
				<div class="select_city">
					<select id="citySelect">
						<?php while( have_rows('dealer_list_contacts') ): the_row(); ?>
							<option <?= get_row_index() === 1 ? "selected" : ''; ?>>
								<?php the_sub_field('city'); ?>
							</option>
						<?php endwhile; ?>
					</select>
				</div>
				<div class="contacts">
					<ul>
						<?php while( have_rows('dealer_list_contacts') ): the_row();
							$index = get_row_index();
						?>
							<?php while( have_rows('item') ): the_row(); ?>

								<li
									class="address <?= $index === 1 ? "active" : ''; ?>"
									data-city="city_<?= $index; ?>"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_map.svg" alt="ico_map">
									<a>
										<?php the_sub_field('address'); ?>
									</a>
								</li>

								<li
									class="phones <?= $index === 1 ? "active" : ''; ?>"
									data-city="city_<?= $index; ?>"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_phone.svg" alt="ico_phone">
									<ul>
										<?php while( have_rows('phones') ): the_row(); ?>
											<li><a href="tel:<?php the_sub_field('tel'); ?>">
												<?php the_sub_field('tel'); ?>
											</a></li>
										<?php endwhile; ?>
									</ul>
								</li>

							<?php endwhile; ?>
						<?php endwhile; ?>
						<li class="email">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_mail.svg" alt="">
							<a href="mailto:office@bella-systech.com.ua">office@bella-systech.com.ua</a>
						</li>
					</ul>
					<div>
						<button class="filled open-connect">Написать нам</button>
						<ul class="messengers">
							<li><a href="https://www.facebook.com/bellasystech.ua/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_facebook.svg" alt="">
							</a></li>
							<li><a href="https://www.instagram.com/bella_systech.ua/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_instagram.svg" alt="">
							</a></li>
							<li><a href="https://t.me/TheSouthernCity">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_telegramBlue.svg" alt="">
							</a></li>
							<li><a href="https://www.youtube.com/channel/UCoVgfdRbf2Z9V9MNGbT9Frg">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_youtube.svg" alt="">
							</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="figure pinkEmpty"></div>
				<div class="map active" data-city="city_1"></div>
				<div class="map" data-city="city_2"></div>
				<div class="map" data-city="city_3"></div>
			</div>
		</div>
	</section>

	<!-- Content end -->

<?php get_footer(); ?>