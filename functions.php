<?php

// Enqueue styles and scripts
// https://developer.wordpress.org/reference/functions/wp_enqueue_style/

function gdi_theme_name_scripts() {
  wp_enqueue_style( 'styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'gdi_theme_name_scripts' );
