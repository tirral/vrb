<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "vrb_global";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /*=== Dev mode disable ===*/
    function removeDemoModeLinkSell() { // Be sure to rename this function to something more unique
        if ( class_exists('ReduxFrameworkPlugin') ) {
            remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
        }
        if ( class_exists('ReduxFrameworkPlugin') ) {
            remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );
        }
    }
    add_action('init', 'removeDemoModeLinkSell');

    /*=== Adding custom CSS for Theme Options design ===*/
    function addPanelCSS() {
        wp_register_style(
            'redux-custom-css',
            esc_url(get_template_directory_uri()) . '/inc/redux-custom-css.css',
            array( 'redux-admin-css' ), // Be sure to include redux-admin-css so it's appended after the core css is applied
            time(),
            'all'
        );
        wp_enqueue_style('redux-custom-css');
    }

    // This example assumes your opt_name is set to redux_demo, replace with your opt_name value
    add_action( 'init', 'addPanelCSS' );


    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
             'menu_title'           => __( 'VRB options', 'thetirral' ),
             'page_title'           => __( 'VRB  options', 'thetirral' ),




        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyDeYiLYJqrUlKObyWS68HtGXpw2BAFW1es',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 3,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => get_template_directory_uri().'/images/vrb.jpg',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'thetirral' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'thetirral' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'thetirral' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'thetirral' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'thetirral' );
    Redux::setHelpSidebar( $opt_name, $content );

    /*
     * <--- END HELP TABS
     */







     /*
        *
        * ---> START SECTIONS
        *
        */
       /*
           As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
        */


        // -> START Media Uploads
        Redux::setSection( $opt_name, array(
            'title' => __( 'Header options', 'redux-framework-demo' ),
            'id'    => 'vrb-header-media',
            'desc'  => __( '', 'redux-framework-demo' ),
            'icon'  => 'el el-picture'
        ) );



        Redux::setSection( $opt_name, array(
            'title'      => __( 'Main Slider Information', 'redux-framework-demo' ),
            'id'         => 'vrb-slides',
            'subsection' => true,
            'fields'     => array(

              array(
                    'id'       => 'header-slide-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Choose first slide image', 'thetirral'),
                    'desc'     => __('Select the image of first slider.', 'thetirral'),
                    'subtitle' => __('Upload any media using the WordPress native uploader.', 'thetirral'),
                    'default'  => array(
                    'url'=> get_template_directory_uri().'/images/background-5.jpg')
        		        ),


            array(
                    'id'       => 'header-slide-main-title',
                    'type'     => 'text',
                    'title'    => __( 'Write the header slide main title', 'thetirral' ),
                    'default'  => 'LET US HELP YOU',
                    ),

            array(
                    'id'       => 'header-slide-sub-title',
                    'type'     => 'text',
                    'title'    => __( 'Write the header slide sub title', 'thetirral' ),
                    'default'  => 'MAKE YOUR DREAMS COME TRUE',
                    ),

            )
        ) );


        Redux::setSection( $opt_name, array(
            'title'      => __( 'Main Jumbotron Information', 'redux-framework-demo' ),
            'id'         => 'vrb-jumbotron',
            'subsection' => true,
            'fields'     => array(

              array(
                    'id'       => 'header-jumbotron-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Choose first slide image', 'thetirral'),
                    'desc'     => __('Select the image of first slider.', 'thetirral'),
                    'subtitle' => __('Upload any media using the WordPress native uploader.', 'thetirral'),
                    'default'  => array(
                    'url'=> get_template_directory_uri().'/images/background-3.jpg')
                    ),

            )
        ) );



        Redux::setSection( $opt_name, array(
            'title'      => __( 'Header Contact Information', 'redux-framework-demo' ),
            'id'         => 'vrb-contact-information',
            'subsection' => true,
            'fields'     => array(

            array(
                    'id'       => 'header-contact-information-telephone',
                    'type'     => 'text',
                    'title'    => __( 'Write the header telephone number', 'thetirral' ),
                    'default'  => '(122) 675 485 035',
                    ),

            array(
                  'id'       => 'header-contact-information-email',
                  'type'     => 'text',
                  'title'    => __( 'Write the header email address', 'thetirral' ),
                  'default'  => 'email@domain.com',
                  ),

            array(
                  'id'       => 'header-contact-information-opening-hours',
                  'type'     => 'text',
                  'title'    => __( 'Write the header opening hours information', 'thetirral' ),
                  'default'  => 'Mon - Sun: 8h00 - 18h00',
                  ),
            )
        ) );



                Redux::setSection( $opt_name, array(
                    'title' => __( 'Footer Information', 'redux-framework-demo' ),
                    'id'    => 'vrb-footer',
                    'desc'  => __( '', 'redux-framework-demo' ),
                    'icon'  => 'el el-picture'
                ) );

                Redux::setSection( $opt_name, array(
                    'title'      => __( 'Company Block Information', 'redux-framework-demo' ),
                    'id'         => 'company-block-settings',
                    'subsection' => true,
                    'fields'     => array(

                      array(
                            'id'       => 'company-block-settings-header',
                            'type'     => 'text',
                            'title'    => __( 'Write the header opening hours information', 'thetirral' ),
                            'default'  => 'About company',
                            ),

                    array(
                            'id'       => 'company-block-settings-text',
                            'type'     => 'textarea',
                            'title'    => __( 'Write the header slide sub title', 'thetirral' ),
                            'default'  => 'Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started.',
                            ),
                    )
                ) );




                Redux::setSection( $opt_name, array(
                    'title'      => __( 'Social buttons', 'redux-framework-demo' ),
                    'id'         => 'social-buttons-settings',
                    'desc' => __('A full list of icons is available under the  <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"> LINK </a>', 'redux-framework-demo'),
                    'subsection' => true,
                    'fields'     => array(


                      array(
                            'id'       => 'social-buttons-settings-first-icon',
                            'type'     => 'text',
                            'title'    => __( 'Write the first social button icon', 'thetirral' ),
                            'default'  => 'fab fa-facebook-f',
                            ),

                    array(
                            'id'       => 'social-buttons-settings-first-link',
                            'type'     => 'text',
                            'title'    => __( 'Write the first social button link', 'thetirral' ),
                            'default'  => 'https://www.facebook.com/',
                            ),


                    array(
                            'id'       => 'social-buttons-settings-second-icon',
                            'type'     => 'text',
                            'title'    => __( 'Write the second social button icon', 'thetirral' ),
                            'default'  => 'fab fa-instagram',
                    ),

                    array(
                          'id'       => 'social-buttons-settings-second-link',
                          'type'     => 'text',
                          'title'    => __( 'Write the second social button link', 'thetirral' ),
                          'default'  => 'https://www.instagram.com/',
                    ),

                    array(
                            'id'       => 'social-buttons-settings-third-icon',
                            'type'     => 'text',
                            'title'    => __( 'Write the third social button icon', 'thetirral' ),
                            'default'  => 'fab fa-google-plus-g',
                    ),

                    array(
                          'id'       => 'social-buttons-settings-third-link',
                          'type'     => 'text',
                          'title'    => __( 'Write the third social button link', 'thetirral' ),
                          'default'  => 'https://profiles.google.com',
                    ),

                    array(
                            'id'       => 'social-buttons-settings-fourth-icon',
                            'type'     => 'text',
                            'title'    => __( 'Write the third social button icon', 'thetirral' ),
                            'default'  => 'fab fa-twitter',
                    ),

                    array(
                          'id'       => 'social-buttons-settings-fourth-link',
                          'type'     => 'text',
                          'title'    => __( 'Write the third social button link', 'thetirral' ),
                          'default'  => 'https://twitter.com',
                    ),
                    )
                ) );



                Redux::setSection( $opt_name, array(
                    'title'      => __( 'Footer Contact Information', 'redux-framework-demo' ),
                    'id'         => 'vrb-footer-contact-information',
                        'desc' => __('A full list of icons is available under the  <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"> LINK </a>', 'redux-framework-demo'),
                    'subsection' => true,
                    'fields'     => array(

                              array(
                                    'id'       => 'footer-contact-information-header',
                                    'type'     => 'text',
                                    'title'    => __( 'Write the footer contact header', 'thetirral' ),
                                    'default'  => 'Our Office',
                              ),

                              array(
                                    'id'       => 'footer-telephone-informatio-icon',
                                    'type'     => 'text',
                                    'title'    => __( 'Write telephone informatio icon', 'thetirral' ),
                                    'default'  => 'fas fa-phone',
                              ),

                              array(
                                    'id'       => 'footer-contact-information-telephone',
                                    'type'     => 'text',
                                    'title'    => __( 'Write the footer telephone number', 'thetirral' ),
                                    'default'  => '(122) 675 485 035',
                              ),
                              array(
                                    'id'       => 'footer-email-informatio-icon',
                                    'type'     => 'text',
                                    'title'    => __( 'Write email informatio icon', 'thetirral' ),
                                    'default'  => 'fas fa-envelope',
                              ),
                              array(
                                    'id'       => 'footer-contact-information-email',
                                    'type'     => 'text',
                                    'title'    => __( 'Write the footer email address', 'thetirral' ),
                                    'default'  => 'email1@domain.com',
                              ),
                              array(
                                    'id'       => 'footer-contact-informatio-icon',
                                    'type'     => 'text',
                                    'title'    => __( 'Write contact informatio icon', 'thetirral' ),
                                    'default'  => 'fas fa-map',
                              ),
                              array(
                                    'id'       => 'footer-contact-information-address',
                                    'type'     => 'text',
                                    'title'    => __( 'Write the footer address information', 'thetirral' ),
                                    'default'  => 'Freedom Township, MO, USA',
                              ),
                              )
                ) );










       // -> START Required


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'thetirral' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'thetirral' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }


    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }
