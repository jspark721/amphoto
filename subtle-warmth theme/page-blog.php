<?php
/* Template Name: Blog Page Template */

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

 <div class="main-blog">
   <div class="blog-posts">
     <div class="blog-date"><h4><span>jan</span> 25</h4></div>
     <div class="blog-img">
       <img src="../public/img/gallery-main.jpg" />
     </div>
     <div class="blog-summary">
       <div class="blog-title">
         <h3><a>the blog title goes here</a></h3>
         <div class="line-break"></div>
       </div>
       <div class="blog-content">
         <p class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         <button class="btn-main btn-sm btn-light">read the post</button>
         <div class="blog-tags">
           <p>filed in:<a class="tags"> weddings</a></p>
         </div>
       </div>
     </div>
   </div>
   <div class="blog-break-line"></div>
 </div>



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
