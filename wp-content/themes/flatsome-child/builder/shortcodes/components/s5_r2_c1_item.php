<?php
function s5_r2_c1_item($atts,$content){
    extract(shortcode_atts(array(
        'download' => '',
        'img' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="s5_r2_c1_item">
        <div class="icon">
            <img src="<?php echo wp_get_attachment_image_url($img,'full') ?>">
        </div>
        <div class="shape_over">
            <a href="<?php echo $download; ?>" class="d-block" download>
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Download.png">
                <div class="label_download">Tải xuống</div>
            </a>
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s5_r2_c1_item', 's5_r2_c1_item');