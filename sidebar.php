<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VRB
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

?>



<aside id="secondary" class="widget-area">
	<?php 	if(function_exists('dynamic_sidebar')) {
		    ob_start();
		    dynamic_sidebar('sidebar-1');
		    $sidebar = ob_get_contents();
		    ob_end_clean();
		    $sidebar_corrected_ul = str_replace("<ul>", '<ul class="vk-list vk-menu-right">', $sidebar);
		    echo $sidebar_corrected_ul;
		    } ?>
</aside><!-- #secondary -->
