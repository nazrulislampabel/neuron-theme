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

    // ✅ Block Section (Repeater)
    $cmb->add_field( array(
        'id'          => 'block_section',
        'type'        => 'group',
        'description' => __( 'Add block items', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'Block {#}', 'cmb2' ),
            'sortable'      => false,
        ),
    ) );

    $cmb->add_group_field( 'block_section', array(
        'name' => 'Block Image',
        'id'   => 'image',
        'type' => 'file',
    ) );

    $cmb->add_group_field( 'block_section', array(
        'name' => 'Block Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( 'block_section', array(
        'name' => 'Block Content',
        'id'   => 'content',
        'type' => 'textarea_small',
    ) );
}
