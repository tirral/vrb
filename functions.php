<?php
/**
 * VRB functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VRB
 */

 if ( class_exists( 'Redux' ) && file_exists( get_template_directory() . '/inc/config.php' ) ) {
 	require_once( get_template_directory() . '/inc/config.php' );
 }

 global $thetirral_global;
 $opt_name = 'thetirral_global';





if ( ! function_exists( 'vrb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vrb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on VRB, use a find and replace
		 * to change 'vrb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vrb', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );




		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'vrb' ),
		) );


		register_nav_menus( array(
			'menu-2' => esc_html__( 'Footer', 'vrb' ),
		) );






		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vrb_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'vrb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vrb_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'vrb_content_width', 640 );
}
add_action( 'after_setup_theme', 'vrb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vrb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vrb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vrb' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div><div class="vk-space x-small"></div>',
		'before_title'  => '<h4 class="vk-text-uppercase">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'vrb_widgets_init' );






/**
 * Enqueue scripts and styles.
 */
function vrb_scripts() {
	wp_enqueue_style( 'vrb-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fonts',   get_template_directory_uri() . '/plugin/fonts/transfonter/fonts.css', array(),  true );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/plugin/fonts/font-awesome/css/fontawesome-all.css', array(),  true );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/plugin/fonts/platicon/font/flaticon.css', array(),  true );
	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/plugin/fonts/themify/themify-icons.css', array(),  true );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugin/bootstrap/css/bootstrap.min.css', array(),  true );
	wp_enqueue_style( 'animsition', get_template_directory_uri() . '/plugin/animsition/css/animsition.min.css', array(),  true );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/plugin/lightbox/css/lightbox.min.css', array(),  true );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(),  true );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/plugin/slick/slick.css', array(),  true );
	wp_enqueue_style( 'mediaelementplayer', get_template_directory_uri() . '/plugin/player/mediaelementplayer.css', array(),  true );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/plugin/jquery-ui/jquery-ui.css', array(),  true );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(),  true );
	wp_enqueue_style( 'customize', get_template_directory_uri() . '/css/customize.css', array(),  true );

	wp_enqueue_script( 'vrb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'vrb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/plugin/modernizr.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'plugin', get_template_directory_uri() . '/plugin/plugin.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/plugin/main.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/plugin/custom.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vrb_scripts' );



function load_custom_wp_admin_style(){
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/admin-style.css', array(),  true );
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
 * Main menu sub-menu class rename
 */

function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="vk-navbar-nav child" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','new_submenu_class');






/**
 * Custom post types
 */
require get_template_directory() . '/inc/custom-post-metaboxes/metaboxes-iconbox.php';
require get_template_directory() . '/inc/custom-post-metaboxes/metaboxes-project.php';
require get_template_directory() . '/inc/custom-post-metaboxes/metaboxes-facts.php';
require get_template_directory() . '/inc/custom-post-metaboxes/metaboxes-services.php';
require get_template_directory() . '/inc/custom-post-metaboxes/metaboxes-testimonials.php';
/**
 * Metaboxes for custom post type
 */
require get_template_directory() . '/inc/custom-post-type/post-type-iconbox.php';
require get_template_directory() . '/inc/custom-post-type/post-type-project.php';
require get_template_directory() . '/inc/custom-post-type/post-type-facts.php';
require get_template_directory() . '/inc/custom-post-type/post-type-services.php';
require get_template_directory() . '/inc/custom-post-type/post-type-testimonials.php';
require get_template_directory() . '/inc/custom-post-type/post-type-clients.php';

	/**
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */





     if ( function_exists( 'add_theme_support' ) ) {
   	  add_theme_support( 'post-thumbnails' );
   		set_post_thumbnail_size( 800, 400, true );
   }

   if ( function_exists( 'add_image_size' ) ) {
   	add_image_size( 'postmainpage-thumb', 370, 370, true );
   	add_image_size( 'mainbg-thumb', 9999, 1000);
    add_image_size( 'progectmainpage-thumb', 370, 270, true  );
    add_image_size( 'servisemainpage-thumb', 570, 500, true  );
    add_image_size( 'testimonialmainpage-thumb', 80, 80, true  );
    add_image_size( 'clientsmainpage-thumb', 185, 100, true  );
    add_image_size( 'latestworkmainpage-thumb', 99, 71, true  );
   }






	/*
	 * "Хлебные крошки" для WordPress
	 * автор: Dimox
	 * версия: 2017.01.21
	 * лицензия: MIT
	*/
	function dimox_breadcrumbs() {

	  /* === ОПЦИИ === */
	  $text['home'] = 'Главная'; // текст ссылки "Главная"
	  $text['category'] = '%s'; // текст для страницы рубрики
	  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
	  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
	  $text['404'] = 'Ошибка 404'; // текст для страницы 404
	  $text['page'] = 'Страница %s'; // текст 'Страница N'
	  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	  $wrap_before = '<ul>'; // открывающий тег обертки
	  $wrap_after = '</ul>'; // закрывающий тег обертки
	  $sep = '›'; // разделитель между "крошками"
	  $sep_before = '<span class="sep">'; // тег перед разделителем
	  $sep_after = '</span>'; // тег после разделителя
	  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	  $before = '<li>'; // тег перед текущей "крошкой"
	  $after = '</li>'; // тег после текущей "крошки"
	  /* === КОНЕЦ ОПЦИЙ === */

	  global $post;
	  $home_url = home_url('/');
	  $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	  $link_after = '</span>';
	  $link_attr = ' itemprop="item"';
	  $link_in_before = '<span itemprop="name">';
	  $link_in_after = '</span>';
	  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	  $frontpage_id = get_option('page_on_front');
	  $parent_id = ($post) ? $post->post_parent : '';
	  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
	  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

	  if (is_home() || is_front_page()) {

	    if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

	  } else {

	    echo $wrap_before;
	    if ($show_home_link) echo $home_link;

	    if ( is_category() ) {
	      $cat = get_category(get_query_var('cat'), false);
	      if ($cat->parent != 0) {
	        $cats = get_category_parents($cat->parent, TRUE, $sep);
	        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
	        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
	        if ($show_home_link) echo $sep;
	        echo $cats;
	      }
	      if ( get_query_var('paged') ) {
	        $cat = $cat->cat_ID;
	        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
	      } else {
	        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
	      }

	    } elseif ( is_search() ) {
	      if (have_posts()) {
	        if ($show_home_link && $show_current) echo $sep;
	        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
	      } else {
	        if ($show_home_link) echo $sep;
	        echo $before . sprintf($text['search'], get_search_query()) . $after;
	      }

	    } elseif ( is_day() ) {
	      if ($show_home_link) echo $sep;
	      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
	      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
	      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

	    } elseif ( is_month() ) {
	      if ($show_home_link) echo $sep;
	      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
	      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

	    } elseif ( is_year() ) {
	      if ($show_home_link && $show_current) echo $sep;
	      if ($show_current) echo $before . get_the_time('Y') . $after;

	    } elseif ( is_single() && !is_attachment() ) {
	      if ($show_home_link) echo $sep;
	      if ( get_post_type() != 'post' ) {
	        $post_type = get_post_type_object(get_post_type());
	        $slug = $post_type->rewrite;
	        printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
	        if ($show_current) echo $sep . $before . get_the_title() . $after;
	      } else {
	        $cat = get_the_category(); $cat = $cat[0];
	        $cats = get_category_parents($cat, TRUE, $sep);
	        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
	        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
	        echo $cats;
	        if ( get_query_var('cpage') ) {
	          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
	        } else {
	          if ($show_current) echo $before . get_the_title() . $after;
	        }
	      }

	    // custom post type
	    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
	      $post_type = get_post_type_object(get_post_type());
	      if ( get_query_var('paged') ) {
	        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
	      } else {
	        if ($show_current) echo $sep . $before . $post_type->label . $after;
	      }

	    } elseif ( is_attachment() ) {
	      if ($show_home_link) echo $sep;
	      $parent = get_post($parent_id);
	      $cat = get_the_category($parent->ID); $cat = $cat[0];
	      if ($cat) {
	        $cats = get_category_parents($cat, TRUE, $sep);
	        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
	        echo $cats;
	      }
	      printf($link, get_permalink($parent), $parent->post_title);
	      if ($show_current) echo $sep . $before . get_the_title() . $after;

	    } elseif ( is_page() && !$parent_id ) {
	      if ($show_current) echo $sep . $before . get_the_title() . $after;

	    } elseif ( is_page() && $parent_id ) {
	      if ($show_home_link) echo $sep;
	      if ($parent_id != $frontpage_id) {
	        $breadcrumbs = array();
	        while ($parent_id) {
	          $page = get_page($parent_id);
	          if ($parent_id != $frontpage_id) {
	            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
	          }
	          $parent_id = $page->post_parent;
	        }
	        $breadcrumbs = array_reverse($breadcrumbs);
	        for ($i = 0; $i < count($breadcrumbs); $i++) {
	          echo $breadcrumbs[$i];
	          if ($i != count($breadcrumbs)-1) echo $sep;
	        }
	      }
	      if ($show_current) echo $sep . $before . get_the_title() . $after;

	    } elseif ( is_tag() ) {
	      if ( get_query_var('paged') ) {
	        $tag_id = get_queried_object_id();
	        $tag = get_tag($tag_id);
	        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
	      } else {
	        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
	      }

	    } elseif ( is_author() ) {
	      global $author;
	      $author = get_userdata($author);
	      if ( get_query_var('paged') ) {
	        if ($show_home_link) echo $sep;
	        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
	      } else {
	        if ($show_home_link && $show_current) echo $sep;
	        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
	      }

	    } elseif ( is_404() ) {
	      if ($show_home_link && $show_current) echo $sep;
	      if ($show_current) echo $before . $text['404'] . $after;

	    } elseif ( has_post_format() && !is_singular() ) {
	      if ($show_home_link) echo $sep;
	      echo get_post_format_string( get_post_format() );
	    }

	    echo $wrap_after;

	  }
	} // end of dimox_breadcrumbs()





	/**
	 * Comment custom template
	 */


	function mytheme_comment($comment, $args, $depth) {
	    if ( 'div' === $args['style'] ) {
	        $tag       = 'div';
	        $add_below = 'comment';
	    } else {
	        $tag       = 'li';
	        $add_below = 'div-comment';
	    }

	?>
	    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">

	    <?php if ( 'div' != $args['style'] ) : ?>
	        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	    <?php endif; ?>

	    <div class="comment-author vcard">
	        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	        <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
	    </div>

	    <?php if ( $comment->comment_approved == '0' ) : ?>
	         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
	          <br />
	    <?php endif; ?>

<?php comment_text(); ?>

	    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
	        <?php
	        /* translators: 1: date, 2: time */
	        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
	        ?>
	    </div>

	    <div class="reply">
	        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	    </div>





	    <?php if ( 'div' != $args['style'] ) : ?>
	    </div>
	    <?php endif; ?>
	    <?php
	    }
