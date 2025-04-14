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
// Footer Main Section
Redux::set_section( $opt_name, array(
    'title'    => 'Footer',
    'id'       => 'footer_section',
    'icon'     => 'el-icon-cogs',
    'heading'  => 'Expanded New Section Title',
    'desc'     => '<br />This is the section description. HTML is permitted.<br />',
    'fields'   => array(
        array(
            'id'    => '',
            'type'  => 'text',
            'title' => 'A sample text box',
        ),
    ),
) );

// Footer About Subsection
Redux::set_section( $opt_name, array(
    'title'       => 'Footer About',
    'id'          => 'footer_about',
    'subsection'  => true,
    'icon'        => 'el el-plus',
    'heading'     => 'Expanded New Section Title',
    'desc'        => '<br />This is the section description. HTML is permitted.<br />',
    'fields'      => array(
        array(
            'id'    => 'footer_logo',
            'type'  => 'media',
            'title' => 'Logo',
        ),
        array(
            'id'    => 'footer_content',
            'type'  => 'textarea',
            'title' => 'Footer Content',
        ),
        array(
            'id'       => 'footer_card',
            'type'     => 'slides',
            'title'    => __( 'Footer Card', 'neuron' ),
            'subtitle' => __( 'Upload images and enter details for the slider', 'neuron' ),
            'desc'     => __( 'Each slide can have an image, title, description, and a button.', 'neuron' ),
            'placeholder' => array(
                'title'       => __( 'Slide Title', 'neuron' ),
                'description' => __( 'Slide Description', 'neuron' ),
                'url'         => __( 'Button URL', 'neuron' ),
            ),
            'show' => array(
                'title'       => false,
                'description' => false,
                'url'         => true,
            ),
        ),
    ),
) );
Redux::set_section( $opt_name, array(
    'title'       => 'Footer Copyright',
    'subsection'  => true,
    'icon'        => 'el el-minus',
    'heading'     => 'Expanded New Section Title',
    'desc'        => '<br />This is the section description. HTML is permitted.<br />',
    'fields'      => array(
        array(
            'id'    => 'footer_copyright',
            'type'  => 'text',
            'title' => 'Copyright',
        ),
    ),
) );


