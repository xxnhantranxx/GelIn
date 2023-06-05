<?php
function s6_r2_c2($atts){
    extract(shortcode_atts(array(
        'link' => '',
        'content' => ''
    ), $atts));
    ob_start();
    ?>
    <div class="block-s6_r2_c2 <?php echo $class; ?>">
        <a href="<?php echo $link; ?>">Xem thêm</a>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s6_r2_c2', 's6_r2_c2');