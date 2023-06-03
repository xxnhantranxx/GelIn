
<?php
function s1_r1_c2($atts,$content){
    extract(shortcode_atts(array(
        'class' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="flipster">
        <ul class="flip-items">
            <?php echo do_shortcode($content); ?>
        </ul>
    </div>
      <ul class="pagination-wheel">
        <li class="item active" id="navi-index3"></li>
        <li class="item" id="navi-index1"></li>
        <li class="item" id="navi-index2"></li>
      </ul>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('s1_r1_c2', 's1_r1_c2');