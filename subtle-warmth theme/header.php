<?php
  /* main header template */
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="topbar">
      <a href="https://arielminphotography.com"><img class="logo" src="<?php bloginfo('template_url') ?>/img/logo.png" alt="am logo"/></a>
        <?php
          wp_nav_menu( $arg = array (
            'menu_class' => 'navbar-full',
            'theme_location' => 'primary'
          ));
         ?>
    </div>
     <!--hamburger menu -->
     <div id="menu">
       <div class="bar top"></div>
       <div class="bar middle"></div>
       <div class="bar bottom"></div>
     </div>
     <nav class="navbar">
       <ul class="navbar">
         <li><a href="<?php bloginfo('url') ?>/">home</a></li>
         <li><a href="<?php bloginfo('url') ?>/about">about</a></li>
         <li><a href="<?php bloginfo('url') ?>/gallery">gallery</a></li>
         <li><a href="<?php bloginfo('url') ?>/investment">investment</a></li>
         <li><a href="<?php bloginfo('url') ?>/contact">contact</a></li>
         <!-- <li><a href="<?php bloginfo('url') ?>/blog">blog</a></li> -->
       </ul>
     </nav>
  </header>
