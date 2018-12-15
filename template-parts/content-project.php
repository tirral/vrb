<?php
/**
 * Template part for displaying team custom post type content
 *
 * @package thetirral
 */

 $category_name = get_the_term_list( $post->ID, 'project_tupes', '', ', ' );
 $category_name_strip = strip_tags($category_name);
?>

<!-- КОНЕЦ ВЫВОДА ПРОЭКТОВ  -->




<div class="col-md-4 col-sm-6 col-xs-12 element-item <?php echo $category_name_strip; ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <div class="vk-project vk-project-grid-item">
			 <div class="vk-img-frame">
					 <a href="<?php echo the_permalink(); ?>" class="vk-img">
							 <?php the_post_thumbnail( 'progectmainpage-thumb' ); ?>
					 </a>
			 </div>
			 <div class="content-hidden">
         					 <h4 class="vk-title text-uppercase"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
			 </div>
	 </div>
</div>

	 <!-- КОНЕЦ ВЫВОДА ПРОЭКТОВ  -->
