<?php
add_filter('wpcf7_autop_or_not', '__return_false');


function yam_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'yam_theme_setup' );

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Theme Setup
|--------------------------------------------------------------------------
*/

function pbc_theme_setup() {

    // Let WordPress control <title>
    add_theme_support( 'title-tag' );

    // Enable featured images (future use)
    add_theme_support( 'post-thumbnails' );

    // HTML5 support
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );

}
add_action( 'after_setup_theme', 'pbc_theme_setup' );


/*
|--------------------------------------------------------------------------
| Enqueue Styles & Scripts
|--------------------------------------------------------------------------
*/

function pbc_enqueue_assets() {

    // Main CSS
    wp_enqueue_style(
        'pbc-main-style',
        get_template_directory_uri() . '/css/styles.css',
        array(),
        '1.0'
    );

    // Main JS
    wp_enqueue_script(
        'pbc-main-script',
        get_template_directory_uri() . '/js/script.js',
        array(),
        '1.0',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'pbc_enqueue_assets' );