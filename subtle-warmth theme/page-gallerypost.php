<?php
/* Template Name: Gallery Single Post Template */

  get_header();
?>

<div class="gallery-page-container">
  <div class="gallery-page-title">
    <h1 class="cursive"><?php echo get_the_title(); ?></h1>
  </div>
  <div class="gallery-line"></div>
  <a class="gallery-link" href="<?php bloginfo('url') ?>/gallery">back to gallery</a>
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
  <div class="gallery-button">
<<<<<<< HEAD
    <a class="btn-main btn-sm btn-light" href="<?php bloginfo('url') ?>/gallery">back to gallery</a>
=======
    <a class="btn-main btn-sm btn-light" href="<?php bloginfo('url') ?>/gallery">back to top</a>
>>>>>>> 42d3effa0f86a1e487d1022528f04224bbc30b18
  </div>
</div>

<?php get_footer(); ?>
