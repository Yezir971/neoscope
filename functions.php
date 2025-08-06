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

function add_custom_google_fonts() {
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'add_custom_google_fonts' );

// ajout de gsap a wordpress 
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_stylesheet_directory_uri() . '/js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );    