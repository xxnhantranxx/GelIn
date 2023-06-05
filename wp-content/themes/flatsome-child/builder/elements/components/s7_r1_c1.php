<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/accordion.svg';
add_ux_builder_shortcode('s7_r1_c1', array(
    'type' => 'container',
    'allow' => array( 'contact-form-7'),
    'name'      => __('s7_r1_c1'),
    'category'  => __('GelIn'),
    'priority'  => 10,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'class' => array(
            'type' => 'textfield',
            'heading'  => __( 'Class', 'flatsome' ),
        ),
        'head' => array(
            'type' => 'textfield',
            'heading'  => __( 'Tiêu đề', 'flatsome' ),
            'full_width' => true
        ),
        'desc' => array(
            'type' => 'textarea',
            'heading'  => __( 'Mô tả', 'flatsome' ),
            'full_width' => true
        ),
    ),
));