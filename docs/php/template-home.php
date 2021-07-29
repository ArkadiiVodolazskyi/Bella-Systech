<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: Главная (Home Page)
  */
?>

<?php get_header(); ?>

	<!-- Content start -->
	

  <?php if( have_rows('banner_list') ){ ?>
    <section class="homeBanner toSlick" data-type="vs1" data-mobile="false">
    <?php while( have_rows('banner_list') ){ the_row(); ?>
      <div class="slide">
        <div class="wrapper">
          <div class="text">
            <h2><?php the_sub_field('title'); ?></h2>
            <p class="p-1"><?php the_sub_field('text'); ?></p>
            <a href="<?php the_sub_field('btn_link'); ?>" class="button filled"><?php the_sub_field('btn_text'); ?></a>
          </div>
          <div class="image">
            <div class="figure aquaEmpty" ></div>
            <img src="<?php the_sub_field('img'); ?>" alt="home_banner" data-aos="zoom-in" data-aos-delay="150">
            <div class="figure pinkFilled" ></div>
          </div>
        </div>
      </div>
    <?php } ?>
    </section>
  <?php } ?>



	<?php if( have_rows('equipment_list') ){ ?>
		<section class="equipment">
		<div class="wrapper">
			<h2><?php the_field('equipment_title'); ?>
				<a href="<?php the_field('equipment_btn_link'); ?>" class="button empty"><?php the_field('equipment_btn'); ?></a>
			</h2>
		</div>

		<div class="cards cards-equipment">
    <?php while( have_rows('equipment_list') ){ the_row(); ?>

			<div class="card">
				<img src="<?php the_sub_field('logo'); ?>" alt="equip_logo" class="equip_logo">
				<a href="<?php echo get_permalink(get_sub_field('item')); ?>">
					<?php echo get_the_post_thumbnail(get_sub_field('item'), 'full', array('class' => 'equip_img')); ?>
				</a>
				<div class="text">
					<h4><?php echo get_the_title(get_sub_field('item')); ?></h4>
					<p class="p-5"><?php the_sub_field('text'); ?></p>
					<a href="<?php echo get_permalink(get_sub_field('item')); ?>">Подробнее</a>
				</div>
			</div>
 			

    <?php } ?>
		<a href="<?php the_field('equipment_btn_link'); ?>" class="all button empty"><?php the_field('equipment_btn'); ?></a>
		</div>
	</section>
  <?php } ?>






	<?php get_template_part('template-parts/request-form'); ?>
	<?php get_template_part('template-parts/cards'); ?>

	<section class="service">
		<div class="wrapper">
			<h2><?php the_field('capabilities_title'); ?>
				<a href="<?php the_field('capabilities_btn_link'); ?>" class="button empty"><?php the_field('capabilities_btn'); ?></a>
			</h2>
		</div>
    <?php if( have_rows('capabilities_list') ){ ?>
      <div class="cards cards-service">
        <?php while( have_rows('capabilities_list') ){ the_row(); ?>
          <a href="<?php the_sub_field('link'); ?>" class="card">
            <img src="<?php the_sub_field('img'); ?>" alt="service_card">
            <div class="text">
              <h6><?php the_sub_field('title'); ?></h6>
            </div>
          </a>      
        <?php } ?>
      </div>      
    <?php } ?>
		<a href="<?php the_field('capabilities_btn_link'); ?>" class="button empty all"><?php the_field('capabilities_btn'); ?></a>
	</section>

	<section class="why">
		<div class="figure aquaEmpty" data-aos="zoom-in" data-aos-duration="700"></div>
		<div class="wrapper">
			<h2><?php the_field('why_us_title'); ?></h2>
      <?php if( have_rows('why_us_list') ){ ?>
        <div class="cards cards-pro2 pro2-first">
          <?php while( have_rows('why_us_list') ){ the_row(); ?>
            <div class="card" data-aos="fade-up-left" data-aos-delay="<?php echo get_row_index(); ?>00">
              <img src="<?php the_sub_field('img'); ?>" alt="pros_single">
              <h5><?php the_sub_field('title'); ?></h5>
              <p class="p-5"><?php the_sub_field('text'); ?></p>
            </div> 
          <?php } ?>
        </div>    
      <?php } ?>			
		</div>
	</section>

	<section class="brands">
		<div class="wrapper">
			<h2><?php the_field('brands_title'); ?></h2>
      <?php if( have_rows('brands_list') ){ ?>
        <div class="cards cards-brands toSlick" data-type="hs2" data-mobile="false">
          <?php while( have_rows('brands_list') ){ the_row(); ?>
            <div class="card">
              <img src="<?php the_sub_field('img'); ?>" alt="brand">
            </div>
          <?php } ?>
          </div>     
      <?php } ?>		
		</div>
	</section>

	<section class="howwork">
		<div class="wrapper">
			<h2><?php the_field('our_work_title'); ?></h2>
      <?php if( have_rows('our_work_list') ){ ?>
        <ul>
          <?php while( have_rows('our_work_list') ){ the_row(); ?>
            <li><?php the_sub_field('text'); ?></li>   
          <?php } ?>
        </ul>     
      <?php } ?>
		</div>
	</section>

	<section class="partners">
		<div class="wrapper">
			<h2><?php the_field('partners_title'); ?></h2>
      <?php if( have_rows('partners_list') ){ ?>
        <div class="cards cards-blurred toSlick" data-type="hs1" data-mobile="false">
          <?php while( have_rows('partners_list') ){ the_row(); ?>
            <a href="<?php the_sub_field('link'); ?>" class="card">
              <div class="image"> <img src="<?php the_sub_field('img'); ?>" alt="partners_img"> </div>
              <div class="text"> <h5><?php the_sub_field('title'); ?></h5> </div>
            </a>     
          <?php } ?>
        </div>      
      <?php } ?>
		</div>
	</section>

  <?php if ( get_field('seo_text')){ ?>
    <section class="more">
      <div class="wrapper">
        <div class="text wrapped">
          <?php the_field('seo_text'); ?>
        </div>
        <button class="readMore">Подробнее</button>
      </div>
    </section>
  <?php } ?>

	<!-- Content end -->

<?php get_footer(); ?>