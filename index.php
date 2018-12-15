<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VRB
 */
?>


 <!doctype html>
 <html lang="en">
   <head>
     	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
     	<meta charset="UTF-8" />
     	<title>Home default</title>
  	<?php wp_head(); ?>
   </head>
 <body>
     <div class="animsition main-wrapper">
   <header class="vk-header vk-header-transparent vk-header-home">
     <nav class="vk-navbar  navbar">
         <div class="container">
             <div class="vk-navbar-header navbar-header">
                 <button type="button" class="navbar-toggle vk-navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                     <i class="toggle-icon"></i>
                 </button>
                 <!--./vk-navbar-toggle-->
                 <div class="shopping-cart hidden-md hidden-lg">
                     <i class="fa fa-shopping-basket" data-toggle="collapse" data-target="#shopping-cart-list"></i>
                     <span class="number-item">0</span>
                 </div>
                 <!--./shopping-cart-->
                 <a class="vk-navbar-brand navbar-brand" href="index.html">
                     <svg version="1.1" id="wicon-logo-svg" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              width="290.037px" height="290.25px" viewBox="0 0 290.037 290.25"
                              enable-background="new 0 0 290.037 290.25"
                              xml:space="preserve">
                         <polygon fill="#FFC000"
                                  points="170,60.25 50,60.25 0,60.25 0,110.25 0,290.25 50,290.25 50,110.25 170,110.25 "/>
                             <polygon fill="#FFC000" points="60.038,120.25 60.038,240.25 60.038,290.25 110.038,290.25 290.037,290.25 290.037,240.25
 110.038,240.25 110.038,120.25 "/>
                             <polygon fill="#FFC000"
                                      points="120.019,230 240.019,230 290.019,230 290.019,180 290.019,0 240.019,0 240.019,180 120.019,180 "/>
                             <polygon fill="#FFC000"
                                      points="229.98,170 229.98,50 229.98,0 179.98,0 -0.019,0 -0.019,50 179.98,50 179.98,170 "/>
                     </svg>
                     <span class="logo-text text-uppercase">WICON</span>
                 </a>
                 <!--./vk-navbar-brand-->


                 <div class="shopping-cart-list collapse" id="shopping-cart-list">
                     <div class="vk-table">
                         <ul class="vk-table-row">
                             <li class="vk-table-data"></li>
                             <li class="vk-table-data">product</li>
                             <li class="vk-table-data">total</li>
                         </ul>
                         <ul class="vk-table-row">
                             <li class="vk-table-data"><i class="fa fa-times"></i></li>
                             <li class="vk-table-data">
                                 <div class="vk-img-frame">
                                     <a href="#" class="vk-img">

<img src="<?php echo get_template_directory_uri(); ?>/images/shop-cart/shop-cart-1.jpg"/>


                                     </a>
                                 </div>
                                 <div class="title">
                                     <a href="3" class="product-name">Mini drill * 1</a>
                                     <span class="price">$59.00</span>
                                 </div>
                             </li>
                             <li class="vk-table-data">
                                 <span class="price total">$59.00</span>
                             </li>
                         </ul>
                         <ul class="vk-table-row">
                             <li class="vk-table-data"><i class="fa fa-times"></i></li>
                             <li class="vk-table-data">
                                 <div class="vk-img-frame">
                                     <a href="#" class="vk-img">
																				 <img src="<?php echo get_template_directory_uri(); ?>/images/shop-cart/shop-cart-2.jpg"/>
                                     </a>
                                 </div>
                                 <div class="title">
                                     <a href="3" class="product-name">Hammer drill * 1</a>
                                     <span class="price">$59.00</span>
                                 </div>
                             </li>
                             <li class="vk-table-data">
                                 <span class="price total">$59.00</span>
                             </li>
                         </ul>
                         <ul class="vk-table-row total-all">
                             <li class="vk-table-data"></li>
                             <li class="vk-table-data">
                                 <span>Total</span>
                             </li>
                             <li class="vk-table-data">
                                 <span class="price total">$118.00</span>
                             </li>
                         </ul>
                         <div class="vk-table-row">
                             <a href="#" class="vk-btn vk-btn-transparent vk-btn-l vk-btn-default">View cart</a>
                             <a href="#" class="vk-btn vk-btn-transparent vk-btn-l vk-btn-default">checkout</a>
                         </div>
                     </div>
                 </div>
                 <!--./shopping-cart-list-->

             </div>
             <!--./vk-navbar-header-->

             <div class="collapse navbar-collapse vk-navbar-collapse" id="menu">
                 <ul class="vk-navbar-nav navbar-right">
                                         <li>
                         <a href="#">home</a>
                         <ul class="vk-navbar-nav child">
                             <li><a href="index.html">home default</a></li>
                             <li><a href="1.2-home-dark.html">home dark</a></li>
                             <li><a href="1.3-home-shop.html">home shop</a></li>
                             <li><a href="1.4-home-left-menu.html">Home left menu</a></li>
                             <li><a href="1.5-home-one-page.html">Home one page</a></li>
                             <li><a href="1.6-home-slider.html">Home slider</a></li>
                         </ul>
                     </li>
                     <li>
                         <a href="#">page</a>
                         <ul class="vk-navbar-nav child">
                             <li><a href="2.1-about-page.html">About</a></li>
                             <li><a href="2.2-testimonial-page.html">Testimonial</a></li>
                             <li><a href="2.3-404-page.html">404</a></li>
                             <li><a href="2.4-faq-page.html">FAQs</a></li>
                             <li><a href="2.5-career-page.html">Career</a></li>
                             <li><a href="2.6-contact-page.html">Contact</a></li>
                         </ul>
                     </li>

                     <li>
                         <a href="#">service</a>
                         <ul class="vk-navbar-nav child">
                             <li><a href="3.1-consultant-service.html">Consultant</a></li>
                             <li><a href="3.2-design-service.html">design</a></li>
                             <li><a href="3.3-construction-service.html">construction</a></li>
                             <li><a href="3.4-furniture-service.html">furniture</a></li>
                         </ul>
                     </li>

                     <li>
                         <a href="#">project</a>
                         <ul class="vk-navbar-nav child">
                            <li><a href="4.1-project-list.html">project list</a></li>
                             <li><a href="4.2-project-grid.html">project grid</a></li>
                             <li><a href="4.3-single-project.html">single project</a></li>
                         </ul>
                     </li>

                     <li>
                         <a href="#">blog</a>
                         <ul class="vk-navbar-nav child">
                            <li><a href="5.1-blog-list.html">blog list</a></li>
                             <li><a href="5.2-blog-grid.html">blog grid</a></li>
                             <li><a href="5.3-single-blog.html">single blog</a></li>
                         </ul>
                     </li>

                     <li>
                         <a href="#">header</a>
                         <ul class="vk-navbar-nav child">
                            <li><a href="6.2-header-style-1.html">header default style 1</a></li>
                             <li><a href="6.3-header-style-2.html">header default style 2</a></li>
                             <li><a href="6.4-header-style-3.html">header transparent style 1</a></li>
                             <li><a href="6.5-header-style-4.html">header transparent style 2</a></li>
                         </ul>
                     </li>
                     <li>
                         <a href="#">shortcodes</a>
                         <ul class="vk-navbar-nav child">
                             <li><a href="7.1-button-element.html"><i class="fa fa-plus-square-o"></i>Button</a></li>
                             <li><a href="7.2-iconbox-element.html"><i class="fa fa-th"></i>icon box</a></li>
                             <li><a href="7.3-alertbox-element.html"><i class="fa fa-info-circle"></i>alert box</a></li>
                             <li><a href="7.4-tab-element.html"><i class="fa fa-th-list"></i>tab</a></li>
                             <li><a href="7.5-faq-element.html"><i class="fa fa-comments"></i>FAQ</a></li>
                             <li><a href="7.6-counter-element.html"><i class="fa fa-sort-numeric-asc"></i>counter</a></li>
                             <li><a href="7.7-pricing-table-element.html"><i class="fa fa-dollar"></i>pricing table</a></li>
                             <li><a href="7.8-image-slider-element.html"><i class="fa fa-picture-o"></i>image slider</a></li>
                             <li><a href="7.9-heading-element.html"><i class="fa fa-header"></i>heading</a></li>
                             <li><a href="7.10-color-element.html"><i class="fa fa-eyedropper"></i>color list</a></li>
                             <li><a href="7.11-divider-element.html"><i class="fa fa-chain-broken"></i>divider</a></li>
                             <li><a href="7.12-icon-element.html"><i class="fa fa-th-large"></i>icon</a></li>
                             <li><a href="7.13-typography-element.html"><i class="fa fa-th-large"></i>typography</a></li>
                         </ul>
                     </li>

                     <li>
                         <a href="#">shop</a>
                         <ul class="vk-navbar-nav child">
                             <li><a href="8.1-shop.html">shop</a></li>
                             <li><a href="8.2-single-product.html">single shop</a></li>
                             <li><a href="8.3-shop-cart.html">shop cart</a></li>
                             <li><a href="8.4-shop-checkout.html">shop checkout</a></li>
                         </ul>
                     </li>

                     <li class="item-search">
                         <span class="btn-search hidden-xs hidden-sm" data-toggle="collapse" data-target="#box-search-header"><i class="fa fa-search"></i></span>
                     </li>
                 </ul>
                 <!--./vk-navbar-nav-->

                 <div class="box-search-header collapse" id="box-search-header">
                     <div class="vk-input-group">
                         <input type="text" name="key" placeholder="Search" class="form-control">
                         <button class="vk-btn btn-search">
                             <i class="fa fa-search"></i>
                         </button>
                     </div>
                 </div>
                 <!--./box-search-header-->
             </div>
             <!--./vk-navbar-collapse-->
         </div>
         <!--./container-->
     </nav>
     <!--./vk-navbar-->

     <div class="vk-header-top hidden-xs hidden-sm">
         <div class="container">
             <div class="content">
                 <div class="shopping-cart">
                     <i class="fa fa-shopping-basket" data-toggle="collapse" data-target="#shopping-cart-list"></i>
                     <span class="number-item">0</span>
                 </div>
                 <ul class="quick-address">
                     <li>(122) 675 485 035</li>
                     <li>email@domain.com</li>
                     <li>Mon - Sun: 8h00 - 18h00</li>
                 </ul>
             </div>
         </div>
     </div>
     <!--./vk-header-top-->
 </header>
 <!--./vk-header-->


     <section class="vk-content">
     <div class="vk-home vk-home-default">


<div class="vk-banner vk-banner-x-large vk-banner-homepage">
     <div class="vk-background-overlay "></div>
     <div class="vk-background-image">
         <img src="<?php echo get_template_directory_uri(); ?>/images/background/background-5.jpg" alt="">
     </div>
     <div class="content">
         <div class="container wrapper">
             <div class="page-heading">
                 <span class="vk-text title-main">LET US HELP YOU</span><span class="vk-text title-sub">MAKE YOUR DREAMS COME TRUE</span>
             </div>
         </div>
     </div>
 </div>


<!--ICONBOX-->
<div class="vk-iconbox-section">
    <div class="vk-iconbox-fullwidth clearfix">

      <div class="col-md-3 col-sm-6 vk-clear-padding">
          <div class="vk-iconbox vk-iconbox-background text-center">
            <div class="icon">
              <i class="flaticon flaticon-home-1"></i>
            </div>
            <div class="iconbox-content">
              <h4 class="vk-title text-uppercase">PERFECT QUALITY</h4>
              <p class="vk-text">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears.</p>
            </div>
        </div>
      </div>

    <div class="col-md-3 col-sm-6 vk-clear-padding">
      <div class="vk-iconbox vk-iconbox-background vk-iconbox-striped text-center">
      <div class="icon">
        <i class="flaticon flaticon-fan"></i>
      </div>
      <div class="iconbox-content">
        <h4 class="vk-title text-uppercase">SUPPORT 24/24</h4>
        <p class="vk-text">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears.</p>
      </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 vk-clear-padding">
      <div class="vk-iconbox vk-iconbox-background text-center">
        <div class="icon">
          <i class="flaticon flaticon-hammer"></i>
        </div>
      <div class="iconbox-content">
        <h4 class="vk-title text-uppercase">MODERN STYLE</h4>
        <p class="vk-text">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears.</p>
      </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 vk-clear-padding">
      <div class="vk-iconbox vk-iconbox-background vk-iconbox-striped text-center">
          <div class="icon">
        <i class="flaticon flaticon-fence"></i>
        </div>
        <div class="iconbox-content">
          <h4 class="vk-title text-uppercase">WARRANTY FOREVER</h4>
          <p class="vk-text">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears.</p>
        </div>
      </div>
    </div>

  </div>
</div>


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
    <li class="button" data-filter=".consultant">consultant</li>
    <li class="button" data-filter=".design">design</li>
    <li class="button" data-filter=".building">building</li>
    <li class="button" data-filter=".furniture">furniture</li>
    </div>
</ul>
</nav>



 <div class="row grid">

   <div class="col-md-4 col-sm-6 col-xs-12 element-item design">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-1.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY LIBRARY BOOKS</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item building">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-2.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">5-STAR HOTEL</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item furniture">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-3.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">OFFICE FURNITURE</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item consultant">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-4.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">ART MUSEUM</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item consultant">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-5.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item design">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-6.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">INTERIOR DESIGN</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item design">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-7.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">OFFICE FURNITURE</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item building">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-8.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12 element-item furniture">
      <div class="vk-project vk-project-grid-item">
          <div class="vk-img-frame">
              <a href="4.3-single-project.html" class="vk-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/project/project-grid/img-9.jpg" alt="">
              </a>
          </div>
          <div class="content-hidden">
              <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY LIBRARY BOOKS</a></h4>
              <ul class="vk-list vk-list-inline vk-list-action-post">
                  <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                  <li><a href="#"><span class="ti-share"></span></a></li>
                  <li><a href="#"><span class="ti-heart"></span></a></li>
              </ul>
          </div>
      </div>
  </div>

</div>

<div class="vk-buttons" style="text-align: center;  margin-top: 32px;">
                 <a href="2.5-career-page.html" class="vk-btn vk-btn-icon vk-btn-default">
                     <span class="title">SEE ALL</span>
                     <span class="icon">
                         <i class="fa fa-long-arrow-right"></i>
                     </span>
                 </a>
             </div>
       </div>
   </div>


         <!-- /.vk-our-project-section -->

         <div class="vk-counter-section clearfix">
             <div class="container">
                 <div class="row">
                     <div class="vk-counter-box">
                         <div class="col-md-3 col-sm-6 vk-clear-padding">
         <div class="vk-counter vk-counter-non-icon">

         <ul class="content">
             <li class="number-count" data-to="500">500</li>
             <li class="title text-uppercase">projects</li>
         </ul>
     </div>
     <!--./vk-counter-->

 </div>
 <div class="col-md-3 col-sm-6 vk-clear-padding">
         <div class="vk-counter vk-counter-non-icon">

         <ul class="content">
             <li class="number-count" data-to="327">327</li>
             <li class="title text-uppercase">happy clients</li>
         </ul>
     </div>
     <!--./vk-counter-->

 </div>
 <div class="col-md-3 col-sm-6 vk-clear-padding">
         <div class="vk-counter vk-counter-non-icon">

         <ul class="content">
             <li class="number-count" data-to="500">500</li>
             <li class="title text-uppercase">projects</li>
         </ul>
     </div>
     <!--./vk-counter-->

 </div>
 <div class="col-md-3 col-sm-6 vk-clear-padding">
         <div class="vk-counter vk-counter-non-icon">

         <ul class="content">
             <li class="number-count" data-to="327">327</li>
             <li class="title text-uppercase">happy clients</li>
         </ul>
     </div>
     <!--./vk-counter-->

 </div>
                     </div>
                 </div>
                 <!-- /.row -->
             </div>
             <!-- /.container -->
         </div>
         <!--./vk-counter-section-->

         <div class="vk-what-we-do-section vk-section vk-section-style-2 vk-section-style-3">
     <div class="container">
         <h2 class="vk-heading vk-heading-border vk-heading-border-left">
             <span>
                 <span class="vk-text-color-yellow-1">what</span> we do
             </span>
         </h2>
         <nav class="box-filter text-center clearfix">

             <ul class="vk-filter vk-filter-button-fix hidden-xs hidden-sm">

                 <li class="data-filter" data-filter=".first">consultant</li>

                 <li class="data-filter" data-filter=".data-design">design</li>

                 <li class="data-filter" data-filter=".data-building">building</li>

                 <li class="data-filter" data-filter=".data-furniture">furniture</li>

             </ul>
             <!--./vk-filter-->

             <select class="vk-filter vk-filter-button-fix form-control hidden-md hidden-lg" id="dropdown-filter">

                 <option class="data-filter" value=".first">consultant</option>

                 <option class="data-filter" value=".data-design">design</option>

                 <option class="data-filter" value=".data-building">building</option>

                 <option class="data-filter" value=".data-furniture">furniture</option>

             </select>
             <!--./vk-filter-->
         </nav>

         <div class="row vk-filter-fix">
                         <div class="item first">
                 <div class="col-md-6 left">

                     <div class="vk-img-frame">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/services/image-7.jpg" alt=""/>
                     </div>
                 </div>
                 <!--./left-->

                 <div class="col-md-6 right">
                     <div class="content">
                         <h4 class="text-uppercase vk-title">CONSULTANT</h4>
                         <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                     </div>
                     <div class="vk-buttons">
                         <div class="vk-counter vk-counter-non-icon">
                             <ul class="content">
                                 <li class="number-count" data-to="500">500</li>
                                 <li class="title text-uppercase">projects</li>
                             </ul>
                         </div>
                         <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                             <i class="fa fa-arrow-right"></i>
                         </a>
                     </div>
                     <!--./vk-buttons-->

                     <div class="vk-work-step-mini">
                         <h4 class="vk-title text-uppercase">work process</h4>
                         <ul class="vk-list vk-list-inline vk-list-step-mini">
                             <li aria-level="1">first step</li>
                             <li aria-level="2">second step</li>
                             <li aria-level="3">third step</li>
                         </ul>
                     </div>
                     <!--./vk-work-step-mini-->
                 </div>
                 <!--./right-->
             </div>

             <div class="item data-design">
                 <div class="col-md-6 left">

                     <div class="vk-img-frame">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/services/image-6.jpg" alt=""/>
                     </div>
                 </div>
                 <!--./left-->

                 <div class="col-md-6 right">
                     <div class="content">
                         <h4 class="text-uppercase vk-title">Design</h4>
                         <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                     </div>
                     <div class="vk-buttons">
                         <div class="vk-counter vk-counter-non-icon">
                             <ul class="content">
                                 <li class="number-count" data-to="500">500</li>
                                 <li class="title text-uppercase">projects</li>
                             </ul>
                         </div>
                         <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                             <i class="fa fa-arrow-right"></i>
                         </a>
                     </div>
                     <!--./vk-buttons-->

                     <div class="vk-work-step-mini">
                         <h4 class="vk-title text-uppercase">work process</h4>
                         <ul class="vk-list vk-list-inline vk-list-step-mini">
                             <li aria-level="1">first step</li>
                             <li aria-level="2">second step</li>
                             <li aria-level="3">third step</li>
                         </ul>
                     </div>
                     <!--./vk-work-step-mini-->
                 </div>
                 <!--./right-->
             </div>

             <div class="item data-building">
                 <div class="col-md-6 left">

                     <div class="vk-img-frame">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/services/image-5.jpg" alt=""/>
                     </div>
                 </div>
                 <!--./left-->

                 <div class="col-md-6 right">
                     <div class="content">
                         <h4 class="text-uppercase vk-title">building</h4>
                         <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                     </div>
                     <div class="vk-buttons">
                         <div class="vk-counter vk-counter-non-icon">
                             <ul class="content">
                                 <li class="number-count" data-to="500">500</li>
                                 <li class="title text-uppercase">projects</li>
                             </ul>
                         </div>
                         <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                             <i class="fa fa-arrow-right"></i>
                         </a>
                     </div>
                     <!--./vk-buttons-->

                     <div class="vk-work-step-mini">
                         <h4 class="vk-title text-uppercase">work process</h4>
                         <ul class="vk-list vk-list-inline vk-list-step-mini">
                             <li aria-level="1">first step</li>
                             <li aria-level="2">second step</li>
                             <li aria-level="3">third step</li>
                         </ul>
                     </div>
                     <!--./vk-work-step-mini-->
                 </div>
                 <!--./right-->
             </div>

             <div class="item data-furniture">
                 <div class="col-md-6 left">

                     <div class="vk-img-frame">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/services/image-4.jpg" alt=""/>
                     </div>
                 </div>
                 <!--./left-->

                 <div class="col-md-6 right">
                     <div class="content">
                         <h4 class="text-uppercase vk-title">furniture</h4>
                         <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                     </div>
                     <div class="vk-buttons">
                         <div class="vk-counter vk-counter-non-icon">
                             <ul class="content">
                                 <li class="number-count" data-to="500">500</li>
                                 <li class="title text-uppercase">projects</li>
                             </ul>
                         </div>
                         <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                             <i class="fa fa-arrow-right"></i>
                         </a>
                     </div>
                     <!--./vk-buttons-->

                     <div class="vk-work-step-mini">
                         <h4 class="vk-title text-uppercase">work process</h4>
                         <ul class="vk-list vk-list-inline vk-list-step-mini">
                             <li aria-level="1">first step</li>
                             <li aria-level="2">second step</li>
                             <li aria-level="3">third step</li>
                         </ul>
                     </div>
                     <!--./vk-work-step-mini-->
                 </div>
                 <!--./right-->
             </div>

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
             <h2 class="vk-heading vk-heading-border vk-heading-border-right">
                 <span>
                     <span class="vk-text-color-yellow-1">join</span> our team
                 </span>

             </h2>
             <p>Lorem Khaled Ipsum is a major key to success.</p>
 <p>Put it this way, it took me twenty five</p>
 <p>years to get these plants</p>

             <div class="vk-buttons">
                 <a href="2.5-career-page.html" class="vk-btn vk-btn-icon vk-btn-default">
                     <span class="title">career</span>
                     <span class="icon">
                         <i class="fa fa-long-arrow-right"></i>
                     </span>
                 </a>
             </div>
             <!--./vk-buttons-->
         </div>
         <!--./content-section-->
     </div>
     <!-- /.container -->
 </div>
 <!--./vk-join-our-team-section-->
         <div class="vk-section vk-recent-blog-section">
             <div class="container">
                 <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                 <span>
                     <span class="vk-text-color-yellow-1">recent</span>
                     blogs
                 </span>
                 </h2>

                 <div class="row">
                     <div class="vk-recent-blog-list vk-slider-arrow-top  vk-slider-arrow-dot-top recent-blog-slider">
                         <div class="col-md-6">
     <div class="vk-recent-blog">
         <div class="vk-img-frame">
             <a href="5.3-single-blog.html" class="vk-img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/home-default/recent-blog/img-1.jpg" alt="">
             </a>
         </div>
         <!--./vk-recent-blog-->

         <div class="brief-content">
             <h4 class="vk-title"><a href="5.3-single-blog.html">Lorem Khaled Ipsum is a majorkey to success</a></h4>
             <p class="vk-text brief">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started...</p>
             <div class="vk-buttons">
                 <a href="5.3-single-blog.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                     <i class="fa fa-long-arrow-right"></i></a>
             </div>
         </div>
         <!--./brief-content-->
     </div>
     <!-- /.vk-recent-blog -->
 </div>
 <!-- /.col-md-6 -->
 <div class="col-md-6">
     <div class="vk-recent-blog">
         <div class="vk-img-frame">
             <a href="5.3-single-blog.html" class="vk-img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/home-default/recent-blog/img-2.jpg" alt="">
             </a>
         </div>
         <!--./vk-recent-blog-->

         <div class="brief-content">
             <h4 class="vk-title"><a href="5.3-single-blog.html">Lorem Khaled Ipsum is a majorkey to success</a></h4>
             <p class="vk-text brief">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started...</p>
             <div class="vk-buttons">
                 <a href="5.3-single-blog.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                     <i class="fa fa-long-arrow-right"></i></a>
             </div>
         </div>
         <!--./brief-content-->
     </div>
     <!-- /.vk-recent-blog -->
 </div>
 <!-- /.col-md-6 -->
 <div class="col-md-6">
     <div class="vk-recent-blog">
         <div class="vk-img-frame">
             <a href="5.3-single-blog.html" class="vk-img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/home-default/recent-blog/img-2.jpg" alt="">
             </a>
         </div>
         <!--./vk-recent-blog-->

         <div class="brief-content">
             <h4 class="vk-title"><a href="5.3-single-blog.html">Lorem Khaled Ipsum is a majorkey to success</a></h4>
             <p class="vk-text brief">Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started...</p>
             <div class="vk-buttons">
                 <a href="5.3-single-blog.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                     <i class="fa fa-long-arrow-right"></i></a>
             </div>
         </div>
         <!--./brief-content-->
     </div>
     <!-- /.vk-recent-blog -->
 </div>
 <!-- /.col-md-6 -->
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
                         <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                         <span>
                             <span class="vk-text-color-yellow-1">customer</span>
                             say
                         </span>
                         </h2>

                         <div class="row">
                             <div class="vk-testimonial-list vk-slider-arrow-top customer-slider">
                                 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-1.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">AMANDA SMITH</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Lorem Khaled Ipsum is a major key to success. Put it this way, it took twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-2.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">JOHN STONE</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Let’s see what Chef Dee got that they don’t want us to eat. To succeed you must believe. When you believe, you will succeed. Another one. The key is to enjoy life, because they don’t want you to enjoy life. I promise you, they don’t want you to jetski, they don’t want you to smile. A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-3.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">ALEX MAYA</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Fan luv. Don’t ever play yourself. You smart, you loyal, you a genius. The key to more success is to have a lot of pillows. Cloth talk. In life there will be road blocks but we will over come it. Give thanks to the most high. Major key, don’t fall for the trap, stay focused. It’s the ones closest to you that want to see you fail. Look at the sunset, life is amazing, life is beautiful, life is what you make it.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-4.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">SELENA GOMEZ</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Let’s see what Chef Dee got that they don’t want us to eat. To succeed you must believe. When you believe, you will succeed. Another one.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-5.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">KATY PERRY</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Fan luv. Don’t ever play yourself. You smart, you loyal, you a genius. The key to more success is to have a lot of pillows. Cloth talk. In life there will be road blocks but we will over come it. Give thanks to the most high.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-6.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">ADAM LALANA</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Learning is cool, but knowing is better, and I know the key to success. I’m up to something. Lion! They never said winning was easy. Some people can’t handle success, I can. The other day the grass was brown, now it’s green because I ain’t give up. Never surrender.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-7.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">ADAM SMITH</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! To succeed you must believe. When you believe, you will succeed. The first of the month is coming, we have to get money, we have no choice. It cost money to eat and they don’t want you to eat. Watch your back, but more importantly when you get out the shower, dry your back, it’s a cold world out there.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
 <div class="col-md-6 item">
     <div class="vk-testimonial">
         <div class="avatar">
             <div class="vk-img-frame">
                 <a href="#" class="vk-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/testimonial-8.jpg" alt="">
                 </a>
             </div>
             <div class="profile">
                 <span class="name">LUIS DALTON</span>
                 <span class="position">manager</span>
             </div>
         </div>
         <!--./avatar-->

         <div class="content">
             <i class="fa fa-quote-left"></i>
             <p class="vk-text">Learning is cool, but knowing is better, and I know the key to success. I’m up to something. Lion! They never said winning was easy. Some people can’t handle success, I can. The other day the grass was brown, now it’s green because I ain’t give up. Never surrender.</p>
         </div>
         <!-- ./content-->
     </div>
     <!--./testimonial-->
 </div>
                             </div>
                             <!--./vk-testimonial-list-->
                         </div>
                         <!--./row-->
                     </div>
                     <!--./col-md-6-->

                     <div class="col-md-6 right-content">
                         <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                         <span>
                             <span class="vk-text-color-yellow-1">our</span>
                             clients
                         </span>

                         </h2>
                         <ul class="vk-list vk-list-client-style-1">
         <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img1.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img2.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img3.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img4.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img5.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img6.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img7.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img8.png" alt="">
     </li>

     <li class="vk-img-frame">
         <img src="<?php echo get_template_directory_uri(); ?>/images/about/img9.png" alt="">
     </li>

 </ul>
 <!--./vk-list-client-style-1-->                    </div>
                     <!--./col-md-6-->
                 </div>
                 <!--./row-->
             </div>
             <!--./container-->
         </div>
         <!--./vk-content-bot-->
     </div>
 <!--./home-->
 </section>
 <!--./content-->

 <footer class="vk-footer">
     <div class="container">
         <div class="row">
                         <div class="col-md-3 footer-item about">
                 <h4 class="vk-heading text-uppercase"><span class="vk-text-color-yellow-1">About</span> Company</h4>
                 <p class="vk-text">
                     Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started.
                 </p>
                 <ul class="vk-list vk-social-link">
                                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                     <li><a href="#"><i class="fa fa-skype"></i></a></li>

                     <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

                     <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>

                 </ul>
             </div>
             <!--./about-->


                         <div class="col-md-3 footer-item quick-link">
                 <h4 class="vk-heading text-uppercase">Quick link</h4>
                 <ul class="vk-list vk-quick-link text-capitalize">
                                         <li><a href="2.1-about-page.html">About us</a></li>

                     <li><a href="3.1-consultant-service.html">Services</a></li>

                     <li><a href="2.2-testimonial-page.html">Testimonials</a></li>

                     <li><a href="4.1-project-list.html">Project</a></li>

                     <li><a href="2.4-faq-page.html">FAQs</a></li>

                     <li><a href="2.5-career-page.html">Careers</a></li>

                     <li><a href="2.6-contact-page.html">Contact us</a></li>

                 </ul>
             </div>
             <!--./quick-link-->


                         <div class="col-md-3 footer-item office">
                 <h4 class="vk-heading text-uppercase">Offices</h4>
                                 <ul class="vk-list vk-office">
                                         <li><i class="fa fa-map"></i>Freedom Township, MO, USA</li>

                     <li><i class="fa fa-envelope"></i><a href="mailto:email1@domain.com" target="_blank">email1@domain.com</a></li>

                     <li><i class="fa fa-phone"></i>(122) 649 576 487</li>

                 </ul>

                 <ul class="vk-list vk-office">
                                         <li><i class="fa fa-map"></i>Somerset County, PA, USA</li>

                     <li><i class="fa fa-envelope"></i><a href="mailto:email2@domain.com" target="_blank">email2@domain.com</a></li>

                     <li><i class="fa fa-phone"></i>(122) 649 576 488</li>

                 </ul>

             </div>
             <!--./office-->


                         <div class="col-md-3 footer-item latest-works">
                 <h4 class="vk-heading text-uppercase">Latest works</h4>
                 <ul class="vk-list vk-latest-news">
                                         <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-1.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-2.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-3.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-4.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-5.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-6.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-7.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-8.jpg" alt="">
                         </a>
                     </li>

                     <li class="vk-img-frame">
                         <a href="5.3-single-blog.html" class="vk-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-9.jpg" alt="">
                         </a>
                     </li>

                 </ul>
             </div>
             <!--./latest-works-->
         </div>
         <!--./row-->

     </div>
     <!--./container-->
     <div class="footer-bot">
         <div class="container">
             <p class="vk-text">
                 Design by <a class="vk-text-color-yellow-1" href="http://vikitheme.com">VikiTemplate</a> With <span class="vk-text-color-yellow-1">Love</span>.
             </p>

             <p class="vk-text">
                 All Rights Reserved.
             </p>
         </div>
     </div>
     <!--./footer-bot-->
 </footer>
 <!--./vk-footer-->	</div>
     <!--./main-wrapper-->

<?php wp_footer(); ?>
 </body>
 </html>
