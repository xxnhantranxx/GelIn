<?php
function s3_sl1_c1($atts){
    extract(shortcode_atts(array(
        'text_title' => '',
        'text_description' => '',
        'link' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="text_boxs3">
        <div class="title-s3"><?php echo $text_title; ?></div>
        <div class="desc-s3"><?php echo $text_description; ?></div>
        <div class="readmore-s3"><a href="<?php echo $link; ?>">Tìm hiểu thêm</a></div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s3_sl1_c1', 's3_sl1_c1');