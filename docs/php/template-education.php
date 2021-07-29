<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
    Template Name: Обучение
  */
?>

<?php get_header(); ?>

  <section class="obucheniyeBanner">
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
						<a href="<?php the_field('btn_video_link'); ?>">
							<!-- <img src="./img/ico_video.svg" alt="ico_video"> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g transform="translate(-180 -606)">
									<g transform="translate(180 606)">
										<path id="Path_69" d="M21 1.5H3a3 3 0 0 0-3 3v15a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3v-15a3 3 0 0 0-3-3zm1 18a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1h20v1zm0-3H2v-12a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1z" />
										<path id="Path_70" d="M15.981 8.877l-5.89-3.6a1 1 0 0 0-1.521.853v7.2a1 1 0 0 0 1.521.853l5.89-3.6a1 1 0 0 0 0-1.706zm-5.411 2.67V7.913l2.973 1.817z"/>
									</g>
								</g>
							</svg>
							<?php the_field('btn_video'); ?>
						</a>
						<a href="<?php the_field('btn_news_link'); ?>">
							<!-- <img src="./img/ico_news.svg" alt="ico_news"> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g transform="translate(-433 -606)">
									<path d="M18.375 24H5.625A5.631 5.631 0 0 1 0 18.375V12.75a4.679 4.679 0 0 1 3.7-4.594V5.625A5.631 5.631 0 0 1 9.328 0h9.047A5.631 5.631 0 0 1 24 5.625v12.75A5.631 5.631 0 0 1 18.375 24zM3.7 10.1a2.776 2.776 0 0 0-1.824 2.65v5.625a3.754 3.754 0 0 0 3.75 3.75h12.75a3.754 3.754 0 0 0 3.75-3.75V5.625a3.754 3.754 0 0 0-3.75-3.75H9.328a3.754 3.754 0 0 0-3.75 3.75v12.937a.937.937 0 0 1-1.875 0zm16.55-4.053a.937.937 0 0 0-.937-.937H8.391a.937.937 0 0 0 0 1.875h10.922a.937.937 0 0 0 .937-.938zm.047 8.765a.937.937 0 0 0-.937-.937H15.7a.937.937 0 0 0 0 1.875h3.656a.937.937 0 0 0 .944-.938zm-7.359 0a.937.937 0 0 0-.938-.937H8.391a.937.937 0 0 0 0 1.875H12a.937.937 0 0 0 .938-.938zm0 3.75a.937.937 0 0 0-.938-.937H8.391a.937.937 0 0 0 0 1.875H12a.937.937 0 0 0 .938-.938zm5.437 0a.937.937 0 0 0-.937-.937H15.7a.937.937 0 0 0 0 1.875h1.734a.937.937 0 0 0 .941-.938zM19.359 12h-6.8a.937.937 0 0 1 0-1.875h6.8a.937.937 0 0 1 0 1.875zM7.454 10.969A1.172 1.172 0 1 0 8.625 9.8a1.172 1.172 0 0 0-1.171 1.169z" transform="translate(433 606)"/>
								</g>
							</svg>
							<?php the_field('btn_news'); ?>
						</a>
					</div>
				</div>
				<div class="image">
        <?php the_post_thumbnail( array(1160,720) ); ?>
				</div>
			</div>
		</div>
	</section>

  <?php if( have_rows('timetable_list') ){ ?>
    <section class="schedule some_events">
		<div class="wrapper">
			<h2><?php the_field('timetable_title'); ?>
				<a href="<?php the_field('timetable_btn_link'); ?>" class="empty button"><?php the_field('timetable_btn'); ?></a>
			</h2>
			<div class="cards cards-schedule cards-some_events toSlick" data-type="hs5" data-mobile="true" data-screen="480">
      <?php while( have_rows('timetable_list') ){ the_row(); ?>
 
        <div class="card" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="<?php echo get_row_index(); ?>00">
					<a href="<?php the_sub_field('link'); ?>" class="image">
						<img src="<?php the_sub_field('img'); ?>" alt="schedule_bg">
					</a>
					<div class="text">
						<div class="when">
							<span class="date"><?php the_sub_field('date'); ?></span>
							<span class="time"><?php the_sub_field('time'); ?></span>
							<span class="city"><?php the_sub_field('city'); ?></span>
						</div>
						<h4 class="what"><?php the_sub_field('title'); ?></h4>
						<p class="p-3 who"><?php the_sub_field('name'); ?></p>
						<div class="manage">
							<button class="filled"><?php the_sub_field('btn'); ?></button>
							<a href="<?php the_sub_field('link'); ?>" class="more">Подробнее</a>
						</div>
					</div>
				</div>
      <?php } ?>
			</div>
		</div>
		<a href="<?php the_field('timetable_btn_link'); ?>" class="button empty all"><?php the_field('timetable_btn'); ?></a>
	</section>   
  <?php } ?>




  <section class="about_study">
		<div class="wrapper">
			<div class="text">
				<h2><?php the_field('title_block_1'); ?></h2>
				<?php the_field('text_block_1'); ?>
			</div>
      <?php if( have_rows('images_block_1') ){ ?>
      <div class="photos">
        <div class="photos_slides toSlick" data-type="hs3" data-mobile="false">
        <?php while( have_rows('images_block_1') ){ the_row(); ?>
					<div class="photo">
						<img src="<?php the_sub_field('img');?>" alt="obucheniye_slider">
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

  <?php if( have_rows('teachers_list') ){ ?>   
    <section class="teachers">
      <div class="wrapper">
        <h2><?php the_field('teachers_title'); ?></h2>
        <div class="cards cards-teachers">
          <?php while( have_rows('teachers_list') ){ the_row(); ?>
            <div class="card">
              <div class="image">
                <img src="<?php the_sub_field('img');?>" alt="teacher_photo">
              </div>
              <div class="text">
                <strong class="name"><?php the_sub_field('title');?></strong>
                <p class="p-5"><?php the_sub_field('text');?></p>
              </div>
            </div>
            
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>




  <section class="about_study">
		<div class="wrapper">
			<div class="text">
				<h2><?php the_field('title_block_2'); ?></h2>
				<?php the_field('text_block_2'); ?>
			</div>
      <?php if( have_rows('images_block_2') ){ ?>
      <div class="photos">
        <div class="photos_slides toSlick" data-type="hs3" data-mobile="false">
        <?php while( have_rows('images_block_2') ){ the_row(); ?>
					<div class="photo">
						<img src="<?php the_sub_field('img');?>" alt="obucheniye_slider">
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



  <?php get_template_part('template-parts/study-form'); ?>

<?php get_footer(); ?>