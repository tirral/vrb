<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package VRB
 */

get_header();
vrb_banner_template();
vrb_breadcrumb_template();
?>

<div class="vk-blog-wrapper">
	<!-- BEGIN BLOG WRPPER -->
<div class="container">

		<div class="row single-blog vk-space x-large">

		<div class="col-md-9">




		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );



			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
</div>





	<div class="col-md-3">
		<div class="sidebar-menu">
			<?php get_sidebar(); ?>
		</div>
	</div>



 </div> <!-- row -->
</div><!-- container-->
</div><!-- vk-blog-wrapper -->


<?php get_footer(); ?>
