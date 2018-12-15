<?php
/*
Template Name: Home page
*/

global $vrb_global;
get_header();
vrb_slider_template();
?>


<!--ICONBOX-->
<div class="vk-iconbox-section">
    <div class="vk-iconbox-fullwidth clearfix">

  <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА БОКСОВ С ИКОНКАМИ  -->
  <?php
  $args = array(
  'order' => 'ASC',
  'post_type' => 'iconbox',
  'posts_per_page' => 4,
  );
  $loop = new WP_Query( $args);
  if ( $loop->have_posts() ) {
  while ( $loop->have_posts() ) : $loop->the_post();
  get_template_part( 'template-parts/content', 'iconbox' );
  endwhile;
  } else {
  echo __( 'No iconbox found' );
  }
  wp_reset_postdata();
  ?>
  <!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА  БОКСОВ С ИКОНКАМИ   -->

  </div>
</div>




         <div class="vk-section vk-our-project-section">
             <div class="container">
                 <h2 class="vk-heading vk-heading-border vk-heading-border-left st-word"><?php  echo get_field('our_projects_header'); ?></h2>
                 <nav class="box-filter text-center clearfix">
                 <ul class="vk-filter vk-filter-button">
                   <div class="button-group filters-button-group">
                     <li class="button is-checked" data-filter="*">show all</li>

                     <!-- НАЧАЛО ВЫВОДА ЦЫКЛА СЛАГОВ К ТИПУ ПОСОТОВ ПРОЭКТОВ  -->
                     <?php $wcatTerms = get_terms('project_tupes', array('hide_empty' => 0, 'parent' =>0));
                       foreach($wcatTerms as $wcatTerm) :
                       ?>
                          <li class="button" data-filter=".<?php echo $wcatTerm->name; ?>"><?php echo $wcatTerm->name; ?></li>
                       <?php	endforeach;	?>
                     <!-- КОНЕЦ ВЫВОДА ЦЫКЛА СЛАГОВ К ТИПУ ПОСОТОВ ПРОЭКТОВ  -->

                     </div>
                 </ul>
                 </nav>

 <div class="row grid">

   <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА ПРОЭКТОВ -->
   					<?php
   					$args = array(
   					'order' => 'ASC',
   					'post_type' => 'project',
   					'posts_per_page' => 10,
   					);

   					$loop = new WP_Query( $args);
   					if ( $loop->have_posts() ) {
   					while ( $loop->have_posts() ) : $loop->the_post();
   							get_template_part( 'template-parts/content', 'project' );
   					endwhile;
   					} else {
   						echo __( 'No team found' );
   					}
   					wp_reset_postdata();
   					?>
   					<!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА ПРОЭКТОВ  -->

</div>
        <div class="vk-buttons" style="text-align: center;  margin-top: 32px;">
          <a href="http://vrb.com.ua/?page_id=53" class="vk-btn vk-btn-icon vk-btn-default">
            <span class="title">SEE ALL</span>
            <span class="icon">
          <i class="fas fa-long-arrow-alt-right"></i>
            </span>
          </a>
        </div>

       </div>
   </div>



         <div class="vk-counter-section clearfix">
             <div class="container">
                 <div class="row">
                     <div class="vk-counter-box">


                       <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА БОКСОВ С ФАКТАМИ -->
                       <?php
                       $args = array(
                       'order' => 'ASC',
                       'post_type' => 'facts',
                       'posts_per_page' => 4,
                       );
                       $loop = new WP_Query( $args);
                       if ( $loop->have_posts() ) {
                       while ( $loop->have_posts() ) : $loop->the_post();
                       get_template_part( 'template-parts/content', 'facts' );
                       endwhile;
                       } else {
                       echo __( 'No iconbox found' );
                       }
                       wp_reset_postdata();
                       ?>
                       <!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА  БОКСОВ С ФАКТАМИ   -->

                     </div>
                 </div>
                 <!-- /.row -->
             </div>
             <!-- /.container -->
         </div>
         <!--./vk-counter-section-->





  <div class="vk-what-we-do-section vk-section vk-section-style-2 vk-section-style-3">
     <div class="container">
          <h2 class="vk-heading vk-heading-border vk-heading-border-left st-word"><?php  echo get_field('what_we_do'); ?></h2>


                <nav class="box-filter text-center clearfix">
                <ul class="vk-filter vk-filter-button-fix servise_button_container">

                <!-- НАЧАЛО ВЫВОДА ЦЫКЛА СЛАГОВ К ТИПУ ПОСОТОВ ПРОЭКТОВ  -->
                <?php


                $wcatTerms_1 = get_terms('servise_tupes', array('hide_empty' => 0, 'parent' =>0));

                foreach($wcatTerms_1 as $wcatTerm_1) :
?>

<li class="data-filter" data-filter=".<?php echo $wcatTerm_1->name; ?>"><?php echo $wcatTerm_1->name; ?> </li>




                <?php	 endforeach;	?>
                <!-- КОНЕЦ ВЫВОДА ЦЫКЛА СЛАГОВ К ТИПУ ПОСОТОВ ПРОЭКТОВ  -->

                </ul>
                </nav>


         <div class="row vk-filter-fix">

           <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА БОКСОВ С СЕРВИСОВ -->
           <?php
           $args = array(
           'post_type' => 'services',
           'posts_per_page' => 4,
           );
           $loop = new WP_Query( $args);
           if ( $loop->have_posts() ) {
           while ( $loop->have_posts() ) : $loop->the_post();
           get_template_part( 'template-parts/content', 'services' );
           endwhile;
           } else {
           echo __( 'No iconbox found' );
           }
           wp_reset_postdata();
           ?>
           <!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА  БОКСОВ С СЕРВИСОВ   -->

         </div>
         <!--./row-->
     </div>
     <!--./container-->
 </div>
 <!--./vk-what-we-do-section-->











         <div class="vk-join-our-team-section vk-background-fixed vk-background-image-4 vk-section-style-4 vk-space x-large ">
     <div class="vk-background-overlay vk-background-black-1 _80"></div>

     <div class="container">
         <div class="content-section text-uppercase">


<h2 class="vk-heading vk-heading-border vk-heading-border-right st-word"><?php  echo get_field('call_to_action_header'); ?></h2>

 <div class="call-to-actiom-text"><?php echo get_field('call_to_action_text'); ?></div>


         </div>
         <!--./content-section-->
     </div>
     <!-- /.container -->
 </div>









 <!--./vk-join-our-team-section-->
         <div class="vk-section vk-recent-blog-section">
             <div class="container">

<h2 class="vk-heading vk-heading-border vk-heading-border-left st-word">recent blogs</h2>


                 <div class="row">
                     <div class="vk-recent-blog-list vk-slider-arrow-top  vk-slider-arrow-dot-top recent-blog-slider">



                       <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА ОБЫЧНЫХ ПОСТОВ  -->
                       <?php
                 					$args = array(
                          'order' => 'ASC',
                 					'post_type' => 'post',
                 					'posts_per_page' => 10,
                 					);
             					$loop = new WP_Query( $args);
             					if ( $loop->have_posts() ) {
             					while ( $loop->have_posts() ) : $loop->the_post();

             							get_template_part( 'template-parts/content', 'postmainpage' );

             					endwhile;
             					} else {
             						echo __( 'No skills found' );
             					}
             					wp_reset_postdata();
             					?>
            					<!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА  ОБЫЧНЫХ ПОСТОВ   -->





                     </div>
                 </div>
                 <!--.row-->
             </div>
             <!-- /.container -->

         </div>
         <!-- /.vk-recent-blog-section -->

         <div class="clearfix"></div>




         <div class="vk-section vk-content-bot">
             <div class="container">
                 <div class="row">


                     <div class="col-md-6 left-content">

<h2 class="vk-heading vk-heading-border vk-heading-border-left st-word"><?php  echo get_field('customer_say_header'); ?></h2>


                         <div class="row">
                             <div class="vk-testimonial-list vk-slider-arrow-top customer-slider">


                               <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА ОТЗЫВОВ  -->
                               <?php
                         					$args = array(
                                  'order' => 'ASC',
                         					'post_type' => 'testimonials',
                         					'posts_per_page' => 20,
                         					);

                     					$loop = new WP_Query( $args);
                     					if ( $loop->have_posts() ) {
                     					while ( $loop->have_posts() ) : $loop->the_post();

                     							get_template_part( 'template-parts/content', 'testimonials' );

                     					endwhile;
                     					} else {
                     						echo __( 'No skills found' );
                     					}
                     					wp_reset_postdata();
                     					?>
                    					<!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА  ОТЗЫВОВ   -->





</div>
<!--./vk-testimonial-list-->
</div>
<!--./row-->
</div>
<!--./col-md-6-->




                     <div class="col-md-6 right-content">


<h2 class="vk-heading vk-heading-border vk-heading-border-left st-word"><?php  echo get_field('our_clients_header'); ?></h2>

                         <ul class="vk-list vk-list-client-style-1">



                           <!-- НАЧАЛО ЦЫКЛА ДЛЯ ВЫВОДА КЛИЕНТОВ  -->
                           <?php
                              $args = array(
                              'order' => 'ASC',
                              'post_type' => 'clients',
                              'posts_per_page' => 20,
                              );

                          $loop = new WP_Query( $args);
                          if ( $loop->have_posts() ) {
                          while ( $loop->have_posts() ) : $loop->the_post();

                              get_template_part( 'template-parts/content', 'clients' );

                          endwhile;
                          } else {
                            echo __( 'No skills found' );
                          }
                          wp_reset_postdata();
                          ?>
                          <!-- КОНЕЦ ЦЫКЛА ДЛЯ ВЫВОДА  КЛИЕНТОВ   -->


 </ul>
 <!--./vk-list-client-style-1-->                    </div>
                     <!--./col-md-6-->
                 </div>
                 <!--./row-->
             </div>
             <!--./container-->
         </div>


         <!--./vk-content-bot-->









<?php get_footer(); ?>
