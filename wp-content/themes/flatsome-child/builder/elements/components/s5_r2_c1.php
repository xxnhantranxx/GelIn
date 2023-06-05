<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/accordion.svg';
add_ux_builder_shortcode('s5_r2_c1', array(
    'type' => 'container',
    'allow' => array( 's5_r2_c1_item'),
    'name'      => __('s5_r2_c1'),
    'category'  => __('GelIn'),
    'priority'  => 7,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'class' => array(
            'type' => 'textfield',
            'heading'  => __( 'Class', 'flatsome' ),
        ),
    ),
));