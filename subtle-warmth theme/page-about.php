<?php
/* Template Name: About Page Template */

get_header();
 ?>

 <div class="header page">
      <div class="header-titlebox">
        <p class="hidden">-</p>
        <h2 class="header-title">About</h2>
      </div>
    </div>
  </header>

  <section>
    <div class="page-main">
      <div class="page-container flex">
        <div class="about-img"></div>
        <div class="about-desc">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

 <?php get_footer(); ?>
