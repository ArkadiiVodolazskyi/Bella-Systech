

<?php get_header(); ?>


  <?php 
		$term = get_queried_object();
  ?>

	<!-- Content start -->
	<section class="page_header">
		<div class="wrapper">
			<h2><?php echo $term->name; ?></h2>
		</div>
	</section>

	<div class="breadcrumbs">
		<div class="wrapper">
			<a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			<a href="<?php the_field('breadcrumb_equipment', pll_current_language()); ?>"><?php the_field('breadcrumb_cosmetics_title', pll_current_language()); ?></a>
			<a href="#" class="current"><?php echo $term->name; ?></a>
		</div>
	</div>


  <section class="all_equipment">
		<div class="wrapper">
			<div class="cards cards-equipment-all">

        <?php 
          $posts = get_posts( array(
            'numberposts' => 99,
            'category'    => 'taxonomy_equipment',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'equipment',
            'suppress_filters' => true,
          ) );
        ?>

				<?php  foreach( $posts as $post ){ setup_postdata($post); ?>
					<div class="card">
						<a href="<?php echo get_post_permalink(); ?>">
							<?php the_post_thumbnail( array(600,600), array('class' => "equip_img",) ); ?>
						</a>
						<div class="text">
							<h6><?php the_title(); ?></h6>
							<a href="<?php echo get_post_permalink(); ?>">Подробнее</a>
						</div>
					</div>
									
				<?php } ?>
				<?php  wp_reset_postdata(); ?>

  		</div>
		</div>
	</section>


	<?php get_template_part('template-parts/request-form'); ?>
	<?php get_template_part('template-parts/cards'); ?>



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


<?php get_footer(); ?>