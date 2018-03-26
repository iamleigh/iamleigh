<?php
/**
 *
 * I Am Leigh functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * @package iamleigh
 * @subpackage iamleigh
 * @since iamleigh 1.0
 * @version 1.0
 *
 */
function iamleigh_setup() {

    // Make theme available for translation
    load_theme_textdomain( 'iamleigh' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // Enable wp_nav_menu()
    register_nav_menus( array(
        'header'    => __( 'Header Menu', 'iamleigh' ),
        'footer'    => __( 'Footer Menu', 'iamleigh' )
    ) );

}

add_action( 'after_setup_theme', 'iamleigh_setup' );

// Filter the page title
function iamleigh_wp_title( $title, $sep ) {
    
    global $paged, $page;
    
    if ( is_feed() )
        return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'iteach' ), max( $paged, $page ) );

    return $title;
    
}

add_filter( 'wp_title', 'iamleigh_wp_title', 10, 2 );

// Enqueue scripts
require( get_template_directory() . '/inc/enqueue/load-scripts.php' );
require( get_template_directory() . '/inc/enqueue/load-styles.php' );
?>