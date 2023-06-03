<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/accordion.svg';
add_ux_builder_shortcode('s4_r1_c2', array(
    'type' => 'container',
    'allow' => array( 's4_r1_c2_item'),
    'name'      => __('s4_r1_c2'),
    'category'  => __('GelIn'),
    'priority'  => 5,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'text_color' => array(
            'type' => 'colorpicker',
            'heading'  => __( 'Màu nền', 'flatsome' ),
            'format'   => 'rgb',
            'position' => 'bottom right',
            'helpers'  => require( __DIR__ . '/../helpers/colors.php' ),
        ),
    ),
));