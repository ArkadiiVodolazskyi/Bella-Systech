<?php
  /*
    Template Name: Сертификаты
  */
?>

<?php get_header(); ?>

	<section class="certificates">
		<div class="wrapper">
			<div class="gallery">
				<h3>
					<?php the_title(); ?>
				</h3>
				<div class="cards cards-gallery">
					<?php
						$images = get_field('photos');
						foreach( $images as $image ) {
					?>
						<a
							class="card"
							href="<?= $image; ?>"
							data-lightbox="gallery_image"
						>
							<img src="<?= $image; ?>" alt="gallery_image">
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>