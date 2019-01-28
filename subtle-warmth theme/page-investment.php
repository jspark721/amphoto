<?php
/* Template Name: Investment Page Template */

get_header();
 ?>

 <div class="header page">
   <div class="header-titlebox">
     <p class="hidden">-</p>
     <h2 class="header-title"><?php echo get_the_title(); ?></h2>
   </div>
 </div>

 <section>
   <div class="page-main">
     <div class="page-container flex">
       <div class="investment-img"></div>
       <div class="about-desc">
         <br>
         <br>
         <br>
         <h3 class="cursive">Work with us!</h3>
         <br>
         <p>Thank you for taking time to look through my work. For investment details and availability, please contact me for a detailed pricing guide. Wedding packages begin at $2000.</p><br>
         <div class="align-right">
           <h3 class="cursive">Get in touch</h3><br>
           <a href="<?php bloginfo('url') ?>/contact"><button class="btn-main btn-light">inquire</button></a>
         </div>
       </div>
     </div>
   </div>
 </section>

 <?php get_footer(); ?>
