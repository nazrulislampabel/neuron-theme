<?php
add_action( 'cmb2_init', 'cmb2_add_conatact_metabox' );
function cmb2_add_conatact_metabox() {

    $prefix = '_neuron_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'contact_sidebar',
        'title'        => __( 'contact sidebar', 'neuron' ),
        'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );

    $cmb->add_field( array(
        'name' => __( 'location', 'neuron' ),
        'id' => $prefix . 'location',
        'type' => 'textarea',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Contact', 'neuron' ),
        'id' => $prefix . 'contact',
        'type' => 'textarea',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Email', 'neuron' ),
        'id' => $prefix . 'email',
        'type' => 'textarea',
    ) );

}