<?php
function U3A_styles() {
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}
add_action( 'wp_enqueue_scripts', 'U3A_styles');

function childtheme_enqueue_styles() {
    wp_enqueue_style( 'child-theme-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap', false );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_styles' );
