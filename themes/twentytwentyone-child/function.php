<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function twentytwentyonechild_wp_enqueue_scripts() {
    $parenthandle = 'twenty-twenty-one-style'; // This is 'twenty-twenty-one-style' for the Twenty twenty-one theme.
    $theme = wp_get_theme();
    wp_enqueue_style( 
        $parenthandle, 
        get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 
        'twentytwentyonechild-style', 
        get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    wp_enqueue_style( 
        'custom-css-style', 
        get_stylesheet_directory_uri() . '/assets/css/my-style.css', 
    );
}


add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_scripts' );

?>