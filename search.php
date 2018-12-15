<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
          <?php if ( have_posts() ) : ?>
          <header class="page-header">
          <h1 class="page-title">
          <?php
          /* translators: %s: search query. */
          printf( esc_html__( 'Search Results for: %s', 'vrb' ), '<span>' . get_search_query() . '</span>' );
          ?>
          </h1>
          </header><!-- .page-header -->
          <?php
          /* Start the Loop */
          while ( have_posts() ) :
          the_post();
          /**
          * Run the loop for the search to output the results.
          * If you want to overload this in a child theme then include a file
          * called content-search.php and that will be used instead.
          */
          get_template_part( 'template-parts/content', 'postmainpage' );
          endwhile;
          wp_pagenavi(); // функция постраничной навигации
          else :
          get_template_part( 'template-parts/content', 'none' );
          endif;
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
