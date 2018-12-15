<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package VRB
 */

global $vrb_global;
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vrb_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'vrb_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function vrb_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'vrb_pingback_header' );





// Adds main slider template
function vrb_slider_template() {
global $vrb_global;
?>
<div class="vk-banner vk-banner-x-large vk-banner-homepage">
     <div class="vk-background-overlay "></div>
     <div class="vk-background-image">
         <img src="<?php echo  esc_url($vrb_global['header-slide-img']['url']); ?>" alt="">
     </div>
     <div class="content">
         <div class="container wrapper">
             <div class="page-heading">
                 <span class="vk-text title-main"><?php echo $vrb_global['header-slide-main-title'] ?></span>
								 <span class="vk-text title-sub"><?php echo $vrb_global['header-slide-sub-title'] ?></span>
             </div>
         </div>
     </div>
 </div>
<?php
}


// Adds main banner template
function vrb_banner_template(){
global $vrb_global;
?>
<div class="vk-banner" style="background-image: url(<?php echo esc_url($vrb_global['header-jumbotron-img']['url']); ?>); position: relative;">
    <div class="vk-background-overlay vk-background-black-1 _80"></div>
    <div class="container wrapper">
        <div class="page-heading">
            <?php the_title(); ?>
        </div>
    </div>
</div>
<?php
}




// Adds breadcrumb template
function vrb_breadcrumb_template() {
?>
<div class="vk-breadcrumb">
    <nav class="container">
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </nav>
</div>
<?php
}
