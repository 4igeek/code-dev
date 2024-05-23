<?php

function code_dev_customizer( $wp_customize ){
    // This section is for copyright information
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
    );

        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => 'Copyright © 2024 - All rights reserved',
                'sanitize_callback' => 'sanitize_text_field'

            )
        );

        $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => 'Copyright Information',
                'description' => 'Type your copyright info here',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
        );
}

add_action('customize_register', 'code_dev_customizer');