<?php

  add_filter('show_admin_bar', '__return_false');

  add_theme_support( 'post-thumbnails', array(  'page', 'post', 'product', 'equipment' ) );

  add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

  function theme_name_scripts() {
    wp_enqueue_style( 'add', get_template_directory_uri() . '/assets/css/add.css' );
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/js/libs/aos.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'lightboxcss', get_template_directory_uri() . '/assets/js/libs/lightbox/css/lightbox.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_script( 'jquery-3.5.1.min', get_template_directory_uri() . '/assets/js/libs/jquery-3.5.1.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/assets/js/libs/slick.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/libs/aos.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.maskedinput', get_template_directory_uri() . '/assets/js/libs/jquery.maskedinput.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'add', get_template_directory_uri() . '/assets/js/add.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), '1.0.0', true );
    wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/assets/js/libs/lightbox/js/lightbox.js', array(), '1.0.0', true );
  }

  add_action( 'after_setup_theme', function(){
    register_nav_menus( [
      'header_menu'   => 'Меню в шапке',
      'footer_menu_1' => 'Подвал компания',
      'footer_menu_2' => 'Подвал оборудование',
      'footer_menu_3' => 'Подвал обучение',
      'footer_menu_4' => 'Подвал histolab',
      'footer_menu_5' => 'Подвал консалтинг',
    ] );
  } );

	if (function_exists('acf_add_options_page') && current_user_can('administrator')) {
		$languages = pll_languages_list();
		foreach ($languages as $lang) {
			acf_add_options_page(array(
				'page_title' => __('General (' . strtoupper($lang) . ')'),
				'menu_title' => __('General (' . strtoupper($lang) . ')'),
				'menu_slug'  => "general-${lang}",
				'post_id'    => $lang
			));
		}
	}


  add_action('init', 'register_post_types');

  function register_post_types() {

    register_post_type('product', [
      'labels'            => [
        'name'            => _('Косметика'),
        'singular_name'   => _('Товар'),
        'add_new'         => 'Добавить товар',
      ],
      'public'            => true,
      'has_archive'       => true,
      'menu_position'     => 4,
			'menu_icon'         => 'dashicons-cart',
      'supports'          => [ 'title', 'editor', 'thumbnail' ],
      'capability_type'   => 'post',
      'taxonomies'        => ['category'],
      'show_in_rest'      => true
    ]);

    register_post_type('equipment', [
      'labels'            => [
        'name'            => _('Оборудование'),
        'singular_name'   => _('Оборудование'),
        'add_new'         => 'Добавить оборудование',
      ],
      'public'            => true,
      'has_archive'       => true,
      'menu_position'     => 5,
			'menu_icon'         => 'dashicons-hammer',
      'supports'          => [ 'title', 'editor', 'thumbnail' ],
      'capability_type'   => 'post',
      'taxonomies'        => ['taxonomy_equipment'],
      'show_in_rest'      => true
    ]);

    register_post_type('news', [
      'labels'            => [
        'name'            => _('Новости'),
        'singular_name'   => _('Новости'),
        'add_new'         => 'Добавить новость',
      ],
      'public'            => true,
      'has_archive'       => true,
      'menu_position'     => 6,
			'menu_icon'         => 'dashicons-align-right',
      'supports'          => [ 'title', 'editor', 'thumbnail' ],
      'capability_type'   => 'post',
      'show_in_rest'      => true
    ]);

    register_post_type('study', [
      'labels'            => [
        'name'            => _('Обучающие материалы'),
        'singular_name'   => _('Обучающие материалы'),
        'add_new'         => 'Добавить материал',
      ],
      'public'            => true,
      'has_archive'       => true,
      'menu_position'     => 7,
			'menu_icon'         => 'dashicons-welcome-learn-more',
      'supports'          => [ 'title', 'editor', 'thumbnail' ],
      'capability_type'   => 'post',
      'show_in_rest'      => true
    ]);
  }

  add_post_type_support( 'news', 'thumbnail' );

  add_action( 'init', 'create_taxonomy' );

  function create_taxonomy(){

    register_taxonomy( 'taxonomy_equipment', array('equipment'), [
      'label'                 => 'Категории оборудования',
      'labels'                => [
        'name'              => 'Категории оборудования',
        'singular_name'     => 'Категория оборудования',
        'search_items'      => 'Найти категории оборудования',
        'all_items'         => 'Все категории оборудования',
        'view_item '        => 'Смотреть категории оборудования',
        'parent_item'       => 'Родительская категории оборудования',
        'parent_item_colon' => 'Родительская категории оборудования:',
        'edit_item'         => 'Редактировать категории оборудования',
        'update_item'       => 'Обновить категории оборудования',
        'add_new_item'      => 'Добавить новую категорию оборудования',
        'new_item_name'     => 'Новое название категорию оборудования',
        'menu_name'         => 'Категории оборудования',
      ],
      'description'           => '', // описание таксономии
      'public'                => true,
      // 'publicly_queryable'    => null, // равен аргументу public
      'show_in_nav_menus'     => true, // равен аргументу public
      'show_ui'               => true, // равен аргументу public
      'show_in_menu'          => true, // равен аргументу show_ui
      // 'show_tagcloud'         => true, // равен аргументу show_ui
      // 'show_in_quick_edit'    => null, // равен аргументу show_ui
      'hierarchical'          => true,
      'rewrite'               => true,
      'query_var'             => true, // название параметра запроса
      'capabilities'          => array(),
      'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
      'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
      'show_in_rest'          => true, // добавить в REST API
      'rest_base'             => null, // $taxonomy
      // '_builtin'              => false,
      //'update_count_callback' => '_update_post_term_count',
    ] );

    add_filter( 'navigation_markup_template',  'my_posts_pagination', 10, 2 );
    function my_posts_pagination($template, $class){
        global $wp_query;

        $total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
        $current = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;
        $first = $last = '';

        if($current == 1)
            $first = '<span class="prev inactive">Previous</span>';

        if($current == $total)
            $last = '<span class="next inactive">Next</span>';

        $template = '
        <nav class="navigation %1$s" role="navigation" aria-label="%4$s">
            <h2 class="screen-reader-text">%2$s</h2>
            <div class="nav-links">
            '.$first.'
            %3$s
            '.$last.'
            </div>
        </nav>';
        return $template;
    }

  }

/**
* Removes or edits the 'Protected:' part from posts titles
*/

add_filter( 'protected_title_format', 'remove_protected_text' );
function remove_protected_text() {
return __('%s');
}