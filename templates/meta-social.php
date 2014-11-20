<?php
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "http://i.imgur.com/6mmA2Mq.png";
  }
  
  $format_posttitle = get_the_title();
  $format_title = wp_title( '|', false, 'right' );
  $format_link = get_permalink();
  $format_excerpt = get_the_excerpt();
  // $weibo_link = 'http://service.weibo.com/share/share.php?appkey=1';
  $seg_post = "&url=".$format_link;
  $seg_wbid = "&ralateUid=2634774843";
  $seg_title = "&title=".$format_title;
  $seg_pic = "&pic=".$first_img;
  $weibo_link = 'http://service.weibo.com/share/share.php?appkey=1'.$seg_post.$seg_wbid.$seg_title.$seg_pic;
  // echo $weibo_link;
  
  $douban_link = "http://www.douban.com/share/service?image=".$first_img."&href=".$format_link."&name=".$format_title."&text=".$format_excerpt;
  
  $facebook_link = "https://twitter.com/intent/tweet?text=《".$format_posttitle."》来自漫言 MangaTalk  ".$format_link;
  
  $twitter_link = "https://twitter.com/intent/tweet?text=《".$format_posttitle."》来自漫言 MangaTalk  ".$format_link;
?>

<div class="entry-meta-spec">
<div class="row">
  <div class="col-xs-12 col-sm-6 entry-tags text-muted">
     <!-- <?php echo get_the_date(); ?>&nbsp; -->
     <?php the_tags( '', '', '' ); /* before, separator, after */ ?>
     <?php edit_post_link(); ?>
  </div>

  <div class="col-xs-12 col-sm-6 social-shares">
      <a class="social-button" href="<?php echo $twitter_link; ?>" target="_blank"> 分享到推特</a>
      <a class="social-button" href="<?php echo $weibo_link; ?>" target="_blank"> 分享到微博</a>
      <a class="social-button" href="<?php echo $douban_link; ?>" target="_blank"> 分享到豆瓣</a>
  </div>
</div>
</div>


