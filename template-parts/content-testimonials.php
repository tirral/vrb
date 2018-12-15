<?php
/**
 * Template part for displaying servise custom post type content
 *
 * @package thetirral
 */

 $testimonials_position = get_post_meta($post->ID, 'testimonials_position', true);
 $content = get_the_content();
 $trimmed_content = wp_trim_words( $content, 40,  '' );
 ?>



<div class="col-md-6 item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="vk-testimonial">
        <div class="avatar">
            <div class="vk-img-frame">
                <a href="#" class="vk-img">
                    <?php the_post_thumbnail( 'testimonialmainpage-thumb' ); ?>
                </a>
            </div>
            <div class="profile">
                <span class="name"><?php the_title(); ?></span>
                <span class="position"><?php echo $testimonials_position; ?></span>
            </div>
        </div>
        <!--./avatar-->

        <div class="content">
            <i class="fa fa-quote-left"></i>
            <p class="vk-text"><?php echo $trimmed_content; ?></p>
        </div>
        <!-- ./content-->
    </div>
    <!--./testimonial-->
</div>
