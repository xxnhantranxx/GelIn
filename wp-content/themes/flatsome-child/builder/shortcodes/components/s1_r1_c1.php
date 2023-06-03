<?php
function s1_r1_c1($atts,$content){
    extract(shortcode_atts(array(
        'id' => '',
        'title' => '',
        'duration_title' => '',
        'text_description' => '',
        'duration_description' => '',
        'delay_description' => '',
        'button' => '',
        'duration_button' => '',
        'delay_button' => '',
        'link_button' =>'javascript:void(0)',
    ), $atts));
    ob_start();
    ?>
    <div id="<?php echo $id; ?>">
        <div class="block-text-cta">
            <div class="headding-s1 wow fadeInUp" data-wow-duration="<?php echo $duration_title; ?>ms"><?php echo $title; ?></div>
            <div class="desc-s1 wow fadeInLeft" data-wow-delay="<?php echo $delay_description ?>ms" data-wow-duration="<?php echo $duration_description; ?>ms">
                <?php echo $text_description; ?>
            </div>
            <div class="btn-buynow wow fadeInUp" data-wow-delay="<?php echo $delay_button; ?>ms" data-wow-duration="<?php echo $duration_button; ?>ms">
                <a href="<?php echo $link_button; ?>"><span><?php echo $button; ?></span></a>
            </div>
        </div>
    </div>
    <?php echo do_shortcode($content); ?>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s1_r1_c1', 's1_r1_c1');