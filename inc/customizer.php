<?php 
/**
 * BRVO Modding Theme Customizer
 * 
 * @package BRVO Modding
 */

 function brvo_modding_customizer( $wp_customize ){
/*          --------- HOME PAGE ---------           */


        $wp_customize->add_section(
            'section_home_page', array( 
                'title' => 'Home Page Products Settings',
                'description' => 'Home Page Section'
            )
        );
        /* ----- POPULAR PRODUCTS ----- */
            // Popular products title
            $wp_customize->add_setting(
                'set_popular_title', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_popular_title', array( 
                    'label' => 'Popular products Title',
                    'description' => 'Popular Products Title',
                    'section' => 'section_home_page',
                    'type' => 'text'
                )
            );

            // Popular products Limit
            $wp_customize->add_setting(
                'set_popular_max_num', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_popular_max_num', array( 
                    'label' => 'Popular Products Max Number',
                    'description' => 'Popular products max number',
                    'section' => 'section_home_page',
                    'type' => 'number'
                )
            );

            // Popular products Columns
            $wp_customize->add_setting(
                'set_popular_max_col', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_popular_max_col', array( 
                    'label' => 'Popular Products Max Columns',
                    'description' => 'Popular products max columns',
                    'section' => 'section_home_page',
                    'type' => 'number'
                )
            );

        /* ----- NEW ARRIVALS ----- */
            // New arrivals title
            $wp_customize->add_setting(
                'set_new_arrivals_title', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_new_arrivals_title', array( 
                    'label' => 'New Arrivals Title',
                    'description' => 'New Arrivals Title',
                    'section' => 'section_home_page',
                    'type' => 'text'
                )
            );

            // New arrivals Limit
            $wp_customize->add_setting(
                'set_new_arrivals_max_num', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_new_arrivals_max_num', array( 
                    'label' => 'New Arrivals Max Number',
                    'description' => 'New Arrivals max number',
                    'section' => 'section_home_page',
                    'type' => 'number'
                )
            );

            // New Arrivals Columns
            $wp_customize->add_setting(
                'set_new_arrivals_max_col', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_new_arrivals_max_col', array( 
                    'label' => 'New Arrivals Max Columns',
                    'description' => 'New Arrivals max columns',
                    'section' => 'section_home_page',
                    'type' => 'number'
                )
            );



/*          --------- FOOTER ---------           */      
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
