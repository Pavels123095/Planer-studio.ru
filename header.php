
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>       
	 	<meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <?php wp_head(); ?>
	</head>
	<body itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>
		<header id="planer-header" class="planer-header-section">
		    <div class="planer-header-wrapper planer-layout-container">
		        <div class="planer-header-content planer-layout-grid">
		            <!-- <div class="planer-header-timework planer-layout-column">
		                <i class="far fa-clock"></i>
		                <span>9:00 - 18:00</span>
		                <span class="planer-time-work">Без выходных</span>
		            </div> -->
		            <div class="planer-header-navigation planer-layout-column">
		            	<div class="planer-navbar-dropdown">
		            		<button class="nav-dropdown"><i class="fa fa-bars"></i></button>
						</div>
		                <nav class="planer-navbar planer-navbar-fixed-top">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => null,
                                    'menu_class' => 'planer-nav',
                                    'menu_id' => 'planer-header-nav'
								));
							?>
		                </nav>
		            </div>
		        </div>
		    </div>
		</header>