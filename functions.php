<?php
/**
 * Created by PhpStorm.
 * User: Eli
 * Date: 1/22/18
 * Time: 12:09 PM
 */



// Register Custom Navigation Walker
require_once get_template_directory() . '/bs4navwalker.php';
require_once get_template_directory() . '/inc/customizer-boilerplate/customizer.php';

if ( ! function_exists( 'amplifiedSetup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function amplifiedSetup()
    {

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 825, 510, true );

        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        add_theme_support( 'custom-logo', array(
            'height'      => 248,
            'width'       => 248,
            'flex-height' => true,
        ) );

        add_theme_support( 'custom-logo', array(
            'height'      => 248,
            'width'       => 248,
            'flex-height' => true,
        ) );

        add_theme_support( 'customize-selective-refresh-widgets' );

        function register_my_menu() {
            register_nav_menu('header-menu',__( 'Header Menu' ));
        }
        function remove_admin_login_header() {
            remove_action('wp_head', '_admin_bar_bump_cb');
        }
        function amplified_the_custom_logo() {

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            echo $image[0];
        }
        function amplified_getMobileLogo(){
            $options = thsp_cbp_get_options_values();
            $custom_mobile_logo = $options['mobile_logo_upload'];
            return $custom_mobile_logo;
        }

        function amplified_getTagline() {
            $options = thsp_cbp_get_options_values();
            $tagline = $options['header_tagline'];
            return $tagline;
        }
        add_action('wp_head','amplified_customizer_css');
        function amplified_customizer_css()
        {
            $options = thsp_cbp_get_options_values();
            /*header background image settings*/
            $backgroundImage = $options['header_image_upload'];
            $backgroundImageXAxis = $options['header_image_position_x'];
            $backgroundImageYAxis = $options['header_image_position_y'];
            $xAxis = ''.$backgroundImageXAxis.'0%';
            $yAxis = ''.$backgroundImageYAxis.'0%';
            /*footer background image settings*/
            $footerbackgroundImage = $options['footer_background_upload'];
            $footerbackgroundImageXAxis = $options['footer_image_position_x'];
            $footerbackgroundImageYAxis = $options['footer_image_position_y'];
            $footerxAxis = ''.$footerbackgroundImageXAxis.'0%';
            $footeryAxis = ''.$footerbackgroundImageYAxis.'0%';
            ?>
            <style type="text/css">
                .navbar.navbar-expand-md.navbar-dark.bg-dark{background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 1)),url(<?php echo $backgroundImage; ?>)!important; background-position: <?php echo $xAxis . ' ' . $yAxis; ?> !important; background-repeat: no-repeat !important; background-size: cover;}
                footer{background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 1)),url(<?php echo $footerbackgroundImage; ?>)!important; background-position: <?php echo $footerxAxis . ' ' . $footeryAxis; ?> !important; background-repeat: no-repeat !important; background-size: cover;position: absolute;bottom: 0;left:0;width: 100%;height: 60px;line-height: 60px;}
                footer p{margin-bottom: 0 !important;}
                }
            </style>

            <?php
        }

    }
endif;
add_action( 'after_setup_theme', 'amplifiedSetup' );





function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'theme-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'theme-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function themeScripts(){
    wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'themeScripts' );
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

add_action('get_header', 'remove_admin_login_header');




