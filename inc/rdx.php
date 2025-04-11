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