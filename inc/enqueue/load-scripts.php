<?php
/**
 * Load scripts
 * @since 1.0
 */

function iamleigh_script() {
	wp_enqueue_script( 'select2', get_template_directory_uri() . '/assets/js/library/select2.full.min.js', array( 'jquery' ), '4.0.3', true );
	wp_enqueue_script( 'iamui-js', get_template_directory_uri() . '/assets/js/iamui-js.min.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'iamleigh_script' );
