<?php
/**
 * Template part for displaying servise custom post type content
 *
 * @package thetirral
 */
 	$facts_number = get_post_meta($post->ID, 'facts_number', true);
?>


<div class="col-md-3 col-sm-6 vk-clear-padding" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="vk-counter vk-counter-non-icon">
    <ul class="content">
      <li class="number-count" data-to="<?php echo $facts_number; ?>"><?php echo $facts_number; ?> </li>
      <li class="title text-uppercase"><?php the_title(); ?></li>
    </ul>
  </div>
</div>
