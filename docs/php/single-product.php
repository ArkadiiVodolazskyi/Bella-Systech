<?php get_header(); ?>

  <?php
		$item = get_queried_object();
    $terms = get_the_category( $item->ID );
    $term = $terms[0];
  ?>

  <section class="product_info">
		<div class="wrapper">
			<div class="left">
				<h3 class="name"><?php the_title(); ?></h3>
				<?php the_post_thumbnail( array(510,650) ); ?>
			</div>
			<div class="right">
				<h3 class="name"><?php the_title(); ?></h3>

				<div class="manage">
					<div class="price">
						<h3 class="value"><?php the_field('price'); ?></h3>
						<div class="amount"><?php the_field('value'); ?></div>
					</div>
					<button class="filled"> Оставить заявку </button>
				</div>

				<div class="text">
          <?php the_content(); ?>
				</div>

				<div class="additional">
					<div>
						<h4><?php the_field('components_title'); ?></h4>
            <?php if( have_rows('components_list') ){ ?>
              <ul>
                <?php while( have_rows('components_list') ){ the_row(); ?>
                  <li><?php the_sub_field('item'); ?></li>
                <?php } ?>
              </ul>
            <?php } ?>
					</div>
					<div>
						<h4><?php the_field('structure_title'); ?></h4>
						<?php the_field('structure'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

  <section class="popular">
		<div class="wrapper">
			<h2>Другие продукты линейки <?php echo $term->name; ?></h2>
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

  <?php get_template_part('template-parts/study-form'); ?>

<?php get_footer(); ?>