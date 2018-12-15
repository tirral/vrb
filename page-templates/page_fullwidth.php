<?php
/*
Template Name: Page Full Width
*/


get_header();
vrb_banner_template();
vrb_breadcrumb_template();
?>

<div class="vk-blog-wrapper">

	<!-- BEGIN BLOG WRPPER -->
<div class="container">
		<div class="row single-blog vk-space x-large">
		<div class="col-md-12">
      <?php
  		while ( have_posts() ) :
  			the_post();

  	     get_template_part( 'template-parts/content', 'fullwidhtpage' );

  			// If comments are open or we have at least one comment, load up the comment template.
  			if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;

  		endwhile; // End of the loop.
  		?>
</div>
 </div> <!-- row -->
</div><!-- container-->
</div><!-- vk-blog-wrapper -->
<?php get_footer(); ?>
