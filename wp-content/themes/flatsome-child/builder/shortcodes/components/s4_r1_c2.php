<?php
function s4_r1_c2($atts,$content){
    extract(shortcode_atts(array(
        'text_color' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="block-s4_r1_c2_bottom" style="background:<?php echo $text_color; ?>">
        <div class="inner_block">
            <?php echo do_shortcode($content); ?>
        </div>
    </div>
    
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s4_r1_c2', 's4_r1_c2');