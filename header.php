<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php  the_title()  ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head() ?>
    </head>
    <body>
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
        <!-- to dynamically include menu, as below, however it is commented out for this exercise -->
        <!-- <?php 
          wp_nav_menu([
              'theme_location' => 'headerMenuLoc'   
                      ]);


        ?> -->
          <ul>
            <li
              <?php  if(is_page('about-us')) echo 'class="current-menu-item"'; ?>>
            <a href="<?php echo site_url('/about-us') ?>"> About Us</a></li>
            <li><a href="#">Nice Programs</a></li>
            <li <?php if(get_post_type()== 'event' OR is_page('past-events')) echo 'class="current-menu-item"'  ?>><a href="<?php echo site_url('/events')  ?>">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li <?php if(get_post_type()== 'post') echo 'class="current-menu-item"'  ?>><a href="<?php echo site_url('/blog')  ?>">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
     