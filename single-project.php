<?php
/**
 * The template for displaying all single posts 222
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package VRB
 */


// Include header
get_header();

// Start the loop
while ( have_posts() ) :
	the_post();

// Images
	$project_link_first = get_post_meta($post->ID, 'project_link_first', true);
	$project_link_second = get_post_meta($post->ID, 'project_link_second', true);
	$project_link_third = get_post_meta($post->ID, 'project_link_third', true);
	$project_link_fourth = get_post_meta($post->ID, 'project_link_fourth', true);
	$project_link_fifth = get_post_meta($post->ID, 'project_link_fifth', true);
	$project_link_sixth = get_post_meta($post->ID, 'project_link_sixth', true);

// Content
	$content = get_the_content();
	$trimmed_content = wp_trim_words( $content, 60,  '' );
	$project_client_name = get_post_meta($post->ID, 'project_client_name', true);
	$project_client_location = get_post_meta($post->ID, 'project_client_location', true);
	$project_year = get_post_meta($post->ID, 'project_year', true);
	$project_responsible_executor = get_post_meta($post->ID, 'project_responsible_executor', true);
	$category_name = get_the_term_list( $post->ID, 'project_tupes', '', ', ' );
	$category_name_strip = strip_tags($category_name);








	vrb_banner_template();
	vrb_breadcrumb_template();
?>





	<div id="primary" class="content-area">
		<main id="main" class="site-main">


			<div class="vk-page vk-page-project vk-single-project" >
			        <div class="container">

 <div class="vk-slider-project">
		<div class="slider-for">
			<?php the_post_thumbnail(); ?>
			<img src="<?php echo $project_link_first; ?>" alt="">
			<img src="<?php echo $project_link_second; ?>" alt="">
			<img src="<?php echo $project_link_third; ?>" alt="">
			<img src="<?php echo $project_link_fourth; ?>" alt="">
			<img src="<?php echo $project_link_fifth; ?>" alt="">
		</div>

			<div class="slider-nav row">
			   <div class="col-md-2">
			        <div class="vk-img-frame">
			            <?php the_post_thumbnail('clientsmainpage-thumb'); ?>
			        </div>
			    </div>
			    <div class="col-md-2">
			        <div class="vk-img-frame">
			            <img src="<?php echo $project_link_first; ?>" alt="">
			        </div>
			    </div>
			    <div class="col-md-2">
			        <div class="vk-img-frame">
			            <img src="<?php echo $project_link_second; ?>" alt="">
			        </div>
			    </div>
			    <div class="col-md-2">
			        <div class="vk-img-frame">
			            <img src="<?php echo $project_link_third; ?>" alt="">
			        </div>
			    </div>
			    <div class="col-md-2">
			        <div class="vk-img-frame">
			            <img src="<?php echo $project_link_fourth; ?>" alt="">
			        </div>
			    </div>
			    <div class="col-md-2">
			        <div class="vk-img-frame">
			           <img src="<?php echo $project_link_fifth; ?>" alt="">
			        </div>
			    </div>
			</div>
</div>


<div class="vk-content-single-project">
    <div class="row">
        <div class="col-md-6">
            <div class="info">
                <h4 class="vk-title text-uppercase">information</h4>
                <table>
                    <tr>
                        <th>Client:</th>
                        <td><?php echo $project_client_name; ?></td>
                    </tr>
                    <tr>
                        <th>Location:</th>
                        <td><?php echo $project_client_location; ?></td>
                    </tr>
                    <tr>
                        <th>Year completed:</th>
                        <td><?php echo $project_year; ?></td>
                    </tr>
                    <tr>
                        <th>Project leader:</th>
                        <td><?php echo $project_responsible_executor; ?></td>
                    </tr>
                    <tr>
                        <th>Category:</th>
                        <td style="text-transform: capitalize;"><?php echo $category_name_strip; ?></td>
                    </tr>
                </table>
            </div>
            <!-- ./info-->
        </div>
        <!-- ./left-->


        <div class="col-md-6">

            <div class="info description">
                <h4 class="vk-title text-uppercase">description</h4>
                <p>
									<?php echo $trimmed_content; ?>
								</p>
            </div>
            <!-- ./des-->
        </div>
        <!-- ./right-->
    </div>
    <!-- ./row-->
</div>
<!-- ./vk-content-single-project-->
</div>
<!-- ./container-->
</div>
<!-- ./vk-page-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	endwhile; // End of the loop.
	?>


<?php

get_footer();
