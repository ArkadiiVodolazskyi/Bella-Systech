  <?php if( have_rows('cards_list', pll_current_language()) ){ ?>
    <section class="pros">
		<div class="figure" data-aos="zoom-in" data-aos-duration="700"></div>
		  <div class="wrapper">
			  <div class="cards cards-pros">
          <?php while( have_rows('cards_list', pll_current_language()) ){ the_row(); ?>
            <div class="card" data-aos="flip-left"  data-aos-delay="<?php echo get_row_index(); ?>00">
              <img src="<?php the_sub_field('img'); ?>" alt="pros_single">
              <h5><?php the_sub_field('title'); ?></h5>
              <p class="p-5"><?php the_sub_field('text'); ?></p>
              <a href="<?php the_sub_field('btn_link'); ?>" class="button empty"><?php the_sub_field('btn'); ?></a>
            </div>
          <?php } ?>
        </div>
		  </div>
	  </section>
  <?php } ?>