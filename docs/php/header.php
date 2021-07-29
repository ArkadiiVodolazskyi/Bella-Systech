<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
  <?php wp_head(); ?>
</head>
<body>

  <div id="overlay">
	</div>
	<div id="modal-connect">
		<h4><?php the_field('popup_form_title', pll_current_language()); ?></h4>
		<?php echo do_shortcode(get_field('popup_form', pll_current_language())) ; ?>
		<button id="close-connect">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<g transform="translate(-18 -24)">
					<path d="M29.312 0a1.543 1.543 0 1 1 0 3.085H1.543a1.543 1.543 0 1 1 0-3.085z" transform="translate(20.181 23.999) rotate(45)"/>
					<path d="M29.312 0a1.543 1.543 0 1 1 0 3.085H1.543a1.543 1.543 0 1 1 0-3.085z" transform="translate(17.999 45.818) rotate(-45)"/>
				</g>
			</svg>
		</button>
	</div>
	<div id="overlay_mobile"></div>

	<div id="modal-connect">
		<h4><?php the_field('popup_form_title', pll_current_language()); ?></h4>
		<?php echo do_shortcode(get_field('popup_form', pll_current_language())) ; ?>
		<button id="close-connect">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<g transform="translate(-18 -24)">
					<path d="M29.312 0a1.543 1.543 0 1 1 0 3.085H1.543a1.543 1.543 0 1 1 0-3.085z" transform="translate(20.181 23.999) rotate(45)"/>
					<path d="M29.312 0a1.543 1.543 0 1 1 0 3.085H1.543a1.543 1.543 0 1 1 0-3.085z" transform="translate(17.999 45.818) rotate(-45)"/>
				</g>
			</svg>
		</button>
	</div>

	<div class="overlay"></div>

	<div class="popup" id="popup_callback">
		<div class="popup_wrap">
		<div class="popup_close">
			<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.41425 7.00025L13.7073 1.70725C14.0983 1.31625 14.0983 0.68425 13.7073 0.29325C13.3163 -0.09775 12.6842 -0.09775 12.2932 0.29325L7.00025 5.58625L1.70725 0.29325C1.31625 -0.09775 0.68425 -0.09775 0.29325 0.29325C-0.09775 0.68425 -0.09775 1.31625 0.29325 1.70725L5.58625 7.00025L0.29325 12.2932C-0.09775 12.6842 -0.09775 13.3163 0.29325 13.7073C0.48825 13.9023 0.74425 14.0002 1.00025 14.0002C1.25625 14.0002 1.51225 13.9023 1.70725 13.7073L7.00025 8.41425L12.2932 13.7073C12.4882 13.9023 12.7443 14.0002 13.0002 14.0002C13.2562 14.0002 13.5123 13.9023 13.7073 13.7073C14.0983 13.3163 14.0983 12.6842 13.7073 12.2932L8.41425 7.00025Z"></path>
			</svg>
		</div>


		<div class="popup_title"><?php the_field('callback_form_title',pll_current_language()) ?></div>



		<div class="popup_form">

			<?php echo do_shortcode(get_field('callback_form', pll_current_language())) ; ?>

		</div>

		</div>

	</div>

	<header id="mainHeader">
		<div class="top">
			<div class="header_contacts">
				<ul class="messengers">
					<li><a href="<?php the_field('contact_whatsup', pll_current_language()); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<g transform="translate(-1427 -39)">
								<path d="M15.3 4.33A8.923 8.923 0 0 0 1.266 15.094L0 19.714l4.729-1.242a8.892 8.892 0 0 0 4.263 1.085H9a9.005 9.005 0 0 0 9-8.92 8.955 8.955 0 0 0-2.7-6.307zM9 18.055a7.4 7.4 0 0 1-3.777-1.033l-.269-.161-2.8.735.747-2.736-.177-.281a7.428 7.428 0 1 1 13.777-3.942A7.5 7.5 0 0 1 9 18.055zm4.062-5.555c-.221-.113-1.318-.651-1.523-.723s-.354-.112-.5.112-.575.723-.707.876-.261.169-.482.056a6.067 6.067 0 0 1-3.033-2.652c-.229-.394.229-.366.655-1.217a.413.413 0 0 0-.02-.39c-.056-.113-.5-1.209-.687-1.655s-.366-.374-.5-.382-.277-.008-.426-.008a.826.826 0 0 0-.595.277 2.5 2.5 0 0 0-.779 1.86 4.366 4.366 0 0 0 .908 2.306 9.959 9.959 0 0 0 3.804 3.37 4.361 4.361 0 0 0 2.676.558 2.283 2.283 0 0 0 1.5-1.061 1.864 1.864 0 0 0 .129-1.061c-.05-.099-.199-.155-.42-.266z" transform="translate(1427 37.286)"/>
							</g>
					</svg>
					</a></li>
					<li><a href="<?php the_field('contact_tg', pll_current_language()); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<g transform="translate(-1397 -39)">
								<path d="M9,.387a9,9,0,1,0,9,9A9,9,0,0,0,9,.387Zm4.42,6.166-1.477,6.96c-.109.494-.4.613-.813.381L8.88,12.236,7.8,13.281a.568.568,0,0,1-.454.221l.16-2.29,4.17-3.767c.181-.16-.04-.25-.279-.091L6.238,10.6,4.017,9.906c-.483-.152-.494-.483.1-.715L12.8,5.845C13.2,5.7,13.551,5.943,13.42,6.553Z" transform="translate(1397 38.613)"/>
							</g>
						</svg>
					</a></li>
				</ul>
				<?php if ( have_rows('contact_phones_head', pll_current_language() ) ){ ?>
					<div class="phones hover_expand_inner">
						<?php $contact_phones = get_field('contact_phones_head', pll_current_language() ); ?>
						<a href="tel:<?php echo $contact_phones[0]['tel']; ?>"><?php echo $contact_phones[0]['tel']; ?></a>
						<ul>
							<?php while( have_rows('contact_phones_head', pll_current_language() ) ){ the_row(); ?>
								<li><a href="tel:<?php the_sub_field('tel'); ?>"><?php the_sub_field('tel'); ?></a></li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
				<button class="popup_callback"><?php the_field('head_request_text', pll_current_language()); ?></button>
			</div>

				<?php
					wp_nav_menu([
						'container' => 'nav',
						'theme_location' => 'header_menu',
						'menu_class' => 'nav-main__list',
						'item_class' => 'nav-main__item',
						'link_class' => 'nav-main__link'
					]);
				?>

			<?php 
				$languages = pll_the_languages(['raw' => true]);
				if ($languages > 1) { 
			?>
				<div class="languages hover_expand_inner">
					<a href="#"><?php echo pll_current_language('name'); ?></a>
					<ul>
						<?php foreach ($languages as $lang) {
							if ($lang['current_lang']) continue; ?>
							<li><a href="<?php echo $lang['url']; ?>"><?php echo $lang['name']; ?></a></li>
						<?php } ?>
						</ul>

				</div>
			<?php } ?>


			<button id="signup" class="filled open-connect"><?php the_field('head_request_btn', pll_current_language()); ?></button>
		</div>
		<div class="bottom">
			<div class="wrapper">
				<button id="openHambMenu">
					<svg class="hamb" xmlns="http://www.w3.org/2000/svg" viewBox="0 3 24 18">
						<g transform="translate(-18 -24)">
								<path fill="#d02029" d="M25.2 20.4a1.2 1.2 0 1 1 0 2.4H3.6a1.2 1.2 0 1 1 0-2.4zm0-7.2a1.2 1.2 0 1 1 0 2.4H3.6a1.2 1.2 0 1 1 0-2.4zm0-7.2a1.2 1.2 0 1 1 0 2.4H3.6a1.2 1.2 0 0 1 0-2.4z" transform="translate(15.6 21.6)"/>
						</g>
					</svg>
					<svg class="cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<g id="Mask_Group_56" clip-path="url(#clip-path)" transform="translate(-18 -24)">
								<path id="ic24-menu" d="M29.312 0a1.543 1.543 0 1 1 0 3.085H1.543a1.543 1.543 0 1 1 0-3.085z" class="cls-3" transform="translate(20.181 23.999) rotate(45)"/>
								<path id="ic24-menu-2" d="M29.312 0a1.543 1.543 0 1 1 0 3.085H1.543a1.543 1.543 0 1 1 0-3.085z" class="cls-3" transform="translate(17.999 45.818) rotate(-45)"/>
						</g>
					</svg>
				</button>

				<a href="/" class="logo">
					<img src="<?php the_field('logo_main', 'options') ?>" alt="logo">
				</a>

				<button id="openCallForm">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<g transform="translate(-1241 -39)">
								<path fill="#d02029" fill-rule="evenodd" d="M11.466 11.8a1.2 1.2 0 0 0 .534-1V6a3.6 3.6 0 0 0-3.6-3.6H3.6a1.2 1.2 0 0 0-1.2 1.2c0 11.929 10.871 22.8 22.8 22.8a1.2 1.2 0 0 0 1.2-1.2v-4.8a3.6 3.6 0 0 0-3.6-3.6H18a1.2 1.2 0 0 0-1 .534l-2.286 3.43a22.666 22.666 0 0 1-6.35-6.185l-.329-.494zm7.177 7.4H22.8a1.2 1.2 0 0 1 1.2 1.2v3.558a19.018 19.018 0 0 1-6.71-1.769l-.486-.234zM4.842 4.8H8.4A1.2 1.2 0 0 1 9.6 6v4.158L6.844 12a19.143 19.143 0 0 1-2.002-7.2z" transform="translate(1238.6 36.6)"/>
						</g>
					</svg>
				</button>
			</div>
		</div>

		<button id="signupMobile" class="filled open-connect"><?php the_field('head_request_btn', pll_current_language()); ?></button>
	</header>

	<div id="mobileMenu">
		<div class="wrapper">

			<div class="header_contacts">
				<ul class="messengers">
					<li><a href="<?php the_field('contact_whatsup', pll_current_language()); ?>">
						<!-- <img src="./img/ico_whatsapp.svg" alt="ico_messenger"> -->
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<g transform="translate(-1427 -39)">
								<path d="M15.3 4.33A8.923 8.923 0 0 0 1.266 15.094L0 19.714l4.729-1.242a8.892 8.892 0 0 0 4.263 1.085H9a9.005 9.005 0 0 0 9-8.92 8.955 8.955 0 0 0-2.7-6.307zM9 18.055a7.4 7.4 0 0 1-3.777-1.033l-.269-.161-2.8.735.747-2.736-.177-.281a7.428 7.428 0 1 1 13.777-3.942A7.5 7.5 0 0 1 9 18.055zm4.062-5.555c-.221-.113-1.318-.651-1.523-.723s-.354-.112-.5.112-.575.723-.707.876-.261.169-.482.056a6.067 6.067 0 0 1-3.033-2.652c-.229-.394.229-.366.655-1.217a.413.413 0 0 0-.02-.39c-.056-.113-.5-1.209-.687-1.655s-.366-.374-.5-.382-.277-.008-.426-.008a.826.826 0 0 0-.595.277 2.5 2.5 0 0 0-.779 1.86 4.366 4.366 0 0 0 .908 2.306 9.959 9.959 0 0 0 3.804 3.37 4.361 4.361 0 0 0 2.676.558 2.283 2.283 0 0 0 1.5-1.061 1.864 1.864 0 0 0 .129-1.061c-.05-.099-.199-.155-.42-.266z" transform="translate(1427 37.286)"/>
							</g>
					</svg>
					</a></li>
					<li><a href="<?php the_field('contact_tg', pll_current_language()); ?>">
						<!-- <img src="./img/ico_telegramGrey.svg" alt="ico_messenger"> -->
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<g transform="translate(-1397 -39)">
								<path d="M9,.387a9,9,0,1,0,9,9A9,9,0,0,0,9,.387Zm4.42,6.166-1.477,6.96c-.109.494-.4.613-.813.381L8.88,12.236,7.8,13.281a.568.568,0,0,1-.454.221l.16-2.29,4.17-3.767c.181-.16-.04-.25-.279-.091L6.238,10.6,4.017,9.906c-.483-.152-.494-.483.1-.715L12.8,5.845C13.2,5.7,13.551,5.943,13.42,6.553Z" transform="translate(1397 38.613)"/>
							</g>
						</svg>
					</a></li>
				</ul>
				<?php if ( have_rows('contact_phones_head', pll_current_language() ) ){ ?>
					<div class="phones hover_expand_inner">
						<?php $contact_phones = get_field('contact_phones_head', pll_current_language() ); ?>
						<a href="tel:<?php echo $contact_phones[0]['tel']; ?>"><?php echo $contact_phones[0]['tel']; ?></a>
						<ul>
							<?php while( have_rows('contact_phones_head', pll_current_language() ) ){ the_row(); ?>
								<li><a href="tel:<?php the_sub_field('tel'); ?>"><?php the_sub_field('tel'); ?></a></li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
				<button class="popup_callback"><?php the_field('head_request_text', pll_current_language()); ?></button>
			</div>

				<?php
					wp_nav_menu([
						'container' => 'nav',
						'theme_location' => 'header_menu',
						'menu_class' => 'nav-main__list',
						'item_class' => 'nav-main__item',
						'link_class' => 'nav-main__link'
					]);
				?>

			<?php if ($languages > 1) {  ?>
				<div class="languages">
					<?php foreach ($languages as $lang) {  ?>
						<a href="<?php echo $lang['url']; ?>" <?php if ($lang['current_lang']) echo 'class="current"'; ?>><?php echo $lang['name']; ?></a>
					<?php } ?>
				</div>
			<?php } ?>

		</div>
	</div>