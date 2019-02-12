<?php
/*
 Main Template File for displaying all blog posts by default */

  get_header();
?>

<div class="post-signature"><span>arielminphotography blog</span></div>
<div class="post-container">
  <div class="post-category"><h4><?php the_category('  ,  '); ?></h4></div>
  <div class="post-title"><h1><?php the_title(); ?></h1></div>
  <div class="post-date"><h4><?php echo get_the_date(); ?></h4></div>
  <div class="post-vline"></div>
  <div class="post-feature-img">
    <?php the_post_thumbnail('large'); ?>
  </div>
  <div class="post-break"></div>
  <div class="post-content">
    <p class="summary"><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?></p>
  </div>
  <div class="blog-tags">
    <p>filed in: <?php the_category('  ,  '); ?></p>
  </div>
  <div class="post-nav">
    <a class="btn-main btn-sm btn-light" href="<?php bloginfo('url') ?>/blog">back to index</a>
  </div>
</div>

<?php get_footer(); ?>
