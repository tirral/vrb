<?php
/**
 * Template part for displaying servise custom post type content
 *
 * @package thetirral
 */


 $category_name = get_the_term_list( $post->ID, 'servise_tupes', '', ', ' );
 $category_name_strip = strip_tags($category_name);

 $content = get_the_content();
 $trimmed_content = wp_trim_words( $content, 60,  '' );

 	$facts_meaning = get_post_meta($post->ID, 'facts_meaning', true);
  $facts_name = get_post_meta($post->ID, 'facts_name', true);


$facts_progress_first = get_post_meta($post->ID, 'facts_progress_first', true);
$facts_progress_second = get_post_meta($post->ID, 'facts_progress_second', true);
$facts_progress_third = get_post_meta($post->ID, 'facts_progress_third', true);

?>



  <div class="item <?php echo $category_name_strip; ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <div class="col-md-6 left">

         <div class="vk-img-frame">
             <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""/>
         </div>
     </div>
     <!--./left-->

     <div class="col-md-6 right">
         <div class="content">
             <h4 class="text-uppercase vk-title"><?php the_title(); ?></h4>
             <p><?php echo $trimmed_content; ?> </p>
         </div>

         <div class="vk-buttons">
             <div class="vk-counter vk-counter-non-icon">
                 <ul class="content">
                     <li class="number-count" data-to="<?php echo $facts_meaning; ?>"><?php echo $facts_meaning; ?></li>
                     <li class="title text-uppercase"><?php echo $facts_name; ?></li>
                 </ul>
             </div>

         </div>
         <!--./vk-buttons-->

         <div class="vk-work-step-mini">
             <h4 class="vk-title text-uppercase">work process</h4>
             <ul class="vk-list vk-list-inline vk-list-step-mini">
                 <li aria-level="1"><?php echo $facts_progress_first; ?></li>
                 <li aria-level="2"><?php echo $facts_progress_second; ?></li>
                 <li aria-level="3"><?php echo $facts_progress_third; ?></li>
             </ul>
         </div>
         <!--./vk-work-step-mini-->
     </div>
     <!--./right-->
 </div>
