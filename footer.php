<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VRB
 */
 global $vrb_global;
?>


</div>
<!--./home-->
</section>
<!--./content-->

<footer class="vk-footer">
<div class="container">
<div class="row">

									<div class="col-md-3 footer-item about">
										<h4 class="vk-heading text-uppercase st-word"><?php echo $vrb_global['company-block-settings-header'] ?></h4>
										<p class="vk-text"><?php echo $vrb_global['company-block-settings-text'] ?> </p>
										<ul class="vk-list vk-social-link">
											<li><a href="<?php echo $vrb_global['social-buttons-settings-first-link'] ?>" target="_blank"><i class="<?php echo $vrb_global['social-buttons-settings-first-icon'] ?>"></i></a></li>
											<li><a href="<?php echo $vrb_global['social-buttons-settings-second-link'] ?>" target="_blank"><i class="<?php echo $vrb_global['social-buttons-settings-second-icon'] ?>"></i></a></li>
											<li><a href="<?php echo $vrb_global['social-buttons-settings-third-link'] ?>" target="_blank"><i class="<?php echo $vrb_global['social-buttons-settings-third-icon'] ?>"></i></a></li>
											<li><a href="<?php echo $vrb_global['social-buttons-settings-fourth-link'] ?>" target="_blank"><i class="<?php echo $vrb_global['social-buttons-settings-fourth-icon'] ?>"></i></a></li>
										</ul>
									</div>

									<div class="col-md-3 footer-item quick-link">
										<h4 class="vk-heading text-uppercase st-word">Quick link</h4>
										<?php
											wp_nav_menu( array(
											'theme_location'  => '',
											'menu'            => 'fotter_menu',
											'container'       => 'ul',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'vk-list vk-quick-link text-capitalize',
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



									<div class="col-md-3 footer-item office">
										<h4 class="vk-heading text-uppercase st-word"><?php echo $vrb_global['footer-contact-information-header'] ?></h4>
											<ul class="vk-list vk-office">
											<li><i class="<?php echo $vrb_global['footer-contact-informatio-icon'] ?>"></i><?php echo $vrb_global['footer-contact-information-address'] ?></li>
											<li><i class="<?php echo $vrb_global['footer-email-informatio-icon'] ?>"></i><?php echo $vrb_global['footer-contact-information-email'] ?></li>
											<li><i class="<?php echo $vrb_global['footer-telephone-informatio-icon'] ?>"></i><?php echo $vrb_global['footer-contact-information-telephone'] ?></li>
										</ul>
									</div>



								<div class="col-md-3 footer-item latest-works">
									<h4 class="vk-heading text-uppercase st-word">Latest works</h4>
									<ul class="vk-list vk-latest-news">

										<!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА ПРОЭКТОВ -->
								    					<?php
								    					$args = array(
								    					'order' => 'ASC',
								    					'post_type' => 'project',
								    					'posts_per_page' => 6,
								    					);
								    					$loop = new WP_Query( $args);
								    					if ( $loop->have_posts() ) {
								    					while ( $loop->have_posts() ) : $loop->the_post();
																?>
															<li class="vk-img-frame" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
																		<a href="<?php echo the_permalink(); ?>" class="vk-img">
																				<img class="project_footer_img img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
																		</a>
																</li>
															<?php
								    					endwhile;
								    					} else {
								    						echo __( 'No team found' );
								    					}
								    					wp_reset_postdata();
								    					?>
								    					<!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА ПРОЭКТОВ  -->
									</ul>
							</div>
					</div>
			</div>
<!--./container-->


<div class="footer-bot">
	<div class="container">
			<p class="vk-text">
					Design by <a class="vk-text-color-yellow-1" href="http://vikitheme.com">VikiTemplate</a> With <span class="vk-text-color-yellow-1">Love</span>.
			</p>

			<p class="vk-text">
					All Rights Reserved.
			</p>
	</div>
</div>
<!--./footer-bot-->
</footer>
<!--./vk-footer-->	</div>
<!--./main-wrapper-->

<?php wp_footer(); ?>
</body>
</html>
