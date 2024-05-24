<?php

function code_dev_customizer( $wp_customize ){
    // This section is for copyright information
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'code-dev'),
            'description' => __('Copyright Settings', 'code-dev')
        )
    );

        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => __('Copyright © 2024 - All rights reserved', 'code-dev'),
                'sanitize_callback' => 'sanitize_text_field'

            )
        );

        $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => __('Copyright Information', 'code-dev'),
                'description' => __('Type your copyright info here', 'code-dev'),
                'section' => 'sec_copyright',
                'type' => 'text'
            )
        );
    
    // This section is for copyright information
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'code-dev')
        )
    );

        // Hero title
        $wp_customize->add_setting(
            'set_hero_title',
            array(
                'type' => 'theme_mod',
                'default' => __('Please add a title', 'code-dev'),
                'sanitize_callback' => 'sanitize_text_field'

            )
        );

        $wp_customize->add_control(
            'set_hero_title',
            array(
                'label' => __('Hero Title', 'code-dev'),
                'description' => __('Please type your subtitle here', 'code-dev'),
                'section' => 'sec_hero',
                'type' => 'text'
            )
        );

        // Subtitle
        $wp_customize->add_setting(
            'set_hero_subtitle',
            array(
                'type' => 'theme_mod',
                'default' => __('Please add a title', 'code-dev'),
                'sanitize_callback' => 'sanitize_textarea_field'

            )
        );

        $wp_customize->add_control(
            'set_hero_subtitle',
            array(
                'label' => __('Hero Subtitle', 'code-dev'),
                'description' => __('Please type your subtitle here', 'code-dev'),
                'section' => 'sec_hero',
                'type' => 'textarea'
            )
        );

        // Button Text
        $wp_customize->add_setting(
            'set_hero_button_text',
            array(
                'type' => 'theme_mod',
                'default' => __('Learn More', 'code-dev'),
                'sanitize_callback' => 'sanitize_textarea_field'

            )
        );

        $wp_customize->add_control(
            'set_hero_button_text',
            array(
                'label' => __('Hero Button Text', 'code-dev'),
                'description' => __('Please type your hero button text here', 'code-dev'),
                'section' => 'sec_hero',
                'type' => 'text'
            )
        );

        // Button Text
        $wp_customize->add_setting(
            'set_hero_button_link',
            array(
                'type' => 'theme_mod',
                'default' => __('#', 'code-dev'),
                'sanitize_callback' => 'esc_url_raw'

            )
        );

        $wp_customize->add_control(
            'set_hero_button_link',
            array(
                'label' => __('Hero Button Text', 'code-dev'),
                'description' => __('Please type your hero button URL here', 'code-dev'),
                'section' => 'sec_hero',
                'type' => 'url'
            )
        );

        // Hero Minimum Height
        $wp_customize->add_setting(
            'set_hero_height',
            array(
                'type' => 'theme_mod',
                'default' => 800,
                'sanitize_callback' => 'absint'

            )
        );

        $wp_customize->add_control(
            'set_hero_height',
            array(
                'label' => __('Hero Height', 'code-dev'),
                'description' => __('Please type your hero height here', 'code-dev'),
                'section' => 'sec_hero',
                'type' => 'number'
            )
        );

        // Hero Background
        $wp_customize->add_setting(
            'set_hero_background',
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
            )
        );

        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
            'set_hero_background',
            array(
                'label' => __('Hero Image', 'code-dev'),
                'section'   => 'sec_hero',
                'mime_type' => 'image'
            )
        ));
}

add_action('customize_register', 'code_dev_customizer');