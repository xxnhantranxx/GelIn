<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('s4_r1_c2_item', array(
    'name'      => __('s4_r1_c2_item'),
    'category'  => __('GelIn'),
    'priority'  => 6,
    'thumbnail' =>  $link_img_ux_gallery,
    'wrap'   => false,
    'inline' => true,
    'overlay'   => true,
    'options' => array(
        'icon' => array(
            'type' => 'image',
            'heading' => __('Icon'),
            'default' => ''
        ),
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề',
            'full_width' => true,
        ),
        'text_description' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
    ),
));