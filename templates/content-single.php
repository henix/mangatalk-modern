<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>  

<header class="article-front">
  <?php // Retrieve cover image URL then set header's background
  if ( has_post_thumbnail() ) {
    $cover_img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
  ?>
  <section class="article-cover is-darkBackgrounded">
    <div id="cover-story" class="cover-image" style="background-image: url('<?php echo $cover_img_url; ?>');">
      <div class="cover-shade"></div>
      <div class="cover-content-container">
        <div class="cover-content ">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h2 class="entry-subtitle"><?php the_excerpt(); ?></h2>
            
          <h3 class="entry-comment-count alignright">
            By <?php echo get_the_author(); ?> &nbsp;
            <!-- <span class="glyphicon glyphicon-heart"></span> <?php echo get_comments_number(); ?>
            &nbsp; -->
            <?php comments_number( '', 
            '<span class="glyphicon glyphicon-comment"></span> 1', 
            '<span class="glyphicon glyphicon-comment"></span> %' ); ?>
          </h3>
        </div><!-- .cover-content -->
      </div><!-- .cover-content-container -->
    </div><!-- .cover-image -->
  </section><!-- .article-cover -->
  <?php 
  } else {
  ?>
    <section class="article-header article-header-no-cover">
      <h2 class="h2 entry-title"><?php the_title(); ?></h2>
    </section>
  <?php 
  }
    // echo '<section class="article-cover is-darkBackgrounded">' .
    //   '<div class="cover-image" style="background-image: url(' . $cover_img_url . ');">';
  
  ?>


  <?php 
  echo ""; 
  ?>
    
</header>




<div class="entry-content article-content-container" data-spy="scroll" data-target="#myScrollspy">
  <?php the_content(); ?>
</div>

<div class="entry-meta-container article-content-container">
  
  <?php get_template_part('templates/meta', 'relatedposts'); ?>
  <?php get_template_part('templates/meta', 'authorinfo'); ?>

  
  
  
  <div class="comments-root-container clearfix">
    <header class="meta-header author-info-header"> 留言讨论&emsp;|&emsp;Goings-On About Town</header>
    <div class="row">
      <?php comments_template('/templates/comments.php'); ?>
  
    <!-- <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside>
    <?php endif; ?> -->

    </div><!-- .row -->
  
  </div><!-- .comments-container -->
    
</div><!-- .entry-meta-container -->


</article>
<?php endwhile; ?>
