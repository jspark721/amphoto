<?php
/* Template Name: Gallery Template */

get_header();
?>


<section>
    <div class="gallery-container">
      <div class="gallery-topleft">
        <h1 class="cursive">gallery</h1>
        <div class="gallery-line"></div>
        <p>browse the gallery <br>of my recent work</p>
        <i class="fas fa-angle-double-down"></i>
      </div>
      <div class="gallery-topright">
        <img src="<?php bloginfo('template_url') ?>/img/gallery-main.jpg" />
      </div>
    </div>
    <div class="gallery-list">
      <div class="gallery-quote">
        <h3 class="cursive">He first loved us</h3>
        <p>we love because</p>
      </div>
      <div class="gallery-columns">
        <a href="<?php bloginfo('url') ?>/gallery/weddings">
          <div class="gallery-item">
            <img class="gallery-img" src="<?php bloginfo('template_url') ?>/img/gallery1.jpg" />
            <h4 class="gallery-title cursive">weddings</h4>
          </div>
        </a>
        <a href="<?php bloginfo('url') ?>/gallery/engagements">
          <div class="gallery-item">
            <img class="gallery-img" src="<?php bloginfo('template_url') ?>/img/gallery2.jpg" />
            <h4 class="gallery-title cursive">engagements</h4>
          </div>
        </a>
        <a href="<?php bloginfo('url') ?>/gallery/portraits">
          <div class="gallery-item">
            <img class="gallery-img" src="<?php bloginfo('template_url') ?>/img/gallery3.jpg" />
            <h4 class="gallery-title cursive">portraits</h4>
          </div>
        </a>
        <a href="<?php bloginfo('url') ?>/gallery/other">
          <div class="gallery-item">
            <img class="gallery-img" src="<?php bloginfo('template_url') ?>/img/gallery4.jpg" />
            <h4 class="gallery-title cursive">other</h4>
          </div>
        </a>
      </div>
    </div>
    <div class="gallery-ctabox">
      <a href="<?php bloginfo('url') ?>/contact"><button class="btn-main btn-light">work with us</button></a>
    </div>
  </section>



<?php get_footer(); ?>
