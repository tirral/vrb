<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gloggery
 */
 $content = get_the_content();
 $trimmed_content = wp_trim_words( $content, 40,  '' );
?>



<div class="col-md-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="vk-recent-blog">
		 <div class="vk-img-frame">
				 <a href="<?php the_permalink(); ?>" class="vk-img postmainpage_img">
						 <?php the_post_thumbnail( 'progectmainpage-thumb' ); ?>
				 </a>
		 </div>
		 <!--./vk-recent-blog-->

		 <div class="brief-content">
				 <h4 class="vk-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				 <p class="vk-text brief"><?php echo $trimmed_content; ?>...</p>
				 <div class="vk-buttons">
						 <a href="<?php the_permalink(); ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
								 <i class="fas fa-long-arrow-alt-right"></i></a>
				 </div>
		 </div>
		 <!--./brief-content-->
 </div>
 <!-- /.vk-recent-blog -->
</div>
<!-- /.col-md-6 -->
