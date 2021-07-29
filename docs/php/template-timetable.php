<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: Расписание
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

  <?php if( have_rows('list') ){ ?>
  <section class="schedule">
    <div class="wrapper">
      <div class="cards cards-schedule">
      <?php while( have_rows('list') ){ the_row(); ?>

        <div class="card" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="<?php echo get_row_index(); ?>00">
					<a href="<?php the_sub_field('link'); ?>" class="image">
						<img src="<?php the_sub_field('img'); ?>" alt="schedule_bg">
					</a>
					<div class="text">
						<div class="when">
							<span class="date"><?php the_sub_field('date'); ?></span>
							<span class="time"><?php the_sub_field('time'); ?></span>
							<span class="city"><?php the_sub_field('city'); ?></span>
						</div>
						<h4 class="what"><?php the_sub_field('title'); ?></h4>
						<p class="p-3 who"><?php the_sub_field('name'); ?></p>
						<div class="manage">
							<button class="filled open-connect">Записаться</button>
							<a href="<?php the_sub_field('link'); ?>" class="more">Подробнее</a>
						</div>
					</div>
				</div>
      <?php } ?>
      </div>
		</div>
	</section>
  <?php } ?>





	<!-- Content end -->

<?php get_footer(); ?>