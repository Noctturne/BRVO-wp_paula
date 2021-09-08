<?php 
/**
 * BRVO Modding Theme Customizer
 * 
 * @package BRVO Modding
 */

 function brvo_modding_customizer( $wp_customize ){
    // Copyright section
    $wp_customize->add_section(
        'section_copyright', array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Section'
        )
    );

    // Field - Copyright Text Box
    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label' => 'Copyright',
            'description' => 'Add your copyright information here',
            'section' => 'section_copyright',
            'type' => 'text'
        )
    );
 }
 add_action( 'customize_register', 'brvo_modding_customizer' );
