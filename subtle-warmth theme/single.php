<?php
/* Single Post Blog Template File blog */

  get_header();
?>

<div class="gallery-page-container">
  <div class="gallery-page-title">
    <h1 class="cursive"><?php echo get_the_title(); ?></h1>
  </div>
  <div class="gallery-line"></div>
  <a class="gallery-link" href="<?php bloginfo('url') ?>/blog/">back to index</a>
</div>

    <?php
      // Start the loop
      if(have_posts()) {
        while(have_posts()) {
          the_post();
          the_content();
        }
      }
    ?>
  </div>
</div>

<?php get_footer(); ?>
