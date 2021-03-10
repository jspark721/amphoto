<?php
/*front page template*/
  get_header();
 ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&display=swap" rel="stylesheet">

  <div class="hero">
    <div class="overlay">
      <div id="title">
        <h1 class="title-h1">ariel min</h1>
        <h2 class="title-h2">photography</h2>
      </div>
    </div>
  </div>

  <div class="bio">
	  <h4><em>Southern California<br>Wedding and Editorial Photographer</em></h4>
	<img class="flower" src="<?php bloginfo('template_url') ?>/img/floral.png" />
    <h4><em>As seen on Style Me Pretty, Ruffled Blog, Once Wed,<br> Southern California Bride and more.</em></h4>
  </div>

  <div class="main">
	<a href="<?php bloginfo('url') ?>/about">
	  <img class="main-img" src="<?php bloginfo('template_url') ?>/img/home-ariel.jpg" /></a>
    <div>
      <h4 class="main-quote">I am a wedding photographer based in San Diego, CA.<br>I believe that what connects you and me - perfect strangers - are our stories.<br>We are more similar than not, yet no love is ordinary, and no story less unique.<br>That is my approach to every wedding.</h4>
	    <a href="<?php bloginfo('url') ?>/about"><button class="btn-main">meet Ariel</button></a>
    </div>
  </div>
  <div class="main-line"></div>

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
		<h3>“Ariel is honest and so incredibly down to earth - she made all of our family and friends at ease, just as much as us... this is how you know that she is a true professional and an expert of her craft.”<span> - Alyssa + Ben</span></h3>
      <div class="hr-line"></div>
      <div class="buttons">
        <a href="<?php bloginfo('url') ?>/contact"><button class="btn-main">Say hello</button></a>
      </div>
    </div>
  </div>



 <?php get_footer(); ?>
