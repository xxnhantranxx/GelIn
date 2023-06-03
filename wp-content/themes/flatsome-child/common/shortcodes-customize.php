<?php
// shortcode Năm
function create_year()
{
  return date('Y');
}
add_shortcode('year', 'create_year');

// Custom share
function my_link_here()
{ ?>
  <div class="social-icons share-icons share-row relative">
    <span>Chia sẻ: </span>
    <div class="zalo-share-button" data-href="<?php echo get_permalink(); ?>" data-oaid="579745863508352884" data-customize=true></div>
    <a href="//www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip facebook tooltipstered"><i class="icon-facebook"></i></a>
    <a href="//twitter.com/share?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip twitter tooltipstered"><i class="icon-twitter"></i></a>
    <a href="//pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip pinterest tooltipstered"><i class="icon-pinterest"></i></a>
    <a href="//www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip linkedin tooltipstered"><i class="icon-linkedin"></i></a>
  </div>
<?php }
add_shortcode('my_link_shortcode', 'my_link_here');

function TroThanhDoiTac()
{ 
  ob_start();
  $urlRoot = home_url();
  ?>
    <a href="<?php echo get_field('link_partner','option'); ?>" target="_blank" class="btn-goto-partner">
      <span>Trở thành đối tác</span>
    </a>
<?php
$contentShortcode = ob_get_contents();
ob_end_clean();
return $contentShortcode;
}
add_shortcode('TroThanhDoiTac', 'TroThanhDoiTac');
