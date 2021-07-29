<?php get_header(); ?>

  <?php
		$item = get_queried_object();
    $terms = get_the_category( $item->ID );
    $term = $terms[0];
  ?>

	<section class="single_news">
		<div class="wrapper">
			<?php
				the_post_thumbnail('full');
				the_content();
			?>
		</div>
	</section>

<?php get_footer(); ?>