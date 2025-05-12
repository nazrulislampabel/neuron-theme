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
        'id'   => 'brand_image',
        'type' => 'file',
    ) );
    $cmb->add_group_field( 'brand_section', array(
        'name' => 'Brand Url',
        'id'   => 'brand_url',
        'type' => 'text_url',
    ) );
    // ✅ Service Section (Repeater)
    $cmb->add_field( array(
        'name' => 'Service Section Title',
        'id'   => 'Service_title',
        'type' => 'text',
        'desc' => 'Add Service section heading'
    ) );
    $cmb->add_field( array(
        'name' => 'Service Section Sub Title',
        'id'   => 'Service_sub_title',
        'type' => 'textarea_small',
        'desc' => 'Add Service section heading'
    ) );
    $cmb->add_field( array(
        'name' => 'Add Single service',
        'id'   => 'Single_service',
        'type' => 'group',
        'desc' => 'Add Service section heading',
        'options'     => array(
            'group_title'   => __( 'Service {#}', 'cmb2' ),
            'add_button'    => __( 'Add Service', 'cmb2' ),
            'remove_button' => __( 'Remove Service', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
    $cmb->add_group_field('Single_service',array(
        'name' => 'Add single service image',
        'id'   => 'Single_service_image',
        'type' => 'file',
        'desc' => 'Add Single Service image'
    ) );
    $cmb->add_group_field( 'Single_service',array(
        'name' => 'Add single service title',
        'id'   => 'Single_service_title',
        'type' => 'text',
        'desc' => 'Add Single Service title'
    ) );
    $cmb->add_group_field('Single_service', array(
        'name' => 'Add single service content',
        'id'   => 'Single_service_content',
        'type' => 'textarea_small',
        'desc' => 'Add Single Service content'
    ) );

}
add_action('cmb2_admin_init', 'newsletter_footer_options');
function newsletter_footer_options() {
    $options = new_cmb2_box(array(
        'id'           => 'newsletter_options',
        'title'        => __('Newsletter Settings', 'cmb2'),
        'object_types' => array('options-page'),
        'option_key'   => 'newsletter_footer_options',
        'icon_url'     => 'dashicons-email-alt2',
    ));

    $options->add_field(array(
        'name' => 'Title',
        'id'   => 'newsletter_title',
        'type' => 'text',
        'default' => 'NewsLetter Subscription',
    ));

    $options->add_field(array(
        'name' => 'Subtitle',
        'id'   => 'newsletter_subtitle',
        'type' => 'textarea_small',
        'default' => 'Subscribe to get the latest news, update and offer information. Don\'t worry, we won\'t send spam!',
    ));

    $options->add_field(array(
        'name' => 'Email Placeholder',
        'id'   => 'newsletter_placeholder',
        'type' => 'text',
        'default' => 'Your Email Please!',
    ));
}

//About Page Meta box

add_action( 'cmb2_admin_init', 'about_page_metabox' );
function about_page_metabox() {
    $cmb = new_cmb2_box( array(
        'id'           => 'accordion',
        'title'        => 'About Page Fields',
        'object_types' => array( 'page' ),
        'show_on'      => array(
            'key' => 'id',
            'value' => 39
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Accordion box',
        'id'   => 'accordion_box',
        'type' => 'group',
        'options' => array(
            'add_button'    => __( 'Add Accordion', 'cmb2' ),
            'remove_button' => __( 'Remove Accordion', 'cmb2' ),
            'sortable'      => true,
            'closed'        => true,
        ),
    ) );

    $cmb->add_group_field('accordion_box', array(
        'name' => 'Accordion Title',
        'id'   => 'accordion_title',
        'type' => 'text',
    ));


    $cmb->add_group_field('accordion_box', array(
        'name' => 'Accordion content',
        'id'   => 'accordion_content',
        'type' => 'textarea_small',
    ) );
    $cmb->add_field( array(
        'name' => 'Accordion heading',
        'id'   => 'accordion_heading',
        'type' => 'text',
    ) );
    $cmb->add_field( array(
        'name' => 'Accordion Sub Heading',
        'id'   => 'accordion_sub_heading',
        'type' => 'textarea_small',
    ) );
}

//service page box

function service_block_metabox(){
        $cmb = new_cmb2_box( array(
            'id'           => 'service_metabox',
            'title'        => __('Service Details', 'cmb2'),
            'object_types' => array('page'), // For pages
            'show_on'      => array(
                'key' => 'id',
                'value' => 41
            ),
        ) );
        //service page block
        $cmb->add_field( array(
            'name' => 'Block Image',
            'id'   => 'service_block_image',
            'type' => 'file',
        ) );

        $cmb->add_field( array(
            'name' => 'Block Title',
            'id'   => 'service_block_title',
            'type' => 'text',
        ) );

        $cmb->add_field( array(
            'name' => 'Block Content',
            'id'   => 'service_block_content',
            'type' => 'textarea_small',
        ) );
}
add_action('cmb2_admin_init','service_block_metabox');

add_action('cmb2_admin_init', 'portfolio_custom_fields');
function portfolio_custom_fields() {
    $cmb = new_cmb2_box(array(
        'id'            => 'portfolio_metabox',
        'title'         => __('Portfolio Info', 'neuron'),
        'object_types'  => array('portfolio'), // CPT target
    ));

    $cmb->add_field(array(
        'name' => 'Portfolio Image',
        'id'   => 'portfolio_img',
        'type' => 'file',
    ));

    $cmb->add_field(array(
        'name' => 'Author Name',
        'id'   => 'portfolio_author',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Client Name',
        'id'   => 'client_name',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Client Designation',
        'id'   => 'client_designation',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => 'Completed Date',
        'id'   => 'completed_date',
        'type' => 'text_date',
    ));
    $cmb->add_field(array(
        'name' => 'Skills',
        'id'   => 'skills',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => 'Website Url',
        'id'   => 'web_url',
        'type' => 'text_url',
    ));
    $cmb->add_field(array(
        'name' => 'Website Type',
        'id'   => 'web_type',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => 'Client Feedback',
        'id'   => 'client_fdb',
        'type' => 'textarea_small',
    ));
}

