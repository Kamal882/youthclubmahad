<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name ="viewport" content = "width=device-width">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url('')?>"><strong>Youth Club Mahad</strong> </a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul class="min-list group">
            <li><a href="<?php echo site_url('')?>">Home</a></li>
            <li><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
            <li><a href="<?php echo site_url('/gallery')?>">Gallery</a></li>
            <li><a href="<?php echo site_url('/raigad-pradikshana')?>">Raigad Pradikshana</a></li>
            <li><a href="<?php echo site_url('/other-treks')?>">Other Treks</a></li>
            <li><a href="<?php echo site_url('/contact-us')?>">Contact Us</a></li>
          </ul>
        </nav>
        <div class="site-header__util">

          <a href="<?php echo site_url('/become-member')?>" class="btn btn--small  btn--dark-orange float-left">Become Member</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
