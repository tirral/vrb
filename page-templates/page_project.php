<?php
/*
Template Name: Home project
*/

 get_header();
 vrb_banner_template();
 vrb_breadcrumb_template();
?>



         <div class="vk-section vk-our-project-section">
             <div class="container">
                 <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                 <span>
                     <span class="vk-text-color-yellow-1">our</span>
                     projects
                 </span>
                 </h2>

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
   					'posts_per_page' => 40,
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
  

       </div>
   </div>



             </div>
             <!--./container-->
         </div>


         <!--./vk-content-bot-->




<?php get_footer(); ?>
