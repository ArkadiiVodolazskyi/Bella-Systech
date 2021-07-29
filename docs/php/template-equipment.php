<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: Оборудование (equipment)
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


  <?php  $wcatTerms = get_terms('taxonomy_equipment', array('hide_empty' => 0, 'parent' =>0));  ?>

  <section class="all_equipment">
		<div class="wrapper">
			<div class="cards cards-equipment-all items_3">
      <?php foreach($wcatTerms as $wcatTerm) :  ?>
        <div class="card">
					<a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
						<img src="<?php the_field('img', $wcatTerm); ?>" class="equip_img" alt="main_equipment">
					</a>
					<div class="text">
						<h6><?php echo $wcatTerm->name; ?></h6>
						<a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">Подробнее</a>
					</div>
				</div>
      <?php endforeach; ?>


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