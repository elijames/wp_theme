<?php
/**
 * Get Theme Customizer Fields
 *
 * @package		Theme_Customizer_Boilerplate
 * @copyright	Copyright (c) 2013, Slobodan Manic
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 * @author		Slobodan Manic
 *
 * @since		Theme_Customizer_Boilerplate 1.0
 */
/**
 * Helper function that holds array of theme options.
 *
 * @return	array	$options	Array of theme options
 * @uses	thsp_get_theme_customizer_fields()	defined in customizer/helpers.php
 */
function thsp_cbp_get_fields() {
    /*
     * Using helper function to get default required capability
     */
    $thsp_cbp_capability = thsp_cbp_capability();

    $options = array(

        // Section ID
        'theme_options' => array(

            /*
             * We're checking if this is an existing section
             * or a new one that needs to be registered
             */
            'existing_section' => false,
            /*
             * Section related arguments
             * Codex - http://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section
             */
            'args' => array(
                'title' => __( 'Theme Options', 'my_theme_textdomain' ),
                'description' => __( 'Theme Options', 'my_theme_textdomain' ),
                'priority' => 1
            ),

            /*
             * This array contains all the fields that need to be
             * added to this section
             */
            'fields' => array(
                'header_tagline' => array(
                    /*
                     * Setting related arguments
                     * Codex - http://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting
                     */
                    'setting_args' => array(
                        'default' => __( 'Header Tagline', 'my_theme_textdomain' ),
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),
                    /*
                     * Control related arguments
                     * Codex - http://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
                     */
                    'control_args' => array(
                        'label' => __( 'Header Tagline', 'my_theme_textdomain' ),
                        'type' => 'text', // Text field control
                        'priority' => 1
                    )
                ),
                'header_image_upload' => array(
                    'setting_args' => array(
                        'default' => '',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),
                    'control_args' => array(
                        'label' => __( 'Upload Header Image', 'my_theme_textdomain' ),
                        'type' => 'image', // Image upload field control
                        'priority' => 2
                    )
                ),
                'header_image_position_x' => array(
                    'setting_args' => array(
                        'default' => '0',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),
                    'control_args' => array(
                        'label' => __( 'Header Image Position X Axis', 'my_theme_textdomain' ),
                        'type' => 'radio', // Radio control
                        'choices' => array(
                            '0' => array(
                                'label' => __( '0%', 'my_theme_textdomain' )
                            ),
                            '1' => array(
                                'label' => __( '10%', 'my_theme_textdomain' )
                            ),
                            '2' => array(
                                'label' => __( '20%', 'my_theme_textdomain' )
                            ),
                            '3' => array(
                                'label' => __( '30%', 'my_theme_textdomain' )
                            ),
                            '4' => array(
                                'label' => __( '40%', 'my_theme_textdomain' )
                            ),
                            '5' => array(
                                'label' => __( '50%', 'my_theme_textdomain' )
                            ),
                            '6' => array(
                                'label' => __( '60%', 'my_theme_textdomain' )
                            ),
                            '7' => array(
                                'label' => __( '70%', 'my_theme_textdomain' )
                            ),
                            '8' => array(
                                'label' => __( '80%', 'my_theme_textdomain' )
                            ),
                            '9' => array(
                                'label' => __( '90%', 'my_theme_textdomain' )
                            ),
                            '10' => array(
                                'label' => __( '100%', 'my_theme_textdomain' )
                            )

                        ),
                        'priority' => 3
                    )


                ),
                'header_image_position_y' => array(
                    'setting_args' => array(
                        'default' => '0',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),
                    'control_args' => array(
                        'label' => __( 'Header Image Position Y Axis', 'my_theme_textdomain' ),
                        'type' => 'radio', // Radio control
                        'choices' => array(
                            '0' => array(
                                'label' => __( '0%', 'my_theme_textdomain' )
                            ),
                            '1' => array(
                                'label' => __( '10%', 'my_theme_textdomain' )
                            ),
                            '2' => array(
                                'label' => __( '20%', 'my_theme_textdomain' )
                            ),
                            '3' => array(
                                'label' => __( '30%', 'my_theme_textdomain' )
                            ),
                            '4' => array(
                                'label' => __( '40%', 'my_theme_textdomain' )
                            ),
                            '5' => array(
                                'label' => __( '50%', 'my_theme_textdomain' )
                            ),
                            '6' => array(
                                'label' => __( '60%', 'my_theme_textdomain' )
                            ),
                            '7' => array(
                                'label' => __( '70%', 'my_theme_textdomain' )
                            ),
                            '8' => array(
                                'label' => __( '80%', 'my_theme_textdomain' )
                            ),
                            '9' => array(
                                'label' => __( '90%', 'my_theme_textdomain' )
                            ),
                            '10' => array(
                                'label' => __( '100%', 'my_theme_textdomain' )
                            )

                        ),
                        'priority' => 4
                    )


                ),

                'mobile_logo_upload' => array(
                    'setting_args' => array(
                        'default' => '',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),

                    'control_args' => array(
                        'label' => __( 'Mobile Logo upload', 'my_theme_textdomain' ),
                        'type' => 'image', // Image upload field control
                        'priority' => 5
                    )
                ) ,

                'footer_background_upload' => array(
                    'setting_args' => array(
                        'default' => '',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),

                    'control_args' => array(
                        'label' => __( 'Footer Background upload', 'my_theme_textdomain' ),
                        'type' => 'image', // Image upload field control
                        'priority' => 6
                    )
                ),
                'footer_image_position_x' => array(
                    'setting_args' => array(
                        'default' => '0',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),
                    'control_args' => array(
                        'label' => __( 'Footer Image Position X Axis', 'my_theme_textdomain' ),
                        'type' => 'radio', // Radio control
                        'choices' => array(
                            '0' => array(
                                'label' => __( '0%', 'my_theme_textdomain' )
                            ),
                            '1' => array(
                                'label' => __( '10%', 'my_theme_textdomain' )
                            ),
                            '2' => array(
                                'label' => __( '20%', 'my_theme_textdomain' )
                            ),
                            '3' => array(
                                'label' => __( '30%', 'my_theme_textdomain' )
                            ),
                            '4' => array(
                                'label' => __( '40%', 'my_theme_textdomain' )
                            ),
                            '5' => array(
                                'label' => __( '50%', 'my_theme_textdomain' )
                            ),
                            '6' => array(
                                'label' => __( '60%', 'my_theme_textdomain' )
                            ),
                            '7' => array(
                                'label' => __( '70%', 'my_theme_textdomain' )
                            ),
                            '8' => array(
                                'label' => __( '80%', 'my_theme_textdomain' )
                            ),
                            '9' => array(
                                'label' => __( '90%', 'my_theme_textdomain' )
                            ),
                            '10' => array(
                                'label' => __( '100%', 'my_theme_textdomain' )
                            )

                        ),
                        'priority' => 7
                    )


                ),
                'footer_image_position_y' => array(
                    'setting_args' => array(
                        'default' => '0',
                        'type' => 'option',
                        'capability' => $thsp_cbp_capability,
                        'transport' => 'refresh',
                    ),
                    'control_args' => array(
                        'label' => __( 'Footer Image Position Y Axis', 'my_theme_textdomain' ),
                        'type' => 'radio', // Radio control
                        'choices' => array(
                            '0' => array(
                                'label' => __( '0%', 'my_theme_textdomain' )
                            ),
                            '1' => array(
                                'label' => __( '10%', 'my_theme_textdomain' )
                            ),
                            '2' => array(
                                'label' => __( '20%', 'my_theme_textdomain' )
                            ),
                            '3' => array(
                                'label' => __( '30%', 'my_theme_textdomain' )
                            ),
                            '4' => array(
                                'label' => __( '40%', 'my_theme_textdomain' )
                            ),
                            '5' => array(
                                'label' => __( '50%', 'my_theme_textdomain' )
                            ),
                            '6' => array(
                                'label' => __( '60%', 'my_theme_textdomain' )
                            ),
                            '7' => array(
                                'label' => __( '70%', 'my_theme_textdomain' )
                            ),
                            '8' => array(
                                'label' => __( '80%', 'my_theme_textdomain' )
                            ),
                            '9' => array(
                                'label' => __( '90%', 'my_theme_textdomain' )
                            ),
                            '10' => array(
                                'label' => __( '100%', 'my_theme_textdomain' )
                            )

                        ),
                        'priority' => 8
                    )


                ),
            )


        )
    );

    /*
     * 'thsp_cbp_options_array' filter hook will allow you to
     * add/remove some of these options from a child theme
     */
    return apply_filters( 'thsp_cbp_options_array', $options );

}