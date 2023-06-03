<?php
$link_img_forms = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/forms.svg';
add_ux_builder_shortcode('s1_r1_c2_item', array(
    'name'      => __('s1_r1_c2_item'),
    'category'  => __('GelIn'),
    'priority'  => 3,
    'thumbnail' =>  $link_img_forms,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'img' => array(
            'type' => 'image',
            'heading' => __('Image'),
            'default' => ''
        ),
    ),
));