<?php
/**
 * Theme functions and definitions
 *
 * @package yuma_blogger
 */  

if ( ! function_exists( 'yuma_blogger_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function yuma_blogger_enqueue_styles() {
		wp_enqueue_style( 'yuma-parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'yuma-blogger-style', get_stylesheet_directory_uri() . '/style.css', array('yuma-parent-style') );
	}
endif;
add_action( 'wp_enqueue_scripts', 'yuma_blogger_enqueue_styles' );

function yuma_blogger_remove_action() {
    remove_filter( 'yuma_blog_column_type_options', 'yuma_companion_blog_column_type_options' );
}
add_action( 'init', 'yuma_blogger_remove_action');

if ( ! function_exists( 'yuma_blogger_theme_defaults' ) ) :
    /**
     * Customize theme defaults.
     *
     * @since 1.0.0
     *
     * @param array $defaults Theme defaults.
     * @param array Custom theme defaults.
     */
    function yuma_blogger_theme_defaults( $defaults ) {
        // theme color
        $defaults['theme_color'] = 'default';
        $defaults['site_bg_color'] = '#f6f6f7';

        // typography
        $defaults['heading_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['section_title_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['home_title_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['page_title_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['entry_title_font_family'] = json_encode(array('font' => 'Alata') );

        // topbar section
        $defaults['topbar_area'] = 'auto';
        $defaults['topbar_date_format'] = 'layout-6';

        // header section
        $defaults['header_area'] = 'auto';
        $defaults['header_height'] = 150;
        $defaults['header_right_element'] = 'widget';
        
        // slider section
        $defaults['slider_width'] = 'container-width';
        $defaults['slider_layout'] = 'left-align';
        $defaults['slider_column'] = 1;
        $defaults['slider_content_type'] = 'post';
        
        // latest blog
        $defaults['enable_blog_before_element'] = false;
        $defaults['latest_blog_title'] = '';
        $defaults['blog_layout'] = 'left-align';
        $defaults['enable_latest_blog_masonry'] = false;
        $defaults['filter_blog_posts'] = 'none';
        $defaults['latest_blog_sidebar'] = true;
        $defaults['blog_column_type'] = 'column-horizontal';
        $defaults['blog_image_size'] = 'post-thumbnail';
        
        // single post
        $defaults['single_header_image_layout'] = 'content-featured-image';
        $defaults['single_header_image_size'] = 'original-size';

        // page
        $defaults['page_header_image_layout'] = 'content-featured-image';
        $defaults['page_header_image_size'] = 'original-size';
        
        return $defaults;
    }
endif;
add_filter( 'yuma_default_theme_options', 'yuma_blogger_theme_defaults', 99 );

if ( ! function_exists( 'yuma_blogger_latest_blog_column_layout' ) ) {
    function yuma_blogger_latest_blog_column_layout() {
        $options = array(
            'column-1' 		=> esc_html__( 'One Column', 'yuma-blogger' ),
		    'column-2' 		=> esc_html__( 'Two Column', 'yuma-blogger' ),
            'column-3' 		=> esc_html__( 'Three Column', 'yuma-blogger' ),
            'column-horizontal' => esc_html__( 'One Column Horizontal', 'yuma-blogger' ),
        );

        return $options;
    }
}
add_filter('yuma_blog_column_type_options', 'yuma_blogger_latest_blog_column_layout');

if ( ! function_exists( 'yuma_blogger_set_theme_mods' ) ) :
    /**
     * Set theme mod.
     */
    function yuma_blogger_set_theme_mods() {
        $theme_mod = get_theme_mod( 'yuma_theme_options' );
        if ( isset( $theme_mod ) && $theme_mod ) {
            return;
        }

        $yuma_theme_options = array( 
            // topbar section
            'topbar_left_element' => 'date,address,email',
            'topbar_right_element' => 'social_menu,search',

            // header section
            'header_bg_color' => '#0a0e14',
            'header_bg_image' => get_stylesheet_directory_uri() . '/assets/banner.jpg',
            'header_elements_color' => '#ffffff',

            // navbar section
            'navbar_bg_color' => '#0a0e14', 
            'navbar_elements_color' => '#ffffff',
            'navbar_left_element' => 'primary_menu',

            // sidebar
            'sidebar_widget_bg_color' => '#0a0e14', 
            'sidebar_widget_title_color' => '#ffffff', 
            'sidebar_widget_elements_color' => '#ffffff', 

        );
        set_theme_mod( 'yuma_theme_options', $yuma_theme_options );
    }
endif;
add_action( 'after_setup_theme', 'yuma_blogger_set_theme_mods' );
