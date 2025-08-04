<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
    // Charger les styles du thème parent
    wp_enqueue_style( 'blocksy-parent-style', get_template_directory_uri() . '/style.css' );

    // Charger les styles du thème enfant
    wp_enqueue_style( 'blocksy-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('blocksy-parent-style'),
        filemtime( get_stylesheet_directory() . '/style.css')
    );
});
