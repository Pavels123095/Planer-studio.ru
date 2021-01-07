<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

<?php get_header(); ?>
		
	<section id="main-id" data-name="planer-main" class="planer-main-section-top planer-layout-section">
		<div class="planer-main-page-wrapper-section planer-wrapper-main-section-top planer-layout-container">
			<div class="planer-main-content planer-layout-row">
				<div class="planer-main-logo">
					<a href="<?php echo get_home_url(); ?>" class="main-logo">
						<?php
						$header_logo = get_theme_mod('main_logo');
						$img = wp_get_attachment_image_src($header_logo, 'full');
						if ($img) :?>
							<img src="<?php echo $img[0]; ?>" alt="">
						<?php endif; ?>
					</a>
				</div>
				<div class="planer-main-right-content">
					<div class="planer-main-right-contact">
						<a class="planer-main-phone" href="">
							<?php
								$val = get_option('planer_tel_option'); //option_key - имя опции
								echo trim($val);
							?>
						</a>
						<a class="planer-main-mail" href="">
							<?php
								$val = get_option('planer_mail_option'); //option_key - имя опции
								echo trim($val);
							?>
						</a>
					</div>
					<div class="planer-main-modal-btn-show">
						<button class="planer-main-btn">Оставить заявку</button>
					</div>
				</div>
				<div class="planer-main-title">
					<h1><?php bloginfo('name'); ?></h1>
					<h2><?php bloginfo('description'); ?></h2>
					<!-- <a href="#portfolio-id" class="planer-btn-main-title">Наше портфолио</a> -->
				</div>
			</div>
		</div>	
		<div class="planer-back">
			<div class="planer-sky">
				<img class="planer-sk7" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk7.png" alt="">
				<img class="planer-sk4" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk4.png" alt="">
				<img class="planer-sk8" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk8.png" alt="">
				<img class="planer-sk5" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk5.png" alt="">
				<img class="planer-sk6" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk6.png" alt="">
				<img class="planer-sk1" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk1.png" alt="">
				<img class="planer-sk2" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk2.png" alt="">
				<img class="planer-sk3" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk3.png" alt="">
			</div>
			<div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
			<div class="planer-boy"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage.svg" alt=""></div>
			<div class="planer-grass"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/grass.png" alt=""></div>
		</div>
	</section>

	<section id="Catalog-id" data-name="planer-catalog" class="planer-section-catalog planer-layout-section">
		<div class="planer-section-catalog-content planer-layout-container">
			<div class="planer-section-catalog-wrapper planer-layout-row">
				<div class="planer-section-catalog-back planer-cat-back"></div>
				<div class="planer-right-catalog-content">
					<div class="planer-section-catalog-nav">
						<ul сlass="planer-catalog-nav-menu">
                            <?php $option_catalog = get_option('home_settings_services'); ?>
							<li id="business-card-site" class="menu-cat-item"><?php echo $option_catalog['home_setting_site_visited_title'];?></li>
							<li id="catalog-site" class="menu-cat-item"><?php echo $option_catalog['home_setting_site_catalog_title']; ?></li>
							<li id="online-store" class="menu-cat-item"><?php echo $option_catalog['home_setting_site_store_title']; ?></li>
							<li id="corporate-website" class="menu-cat-item"><?php echo $option_catalog['home_setting_site_corporate_title']; ?></li>
							<li id="landing-page" class="menu-cat-item"><?php echo $option_catalog['home_setting_site_landing_title']; ?></li>
							<li id="website-promotion" class="menu-cat-item"><?php echo $option_catalog['home_setting_site_promotion_title']; ?></li>
						</ul>
					</div>
					<div class="planer-slider-wrapper">
						<div id="business-card-site-show" class="planer-section-catalog-show-description">
							<div class="planer-show-description-title">
								<h2><?php echo $option_catalog['home_setting_site_visited_title']; ?></h2>
							</div>
							<div class="planer-show-description-text">
								<?php echo $option_catalog['home_setting_site_visited_desc']; ?>
							</div>
							<div class="planer-show-description-cost">
								<span>от <strong><?php echo esc_html($option_catalog['home_setting_site_visited_cost']); ?></strong> руб.</span>
							</div>
							<div class="planer-show-description-btn-modal">
								<a href="https://www.planer-studio.ru/services/sajt-vizitka/" class="btn-planer-question">То, что мне нужно</a>
							</div>
						</div>
						<div id="catalog-site-show" class="planer-section-catalog-show-description">
							<div class="planer-show-description-title">
								<h2><?php echo $option_catalog['home_setting_site_catalog_title']; ?></h2>
							</div>
							<div class="planer-show-description-text">
								<?php echo $option_catalog['home_setting_site_catalog_desc']; ?>
							</div>
							<div class="planer-show-description-cost">
								<span>от <strong> <?php echo $option_catalog['home_setting_site_catalog_cost']; ?> </strong> руб.</span>
							</div>
							<div class="planer-show-description-btn-modal">
								<a href="https://www.planer-studio.ru/services/sajt-katalog/" class="btn-planer-question">То, что мне нужно</a>
							</div>
						</div>
						<div id="online-store-show" class="planer-section-catalog-show-description">
							<div class="planer-show-description-title">
								<h2><?php echo $option_catalog['home_setting_site_store_title']; ?></h2>
							</div>
							<div class="planer-show-description-text">
								<?php echo $option_catalog['home_setting_site_store_desc'];?>
							</div>
							<div class="planer-show-description-cost">
								<span>от <strong> <?php echo $option_catalog['home_setting_site_store_cost']; ?> </strong> руб.</span>
							</div>
							<div class="planer-show-description-btn-modal">
								<a href="https://www.planer-studio.ru/services/internet-magazin/" class="btn-planer-question">То, что мне нужно</a>
							</div>
						</div>
						<div id="corporate-website-show" class="planer-section-catalog-show-description">
							<div class="planer-show-description-title">
								<h2><?php echo $option_catalog['home_setting_site_corporate_title'];?></h2>
							</div>
							<div class="planer-show-description-text">
								<?php echo $option_catalog['home_setting_site_corporate_desc']; ?>
							</div>
							<div class="planer-show-description-cost">
								<span>от <strong> <?php echo $option_catalog['home_setting_site_corporate_cost']; ?> </strong> руб.</span>
							</div>
							<div class="planer-show-description-btn-modal">
								<a href="https://www.planer-studio.ru/services/korporativnyj-sajt/" class="btn-planer-question">То, что мне нужно</a>
							</div>
						</div>
						<div id="landing-page-show" class="planer-section-catalog-show-description">
							<div class="planer-show-description-title">
								<h2><?php echo $option_catalog['home_setting_site_landing_title']; ?></h2>
							</div>
							<div class="planer-show-description-text">
								<?php echo $option_catalog['home_setting_site_landing_desc']; ?>
							</div>
							<div class="planer-show-description-cost">
								<span>от <strong> <?php echo $option_catalog['home_setting_site_landing_cost']; ?> </strong> руб.</span>
							</div>
							<div class="planer-show-description-btn-modal">
								<a href="" class="btn-planer-question">То, что мне нужно</a>
							</div>
						</div>
						<div id="website-promotion-show" class="planer-section-catalog-show-description">
							<div class="planer-show-description-title">
								<h2><?php echo $option_catalog['home_setting_site_promotion_title']; ?></h2>
							</div>
							<div class="planer-show-description-text">
								<?php echo $option_catalog['home_setting_site_promotion_desc']; ?>
							</div>
							<div class="planer-show-description-cost">
								<span>от <strong> <?php echo $option_catalog['home_setting_site_promotion_cost']; ?> </strong> руб.</span>
							</div>
							<div class="planer-show-description-btn-modal">
								<a href="" class="btn-planer-question">То, что мне нужно</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="advantages-id" data-name="planer-advantage" class="planer-section-advantages planer-layout-section">
		<div class="planer-section-advantages-wrapper">
			<?php $option_advant = get_option('home_setting_advantages'); ?>
			<ul class="planer-section-advantages-nav">
				<li class="advantage-nav-item"><div class="arrow-bottom-nav-item"></div>
					<i class="fas fa-bullseye"></i> <?php echo $option_advant['home_setting_advant_first_rocket_text']; ?>
				</li>
				<li class="advantage-nav-item"><div class="arrow-bottom-nav-item"></div>
					<i class="fas fa-rocket"></i> <?php echo $option_advant['home_setting_advant_second_rocket_text']; ?>
				</li>
				<li class="advantage-nav-item"><div class="arrow-bottom-nav-item"></div>
					<i class="fas fa-cog"></i> <?php echo $option_advant['home_setting_advant_third_rocket_text']; ?>
				</li>
			</ul>
		</div>
	</section>

	<section id="portfolio-id" data-name="planer-portfolio" class="planer-section-portfolio planer-layout-section">
		<div class="planer-portfolio-title">
			<h2>Наше Портфолио</h2>
		</div>
		<button class="planer-btn-prev"><i class="fa fa-arrow-left"></i></button>
		<div class="planer-section-portfolio-wrapper">
			<?php 
				$option_portfolio = get_option('home_setting_portfolio');  
					$first_logo = $option_portfolio['home_setting_portfolio_first_logo']; 
					$first_logo = wp_get_attachment_image_src($first_logo, 'full');
					$first_back = $option_portfolio['home_setting_portfolio_first_back'];
					$first_back = wp_get_attachment_image_src($first_back, 'full');
					$second_logo = $option_portfolio['home_setting_portfolio_second_logo'];
					$second_logo = wp_get_attachment_image_src($second_logo, 'full');
					$second_back = $option_portfolio['home_setting_portfolio_second_back'];
					$second_back = wp_get_attachment_image_src($second_back, 'full');
					$third_logo = $option_portfolio['home_setting_portfolio_third_logo'];
					$third_logo = wp_get_attachment_image_src($third_logo, 'full');
					$third_back = $option_portfolio['home_setting_portfolio_third_back'];
					$third_back = wp_get_attachment_image_src($third_back , 'full');
					$four_logo = $option_portfolio['home_setting_portfolio_four_logo'];
					$four_logo = wp_get_attachment_image_src($four_logo, 'full');
					$four_back = $option_portfolio['home_setting_portfolio_four_back'];
					$four_back = wp_get_attachment_image_src($four_back , 'full');
			?>
			<div class="planer-link-portfolio planer-show" style="background-image: url('<?php echo $first_back[0]; ?>');">
				<!-- <img class="planer-partners-thumbnail" src="<?php //echo get_theme_mod('planer_porfolio_image_back_one'); ?>"> -->
				<img class="logo-partners" src="<?php echo $first_logo[0]; ?>">
				<div class="planer-btn-parthers">
					<a href="<?php echo $option_portfolio['home_setting_portfolio_first_link']; ?>">Подробнее</a>
				</div>
			</div>
			<div class="planer-link-portfolio" style="background-image: url('<?php echo $second_back[0]; ?>');">>
				<!-- <img class="planer-partners-thumbnail" src="<?php //echo get_theme_mod('planer_porfolio_image_back_two'); ?>"> -->
				<img class="logo-partners" src="<?php echo $second_logo[0]; ?>">
				<div class="planer-btn-parthers">
					<a href="<?php echo $option_portfolio['home_setting_portfolio_second_link']; ?>">Подробнее</a>
				</div>
			</div>
			<div  class="planer-link-portfolio" style="background-image: url('<?php echo $third_back[0]; ?>');">
				<!-- <img class="planer-partners-thumbnail" src="<?php //echo get_theme_mod('planer_porfolio_image_back_three'); ?>"> -->
				<img class="logo-partners" src="<?php echo $third_logo[0]; ?>">
				<div class="planer-btn-parthers">
					<a href="<?php echo $option_portfolio['home_setting_portfolio_third_link']; ?>">Подробнее</a>
				</div>
			</div>
			<div class="planer-link-portfolio" style="background-image: url('<?php echo $four_back[0]; ?>');">
			<!-- <img class="planer-partners-thumbnail" src="<?php //echo get_theme_mod('planer_porfolio_image_back_four'); ?>" alt="partners"> -->
			<img class="logo-partners" src="<?php echo $four_logo[0]; ?>');" alt="partners-logo">
				<div class="planer-btn-parthers">
					<a href="<?php echo $option_portfolio['home_setting_portfolio_four_link']; ?>"  >Подробнее</a>
				</div>
			</div>
		</div>
		<button class="planer-btn-next"><i class="fa fa-arrow-right"></i></button>
	</section>

	<section id="about-us-id" data-name="planer-about-us" class="planer-about-us-section planer-layout-section">
		<div class="planer-about-us-section-wrapper planer-layout-container">
			<div class="planer-about-us-content">
				<?php $option_about = get_option('home_setting_about_us'); ?>
				<div class="planer-about-us-title">
					<h1><?php echo $option_about['home_setting_ab_us_title']; ?></h1>
					<!-- <p>Разработка, продвижение и быстрый запуск сайтов. Ваш бизнес будет работать как часы.</p> -->
				</div>
				<div class="planer-about-us-description">
					<!--<ul>
						<li><i class="fas fa-star"></i> Мы бережно вынашиваем программные коды и создаём только актуальный дизайн.</li>
						<li><i class="fas fa-star"></i> Делаем удобный и интуитивно-понятный интерфейс, адаптируем под любое устройство.</li>
						<li><i class="fas fa-star"></i> Комплексное SEO-продвижение: ни один поисковый робот не пройдёт мимо.</li>
						<li><i class="fas fa-star"></i> Анализируем поведение вашего потребителя, чтобы сайт приносил еще больше прибыли.</li>
						<li><i class="fas fa-star"></i> Прозрачные отчёты и простая схема оплаты.</li>
					</ul>-->
					<?php echo $option_about['home_setting_ab_us_desc']; ?>
				</div>
				<div class="planer-main-modal-btn-show">
					<button class="planer-about-btn">Оставить заявку</button>
				</div>
			</div>
			<div class="planer-about-us-right">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/company.png" alt="">
			</div>
		</div>
	</section>

<?php get_footer(); ?>