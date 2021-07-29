<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: История
  */
?>

<?php get_header(); ?>


<section class="page_header">
		<div class="wrapper">
			<h2><?php the_title(); ?></h2>
		</div>
	</section>

	<div class="breadcrumbs">
		<div class="wrapper">
      <a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			<a href="<?php the_field('breadcrumb_about', pll_current_language()); ?>"><?php the_field('breadcrumb_about_title', pll_current_language()); ?></a>
			<a href="#" class="current"><?php the_title(); ?></a>
		</div>
	</div>

	<section class="intro">
		<div class="wrapper">
      <?php the_content(); ?>
		</div>
	</section>

  <?php if( have_rows('history_list') ){ ?>
  <section class="history">
		<div class="wrapper">
			<h3 class="now"><?php the_field('current_year'); ?></h3>
			<div class="cards cards-history">
        <?php while( have_rows('history_list') ){ the_row(); ?>
          <div class="card">
            <span class="year"><?php the_sub_field('year'); ?></span>
            <div class="block">
              <div class="text" data-aos="fade-right">
                <div class="date"><?php the_sub_field('year'); ?></div>
                <p class="p-3"><?php the_sub_field('text'); ?></p>
              </div>
            </div>
          </div>
          
        <?php } ?>
      </div>
    </div>
  </section>   
  <?php } ?>



<?php get_footer(); ?>