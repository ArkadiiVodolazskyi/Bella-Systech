<?php get_header(); ?>

	<section class="page_header">
		<div class="wrapper">
			<h2>Новости Bella Academy</h2>
		</div>
	</section>

	<div class="breadcrumbs">
		<div class="wrapper">
			<a href="<?php the_field('breadcrumb_home_link', pll_current_language()); ?>"><?php the_field('home_title', pll_current_language()); ?></a>
			<a class="current">
				Новости
			</a>
		</div>
	</div>

	<section class="news all_news">
		<div class="wrapper">
			<div class="cards cards-news">

				<?php
					wp_reset_query();
					$my_posts = new WP_Query;
					$myposts = $my_posts->query([
						'hide_empty' => false,
						'post_type' => 'news',
						'posts_per_page' => get_field('per_page', 'ru')['news'],
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // получить посты с текущей страницы, установить текущую страницу в 1, если не определена
					]);

					foreach( $myposts as $key=>$post ) {
						setup_postdata($post);
						$url = get_permalink();
						$img = get_field('main_img');
						$date = get_the_date('j F Y', $post->id);
						$post_title = $post->post_title;
				?>

					<a href="<?= $url; ?>" class="card">
						<div class="image">
							<img src="<?= $img ?>" alt="news_thumbnail">
						</div>
						<div class="text">
							<span class="date"><?= $date; ?></span>
							<h6><?= $post_title; ?></h6>
						</div>
					</a>

				<?php }; wp_reset_postdata(); ?>

			</div>

			<?php
				function custom_page_navi( $totalpages, $page, $end_size, $mid_size ) {
					$bignum = 999999999;

					if ( $totalpages <= 1 || $page > $totalpages ) return;

					return paginate_links( array(
							'base'          => str_replace( $bignum, '%#%', esc_url( get_pagenum_link( $bignum ) ) ),
							'format'        => '',
							'current'       => max( 1, $page ),
							'total'         => $totalpages,
							'prev_text'    => __('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18"><path d="M-3.108 4.68C-3.255.485-5.655-2.163-9.84-2.609v-3.422c4.185-.446 6.585-3.094 6.732-7.289l3.8.893a7.33 7.33 0 0 1-4.507 6.4H14.16v3.421H-3.811A6.109 6.109 0 0 1-.767-.259 8.036 8.036 0 0 1 .7 3.787z" transform="translate(9.84 13.32)"/></svg>'),
							'next_text'    => __('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18"><path d="M7.428 4.68c.146-4.2 2.546-6.843 6.732-7.289v-3.422c-4.185-.446-6.585-3.094-6.732-7.289l-3.8.893a7.33 7.33 0 0 0 4.507 6.4H-9.84v3.421H8.131A6.109 6.109 0 0 0 5.087-.259a8.036 8.036 0 0 0-1.464 4.046z" transform="translate(9.84 13.32)"/></svg>'),
							'type'          => 'list',
							'show_all'      => false,
							'end_size'      => $end_size,
							'mid_size'      => $mid_size
						)
					);
				}

				// Edit:
				$number   = get_field('per_page', 'ru')['news']; // number of terms to display per page

				// Setup:
				$page         = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$totalterms   = wp_count_posts( 'news' )->publish;
				$totalpages   = ceil( $totalterms / $number );

				// Show custom page navigation
				printf( '<nav class="navigation">%s</nav>',
					custom_page_navi( $totalpages, $page, 1, 5 )
				);

				?>
		</div>
	</section>

<?php get_footer(); ?>