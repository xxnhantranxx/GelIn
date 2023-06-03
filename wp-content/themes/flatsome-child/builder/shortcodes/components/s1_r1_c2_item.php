<?php
function s1_r1_c2_item($atts){
    extract(shortcode_atts(array(
        'img' => '',
    ), $atts));
    ob_start();
    ?>
    <li>
        <a href="javascript:void(0)" class="Button Block">
            <img src="<?php echo wp_get_attachment_image_url($img,'full') ?>" alt="">
        </a>
    </li>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s1_r1_c2_item', 's1_r1_c2_item');