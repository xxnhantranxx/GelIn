<?php
function s5_r2_c1($atts,$content){
    extract(shortcode_atts(array(
        'class' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="block-s5_r2_c1_bottom <?php echo $class; ?>">
        <div class="inner_block">
            <?php echo do_shortcode($content); ?>
        </div>
    </div>
    
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s5_r2_c1', 's5_r2_c1');