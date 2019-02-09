<?php
/* Template for Blog Index Page */

  get_header();
?>



<div class="header">
  <div class="header-blog">
    <h1>the blog</h1>
    <div class="header-category">
      <h2>browse by category</h2>
      <ul class="category-items">
        <li><a>weddings</a></li>
        <li><a>engagements</a></li>
        <li><a>styled shoots</a></li>
        <li><a>portraits</a></li>
        <li><a>other</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="main-blog">
      <div class="blog-posts">
        <?php if (has_post_thumbnail()) : ?>
        <div class="blog-date"><h4>jan 25</h4></div>
        <div class="blog-img">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php else : ?>

      <?php endif; ?>
        <div class="blog-summary">
          <div class="blog-title">
            <h3><a href="<?php the_permalink(); ?>" class="category-title-link"><?php the_title(); ?></a></h3>
            <div class="line-break"></div>
          </div>
          <div class="blog-content">
            <p><?php the_excerpt(); ?> </p>
            <button class="btn-main btn-sm btn-light"><a href="<?php the_permalink(); ?>">Read More</a></button>
            <div class="blog-tags">
              <p><span>filed in:</span><a><?php the_category('  ,  '); ?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>

<?php else : ?>

<article class="no-posts">

    <h1>No posts were found.</h1>

</article>

<?php endif; ?>


<?php get_footer(); ?>
