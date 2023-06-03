<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('s1_r1_c1', array(
    'name'      => __('s1_r1_c1'),
    'category'  => __('GelIn'),
    'priority'  => 1,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'id' => array(
            'type' => 'textfield',
            'heading' => 'Id',
            'full_width' => true,
        ),
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề',
            'full_width' => true,
        ),
        'duration_title' => array(
            'type' => 'slider',
            'heading' => __( 'Thời gian'),
            'default' => 0,
            'unit'    => 'ms',
            'max' => 5000,
            'min' => 0,
        ),
        'text_description' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'duration_description' => array(
            'type' => 'slider',
            'heading' => __( 'Thời gian'),
            'default' => 0,
            'unit'    => 'ms',
            'max' => 5000,
            'min' => 0,
        ),
        'delay_description' => array(
            'type' => 'slider',
            'heading' => __( 'Độ trễ'),
            'default' => 0,
            'unit'    => 'ms',
            'max' => 5000,
            'min' => 0,
        ),
        'button' => array(
            'type' => 'textfield',
            'heading' => 'Nút',
            'full_width' => true,
        ),
        'duration_button' => array(
            'type' => 'slider',
            'heading' => __( 'Thời gian'),
            'default' => 0,
            'unit'    => 'ms',
            'max' => 5000,
            'min' => 0,
        ),
        'delay_button' => array(
            'type' => 'slider',
            'heading' => __( 'Độ trễ'),
            'default' => 0,
            'unit'    => 'ms',
            'max' => 5000,
            'min' => 0,
        ),
        'link_button' => array(
            'type' => 'textfield',
            'heading' => 'Link Nút',
            'full_width' => true,
        ),
    ),
));