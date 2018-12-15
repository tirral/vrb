<?php
/*
Template Name: Post Grid
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
      <div class="container-fluid">
         <div class="row grid">
                <?php
              $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $params = array(
               'posts_per_page' => 4, // количество постов на странице
               'post_type'       => 'post', // тип постов
               'paged'           => $current_page // текущая страница
              );
              query_posts($params);

              $wp_query->is_archive = true;
              $wp_query->is_home = false;

              while(have_posts()): the_post();
              $content = get_the_content();
              $trimmed_content = wp_trim_words( $content, 40,  '' );


              get_template_part( 'template-parts/content', 'postmainpage' );

              endwhile;
              wp_pagenavi(); // функция постраничной навигации
             ?>
 </div>
</div>
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
