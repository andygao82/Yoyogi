<?php
  /*
  Template Name: Home Page
  Description: A Home page template.
  */
?>
<?php get_header(); ?>
<div class="section banner-section">
  <div class="container">
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
    <div class="main inner-wrapper">
      <div class="main-content">
        <div class="main-content-logo"><img src="<?= get_template_directory_uri() . '/images/logo-01.svg'?>" alt="Yoyogi Sushi"></div>
        <div class="main-content-content"></div>
        <a href="javascript:void(0)" onclick="" class="link arrow-link">About Us</a>
      </div>
      <div class="main-image"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>