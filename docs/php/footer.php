  <footer>
		<div class="wrapper">
			<div class="footer_block main">
				<h5><?php the_field('footer_title_1', pll_current_language()); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrowDownGrey.svg" alt="ico_arrow">
				</h5>

				<?php
					wp_nav_menu([
						'container' => false,
						'theme_location' => 'footer_menu_1'
					]);
				?>
			</div>

			<div class="other_blocks">
				<div class="footer_block">
					<h5><?php the_field('footer_title_2', pll_current_language()); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrowDownGrey.svg" alt="ico_arrow">
					</h5>
					<?php
						wp_nav_menu([
							'container' => false,
							'theme_location' => 'footer_menu_2'
						]);
					?>
				</div>

				<div class="footer_block">
					<h5><?php the_field('footer_title_4', pll_current_language()); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrowDownGrey.svg" alt="ico_arrow">
					</h5>
					<?php
						wp_nav_menu([
							'container' => false,
							'theme_location' => 'footer_menu_4'
						]);
					?>
				</div>

				<div class="footer_block">
					<h5><?php the_field('footer_title_3', pll_current_language()); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrowDownGrey.svg" alt="ico_arrow">
					</h5>
					<?php
						wp_nav_menu([
							'container' => false,
							'theme_location' => 'footer_menu_3'
						]);
					?>
				</div>

				<div class="footer_block">
					<h5><?php the_field('footer_title_5', pll_current_language()); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrowDownGrey.svg" alt="ico_arrow">
					</h5>
					<?php
						wp_nav_menu([
							'container' => false,
							'theme_location' => 'footer_menu_5'
						]);
					?>
				</div>
			</div>

			<div class="contacts">
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_map.svg" alt="">
						<a href="<?php the_field('contact_address_link', pll_current_language()); ?>"><?php the_field('contact_address', pll_current_language()); ?></a>
					</li>
					<?php if( have_rows('contact_phones', pll_current_language()) ){ ?>
						<li class="phones">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_phone.svg" alt="ico_phone">
							<ul>
								<?php while( have_rows('contact_phones', pll_current_language()) ){ the_row(); ?>
									<li><a href="tel:<?php the_sub_field('tel'); ?>"><?php the_sub_field('tel'); ?></a></li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>
					<li class="email">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_mail.svg" alt="">
						<a href="mailto:<?php the_field('contact_mail', pll_current_language()); ?>"><?php the_field('contact_mail', pll_current_language()); ?></a>
					</li>
				</ul>
				<div>
					<button class="filled open-connect"><?php the_field('footer_btn', pll_current_language()); ?></button>
					<ul class="messengers">
						<li><a href="<?php the_field('contact_fb', pll_current_language()); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_facebook.svg" alt="">
						</a></li>
						<li><a href="<?php the_field('contact_inst', pll_current_language()); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_instagram.svg" alt="">
						</a></li>
						<li><a href="<?php the_field('contact_tg', pll_current_language()); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_telegramBlue.svg" alt="">
						</a></li>
						<li><a href="<?php the_field('contact_yt', pll_current_language()); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_youtube.svg" alt="">
						</a></li>
					</ul>
				</div>
			</div>

			<p class="p-3 copyright"><?php the_field('footer_copy', pll_current_language()); ?></p>

			<p class="p-3 development"><?php the_field('footer_dev', pll_current_language()); ?></p>
		</div>

		<div class="footer_figure footer_lines">
			<svg xmlns="http://www.w3.org/2000/svg" width="694.742" height="342.782" viewBox="0 0 694.742 342.782" class="native">
				<g id="banner_lines" data-name="banner_lines" transform="translate(-944.667 154.454)" opacity="0.195">
					<path id="banner_line1" data-name="Контур 8" d="M944.668-116.021c64.9-.08,129.24,29.813,171.037,79.465,36.248,43.061,54.917,98.062,86.011,144.98s83.606,88.065,138.94,77.761c37.992-7.077,68.192-37.377,86.057-71.646s25.6-72.723,35.169-110.167,21.718-75.458,46.476-105.131c31.385-37.616,82.339-57.919,130.993-52.194" transform="translate(0 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
					<path id="banner_line2" data-name="Контур 9" d="M958.59-118.393c60.84-.073,121.151,27.947,160.331,74.493C1152.9-3.534,1170.4,48.024,1199.549,92s78.373,82.555,130.244,72.9c35.615-6.633,63.924-35.038,80.672-67.161s24-68.173,32.969-103.273S1463.791-76.27,1487-104.086c29.421-35.262,77.186-54.294,122.794-48.929" transform="translate(7.818 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
					<path id="banner_line3" data-name="Контур 10" d="M972.511-120.763c56.779-.069,113.062,26.081,149.629,69.518,31.71,37.67,48.042,85.787,75.244,126.832s73.14,77.043,121.548,68.028c33.237-6.19,59.656-32.7,75.286-62.678s22.4-63.621,30.767-96.377,19-66.012,40.659-91.972c27.456-32.908,72.033-50.668,114.6-45.661" transform="translate(15.635 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
					<path id="banner_line4" data-name="Контур 11" d="M986.432-123.135c52.717-.064,104.974,24.215,138.924,64.546,29.443,34.975,44.6,79.649,69.861,117.758s67.908,71.53,112.853,63.161c30.859-5.746,55.387-30.359,69.9-58.193s20.8-59.069,28.567-89.483,17.641-61.29,37.75-85.392c25.492-30.553,66.879-47.044,106.4-42.394" transform="translate(23.452 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
					<path id="banner_line5" data-name="Контур 12" d="M1000.353-125.507c48.656-.058,96.886,22.35,128.22,59.572,27.174,32.281,41.168,73.512,64.479,108.685s62.675,66.018,104.157,58.293c28.481-5.3,51.12-28.02,64.515-53.709s19.193-54.519,26.363-82.589,16.282-56.566,34.842-78.812c23.528-28.2,61.726-43.42,98.2-39.129" transform="translate(31.269 0)" fill="none" stroke="#8fa5a5" stroke-width="1"/>
				</g>
			</svg>
		</div>

		<div class="footer_figure footer_cloud_1">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="native">
				<defs>
					<linearGradient id="linear-gradient" x1="1.424" y1="1.775" x2="1.668" y2="0.5" gradientUnits="objectBoundingBox">
						<stop offset="0" stop-color="#b1dde0"></stop>
						<stop offset="1" stop-color="#49bfc6"></stop>
					</linearGradient>
				</defs>
				<path id="banner_cloud_2" data-name="banner_cloud_2" d="M1691.061,485.64c-10.03-26.42-7.273-55.429-1.973-82.981s13.05-55,12.642-82.976c-.667-45.691-24.52-90.72-63.472-119.171s-92.273-39.662-140.752-29.311c-30.658,6.547-59.479,21.187-90.93,22.376-32.292,1.222-62.976-11.877-94.763-17.235-75.476-12.721-156.374,22.148-198.6,80.967s-46.245,137.72-15.336,202.2,94.275,113.941,166.843,136.843,153.329,20.248,226.127-2.032c35.7-10.926,69.684-26.385,105.885-35.8s76.183-12.366,110.591,1.614l49.977-24.228C1726.831,535.156,1701.092,512.059,1691.061,485.64Z" opacity="0.1" fill="url(#linear-gradient)"></path>
			</svg>
		</div>

		<div class="footer_figure footer_cloud_2">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="native">
				<defs>
					<linearGradient id="linear-gradient" x1="1.424" y1="1.775" x2="1.668" y2="0.5" gradientUnits="objectBoundingBox">
						<stop offset="0" stop-color="#b1dde0"></stop>
						<stop offset="1" stop-color="#49bfc6"></stop>
					</linearGradient>
				</defs>
				<path id="banner_cloud_3" data-name="banner_cloud_3" d="M1742.3,451.608h-725a231.175,231.175,0,0,1,14.8-59.563c17.486-44.487,52.458-86.891,99.918-93.642,20.47-2.914,40.582,1.041,60.052,8.237a70.468,70.468,0,0,0,78.3-20.8,127.923,127.923,0,0,1,50.429-36.532c36.166-14.289,78.926-10.795,112.272,9.144a190.76,190.76,0,0,1,27.721,20.86c24.916,21.886,47.311,47.49,78.687,57.006,32.63,9.873,68.288-.045,101.723,6.616,49.011,9.769,85.028,54.329,99.262,102.072Q1741.45,448.285,1742.3,451.608Z" opacity="0.2" fill="#49bfc6"></path>
			</svg>
		</div>
	</footer>


  <?php wp_footer(); ?>

	<?php if(get_the_ID() === 679 ) { ?>

		<script>
			function initMap() {
				const citiesBtns = document.querySelectorAll('.choose_city button[data-city]');
				const citiesAddresses = document.querySelectorAll('.contacts .address[data-city]');
				const citiesPhones = document.querySelectorAll('.contacts .phones[data-city]');
				const citiesMaps = document.querySelectorAll('.map[data-city]');

				if (citiesBtns.length && citiesAddresses.length && citiesPhones.length && citiesMaps.length) {

					const mapCoords = [
						<?php
							$cities = get_field('dealer_list_contacts');
							foreach ($cities as $city) {
								if ($city['coords']['lat'] && $city['coords']['lng']) {
									echo "[" . $city['coords']['lat'] . ", ". $city['coords']['lng'] . "],";
								}
							}
						?>
					];

					const markerIcon = {
						url: '<?= get_field('marker_img'); ?>',
						scaledSize: new google.maps.Size(68, 68)
					};

					for (let i = 0; i < citiesBtns.length; i++) {

						// Init maps
						const coordinates = {
							lat: mapCoords[i][0],
							lng: mapCoords[i][1]
						};
						const map = new google.maps.Map(citiesMaps[i], {
							center: coordinates,
							zoom: 17,
							disableDefaultUI: false,
							scrollwheel: false,
						});
						const marker = new google.maps.Marker({
							position: coordinates,
							map: map,
							icon: markerIcon
						});

						// Change button | addreses | phones | maps
						citiesBtns[i].addEventListener('click', () => {
							for (let j = 0; j < citiesBtns.length; j++) {
								citiesBtns[j].classList.remove('active');
								citiesAddresses[j].classList.remove('active');
								citiesPhones[j].classList.remove('active');
								citiesMaps[j].classList.remove('active');
							}

							citiesBtns[i].classList.add('active');
							citiesAddresses[i].classList.add('active');
							citiesPhones[i].classList.add('active');
							citiesMaps[i].classList.add('active');
						}, true);

						// On mobile we are using select
						const citySelect = document.getElementById('citySelect');
						if (citySelect) {
							citySelect.addEventListener('change', () => {
								for (let j = 0; j < citiesBtns.length; j++) {
									citiesBtns[j].classList.remove('active');
									citiesAddresses[j].classList.remove('active');
									citiesPhones[j].classList.remove('active');
									citiesMaps[j].classList.remove('active');
								}
								citiesBtns[citySelect.selectedIndex].classList.add('active');
								citiesAddresses[citySelect.selectedIndex].classList.add('active');
								citiesPhones[citySelect.selectedIndex].classList.add('active');
								citiesMaps[citySelect.selectedIndex].classList.add('active');
							}, true);
						}

					}
				}
			}
		</script>

		<!-- Init GMaps on Contacts page -->
		<script src="https://maps.googleapis.com/maps/api/js?key=<?= get_field('key_gmaps', 'ru'); ?>&callback=initMap" defer></script>
	<?php } ?>

</body>
</html>