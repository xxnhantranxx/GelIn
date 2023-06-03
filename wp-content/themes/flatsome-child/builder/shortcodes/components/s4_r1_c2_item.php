<?php
function s4_r1_c2_item($atts,$content){
    extract(shortcode_atts(array(
        'title' => '',
        'text_description' => '',
        'icon' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="s4_r1_c2_item_bottom">
            <div class="icon">
                <img src="<?php echo wp_get_attachment_image_url($icon,'full') ?>">
            </div>
            <div class="head-box"><?php echo $title; ?></div>
            <div class="description-box"><?php echo $text_description; ?></div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s4_r1_c2_item', 's4_r1_c2_item');