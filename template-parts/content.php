<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VRB
 */


?>
                            <div class="blog-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="vk-img-frame">
                                    <?php vrb_post_thumbnail(); ?>
                                </div>

																	<?php
																	if ( is_singular() ) :
																		the_title( '<h4 class="vk-text-uppercase">', '</h4>' );
																	else :
																		the_title( '<h4 class="vk-text-uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
																	endif;


																		?>
                                </h4>
                                <div class="info">
                                    <ul class="vk-list">
                                        <li class="vk-text-capitalize vk-list-catagory">catagory:&nbsp; <?php the_category(', '); ?> </li>
                                        <li class="vk-text-capitalize">date:<span>&nbsp; <?php the_date('Y-m-d', '', ''); ?> </span></li>
                                        <li class="vk-text-capitalize">comments: &nbsp;<p> <?php comments_number( '0', '1', '% responses' ); ?></p></li>
                                    </ul>
                                </div>
                                <div class="content">
																	<?php
																	the_content( sprintf(
																		wp_kses(
																			/* translators: %s: Name of current post. Only visible to screen readers */
																			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vrb' ),
																			array(
																				'span' => array(
																					'class' => array(),
																				),
																			)
																		),
																		get_the_title()
																	) );


																	?>
                                </div>


                                <div class="tag">
																	<ul class="list-inline">
																			<li class="hidden-sm hidden-xs"><h4 class="vk-text-uppercase">tag</h4></li>

																	<?php
																	if(get_the_tag_list()) {
																	    echo get_the_tag_list('<li class="vk-tag">','</li><li class="vk-tag">','</li><li class="vk-tag">');
																	}
																	?>

																</ul>
														</div>



                            </div>
