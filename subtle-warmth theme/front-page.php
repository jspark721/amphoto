<?php
/*front page template*/
  get_header();
 ?>

  <div class="hero">
    <div class="overlay">
      <div class="title">
        <h1>ariel min</h1>
        <h2>photography</h2>
      </div>
    </div>
  </div>

  <div class="bio">
    <h4><em>Wedding + Portrait Photographer</em></h4>
    <img class="flower" src="<?php bloginfo('template_url') ?>/img/floral.png" />
    <h4><em>Southern California + Texas</em></h4>
  </div>

  <div class="main">
    <h3 class="main-star">*</h3>
    <h4 class="main-quote"><em>I strive to capture genuine moments to tell your story. And I’ll always guide you to the best light.</em></h4>
    <h5>now booking for 2019</h5>
    <div class="main-line"></div>
  </div>

  <div class="section-container">
    <div class="section">
      <a href="<?php bloginfo('url') ?>/gallery/weddings">
        <div class="section-box">
          <div class="section-title">
            <h5><span>weddings</span></h5>
          </div>
          <img class="section-img" src="<?php bloginfo('template_url') ?>/img/weddings.jpg" />
        </div>
      </a>
      <a href="<?php bloginfo('url') ?>/gallery/engagements">
        <div class="section-box">
          <div class="section-title">
            <h5><span>engagements</span></h5>
          </div>
          <img class="section-img" src="<?php bloginfo('template_url') ?>/img/engagements.jpg" />
        </div>
      </a>
      <a href="<?php bloginfo('url') ?>/gallery/portraits">
        <div class="section-box">
          <div class="section-title">
            <h5><span>portraits</span></h5>
          </div>
          <img class="section-img" src="<?php bloginfo('template_url') ?>/img/portraits.jpg" />
        </div>
      </a>
    </div>
  </div>

  <div class="quote">
    <div class="overlay">
      <h3><span>inspired by natural light, colors<br>& your story.</span></h3>
      <div class="hr-line"></div>
      <div class="buttons">
        <a href="<?php bloginfo('url') ?>/about"><button class="btn-main">learn more</button></a>
        <a href="<?php bloginfo('url') ?>/contact"><button class="btn-main">get in touch</button></a>
      </div>
    </div>
  </div>



 <?php get_footer(); ?>
