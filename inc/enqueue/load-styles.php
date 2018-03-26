<?php
/**
 * Load custom stylesheets
 *
 * @since 1.0
 */

function iamleigh_css() {

    wp_register_style( 'select2-css', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css', array(), '4.0.3' );

    wp_enqueue_style( 'select2-css' );

    wp_register_style( 'iamui-grid', get_template_directory_uri() . '/assets/css/grid.css', false, '1.0.0' );
    wp_register_style( 'iamui-front', get_template_directory_uri() . '/assets/css/front.css', false, '1.0.0' );

    wp_enqueue_style( 'iamui-grid' );
    wp_enqueue_style( 'iamui-front' );

}

add_action( 'wp_enqueue_scripts', 'iamleigh_css' ); ?>