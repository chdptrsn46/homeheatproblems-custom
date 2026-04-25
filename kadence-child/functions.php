<?php
// HomeHeatProblems.com - Kadence Child Theme Functions
// All custom PHP and WordPress hooks go below this line

add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles' );
function kadence_child_enqueue_styles() {
    wp_enqueue_style( 'kadence-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kadence-child-style', get_stylesheet_uri(), array( 'kadence-style' ), wp_get_theme()->get( 'Version' ) );
}
