<?php
add_action( 'cmb2_admin_init', 'all_pages_repeater_field' );

function all_pages_repeater_field() {

    $cmb = new_cmb2_box( array(
        'id'            => 'page_sections_box',
        'title'         => 'Page Sections',
        'object_types'  => array( 'page' ), // সব পেজে শো করবে
    ) );

    $group_field_id = $cmb->add_field( array(
        'id'          => 'page_sections',
        'type'        => 'group',
        'description' => __( 'Add image, title and content for sections', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'Section {#}', 'cmb2' ),
            'add_button'    => __( 'Add Section', 'cmb2' ),
            'remove_button' => __( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

    // Image field
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'section_image',
        'type' => 'file',
    ) );

    // Title field
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Title',
        'id'   => 'section_title',
        'type' => 'text',
    ) );

    // Content field
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Content',
        'id'   => 'section_content',
        'type' => 'textarea_small',
    ) );
}
add_action( 'admin_menu', 'register_theme_options_menu_custom' );

function register_theme_options_menu_custom() {
    // Just a dummy page for parent
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'my_theme_options_parent',
        '__return_null', // No content here
        'dashicons-admin-generic',
        60
    );
}
add_action( 'cmb2_admin_init', 'register_intro_section_submenu_custom' );

function register_intro_section_submenu_custom() {
    $cmb = new_cmb2_box( array(
        'id'           => 'intro_section_options',
        'title'        => __( 'Intro Section', 'cmb2' ),
        'object_types' => array( 'options-page' ),
        'option_key'   => 'intro_section_options', // database option name
        'menu_title'   => 'Intro Section',
        'parent_slug'  => 'my_theme_options_parent', // THIS makes it sub-menu under our custom menu
    ) );

    // Group Field (Repeater)
    $group_field_id = $cmb->add_field( array(
        'id'          => 'intro_sections',
        'type'        => 'group',
        'description' => __( 'Add items for the intro section', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'Intro {#}', 'cmb2' ),
            'add_button'    => __( 'Add Intro', 'cmb2' ),
            'remove_button' => __( 'Remove Intro', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'section_image',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Title',
        'id'   => 'section_title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Content',
        'id'   => 'section_content',
        'type' => 'textarea_small',
    ) );
}
