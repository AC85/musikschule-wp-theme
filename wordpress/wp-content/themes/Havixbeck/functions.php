<?php

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


// Anzahl der Wörter die in der Übersichtsseite angezeigt werden bis diese abgeschnitten werden.
function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Ausgabe ... oder anderes
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

require_once('wp_bootstrap_navwalker.php');

add_theme_support( 'post-thumbnails' );

function mytheme_setup() {

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Havixbeck' ),
    ) );

}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>