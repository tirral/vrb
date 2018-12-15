<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
              <section class="error-404 not-found">
              
                <div class="page-content">





                  <div class="vk-img-frame">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/404/404.png" alt="">
                  </div>


                    <div class="page_Container_404">
                      <?php  get_search_form();  ?>

                      <div class="vk-buttons" style="margin-top: 40px;">
                        <a href="javascript:history.back()" class="vk-btn vk-btn-l text-uppercase vk-btn-go-back"><i class="fas fa-long-arrow-alt-left"></i> go back</a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vk-btn vk-btn-l vk-btn-default text-uppercase"><i class="fa fa-home"></i> home page</a>
                      </div>
                    </div>
                </div><!-- .page-content -->
              </section><!-- .error-404 -->
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
