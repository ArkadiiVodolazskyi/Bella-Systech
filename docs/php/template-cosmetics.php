<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: Косметика 
  */
?>

<?php get_header(); ?>


  <?php if( have_rows('slides') ){ ?>
  <section class="homeBanner kosmetikaBanner toSlick" data-type="vs1" data-mobile="false">
    <?php while( have_rows('slides') ){ the_row(); ?>
      <div class="slide">
        <div class="wrapper">
          <div class="text">
            <h2><?php the_sub_field('title'); ?></h2>
            <div class="breadcrumbs">
              <div class="wrapper">
              <a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
                <a href="#" class="current"><?php the_sub_field('title'); ?></a>
              </div>
            </div>
            <p class="p-3"><?php the_sub_field('text'); ?></p>
            <a href="<?php the_sub_field('btn_link'); ?>" class="button filled"><?php the_sub_field('btn'); ?></a>
          </div>
          <div class="image">
            <img src="<?php the_sub_field('img'); ?>" alt="kosmetikaBanner">
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
  <?php } ?>


  <?php if( have_rows('chosen_cats') ){ ?>
	<section class="categories">
		<div class="wrapper">
			<div class="cards cards-categories">
			<?php while( have_rows('chosen_cats') ){ the_row(); ?>
				<div class="card">
					<a href="<?php the_sub_field('btn_link'); ?>" class="image">
						<img src="<?php the_sub_field('img'); ?>" alt="category_image">
					</a>
					<div class="text">
						<h4><?php the_sub_field('title'); ?></h4>
						<a href="<?php the_sub_field('btn_link'); ?>" class="button filled"><?php the_sub_field('btn'); ?></a>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
  <?php } ?>

  <?php get_template_part('template-parts/study-form'); ?>

  <section class="popular">
		<div class="wrapper">
			<h2><?php the_field('title_products'); ?></h2>
			<div class="cards cards-popular">

        <?php
          $args = array(
            'post_type' => 'product', 
            'posts_per_page' => 10, 
          );
          $myposts = get_posts( $args ); 
        ?>
        <?php foreach( $myposts as $post ){ setup_postdata($post); ?>

          <a href="<?php the_permalink(); ?>" class="card">
            <div class="image">
              <?php the_post_thumbnail( array(235,300) ); ?>
            </div>
            <div class="text">
              <h6><?php the_title(); ?></h6>
              <strong class="price"><?php the_field('price'); ?></strong>
            </div>
          </a>

        <?php } ?>
        <?php wp_reset_postdata(); ?>

			</div>
		</div>
	</section>


  <?php 
    $categories = get_categories( [
      'taxonomy'     => 'category',
      'type'         => 'post',
      'orderby'      => 'id',
      'order'        => 'ASC',
      'hide_empty'   => false,
      'exclude'      => '1, 7',
    ] );
  ?>

  <?php  if( $categories ){ ?>
  <section class="lines">
      <div class="wrapper">
        <h2><?php the_field('title_cats'); ?></h2>
        <div class="cards cards-lines">
        <?php  foreach( $categories as $cat ){ ?>
          <div class="card" style="--figure-color: <?php the_field('color', $cat); ?>;" data-aos="fade-left" data-aos-offset="350">
            <div class="figure" data-aos="fade-right" data-aos-delay="150" data-aos-offset="200"></div>
            <img src="<?php the_field('img', $cat); ?>" alt="product_line_image">
            <div class="text">
              <h4><?php echo $cat->name; ?></h4>
              <a href="<?php echo get_category_link( $cat->term_id ); ?>">В каталог</a>
            </div>
          </div>
        <?php } ?>
      </div>
		</div>
	</section>
  <?php } ?>

	<section class="about_histolab">
		<div class="wrapper">
			<div class="text">
				<h2><?php the_field('about_title'); ?></h2>
				<?php the_field('about_text'); ?>
			</div>

      <?php if( have_rows('videos') ){ ?>
        <div class="videos">
          <div class="videos_slides toSlick" data-type="hs3" data-mobile="false">
          <?php while( have_rows('videos') ){ the_row(); ?>
            <div class="video">
              <a href="<?php the_sub_field('link'); ?>" class="video-btn">
                <img src=<?php the_sub_field('img'); ?>" alt="video_bg">
              </a>
            </div>
            
          <?php } ?>
          </div>
          <div class="slider_controls">
            <button class="slick-prev">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0.7 17.1 28.3"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(90)"/></svg>
            </button>
            <div class="slick-dots-wrapper"></div>
            <button class="slick-next">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="11.5 -23.5 17.5 28.5"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(-90)"/></svg>
            </button>
          </div>
        </div>
      <?php } ?>
				
		
		</div>
	</section>


  <?php get_template_part('template-parts/dealer-cosmetics'); ?>

  <?php get_template_part('template-parts/big-form'); ?>

<?php get_footer(); ?>