<?php
/* Template for Category Index Page */

  get_header();
?>

<div class="header">
  <div class="header-blog">
    <div class="category-title">
      <p>Category</p>
      <h2 class="cursive"><?php single_cat_title(); ?></h2>
    </div>
    <div class="header-category">
      <h2>browse by categories</h2>
      <ul class="category-items">
        <?php
    			// get all the categories from the database
    			$cats = get_categories();
          $categories = get_categories();
            foreach ($categories as $cat) {
               $category_link = get_category_link($cat->cat_ID);
               echo '<li><a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a></li>';
            } ?>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="main-blog">
      <div class="blog-posts">
        <?php if (has_post_thumbnail()) : ?>
        <div class="blog-date"><h4><?php echo get_the_date(); ?></h4></div>
        <div class="blog-img">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php else : ?>

      <?php endif; ?>
        <div class="blog-summary">
          <div class="blog-title">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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

<div class="blog-pagination">
  <p class="pull-left"><?php previous_posts_link(__('« Newer Posts')); ?></p>
  <p class="center"><a href="<?php bloginfo('url') ?>/blog">back to index</a></p>
  <p class="pull-right"><?php next_posts_link(__('Older Posts »')); ?></p>
</div>

<?php get_footer(); ?>
