<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: О нас
  */
?>

<?php get_header(); ?>

  <section class="obucheniyeBanner about_banner">
		<div class="slide">
			<div class="wrapper">
				<div class="text">
					<h2><?php the_title(); ?></h2>
					<div class="breadcrumbs">
						<div class="wrapper">
              <a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
							<a href="#" class="current"><?php the_title(); ?></a>
						</div>
					</div>
					<?php the_content(); ?>
					<div class="manage">
						<a href="<?php the_field('btn_link_1'); ?>">
							<!-- <img src="./img/ico_certificate.svg" alt="ico_certificate"> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g transform="translate(-180 -734)">
										<path id="icons8-certificate" d="M14.769 2.769a2.837 2.837 0 0 0-1.644.548L11.6 4.385l-1.76.231h-.032l-.029.029A3.133 3.133 0 0 0 7.413 7.01l-.029.029v.029l-.23 1.788-1.067 1.384-.029.029v.031a3.02 3.02 0 0 0 .029 3.346l1.1 1.529.288 1.587L4.5 21.288 3.548 22.7h4.414l1.067 2.481.663 1.587.952-1.442 2.913-4.385a3.044 3.044 0 0 0 2.423 0l2.913 4.385.952 1.442.663-1.587 1.069-2.481h4.413l-.952-1.413-2.884-4.387.231-1.731 1.067-1.529.029-.029v-.029a2.972 2.972 0 0 0-.029-3.317L22.385 8.74l-.347-1.73h.029c0-.022-.025-.036-.029-.058A2.72 2.72 0 0 0 19.7 4.615h-.029l-1.731-.231-1.527-1.067a2.837 2.837 0 0 0-1.644-.548zm0 1.875a1.028 1.028 0 0 1 .577.173L16.99 6l.2.144.231.029 2.019.288h.029a.818.818 0 0 1 .75.75v.058l.381 2.048.029.2.144.173 1.183 1.644a1.172 1.172 0 0 1-.029 1.269l-1.3 1.817-.029.231-.288 2.019v.03a.918.918 0 0 1-.144.4l-.058.029v.029a.813.813 0 0 1-.548.288h-.06l-2.106.375-.231.029-.173.15-1.644 1.183a1.222 1.222 0 0 1-1.3-.029L12.548 18l-.173-.144-.26-.029-2.015-.289h-.029a.817.817 0 0 1-.635-.4.914.914 0 0 1-.115-.346v-.058l-.375-2.106-.029-.231-.144-.173-1.186-1.647a1.222 1.222 0 0 1 .029-1.3l1.154-1.5.144-.173.029-.26.257-1.931c0-.014.025-.014.029-.029a1.287 1.287 0 0 1 .923-.923c.014 0 .014-.025.029-.029l1.933-.26.231-.029.2-.144 1.644-1.183a1.028 1.028 0 0 1 .58-.172zm6.375 14.048l1.413 2.163h-2.22l-.231.577-.635 1.468-1.962-3 .433-.317 1.817-.317v.034c.022 0 .036-.025.058-.029a2.742 2.742 0 0 0 1.327-.579zm-12.75.029a2.631 2.631 0 0 0 1.442.663h.029l1.76.231.4.317-1.958 2.968-.635-1.471-.232-.573H6.981z" transform="translate(177.23 731.23)"/>
								</g>
							</svg>
							<?php the_field('btn_1'); ?>
						</a>
						<a href="<?php the_field('btn_link_2'); ?>">
							<!-- <img src="./img/ico_wing.svg" alt="ico_wing"> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g transform="translate(-395 -734)">
										<path id="icons8-google_photos" d="M12.7 1.548v5.225H8.076l-6.528 7.62h5.225v4.62l7.62 6.532v-5.226h4.623l6.532-7.62h-5.229V8.076zm1.693 3.678l4.233 3.628V12.7h-1.865a3.319 3.319 0 0 0-2.368-2.368zm-5.54 3.24H12.7v1.865a3.313 3.313 0 0 0-2.368 2.369H5.225zm4.693 3.387a1.681 1.681 0 0 1 1.693 1.69v.02a1.686 1.686 0 0 1-1.69 1.677h-.02a1.693 1.693 0 0 1 .017-3.387zm-5.08 2.54h1.865a3.313 3.313 0 0 0 2.369 2.368v5.106l-4.234-3.628zm8.294 0h5.106l-3.628 4.233h-3.845v-1.865a3.319 3.319 0 0 0 2.368-2.368z" transform="translate(393.452 732.454)"/>
								</g>
							</svg>
							<?php the_field('btn_2'); ?>
						</a>
					</div>
				</div>
				<div class="image">
          <?php the_post_thumbnail( array(1160,720) ); ?>
				</div>
			</div>
		</div>
	</section>

  <?php if( have_rows('testimonial_slider') ){ ?>
  <section class="reviews">
		<div class="wrapper">
			<div class="text">
				<h2><?php the_field('testimonial_title'); ?></h2>
				<div class="names toSlick" data-type="hs7" data-mobile="false">
              
        <?php while( have_rows('testimonial_slider') ){ the_row(); ?>
          
					<div class="slide">
						<h4 class="name"> <?php the_sub_field('name'); ?></h4>
						<a href="<?php the_sub_field('site'); ?>" class="link">
              <?php the_sub_field('site'); ?>
							<!-- <img src="./img/ico_external.svg" alt="ico_external"> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
								<path d="M15.636 5v1.636h4.551L10.139 16.685l1.176 1.176L21.364 7.813v4.551H23V5zM5 8.273V23h14.727V12.364L18.091 14v7.364H6.636V9.909H14l1.636-1.636z" transform="translate(-5 -5)"/>
							</svg>
						</a>
					</div>
        <?php } ?>

        </div>
				<div class="slider_controls">
					<button class="slick-prev hs7">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0.7 17.1 28.3"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(90)"/></svg>
					</button>
					<div class="slick-dots-wrapper hs7"></div>
					<button class="slick-next hs7">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="11.5 -23.5 17.5 28.5"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(-90)"/></svg>
					</button>
				</div>
			</div>
			<div class="videos">
				<div class="videos_slides toSlick" data-type="hs8" data-mobile="false">
          <?php while( have_rows('testimonial_slider') ){ the_row(); ?>
            
            <?php the_sub_field('title'); ?>

            <div class="video" >
							<a class="video-btn" href="<?php the_sub_field('video_link'); ?>">
              	<img src=" <?php the_sub_field('img'); ?>" alt="reviews_slide">
							</a>
              <!-- <iframe src="https://www.youtube.com/embed/ewf-8rx9_uQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>

          <?php } ?>

          </div>
        </div>
        <div class="slider_controls">
          <button class="slick-prev hs8">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0.7 17.1 28.3"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(90)"/></svg>
          </button>
          <div class="slick-dots-wrapper hs8"></div>
          <button class="slick-next hs8">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="11.5 -23.5 17.5 28.5"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(-90)"/></svg>
          </button>
        </div>
      </div>
  </section>
  <?php } ?>



	<section class="team">
		<div class="wrapper">
			<div class="figure aquaEmpty" data-aos="slide-right" data-aos-delay="200" id="team-first" data-aos-offset="-1600"></div>
			<div class="figure pinkFilled" data-aos="slide-right" data-aos-anchor="#team-first" data-aos-offset="-1600"></div>
			<h2><?php the_field('command_title'); ?></h2>
			<div class="text">
        <?php the_field('command_text'); ?>
			</div>
		</div>
    <?php if( have_rows('command_list') ){ ?>
      <div class="cards cards-team">
        <?php while( have_rows('command_list') ){ the_row(); ?>
          <div class="card">
            <img src="<?php the_sub_field('img'); ?>" alt="team_mate">
            <div class="text">
              <h6><?php the_sub_field('name'); ?></h6>
              <p class="p-6"><?php the_sub_field('text'); ?></p>
            </div>
          </div> 
        <?php } ?>
      </div>
    <?php } ?>
		
  <?php if( have_rows('whyus_list') ){ ?>
  <section class="why why-about">
		<div class="figure aquaEmpty" data-aos="zoom-in" data-aos-duration="700" data-aos-offset="-1600"></div>
		<div class="wrapper">
			<h2><?php the_field('whyus_title'); ?></h2>
			<div class="cards cards-pro2 pro2-first">
        <?php while( have_rows('whyus_list') ){ the_row(); ?>
          <div class="card" data-aos="fade-up-left" data-aos-delay="200" data-aos-anchor=".pro2-first"  data-aos-offset="-1200">
            <img src="<?php the_sub_field('img'); ?>" alt="pros_single">
            <h5><?php the_sub_field('title'); ?></h5>
            <p class="p-5"><?php the_sub_field('text'); ?></p>
          </div>
          
        <?php } ?>
			</div>
		</div>
	</section>
  <?php } ?>

  <?php if( have_rows('smi_list') ){ ?>
    <section class="media_about">
		<div class="wrapper">
			<h2><?php the_field('smi_title'); ?></h2>
			<div class="cards cards-media">
        <?php while( have_rows('smi_list') ){ the_row(); ?>
          <div class="card">
            <div class="image">
              <img src="<?php the_sub_field('img'); ?>" alt="magazine" width="188px" height="232px">
            </div>
            <div class="text">
              <h6 class="name"><?php the_sub_field('title'); ?></h6>
              <p class="p-6"><?php the_sub_field('text'); ?></p>
            </div>
          </div>
          
        <?php } ?>
        </div>
      </div>
    </section>     
  <?php } ?>








		
	</section>


			



<?php get_footer(); ?>