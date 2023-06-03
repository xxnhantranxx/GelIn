<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('s3_sl1_c1', array(
    'name'      => __('s3_sl1_c1'),
    'category'  => __('GelIn'),
    'priority'  => 5,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'text_title' => array(
            'type' => 'textarea',
            'heading' => 'Tiêu đề',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'text_description' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => 'Đường dẫn',
            'full_width' => true,
        ),
    ),
));