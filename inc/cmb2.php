<?php

add_action( 'cmb2_admin_init', 'custom_theme_options' );

function custom_theme_options() {
    $cmb = new_cmb2_box( array(
        'id'           => 'theme_options_box',
        'title'        => __( 'Theme Options', 'cmb2' ),
        'object_types' => array( 'options-page' ),
        'option_key'   => 'theme_options',
    ) );

    // ✅ intro Section (Repeater)
    $cmb->add_field( array(
        'id'          => 'intro_section',
        'type'        => 'group',
        'description' => __( 'Add your intros here', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'intro {#}', 'cmb2' ),
            'add_button'    => __( 'Add Another intro', 'cmb2' ),
            'remove_button' => __( 'Remove intro', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

    $cmb->add_group_field( 'intro_section', array(
        'name' => 'intro Image',
        'id'   => 'image',
        'type' => 'file',
    ) );

    $cmb->add_group_field( 'intro_section', array(
        'name' => 'intro Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( 'intro_section', array(
        'name' => 'intro Content',
        'id'   => 'content',
        'type' => 'textarea_small',
    ) );
// 🔹 Block Section Title/Header
    $cmb->add_field( array(
        'name' => 'Block Section (Single)',
        'id'   => 'block_section_title',
        'type' => 'title',
        'desc' => 'Add a single block with image, title and content',
    ) );

// 🔹 Block Section (Single Fields)
    $cmb->add_field( array(
        'name' => 'Block Image',
        'id'   => 'single_block_image',
        'type' => 'file',
    ) );

    $cmb->add_field( array(
        'name' => 'Block Title',
        'id'   => 'single_block_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Block Content',
        'id'   => 'single_block_content',
        'type' => 'textarea_small',
    ) );
    // ✅ Brand Section (Repeater)
    $cmb->add_field( array(
        'id'          => 'brand_section',
        'type'        => 'group',
        'description' => __( 'Add brand logos', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'Brand {#}', 'cmb2' ),
            'add_button'    => __( 'Add Brand', 'cmb2' ),
            'remove_button' => __( 'Remove Brand', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

    $cmb->add_group_field( 'brand_section', array(
        'name' => 'Brand Image',
        'id'   => 'image',
        'type' => 'file',
    ) );
}

/*
* service
*/
add_action( 'cmb2_admin_init', 'service_add_metabox' );
function service_add_metabox() {

    $prefix = '_neuron_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'service_metabox',
        'title'        => __( 'Service Settings', 'cmb2' ),
        'object_types' => array( 'options-page' ),
        'option_key'   => 'theme_options',
        'parent_slug'  => 'themes.php',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Service Section Title', 'cmb2' ),
        'id'   => $prefix . 'service',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Single Service Icon', 'cmb2' ),
        'id'   => $prefix . 'single_service_icon',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Single Service Title', 'cmb2' ),
        'id'   => $prefix . 'single_service_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Single Service Content', 'cmb2' ),
        'id'   => $prefix . 'single_service_content',
        'type' => 'text',
    ) );

}
