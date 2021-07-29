<section class="dealer">
  <div class="wrapper">
    <div class="left">
      <h2><?php the_field('dealer_title_product', pll_current_language()); ?></h2>
      <?php if( have_rows('dealer_list_product', pll_current_language()) ){ ?>
        <div class="choose_city">
          <?php while( have_rows('dealer_list_product', pll_current_language()) ){ the_row(); ?>
            <button <?php if (get_row_index() == 1){ echo ' class="active"'; } ?>><?php the_sub_field('city'); ?></button>      
          <?php } ?>
        </div>
      <?php } ?>
      <?php if( have_rows('dealer_list_product', pll_current_language()) ){ ?>
        <div class="select_city">
          <select id="citySelect">
            <?php while( have_rows('dealer_list_product', pll_current_language()) ){ the_row(); ?>
              <option <?php if (get_row_index() == 1){ echo ' selected'; } ?>><?php the_sub_field('city'); ?></option>      
            <?php } ?>
          </select>
        </div>
      <?php } ?>
  
    </div>
    <div class="right">
      <?php if( have_rows('dealer_list_product', pll_current_language()) ){ ?>    
        <?php while( have_rows('dealer_list_product', pll_current_language()) ){ the_row(); ?>
          <div class="cards cards-filials  <?php if (get_row_index() == 1){ echo ' active'; } ?>">

          <?php if( have_rows('item') ){ ?>    
            <?php while( have_rows('item') ){ the_row(); ?>
              <div class="filial  <?php if (get_row_index() == 1){ echo ' active'; } ?>">
                <h6 class="street">
                  <?php the_sub_field('address'); ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrowDownDark.svg" alt="ico_arrowDownDark">
                </h6>
                <div class="content">
                  <span class="name"> <?php the_sub_field('name'); ?></span>
                  <?php if( have_rows('phones') ){ ?>    
                    <ul class="contacts">
                    <?php while( have_rows('phones') ){ the_row(); ?>
                      <li><a href="tel:<?php the_sub_field('tel'); ?>"><?php the_sub_field('tel'); ?></a></li>
                    <?php } ?> 
                    </ul>
                  <?php } ?> 
                  <div class="schedule"><?php the_sub_field('text'); ?></div>
                  <img src="<?php the_sub_field('img'); ?>" alt="office_photo" class="office_photo">
                </div>
              </div> 
            <?php } ?>       
          <?php } ?>
          </div>
   
        <?php } ?>       
      <?php } ?>
      
    </div>
  </div>
</section>
