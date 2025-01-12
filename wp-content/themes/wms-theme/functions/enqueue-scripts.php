<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), 'true' );

    // Bundle JS file
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/main.js', array( 'jquery' ), null, 'true' );
   
    // Register main stylesheet
    //wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/dist/main.css', array(), null, 'all' );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);