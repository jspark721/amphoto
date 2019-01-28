<?php
/* Template Name: Default Page Template */

get_header();
 ?>

<div class="header page">
     <div class="header-titlebox">
       <p class="hidden">-</p>
       <h2 class="header-title"><?php echo get_the_title(); ?></h2>
     </div>
   </div>
 </header>

 <section>
   <div class="page-main">
     <div class="page-container">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
         the_content();
         endwhile; else: ?>
         <p>Sorry, no posts matched your criteria.</p>
         <?php endif; ?>
     </div>
   </div>
 </section>

 <?php get_footer(); ?>
