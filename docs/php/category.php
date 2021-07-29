<?php get_header(); ?>

  <?php   
		$term = get_queried_object();
  ?>

  <section class="homeBanner category_banner" style="background-color:<?php the_field('color', $term); ?>;">
    <div class="slide">
      <div class="wrapper">
        <div class="text">
          <h2><?php echo $term->name; ?></h2>
          <div class="breadcrumbs">
            <div class="wrapper">
            <a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			      <a href="<?php the_field('breadcrumb_cosmetics', pll_current_language()); ?>"><?php the_field('breadcrumb_cosmetics_title', pll_current_language()); ?></a>
              <a href="#" class="current"><?php echo $term->name; ?></a>
            </div>
          </div>
          <p class="p-3"><?php echo $term->description; ?></p>
          <a href="<?php the_field('breadcrumb_cosmetics', pll_current_language()); ?>" class="button filled">В каталог</a>
        </div>
        <div class="image">
          <img src="<?php the_field('img', $term); ?>" alt="kosmetikaBanner">
        </div>
      </div>
    </div>

  </section>

  <section class="popular">
		<div class="wrapper">
			<h2>Продукты линейки <?php echo $term->name; ?></h2>
			<div class="cards cards-popular">

        <?php
          $args = array(
            'post_type' => 'product', 
            'posts_per_page' => 99, 
            'category' => $term->term_id, 
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
      'number'        => 4,
      'hide_empty'   => false,
      'exclude'      => array('1','7',$term->term_id),
    ] );
  ?>

  <section class="all_equipment all_lines">
		<div class="wrapper">
			<h2>Другие линейки</h2>
			<div class="cards cards-equipment-all cards-equipment_lines">
        <?php  foreach( $categories as $cat ){ ?>
          <div class="card">
            <a href="<?php echo get_category_link( $cat->term_id ); ?>">
              <img src="<?php the_field('img', $cat); ?>" class="equip_img" alt="main_equipment">
            </a>
            <div class="text">
              <h6><?php echo $cat->name; ?></h6>
              <a href="<?php echo get_category_link( $cat->term_id ); ?>">В каталог</a>
            </div>
          </div>
        <?php } ?>
			</div>
		</div>
	</section>

  <?php get_template_part('template-parts/dealer-cosmetics'); ?>

  <?php get_template_part('template-parts/big-form'); ?>

<?php get_footer(); ?>