<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('s5_r2_c1_item', array(
    'name'      => __('s5_r2_c1_item'),
    'category'  => __('GelIn'),
    'priority'  => 8,
    'thumbnail' =>  $link_img_ux_gallery,
    'wrap'   => false,
    'inline' => true,
    'overlay'   => true,
    'options' => array(
        'img' => array(
            'type' => 'image',
            'heading' => __('Icon'),
            'default' => ''
        ),
        'download' => array(
            'type' => 'textfield',
            'heading' => 'Đường dẫn download',
            'full_width' => true,
        ),
    ),
));