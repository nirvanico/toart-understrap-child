<?php


// Enqueue Font Google.

function add_google_fonts() {

wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Source+Serif+Pro', false );
}

// griglia Masonry

function mason_script() {

    //layout masonry

    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );

//  script di instafedd

function instafeed_script() {
    wp_enqueue_script(
        'instafeed.min',
        get_stylesheet_directory_uri() . '/js/instafeed.min.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'instafeed_script' );

//  script di timeline

function timeline_script() {
    wp_enqueue_script(
        'timeline.min',
        get_stylesheet_directory_uri() . '/js/timeline.min.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'timeline_script' );
