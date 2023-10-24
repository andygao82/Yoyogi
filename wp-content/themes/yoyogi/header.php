<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="<?= get_template_directory_uri() . '/js/in-view.min.js'?>"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="body">
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed radial-gradient">
<header id="header" role="banner">
  <div class="container">
    <div class="wrapper">
      <div class="main inner-wrapper">
        <div class="info">
          <span>269 Swanston St,<br> Melbourne VIC 3000</span> 
          <span class="divider">|</span>
          <span>MON - SUN<br> 9:00AM - 10:00PM</span>
        </div>
        <div class="links">
          <a class="social-media-link" href="https://www.instagram.com/yoyogi.sushi/" target="_blank">
            <img src="<?= get_template_directory_uri() . '/images/instagram.svg'?>" alt="Yoyogi Sushi"> 
          </a>
          <a class="social-media-link" href="https://www.facebook.com/profile.php?id=61552672014895
" target="_blank">
            <img src="<?= get_template_directory_uri() . '/images/facebook.svg'?>" alt="Yoyogi Sushi"> 
          </a>
          <a href="https://w.abacus.co/Store/5324528" class="link">Online Order</a>
        </div>
      </div>
      <div class="side menu-icon" id="menu-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
      </nav>
    </div>
  </div>
</header>
<div id="container">
<main id="content" role="main">