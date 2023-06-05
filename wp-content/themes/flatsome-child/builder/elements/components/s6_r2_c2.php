<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/accordion.svg';
add_ux_builder_shortcode('s6_r2_c2', array(
    'name'      => __('s6_r2_c2'),
    'category'  => __('GelIn'),
    'priority'  => 9,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'link' => array(
            'type' => 'textfield',
            'heading'  => __( 'Link', 'flatsome' ),
        ),
        'content' => array(
            'type' => 'textarea',
            'heading'  => __( 'Nội dung', 'flatsome' ),
            'full_width' => true,
        ),
    ),
));