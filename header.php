<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VRB
 */
 global $vrb_global;
?>


<!doctype html>
<html lang="en">
	<head>
		 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		 <meta charset="UTF-8" />
		 <title>Home default 1</title>
	 <?php wp_head(); ?>
	</head>
<body>

		<div class="animsition main-wrapper">
	<header class="vk-header vk-header-transparent vk-header-home">
		<nav class="vk-navbar  navbar">
				<div class="container">
						<div class="vk-navbar-header navbar-header">
								<button type="button" class="navbar-toggle vk-navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
										<i class="toggle-icon"></i>
								</button>
								<!--./vk-navbar-toggle-->
								<!--./shopping-cart-->
								<a class="vk-navbar-brand navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<svg version="1.1" id="wicon-logo-svg" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="290.037px" height="290.25px" viewBox="0 0 290.037 290.25"
											enable-background="new 0 0 290.037 290.25"
											xml:space="preserve">
											<polygon fill="#FFC000"
											points="170,60.25 50,60.25 0,60.25 0,110.25 0,290.25 50,290.25 50,110.25 170,110.25 "/>
											<polygon fill="#FFC000" points="60.038,120.25 60.038,240.25 60.038,290.25 110.038,290.25 290.037,290.25 290.037,240.25
											110.038,240.25 110.038,120.25 "/>
											<polygon fill="#FFC000"
											points="120.019,230 240.019,230 290.019,230 290.019,180 290.019,0 240.019,0 240.019,180 120.019,180 "/>
											<polygon fill="#FFC000"
											points="229.98,170 229.98,50 229.98,0 179.98,0 -0.019,0 -0.019,50 179.98,50 179.98,170 "/>
											</svg>
											<span class="logo-text text-uppercase"><?php bloginfo( 'name' ); ?></span>
									</a>
								<!--./vk-navbar-brand-->

						</div>
						<!--./vk-navbar-header-->
						<div class="collapse navbar-collapse vk-navbar-collapse" id="menu">
							<?php
													 wp_nav_menu( array(
														 'theme_location'  => '',
														 'menu'            => 'Menu 1',
														 'container'       => 'ul',
														 'container_class' => '',
														 'container_id'    => '',
														 'menu_class'      => 'vk-navbar-nav navbar-right',
														 'menu_id'         => '',
														 'echo'            => true,
														 'fallback_cb'     => 'wp_page_menu',
														 'before'          => '',
														 'after'           => '',
														 'link_before'     => '',
														 'link_after'      => '',
														 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
														 'depth'           => 0,
														 'walker'          => '',
													 ) );
							?>
												</div>

						<!--./vk-navbar-collapse-->
				</div>
				<!--./container-->
		</nav>
		<!--./vk-navbar-->
<?php global $vrb_global; ?>
		<div class="vk-header-top hidden-xs hidden-sm">
				<div class="container">
						<div class="content">
								<ul class="quick-address">
										<li><?php echo $vrb_global['header-contact-information-telephone'] ?></li>
										<li><?php echo $vrb_global['header-contact-information-email'] ?></li>
										<li><?php echo $vrb_global['header-contact-information-opening-hours'] ?></li>
								</ul>
						</div>
				</div>
		</div>
		<!--./vk-header-top-->
</header>
<!--./vk-header-->

		<section class="vk-content">
		<div class="vk-home vk-home-default">
