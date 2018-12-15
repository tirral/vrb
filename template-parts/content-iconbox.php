<?php
/**
 * Template part for displaying servise custom post type content
 *
 * @package thetirral
 */
?>


<div class="col-md-3 col-sm-6 vk-clear-padding" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php
  $iconbox_icon = get_post_meta($post->ID, 'iconbox_icon', true);
  $content = get_the_content();
  $trimmed_content = wp_trim_words( $content, 30,  '' );
  ?>



    <div class="vk-iconbox vk-iconbox-background text-center">
      <div class="icon">
      
        <i class="<?php echo $iconbox_icon; ?>"></i>
      </div>
      <div class="iconbox-content">
        <h4 class="vk-title text-uppercase"><?php the_title(); ?></h4>
        <p class="vk-text"><?php echo $trimmed_content; ?></p>
      </div>
  </div>
</div>
