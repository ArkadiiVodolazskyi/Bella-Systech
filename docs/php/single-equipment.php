<?php
  /*
    Author: Andrey Melnichenko @dev_arm923i
    Author URI: https://t.me/dev_arm923i
  */
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/robolex-main.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" /> 


<main class="page_main">

  <section class="homeBanner">
    <div class="slide">
      <div class="wrapper">
        <div class="text  animate__animated animate__fadeIn">
        <div class="title"><?php the_field('title_banner') ?></div>
          <?php if (get_field('content_banner')){ ?>
            <?php the_field('content_banner') ?>
          <?php } ?>
          <div class="btn__main popup_present"><?php the_field('btn_banner') ?></div>
        </div>
        <div class="image animate__animated animate__fadeIn">
          <div class="figure aquaEmpty" ></div>
            <img src="<?php the_field('img_banner_pc') ?>" alt="">
          <div class="figure pinkFilled" ></div>
        </div>
      </div>
    </div>
  </section>



  <section class="second">

      <div class="s2_line mob_hide">
        <svg xmlns="http://www.w3.org/2000/svg" width="644.229" height="773.055" viewBox="0 0 644.229 773.055">
          <g id="tech_lines" data-name="banner_lines" transform="translate(-338.572 1496.997) rotate(-60)" opacity="0.195">
            <path id="tech_line1" data-name="banner_line1" d="M944.668-116.021c64.9-.08,129.24,29.813,171.037,79.465,36.248,43.061,54.917,98.062,86.011,144.98s83.606,88.065,138.94,77.761c37.992-7.077,68.192-37.377,86.057-71.646s25.6-72.723,35.169-110.167,21.718-75.458,46.476-105.131c31.385-37.616,82.339-57.919,130.993-52.194" fill="none" stroke="#8fa5a5" stroke-width="1"/>
            <path id="tech_line2" data-name="banner_line2" d="M958.59-118.393c60.84-.073,121.151,27.947,160.331,74.493C1152.9-3.534,1170.4,48.024,1199.549,92s78.373,82.555,130.244,72.9c35.615-6.633,63.924-35.038,80.672-67.161s24-68.173,32.969-103.273S1463.791-76.27,1487-104.086c29.421-35.262,77.186-54.294,122.794-48.929" fill="none" stroke="#8fa5a5" stroke-width="1"/>
            <path id="tech_line3" data-name="banner_line3" d="M972.511-120.763c56.779-.069,113.062,26.081,149.629,69.518,31.71,37.67,48.042,85.787,75.244,126.832s73.14,77.043,121.548,68.028c33.237-6.19,59.656-32.7,75.286-62.678s22.4-63.621,30.767-96.377,19-66.012,40.659-91.972c27.456-32.908,72.033-50.668,114.6-45.661"  fill="none" stroke="#8fa5a5" stroke-width="1"/>
            <path id="tech_line4" data-name="banner_line4" d="M986.432-123.135c52.717-.064,104.974,24.215,138.924,64.546,29.443,34.975,44.6,79.649,69.861,117.758s67.908,71.53,112.853,63.161c30.859-5.746,55.387-30.359,69.9-58.193s20.8-59.069,28.567-89.483,17.641-61.29,37.75-85.392c25.492-30.553,66.879-47.044,106.4-42.394" fill="none" stroke="#8fa5a5" stroke-width="1"/>
            <path id="tech_line5" data-name="banner_line5" d="M1000.353-125.507c48.656-.058,96.886,22.35,128.22,59.572,27.174,32.281,41.168,73.512,64.479,108.685s62.675,66.018,104.157,58.293c28.481-5.3,51.12-28.02,64.515-53.709s19.193-54.519,26.363-82.589,16.282-56.566,34.842-78.812c23.528-28.2,61.726-43.42,98.2-39.129"  fill="none" stroke="#8fa5a5" stroke-width="1"/>
          </g>
        </svg>
      </div>


    <?php if (get_field('img_tech_pc')){ ?>
      <img src="<?php the_field('img_tech_pc') ?>" alt="" class="s2_img mob_hide  wow animate__animated animate__slideInUp">
    <?php } ?>


    <div class="row s2_r1 nav_anchors" id="technology" >

      <div class="container">

        <div class="wrap">

          <div class="left  wow animate__animated animate__slideInUp">

            <div class="title title__big"><?php the_field('title_tech') ?></div>

          </div>

          <div class="right  wow animate__animated animate__slideInUp">

            <?php if (get_field('title_tech_sub')){ ?>
              <div class="title title__small"><?php the_field('title_tech_sub') ?></div>
            <?php } ?>                 

            <?php if (get_field('content_tech')){ ?>
              <?php the_field('content_tech') ?>
            <?php } ?>               

          </div>

        </div>

      </div>

    </div>


    <?php if( have_rows('tech_items_list') ): ?>

      <?php while( have_rows('tech_items_list') ): the_row(); ?>

        <div class="row <?php the_sub_field('id'); ?>">

          <div class="wrap">

          <?php if(!get_sub_field('align')){  ?>

            <div class="left container__left  wow  animate__animated animate__slideInUp">
              <div class="title"><?php the_sub_field('title'); ?></div>
              <?php the_sub_field('content'); ?>
            </div>
            <div class="right  wow  animate__animated animate__slideInUp">
              <img src="<?php the_sub_field('img'); ?>" alt="" class="row_img">
            </div>

          <?php } else{ ?>

            <div class="left  wow  animate__animated animate__slideInUp">
              <img src="<?php the_sub_field('img'); ?>" alt="" class="row_img">
            </div>
            <div class="right container__right  wow  animate__animated animate__slideInUp">
              <div class="title"><?php the_sub_field('title'); ?></div>
              <?php the_sub_field('content'); ?>
            </div>

          <?php }  ?>

          </div>

        </div>         

      <?php endwhile; ?>

    <?php endif; ?>


  </section>

  <section class="third padd nav_anchors">

    <div class="container">

      <div class="row row_s3_r1 padd">
        <div class="wrap"  id="procedures">
          <div class="left  wow  animate__animated animate__slideInUp">
            <div class="title title__big"><?php the_field('title_procs') ?></div>
          </div>
          <div class="right  wow  animate__animated animate__slideInUp">

            <?php if (get_field('video_link_proc')  && get_field('video_img_proc')){ ?>
              <div class="video">
                <div class="video_img" style="background-image:url('<?php the_field('video_img_proc') ?>');"></div>
                <a class="video_btn"  href="<?php the_field('video_link_proc') ?>">
                  <div class="video_btn_wrap">
                    <div class="video_btn_play">
                      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="54" viewBox="0 0 48 54">
                        <path fill="#d02029" d="M21.771 9.3a6 6 0 0 1 10.459 0l16.74 29.758A6 6 0 0 1 43.741 48H10.259a6 6 0 0 1-5.229-8.942z" transform="rotate(90 24 24)"/>
                      </svg>
                    </div>
                    <div class="video_btn_capt"><?php the_field('video_btn_text', pll_current_language()) ?></div>
                  </div>
                </a>
              </div> <!-- video -->
            <?php } ?>

          </div>
        </div>
      </div>

      <div class="row row_s3_r2 padd nav_anchors" >
        <div class="wrap" id="advantages">
          <div class="left  wow animate__animated animate__slideInUp">
            <div class="title title__big"><?php the_field('title_adv') ?></div>
          </div>

          <div class="right">


            <?php if( have_rows('adv_items_list') ): ?>
              <div class="list__count">
                <?php while( have_rows('adv_items_list') ): the_row(); ?>
                  <div class="count_item wow animate__animated animate__slideInUp">
                    <div class="count_num">0<?php echo get_row_index(); ?></div>
                    <div class="count_sep"></div>
                    <div class="count_text"><?php the_sub_field('text'); ?></div>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <?php if (get_field('btn_advantages')){ ?>
              <div class="btn__main popup_calc wow animate__animated animate__slideInUp"><?php the_field('btn_advantages') ?></div>
            <?php } ?>

          </div>

        </div>
      </div>

    </div>


  </section>


  <?php if( have_rows('slider_1') ): ?>
    <section class="fourth  wow animate__animated animate__slideInUp">

      <div class="slider_wrap slider_wrap_1">

        <div class="slider slick-slider slider__big slider_1">

          <?php while( have_rows('slider_1') ): the_row();?>

            <div class="slider-item">
              <div class="slide_img">
                <?php if( wp_is_mobile() ) {  ?>
                  <img src="<?php the_sub_field('img_mob'); ?>" alt="">
                <?php } else {?>
                  <img src="<?php the_sub_field('img'); ?>" alt="">
                <?php } ?>
                
              </div>
            </div>
                
          <?php endwhile; ?>

        </div>

        <div class="slider_controls">
          <div class="slider_controls_wrap">
            <div class=" ">
              <button type="button" class="slick-prev slider_nav slider_nav_prev slider_nav_prev_1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <defs>
                      <clipPath id="fhr88cqava">
                          <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                      </clipPath>
                  </defs>
                  <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                      <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                  </g>
                </svg>
              </button>
            </div>
            <div class="slider_pag slider_pag_1"></div>
            <div class=" ">
              <button type="button" class="slick-next slider_nav slider_nav_next slider_nav_next_1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <defs>
                      <clipPath id="fhr88cqava">
                          <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                      </clipPath>
                  </defs>
                  <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                      <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </div>

      </div>

    </section>

  <?php endif; ?>


  <section class="fifth padd">

    <div class="row s5_r1 padd">

      <div class="container">

        <div class="wrap">

          <div class="left wow animate__animated animate__slideInUp">

            <div class="title title__big"><?php the_field('title_indicat') ?></div>

            <img src="<?php the_field('arm_img') ?>" alt="" class="mob_hide">

          </div>

          <div class="right wow animate__animated animate__slideInUp">

            <div class="title"><?php the_field('sub_indicat_1') ?></div>

            <?php if( have_rows('indicat_list_1') ): ?>
                <ul class="list">
                <?php while( have_rows('indicat_list_1') ): the_row(); ?>
                    <li><?php the_sub_field('text'); ?></li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <div class="title title_list__red"><?php the_field('sub_indicat_2') ?></div>

            <?php if( have_rows('indicat_list_2') ): ?>
                <ul class="list list__red">
                <?php while( have_rows('indicat_list_2') ): the_row(); ?>
                    <li><?php the_sub_field('text'); ?></li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <div class="s5_r1_mob_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_s5_r1_mob.png" alt="" class="mob_only"></div>
            

          </div>

        </div>

      </div>

    </div>

    <div class="row row_s5_r2 padd nav_anchors">

      <div class="wrap"  id="results">

        <div class="left container__left wow animate__animated animate__slideInUp">
          <div class="title title__big"><?php the_field('title_result') ?></div>
        </div>

        <div class="right wow animate__animated animate__slideInUp">

          <?php if( have_rows('slider_result') ): ?>

            <div class="slider_wrap slider_wrap_2">

              <div class="slider slick-slider slider_2">

                <?php while( have_rows('slider_result') ): the_row(); ?>

                  <div class="slider-item">
                    <div class="slide_img">
                      <img src="<?php the_sub_field('img'); ?>" alt="">
                    </div>
                    <div class="slide_descr"><?php the_sub_field('text'); ?></div>
                  </div>

                <?php endwhile; ?>

              </div>

            <div class="slider_controls">
              <div class="slider_controls_wrap">
                <div class=" ">
                  <button type="button" class="slick-prev slider_nav slider_nav_prev slider_nav_prev_2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <defs>
                          <clipPath id="fhr88cqava">
                              <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                          </clipPath>
                      </defs>
                      <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                          <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="slider_pag slider_pag_2"></div>
                <div class=" ">
                  <button type="button" class="slick-next slider_nav slider_nav_next slider_nav_next_2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <defs>
                          <clipPath id="fhr88cqava">
                              <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                          </clipPath>
                      </defs>
                      <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                          <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                      </g>
                    </svg>
                  </button>
                </div>
              </div>
            </div>

          </div>

          <?php endif; ?>

          <?php if (get_field('btn_result')){ ?>
            <div class="btn__main popup_present"><?php the_field('btn_result') ?></div>
          <?php } ?>
        </div>
      </div>

    </div>

  </section>


  <?php if( have_rows('comparison_table') ): ?>

    <section class="sixth  wow animate__animated animate__slideInUp">

        <div class="banner_lines">
          <svg xmlns="http://www.w3.org/2000/svg" width="694.742" height="342.782" viewBox="0 0 694.742 342.782">
            <g id="banner_lines" data-name="banner_lines" transform="translate(-944.667 154.454)" opacity="0.195">
              <path id="banner_line1" data-name="Контур 8" d="M944.668-116.021c64.9-.08,129.24,29.813,171.037,79.465,36.248,43.061,54.917,98.062,86.011,144.98s83.606,88.065,138.94,77.761c37.992-7.077,68.192-37.377,86.057-71.646s25.6-72.723,35.169-110.167,21.718-75.458,46.476-105.131c31.385-37.616,82.339-57.919,130.993-52.194" transform="translate(0 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
              <path id="banner_line2" data-name="Контур 9" d="M958.59-118.393c60.84-.073,121.151,27.947,160.331,74.493C1152.9-3.534,1170.4,48.024,1199.549,92s78.373,82.555,130.244,72.9c35.615-6.633,63.924-35.038,80.672-67.161s24-68.173,32.969-103.273S1463.791-76.27,1487-104.086c29.421-35.262,77.186-54.294,122.794-48.929" transform="translate(7.818 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
              <path id="banner_line3" data-name="Контур 10" d="M972.511-120.763c56.779-.069,113.062,26.081,149.629,69.518,31.71,37.67,48.042,85.787,75.244,126.832s73.14,77.043,121.548,68.028c33.237-6.19,59.656-32.7,75.286-62.678s22.4-63.621,30.767-96.377,19-66.012,40.659-91.972c27.456-32.908,72.033-50.668,114.6-45.661" transform="translate(15.635 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
              <path id="banner_line4" data-name="Контур 11" d="M986.432-123.135c52.717-.064,104.974,24.215,138.924,64.546,29.443,34.975,44.6,79.649,69.861,117.758s67.908,71.53,112.853,63.161c30.859-5.746,55.387-30.359,69.9-58.193s20.8-59.069,28.567-89.483,17.641-61.29,37.75-85.392c25.492-30.553,66.879-47.044,106.4-42.394" transform="translate(23.452 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
              <path id="banner_line5" data-name="Контур 12" d="M1000.353-125.507c48.656-.058,96.886,22.35,128.22,59.572,27.174,32.281,41.168,73.512,64.479,108.685s62.675,66.018,104.157,58.293c28.481-5.3,51.12-28.02,64.515-53.709s19.193-54.519,26.363-82.589,16.282-56.566,34.842-78.812c23.528-28.2,61.726-43.42,98.2-39.129" transform="translate(31.269 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
            </g>
          </svg>
        </div>

        <div class="banner_cloud_1">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
              <linearGradient id="linear-gradient" x1="2.76" y1="0.588" x2="2.779" y2="2.876" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#b1dde0"/>
                <stop offset="1" stop-color="#49bfc6"/>
              </linearGradient>
            </defs>
            <path id="banner_cloud_1" data-name="banner_cloud_1" d="M1481.017,351.289H1017.3a103.887,103.887,0,0,1,9.467-31.244c11.184-23.336,33.553-45.579,63.909-49.12,13.093-1.529,25.957.546,38.41,4.321,17.845,5.4,37.838,1,50.081-10.911a83.169,83.169,0,0,1,32.255-19.163c23.132-7.5,50.482-5.662,71.81,4.8a123.123,123.123,0,0,1,17.731,10.942c15.937,11.481,30.26,24.911,50.329,29.9,20.87,5.179,43.678-.023,65.063,3.471,31.348,5.124,54.385,28.5,63.489,53.542Q1480.473,349.546,1481.017,351.289Z"  opacity="0.2" fill="url(#linear-gradient)"/>
          </svg>
        </div>

        <div class="table_cloud_2">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
              <linearGradient id="linear-gradient" x1="1.424" y1="1.775" x2="1.668" y2="0.5" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#b1dde0"/>
                <stop offset="1" stop-color="#49bfc6"/>
              </linearGradient>
            </defs>
            <path id="banner_cloud_2" data-name="banner_cloud_2" d="M1691.061,485.64c-10.03-26.42-7.273-55.429-1.973-82.981s13.05-55,12.642-82.976c-.667-45.691-24.52-90.72-63.472-119.171s-92.273-39.662-140.752-29.311c-30.658,6.547-59.479,21.187-90.93,22.376-32.292,1.222-62.976-11.877-94.763-17.235-75.476-12.721-156.374,22.148-198.6,80.967s-46.245,137.72-15.336,202.2,94.275,113.941,166.843,136.843,153.329,20.248,226.127-2.032c35.7-10.926,69.684-26.385,105.885-35.8s76.183-12.366,110.591,1.614l49.977-24.228C1726.831,535.156,1701.092,512.059,1691.061,485.64Z" opacity="0.1" fill="url(#linear-gradient)"/>
          </svg>
        </div>

        <div class="table_cloud_3">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
            <defs>
              <linearGradient id="linear-gradient" x1="1.424" y1="1.775" x2="1.668" y2="0.5" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#b1dde0"/>
                <stop offset="1" stop-color="#49bfc6"/>
              </linearGradient>
            </defs>
            <path id="banner_cloud_3" data-name="banner_cloud_3" d="M1742.3,451.608h-725a231.175,231.175,0,0,1,14.8-59.563c17.486-44.487,52.458-86.891,99.918-93.642,20.47-2.914,40.582,1.041,60.052,8.237a70.468,70.468,0,0,0,78.3-20.8,127.923,127.923,0,0,1,50.429-36.532c36.166-14.289,78.926-10.795,112.272,9.144a190.76,190.76,0,0,1,27.721,20.86c24.916,21.886,47.311,47.49,78.687,57.006,32.63,9.873,68.288-.045,101.723,6.616,49.011,9.769,85.028,54.329,99.262,102.072Q1741.45,448.285,1742.3,451.608Z"  opacity="0.2" fill="url(#linear-gradient)"/>
          </svg>
        </div>


      <div class="sixth_wrap">
        <div class="title"><?php the_field('title_comparison'); ?></div>
        <div class="table_wrap">
          <div class="table">

            <?php while( have_rows('comparison_table') ): the_row();?>

              <?php if (get_sub_field('row_title')){ ?>

                <div class="trow trow_title">
                  <div class="tcol tcol_1">&nbsp;</div>

                    <?php if( have_rows('items') ): ?>

                      <?php while( have_rows('items') ): the_row();  $col_num = get_row_index(); $col_num =  $col_num + 1; ?>

                        <div class="tcol tcol_<?php echo $col_num; ?>"><?php the_sub_field('subtitle'); ?></div>

                        <?php the_sub_field('name'); ?>

                      <?php endwhile; ?>
      
                    <?php endif; ?>
                                  
                  </div>

              <?php } else {?>

                  <div class="trow">
                    <div class="tcol tcol_1"><?php the_sub_field('title'); ?></div>

                      <?php if( have_rows('items') ): ?>

                        <?php while( have_rows('items') ): the_row();  $col_num = get_row_index(); $col_num =  $col_num + 1; ?>

                          <div class="tcol tcol_<?php echo $col_num; ?>">

                            <?php if ( get_sub_field('t_f_info') ){ ?>

                              <div class="table_popup_wrap">
                                <div class="table_popup"><?php the_sub_field('info_text'); ?></div>
                                <img class="table_ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_<?php the_sub_field('img'); ?>.svg" alt="">
                              </div>


                            <?php } else{?>
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_<?php the_sub_field('img'); ?>.svg" alt="">
                            <?php } ?>
                      
                          </div>

                          <?php the_sub_field('name'); ?>

                        <?php endwhile; ?>

                      <?php endif; ?>

                  </div>


                <?php } ?>
            


                
            <?php endwhile; ?>

          </div>
        </div>
        <div class="sisth_arrow mob_only wow animate__animated animate__slideInUp">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="#49bfc6" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
          </svg>
        </div>
        <div class="mob_table_info mob_only wow animate__animated animate__slideInUp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_info.svg" alt="">
          <div class=""><?php the_field('mob_table_info'); ?></div>
        </div>
      </div>
    </section>

  <?php endif; ?>




  <section class="seventh padd">
    <div class="container padd">
      <div class="wrap">
        <div class="left wow animate__animated animate__slideInUp">
          <div class="title title__big"><?php the_field('title_reviews') ?></div>
        </div>

        <div class="right wow animate__animated animate__slideInUp">

          <?php if( have_rows('video_slider') ): ?>

            <div class="slider_wrap slider_wrap_video">

              <div class="slider slick-slider video_slider">

                <?php while( have_rows('video_slider') ): the_row(); ?>

                  <div class="video">
                    <a class="video_img" href="<?php the_sub_field('link'); ?>" style="background-image:url('<?php the_sub_field('img'); ?>');"></a>
                    <a class="video_btn" href="<?php the_sub_field('link'); ?>">
                      <div class="video_btn_wrap">
                        <div class="video_btn_play">
                          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="54" viewBox="0 0 48 54">
                            <path fill="#d02029" d="M21.771 9.3a6 6 0 0 1 10.459 0l16.74 29.758A6 6 0 0 1 43.741 48H10.259a6 6 0 0 1-5.229-8.942z" transform="rotate(90 24 24)"/>
                          </svg>
                        </div>
                        <div class="video_btn_capt"><?php the_field('video_btn_text', pll_current_language()) ?></div>
                      </div>
                    </a>
                  </div> <!-- video -->             

                <?php endwhile; ?>

              </div>

              <div class="slider_controls">
                <div class="slider_controls_wrap">
                  <div class=" ">
                    <button type="button" class="slick-prev slider_nav slider_nav_prev slider_nav_prev_5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <defs>
                            <clipPath id="fhr88cqava">
                                <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                            <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                        </g>
                      </svg>
                    </button>
                  </div>
                  <div class="slider_pag slider_pag_5"></div>
                  <div class=" ">
                    <button type="button" class="slick-next slider_nav slider_nav_next slider_nav_next_5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <defs>
                            <clipPath id="fhr88cqava">
                                <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                            <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                        </g>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

            </div>


          <?php endif; ?>

        </div>


      </div>
    </div>
  </section>


  <?php if( have_rows('slider_reviews') ): ?>

    <section class="eighth nav_anchors wow animate__animated animate__slideInUp" id="feedback">

      <div class="title title__big mob_only container"><?php the_field('title_reviews_slider') ?></div>

      <div class="slider_wrap slider_wrap_3">

        <div class="slider slick-slider slider__big slider_3">

          <?php while( have_rows('slider_reviews') ): the_row(); ?>

            <div class="slider-item">
              <div class="slide_img">
                <img src="<?php the_sub_field('img'); ?>" alt="">
              </div>
              <div class="slider_about_descr">
                <div class="slider_about_descr_wrap">
                  <div class="title title__small"><?php the_sub_field('title'); ?></div>
                  <p><?php the_sub_field('text'); ?></p>

                  <?php if (get_sub_field('link')){ ?>
                    
                    <a class="video_btn"  href="<?php the_sub_field('link'); ?>">
                      <div class="video_btn_wrap">
                        <div class="video_btn_play">
                          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="54" viewBox="0 0 48 54">
                            <path fill="#d02029" d="M21.771 9.3a6 6 0 0 1 10.459 0l16.74 29.758A6 6 0 0 1 43.741 48H10.259a6 6 0 0 1-5.229-8.942z" transform="rotate(90 24 24)"/>
                          </svg>
                        </div>
                        <div class="video_btn_capt"><?php the_field('video_btn_text', pll_current_language()) ?></div>
                      </div>
                    </a>           

                  <?php } ?>     



                </div>
              </div>
            </div>
              


          <?php endwhile; ?>

        </div>

        <div class="slider_controls">
          <div class="slider_controls_wrap">
            <div class=" ">
              <button type="button" class="slick-prev slider_nav slider_nav_prev slider_nav_prev_3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <defs>
                      <clipPath id="fhr88cqava">
                          <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                      </clipPath>
                  </defs>
                  <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                      <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                  </g>
                </svg>
              </button>
            </div>
            <div class="slider_pag slider_pag_3"></div>
            <div class=" ">
              <button type="button" class="slick-next slider_nav slider_nav_next slider_nav_next_3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <defs>
                      <clipPath id="fhr88cqava">
                          <path fill="#fff" d="M0 0H24V24H0z" transform="translate(1077 5973)"/>
                      </clipPath>
                  </defs>
                  <g clip-path="url(#fhr88cqava)" transform="translate(-1077 -5973)">
                      <path fill="#fff" fill-rule="evenodd" d="M21.333-28a1.33 1.33 0 0 0-.943.391L9.724-16.942a1.332 1.332 0 0 0 0 1.885L20.39-4.391a1.332 1.332 0 0 0 1.885 0 1.332 1.332 0 0 0 0-1.885L12.552-16l9.724-9.724a1.332 1.332 0 0 0 0-1.885 1.33 1.33 0 0 0-.943-.391" transform="rotate(180 552.5 2984.5)"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="slider_about_title mob_hide">
          <div class="title title__big"><?php the_field('title_reviews_slider') ?></div>            
        </div>

        <?php if (get_field('btn_reviews')){ ?>
          <div class="slider_about_btn">
            <div class="btn__main popup_present"><?php the_field('btn_reviews') ?></div>
          </div>
        <?php } ?>


      </div>



    </section>

  <?php endif; ?>


  <section class="ninth padd">

    <?php if( have_rows('maniple_items_list') ): ?>

      <div class="row row_s9_r1 padd">
        <div class="container">
          <div class="wrap">
            <div class="left wow animate__animated animate__slideInUp">
              <div class="title title__big"><?php the_field('title_maniple') ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_s9.png" alt="" class="mob_hide">
            </div>

            <div class="right wow animate__animated animate__slideInUp">

              <div class="mob_list mob_only">
                <div class="mob_list_wrap">

                  <?php while( have_rows('maniple_items_list') ): the_row(); ?>
                    <div data-acc="acc<?php echo get_row_index(); ?>" class="mob_acc_title title"><?php the_sub_field('title'); ?></div>
                  <?php endwhile; ?>
                  
                </div>

              </div>

              <?php while( have_rows('maniple_items_list') ): the_row(); ?>
                <div class="accordion_item">
                  <div class="title acc_title">
                    <span class="acc_title_text"><?php the_sub_field('title'); ?><img src="<?php the_sub_field('img_hover'); ?>" alt="" class="hover_img"></span>
                    
                    
                  </div>
                  <div data-acc="acc<?php echo get_row_index(); ?>" class="acc_body">
                    <?php the_sub_field('text'); ?>
                  </div>
                </div>
              <?php endwhile; ?>

            </div>

          </div>
        </div>
      </div>

    <?php endif; ?>

    <?php if( have_rows('slider_docs') ): ?>

      <div class="row row_s9_r2 padd nav_anchors">

        <div class="wrap"  id="sertificats">

          <div class="left container__left wow animate__animated animate__slideInUp">
            <div class="title title__big"><?php the_field('title_docs') ?></div>
          </div>

          <div class="right wow animate__animated animate__slideInUp">

            <div class="slider_wrap slider_wrap_4">

              <div class="slider slick-slider slider_4">

                <?php while( have_rows('slider_docs') ): the_row(); ?>

                  <div class="slider-item">
                    <div class="slide_img">
                      <img src="<?php the_sub_field('img'); ?>" alt="">
                    </div>
                  </div>                    

                <?php endwhile; ?>

              </div>

            </div>

            <?php if (get_field('btn_docs')){ ?>
              <div class="btn__main popup_spec mob_hide"><?php the_field('btn_docs') ?></div>
            <?php } ?>


          </div>

        </div>

      </div>

    <?php endif; ?>

    <?php if( have_rows('faq_list') ): ?>

      <div class="row row_s9_r3 padd">

        <div class="container">
          <div class="wrap">
            <div class="left wow animate__animated animate__slideInUp">
              <div class="title title__big"><?php the_field('title_faq') ?></div>
            </div>
            <div class="right wow animate__animated animate__slideInUp">

              <div class="faq_list">

                <?php while( have_rows('faq_list') ): the_row(); ?>

                  <div class="faq_item">
                    <div class="faq_item_title"><?php the_sub_field('title'); ?></div>
                    <div class="faq_item_body"><?php the_sub_field('text'); ?> </div>
                  </div>                  

                <?php endwhile; ?>

              </div>

            </div>
          </div>
        </div>

      </div>
    <?php endif; ?>

  </section>


</main>

  <div class="popup" id="popup_present">
		<div class="popup_wrap">
		<div class="popup_close">
			<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.41425 7.00025L13.7073 1.70725C14.0983 1.31625 14.0983 0.68425 13.7073 0.29325C13.3163 -0.09775 12.6842 -0.09775 12.2932 0.29325L7.00025 5.58625L1.70725 0.29325C1.31625 -0.09775 0.68425 -0.09775 0.29325 0.29325C-0.09775 0.68425 -0.09775 1.31625 0.29325 1.70725L5.58625 7.00025L0.29325 12.2932C-0.09775 12.6842 -0.09775 13.3163 0.29325 13.7073C0.48825 13.9023 0.74425 14.0002 1.00025 14.0002C1.25625 14.0002 1.51225 13.9023 1.70725 13.7073L7.00025 8.41425L12.2932 13.7073C12.4882 13.9023 12.7443 14.0002 13.0002 14.0002C13.2562 14.0002 13.5123 13.9023 13.7073 13.7073C14.0983 13.3163 14.0983 12.6842 13.7073 12.2932L8.41425 7.00025Z"></path>
			</svg>
		</div>
		<div class="popup_title"><?php the_field('btn_banner') ?></div>
		<div class="popup_form">
			<?php echo do_shortcode(get_field('form_banner')) ; ?>
		</div>
		</div>
	</div>

  <div class="popup" id="popup_calc">
		<div class="popup_wrap">
		<div class="popup_close">
			<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.41425 7.00025L13.7073 1.70725C14.0983 1.31625 14.0983 0.68425 13.7073 0.29325C13.3163 -0.09775 12.6842 -0.09775 12.2932 0.29325L7.00025 5.58625L1.70725 0.29325C1.31625 -0.09775 0.68425 -0.09775 0.29325 0.29325C-0.09775 0.68425 -0.09775 1.31625 0.29325 1.70725L5.58625 7.00025L0.29325 12.2932C-0.09775 12.6842 -0.09775 13.3163 0.29325 13.7073C0.48825 13.9023 0.74425 14.0002 1.00025 14.0002C1.25625 14.0002 1.51225 13.9023 1.70725 13.7073L7.00025 8.41425L12.2932 13.7073C12.4882 13.9023 12.7443 14.0002 13.0002 14.0002C13.2562 14.0002 13.5123 13.9023 13.7073 13.7073C14.0983 13.3163 14.0983 12.6842 13.7073 12.2932L8.41425 7.00025Z"></path>
			</svg>
		</div>
		<div class="popup_title"><?php the_field('btn_advantages') ?></div>
		<div class="popup_form">
			<?php echo do_shortcode(get_field('form_calc')) ; ?>
		</div>
		</div>
	</div>

  <div class="popup" id="popup_spec">
		<div class="popup_wrap">
		<div class="popup_close">
			<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.41425 7.00025L13.7073 1.70725C14.0983 1.31625 14.0983 0.68425 13.7073 0.29325C13.3163 -0.09775 12.6842 -0.09775 12.2932 0.29325L7.00025 5.58625L1.70725 0.29325C1.31625 -0.09775 0.68425 -0.09775 0.29325 0.29325C-0.09775 0.68425 -0.09775 1.31625 0.29325 1.70725L5.58625 7.00025L0.29325 12.2932C-0.09775 12.6842 -0.09775 13.3163 0.29325 13.7073C0.48825 13.9023 0.74425 14.0002 1.00025 14.0002C1.25625 14.0002 1.51225 13.9023 1.70725 13.7073L7.00025 8.41425L12.2932 13.7073C12.4882 13.9023 12.7443 14.0002 13.0002 14.0002C13.2562 14.0002 13.5123 13.9023 13.7073 13.7073C14.0983 13.3163 14.0983 12.6842 13.7073 12.2932L8.41425 7.00025Z"></path>
			</svg>
		</div>
		<div class="popup_title"><?php the_field('btn_docs') ?></div>
		<div class="popup_form">
			<?php echo do_shortcode(get_field('form_docs')) ; ?>
		</div>
		</div>
	</div>

<?php get_template_part('template-parts/dealer-equipment'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/robolex-main.js"></script>

<script> new WOW().init(); </script>
<?php get_footer(); ?>