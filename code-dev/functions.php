<?php

function code_dev_load_scripts(){
    wp_enqueue_style(
        'code_dev-style', 
        get_stylesheet_uri(), 
        array(), 
        filemtime( get_template_directory() . '/style.css' ),
        'all'
    );
    
    wp_enqueue_style( 
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', 
        array(), 
        null 
    );

    wp_enqueue_script(
        'dropdown',
        get_template_directory_uri() . '/js/dropdown.js',
        array(),
        0.1,
        true
    );
}

add_action('wp_enqueue_scripts', 'code_dev_load_scripts');


function code_dev_config(){
    register_nav_menus(
        array(
            'code_dev_main_menu' => 'Main Menu',
            'code_dev_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
}

add_action('after_setup_theme', 'code_dev_config', 0);