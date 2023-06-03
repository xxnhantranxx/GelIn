<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/accordion.svg';
add_ux_builder_shortcode('s1_r1_c2', array(
    'type' => 'container',
    'allow' => array( 's1_r1_c2_item'),
    'name'      => __('s1_r1_c2'),
    'category'  => __('GelIn'),
    'priority'  => 2,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
        ),
    ),
));