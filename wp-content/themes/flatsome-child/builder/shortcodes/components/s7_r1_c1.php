<?php
function s7_r1_c1($atts,$content){
    extract(shortcode_atts(array(
        'class' => '',
        'head' => '',
        'desc' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="block-s7_r1_c1 <?php echo $class; ?>">
        <div class="inner_block">
            <div class="headding-s7"><?php echo $head; ?></div>
            <div class="desc_s7"><?php echo $desc; ?></div>
            <?php echo do_shortcode($content); ?>
        </div>
    </div>
    
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s7_r1_c1', 's7_r1_c1');