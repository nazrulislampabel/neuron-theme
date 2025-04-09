<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = 'neuron_option';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name'         => $theme->get( 'Name' ),
    'display_version'      => $theme->get( 'Version' ),
    'menu_title'           => esc_html__( 'Page section', 'neuron' ),
    'customizer'           => true,
);

Redux::set_args( $opt_name, $args );
Redux::set_section( $opt_name, array(
    'title'  => __( 'Slider Settings', 'neuron' ),
    'id'     => 'slider_settings',
    'desc'   => __( 'Manage your homepage slider', 'neuron' ),
    'icon'   => 'el el-picture',
    'fields' => array(
        array(
            'id'       => 'home_slider',
            'type'     => 'slides',
            'title'    => __( 'Homepage Slider', 'neuron' ),
            'subtitle' => __( 'Upload images and enter details for the slider', 'neuron' ),
            'desc'     => __( 'Each slide can have an image, title, description, and a button.', 'neuron' ),
            'placeholder' => array(
                'title'       => __( 'Slide Title', 'neuron' ),
                'description' => __( 'Slide Description', 'neuron' ),
                'url'         => __( 'Button URL', 'neuron' ),
            )
        ),
    )
));



// রিপিটেবল গ্রুপ ফিল্ড তৈরি
Redux::set_Section( $opt_name, array(
    'title' => 'Repeater Field Example',
    'id'    => 'repeater_example',
    'desc'  => 'This is an example of a repeater field.',
    'icon'  => 'el el-arrow-right',
    'fields' => array(
        array(
            'id'       => 'my_repeater_field',
            'type'     => 'repeater',
            'title'    => 'Repeater Field',
            'desc'     => 'This is a repeater field.',
            'subtitle' => 'Drag to reorder items.',
            'group_values' => true, // Group all fields below within the repeater ID
            'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
            'bind_title'   => '', // Bind the repeater block title to this field ID
            //'static'       => 2, // Set the number of repeater blocks to be output
            'limit'        => 3, // Limit the number of repeater blocks a user can create
            'sortable'     => true, // Allow the users to sort the repeater blocks or not
            'default'  => array(
                array( 'name' => 'Item 1', 'url' => 'http://example.com' ),
                array( 'name' => 'Item 2', 'url' => 'http://example.com' ),
            ),
            'fields' => array(
                array(
                    'id'       => 'repeater_name',
                    'type'     => 'text',
                    'title'    => 'Name',
                ),
                array(
                    'id'       => 'repeater_url',
                    'type'     => 'text',
                    'title'    => 'URL',
                ),
            ),
        ),
    ),
) );


